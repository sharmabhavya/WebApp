<?php
$username=""; // Mysql username
$password=""; // Mysql password
$u="bsharma1@student.gsu.edu"
$p="1234"

// Define $myusername and $mypassword
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

if ((strcmp($myusername, $u) == 0) && (strcmp($mypassword, $p) == 0)) {
  echo "Login Successful!";
}else{
  echo "Incorrect Credentials";
}

?>
