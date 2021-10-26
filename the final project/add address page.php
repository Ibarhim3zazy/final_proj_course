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
    <div class="add_adrs_container">
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
        <div class="fr_name_box">
            <div class="fr_name">
                First Name
            </div>
            <input type="text" id="fr_name_input" class="fr_name_input inputs" onkeyup="fr_name_input()">
        </div>
        <div class="la_name_box">
            <div class="la_name">
                Last Name
            </div>
            <input type="text" id="la_name_input" class="la_name_input inputs" onkeyup="la_name_input()">
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
            <input type="tell" id="ph_num_input" class="ph_num_input inputs" onkeyup="ph_num_input()">
        </div>
        <div class="prefx_adtion">
            <div class="pre_adtion">
                Prefix
            </div>
            <div class="pre_num_adtion">
                +20
            </div>
        </div>
        <div class="ph_num_adtion">
            <input type="tell" placeholder="Additional Phone Number" id="ph_num_adtion_input" class="ph_num_adtion_input inputs" onkeyup="ph_num_adtion_input()">
        </div>
        <div class="adrs_box">
            <input type="text" placeholder="Address" class="adrs_input inputs">
        </div>
        <div class="adtion_info">
            <input type="text" placeholder="Additional Information" class="adtion_info_input inputs">
        </div>
        <div class="region_box">
            <div class="reg_title">
                Region
            </div>
            <select name="" id="select" class="inputs">
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
            <select name="" id="city_select" class="inputs">
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
        </div>
        <input type="submit" value="SAVE" class="add_adrs_save_btn">
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
