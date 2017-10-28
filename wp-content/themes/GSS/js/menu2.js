

jQuery(document).ready(function(){
	
	var cont = 1;
            var selectorMenu = '.nav-menu .nav-justified  li.menu-item-has-children   a'; 
        var selectorActivado = '.nav-menu .nav-justified  li  a +  ul';
 
	jQuery(selectorMenu).on('click', function(){
	
        if(cont === 1){
            jQuery(selectorActivado).stop();
        	jQuery(selectorActivado).slideToggle('slow');
                
              //  jQuery(selectorActivado).css({display: "block"});
            cont = 0;
        } else {
            cont = 1;
            jQuery(selectorActivado).stop();
          jQuery(selectorActivado).slideUp('slow');
           // jQuery(selectorActivado).css({display: "none"});
        }
 
    });
 
});
