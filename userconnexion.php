<?php include 'header.php' ?>



<form  action="traitement.php" method="POST" id="iduserconnexion">

  <div class="form-group ml-5 mr-5 mt-5">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name ="email" class="form-control" id=""  placeholder="Enter email" required>
  </div>
  <div class="form-group ml-5 mr-5 mt-5">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="" placeholder="Password" required>
  </div>

  <button type="submit" class="btn btn-primary ml-5 mr-5 mt-5">Envoyer</button>
</form>






<?php include 'footer.php' ?>
