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
  <div class="sucess">
    Edited successfully
  </div>
    <?php require("header.php") ?>;
    <div class="det_container">
        <h3 class="det_header">Details</h3>
        <div id="cont">
          <?php
          if (isset($_SESSION['email']) == true &&
              isset($_SESSION['pass']) == true) {
            $email= $_SESSION['email'];
            $password= $_SESSION['pass'];
          $r= $con->query("SELECT * FROM register WHERE e_mail='$email' AND pass= '$password' OR f_name= '$email' AND pass= '$password';");
            if ($x = $r-> fetch_assoc()){
              if($x['gender'] == 'Male'){
                $m='selected';
                $f='';}
              if($x['gender'] == 'Female'){
                $f='selected';
                $m='';}
            echo '
            <input type="hidden" id="email_ajax" value="'.$email.'">
            <input type="hidden" id="pass_ajax" value="'.$password.'">
              
            <div class="f_name_box">
                <div class="f_name">First Name</div>
                <br>
                <input value="'.$x['f_name'].'" type="text" id="f_name_input" onkeyup="f_name()"class="f_name_input">
            </div>
            <div class="l_name_box">
                <div class="l_name">Last Name</div>
                <br>
                <input value="'.$x['l_name'].'" type="text" id="l_name_input" onkeyup="l_name()"class="l_name_input">
            </div>
            <div class="e_box">
                <div class="email">E-mail</div>
                <br>
                <input name="" value="'.$x['e_mail'].'" type="email" id="e_input" onkeyup="e_regular()" class="e_input">
            </div>
            <div class="pre_box">
                <div class="prefix">Prefix</div>
                <br>
                <div class="c_key">+20</div>
            </div>
            <div class="ph_box">
                <div class="phone">Phone Number(Optional)</div>
                <input value="'.$x['phone_num'].'" type="number" id="ph_input" onkeyup="ph_num()"class="ph_input">
            </div>
            <div class="gender_box">
                <div class="gender">Gender</div>
                <br>
                <select id="gender_opt" class="gender_opt">
                    <option value="Please Select">Please Select</option>
                    <option '.$m.'>Male</option>
                    <option '.$f.'>Female</option>
                </select>
            </div>
            <div class="birth_box">
                <div class="birth">Birthday(optional)</div>
                <br>
                <input value="'.$x['birthday'].'" type="date" id="date_input" class="date_input">
            </div>';
          }}
           ?>

            <input type="button" value="SAVE" onclick="info_details_s(), sucess(), update()" class="save_btn">
        </div>
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
