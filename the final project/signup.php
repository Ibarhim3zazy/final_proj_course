<html>
<head>
	 <link rel="stylesheet" href="css/signup-style.css">
	     <script src="js/signup.js"></script>
		 </head>
		 <body>
<div class="signup_form_con">
<div id="black2" onclick="show_signup()"></div>
<img src="img/211652_close_icon.png" class="close_signup" onclick="show_signup()"></img>
	<div class="con_signup">
		<h1 class="label" id="txt">Register</h1>
		<form class="signup_form">
		<input  type="text" placeholder="Enter your firstname" id="signup_firstname" onkeyup="first_n_fun()">
			<div id="firstname_error">insert your firstname</div>
			<input  type="text" placeholder="Enter your lastname" id="signup_lastname" onkeyup="last_n_fun()">
			<div id="lastname_error">insert your lastname</div>
			<input  type="text" placeholder="Enter your email" id="signup_email" onkeyup="mail_fun()">
			<div id="email_error">insert your Email </div>
			<input type="password" name="password" placeholder="Enter Password" id="signup_password" onkeyup="pass_fun()">
			<div id="pass_error">insert your Password</div>
			<input type="password" name="password" placeholder="Enter Password" id="signup_password2" onkeyup="confirm_pass_fun()">
			<div id="pass_error3"> please confirm your Password</div>
			<input  type="text" placeholder="Enter your phone number" id="signup_phone" onkeyup="phone_fun()">
			<div id="phone_error">insert your phone number</div>
			<button type="button" onclick="funn()">sign up</button>
			<p class="item"> already have an account ? <a href="#" onclick="show_signup(), showlogin()"> Login  </a> </p>
		</form>
	</div>
	</div>
	</body>
