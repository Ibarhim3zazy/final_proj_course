function info_details_s(){
  fname= document.getElementById('f_name_input').value;
  Tfname= /^[a-z]{2,18}$/;
if(fname.length > 2 &&
  fname.length < 15 &&
  Tfname.test(fname)== true){
    document.getElementById('f_name_input').style.borderBottom="2px solid green";
  }
  else {
    document.getElementById('f_name_input').style.borderBottom="2px solid red ";
}
lname= document.getElementById('l_name_input').value;
Tlname= /^[a-z]{2,18}$/;
if(lname.length > 2 &&
lname.length < 15 &&
Tlname.test(lname)== true){
  document.getElementById('l_name_input').style.borderBottom="2px solid green";
}
else {
  document.getElementById('l_name_input').style.borderBottom="2px solid red ";
}
email= document.getElementById('e_input').value;
Temail= /[@]([y][a][h][o]{2}|[g][m][a][i][l]|[h][o][t][m][a][i][l])[.][c][o][m]$/;
if(email.length > 12 &&
  email.length < 27 &&
  Temail.test(email)== true){
  document.getElementById('e_input').style.borderBottom="2px solid green";
}
else {
  document.getElementById('e_input').style.borderBottom="2px solid red ";
}
phone= document.getElementById('ph_input').value;
Tphone= /^[0][1]([0-2]|[5])[0-9]{8}$/;
if(phone.length === 11 &&
  Tphone.test(phone)== true){
    document.getElementById('ph_input').style.borderBottom="2px solid green";
  }
  else {
    document.getElementById('ph_input').style.borderBottom="2px solid red ";
}};
function f_name(){
  fname= document.getElementById('f_name_input').value;
  Tfname= /^[a-z]{2,18}$/;
if(fname.length > 2 &&
  fname.length < 15 &&
  Tfname.test(fname)== true){
    document.getElementById('f_name_input').style.borderBottom="2px solid green";
  }
  else {
    document.getElementById('f_name_input').style.borderBottom="2px solid red ";
}};
function l_name(){
  lname= document.getElementById('l_name_input').value;
  Tlname= /^[a-z]{2,18}$/;
if(lname.length > 2 &&
  lname.length < 15 &&
  Tlname.test(lname)== true){
    document.getElementById('l_name_input').style.borderBottom="2px solid green";
  }
  else {
    document.getElementById('l_name_input').style.borderBottom="2px solid red ";
}};
function e_regular(){
	email= document.getElementById('e_input').value;
	Temail= /[@]([y][a][h][o]{2}|[g][m][a][i][l]|[h][o][t][m][a][i][l])[.][c][o][m]$/;
if(email.length > 12 &&
		email.length < 27 &&
		Temail.test(email)== true){
		document.getElementById('e_input').style.borderBottom="2px solid green";
  }
  else {
		document.getElementById('e_input').style.borderBottom="2px solid red ";
}};
function ph_num(){
	phone= document.getElementById('ph_input').value;
	Tphone= /^[0][1]([0-2]|[5])[0-9]{8}$/;
	if(phone.length === 11 &&
		Tphone.test(phone)== true){
			document.getElementById('ph_input').style.borderBottom="2px solid green";
		}
		else {
			document.getElementById('ph_input').style.borderBottom="2px solid red ";
}};
function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};
function update(){
  var email_ajax=document.getElementById("email_ajax").value;
  var pass_ajax=document.getElementById("pass_ajax").value;
	var f_name_i=document.getElementById("f_name_input").value;
  var l_name_i=document.getElementById("l_name_input").value;
  var i_mail=document.getElementById("e_input").value;
  var ph_i=document.getElementById("ph_input").value;
  var gender_opt=document.getElementById("gender_opt").value;
  var date_input=document.getElementById("date_input").value;
	var url="details_ajax.php?f_name_i="+f_name_i+"&l_name_i="+l_name_i+"&i_mail="+i_mail+"&ph_i="+ph_i+"&gender_opt="+gender_opt+"&date_input="+date_input+"&email_ajax="+email_ajax+"&pass_ajax="+pass_ajax;
	var xmlhttp = GetXmlHttpObject();
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
};
function sucess(){
  document.querySelector(".sucess").style.display= "block";
  setTimeout(function(){document.querySelector(".sucess").style.display= "none";}, 1000);
};
