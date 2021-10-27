<html>
<head>
     <meta cherset = "utf-8">
     <meta name = "description" content = "welcome to my website">
     <meta name = "viewport" contant = "width=device-width,intial-scale=1.0">
     <link href="css/all.css" rel="stylesheet">
     <link rel="stylesheet" href="css/header.css">
     <script src="js/header.js"></script>
</head>
<body>
  <div style="width: 100%; height: 18vh;"></div>
	<div class="container_a">
   	<a href="#" class="fab">العربيه<img src="img/egypt-flag-icon-32.png" width="20"></a></img>
    <span>This is a new store</span>
    <div class="social">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
    </div>
  </div>
	<header>
			<div class="logo">
        <a href="#" id="hide-login" onclick="showlogin()">login</a>
        <a href="#" id="hide-register-login" onclick="show_signup()">| register</a>
      </div>
			<a  href="javascript:" onclick="toogle()">
			<div class="container-menu-bar-icon" id="container-menu-bar-icon">
			<div class="menu-bar-icon">
	    <div class="menu-bar-icon">
			<div class="menu-bar-icon"></div>
      </div>
			</div>
			</div>
			<span style="color: white; margin: auto;" class="menu-span" id="menu-span">menu</span>
   </a>
  <span style="width: 100%; margin: 0px 20px; height: 100%; border-left: 1px solid #eee;"></span>
  <input type="text" id="text-search" placeholder="search for products">
  <i class="fas fa-search" id="icon-search" onclick="show()"></i>
  <a href="index.php"><img src="img/logo.png" id="logo-center"></a>
  <div class="x" id="close-search" onclick="closesearch()"></div>
	</header>
	<div class="contianer-drop">
    <a href="#home">Home</a>
    <a href="#news">News</a>
    <div class="dropdown">
    <button class="dropbtn">Filter
      <i class="fas fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="header">
        <h2>Gategorys</h2>
      </div>
        <div class="column">
          <h3>Category</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 2</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 3</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
    </div>
  </div>
</div>
</div>
	<div class="scroll-btn">
    <i class="fas fa-arrow-alt-circle-up"></i>
  </div>
  <div id="black" onclick="toogle()"></div>
	<div class="navbar">
		<img src="img/211652_close_icon.png" onclick="toogle()" class="colse-nav-icon">
    <div class="navbar__link" id="navbar__link">
      <a href="#" class="fab">العربيه<img src="img/egypt-flag-icon-32.png" width="20"></a></img>
    </div>
    <span style="cursor: pointer; float:right; margin:-47px 50px 0px 10px" onclick="toogle()">close</span>
<a href="#" class="navbar__link">
<span class="a_menu">Home </span>
</a>
<a href="#" class="navbar__link">
<span class="a_menu">about </span>
</a>
<a href="#" class="navbar__link">
<span class="a_menu">contact us </span>
</a>
<a href="#" class="navbar__link">
<span class="a_menu">form </span>
</a>
<a href="#" class="navbar__link">
<span class="a_menu">protoflio </span>
</a>
<a href="#" class="navbar__link">
<span class="a_menu">Register/login </span>
</a>
</div>
<?php include('login.php');
 include('signup.php'); ?>
<a href="profile"> welcome <?php echo $_SESSION['email'] ?> </a>

  </body>
</html>
