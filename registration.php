<?php include 'header.php' ?>
<?php if(isset($_SESSION['errors'])) {

  $errors=$_SESSION['errors'];

  foreach($_SESSION['errors'] as $value)

echo '<p>'.$value .'</p>';


}?>


<form action="traitement.php" method='POST' id="idform" onsubmit=" return validateregistration()">
  <div class="form-group ml-5 mr-5 mt-5">
    <label for="email">Email address</label>
    <input type="text" name="email" class="form-control" id="email" value="" placeholder="Enter email" required>
  </div>
  <div class="form-group ml-5 mr-5 mt-5">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="" required>
  </div>
  <div class="form-group ml-5 mr-5 mt-5">
    <label for="passwordconfirm">Confirm password</label>
    <input type="password" name="passwordconfirm" class="form-control" id="passwordconfirm" placeholder="Password" value="" required>
  </div>

  <button type="submit" class="btn btn-primary ml-5 mr-5 mt-5" id="registrationbtn" disabled> Send </button>
</form>


<?php include 'footer.php' ?>
