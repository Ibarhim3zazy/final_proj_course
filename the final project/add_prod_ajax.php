<?php session_start();
      require 'connection.php';
if (isset($_SESSION['email']) == true &&
    isset($_SESSION['pass']) == true) {
  $email= $_SESSION['email'];
  $password= $_SESSION['pass'];
  $pid= $_GET['prod_id'];
  $unit_p= $_GET['uprice'];
$r= $con->query("SELECT * FROM register WHERE e_mail='$email' AND pass= '$password' OR f_name= '$email' AND pass= '$password';");
  if ($x = $r-> fetch_assoc())
  $user_id= $x['id'];
  $con->query("INSERT INTO user_order VALUES(NULL, '$pid', '$unit_p', '$user_id');");
};
 ?>
