<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
	<title><?php if ( is_category() ) {
		echo 'View all &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title(''); echo ' | '; bloginfo( 'name' );
	} ?></title>
    
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width; initial-scale=1"/><?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
	
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
	
        <?php if (is_page( 59 )) { ?>
             <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/screen.css" type="text/css" media="screen"></link>
            <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/inc/colorbox.css" type="text/css" media="screen"></link>
                           <script src="<?php bloginfo( 'template_url' ); ?>/library/js/jquery.colorbox-min.js"></script>

        <?php   } ?>
     
       
        <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css' />

        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/fonts/stylesheet.css" />

        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/theme.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/menubar.css" /> 
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
                <link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo( 'template_url' ); ?>/css/print.css" /> 


        <?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <link rel="stylesheet" href="<?php /* bloginfo( 'template_url' ); */ ?>/css/ie.css" media="all" type="text/css" />
	<![endif]-->
        
        
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <?php global $is_IE;   if ($is_IE) { ?>     <script src="<?php bloginfo( 'template_url' ); ?>/library/js/jquery.columnizer.js"  type="text/javascript" charset="utf-8"></script> 
        <script>
		$(function(){
			$('h1').addClass("dontend");
			$('.wide').columnize({width:300, lastNeverTallest: true });
			$('.thin').columnize({width:180});
                        $('.three').columnize({columns: 3});
		});
	</script>
        <?php }  ?>
<script>
$(document).ready( function(){
  var leftHeight = $(".front-left").height();
  var rightHeight = $(".front-right").height();
      if (leftHeight > rightHeight){ $(".front-right").height(leftHeight)}
         else{ $(".front-left").height(rightHeight)};
})
</script>

<?php 
    if ( 'lawyer_profile' == get_post_type() ) { ?>

    <script>

        function slideonlyone(thechosenone) {
             $('.newboxes').each(function(index) {
                  if ($(this).attr("id") == thechosenone) {
                       $(this).slideDown(200);
                  }
                  else {
                       $(this).slideUp(600);
                  }
             });
        }
        function toggleDiv(divId) {
           $("#"+divId).toggle();
        }
    </script>   

    <script>
        jQuery(document).ready(function($) {
            jQuery('a.popup').live('click', function(){
                newwindow=window.open($(this).attr('href'),'','height=800,width=600,scrollbars=1');
                if (window.focus) {newwindow.focus()}
                return false;
            });
        });
    </script> 
        <?php } ?>


</head>

<body <?php body_class(); ?>>
<div class="none">
	<p><a href="#content"><?php _e('Skip to Content'); ?></a></p><?php /* used for accessibility, particularly for screen reader applications */ ?>
</div><!--.none-->

 

	<div id="header"> 
		<div class="container">
			<div id="title">
					<div id="logo">
                                            <h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/jandb_logo.png" alt="<?php bloginfo('name'); ?>" title="Click to return to <?php bloginfo('name'); ?> homepage" width="278" height="45" class="screen" /></a><img src="<?php bloginfo( 'template_url' ); ?>/images/logo_print.png"  width="278" height="5" alt="" class="print"/> </h1>
                                        </div>
                        </div><!--#title-->
                        <div id="navbar">
                            <div id="nav-primary" class="nav"> 
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                            </div><!--#nav-primary-->
			<?php if ( ! dynamic_sidebar( 'Header' ) ) : ?><!-- Wigitized Header --><?php endif ?>
                        </div> <!--end navbar -->
			<div class="clear"></div>
		</div><!--.container-->
	 </div><!--#header-->
	<div class="container">