jQuery(document).ready(function() {


	$('.menu-icon-img-fashe5').click(function() {
		if ($('.menu-icon-img-fashe5').hasClass('rotate'))
		 {
		 	$( ".side-menu-fashe5" ).animate({
			    left: "-400"
			  }, 600);
		 }else
		 {
			$( ".side-menu-fashe5" ).animate({
			    left: "20"
			  }, 600, function() {
			    // Animation complete.
			    $( ".side-menu-fashe5" ).animate({
			    left: "0"
			  	},300);
			  });
		 }
			  

	});

	$('.menu-icon-img-fashe5').click(function(e){
    	$(this).toggleClass('rotate', {duration:500});
    	e.preventDefault();
	});
	
	
	
	
	
	
});


//onload

$( window).load(function()
{
	
	$('.account-right-info').animate(
		{
			opacity     :"1",
			paddingRight:"100px"
		},400);

});