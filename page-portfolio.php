<?php 

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<article class="post page">

			<!-- col-container -->
			<div class="col-container clearfix">

				<!-- title-col -->
				<div class="title-col">
					<h2><?php  the_title(); ?></h2>
				</div>

				<!-- text-col -->
				<div class="text-col">
					<p><?php the_content() ?></p>
				</div>
				
			</div>	

		</article>

	<?php endwhile;

	else : 
		echo '<p>No content found</p>';
endif;

get_footer();

?>