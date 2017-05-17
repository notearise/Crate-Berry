<?php
// $dbhost = "localhost";
// $dbuser = "crateberry";
// $dbname = "crateberry";
// $dbpass = "B1@thering!";
// mysqli_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server');
// mysqli_select_db($dbname) or die('database selection problem');

$timezone = date_default_timezone_set("America/New_York");

$con = mysqli_connect("localhost","crateberry","B1@thering!","crateberry"); // Connection variable

if(mysqli_connect_errno()) {
  echo "Failed to connect: " . mysqli_connect_errno();
}

?>
