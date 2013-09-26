<?php 
/*
Template Name: Archives
*/
get_header(); ?> <!-- calls header.php -->



	<div class="content">
<h2 class="title">Contents</h2>



		<?php

	 	$second_query = new WP_Query('posts_per_page=-1');

		while ($second_query->have_posts()) : $second_query->the_post();

		?>



<span class="date"><?php the_time('Y m d') ?></span> <span class="contents"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><b><?php the_title(); ?></b></a></span><br />



<?php endwhile; ?>

<?php wp_reset_postdata(); ?>



	</div>



<?php get_footer(); ?> <!-- calls footer.php -->