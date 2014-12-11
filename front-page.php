<?php get_header(); ?>
<div id="container">
	<div class="content">
		<div class="about_area">
		</div>
		<div class="recent_posts">
		  <?php
			$categories = get_categories();
			foreach($categories as $category) :
			  echo '<h4>' . $category->cat_name . '</h4><ul>';
			  query_posts('showposts=5&cat=' . $category->cat_ID);
			    while(have_posts()) :
			      the_post();
			      echo '<a href='. get_permalink() .'><li>' . get_the_title() . '</li></a>';
			    endwhile;
			  wp_reset_query();
			  echo '</ul>';
			endforeach;
			?>
		</div>
	</div>
</div>
<?php get_sidebar(); ?>
</body>
</html>