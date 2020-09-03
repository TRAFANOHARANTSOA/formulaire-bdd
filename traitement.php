<?php session_start(); ?>
<?php
$errors =[];

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

    if($checkemail == true && $checkpassword == true){
        //header('Location:index.php');
        echo "ok";


      //hachage mdp
      // insertion bdd
    } else{

      $errors =[$checkemail, $checkpassword];
      $_SESSION ['errors'] = $errors;
      //header('Location:registration.php');
    }

  }
}

function emailVerif($email) {
  if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($email)<=50){
return true;
  }
  else{
    return "Email non conforme";
  }
}


function ckeckPassword($password, $passwordConfirm){
if(preg_match('/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/', $password) && $password == $passwordConfirm){
return  true;
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