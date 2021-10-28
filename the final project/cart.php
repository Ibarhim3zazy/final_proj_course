<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/cart.css">
    <script type="text/javascript" src="js/home.js"></script>
  </head>
  <body>
    <?php   require_once("connection.php");
            require 'header.php';
            $ui='1';
            if (isset($_SESSION['email']) == true) {
              $email= $_SESSION['email'];
              $password= $_SESSION['pass'];
              $sn= $con->query("SELECT * FROM register WHERE e_mail='$email' AND pass= '$password' OR f_name= '$email' AND pass= '$password';");
                if ($s1 = $sn-> fetch_assoc()){
                  $ui= $s1['id'];
                }}
    ?>
    <section>
      <h2>Cart (<span><?php $con->query("SELECT * FROM user_order WHERE user_id='$ui'");  echo $con-> affected_rows; ?></span> item)</h2>
      <table class="content">
        <tr>
          <th>ITEM</th>
          <th>Name</th>
          <th>UNIT PRICE</th>
          <th></th>
        </tr>
      <?php
      $s=0;
          $r= $con->query("SELECT * FROM user_order WHERE user_id='$ui'");
          $r2= $con->query("SELECT * FROM add_prod_page,user_order WHERE user_order.user_id='$ui' AND user_order.product_id=products.id");
          while ($x = $r-> fetch_assoc()){
            $x2 = $r2-> fetch_assoc();
            if ($x2['price_sale'] > 0)
              $p = $x2['price_sale'];
            else
                $p = $x2['price'];
          echo '
            <tr>
              <td><img src="'.$x2['prod_image'].'" alt="item added"></td>
              <td>'.$x2['prod_name'].'</td>
              <td><span>EGP </span><span>'.$p.'</span></td>
              <td>
                <form class="delete_c" method="post">
                 <input class="login_text" type="hidden" name="id" value="'.$x['prod_id	'].'">
                 <input type="submit" class="delete" value="Delete">
                </form>
              </td>
            </tr>';
            $s+=($x['quantity']*$p);};
      ?>
    </table>
    </section>
    <div class="total">
      Total:	EGP <span><?php echo $s; ?></span>
    </div>
    <div class="container">
      <a href="error404.php"><input class="end" type="button" name="" value="CONTINUE TO CHECKOUT"></a>
      <a href="index.php"><input class="end" type="button" name="" value="CONTINUE SHOPPING"></a>
    </div>
  </body>
</html>
