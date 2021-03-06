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
  	<div class="header-content">
	  	<div class="logo-area">
	  		<div class="rotate-logo">
	  			<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo-circle.svg">
	  		</div>
	  		<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/logo.svg">
	  	</div>
	  	<div class="name-area">
	  		<h2>早稲田大学　基幹理工学部　情報理工学科</h2>
        <h2>基幹理工学研究科　情報理工・情報通信専攻</h2>
	  		<h1>酒井研究室</h1>
	  	</div>
	  	<div class="clear-both"></div>
	  </div>
  </div>
  <div id="en-page-link-bar">
  	<a href="http://www.f.waseda.jp/tetsuya/">THE SAKAI LAB (English)</a>
  </div>
  <div id="menu-bar">
  	<ul>
      <a href="/"><li>トップ</li></a>
      <a href="/projects"><li>研究内容</li></a>
      <a href="/members"><li>メンバー</li></a>
      <a href="/environment"><li>研究室環境</li></a>
      <a href="/links"><li>関連リンク</li></a>
      <a href="/contact"><li>連絡先</li></a>
      <div class="clear-both"></div>
    </ul>
  </div>
	<div id="page-navigator"></div>
<?php wp_head(); ?>

