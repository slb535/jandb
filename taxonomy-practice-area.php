<?php get_header(); ?>


<div id="content">



    <div class="column front-left">

        <?php
        $practices = wp_get_post_terms($post->ID, 'practice-area', array("fields" => "names"));
        $law_alert = get_post_meta($post->ID, 'wpcf-law-alert', true);
        ?>
        <h1>
            <?php echo strip_tags(get_the_term_list($post->ID, 'practice-area')); ?>
            Alert Archives

        </h1>

        <?php
        $args = array(
            'posts_per_page' => -1,
            'order' => 'desc ', // or asc
            'post_type' => 'alerts-blog ',
            'tax_query' => array(
                array(
                    'taxonomy' => 'practice-area',
                    'field' => 'slug',
                    'terms' => $practices
                )
            )
        );


        // The Query
        $the_query = new WP_Query($args);
        // The Loop
        if ($the_query->have_posts()) {

            while ($the_query->have_posts()) :

                $the_query->the_post();
                $parent_id = get_post_meta($post->ID, '_wpcf_belongs_lawyer_profile_id', true);
                ?>


                <div class = "post-single">
                    <div class = "alert-blog-post">

                        <p class = "byline"><span class = "date"><?php echo get_the_date('m.Y'); ?></span>

                            <?php
                            if ($parent_id)
                                echo '<span
            class = "divider">|</span> <span class = "author"><a href = "' . get_permalink($parent_id) . '" target = "_blank">' . get_the_title($parent_id) . ' </a></span>';
                            ?>

                        </p>
                        <h2 class="archive"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>


                        <p class="post-excerpt"> <?php
                            the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */
//                                echo pippin_excerpt_by_id($child_id, 100, '<a><em><p>', ' . . .<p class = "read-more"><a href = "' . $child_permalink . '">read more</a></p>');
                            ?></p>
                    </div>
                </div><!--end recent post -->
                <?php
            endwhile;

            wp_reset_postdata();
        }
        ?>


        <?php // numeric_posts_nav(); ?>

    </div>


    <div class="column front-right" >


        <?php
        get_sidebar('publications');
        ?>

    </div>
    <div style="clear:both;"></div>
</div><!--#content-->

<?php get_footer();
?>
