function fr_name_input(){
  fname= document.getElementById('fr_name_input').value;
  Tfname= /^[a-z]{2,18}$/;
if(fname.length > 2 &&
  fname.length < 15 &&
  Tfname.test(fname)== true){
    document.getElementById('fr_name_input').style.border="1px solid green";
  }
  else {
    document.getElementById('fr_name_input').style.border="1px solid red ";
}}
function la_name_input(){
  lname= document.getElementById('la_name_input').value;
  Tlname= /^[a-z]{2,18}$/;
if(lname.length > 2 &&
  lname.length < 15 &&
  Tlname.test(lname)== true){
    document.getElementById('la_name_input').style.border="1px solid green";
  }
  else {
    document.getElementById('la_name_input').style.border="1px solid red ";
}}
function ph_num_input(){
	phone= document.getElementById('ph_num_input').value;
	Tphone= /^[0][1]([0-2]|[5])[0-9]{8}$/;
	if(phone.length === 11 &&
		Tphone.test(phone)== true){
			document.getElementById('ph_num_input').style.border="2px solid green";
		}
		else {
			document.getElementById('ph_num_input').style.border="2px solid red ";
}}
function ph_num_adtion_input(){
	phone= document.getElementById('ph_num_adtion_input').value;
	Tphone= /^[0][1]([0-2]|[5])[0-9]{8}$/;
	if(phone.length === 11 &&
		Tphone.test(phone)== true){
			document.getElementById('ph_num_adtion_input').style.border="2px solid green";
		}
		else {
			document.getElementById('ph_num_adtion_input').style.border="2px solid red ";
}}
