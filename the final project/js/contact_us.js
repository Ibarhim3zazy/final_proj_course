function submit(){
	name= document.getElementById('name').value;
  Tname= /^[a-z]{2,40}$/;
if(name.length > 2 &&
  name.length < 40 &&
  Tname.test(name)== true){
		document.getElementById('name').style.border="1px solid green";
  }
  else {
		document.getElementById('name').style.border="1px solid red ";
}	email= document.getElementById('mail').value;
	Temail= /[@]([y][a][h][o]{2}|[g][m][a][i][l]|[h][o][t][m][a][i][l])[.][c][o][m]$/;
if(email.length > 12 &&
		email.length < 30 &&
		Temail.test(email)== true){
		document.getElementById('mail').style.border="1px solid green";
  }
  else {
		document.getElementById('mail').style.border="1px solid red ";
}  message= document.getElementById('message').value;
  Tmessage= /^[a-z]{2,40}/;
if(message.length > 2 &&
  message.length < 1000 &&
  Tmessage.test(message)== true){
		document.getElementById('message').style.border="1px solid green";
  }
  else {
		document.getElementById('message').style.border="1px solid red ";
}}
function fun_name(){
	name= document.getElementById('name').value;
  Tname= /^[a-z]{2,40}$/;
if(name.length > 2 &&
  name.length < 40 &&
  Tname.test(name)== true){
		document.getElementById('name').style.border="1px solid green";
  }
  else {
		document.getElementById('name').style.border="1px solid red ";
}}
function fun_mail(){
	email= document.getElementById('mail').value;
	Temail= /[@]([y][a][h][o]{2}|[g][m][a][i][l]|[h][o][t][m][a][i][l])[.][c][o][m]$/;
if(email.length > 12 &&
		email.length < 30 &&
		Temail.test(email)== true){
		document.getElementById('mail').style.border="1px solid green";
  }
  else {
		document.getElementById('mail').style.border="1px solid red ";
}}
function fun_message(){
  message= document.getElementById('message').value;
  Tmessage= /^[a-z]{2,40}/;
if(message.length > 2 &&
  message.length < 1000 &&
  Tmessage.test(message)== true){
		document.getElementById('message').style.border="1px solid green";
  }
  else {
		document.getElementById('message').style.border="1px solid red ";
}}
