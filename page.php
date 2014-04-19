<?php get_header(); ?>
	<div id="container">
		<div id="page">

				<?php
				if(have_posts()) :
					while(have_posts()) :
						the_post();
				?>

			<div class="page-title">
				<h2><?php the_title(); ?></h2>
			</div>
			<?php the_content(); ?>
			<div class="clear-both">
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
	<?php get_footer(); ?>
</body>
</html>