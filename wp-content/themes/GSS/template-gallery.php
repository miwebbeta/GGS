<?php /* Template Name: Gallery 2 col */ ?>

<?php

    get_header();
?>
  
<div id="primary" class="content-area">
		<main id="main" class="page-galery" role="main">
                    <div class="center-block">
                    <?php if(have_posts()):
                     
                            while (have_posts()):the_post(); ?>
                                 
                                        <?php the_content(); ?>
                            <?php endwhile; 
                        endif;?>
                    </div>
                </main>
</div>
<?php 
    get_footer();
    ?>
