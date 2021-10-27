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
        <form action="#">
            <div class="f_name_box">
                <div class="f_name">First Name</div>
                <br>
                <input type="text" id="f_name_input" onkeyup="f_name()" class="f_name_input">
            </div>
            <div class="l_name_box">
                <div class="l_name">Last Name</div>
                <br>
                <input type="text" id="l_name_input" onkeyup="l_name()" class="l_name_input">
            </div>
            <div class="e_box">
                <div class="email">E-mail</div>
                <br>
                <input type="email" id="e_input" onkeyup="e_regular()" class="e_input">
            </div>
            <div class="pre_box">
                <div class="prefix">Prefix</div>
                <br>
                <div class="c_key">+20</div>
            </div>
            <div class="ph_box">
                <div class="phone">Phone Number(Optional)</div>
                <input type="number" id="ph_input" onkeyup="ph_num()" class="ph_input">
            </div>
            <div class="gender_box">
                <div class="gender">Gender</div>
                <br>
                <select name="" id="" class="gender_opt">
                    <option value="Please Select">Please Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="birth_box">
                <div class="birth">Birthday(optional)</div>
                <br>
                <input type="date" class="date_input">
            </div>
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
