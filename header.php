<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_enqueue_script('jquery.js', get_bloginfo('template_url').'/js/jquery.js'); ?>
	<?php wp_enqueue_script('functions', get_bloginfo('template_url').'/js/functions.js'); ?>
	<script>
	</script>
</head>
<body>
	<div id="header">
		<div class="header-contents">
			<div class="title"><?php bloginfo('name'); ?></div>
		</div>
	</div>
	<div id="nav">
		<ul>
			<li><a href="/">TOP</a></li>
			<li><a href="/members">MEMBERS</a></li>
			<li><a href="/news">NEWS</a></li>
			<div class="clear-both"></div>
		</ul>
	</div>

	<div id="page-navigator"></div>

<?php wp_head(); ?>

