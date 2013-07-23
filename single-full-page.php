
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
    <head>
        <title><?php echo wp_title(''); ?></title>
        <meta name="description" content="<?php
        wp_title('');
        echo ' | ';
        bloginfo('description');
        ?>" />
        <meta name="viewport" content="width=device-width; initial-scale=1"/><?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
        <?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
        <?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/fonts/stylesheet.css" />

        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/theme.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />


        <link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css' />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <link href="//cloud.webtype.com/css/eb22e9e9-f27c-4aff-890a-6b52aca963d7.css" rel="stylesheet" type="text/css" />

    </head>

    <body <?php body_class(); ?>>
        <div class="none">
            <p><a href="#content"><?php _e('Skip to Content'); ?></a></p><?php /* used for accessibility, particularly for screen reader applications */ ?>
        </div><!--.none-->


        <div class="container full-bio">


            <div id="header">


                <div id="parent-link">
                    <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/jandb_logo_m.png" alt="<?php bloginfo('name'); ?>" class="full-page" title="Click to return to <?php bloginfo('name'); ?> homepage" class="screen" /></a><img src="<?php bloginfo('template_url'); ?>/images/logo_print.png"  width="278" height="50" alt="" class="print"/>

                    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                            <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>></div>
                            <?php
                            $child_id = $post->ID;
                            $parent_id = get_post_meta($child_id, '_wpcf_belongs_lawyer_profile_id', true);
                            $parent_permalink = get_permalink($parent_id);
                            $parent_title = get_the_title($parent_id);
                            ?>

                            <h4 class="lawyer-name">&lt;&lt; <a href="<?php echo $parent_permalink; ?>" target="_blank"><?php echo $parent_title; ?>'s Profile</a></h4>
                        </div>

                        <div class="clearfix"></div>

                    </div>



                    <!--#header-->


                    <h2 class="lawyer-name"><?php the_title(); ?></h2>
                    <div class="post-content fullbio">
                        <?php the_content(); ?>



                    </div><!-- #post-## -->


                <?php endwhile; /* end loop */ ?>


            <div id="footer"><footer>
                    <div class="container">

                        <p>&copy; <?php echo date("Y") ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">Johnson &amp; Bell, Ltd.</a>. <?php _e('All Rights Reserved.'); ?>


                        </p>
                        <?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>


                    </div><!--.container-->
                </footer></div><!--#footer-->


        </div> <!--container fullbio-->


    </body>
</html>