$(window).load(function(){

});
$(document).ready(function(){

	if($('.bloc_agenda').length){
		$('.bloc_agenda h2:eq(1)').remove();
	}
	$('#btn-contact').click(function(event) {
		window.location.replace(baseurl+"demande_information");
	});
	//slider 
	$("#owl-example").owlCarousel();
	$('.bloc_formations').owlCarousel();
	var body_widh = $('body').width();
	var main_width = 960;
	var corner_width = body_widh - main_width;
	$('.content .slider .description').css("left",corner_width/2+"px"); 
	$('.slider .bx-wrapper .bx-pager').css("right",corner_width/2+"px"); 
	//bxslider
	 $('.bxslider').bxSlider({
	 	controls:false,
	 	auto:true,
	 	onSliderLoad: function(currentIndex){
	 	}
	 });
	 

	
	 //form label
	  if($('.form_label_on').length){
	   $('.form_label_on textarea, .form_label_on input[type=tel], .form_label_on input[type=email], .form_label_on input[type=text], .form_label_on input[type=password]').on('change keyup input',function(){
	    vid = $(this).attr('id');
	    vVal = $(this).val();
	    if(vVal.length > 0)
	     $('label[for='+vid+']').hide();
	    else
	     $('label[for='+vid+']').show();
	   }).each(function(){
	    $(this).keyup();
	   });
	  }


   	//form rappel
   	

	//input form news lettter
	$(".newsletter form").validate({
	  rules: {
	    nom: "required",
	    email: {
	      required: true,
	      email: true
	    }
	  },
		highlight: function(element) {
	          $(element).parent().addClass("error");
	    },
	    unhighlight: function(element) {
	        $(element).parent().removeClass("error");
	    },submitHandler: function(form) {
	    	var form = $(".newsletter form").serialize();
	    	$('.loader').show();
	    	$.post(baseurl+"ajax/postEmail",
	    	form,
		    function(data, textStatus, jqXHR)
		    {
		       var obj = jQuery.parseJSON(data);
		       if(obj == true){
		       	$('.loader').hide();
		       	$('.success').show().text('vous etes inscrit avec succes');
		       }else{
		       	$('.loader').hide();
		       	$('.success').show().text('vous etes deja inscrit');

		       }
		    }).fail(function(jqXHR, textStatus, errorThrown) 
		    {
		 
		    });
			  return false;
	    }
	});

	$("form.rappeler").validate({
	  rules: {
	    nom: "required",
	    email: {
	      required: true,
	      email: true
	    }
	  },
		highlight: function(element) {
	          $(element).parent().addClass("error");
	    },
	    unhighlight: function(element) {
	        $(element).parent().removeClass("error");
	    },submitHandler: function(form) {
	    	var form = $(".newsletter form").serialize();
	    	$('.loader').show();
	    	$.post(baseurl+"ajax/postEmail",
	    	form,
		    function(data, textStatus, jqXHR)
		    {
		       var obj = jQuery.parseJSON(data);
		       if(obj == true){
		       	$('.loader').hide();
		       	$('.success').show().text('vous etes inscrit avec succes');
		       }else{
		       	$('.loader').hide();
		       	$('.success').show().text('vous etes deja inscrit');

		       }
		    }).fail(function(jqXHR, textStatus, errorThrown) 
		    {
		 
		    });
			  return false;
	    }
	});

	
    $('.bwWrapper').BlackAndWhite({
        hoverEffect : true, // default true
        // set the path to BnWWorker.js for a superfast implementation
        webworkerPath : false,
        // to invert the hover effect
        invertHoverEffect: false,
        // this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
        intensity:1,
        speed: { //this property could also be just speed: value for both fadeIn and fadeOut
            fadeIn: 200, // 200ms for fadeIn animations
            fadeOut: 800 // 800ms for fadeOut animations
        },
        onImageReady:function(img) {
            // this callback gets executed anytime an image is converted
        }
    });
    $('#firstet').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('closed');
		$('.initiale').toggleClass('actived');
	});
	$('#seconded').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('closed');
		$('.specialisation').toggleClass('actived');
	});
		$('#seconded').toggleClass('closed');
		$('.specialisation').toggleClass('actived');
	$('#thirded').click(function(e) {
		e.preventDefault();
		$(this).toggleClass('closed');
		$('.professionnelle').toggleClass('actived');
	});
		$('#thirded').toggleClass('closed');
		$('.professionnelle').toggleClass('actived');





		$("#contact_form").validate({
		  rules: {
		    nom: "required",
		    prenom: "required",
		    tel: "required",
		    formation: "required",
		    message: "required",
		    email: {
		      required: true,
		      email: true
		    }
		  },
			highlight: function(element) {
		          $(element).parent().addClass("error");
		    },
		    unhighlight: function(element) {
		        $(element).parent().removeClass("error");
		    }
		});


		$("#rappeler").validate({
		  rules: {
		    nom: "required",
		    prenom: "required",
		    niveaux: "required",
		    tel: "required",
		    formation: "required",
		    raisons: "required",
		    email: {
		      required: true,
		      email: true
		    }
		  },
			highlight: function(element) {
		          $(element).parent().addClass("error");
		    },
		    unhighlight: function(element) {
		        $(element).parent().removeClass("error");
		    }
		});

		$("#rappler_popin").validate({
		  rules: {
		    nom: "required",
		    prenom: "required",
		    tel: "required",
		    formation: "required",
		    horaire: "required",
		    email: {
		      required: true,
		      email: true
		    }
		  },
			highlight: function(element) {
		          $(element).parent().addClass("error");
		    },
		    unhighlight: function(element) {
		        $(element).parent().removeClass("error");
		    },submitHandler: function(form) {
		    	var form = $("#rappler_popin").serialize();
		    	$.ajax({
		    		url: baseurl+'form/rappeler',
		    		type: 'POST',
		    		data: form,
		    	})
		    	.done(function(data) {
		    		var obj = jQuery.parseJSON(data);
		    		if(obj.msg == "success"){
			    		$('.form').remove();
			    		$('.reponse').show();
		    		}
		    		console.log(obj);
		    	})
		    	.fail(function() {
		    		console.log("error");
		    	})
		    	.always(function() {
		    		console.log("complete");
		    	});
		    	
			  return false;
	    }
		});

		$('.nav-icon1').click(function(){
    			$(this).toggleClass('open');
    			$('header nav').slideToggle('fast');
    			$('.menu-mobile').toggleClass('fixed');
  			});
		if ($(window).width() < 960){
			$(window).load(function() {
			 $imgslideheight = $('.content .bx-wrapper img.mobImg').innerHeight();
			console.log($imgslideheight);
			 $positionPager = $imgslideheight - 60;
			$('.slider .bx-wrapper .bx-pager, .slider .bx-wrapper .bx-controls-auto').css({
				top: $positionPager+'px'
			});
			});
			
			$('body').removeClass('hoverOn');
			$('.menu-mobile').insertBefore('header');
			$('nav .menu_container .first_menu span  a').not('.no-sub').on('click', function(e) {
				e.preventDefault();
				e.stopPropagation();
				$('.first_menu').removeClass('active');
				$(this).parents('.first_menu').toggleClass('active');
    		});
    		$('#btn-rappler').click(function(){
   				$.colorbox({inline:true, href:"#rappeler",maxWidth:"100%"});
   			});
	   			$('.carousel').bxSlider({
				    minSlides: 1,
				    maxSlides: 1,
				    hideControlOnEnd: true,
				    slideMargin: 10,
				    pager:false,
				    infiniteLoop: false
		 		});

		}
		else{
			$('body').addClass('hoverOn');
			$('#btn-rappler').click(function(){
   				$.colorbox({inline:true, href:"#rappeler",maxWidth:"710px"});
   			});
   			$('.carousel').bxSlider({
			 	//slideWidth: 700,
			    maxSlides: 1,
			    minSlides: 1,
			    controls: false,
			    slideMargin: 10,
			    pager:true,
			    infiniteLoop: false
	 		});
		}
