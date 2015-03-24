<?php get_header(); ?>
<div id="container">
	<div class="content">
		<div class="recent-posts">
		  <?php
			$categories = get_categories();
			foreach($categories as $category) :
			  echo '<h4>' . $category->cat_name . '</h4><ul>';
			  query_posts('showposts=5&cat=' . $category->cat_ID);
			    while(have_posts()) :
			      the_post();
			      echo '<li><a href='. get_permalink() .'>' . get_the_title() . '</a></li>';
			    endwhile;
			  wp_reset_query();
			  echo '</ul>';
			endforeach;
			?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
</body>
</html>