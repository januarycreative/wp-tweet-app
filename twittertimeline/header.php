<!DOCTYPE HTML>
<!--[if IE 7]><html class="ie7 old-ie" lang="en"><![endif]-->
<!--[if IE 8]><html class="ie8 old-ie" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if gt IE 9]><html lang="en"><![endif]-->

<head>
	<meta charset="utf-8">

    <!--Prevents Mobile Devices from Zooming all weird-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
    <!--Page Title-->       
    <title><?php bloginfo('name'); ?> <?php wp_title(" | ",true); // the | is the separator ?></title>
    
    <!--Site Description - used by search engines-->
    <meta name="Description" content="<?php bloginfo('description'); ?>">
            
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
    
    <!-- Support HTML5 in IE 6,7,8-->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <?php wp_enqueue_script('jquery'); ?>
    
    <!-- start WP_HEAD -->
    <?php wp_head(); ?>
    <!-- end WP_HEAD -->

</head>

<body>

	<header>
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		
		<!--<nav id="mainnav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </nav>-->
	</header>
	
	<div id="sitebody">