<?php /* Template Name: Single page */ ?>

<?php

    get_header();
?>
  
<div id="primary" class="content-area">
		<main id="main" class="single" role="main">
                    <div class="center-block">
                    <?php if(have_posts()):
                     
                            while (have_posts()):the_post(); ?>
                        <h4><?php the_title();?></h4>
                                        <?php the_content(); ?>
                            <?php endwhile; 
                        endif;?>
                    </div>
                </main>
</div>
<?php 
    get_footer();
    ?>


