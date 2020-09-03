<?php include 'header.php' ?>

<?php if(isset($_SESSION['errors'])) {
  $errors=[];
  $errors=$_SESSION['errors'];

  foreach($_SESSION['errors'] as $value)

echo '<p>'.$value .'</p>';


}?>
<form name="form1" method="get" action="registration.php">
  <div class="form-group ml-5 mt-5">

    <input type="submit" name="Inscription" value="Registration">
  </div>
</form>
<form name="form1" method="get" action="userconnexion.php">
  <div class="form-group ml-5 mt-5">

    <input type="submit" name="connexion" value="Connexion">
  </div>
</form>

<div class="">

</div>





<?php include 'footer.php' ?>
