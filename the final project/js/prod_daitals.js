
$(document).ready(function(){
$('#move').mousemove(function(){
  imageZoom("main_pic", "myresult");
});
});
function imageZoom(main_pic, myresult) {
  var img, lens, result, cx, cy;
  img = document.getElementById(main_pic);
  result = document.getElementById(myresult);
  lens = document.getElementsByClassName('img-zoom-lens')[0];
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {
    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}

  function hide_lens(){
    document.getElementById('myresult').style.display = "none";
    document.getElementsByClassName('img-zoom-lens')[0].style.display = "none";
  }
  function show_lens(){
    document.getElementById('myresult').style.display = "block";
    document.getElementsByClassName('img-zoom-lens')[0].style.display = "block";
  }
// /////////////////////////////
function pic_change(s){
  document.getElementById('main_pic').src = s;
}
/////////////////////
function checked(id){
  for (var b = 0; b < 5; b++) {
    document.getElementsByClassName('fa-star')[b].style.color = "#000";
  };
  for (var i = 0; i < id; i++) {
    document.getElementsByClassName('fa-star')[i].style.color = "orange";
  };
}
	$(document).ready(function(){
    document.getElementById('myresult').style.display = "none";
    document.getElementsByClassName('img-zoom-lens')[0].style.display = "none";
	$('#comment').click(function(){
		$('#commentpost').css({"display": "inline-block"});
	});
  });
function commentt()
{
  name = document.getElementById('tname').value;
  comment = document.getElementById('comment').value;
  Title = document.getElementById('Title').value;

	if(Title !== "" && name !== "" && comment !== "")
	{
	document.getElementById('commented').innerHTML +='<h3>'+Title+'</h3><p>'+comment+'</p><span>01/02/2000 </span>by <span>'+name+'</span>';
		$('#tname').css({"border-color": "#0008", "border-width": "1px"});
    $('#Title').css({"border-color": "#0008", "border-width": "1px"});
		$('#comment').css({"border-color": "#0008", "border-width": "1px"});
	}
	if (document.getElementById('tname').value == "")
	{
		$('#tname').css({"border-color": "red", "border-width": "2px"});
	}
  if (document.getElementById('Title').value == "")
	{
		$('#Title').css({"border-color": "red", "border-width": "2px"});
	}
	if (document.getElementById('comment').value == "")
	{
		$('#comment').css({"border-color": "red", "border-width": "2px"});
	}
	if (document.getElementById('tname').value != "")
	{
		$('#tname').css({"border-color": "#0008", "border-width": "1px"});
	}
	if (document.getElementById('comment').value != "")
	{
		$('#comment').css({"border-color": "#0008", "border-width": "1px"});
	}
}
function comment_check(){
  comment= document.getElementById('comment').value;
  Rcomment= /^[a-z]{2,400}$/;
  if(comment.length > 2 &&
      isNaN(comment)==true &&
      Rcomment.test(comment)== true){
        document.getElementById('comment').style.border = "solid #3c3 2px";
      }
      else {
        document.getElementById('comment').style.border = "solid #c33 2px";
      }
}
