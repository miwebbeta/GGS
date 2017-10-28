<!DOCTYPE html>
<html class=”no-js”>
  <head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <title><?php 
       if (is_home () ) { bloginfo('name'); } 
       elseif ( is_category() ) { 
           single_cat_title(); 
           echo ' - ' ; bloginfo('name'); }
       elseif (is_single() ) { 
           single_post_title(); }
       elseif (is_page() ) { 
           bloginfo('name'); 
           echo ': '; 
           single_post_title(); }
       else { wp_title('',true); } ?></title>
    <meta name="description" content="<?php if ( is_single() ) {
        single_post_title('', true); 
    } else {
        bloginfo('name'); echo " - "; bloginfo('description');
    }
    ?>" />
    
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <!-- El documento http://gmpg.org/xfn/11 es un perfil que define atributos adicionales para establecer la
            relación entre sitios web -->
        <link rel="profile" href="http://gmpg.org/xfn/11" />
         
        <!-- Esto permite saber cuando enlazan uno de nuestros post en otro blog o web, obteniendo la url del que nos enlaza -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
         
        <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
        <div class="container-fluid" id="wrapper"><!-- #wrapper -->
            <header id="header" class=".site-header"><!-- #header .site-header -->
                <div class="header-container"><!-- .header-container -->
                   
                        <div class="logo">
                            <a href="<?php bloginfo('wpurl'); ?>">
                                <img src="<?php bloginfo('template_directory'); ?>/img/logoGGS.png">
                            </a>
                        </div>   
                     <?php wp_nav_menu( [ 'theme_location'  => 'Idioma',
                                    'container'=>'div',
                                     'container_class'=>'nav-idioma ',
                                  'menu_class'=>'btn-group'  ] ); ?>
                    
                 
                </div><!-- .header-container end -->
            </header><!-- #header .site-header end -->
             <div class="clearfix visible"></div>

              <div class="menu-bar navbar-fixed-top" >
                  <button type="button" class="btn btn-default ">
			<a href="#" class="bt-menu">
				<span class="glyphicon glyphicon-align-justify"></span>
				
			</a>
                  </button>
		</div>   
               <div class="clearfix visible"></div>
            <nav class="page-navigation"><!-- .page-navigation -->
              
              <?php wp_nav_menu( [ 'theme_location'  => 'Menu-Top',
                                    'container'=>'div',
                                     'container_class'=>'nav-menu',
                                  'menu_class'=>'nav nav-pills nav-principal'  ] ); ?>
                
               
               
            </nav><!-- .page-navigation end -->
                     
          