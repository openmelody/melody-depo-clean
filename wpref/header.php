<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if (is_single() || is_page() || is_archive()) { bloginfo('name'); echo(' &#8211; '); wp_title('',true); } else { bloginfo('name'); echo(' &#8211; '); bloginfo('description'); } ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body>
<div class="container">
	<div class="header">
        <div class="search">
            <form method="get" id="sform" action="<?php bloginfo('home'); ?>/">
                <input type="text" id="q" value="<?php echo wp_specialchars($s, 1); ?>" name="s" size="15" />
			</form>
        </div><!-- end search -->
        	<?php if (is_home()) : ?>
        		<h1><?php bloginfo('name'); ?> 
        	<?php else : ?>
		        <h1><a href="<?php echo get_settings('home'); ?>/"><?php bloginfo('name'); ?></a> 
            <?php endif; ?>
		<span><?php bloginfo('description'); ?></span></h1>
	</div><!-- end header -->

