<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/contactus.css">
  <script src="js/contact_us.js"></script>
</head>
<body>
  <?php require 'header.php'; ?>
    <div class="contianer">
    <input type="text" placeholder="Enter your name" onkeyup="fun_name()" id="name" class="input">
    <br>
    <br>
    <input type="text" placeholder="Enter your email address" onkeyup="fun_mail()" id="mail" class="input">
    <br>
    <br>
    <textarea class="textarea" placeholder="Enter your message" onkeyup="fun_message()" id="message"></textarea>
    <br>
    <br>
    <button type="submit" class="btn"  onclick="submit()"> submit </button>
    </div>
  <div class="footer">
  <h1> GET IN TOUCH </H1>
  Hey! We are looking forward <br> to start a project with you! <br>  <br><p style="font-size:15px;"> Ethim sit amet convalis erat-class aptent taciti  <br> sociosqu ad litorea torquent per conubial meacenas <br> gravida lacus Lorem etiam sit amet convalis erat </p> <br>
  <div class="social">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
      </div>
  </div>
  <div class="get">
  <b><h4>CALL US </h4> </b>
  1(234)-567-891
  <br>
  1(234)987-654
  <br>
  <b><h4>LOCATION </h4></b>
  121 Rock street 21 Awenue
  <br>
  New York NY 92103-9000
  <br>
  <b><h4> BUSINESS HOURS </h4></b>
  Mon-fri........10am-8pm
  <br>
  sat,sun........closed
  </div>
  <div style="height: 94%;"></div>
  <?php require 'footer.php'; ?>
</body>
</html>
