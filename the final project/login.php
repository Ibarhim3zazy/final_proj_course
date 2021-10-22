<html>

<head>

<link rel="stylesheet" href="css/signin-style.css">
	     <script src="js/signin.js"></script>	 


</head>




<body>


<div id="form2">
    <div id="black3">
	<div class="con_signin">
	<img src="img/211652_close_icon.png" class="close_signin" onclick="showlogin()"> </img>
		<h1 class="label">Login form</h1>
		
		<form class="login_form">
			
			<input  type="text" name="email" placeholder="Enter your email or username"  id="email" onkeyup="fun()">
			<div id="email_error2">Please fill up your Email or username</div>
			<input type="password" name="password" placeholder="Enter Password" id="password" onkeyup="fun()">
		
			<div id="pass_error2">Please fill up your Password</div>

			<button type="button" onclick="fun()">sign in</button>
		<p class="item2"> keep me sign in	<input type="checkbox" style="width:15px;height:11px"> </input> </p>
				<p class="item2"> i accept the terms & condntions	<input type="checkbox" style="width:15px;height:11px"> </input> </p>
			<p class="item2"> forgot your password ?  <a href="#"> reset </a> </p>
			
			<p class="item2"> not a member ? <a href="#" onclick="signup()"> signup  </a> 
			
				    <div class="social_signin">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>
		</form>
		
	
	</div>	
	</div>
	
	</div>
	


</body>


</html>