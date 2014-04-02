<?php get_header(); ?>
	<div id="container">
		<div id="contents">
			<div id="posts">

				<?php
				if(have_posts()) :
					while(have_posts()) :
						the_post();
				?>

				<div class="post">
					<div class="post-header">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div>
					<div class="page-contents">
							<?php the_content(); ?>
					</div>
				</div>

				<?php
					endwhile;
					else:
				?>

				<p>ページが存在しません</p>

				<?php
				endif;
				?>

			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
	<?php get_footer(); ?>
</body>
</html>