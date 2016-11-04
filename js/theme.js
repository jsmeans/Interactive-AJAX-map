

jQuery.noConflict()
jQuery(document).ready(function(){
    (function($){

$(".nav-button").click(function(){
      	console.log("clicked");
        $(".overlay").toggle();

        });



        
    	


    })(jQuery);
 
});

