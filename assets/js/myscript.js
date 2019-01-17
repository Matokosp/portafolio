	// NAVIGATION MENU AND SECTION SNAP

	function scrollToClass(aid) {
		var aTag = $('' + aid)
		$('html, body').animate({ scrollTop: aTag.offset().top }, 'slow')
	}

	$(".menu ul li a").on('click', function() {	
		var target = $(this).attr('href')
		scrollToClass(target)
	})

	$(function(){
		$( '.snap' ).scrollSnap()
	})

	// MENU

	var menuShow = $('.menu__responsive').children(".menu__responsive--hidden").hasClass('show');

	function desplazar (){
		$('.menu__responsive--hidden').toggleClass('show');
		$('#hamburger').toggleClass('hamburguer-slide');
	}

	$('#hamburger').on('click', function(e){		
		desplazar();
		e.stopPropagation();
		menuShow = $('.menu__responsive').children(".menu__responsive--hidden").hasClass('show');
		console.log(menuShow)
	})
   
	window.addEventListener('click', function(e){
		// var menuHide = $('.menu-hide');
		if (menuShow === true && e.target.className != 'menu__responsive--hidden show') {
			desplazar();			
		}		
		console.log(e.target)
	})


	// FlexSlider 
	
	$(window).load(function(){
	  $('.flexslider').flexslider({
	    animation: "slide",
	    start: function(slider){
	      $('body').removeClass('loading');
	    }
	  });
	});


	
