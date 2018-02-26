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
	delay: 190,
	time: 1000
	});

});



// Acordion
$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});
