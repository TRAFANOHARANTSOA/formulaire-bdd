
<?php
$servername = "localhost";
$dbname = "test";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
  die('erreur:' . $e->getmessage());
}


$query="CREATE TABLE IF NOT EXISTS `test`.`user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `mail` VARCHAR(50) NOT NULL ,
  `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;)";

$myquery=$conn->prepare($query);
$myquery->execute();
$myquery->closeCursor();




function insertUser($email, $password){
  $servername = "localhost";
  $dbname = "test";
  $username = "root";
  $password = "";
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

  $emailresult = emailExist($email);
  if($emailresult == 'Email not existing'){
    $query="INSERT INTO user (mail, password)
    VALUES (:mail, :password)";
    $password= password_hash($password, PASSWORD_DEFAULT); // hashage
    $arrayValue = [
      ':mail'=> $email,
      ':password'=> $password,
    ];

    $myquery=$conn->prepare($query);

    if($myquery->execute($arrayValue)){
      return "ok";
    }else {
      return 'Email existing, please connect';
    }
  }
}




  function emailExist($email){
    $servername = "localhost";
    $dbname = "test";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $query = "SELECT `mail` FROM `user`";
    $myquery = $conn->prepare($query);
    $myquery->execute();

    while($datas = $myquery->fetch()){
      if($datas['mail'] == $email){
        return 'Email already exist, please connect.';
      }else{
        return 'Email not existing';
      }
      $myquery->closeCursor();
    }
}


function connectUser($email, $password){
  $servername = "localhost";
  $dbname = "test";
  $username = "root";
  $password = "";


    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $query = "SELECT `password` FROM `user` WHERE `mail`=:mail";
    $myquery=$conn->prepare($query);
    $arrayValue = [
      ':mail'=>$email,
    ];


  if($myquery->execute($arrayValue)){
    $datas = $myquery -> fetch();
   if(password_verify ($password, $datas['password'])){
     return 'connexion ok';
   } else {
     return 'password incorrect';
   }                                                                                                       
   $myquery->closeCursor();
    }
  }
?>
