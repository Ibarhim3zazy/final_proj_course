<?php require 'connection.php';
if (isset($_GET['email_ajax']) == true &&
    isset($_GET['pass_ajax']) == true) {
    $email= $_GET['email_ajax'];
    $password= $_GET['pass_ajax'];
    $f_name_i= $_GET['f_name_i'];
    $l_name_i= $_GET['l_name_i'];
    $i_mail= $_GET['i_mail'];
    $ph_input= $_GET['ph_i'];
    $gender_opt= $_GET['gender_opt'];
    $date_input= $_GET['date_input'];
    $result= $con->query("UPDATE register SET f_name='$f_name_i',l_name='$l_name_i',e_mail='$i_mail',phone_num='$ph_input',gender='$gender_opt',birthday='$date_input' WHERE e_mail='$email' AND pass= '$password' OR f_name= '$email' AND pass= '$password';");
  }
  else
    echo "fail";
 ?>
