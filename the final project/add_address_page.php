<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Adddess</title>
    <link rel="stylesheet" href="css/add address page.css">
    <script type="text/javascript" src="add_address_page.js"></script>
</head>

<body>
    <?php require("header.php") ?>;
    <form class="add_adrs_container" method="POST" action="add_address_page.php">
        <div class="add_adrs_header">
            <div class="back_sign">
                <a href="#">
                    <img src="img/back sign.png" alt="" width="40px" height="35px">
                </a>
            </div>
            <div class="head">
                <h3>
                    Add New Address
                </h3>
            </div>
        </div>
        <?php
            if (isset($_SESSION['email']) == true &&
                isset($_SESSION['pass']) == true){
            $email = $_SESSION['email'];
            $password = $_SESSION['pass'];
            $r = $con->query("SELECT * FROM register WHERE e_mail='$email' AND pass= '$password' OR f_name= '$email' AND pass= '$password';");
            if ($x = $r->fetch_assoc()) {
              $ui= $x['id'];
                echo '
                <div class="fr_name_box">
                    <div class="fr_name">
                        First Name
                    </div>
                    <input value="'.$x['f_name'].'" type="text" id="fr_name_input" class="fr_name_input inputs" onkeyup="fr_name_input()" name="fr_name_i">
                </div>
                <div class="la_name_box">
                    <div class="la_name">
                        Last Name
                    </div>
                    <input value="'.$x['l_name'].'" type="text" id="la_name_input" class="la_name_input inputs" onkeyup="la_name_input()" name="la_name_i">
                </div>
                <div class="prefx">
                    <div class="pre">
                        Prefix
                    </div>
                    <div class="pre_num">
                        +20
                    </div>
                </div>
                <div class="ph_num">
                    <div class="ph_title">
                        Phone Number
                    </div>
                    <input value="'.$x['phone_num'].'" type="tell" id="ph_num_input" class="ph_num_input inputs" onkeyup="ph_num_input()" name="phone">
                </div>';
                if (isset($_POST['fr_name_i'])) {
                  $f_name= $_POST['fr_name_i'];
                  $l_name= $_POST['la_name_i'];
                  $ph= $_POST['phone'];
                  $ph_ad= $_POST['phone_adtion'];
                  $address= $_POST['address'];
                  $ad_info= $_POST['ad_info'];
                  $region= $_POST['s_region'];
                  $city= $_POST['city_select'];
                  $r00= $con->query("SELECT * FROM add_address_page WHERE user_id='$ui'");
                  if ($con-> affected_rows > 0)
                    $con->query("UPDATE add_address_page, user_order SET add_address_page.phone_num_2='$ph_ad',add_address_page.address='$address',add_address_page.additional_info='$ad_info',add_address_page.region='$region',add_address_page.city='$city',register.f_name='$f_name',register.l_name='$l_name',register.phone_num='$ph' WHERE add_address_page.user_id='$ui' AND register.id='$ui'");
                  else
                  $con->query("INSERT INTO add_address_page VALUES(NULL, '$ui', '$ph_ad', '$address', '$ad_info' , '$region' , '$city');");
                }
        }
        $r11 = $con->query("SELECT * FROM add_address_page WHERE user_id='$ui';");
        if ($x11 = $r11->fetch_assoc()) {
          echo '
          <div class="prefx_adtion">
          <div class="pre_adtion">
              Prefix
          </div>
          <div class="pre_num_adtion">
              +20
          </div>
      </div>
      <div class="ph_num_adtion">
          <input type="tell" value="'.$x11['phone_num_2'].'" placeholder="Additional Phone Number" id="ph_num_adtion_input" class="ph_num_adtion_input inputs" onkeyup="ph_num_adtion_input()" name="phone_adtion">
      </div>
      <div class="adrs_box">
          <input type="text" value="'.$x11['address'].'" name="address" placeholder="Address" class="adrs_input inputs">
      </div>
      <div class="adtion_info">
          <input name="ad_info" value="'.$x11['additional_info'].'" type="text" placeholder="Additional Information" class="adtion_info_input inputs">
      </div>
      <div class="region_box">
          <div class="reg_title">
              Region
          </div>
          <select name="s_region" id="select" class="inputs">
              <option value="">Cairo</option>
              <option value="">Sharqia</option>
              <option value="">Daqahlia</option>
              <option value="">Kafr Alsheikh</option>
              <option value="">Nasr City</option>
              <option value="">Beherah</option>
              <option value="">Asiut</option>
              <option value="">Jiza</option>
              <option value="">Damita</option>
              <option value="">Alexandria</option>
          </select>
      </div>
      <div class="city_box">
          <div class="city_box_title">
              City
          </div>
          <select name="city_select" id="city_select" class="inputs">
              <option value="">Zagazig</option>
              <option value="">Mansoura</option>
              <option value="">Brlbis</option>
              <option value="">Kafr Saqr</option>
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
          </select>
      </div>';
      }}
    ?>
        <input type="submit" value="SAVE" class="add_adrs_save_btn">
    </form>
    <div class="container">
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
