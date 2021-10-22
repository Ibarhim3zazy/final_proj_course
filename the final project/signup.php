

<html>
<head>


	 <link rel="stylesheet" href="css/signup-style.css">
	     <script src="js/signup.js"></script>
		 
		 </head>



		 <body>

<div id="form1">
<div id="black2">  
	<div class="con">
	
	<img src="img/211652_close_icon.png" class="close_signup" onclick="show_signup()"> </img>
		<h1 class="label" id="txt">Register </h1>
		
		<form class="login_form">
		
		<input  type="text" placeholder="Enter your firstname" id="signup_firstname" onkeyup="signup_fun()">
			<div id="firstname_error">insert your firstname</div>
			
			<input  type="text" placeholder="Enter your lastname" id="signup_lastname" onkeyup="signup_fun()">
			<div id="lastname_error">insert your lastname</div>
			
			
			<input  type="text" placeholder="Enter your email" id="signup_email" onkeyup="signup_fun()">
			<div id="email_error">insert your Email </div>
			
			
			<input type="password" name="password" placeholder="Enter Password" id="signup_password" onkeyup="signup_fun()">
			<div id="pass_error">insert your Password</div>

			
			<input type="password" name="password" placeholder="Enter Password" id="signup_password2" onkeyup="signup_fun()">
			<div id="pass_error3"> please confirm your Password</div>

			
			<input  type="text" placeholder="Enter your phone number" id="signup_phone" onkeyup="signup_fun()">
			<div id="phone_error">insert your phone number</div>
			
			
			
			<input type="text" placeholder="Enter your username" id="username" onkeyup="signup_fun()">
				<div id="username_error">insert your username</div>
			
			
			
			
			<button type="button" onclick="signup_fun()">sign up</button>
			
			<p class="item"> already have an account ? <a href="#" onclick="login()"> Login  </a> </p>
			
			
			
			
			
			
		
		</form>
		
						    <div class="social_signup">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>
	</div>
	</div>	
	</div>

	</body>