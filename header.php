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
	<div class="header-back-image">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/header_back.png">
	</div>
	<div id="header">
		<div id="header_contents">
			<div id="title"><?php bloginfo('name'); ?></div>
			<div class="sub-title">~ほげふがぴよ〜ん♪~</div>
		</div>
	</div>
	<div id="nav">
		<ul>
			<li><a href="/">TOP</a></li>
			<li><a href="/profile">PROFILE</a></li>
			<li><a href="/hobby">HOBBY</a></li>
		</ul>
		<div class="clear-both"></div>
	</div>

	<div id="page_navigator"></div>

<?php wp_head(); ?>

