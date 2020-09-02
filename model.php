<?php include 'header.php' ?>
<?php include 'connexion.php' ?>

<?php

$query="CREATE TABLE IF NOT EXISTS `test`.`user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `mail` VARCHAR(255) NOT NULL ,
  `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;)";

$myquery=$conn->prepare($query);
$myquery->execute();
$myquery->closeCursor();

 ?>






 
<?php include 'footer.php' ?>
