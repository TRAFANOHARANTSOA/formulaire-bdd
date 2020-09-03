
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



?>
<?php

$query="CREATE TABLE IF NOT EXISTS `test`.`user` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `mail` VARCHAR(50) NOT NULL ,
  `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;)";

$myquery=$conn->prepare($query);
$myquery->execute();
$myquery->closeCursor();
 ?>
