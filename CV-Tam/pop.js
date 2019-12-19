//quand on click sur button appelle "pop"
function pop(name,but) {
//prendre toutes les pages et mettre dans liste "pages"
	var pages = document.getElementsByClassName("page");
//toutes les pages bye bye
	for (var i = 0; i < pages.length; i++) {
		pages[i].style.display = "none";
	}
//affiche la liste que pop demande
    document.getElementById(name).style.display = "inline-block";

//prendre tous les menu et mettre dans liste "menu"
    var menu = document.getElementsByClassName("menu");
//mettre tous les autres menus en "couleur"
    for (var i = 0; i < menu.length; i++) {
    	menu[i].style.backgroundColor = "#d9ece8";
    }
//couleur du boutton clické vert foncé
    but.style.backgroundColor = "rgb(155, 193, 185, 0.8)";
}


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
	var currentScrollPos = window.pageYOffset;
	if (prevScrollpos > currentScrollPos) {
    document.getElementById("fix").style.top = "0";
  } else {
    document.getElementById("fix").style.top = "-300px";
  }
  prevScrollpos = currentScrollPos;
}