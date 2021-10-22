
	
	
	
	function showlogin()
{
	document.querySelector('.con_signin').classList.toggle('showlogin');
	
	
	if (document.getElementById('black3').style.display == "block"){
		document.getElementById('black3').style.display = "none";
	} else {
			document.getElementById('black3').style.display = "block";
		}
	}
	
	
	
	
function fun()

{
var text=window.email.value;
var patt;
patt=/^(?=.{3,16}$)[a-zA-Z0-9]+([_?[a-zA-Z0-9]+)$|^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@(([[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i

var b=patt.test(text);


if(b)
{
document.getElementById('email').style.border="2px solid green";
document.getElementById('email_error2').innerHTML="good";
document.getElementById('email_error2').style.color="green";
}

else{
document.getElementById('email').style.border="2px solid red ";
document.getElementById('email_error2').innerHTML="please fill up your email or username";
document.getElementById('email_error2').style.color="red";
}


var tex=window.password.value;
var pat;
pat=/[A-Za-z .]{7,20}$/;

var a=pat.test(tex);


if(a)
{
document.getElementById('password').style.border="2px solid green";
document.getElementById('pass_error2').innerHTML="good";
document.getElementById('pass_error2').style.color="green";
}

else{
document.getElementById('password').style.border="2px solid red ";
document.getElementById('pass_error2').innerHTML="please fill up your password";
document.getElementById('pass_error2').style.color="red";
}

	
	}