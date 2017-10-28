<?php

    get_header();
?>
  
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    <?php if(have_posts()):
                     query_posts('page_id=60&posts_per_page=1');
                            while (have_posts()):the_post(); ?>
                                 
                                        <?php the_content(); ?>
                            <?php endwhile; 
                        endif;
                    wp_reset_query();?>
                </main>
</div>
<?php 
    get_footer();
    ?>