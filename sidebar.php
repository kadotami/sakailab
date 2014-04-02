<div id="sidebar">
	<form role="search" method="get" id="searchform" class="searchform" action="http://kdtm.modern-min.net/">
		<div class="search_form">
			<input type="text" value="" name="s" id="s" placeholder="検索">
			<!-- <input type="submit" id="searchsubmit" value="検索"> -->
		</div>
	</form>
	<div class="recent_posts widget">
		<h4>最近の記事</h4>
		<ul>
		<?php wp_get_archives( 'type=postbypost&limit=5' ); ?>
		</ul>
	</div>

	<div class="widget">
		<h4>月別の記事</h4>
	  <?php wp_get_archives(); ?>
	</div>

	<div class="widget">
		<h4>カテゴリ</h4>
	  <?php
    	$cat_all = get_terms( "category", "fields=all&get=all" );
    	foreach($cat_all as $value):
 		?>
		<p><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></p>
		<?php endforeach; ?>
	</div>
</div>