var 	menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
		menuRight = document.getElementById( 'cbp-spmenu-s2' ),
		menuTop = document.getElementById( 'cbp-spmenu-s3' ),
		menuBottom = document.getElementById( 'cbp-spmenu-s4' ),
		showLeft = document.getElementById( 'showLeft' ),
		showRight = document.getElementById( 'showRight' ),
		showTop = document.getElementById( 'showTop' ),
		showBottom = document.getElementById( 'showBottom' ),
		showLeftPush = document.getElementById( 'showLeftPush' ),
		showRightPush = document.getElementById( 'showRightPush' ),
		body = document.body;


showRightPush.onclick = function() {
	classie.toggle( this, 'active' );
	classie.toggle( body, 'cbp-spmenu-push-toleft' );
	classie.toggle( menuRight, 'cbp-spmenu-open' );
	disableOther( 'showRightPush' );
};

function disableOther( button ) {
	if( button !== 'showLeft' ) {
		classie.toggle( showLeft, 'disabled' );
	}
	if( button !== 'showRight' ) {
		classie.toggle( showRight, 'disabled' );
	}
	if( button !== 'showTop' ) {
		classie.toggle( showTop, 'disabled' );
	}
	if( button !== 'showBottom' ) {
		classie.toggle( showBottom, 'disabled' );
	}
	if( button !== 'showLeftPush' ) {
		classie.toggle( showLeftPush, 'disabled' );
	}
	if( button !== 'showRightPush' ) {
		classie.toggle( showRightPush, 'disabled' );
	}
}

});

var touch = 'ontouchstart' in document.documentElement
            || (navigator.MaxTouchPoints > 0)
            || (navigator.msMaxTouchPoints > 0);


