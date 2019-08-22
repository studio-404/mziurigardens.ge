
$(function () {
	$('[data-toggle="tooltip"]').tooltip();
	$('.Tooltip').tooltip()
});


$(document).ready(function() { 
	 
	$(".fancybox").fancybox({});

	
	$(".ScrollDown").click(function() {
		$('html, body').animate({
			scrollTop: $(".HomeService").offset().top
		}, 1000);
	});
	
	$(".FloorImageDiv ").click(function() {
		$('html, body').animate({
			scrollTop: $(".ScrollTop11").offset().top
		}, 1000);
	});
		

    $('.ScrollTop').click(function(){
        $('html, body').animate({scrollTop : 0},1800);
        return false;
    });


	$('.Hamburger').click(function(e){
		e.stopPropagation();
		e.preventDefault();
		$('body').toggleClass('ShowMenu');
	});



    $('.FloorHover').hover(function(){ 
		var Size = $(this).attr('Size');
		$(this).data('tipText', Size).removeAttr('Size');
		$('<p class="tooltip_3"></p>')
		.html(Size)
		.appendTo('body')
		.show();
	}, function() { 
		$(this).attr('Size', $(this).data('tipText'));
		$('.tooltip_3').remove();
	})
	.mousemove(function(e){
		var mousex = e.pageX - 85; 
		var mousey = e.pageY - 100; 
		$('.tooltip_3')
		.css({ top: mousey, left: mousex })
	});



	$('.FloorHover222').hover(function(){ 
		var Size = $(this).attr('Size');
		$(this).data('tipText', Size).removeAttr('Size');
		$('<p class="tooltip_4"></p>')
		.html(Size)
		.appendTo('body')
		.show();
	}, function() { 
		$(this).attr('Size', $(this).data('tipText'));
		$('.tooltip_4').remove();
	})
	.mousemove(function(e){
		var mousex = e.pageX - 78; 
		var mousey = e.pageY - 95; 
		$('.tooltip_4')
		.css({ top: mousey, left: mousex })
	});


 
	$('.map').rwdImageMaps();//.delay(100);
	$(function() {
		$('.map').maphilight({
			fill: true,
			fillColor: '15b99b',
			fillOpacity: 0.9,
			stroke: false,
			strokeColor: '15b99b',
			strokeOpacity: 1,
			strokeWidth: 1,
			fade: true,
			alwaysOn: false
		}); 
	});
 
 
$(window).load(function() {
	$('.MapAreaDiv area.active').mouseover();
}); 
 
 
 
 
 

	//$('.ImgMap').imageMapResize();	
	$('.ImgMap').rwdImageMaps();
	$(function() {
		$('.ImgMap').maphilight({
			fill: true,
			fillColor: '15b99b',
			fillOpacity: 0.3,
			stroke: false,
			strokeColor: '15b99b',
			strokeOpacity: 1,
			strokeWidth: 1,
			fade: true,
			alwaysOn: false
		}); 
	});


	$('.HomeSlide .SlideInfoLeft').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.HomeSlide .HomeSlideImage',
		dots: true,
        appendDots: $('.HomeSlideControl'), 
        autoplay: true,
		autoplaySpeed: 5000, 
    });
	
    $('.HomeSlide .HomeSlideImage').slick({
        slidesToShow: 1,
        slidesToScroll: 1,  
        focusOnSelect: true,
        asNavFor: '.HomeSlide .SlideInfoLeft',   
        prevArrow: $('.InsideGallery .LeftSlide'),
        nextArrow: $('.InsideGallery .RightSlide'), 
        autoplay: true,
    });



    $('.HomeService .ServiceSlide').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        arrows: true,
        //fade: true,
 		dots: false,
 		prevArrow: $('.ControlService .ServicePrev'),
        nextArrow: $('.ControlService .ServiceNext'),
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 1,
        		slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 2000,
              }
            }
          ]  
        //appendDots: $('.ControlService'),  
    });



	
	
	
	
    $('.FlatSlide').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: true,
        //fade: true,
 		dots: false,
 		//prevArrow: $('.ControlService .ServicePrev'),
        //nextArrow: $('.ControlService .ServiceNext'),
        responsive: [
            {
              breakpoint: 1500,
              settings: {
                slidesToShow: 2,
        		slidesToScroll: 2,
              }
            },
			{
              breakpoint: 992,
              settings: {
                slidesToShow: 1,
        		slidesToScroll: 1,
              }
            }
          ]  
        //appendDots: $('.ControlService'),  
    });	
	
	
	
	
	 $('.NumberContent .SlideNum').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        arrows: true,
		//centerMode: true,
        //fade: true,
 		dots: false,
 		prevArrow: $('.LeftArrowNumbers'),
        nextArrow: $('.RightArrowNumbers'),  
    });	
	
	


     if (document.documentElement.clientWidth < 992) { 
	 	$('.ContentWithHeader .Content .BenefitsSlide').slick({
	        slidesToShow: 1,
	        slidesToScroll: 1,  
	        focusOnSelect: true,
         	arrows: false,
	        //asNavFor: '.HomeSlide .SlideInfoLeft',   
	       // prevArrow: $('.InsideGallery .LeftSlide'),
	       // nextArrow: $('.InsideGallery .RightSlide'), 
	        autoplay: true, 
			autoplaySpeed: 2000,
	    });

    }
    if (document.documentElement.clientWidth < 992) { 
	 	$('.ContentService .Content .SecuritySlide .ForSlideDiv').slick({
	        slidesToShow: 1,
	        slidesToScroll: 1,  
	        focusOnSelect: true,
         	arrows: false,
	        //asNavFor: '.HomeSlide .SlideInfoLeft',   
	       // prevArrow: $('.InsideGallery .LeftSlide'),
	       // nextArrow: $('.InsideGallery .RightSlide'), 
	        autoplay: true,
			autoplaySpeed: 2000,
	    });

    }

    if (document.documentElement.clientWidth < 992) { 
	 	$('.ContentWithHeader .Content .InfrastructureSlide').slick({
	        slidesToShow: 1,
	        slidesToScroll: 1,  
	        focusOnSelect: true,
         	arrows: false,
	        //asNavFor: '.HomeSlide .SlideInfoLeft',   
	       // prevArrow: $('.InsideGallery .LeftSlide'),
	       // nextArrow: $('.InsideGallery .RightSlide'), 
	        autoplay: true,
			autoplaySpeed: 2000,
	    });

    }

     if (document.documentElement.clientWidth < 992) { 
	 	$('.ContentService .Content .ForServiceSLide').slick({
	        slidesToShow: 1,
	        slidesToScroll: 1,  
	        focusOnSelect: true,
         	arrows: false,
	        //asNavFor: '.HomeSlide .SlideInfoLeft',   
	       // prevArrow: $('.InsideGallery .LeftSlide'),
	       // nextArrow: $('.InsideGallery .RightSlide'), 
	        autoplay: true,
			autoplaySpeed: 2000,
	    });

    }

     if (document.documentElement.clientWidth < 992) { 
	 	$('.GallerySlide').slick({
	        slidesToShow: 1,
	        slidesToScroll: 1,  
	        focusOnSelect: true,
         	arrows: false,
	        //asNavFor: '.HomeSlide .SlideInfoLeft',   
	       // prevArrow: $('.InsideGallery .LeftSlide'),
	       // nextArrow: $('.InsideGallery .RightSlide'), 
	        //autoplay: true,
	    });

    }

 
	var s = $("body");
	var pos = s.position();					   
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if (windowpos >= pos.top & windowpos <=150) {
			s.removeClass("BodyClass");
		} else {
			s.addClass("BodyClass");	
		}
	});
	
	
	$(function(){ 
	  $('#SelectOnChangeValue').on('change', function () {
		  var url = $(this).val(); 
		  if (url) { 
			  window.location = url;  
		  }
		  return false;
	  });
	});
	$(function(){ 
	  $('#SelectOnChangeValue2').on('change', function () {
		  var url = $(this).val(); 
		  if (url) { 
			  window.location = url;  
		  }
		  return false;
	  });
	});
	$(function(){ 
	  $('#SelectOnChangeValue3').on('change', function () {
		  var url = $(this).val(); 
		  if (url) { 
			  window.location = url;  
		  }
		  return false;
	  });
	});


});




 /*********************************************************************/
