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


	// MULTYSTEP FORM

	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab

	function showTab(n) {
	  // This function will display the specified tab of the form ...
	  var x = document.getElementsByClassName("tab");
	  x[n].style.display = "block";
	  // ... and fix the Previous/Next buttons:
	  if (n == 0) {
	    document.getElementById("prevBtn").style.display = "none";
	  } else {
	    document.getElementById("prevBtn").style.display = "inline";
	  }
	  if (n == (x.length - 1)) {
	    document.getElementById("nextBtn").innerHTML = "Submit";
	  } else {
	    document.getElementById("nextBtn").innerHTML = "Next";
	  }
	  // ... and run a function that displays the correct step indicator:
	  fixStepIndicator(n)
	}

	function nextPrev(n) {
	  // This function will figure out which tab to display
	  var x = document.getElementsByClassName("tab");
	  // Exit the function if any field in the current tab is invalid:
	  if (n == 1 && !validateForm()) return false;
	  // Hide the current tab:
	  x[currentTab].style.display = "none";
	  // Increase or decrease the current tab by 1:
	  currentTab = currentTab + n;
	  // if you have reached the end of the form... :
	  if (currentTab >= x.length) {
	    //...the form gets submitted:
	    document.getElementById("contact__form").submit();
	    return false;
	  }
	  // Otherwise, display the correct tab:
	  showTab(currentTab);
	}

	function validateForm() {
	  // This function deals with validation of the form fields
	  var x, y, i, valid = true;
	  x = document.getElementsByClassName("tab");
	  y = x[currentTab].getElementsByTagName("input");
	  // A loop that checks every input field in the current tab:
	  for (i = 0; i < y.length; i++) {
	    // If a field is empty...
	    if (y[i].value == "") {
	      // add an "invalid" class to the field:
	      y[i].className += " invalid";
	      // and set the current valid status to false:
	      valid = false;
	    }
	  }
	  // If the valid status is true, mark the step as finished and valid:
	  if (valid) {
	    document.getElementsByClassName("step")[currentTab].className += " finish";
	  }
	  return valid; // return the valid status
	}

	function fixStepIndicator(n) {
	  // This function removes the "active" class of all steps...
	  var i, x = document.getElementsByClassName("step");
	  for (i = 0; i < x.length; i++) {
	    x[i].className = x[i].className.replace(" active", "");
	  }
	  //... and adds the "active" class to the current step:
	  x[n].className += " active";
	}


	// SCROLL ANIMATIONS

	var square = $('#corner__square');
	var home = $('#home').offset();
	var me = $('#me').offset();
	var work = $('#work').offset();
	var design = $('#design').offset();
	var photography = $('#photography').offset();
	var contact = $('#contact').offset();
	var menu = $('#main_menu_ul');
	var $window = $(window);

	$window.scroll(function() {
		if ( $(window).scrollTop() >= home.top ) {
			$(square).children('h3').text('');
			$(square).removeClass().addClass('corner__square-yellow');
			$(menu).children('li:nth-child(2)').children('a').removeClass('active');
			$(menu).children('li:nth-child(1)').children('a').addClass('active');
		}
		if ( $(window).scrollTop() >= me.top ) {
			$(square).children('h3').text('M');
			$(square).removeClass().addClass('corner__square-rose');
			$(menu).children('li:nth-child(1)').children('a').removeClass('active');
			$(menu).children('li:nth-child(2)').children('a').addClass('active');
			$(menu).children('li:nth-child(3)').children('a').removeClass('active');
		}
		if ( $(window).scrollTop() >= work.top ) {
			$(square).children('h3').text('W');
			$(square).removeClass().addClass('corner__square-lightblue');
			$(menu).children('li:nth-child(2)').children('a').removeClass('active');
			$(menu).children('li:nth-child(3)').children('a').addClass('active');
			$(menu).children('li:nth-child(4)').children('a').removeClass('active');
		}
		if ( $(window).scrollTop() >= design.top ) {
			$(square).children('h3').text('D');
		}
		if ( $(window).scrollTop() >= photography.top ) {
			$(square).children('h3').text('P');
			$(menu).children('li:nth-child(3)').children('a').removeClass('active');
			$(menu).children('li:nth-child(4)').children('a').addClass('active');
			$(menu).children('li:nth-child(5)').children('a').removeClass('active');
		}
		if ( $(window).scrollTop() >= contact.top ) {
			$(square).children('h3').text('C');
			$(square).removeClass().addClass('corner__square-yellow');
			$(menu).children('li:nth-child(4)').children('a').removeClass('active');
			$(menu).children('li:nth-child(5)').children('a').addClass('active');
		}
	});

	