function show_signup(){
document.querySelector('.signup_form_con').classList.toggle('show_signup');
if (document.getElementById('black2').style.display == "block"){
	document.getElementById('black2').style.display = "none";
} else {
	document.getElementById('black2').style.display = "block";
}}
function funn(){
	fname= document.getElementById('signup_firstname').value;
  Tfname= /^[a-z]{2,18}$/;
if(fname.length > 2 &&
  fname.length < 15 &&
  Tfname.test(fname)== true){
		document.getElementById('signup_firstname').style.border="1px solid green";
		document.getElementById('firstname_error').innerHTML="good";
		document.getElementById('firstname_error').style.color="green";
  }
  else {
		document.getElementById('signup_firstname').style.border="1px solid red ";
		document.getElementById('firstname_error').innerHTML="please fill up your firstname";
		document.getElementById('firstname_error').style.color="red";
}
lname= document.getElementById('signup_lastname').value;
Tlname= /^[a-z]{2,18}$/;
if(lname.length > 2 &&
lname.length < 15 &&
Tlname.test(lname)== true){
	document.getElementById('signup_lastname').style.border="1px solid green";
	document.getElementById('lastname_error').innerHTML="good";
	document.getElementById('lastname_error').style.color="green";
}
else {
	document.getElementById('signup_lastname').style.border="1px solid red ";
	document.getElementById('lastname_error').innerHTML="please fill up your lastname";
	document.getElementById('lastname_error').style.color="red";
}
email= document.getElementById('signup_email').value;
Temail= /[@]([y][a][h][o]{2}|[g][m][a][i][l]|[h][o][t][m][a][i][l])[.][c][o][m]$/;
if(email.length > 12 &&
	email.length < 27 &&
	Temail.test(email)== true){
	document.getElementById('signup_email').style.border="1px solid green";
	document.getElementById('email_error').innerHTML="good";
	document.getElementById('email_error').style.color="green";
}
else {
	document.getElementById('signup_email').style.border="1px solid red ";
	document.getElementById('email_error').innerHTML="please fill up your email";
	document.getElementById('email_error').style.color="red";
}
pass= document.getElementById('signup_password').value;
Tpass= /^([0-9]{1,10}|[a-z]{1,18})$/;
if(pass.length > 7 &&
	Tpass.test(pass)== true){
		document.getElementById('signup_password').style.border="2px solid green";
		document.getElementById('pass_error').innerHTML="good";
		document.getElementById('pass_error').style.color="green";
	}
	else {
		document.getElementById('signup_password').style.border="2px solid red ";
		document.getElementById('pass_error').innerHTML="please fill up your password";
		document.getElementById('pass_error').style.color="red";
}
var pass = document.getElementById("signup_password").value;
var confirm_pass = document.getElementById("signup_password2").value;
if (pass === confirm_pass) {
	document.getElementById("pass_error3").innerHTML="confirmd";
	document.getElementById("signup_password2").style.border="1px solid green";
}
else{
	document.getElementById("pass_error3").innerHTML="not confirmd";
	document.getElementById("signup_password2").style.border="1px solid red";
}
phone= document.getElementById('signup_phone').value;
Tphone= /^01[0125[0-9]{9}$/;
if(phone.length === 11 &&
	Tphone.test(phone)== true){
		document.getElementById('signup_phone').style.border="2px solid green";
		document.getElementById('phone_error').innerHTML="good";
		document.getElementById('phone_error').style.color="green";
	}
	else {
		document.getElementById('signup_phone').style.border="2px solid red ";
		document.getElementById('phone_error').innerHTML="please fill up your phone ";
		document.getElementById('phone_error').style.color="red";
}}

//////////////////////////////////////
function first_n_fun(){
	fname= document.getElementById('signup_firstname').value;
  Tfname= /^[a-z]{2,18}$/;
if(fname.length > 2 &&
  fname.length < 15 &&
  Tfname.test(fname)== true){
		document.getElementById('signup_firstname').style.border="1px solid green";
		document.getElementById('firstname_error').innerHTML="good";
		document.getElementById('firstname_error').style.color="green";
  }
  else {
		document.getElementById('signup_firstname').style.border="1px solid red ";
		document.getElementById('firstname_error').innerHTML="please fill up your firstname";
		document.getElementById('firstname_error').style.color="red";
}}
function last_n_fun(){
	lname= document.getElementById('signup_lastname').value;
  Tlname= /^[a-z]{2,18}$/;
if(lname.length > 2 &&
  lname.length < 15 &&
  Tlname.test(lname)== true){
		document.getElementById('signup_lastname').style.border="1px solid green";
		document.getElementById('lastname_error').innerHTML="good";
		document.getElementById('lastname_error').style.color="green";
  }
  else {
		document.getElementById('signup_lastname').style.border="1px solid red ";
		document.getElementById('lastname_error').innerHTML="please fill up your lastname";
		document.getElementById('lastname_error').style.color="red";
}}
function mail_fun(){
	email= document.getElementById('signup_email').value;
	Temail= /[@]([y][a][h][o]{2}|[g][m][a][i][l]|[h][o][t][m][a][i][l])[.][c][o][m]$/;
if(email.length > 12 &&
		email.length < 27 &&
		Temail.test(email)== true){
		document.getElementById('signup_email').style.border="1px solid green";
		document.getElementById('email_error').innerHTML="good";
		document.getElementById('email_error').style.color="green";
  }
  else {
		document.getElementById('signup_email').style.border="1px solid red ";
		document.getElementById('email_error').innerHTML="please fill up your email";
		document.getElementById('email_error').style.color="red";
}}
function pass_fun(){
	pass= document.getElementById('signup_password').value;
	Tpass= /^([0-9]{1,10}|[a-z]{1,18})/;
	if(pass.length > 7 &&
		Tpass.test(pass)== true){
			document.getElementById('signup_password').style.border="2px solid green";
			document.getElementById('pass_error').innerHTML="good";
			document.getElementById('pass_error').style.color="green";
		}
		else {
			document.getElementById('signup_password').style.border="2px solid red ";
			document.getElementById('pass_error').innerHTML="please fill up your password";
			document.getElementById('pass_error').style.color="red";
}}
function confirm_pass_fun(){
	var pass = document.getElementById("signup_password").value;
  var confirm_pass = document.getElementById("signup_password2").value;
  if (pass === confirm_pass) {
    document.getElementById("pass_error3").innerHTML="confirmd";
    document.getElementById("signup_password2").style.border="1px solid green";
}
  else{
		document.getElementById("pass_error3").innerHTML="not confirmd";
		document.getElementById("signup_password2").style.border="1px solid red";
}}
function phone_fun(){
	phone= document.getElementById('signup_phone').value;
	Tphone= /^[0][1]([0-2]|[5])[0-9]{8}$/;
	if(phone.length === 11 &&
		Tphone.test(phone)== true){
			document.getElementById('signup_phone').style.border="2px solid green";
			document.getElementById('phone_error').innerHTML="good";
			document.getElementById('phone_error').style.color="green";
		}
		else {
			document.getElementById('signup_phone').style.border="2px solid red ";
			document.getElementById('phone_error').innerHTML="please fill up your phone number";
			document.getElementById('phone_error').style.color="red";
}}
