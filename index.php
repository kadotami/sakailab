<?php get_header(); ?>
<div id="container">
		<div class="content">
			<div id="posts">
				<?php
				if(have_posts()) :
					while(have_posts()) :
						the_post();
				?>

				<div class="post">
					<div class="post-header">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="post-meta">
							<?php echo get_the_date(); ?> 【<?php the_category(', ')?>】
						</div>
					</div>
					<div class="post-contents">
						<div class="post-body">
							<?php the_excerpt(); ?>
						</div>
					</div>
					<div class="clear-both"></div>
				</div>

				<?php
					endwhile;
					else:
				?>

				<p>投稿が存在しません</p>

				<?php
				endif;
				?>

				<div class="navigation">
					<div class="prev"><?php previous_posts_link();?></div>
					<div class="next"><?php next_posts_link();?></div>
				</div>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>


	<?php get_footer(); ?>
