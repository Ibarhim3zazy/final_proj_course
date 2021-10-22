



	
	function show_signup()
{
	document.querySelector('.con').classList.toggle('show_signup');
	
	if (document.getElementById('black2').style.display == "block"){
		document.getElementById('black2').style.display = "none";
	} else {
			document.getElementById('black2').style.display = "block";
		}

	}
	
	
function signup_fun()

{
var text=window.signup_email.value;
var patt;
patt=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{3,4})$/;
var b=patt.test(text);


if(b)
{
document.getElementById('signup_email').style.border="1px solid green";
document.getElementById('email_error').innerHTML="good";
document.getElementById('email_error').style.color="green";
}

else{
document.getElementById('signup_email').style.border="1px solid red ";
document.getElementById('email_error').innerHTML="please fill up your Email";
document.getElementById('email_error').style.color="red";
}


var tex=window.signup_password.value;
var pat;
pat=/[A-Za-z .]{7,20}$/;
var a=pat.test(tex);


if(a)
{
document.getElementById('signup_password').style.border="1px solid green";
document.getElementById('pass_error').innerHTML="good";
document.getElementById('pass_error').style.color="green";
}

else{
document.getElementById('signup_password').style.border="1px solid red ";
document.getElementById('pass_error').innerHTML="please fill up your Password";
document.getElementById('pass_error').style.color="red";




var t=window.username.value;
var pa;
pa=/^([a-z]{15})?([0-9]+)$/i
var b=pa.test(t);


if(b)
{
document.getElementById('username').style.border="1px solid green";
document.getElementById('username_error').innerHTML="good";
document.getElementById('username_error').style.color="green";
}

else{
document.getElementById('username').style.border="1px solid red ";
document.getElementById('username_error').innerHTML="please fill up your username";
document.getElementById('username_error').style.color="red";
}

}



var firstname=window.signup_firstname.value;
var p;
p=/^[a-z,A-Z]{5,10}$/;
var d=p.test(firstname);


if(d)
{
document.getElementById('signup_firstname').style.border="1px solid green";
document.getElementById('firstname_error').innerHTML="good";
document.getElementById('firstname_error').style.color="green";
}

else{
document.getElementById('signup_firstname').style.border="1px solid red ";
document.getElementById('firstname_error').innerHTML="please fill up your firstname";
document.getElementById('firstname_error').style.color="red";
}






var lastname=window.signup_lastname.value;
var c
c=/^[a-z,A-Z]{5,10}$/;
var g=c.test(lastname);


if(g)
{
document.getElementById('signup_lastname').style.border="1px solid green";
document.getElementById('lastname_error').innerHTML="good";
document.getElementById('lastname_error').style.color="green";
}

else{
document.getElementById('signup_lastname').style.border="1px solid red ";
document.getElementById('lastname_error').innerHTML="please fill up your lastname";
document.getElementById('lastname_error').style.color="red";
}











var phone=window.signup_phone.value;
var c;
x=/^01[0125[0-9]{9}$/;
var g=x.test(phone);


if(g)
{
document.getElementById('signup_phone').style.border="1px solid green";
document.getElementById('phone_error').innerHTML="good";
document.getElementById('phone_error').style.color="green";
}

else{
document.getElementById('signup_phone').style.border="1px solid red ";
document.getElementById('phone_error').innerHTML="please fill up your phone number";
document.getElementById('phone_error').style.color="red";




}

 
        var password = document.getElementById("signup_password").value;
        var confirmPassword = document.getElementById("signup_password2").value;
        if (password === confirmPassword) {
            document.getElementById("pass_error3").innerHTML=" confirmd";
            document.getElementById("signup_password2").style.border="1px solid green";
			
        }
		
   else
   {
	   document.getElementById("pass_error3").innerHTML="not confirmd";
	   document.getElementById("signup_password2").style.border="1px solid red";
   }



}

	
	
	
	
	
	
	
	
	           
        
		
		
	
	
	
	
	