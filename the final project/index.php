<!DOCTYPE html>
<html>
<head>
 <meta charset = "utf-8">
    <meta name = "description" content = "welcome to my website">
    <meta name = "viewport" content = "width=device-width,intial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
   </head>
  <body>
  <?php
    include('slideshow.php');
    include('header.php');	?>
    <div class="container">
    <h2>Top selling items</h2>
    <?php
    $r= $con->query("SELECT * FROM user_order WHERE prod_id LIMIT 5");
    while ($x = $r-> fetch_assoc()){
      $prod_id= $x['prod_id'];
      $r_show= $con->query("SELECT * FROM add_prod_page WHERE id= '$prod_id';");
      while ($x0 = $r_show-> fetch_assoc()){
        if ($x0['price_sale'] > 0)
        $u= $x0['price_sale'];
         else {
           $u= $x0['price'];
         };
        echo '
        <a href="prod_daitals.php?pro_datails='.$x0['id'].'" class="products">
          <img src="'.$x0['prod_image'].'" alt="prod">
          <span>'.$x0['prod_name'].'</span>
          <h3>'.$u.'</h3>
          <input type="hidden" id="'.$x0['id'].'id" value="'.$x0['id'].'">
        </a>';
      }
      };
    ?>
    <br style="clear: both;">
    </div>
    <div class="ads">
     <input type="button" value="x">
     ADS
    </div>
    <div class="container">
      <div class="container_header red">
        <h2>Flash Sales Every day</h2><a href="#">See All &#10095;</a>
      </div>
      <?php
        $r_show= $con->query("SELECT * FROM add_prod_page limit 5;");
        while ($x1 = $r_show-> fetch_assoc()){
          echo '
          <a href="prod_daitals.php?pro_datails='.$x1['id'].'" class="products">
            <img src="'.$x1['prod_image'].'" alt="prod">
            <span>'.$x1['prod_name'].'</span>
            <h3>'.$x1['price'].'</h3>
            <h4>'.$x1['price_sale'].'</h4>
          </a>';
        };
      ?>
     <br style="clear: both;">
    </div>
    <div class="container">
      <div class="container_header">
        <h2>New On <b style="font-size: 25px;">e</b> Store</h2><a href="#">See All &#10095;</a>
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
     <br style="clear: both;">
    </div>
    <div class="container">
      <div class="container_header">
        <h2>Recently viewed items</h2><a href="#">See All &#10095;</a>
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
     <br style="clear: both;">
    </div>
    <?php require 'footer.php'; ?>
  </body>
  </html>
