
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
        <?php /* REMOVED IE SHIM because in FUnctions Make sure it works */ ?>  
        <?php wp_head();
        ?> 



    </head>

    <body <?php body_class(); ?>>
        <?php include_once("analyticstracking.php") ?>

        <div class="none">
            <p><a href="#content"><?php _e('Skip to Content'); ?></a></p><?php /* used for accessibility, particularly for screen reader applications */ ?>
        </div><!--.none-->

