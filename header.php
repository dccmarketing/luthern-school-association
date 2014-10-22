<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="Lutheran School Association of Decatur. Delivering excellence in Christ-centered education to meet the spiritual, academic and social needs of its students." />
<title>
	<?php if ( is_front_page() ) { ?><?php bloginfo('name'); ?><?php } ?>	
    <?php if ( is_single() ) { ?><?php wp_title(''); ?> - <?php bloginfo('name'); ?><?php } ?>
    <?php if ( is_page() ) { ?><?php wp_title(''); ?> - <?php bloginfo('name'); ?><?php } ?>
    <?php if ( is_category() ) { ?>Archive <?php single_cat_title(); ?> - <?php bloginfo('name'); ?><?php } ?>    
    <?php if ( is_tag() ) { ?><?php single_tag_title();?> - <?php bloginfo('name'); ?><?php } ?>
    <?php if ( is_404() ) { ?>Sorry, not found! - <?php bloginfo('name'); ?><?php } ?>
</title>
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" /> 
<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />

<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.min.js"></script>

<?php wp_head(); ?>

</head>

<?php 
global $lsa_page_id;
$lsa_page_id = $post->ID; 
?>

<body>

<div class="lsa_container">
	
    <div class="lsa_header">
    	<div class="lsa_logo"><a href="<?php bloginfo('url'); ?>/"><img border="0" src="<?php bloginfo('template_directory'); ?>/images/lsa_logo.jpg" alt="Lutheran School Association of Decatur" /></a></div>
        <ul class="lsa_hdr_links">
        	<li><a href="<?php bloginfo('url'); ?>/contact-us/">CONTACT</a></li>
            <li>|</li>
            <li><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
            <li style="margin-top:0;"><a href="http://www.facebook.com/home.php?sk=group_49755855778" target="_blank"><img border="0" src="<?php bloginfo('template_directory'); ?>/images/fb_logo.jpg" alt="Find LSA on Facebook" /></a></li>
        </ul>
        <br clear="all" />
    	<ul class="lsa_nav">
        	<li><a href="<?php bloginfo('url'); ?>/welcome/">Welcome</a></li>
            <li>|</li>
            <li><a href="<?php bloginfo('url'); ?>/academics/">Academics</a></li>
            <li>|</li>
            <li><a href="<?php bloginfo('url'); ?>/athletics-2/">Athletics</a></li>
            <li>|</li>
            <li><a href="<?php bloginfo('url'); ?>/lsa-families/">LSA Families</a></li>
            <li>|</li>
            <li><a href="<?php bloginfo('url'); ?>/admissions/">Admissions</a></li>
            <li>|</li>
            <li><a href="<?php bloginfo('url'); ?>/programs/">Programs</a></li>
            <li>|</li>
            <li><a href="<?php bloginfo('url'); ?>/giving/">Giving</a></li>
            <li>|</li>
            <li><a href="<?php bloginfo('url'); ?>/alumni/">Alumni</a></li>
        </ul>
    </div>
    
    <div class="lsa_content_wrap">
    	<img src="<?php bloginfo('template_directory'); ?>/images/bg_content_top.jpg" alt="Delivering excellence in Christ-centered education to meet the spiritual, academic and social needs of its students" />