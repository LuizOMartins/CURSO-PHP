<?php 


foreach(PDO::getAvailableDrivers() as $driver) {
  echo $driver;
  echo "<br/>";
}
 ?>