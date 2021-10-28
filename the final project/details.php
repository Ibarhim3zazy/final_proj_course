<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="css/details.css">
    <script src="js/info_details.js"></script>
</head>
<body>
    <?php require("header.php") ?>;
    <div class="det_container">
        <h3 class="det_header">Details</h3>
        <form method="post" action="details.php">
          <?php
          if (isset($_SESSION['email']) == true &&
              isset($_SESSION['pass']) == true) {
            if (isset($_POST['f_name_i']) == true){
              $f_name_i= $_POST['f_name_i'];
              $l_name_i= $_POST['l_name_i'];
              $i_mail= $_POST['i_mail'];
              $ph_input= $_POST['ph_i'];
              $gender_opt= $_POST['gender_opt'];
              $date_input= $_POST['date_i'];
              $con->query("UPDATE register SET f_name='$f_name_input',l_name='$l_name_input',e_mail='$e_input',phone_num='$ph_input',gender='$gender_opt',birthday='$date_input' WHERE product_id='$i' AND user_id='$ui'");
            };
            $email= $_SESSION['email'];
            $password= $_SESSION['pass'];
          $r= $con->query("SELECT * FROM register WHERE e_mail='$email' AND pass= '$password' OR f_name= '$email' AND pass= '$password';");
            if ($x = $r-> fetch_assoc()){
              echo $x['gender'];
              if($x['gender'] == 'Male'){
                $m='selected';
                $f='';}
              if($x['gender'] == 'Female'){
                $f='selected';
                $m='';}

            echo '
            <div class="f_name_box">
                <div class="f_name">First Name</div>
                <br>
                <input value="'.$x['f_name'].'" type="text" id="f_name_input" onkeyup="f_name()"class="f_name_input" name="f_name_i">
            </div>
            <div class="l_name_box">
                <div class="l_name">Last Name</div>
                <br>
                <input value="'.$x['l_name'].'" type="text" id="l_name_input" onkeyup="l_name()"class="l_name_input" name="l_name_i">
            </div>
            <div class="e_box">
                <div class="email">E-mail</div>
                <br>
                <input name="i_mail" value="'.$x['e_mail'].'" type="email" id="e_input" onkeyup="e_regular()" class="e_input">
            </div>
            <div class="pre_box">
                <div class="prefix">Prefix</div>
                <br>
                <div class="c_key">+20</div>
            </div>
            <div class="ph_box">
                <div class="phone">Phone Number(Optional)</div>
                <input value="'.$x['phone_num'].'" type="number" id="ph_input" onkeyup="ph_num()"class="ph_input" name="ph_i">
            </div>
            <div class="gender_box">
                <div class="gender">Gender</div>
                <br>
                <select name="gender_opt" id="" class="gender_opt">
                    <option value="Please Select">Please Select</option>
                    <option '.$m.'>Male</option>
                    <option '.$f.'>Female</option>
                </select>
            </div>
            <div class="birth_box">
                <div class="birth">Birthday(optional)</div>
                <br>
                <input value="'.$x['birthday'].'" type="date" name="date_input" class="date_input">
            </div>';
          }}
           ?>

            <input type="submit" value="SAVE" onclick="info_details_s()" class="save_btn">
        </form>
        <br style=" clear: both;">
    </div>
    <div class="container">
      <div class="container_header">
        <h2>Top Sales</h2><a href="#">See All &#10095;</a>
      </div>
     <div class="products">
       <img src="img/prod4.jpg" alt="prod">
       <span>item1</span>
       <h3>EGP 600</h3>
       <h4>EGP 400</h4>
     </div>
     <div class="products">
       <img src="img/prod4.jpg" alt="prod">
       <span>item1</span>
       <h3>EGP 600</h3>
       <h4>EGP 400</h4>
     </div>
     <div class="products">
       <img src="img/prod4.jpg" alt="prod">
       <span>item1</span>
       <h3>EGP 600</h3>
       <h4>EGP 400</h4>
     </div>
     <div class="products">
       <img src="img/prod4.jpg" alt="prod">
       <span>item1</span>
       <h3>EGP 600</h3>
       <h4>EGP 400</h4>
     </div>
     <div class="products">
       <img src="img/prod4.jpg" alt="prod">
       <span>item1</span>
       <h3>EGP 600</h3>
       <h4>EGP 400</h4>
     </div>
     <br style=" clear: both;">
    </div>
    <?php require("footer.php") ?>
</body>
</html>
