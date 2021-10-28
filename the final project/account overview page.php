<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account OverView</title>
    <link rel="stylesheet" href="css/account overview.css">
    <link href="css/all.css" rel="stylesheet">
</head>
<body>
    <?php require("header.php") ?>;
    <div class="overview_container">
        <div class="overview_header">
            <h3>Account Overview</h3>
        </div>
        <div class="account_det">
            <div class="account_det_header">ACCOUNT DETAILS</div>
            <div class="edit_sign">
              <a href="details.php">
              <i class="fas fa-edit"></i></a>
            </div>
            <?php
            if (isset($_SESSION['email']) == true &&
                isset($_SESSION['pass']) == true) {
              $email= $_SESSION['email'];
              $password= $_SESSION['pass'];
            $r= $con->query("SELECT * FROM register WHERE e_mail='$email' AND pass= '$password' OR f_name= '$email' AND pass= '$password';");
              if ($x = $r-> fetch_assoc()){
              echo '
                <div class="account_name">'.$x['f_name'].' '.$x['l_name'].'</div>
                <div class="email">'.$email.'</div>';
              }};
             ?>
            <div class="change_pass">
                <a href="change_password_page.php">
                    CHANGE PASSWORD
                </a>
            </div>
        </div>
        <div class="address">
            <div class="adrs_header">ADDRESS BOOK</div>
            <div class="explain_1">
                Your default shipping address:
            </div>
            <div class="explain_2">
                No default shipping address available.
            </div>
            <div class="adrs_footer">
                <a href="add_address_page.php">
                    ADD DEFAULT ADDRESS
                </a>
            </div>
        </div>
        <div class="news_letter">
            <div class="news_header">NEWSLETTER PEFERENCES</div>
            <div class="edit_sign">
                <a href="newsletter page.php">
                  <i class="fas fa-edit"></i>
                </a>
            </div>
            <div class="explanation">
                You are curruntly subscribed to following newsletters:
            </div>
            <div class="check">
                <div class="right">
                    <img src="img/right-sign.png" width="15px" height="15px" alt="">
                </div>
                <div class="ex_right">daily newsletters</div>
            </div>
        </div>
        <br style=" clear: both;">

    </div>
    <div class="container">
      <div class="container_header">
        <h2>Top Sales</h2><a href="#">See All &#10095;</a>
      </div>
      <?php
      $r= $con->query("SELECT * FROM user_order WHERE prod_id");
      while ($x = $r-> fetch_assoc()){
        $prod_id= $x['prod_id'];
        $r_show= $con->query("SELECT * FROM add_prod_page WHERE id= '$prod_id' limit 5;");
        while ($x0 = $r_show-> fetch_assoc()){
          if ($x0['price_sale'] > 0)
          $u= $x0['price_sale'];
           else {
             $u= $x0['price'];
           };
          echo '
          <div class="products">
            <img src="'.$x0['prod_image'].'" alt="prod">
            <span>'.$x0['prod_name'].'</span>
            <h3>'.$u.'</h3>
            <input type="hidden" id="'.$x0['id'].'id" value="'.$x0['id'].'">
          </div>';
        }
        };
      ?>
     <div style=" clear: both;"></div>
    </div>

    <?php require("footer.php") ?>
</body>
</html>
