//nav promena boje
window.onscroll = function() {navBoja()};

function navBoja(){
	var nav = document.getElementById('nav');
	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
		nav.classList.remove('transparent')
	}else {
nav.classList.add("transparent");
	}
}

//typed (hero)
var typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
    typeSpeed: 45
  });
  document.querySelectorAll(".typed-cursor")[0].style.display = "none";



//counter up js
$(document).ready(function() {
	
	$(".count").counterUp({
	delay: 150,
	time: 1000
	});

});
