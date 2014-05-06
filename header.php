<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_enqueue_script('jquery.js', get_bloginfo('template_url').'/assets/javascripts/jquery.js'); ?>
	<?php wp_enqueue_script('jquery.js', get_bloginfo('template_url').'/assets/javascripts/slider.min.js'); ?>
	<?php wp_enqueue_script('jquery.js', get_bloginfo('template_url').'/assets/javascripts/main.js'); ?>
	<?php wp_enqueue_script('functions', get_bloginfo('template_url').'/js/functions.js'); ?>
	<script>
	</script>
</head>
<body>
	<div id="header">
		<div class="header-contents">
			<div class="title">Real Sakai Lab</div>
		</div>
	</div>
	<div id="nav">
		<ul>
			<a href="/" <?php if (is_page('top')): ?> class="current"<?php endif; ?>><li>TOP</li></a>
			<a href="/projects" <?php if (is_page('projects')): ?> class="current"<?php endif; ?>><li>PROJECTS</li></a>
			<a href="/members" <?php if (is_page('members')): ?> class="current"<?php endif; ?>><li>MEMBERS</li></a>
			<a href="/news" <?php if (is_page('news')): ?> class="current"<?php endif; ?>><li>NEWS</li></a>
			<a href="/links" <?php if (is_page('links')): ?> class="current"<?php endif; ?>><li>LINKS</li></a>
			<a href="/contact" <?php if (is_page('contact')): ?> class="current"<?php endif; ?>><li>CONTACT</li></a>
			<div class="clear-both"></div>
		</ul>
	</div>

	<div id="page-navigator"></div>

<?php wp_head(); ?>

