<?php include 'header.php' ?>
<?php include 'connexion.php' ?>


<form action="registration.php" method='GET'>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" value="" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="" required>
  </div>
  <div class="form-group">
    <label for="passwordconfirm">Confirm password</label>
    <input type="password" name="passwordconfirm" class="form-control" id="passwordconfirm" placeholder="Password" value="" required>
  </div>

  <button type="submit" class="btn btn-primary" id="registrationbtn" disabled> Send </button>
</form>







<?php include 'footer.php' ?>
