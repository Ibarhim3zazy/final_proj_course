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
            <div class="account_name">Mohamed Fathy</div>
            <div class="email">mf54768@gmail.com</div>
            <div class="change_pass">
                <a href="change password page.php"   target="_blank">
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
                <a href="#">
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
     <div style=" clear: both;"></div>
    </div>

    <?php require("footer.php") ?>
</body>
</html>