/*

	
	$(".ShowHideMenu").click(function(){
        $("body").toggleClass("ShowMenu"); 
       
	});
	$(".HideMenu").click(function(){
		 $("body").toggleClass("ShowMenu"); 
	});
 
	
 	$('img[usemap]').rwdImageMaps()
	$('.ProjectPageHead .map').maphilight({ 
		fillColor: 'ff6555',
		fill: true, 
		fillOpacity: 0.7,
		stroke: false,
		strokeColor: 'ff6555',
		strokeOpacity: 1, 
	});
	
	$('.FloorPageInfo .map').maphilight({ 
		fillColor: 'a59f93',
		fill: true, 
		fillOpacity: 0.3,
		stroke: false,
		strokeColor: 'a59f93',
		strokeOpacity: 1, 
	});
		
		
		
	$('.FloorHover').hover(function(){ 
		var Size = $(this).attr('Size');
		$(this).data('tipText', Size).removeAttr('Size');
		$('<p class="tooltip"></p>')
		.html(Size)
		.appendTo('body')
		.show();
	}, function() { 
		$(this).attr('Size', $(this).data('tipText'));
		$('.tooltip').remove();
	})
	.mousemove(function(e){
		var mousex = e.pageX - 200; 
		var mousey = e.pageY - 30; 
		$('.tooltip')
		.css({ top: mousey, left: mousex })
	});


	 $('.InsideGallery .BigImage').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.InsideGallery .SmallImages'
    });
	
    $('.InsideGallery .SmallImages').slick({
        slidesToShow: 3,
        slidesToScroll: 1,  
        focusOnSelect: true,
        asNavFor: '.InsideGallery .BigImage',   
        prevArrow: $('.InsideGallery .LeftSlide'),
        nextArrow: $('.InsideGallery .RightSlide'), 
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
              }
            }
          ]  
    });




	$('.ProjectItems').slick({
        slidesToShow: 2,
        slidesToScroll: 2,  
        focusOnSelect: true,
		speed: 500, 
		arrows: false,
		dots: true,
  //fade: true,
        // asNavFor: '.InsideGallery .BigImage',   
        appendDots: $('.SlideControlDiv'),         
        responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
              }
            }
          ]  
    });


*/

/*
	$('.FloorSlide .Numbers').slick({
        slidesToShow: 12 ,
        slidesToScroll: 1,
        arrows: true,
        //fade: true,
		prevArrow: $('.FloorSlide .ArrowLeft'),
        nextArrow: $('.FloorSlide .ArrowRight'), 
     });
*/


/*
	var wow = new WOW(
	  {
		boxClass:     'wow',      // animated element css class (default is wow)
		animateClass: 'animated', // animation css class (default is animated)
		offset:       0,          // distance to the element when triggering the animation (default is 0)
		mobile:       true,       // trigger animations on mobile devices (default is true)
		live:         true,       // act on asynchronously loaded content (default is true)
		callback:     function(box) {
		  // the callback is fired every time an animation is started
		  // the argument that is passed in is the DOM node being animated
		},
		scrollContainer: null // optional scroll container selector, otherwise use window
	  }
	);
	wow.init();

    $(".fancybox").fancybox({});

});

*/
 		
