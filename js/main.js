window.onscroll = function() {navBoja()};

function navBoja(){
	var nav = document.getElementById('nav');
	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
		nav.classList.remove('transparent')
	}else {
nav.classList.add("transparent");
	}
}

