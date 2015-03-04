<?php get_header('fullpage'); ?>

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
                <?php wp_footer(); ?>
            </div><!--.container-->
        </footer></div><!--#footer-->

</div> <!--container fullbio-->
</body>
</html>