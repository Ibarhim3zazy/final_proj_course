<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/prod_daitals.css">
    <script src="js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="js/prod_daitals.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php   require_once("connection.php");
      require 'header.php';
     ?>
     <section>
      <div id="sec2">
        <div class="buy">
          <span>to buy, select <b>size</b></span>
          <div class="price">
            <h3 class="price_a">EGP 150</h3>
            <h4>EGP 200</h4><span> -25%</span><hr>
            Estimated Total cost: <b>$89.78</b> including Shipping <b id="details">Details&#9662;</b></p>
            Arrives: Friday, Nov 26 </p>
            In Stock. </p>
            <select class="" name="">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select></p>
          </div>
          <input type="submit" name="" value="Add to cart"></p>
            Ships from<b> Amazon.com</b></p>
            Sold by<b> Amazon.com</b>
        </div>
       </div>
       <div class="container">
       <div class="prod_img">
         <div id="move" onmouseleave="hide_lens()" onmousemove="show_lens()">
           <div class="img-zoom-lens"></div>
           <img src="img/prod2.jpg" id="main_pic" alt="shoes">
         </div>
         <div id="myresult" class="img-zoom-result"></div>
         <img src="img/prod1.jpg" class="pic_child" onclick="pic_change(this.src)" alt="pic2">
         <img src="img/prod2.jpg" class="pic_child" onclick="pic_change(this.src)" alt="pic3">
         <img src="img/prod3.jpg" class="pic_child" onclick="pic_change(this.src)" alt="pic4">
         <img src="img/prod4.jpg" class="pic_child" onclick="pic_change(this.src)" alt="pic5"><hr>
         <span>SHARE THIS PRODUCT</span><br>
         <a href="#"><img src="img/fb.svg" alt="facebook"></a>
         <a href="#"><img src="img/tw.svg" alt="twitter"></a>
         <a href="#" id="report">Report incorrect product information</a>
       </div>
       <div class="container_b">
        <h3>RELAXED FIT: HARPER – TREFTON <span>(type)</span></h3>
        <div>Brand: <a href="#">aesdawsdws</a></div>
        <div id="rating">
          <span class="fa fa-star" onclick="checked(1)"></span>
          <span class="fa fa-star" onclick="checked(2)"></span>
          <span class="fa fa-star" onclick="checked(3)"></span>
          <span class="fa fa-star" onclick="checked(4)"></span>
          <span class="fa fa-star" onclick="checked(5)"></span> (000 ratings)
        </div><hr>
        <div class="price">
          <h3 class="price_a">EGP 150</h3>
          <h4>EGP 200</h4><span> -25%</span><hr>
        </div>
        <span>VARIATION AVAILABLE</span>
        <a href="#">Size Guide</a>
        <div class="cloth_size">
          <input type="button" name="" value="S">
          <input type="button" name="" value="M">
          <input type="button" name="" value="L">
          <input type="button" name="" value="XL">
          <input type="button" name="" value="XXL">
          <input type="button" name="" value="3XL">
          <input type="button" name="" value="4XL">
          <input type="button" name="" value="5XL">
        </div>
        <br style="clear: both;"><hr>
       </div>
     </div>
     </section>
     <div class="ads">
      <input type="button" value="x">
      ADS
     </div>
     <section>
       <div id="sec2">

       </div>
       <div class="container">
        <h1>Product details</h1><hr>
        <p>Product detailsProduct detailsProduct detailsProduct detailsProduct detailsProduct detailsProduct detailsProduct detailsProduct detailsProduct detailsProduct detailsProduct detailsProduct details</p>
       </div>
       <div class="container">
        <h1>Specifications</h1><hr>
        <table id="viewall_datails">
          <tr>
            <th>Specifications_title</th>
            <td>Specifications_datails</td>
          </tr>
          <tr>
            <th>Specifications_title</th>
            <td>Specifications_datailsSpecifications_d atailsSpecifications_datailsSpecifications_datailsSpecifications_datailsSpecifications_datailsSpecifications_datailsSpecifications_datailsSpecifications_datailsSpecifications_datailsSpecifications_datailsSpecifications_datailsSpecifications_datailsSpecifications_datailsSpecifications_datailsSpecifications_datails</td>
          </tr>
          <tr>
            <th>Specifications_title</th>
            <td>Specifications_datails</td>
          </tr>
          <tr>
            <th>Specifications_title</th>
            <td>Specifications_datails</td>
          </tr>
          <tr>
            <th>Specifications_title</th>
            <td>Specifications_datails</td>
          </tr>
        </table>
       </div>
       <div class="container">
        <h1>Customer Feedback</h1><hr>
        <div class="RATINGS_container">
          <h5>PRODUCT RATINGS (29)</h5>
          <div class="RATINGS">
            <span>4.5</span>/5
            <div id="rating">
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span><br><br>
              (000 ratings)
            </div>
          </div>
          <div class="RATINGS_container_a">
            <div>5 <span class="fa fa-star"></span> (000 ratings)</div>
            <div>4 <span class="fa fa-star"></span> (000 ratings)</div>
            <div>3 <span class="fa fa-star"></span> (000 ratings)</div>
            <div>2 <span class="fa fa-star"></span> (000 ratings)</div>
            <div>1 <span class="fa fa-star"></span> (000 ratings)</div>
          </div>
        </div>
        <div class="container_b">
          <h5>PRODUCT REVIEWS (7n)</h5>
          <div id="rating">
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </div><hr>
          <div class="comment" id="commented">
          </div>
        </div>
       </div>
    <div>
      <textarea placeholder="Comment" onkeyup="comment_check()" id="comment"></textarea>
    </div>
    <div id="commentpost">
      <input type="text" placeholder="Title (requird)" id="Title">
      <input type="text" placeholder="Name (requird)" id="tname"><input type="button" value="Post Comment" onclick="commentt()" id="postcomment">
    </div>
       <div class="container">
        <h2>More items from this seller</h2>
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
       </div>
       <div class="container">
        <div class="container_header">
          <h2>Recently Viewed</h2><a href="#">See All &#10095;</a>
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
       </div>
     </section>
    <?php   require 'footer.php'; ?>
  </body>
</html>
