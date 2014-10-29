<?php
/*
  Template Name: Alerts-Blog Front Page - One from Each Practice
 */
?>

<?php get_header(); ?>


<div id="content">



    <div class="column front-left">
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
                    <h1><?php the_title(); ?></h1>


                    <?php
//                New Product Group


                    $args = array(
                        'posts_per_page' => '1',
                        'showposts' => '1',
                        'order' => 'desc', // or asc
                        'post_type' => 'alerts-blog',
                        'practice-area' => 'business-litigation'
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

                                    <p class = "byline"><?php echo strip_tags(get_the_term_list($post->ID, 'practice-area')); ?> <span class="divider">|</span> <span class = "date"><?php echo get_the_date('m.Y'); ?></span>

                                        <?php
                                        if ($parent_id)
                                            echo '<span class="divider">|</span>   <span class="author"><a href="' . get_permalink($parent_id) . '" target="_blank">' . get_the_title($parent_id) . '</a></span>';
                                        ?>

                                    </p>
                                    <h2 class="archive pf-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>


                                    <p class="post-excerpt"> <?php
                                        the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */
//                                echo pippin_excerpt_by_id($child_id, 100, '<a><em><p>', ' . . .<p class="read-more"><a href="' . $child_permalink . '">read more</a></p>');
                                        ?></p>
                                </div>
                            </div><!--end recent post -->
                            <?php
                        endwhile;

                        wp_reset_postdata();
                    }


