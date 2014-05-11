<?php get_header(); ?>
<div id="container">
	<div class="slide-show">
	</div>
	<div class="content">
		<div class="recent_posts">
		  <h4>新着情報</h4>
		  <ul>
		    <?php wp_get_archives( 'type=postbypost&limit=10' ); ?>
		  </ul>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
</body>
</html>