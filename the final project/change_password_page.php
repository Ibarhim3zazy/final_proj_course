<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="css/change_password.css">
    <script src="js/reset_pass.js"></script>
</head>
<body>
    <?php require("header.php")?>;
    <div class="ch_pass_container">
        <div class="ch_header">
            <h3>Change Password</h3>
        </div>
        <form action="#">
            <input type="password" class="cur_pass" placeholder="Currunt Password">
            <input type="password" class="n_pass" id="n_pass" onkeyup="new_pass()" placeholder="New Password">
            <input type="password" class="re_n_pass" id="re_n_pass" onkeyup="confirm_pass()" placeholder="Retype New Password">
            <input type="submit" class="sub_btn" onclick="sub_btn()" value="SUBMIT">
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
    <?php require("footer.php")?>
</body>
</html>
