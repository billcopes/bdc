<!DOCTYPE html>
<html>
<head>
	<meta name="title" content="Biological Design Center - Moth Design">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<script src="https://use.typekit.net/xln6aya.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script>
		$(document).ready(function () {
		    $(document).on("scroll", onScroll);
    
		    //smoothscroll
		    $('a[href^="#"]').on('click', function (e) {
		        e.preventDefault();
		        $(document).off("scroll");
        
		        $('a').each(function () {
		            $(this).removeClass('active');
		        })
		        $(this).addClass('active');
      
		        var target = this.hash,
		            menu = target;
		        $target = $(target);
		        $('html, body').stop().animate({
		            'scrollTop': $target.offset().top - 80
		        }, 500, 'swing', function () {
		            window.location.hash = target;
		            $(document).on("scroll", onScroll);
		        });
		    });
		});

		function onScroll(event){
		    var scrollPos = $(document).scrollTop() + 250;
		    $('.page-nav .contents a').each(function () {
		        var currLink = $(this);
		        var refElement = $(currLink.attr("href"));
		        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
		            $('.page-nav .contents li a').removeClass("active");
		            currLink.addClass("active");
		        }
		        else{
		            currLink.removeClass("active");
		        }
		    });
		}
	</script>
	<script>
		$(document).ready(function () {
			$("p.templates").click(function(event) {
		   	 	// Figure out element to scroll to
		        var target = $('#template-map');
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 500, 'swing', function() {
					// Callback after animation
				    // Must change focus!
				    var $target = $(target);
				    $target.focus();
				    if ($target.is(":focus")) { // Checking if the target was focused
				    	return false;
					} else {
						$target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
						$target.focus(); // Set focus again
					};
				});
			});
		});
	</script>	
	<link  href="./css/jquery.fancybox.min.css" rel="stylesheet">
	<script src="./js/jquery.fancybox.min.js"></script>
</head>