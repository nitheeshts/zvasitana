jQuery( document ).ready(function(){
	  jQuery("#menu-toggle-search").on("click",function(e) {     
        jQuery(".header-search").toggleClass("toggled");
		return false;
    });	
	  
	   jQuery('.bxslider').bxSlider();
	  
});


/* KNOB */
jQuery(function() {

jQuery(".skill1").knob({

                'max':100,

                'width': 64,

                'readOnly':true,

                'inputColor':' #FFFFFF ',

                'bgColor':' #252525 ',

                'fgColor':' #fc5f45 '

                });

jQuery(".skill2").knob({

                'max':100,

                'width': 64,

                'readOnly':true,

                'inputColor':' #FFFFFF ',

                'bgColor':' #252525 ',

                'fgColor':' #fc5f45 '

                });

  jQuery(".skill3").knob({

                'max': 100,

                'width': 64,

                'readOnly': true,

                'inputColor':' #FFFFFF ',

                'bgColor':' #252525 ',

                'fgColor':' #fc5f45 '

                });

  jQuery(".skill4").knob({

                'max': 100,

                'width': 64,

                'readOnly': true,

                'inputColor':' #FFFFFF ',

                'bgColor':' #252525',

                'fgColor':' #fc5f45 '

                });

});


