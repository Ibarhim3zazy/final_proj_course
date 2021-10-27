	function showlogin(){
	document.querySelector('.login_form_con').classList.toggle('showlogin');
	if (document.getElementById('black3').style.display == "block")
		document.getElementById('black3').style.display = "none";
		else
			document.getElementById('black3').style.display = "block";
	}
function fun(){
	name= document.getElementById('email').value;
  pass= document.getElementById('password').value;
  Tname= /^[a-z]{2,18}$/;
	Temail= /[@]([y][a][h][o]{2}|[g][m][a][i][l]|[h][o][t][m][a][i][l])[.][c][o][m]$/;
  Tpass= /^([0-9]{1,10}|[a-z]{1,18})$/;
if(name.length > 2 &&
  name.length < 15 &&
  Tname.test(name)== true ||
	name.length > 12 &&
	name.length < 27 &&
	Temail.test(name)== true){
		document.getElementById('email').style.border="2px solid green";
		document.getElementById('email_error2').innerHTML="good";
		document.getElementById('email_error2').style.color="green";
  }
  else {
		document.getElementById('email').style.border="2px solid red ";
		document.getElementById('email_error2').innerHTML="please fill up your email or username";
		document.getElementById('email_error2').style.color="red";
}
if(pass.length > 7 &&
	Tpass.test(pass)== true){
		document.getElementById('password').style.border="2px solid green";
		document.getElementById('pass_error2').innerHTML="good";
		document.getElementById('pass_error2').style.color="green";
	}
	else {
		document.getElementById('password').style.border="2px solid red ";
		document.getElementById('pass_error2').innerHTML="please fill up your password";
		document.getElementById('pass_error2').style.color="red";
}}
function fun_user(){
	name= document.getElementById('email').value;
  Tname= /^[a-z]{2,18}$/;
	Temail= /[@]([y][a][h][o]{2}|[g][m][a][i][l]|[h][o][t][m][a][i][l])[.][c][o][m]$/;
if(name.length > 2 &&
  name.length < 15 &&
  Tname.test(name)== true ||
	name.length > 12 &&
	name.length < 27 &&
	Temail.test(name)== true){
		document.getElementById('email').style.border="2px solid green";
		document.getElementById('email_error2').innerHTML="good";
		document.getElementById('email_error2').style.color="green";
  }
  else {
		document.getElementById('email').style.border="2px solid red ";
		document.getElementById('email_error2').innerHTML="please fill up your email or username";
		document.getElementById('email_error2').style.color="red";
}}
function fun_pass(){
	pass= document.getElementById('password').value;
	Tpass= /^([0-9]{1,10}|[a-z]{1,18})/;
	if(pass.length > 7 &&
		Tpass.test(pass)== true){
			document.getElementById('password').style.border="2px solid green";
			document.getElementById('pass_error2').innerHTML="good";
			document.getElementById('pass_error2').style.color="green";
		}
		else {
			document.getElementById('password').style.border="2px solid red ";
			document.getElementById('pass_error2').innerHTML="please fill up your password";
			document.getElementById('pass_error2').style.color="red";
}}
