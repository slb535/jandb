<?php

/*
Template Name: Full Bio
*/

?>
                               
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
	<title><?php  echo wp_title(''); ?></title>
	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta name="viewport" content="width=device-width; initial-scale=1"/><?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
	<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/fonts/stylesheet.css" />

        
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/theme.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        
        
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

</head>

<body <?php body_class(); ?>>
<div class="none">
	<p><a href="#content"><?php _e('Skip to Content'); ?></a></p><?php /* used for accessibility, particularly for screen reader applications */ ?>
</div><!--.none-->

	<div id="header"><header>
		 
			<div class="clear"></div>
	</header></div><!--#header-->
	<div class="container full-bio">
 
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

 				<h2><?php the_title(); ?></h2>
					<div class="post-content fullbio">
					<?php the_content(); ?>
				</div><!--.post-content-->
 
			

		</div><!-- #post-## -->
             
                
	<?php endwhile; /* end loop */ ?>
            
            
	
<div id="footer"><footer>
		<div class="container">
			
                        <p>&copy; <?php echo date("Y") ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">Johnson &amp; Bell, Ltd.</a>. <?php _e('All Rights Reserved.'); ?>

                             
                        </p>
		<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>

                       
		</div><!--.container-->
	</footer></div><!--#footer-->
        

        </div>
        
        </body>
</html>
