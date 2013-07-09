<?php
/*
  Template Name: Alerts-Blog Product Landing Page
 */
?>

<?php get_header(); ?>


<div id="content">



    <div class="column front-left">
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
                    <h1><?php the_title(); ?></h1>


                    <?php
                    $practices = wp_get_post_terms($post->ID, 'practice-area', array("fields" => "names"));
                    $law_alert = get_post_meta($post->ID, 'wpcf-law-alert', true);
                    if ($law_alert) {
                        $args = array(
                            'nopaging' => false,
                            'posts_per_page' => 1,
                            'showposts' => 1,
                            'order' => 'desc', // or asc
                            'year' => get_the_date('Y'),
                            'monthnum' => get_the_date('m'),
                            'post_type' => 'alerts-blog',
                            'post__not_in' => array($post->ID),
                            'meta_query' => array(
                                array(
                                    'key' => 'wpcf-sidebar-list',
                                    'value' => '1',
                                    'compare' => '='
                                ),
                                array(
                                    'key' => 'wpcf-law-alert',
                                    'value' => '1',
                                    'compare' => '='
                                )
                            ),
                            'tax_query' => array(
                                'relation' => 'OR',
                                array(
                                    'taxonomy' => 'practice-area',
                                    'field' => 'slug',
                                    'terms' => $practices
                                )
                            )
                                //		'practice-area' => 'some-practice-taxonomy-slug'  // taxonomy -> what to search for
                        );
                    } else {
                        $args = array(
                            'nopaging' => false,
                            'posts_per_page' => 4,
                            'showposts' => 4,
                            'order' => 'desc', // or asc
                            'post__not_in' => array($post->ID),
                            'post_type' => 'alerts-blog',
                            'tax_query' => array(
                                'relation' => 'OR',
                                array(
                                    'taxonomy' => 'practice-area',
                                    'field' => 'slug',
                                    'terms' => $practices
                                )
                            )
                        );
                    }
// The Query
                    $the_query = new WP_Query($args);
// The Loop
                    if ($the_query->have_posts()) {
                        ?>


                        <?php
                        while ($the_query->have_posts()) :

                            $the_query->the_post();
                            $child_id = $post->ID;
                            $parent_id = get_post_meta($child_id, '_wpcf_belongs_lawyer_profile_id', true);
                            $parent_permalink = get_permalink($parent_id);
                            $parent_title = get_the_title($parent_id);
                            $child_permalink = get_permalink();
                            $date = get_the_date('m.Y');
                            ?>


                            <div class="post-single">
                                <div class="alert-blog-post">

                                    <p class="byline"><span class="date"><?php echo $date; ?></span>

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

                        numeric_posts_nav();


                        wp_reset_postdata();
                        ?>

                    <?php } ?>


                </div><!--#post-# .post-->


            <?php endwhile; ?>

        <?php wp_reset_query(); ?>
        <div class="clearfix"></div>

    </div> <!-- end front-left -->





    <div class="column front-right" >


        <?php
        get_sidebar('publications');
        ?>

    </div>
    <div class="clearfix"></div>
</div><!--#content-->

<?php get_footer(); ?>