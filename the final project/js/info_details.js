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
