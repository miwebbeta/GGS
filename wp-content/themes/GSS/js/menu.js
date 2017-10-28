jQuery(document).ready(function(){
	
	var cont = 1;
        var selectorMenu = '.nav-menu .nav-principal  li.menu-item-has-children   a'; 
        var selectorActivado = '#submenu';
        var selectorSubmenu = '.nav-menu .nav-principal  li  a +  ul';
        var selectorNewSubmenu = '.nav-menu';
       
        
        if(screen.width>=992){
             var selectorMenu = '.nav-menu .nav-principal  li.menu-item-has-children   a'; 
             var selectorActivado = '#submenu';
             var selectorSubmenu = '.nav-menu .nav-principal  li  a +  ul';
             var text_submenu = jQuery(selectorSubmenu).html();
            jQuery(selectorNewSubmenu).append("<div id='submenu' class='nav nav-pills '>"+text_submenu+"</div>");
        }else{
             var selectorMenu =  '.menu-bar .btn';
             var selectorActivado = '.page-navigation .nav-menu';
              var selectorSubMovil = "#menu-principal.nav > li > a";
        var selectorActMovil = ".nav-menu .nav-principal li ul";
        
        jQuery(selectorSubMovil).on('click', function(){
        var cont = 1; 
        if(cont === 1){
           
           jQuery(selectorActMovil).stop();
           jQuery(selectorActMovil).slideToggle('slow');
                
          //  jQuery(selectorActivado).css({display: "inline-block"});//
            cont = 0;
        } else {
            cont = 1;
         jQuery(selectorActMovil).stop();
          jQuery(selectorActMovil).slideUp('slow');
         //  jQuery(selectorActivado).css({display: "none"});
        }
    });
             
        }
 
        jQuery(selectorMenu).on('click', function(){
          
        if(cont === 1){
           
           jQuery(selectorActivado).stop();
           jQuery(selectorActivado).slideToggle('slow');
                
            // jQuery(selectorActivado).css({display: "block"});
            cont = 0;
        } else {
            cont = 1;
         jQuery(selectorActivado).stop();
          jQuery(selectorActivado).slideUp('slow');
         //  jQuery(selectorActivado).css({display: "none"});
        }
    });
    
       
        
        
        
   
  
        
    

 
});
