<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <link rel="stylesheet" href="css/addproduct.css">
  <link href="css/all.css" rel="stylesheet">
</head>
<body>
  <?php require("header.php")?>
  <?php
  if (isset($_SESSION['email']) == true &&
      isset($_SESSION['pass']) == true) {
    $email= $_SESSION['email'];
    $password= $_SESSION['pass'];
  $r= $con->query("SELECT * FROM register WHERE e_mail='$email' AND pass= '$password' OR f_name= '$email' AND pass= '$password';");
    if ($x = $r-> fetch_assoc()){
      $ui= $x['id'];
    }}
  if (isset($_FILES['pro_image0']['name']) == true &&
      isset($_FILES['pro_image1']['name']) == true &&
      isset($_FILES['pro_image2']['name']) == true &&
      isset($_FILES['pro_image3']['name']) == true &&
      isset($_POST['pro_name_input']) == true &&
      isset($_POST['cat_options']) == true &&
      isset($_POST['brand_options']) == true &&
      isset($_POST['desc']) == true &&
      isset($_POST['price_input']) == true &&
      isset($_POST['sp_input']) == true &&
      isset($_POST['size_select']) == true &&
      isset($_POST['date_input']) == true){
      $prod_name= $_POST['pro_name_input'];
      $category= $_POST['cat_options'];
      $brand= $_POST['brand_options'];
      $description= $_POST['desc'];
      $price= $_POST['price_input'];
      $price_sale= $_POST['price_sale_input'];
      $sp= $_POST['sp_input'];
      $prod_size= $_POST['size_select'];
      $date= $_POST['date_input'];
      $i0= $_FILES['pro_image0']['name'];
      $i1= $_FILES['pro_image1']['name'];
      $i2= $_FILES['pro_image2']['name'];
      $i3= $_FILES['pro_image3']['name'];
      $result0= move_uploaded_file($_FILES['pro_image0']['tmp_name'], 'img/'.$_FILES['pro_image0']['name']);
      $result1= move_uploaded_file($_FILES['pro_image1']['tmp_name'], 'img/'.$_FILES['pro_image1']['name']);
      $result2= move_uploaded_file($_FILES['pro_image2']['tmp_name'], 'img/'.$_FILES['pro_image2']['name']);
      $result3= move_uploaded_file($_FILES['pro_image3']['tmp_name'], 'img/'.$_FILES['pro_image3']['name']);
      $result= $con->query("INSERT INTO add_prod_page VALUES(NULL, '$ui', '$prod_name', '$category', '$brand', '$description' , '$price' , '$price_sale' , '$sp' , '$i0' , '$i1' , '$i2' , '$i3' , '$prod_size' , '$date');");
  }
  ?>
  <form enctype="multipart/form-data" method="post" class="container">
    <div class="header">
    <h3 class="main_title">Add Product</h3>
    <br>
    <div class="main_details">
      The most important feature in the product editing section is the product adding part. When adding products here,do not ignore to fill in all the required fields completely and follow the product adding rules.
    </div>
    </div>
    <div class="section">
      <a href="#">Overview</a>
      <div class="add_product">+Add Product</div>
    </div>
    <!---------->
    <div class="pro_details">
      <h4 class="pro_name">Product Name</h4>
      <input type="text" placeholder="Product Name" name="pro_name_input" class="pro_name_input">
      <div class="name_condition">
          Do not exceed 20 characters when entering the product name
      </div>
      <h5 class="category">Category</h5>
      <div class="require_sign">!</div>
      <br>
      <select name="cat_options" id="" class="cat_options">
          <option class="cat_option">Men</option>
          <option class="cat_option">women</option>
          <option class="cat_option">Kids</option>
          <option class="Cat_option">Sport</option>
      </select>
      <br>
      <h5 class="brand">Brand</h5>
      <br>
      <select name="brand_options" id="" class="brand_options">
          <option class="brand_option">Nike</option>
          <option class="brand_option">Puma</option>
          <option class="brand_option">Adiddas</option>
          <option class="brand_option">Filla</option>
      </select>
      <br>
      <h5 class="desc">Description</h5>
      <div class="require_sign">!</div>
      <br>
      <textarea name="desc" id="" class="desc_textarea" cols="45" rows="10" placeholder="Please write a description for the broduct"></textarea>
      <div class="description_condition">
          Do not exceed 1000 characters when entering the product name.
      </div>
      <h5 class="price">Price</h5>
      <br>
      <input type="number" name="price_input" class="price_input" placeholder="Price">
      <br>
      <h5 class="price_sale">Price Sale</h5>
      <br>
      <input type="number" name="price_sale_input" class="price_sale_input" placeholder="Price Sale">
      <br>
      <h5 class="sp">Specifications</h5>
      <br>
      <input type="text" name="sp_input" class="sp_input" placeholder="Specifications">
      <br>
      <div class="add_new">
        <a href="#">Add New</a>
      </div>
    </div>
    <!---->
    <div class="pro_imag">
      <h5 class="pro_img">Product Images</h5>
      <div class="require_sign">!</div>
      <div class="img_box">
        <!-- start dropArea -->
        <div class="drag_area">
          <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
          <input type="file" name="pro_image0">
        </div>
        <div class="drag_area">
          <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
          <input type="file" name="pro_image1">
        </div>
        <div class="drag_area">
          <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
          <input type="file" name="pro_image2">
        </div>
        <div class="drag_area">
          <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
          <input type="file" name="pro_image3">
        </div>
        <br style=" clear: both;">
      <!-- end dropArea -->
      </div>
      <div class="img_condition">
        You need to add at least 4 images. Pay attention to the quality of the pictures you add, comly with the background color standards.Pictures must be in certain dimensions. Notice that the product shows all the details.
      </div>
      <div class="size_box">
        <h5>Add Size</h5>
        <select name="size_select" id="" class="size_select">
          <option value="" class="size_option">S</option>
          <option value="" class="size_option">M</option>
          <option value="" class="size_option">L</option>
          <option value="" class="size_option">XL</option>
          <option value="" class="size_option">2XL</option>
          <option value="" class="size_option">3XL</option>
          <option value="" class="size_option">4XL</option>
          <option value="" class="size_option">5XL</option>
        </select>
      </div>
      <div class="date_box">
          <h5>Product Date</h5>
          <input type="date" name="date_input" class="date_input">
      </div>
      <input type="submit" value="Add Product" class="add_button">
    </div>
  </form>
  <?php require("footer.php") ?>
</body>
</html>