//                New Product Group

                    $args = array(
                        'posts_per_page' => '1',
                        'showposts' => '1',
                        'order' => 'desc', // or asc
                        'post_type' => 'alerts-blog',
                        'meta_query' => array(
                            array(
                                'key' => 'wpcf-sidebar-list',
                                'value' => '1',
                                'compare' => '='
                            )
                        ),
                        'tax_query' => array(
                            'relation' => 'OR',
                            array(
                                'taxonomy' => 'practice-area',
                                'field' => 'slug',
                                'terms' => 'construction'
                            )
                        )
                    );



                    // The Query
                    $the_query = new WP_Query($args);
                    // The Loop
                    if ($the_query->have_posts()) {

                        while ($the_query->have_posts()) :

                            $the_query->the_post();
                            $child_id = $post->ID;
                            $parent_id = get_post_meta($child_id, '_wpcf_belongs_lawyer_profile_id', true);
                            $parent_permalink = get_permalink($parent_id);
                            $parent_title = get_the_title($parent_id);
                            $child_permalink = get_permalink();
                            $date = get_the_date('m.Y');
                            $terms_as_text = strip_tags(get_the_term_list($post->ID, 'practice-area'));
                            ?>


                            <div class = "post-single">
                                <div class = "alert-blog-post">

                                    <p class = "byline"><?php echo $terms_as_text; ?> <span class="divider">|</span> <span class = "date"><?php echo $date; ?></span>
                                        <?php
                                        if ($parent_id)
                                            echo '<span class="divider">|</span>   <span class="author"><a href="' . $parent_permalink . '" target="_blank">' . $parent_title . '</a></span>';
                                        ?>

                                    </p>
                                    <h2 class="archive"><a href="<?php echo $child_permalink; ?>"><?php the_title(); ?></a></h2>


                                    <p class="post-excerpt"> <?php
                                        the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */
//                                echo pippin_excerpt_by_id($child_id, 100, '<a><em><p>', ' . . .<p class="read-more"><a href="' . $child_permalink . '">read more</a></p>');
                                        ?></p>
                                </div>
                            </div><!--end recent post -->
                            <?php
                        endwhile;

                        wp_reset_postdata();




                        //                New Product Group


                        $args = array(
                            'posts_per_page' => '1',
                            'showposts' => '1',
                            'order' => 'desc', // or asc
                            'post_type' => 'alerts-blog',
                            'practice-area' => 'employment'
                        );



                        // The Query
                        $the_query = new WP_Query($args);
// The Loop
                        if ($the_query->have_posts()) {

                            while ($the_query->have_posts()) :

                                $the_query->the_post();
                                $child_id = $post->ID;
                                $parent_id = get_post_meta($child_id, '_wpcf_belongs_lawyer_profile_id', true);
                                $parent_permalink = get_permalink($parent_id);
                                $parent_title = get_the_title($parent_id);
                                $child_permalink = get_permalink();
                                $date = get_the_date('m.Y');
                                $terms_as_text = strip_tags(get_the_term_list($post->ID, 'practice-area'));
                                ?>


                                <div class = "post-single">
                                    <div class = "alert-blog-post">

                                        <p class = "byline"><?php echo $terms_as_text; ?> <span class="divider">|</span> <span class = "date"><?php echo $date; ?></span>
                                            <?php
                                            if ($parent_id)
                                                echo '<span class="divider">|</span>   <span class="author"><a href="' . $parent_permalink . '" target="_blank">' . $parent_title . '</a></span>';
                                            ?>

                                        </p>
                                        <h2 class="archive"><a href="<?php echo $child_permalink; ?>"><?php the_title(); ?></a></h2>


                                        <p class="post-excerpt"> <?php
                                            the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */
//                                echo pippin_excerpt_by_id($child_id, 100, '<a><em><p>', ' . . .<p class="read-more"><a href="' . $child_permalink . '">read more</a></p>');
                                            ?></p>
                                    </div>
                                </div><!--end recent post -->
                                <?php
                            endwhile;

                            wp_reset_postdata();
                        }



                        //                New Product Group


                        $args = array(
                            'posts_per_page' => '1',
                            'showposts' => '1',
                            'order' => 'desc', // or asc
                            'post_type' => 'alerts-blog',
                            'practice-area' => 'health-care'
                        );



                        // The Query
                        $the_query = new WP_Query($args);
// The Loop
                        if ($the_query->have_posts()) {

                            while ($the_query->have_posts()) :

                                $the_query->the_post();
                                $child_id = $post->ID;
                                $parent_id = get_post_meta($child_id, '_wpcf_belongs_lawyer_profile_id', true);
                                $parent_permalink = get_permalink($parent_id);
                                $parent_title = get_the_title($parent_id);
                                $child_permalink = get_permalink();
                                $date = get_the_date('m.Y');
                                $terms_as_text = strip_tags(get_the_term_list($post->ID, 'practice-area'));
                                ?>


                                <div class = "post-single">
                                    <div class = "alert-blog-post">

                                        <p class = "byline"><?php echo $terms_as_text; ?> <span class="divider">|</span> <span class = "date"><?php echo $date; ?></span>

                                            <?php
                                            if ($parent_id)
                                                echo '<span class="divider">|</span>   <span class="author"><a href="' . $parent_permalink . '" target="_blank">' . $parent_title . '</a></span>';
                                            ?>

                                        </p>
                                        <h2 class="archive"><a href="<?php echo $child_permalink; ?>"><?php the_title(); ?></a></h2>


                                        <p class="post-excerpt"> <?php
                                            the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */
//                                echo pippin_excerpt_by_id($child_id, 100, '<a><em><p>', ' . . .<p class="read-more"><a href="' . $child_permalink . '">read more</a></p>');
                                            ?></p>
                                    </div>
                                </div><!--end recent post -->
                                <?php
                            endwhile;

                            wp_reset_postdata();
                        }




                        //                New Product Group


                        $args = array(
                            'posts_per_page' => '1',
                            'showposts' => '1',
                            'order' => 'desc', // or asc
                            'post_type' => 'alerts-blog',
                            'practice-area' => 'insurance'
                        );



                        // The Query
                        $the_query = new WP_Query($args);
// The Loop
                        if ($the_query->have_posts()) {

                            while ($the_query->have_posts()) :

                                $the_query->the_post();
                                $child_id = $post->ID;
                                $parent_id = get_post_meta($child_id, '_wpcf_belongs_lawyer_profile_id', true);
                                $parent_permalink = get_permalink($parent_id);
                                $parent_title = get_the_title($parent_id);
                                $child_permalink = get_permalink();
                                $date = get_the_date('m.Y');
                                $terms_as_text = strip_tags(get_the_term_list($post->ID, 'practice-area'));
                                ?>


                                <div class = "post-single">
                                    <div class = "alert-blog-post">

                                        <p class = "byline"><?php echo $terms_as_text; ?> <span class="divider">|</span> <span class = "date"><?php echo $date; ?></span>

                                            <?php
                                            if ($parent_id)
                                                echo '<span class="divider">|</span>   <span class="author"><a href="' . $parent_permalink . '" target="_blank">' . $parent_title . '</a></span>';
                                            ?>

                                        </p>
                                        <h2 class="archive"><a href="<?php echo $child_permalink; ?>"><?php the_title(); ?></a></h2>


                                        <p class="post-excerpt"> <?php
                                            the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */
//                                echo pippin_excerpt_by_id($child_id, 100, '<a><em><p>', ' . . .<p class="read-more"><a href="' . $child_permalink . '">read more</a></p>');
                                            ?></p>
                                    </div>
                                </div><!--end recent post -->
                                <?php
                            endwhile;

                            wp_reset_postdata();
                        }




                        //                New Product Group


                        $args = array(
                            'posts_per_page' => '1',
                            'showposts' => '1',
                            'order' => 'desc', // or asc
                            'post_type' => 'alerts-blog',
                            'practice-area' => 'municipal-liability'
                        );



                        // The Query
                        $the_query = new WP_Query($args);
// The Loop
                        if ($the_query->have_posts()) {

                            while ($the_query->have_posts()) :

                                $the_query->the_post();
                                $child_id = $post->ID;
                                $parent_id = get_post_meta($child_id, '_wpcf_belongs_lawyer_profile_id', true);
                                $parent_permalink = get_permalink($parent_id);
                                $parent_title = get_the_title($parent_id);
                                $child_permalink = get_permalink();
                                $date = get_the_date('m.Y');
                                $terms_as_text = strip_tags(get_the_term_list($post->ID, 'practice-area'));
                                ?>


                                <div class = "post-single">
                                    <div class = "alert-blog-post">

                                        <p class = "byline"><?php echo $terms_as_text; ?> <span class="divider">|</span> <span class = "date"><?php echo $date; ?></span>

                                            <?php
                                            if ($parent_id)
                                                echo '<span class="divider">|</span>   <span class="author"><a href="' . $parent_permalink . '" target="_blank">' . $parent_title . '</a></span>';
                                            ?>

                                        </p>
                                        <h2 class="archive"><a href="<?php echo $child_permalink; ?>"><?php the_title(); ?></a></h2>


                                        <p class="post-excerpt"> <?php
                                            the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */
//                                echo pippin_excerpt_by_id($child_id, 100, '<a><em><p>', ' . . .<p class="read-more"><a href="' . $child_permalink . '">read more</a></p>');
                                            ?></p>
                                    </div>
                                </div><!--end recent post -->
                                <?php
                            endwhile;

                            wp_reset_postdata();
                        }



                        //                New Product Group


                        $args = array(
                            'posts_per_page' => '1',
                            'showposts' => '1',
                            'order' => 'desc', // or asc
                            'post_type' => 'alerts-blog',
                            'practice-area' => 'product-liability'
                        );



                        // The Query
                        $the_query = new WP_Query($args);
// The Loop
                        if ($the_query->have_posts()) {

                            while ($the_query->have_posts()) :

                                $the_query->the_post();
                                $child_id = $post->ID;
                                $parent_id = get_post_meta($child_id, '_wpcf_belongs_lawyer_profile_id', true);
                                $parent_permalink = get_permalink($parent_id);
                                $parent_title = get_the_title($parent_id);
                                $child_permalink = get_permalink();
                                $date = get_the_date('m.Y');
                                $terms_as_text = strip_tags(get_the_term_list($post->ID, 'practice-area'));
                                ?>


                                <div class = "post-single">
                                    <div class = "alert-blog-post">

                                        <p class = "byline"><?php echo $terms_as_text; ?> <span class="divider">|</span> <span class = "date"><?php echo $date; ?></span>

                                            <?php
                                            if ($parent_id)
                                                echo '<span class="divider">|</span>   <span class="author"><a href="' . $parent_permalink . '" target="_blank">' . $parent_title . '</a></span>';
                                            ?>

                                        </p>
                                        <h2 class="archive"><a href="<?php echo $child_permalink; ?>"><?php the_title(); ?></a></h2>


                                        <p class="post-excerpt"> <?php
                                            the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */
//                                echo pippin_excerpt_by_id($child_id, 100, '<a><em><p>', ' . . .<p class="read-more"><a href="' . $child_permalink . '">read more</a></p>');
                                            ?></p>
                                    </div>
                                </div><!--end recent post -->
                                <?php
                            endwhile;

                            wp_reset_postdata();
                        }
                        ?>

                    <?php } ?>


                <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div><!--#post-# .post-->





    </div> <!-- end front-left -->




    <div class="column front-right" >
        <div id="sidebar" class="border">
            <ul>


                <div id="sidebar" class="alerts-blog sidebar-text">


                    <?php
                    dynamic_sidebar('Publications');

                    get_sidebar('recentposts');

                    get_sidebar('alertsblogarchive');
                    ?>
                    <div id="sidebar-search" class="widget">
                        <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
                    </div>

                </div>
                <div style='clear:both;'></div>
            </ul>

        </div> <!--end sidebar-->
    </div> <!-- end column front right -->
</div><!--#content-->

<?php get_footer(); ?>