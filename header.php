<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_enqueue_script('jquery.js', get_bloginfo('template_url').'/assets/javascripts/jquery.js'); ?>
	<?php wp_enqueue_script('slider.js', get_bloginfo('template_url').'/assets/javascripts/slider.min.js'); ?>
	<?php wp_enqueue_script('main.js', get_bloginfo('template_url').'/assets/javascripts/main.js'); ?>
	<?php wp_enqueue_script('functions', get_bloginfo('template_url').'/js/functions.js'); ?>
	<script>
	</script>
</head>
<body>
  <div id="header">
  	<div class="logo-area">
  		<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.png">
  	</div>
  	<div class="name-area">
  		<h2>早稲田大学　基幹理工学部　情報理工学科</h2>
  		<h1>酒井研究室</h1>
  	</div>
  	<div class="clear-both"></div>
  </div>
  <div id="menu-bar">
  	<ul>
      <a href="/"><li>Top</li></a>
      <a href="/projects"><li>Projects</li></a>
      <a href="/members"><li>Members</li></a>
      <a href="/news"><li>News</li></a>
      <a href="/links"><li>Links</li></a>
      <a href="/contact"><li>Contact</li></a>
      <a href="http://www.f.waseda.jp/tetsuya/sakai.html"><li class="last">THE SAKAI LAB (English)</li></a>
      <div class="clear-both"></div>
    </ul>
  </div>
	<div id="page-navigator"></div>
<?php wp_head(); ?>

