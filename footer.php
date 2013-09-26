<div class="footer">
<p><a href="/">latest</a> . <a href="/contents/">contents</a> . <?php
$randomPost = $wpdb->get_var("SELECT guid FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish' ORDER BY rand() LIMIT 1");
echo '<a href="'.$randomPost.'">random</a>';
?> . <a href="/about/">about</a></p> 
<p>&copy;2013 Sparkwood and 21.</p>
</div>        
        <?php wp_footer() ?>
	</body>
</html>