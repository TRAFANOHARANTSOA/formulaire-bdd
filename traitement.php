<?php include 'header.php' ?>
<?php
$errors =[];
require('model.php'); //récupère la page model.php

if(isset($_POST['email']) && isset($_POST['password'])) {
  $email=$_POST['email'];
  $password= $_POST['password'];
  $connexionresult = connectUser($email, $password);
  if($connexionresult == 'connexion ok'){
  header('Location:backoffice.php');
}
}

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordconfirm'])) {
  if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordconfirm'])) {

    $email=$_POST['email'];
    $password= $_POST['password'];
    $passwordConfirm=$_POST['passwordconfirm'];
    $email=check($email);
    $password=check($password);
    $passwordConfirm=check($passwordConfirm);


    $checkemail=emailVerif($email);
    $checkpassword=ckeckPassword($password, $passwordConfirm);

    if($checkemail == 1 && $checkpassword == 1){
      $result=insertUser($email, $password);
      if($result == 'ok'){
         echo "New record created successfully";
        header('Location:userconnexion.php');
      } else{
        $_SESSION ['errors'] = "Request not execute, please try aigain";
        header('Location:registration.php');
      }
      header('Location:userconnexion.php');
    } else{

      $errors =[$checkemail, $checkpassword];
      $_SESSION ['errors'] = $errors;
      header('Location:registration.php');
    }

  }
}

function emailVerif($email) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($email)<=50){
return 1;
  }
  else{
    return "Email non conforme";
  }
}

function ckeckPassword($password, $passwordConfirm){
if(preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/', $password) && $password == $passwordConfirm){
return  "1";
} else{
    return "Mot de passe  non conforme";
}
}

function check($input) {
trim($input);
stripslashes($input);
htmlspecialchars($input);
return $input;
}
 ?>
<?php include 'footer.php' ?>
