<?php 

/* 
Template Name: Special Layout
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<article class="post page clearfix">
			<h2><?php the_title() ?></h2>

            <!-- info box -->
            <div class="info-box">
                <h4>
                    Disclaimer Title
                </h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed nisi quis nisi finibus aliquet.
                </p>
            </div>

			<p><?php the_content() ?></p>
            
		</article>

	<?php endwhile;

	else : 
		echo '<p>No content found</p>';
endif;

get_footer();

?>