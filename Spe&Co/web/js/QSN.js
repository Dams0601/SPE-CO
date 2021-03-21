/* HANBURGER */
const hamburger = document.querySelector('#hamburger');
const navContent = document.querySelector('.navbar-content');

hamburger.addEventListener('click', function (e) {
    navContent.classList.toggle('show');
})

/* Carousel comments */
var timer = 4000;

var i = 0;
var max = $('.card').length;
 
	$(".card").eq(i).addClass('active').css('left','10%');
	$(".card").eq(i + 1).addClass('active').css('left','40%');
	$(".card").eq(i + 2).addClass('active').css('left','70%');
 

	setInterval(function(){ 

		$(".card").removeClass('active');

		$(".card").eq(i).css('transition-delay','0.25s');
		$(".card").eq(i + 1).css('transition-delay','0.5s');
		$(".card").eq(i + 2).css('transition-delay','0.75s');

		if (i < max-3) {
			i = i+3; 
		}

		else { 
			i = 0; 
		}  

		$(".card").eq(i).css('left','10%').addClass('active').css('transition-delay','1.25s');
		$(".card").eq(i + 1).css('left','40%').addClass('active').css('transition-delay','1.5s');
		$(".card").eq(i + 2).css('left','70%').addClass('active').css('transition-delay','1.75s');
	
	}, timer);
 