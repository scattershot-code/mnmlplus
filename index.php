<?php get_header(); ?> <!-- calls header.php -->
    
    <body>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="content">
        	<h2 class="title"><?php the_title(); ?></h2>
        	
        	<div class="words">
        	    <?php the_content(''); ?>
        	</div>
        	
        	<ul class="info">
                    <?php if(get_the_author_meta('twitter') != '') : ?>
                <li><a href="https://twitter.com/intent/tweet?screen_name=<?php the_author_meta('twitter'); ?>&amp;text=(Re:%20<?php echo wp_get_shortlink(); ?>)%20" data-dnt="true">@<?php the_author_meta('twitter'); ?></a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>
                <?php endif; ?>
                     <li><i><?php echo get_post_meta($post->ID, 'location', true); ?></i></li>
                    <li><i><?php the_time(get_option('date_format')); ?></i></li>
        	</ul>
        	</div>

        <?php endwhile; endif; ?> 

  <nav>
            <div class="previous"><?php
/* Swapped around so left is first post and right is last post */
$next_post = get_next_post();
if($next_post) {
   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
   echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class=" ">&laquo;</a>' . "\n";
                }
?></div>

            <div class="next"><?php
/* Swapped around so left is first post and right is last post */
$prev_post = get_previous_post();
if($prev_post) {
   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
   echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class=" ">&raquo;</a>' . "\n";
                }
?></div>

        </nav>

<?php get_footer(); ?> <!-- calls footer.php -->