function GetXmlHttpObject(){
	if (window.XMLHttpRequest)
		return new XMLHttpRequest();
	if (window.ActiveXObject)
		return new ActiveXObject("Microsoft.XMLHTTP");
	return null;
};
function buy(id){
  var uprice=document.getElementById("uprice").value;
	var url="add_prod_ajax.php?prod_id="+id+"&uprice="+uprice;
	var xmlhttp = GetXmlHttpObject();
	xmlhttp.open("GET",url,true);
	xmlhttp.send();
};
function sucess(){
  document.querySelector(".sucess").style.display= "block";
  setTimeout(function(){document.querySelector(".sucess").style.display= "none";}, 1000);
};
