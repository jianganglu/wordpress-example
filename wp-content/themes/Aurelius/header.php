<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<?php
	if ( is_home() ) {
		bloginfo('name'); echo " - "; bloginfo('description');
	} elseif ( is_category() ) {
		single_cat_title(); echo " - "; bloginfo('name');
	} elseif (is_single() || is_page() ) {
		single_post_title();
	} elseif (is_search() ) {
		echo "搜索结果"; echo " - "; bloginfo('name');
	} elseif (is_404() ) {
		echo '页面未找到!';
	} else {
		wp_title('',true);
	}
?>
</title>
<!-- Stylesheets -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper" class="container_12 clearfix">
    <!-- Text Logo -->
    <h1 id="logo" class="grid_4"><?php get_option('home'); ?>Aurelius</h1>
    <!-- Navigation Menu -->
    <ul id="navigation" class="grid_8">
        <li><a href="contact.html"><span class="meta">Get in touch</span><br />
            Contact Us</a></li>
        <li><a href="blog.html" class="current"><span class="meta">Latest news</span><br />
            Blog</a></li>
        <li><a href="index.html"><span class="meta">Homepage</span><br />
            Home</a></li>
    </ul>
    <div class="hr grid_12 clearfix">&nbsp;</div>
    <!-- Caption Line -->
    <h2 class="grid_12 caption clearfix"><?php bloginfo('description'); ?>Our <span>blog</span>, keeping you up-to-date on our latest news.</h2>
    <div class="hr grid_12 clearfix">&nbsp;</div>