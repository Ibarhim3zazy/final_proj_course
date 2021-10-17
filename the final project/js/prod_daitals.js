function checked(id){
  for (var b = 0; b < 5; b++) {
    document.getElementsByClassName('fa-star')[b].style.color = "#000";
  };
  for (var i = 0; i < id; i++) {
    document.getElementsByClassName('fa-star')[i].style.color = "orange";
  };
}
