<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes();
?>>
    <head>
        <title><?php
            if (is_category()) {
                echo 'View all &quot;';
                single_cat_title();
                echo '&quot; | ';
                bloginfo('name');
            } elseif (is_tag()) {
                echo 'Tag Archive for &quot;';
                single_tag_title();
                echo '&quot; | ';
                bloginfo('name');
            } elseif (is_archive()) {
                wp_title('');
                echo ' Archive | ';
                bloginfo('name');
            } elseif (is_search()) {
                echo 'Search for &quot;' . wp_specialchars($s) . '&quot; | ';
                bloginfo('name');
            } elseif (is_home()) {
                bloginfo('name');
                echo ' | ';
                bloginfo('description');
            } elseif (is_404()) {
                echo 'Error 404 Not Found | ';
                bloginfo('name');
            } elseif (is_single()) {
                wp_title('');
            } else {
                echo wp_title('');
                echo ' | ';
                bloginfo('name');
            }
            ?></title>

        <meta charset="UTF-8" />

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('atom_url'); ?>" />


        <?php wp_head(); ?> 


        <meta name="viewport" content="width=device-width, initial-scale = 1.0">


            <?php
            global $is_IE;
            if ($is_IE) {
                ?>  <script src="<?php bloginfo('template_url'); ?>/library/js/jquery.columnizer.min.js"  type="text/javascript" charset="utf-8"></script> 
                <script>
                    $(function() {
                        $('h1').addClass("dontend");
                        $('.wide').columnize({width: 300, lastNeverTallest: true});
                        $('.thin').columnize({width: 180});
                        $('.three').columnize({columns: 3});
                    });
                </script>
            <?php } ?>
            <script>
                $(document).ready(function() {
                    var pageWidth = $(window).width();
                    if (pageWidth > 650) {

                        var leftHeight = $(".front-left").height();
                        var rightHeight = $(".front-right").height();
                        if (leftHeight > rightHeight) {
                            $(".front-right").height(leftHeight);
                        }
                        else {
                            $(".front-left").height(rightHeight);
                        }
                        ;
                    }
                });

            </script>

            <?php if ('lawyer_profile' == get_post_type()) { ?>

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
                        $("#" + divId).toggle();
                    }
                </script>

                <script>
                    jQuery(document).ready(function($) {
                            jQuery('a.popup').live('click', function() {
                                    newwindow = window.open($(this).attr('href'), '', 'height=800,width=600,scrollbars=1');
                                    if (window.focus) {
                                newwindow.focus();
                            }
                                    return false;
                            });
                    });
                </script>
            <?php }  // end if lawyer post type ?>


    </head>

    <body <?php body_class(); ?>>

        <?php include_once("analyticstracking.php") ?>

        <div class="none">
            <p><a href="#content"><?php _e('Skip to Content'); ?></a></p><?php /* used for accessibility, particularly for screen reader applications */ ?>
        </div><!--.none-->


        <div class="container">

            <div id="header">

                <div id="responsive-menu"><a href="javascript:toggleDiv('nav-primary-mobile');">MENU</a></div>

                <div id="logo" class="theta larger">
                    <h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/jandb_logo.png" alt="<?php bloginfo('name'); ?>" title="Click to return to <?php bloginfo('name'); ?> homepage" width="278" height="45" class="screen" /></a><img src="<?php bloginfo('template_url'); ?>/images/logo_print.png"  width="278" height="50" alt="" class="print"/> </h1>
                </div>
                <div id="logo" class="theta smaller">
                    <h1><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/jandb_logo_m.png" width="200"  alt="<?php bloginfo('name'); ?>" title="Click to return to <?php bloginfo('name'); ?> homepage"  class="screen" /></a>
                        <img src="<?php bloginfo('template_url'); ?>/images/logo_print.png"  width="278" height="50" alt="" class="print"/>
                    </h1>
                </div>

                <div id="navbar" class="grid_9">

                    <div id="nav-primary" class="nav">
                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </div><!--#nav-primary-->
                    <div class="toggleBox" id="nav-primary-mobile" >
                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </div><!--#nav-primary-mobile-->
                    <?php if (!dynamic_sidebar('Header')) : ?><!-- Wigitized Header --><?php endif ?>
                    <div class="clearfix"></div>

                </div> <!--end navbar -->

                <div class="clearfix"></div>

            </div><!--#header-->