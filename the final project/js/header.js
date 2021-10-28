var input = document.getElementById("text-search");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("submit").click();
  }
});
function submit(){
document.getElementById("submit").submit();
}
function toogle(){
	document.querySelector('.navbar').classList.toggle('navbar--open');
	if (document.getElementById('black').style.display == "block"){
		document.getElementById('black').style.display = "none";
	} else {
			document.getElementById('black').style.display = "block";
		}
}
function show()
{
	document.getElementById('logo-center').style.display="none";
	document.getElementsByClassName('logo')[0].style.display="none";
	document.getElementById('text-search').style.display="inline-block";
	document.getElementById('icon-search').style.display="none";
	document.getElementById('close-search').style.display="inline-block";
}
function closesearch()
{
	document.getElementById('logo-center').style.display="inline-block";
	document.getElementById('text-search').style.display="none";
	document.getElementById('icon-search').style.display="inline-block";
	document.getElementById('close-search').style.display="none";
	document.getElementsByClassName('logo')[0].style.display="inline-block";
}
const scrollBtn = document.querySelector('.scroll-btn') ;
window.addEventListener('scroll', () => {
    if(document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollBtn.style.display = 'block' ;
    }
    else {
        scrollBtn.style.display = 'none' ;
    }
})
scrollBtn.addEventListener('click' , () => {
    window.scroll({
        top: 0 ,
        behavior: "smooth"
    })
})
