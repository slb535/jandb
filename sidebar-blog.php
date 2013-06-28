<div id="sidebar" class="alerts-blog">
    <div ID="recent-posts">
        <?php
        $practices = wp_get_post_terms($post->ID, 'practice-area', array("fields" => "names"));
        $law_alert = get_post_meta($post->ID, 'wpcf-law-alert', true);
        if ($law_alert) {
            $args = array(
                'nopaging' => true,
                'posts_per_page' => 4,
                'showposts' => 4,
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
                        'taxonomy' => 'practice-area', // taxonomy -> what to search for
                        'field' => 'slug',
                        'terms' => $practices
                    )
                )
            );
        } else {
            $args = array(
                'nopaging' => true,
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

            <h2>Recent Articles</h2>


            <?php
            while ($the_query->have_posts()) :

                $the_query->the_post();
                $child_id_side = $post->ID;
                $parent_id_side = get_post_meta($child_id_side, '_wpcf_belongs_lawyer_profile_id', true);
                $parent_permalink_side = get_permalink($parent_id_side);
                $parent_title_side = get_the_title($parent_id_side);
                $child_permalink_side = get_permalink();
                $date = get_the_date('m.Y');
                $second_author_side = types_render_field("second-author", array("raw" => "true"))
                ?>
                <div class="recent-post">
                    <p class="byline"><span class="date"><?php echo $date; ?></span>

                        <?php
                        if ($parent_id_side)
                            echo '<span class="divider">|</span>   <span class="author"><a href="' . $parent_permalink_side . '" target="_blank">' . $parent_title_side . '</a></span>';
                        if ($second_author_side)
                            echo '<span class="divider">|</span>  <span class="author">' . $second_author_side . '</span>';
                        ?>
                    </p>

                    <h3><a href="<?php echo $child_permalink_side; ?>"><?php the_title(); ?></a></h3>

                    <?php echo pippin_excerpt_by_id($child_id_side, 20, '<a><em><p>', ' . . .<p class="read-more"><a href="' . $child_permalink_side . '">read more</a></p>'); ?>
                </div><!--end recent post -->
                <?php
            endwhile;

            wp_reset_postdata();
            ?>

        <?php } ?>
    </div><br />
    <h2><a href="http://johnsonandbell.com/alerts-blog/<?php
        foreach (get_the_terms($wp_query->post->ID, 'practice-area') as $term)
            echo $term->slug;
        ?>"><?php echo strip_tags(get_the_term_list($post->ID, 'practice-area')); ?> Alert Archive</a></h2> <br />
        <?php dynamic_sidebar('Publications'); ?>
    <!-- create sidebar widget for speaking engagements -->

    <li class="sidebar-text">If you are interested in receiving our law alerts and/or newsletters, please <a href="mailto:info@jbltd.com">send us an email</a> and we’d be happy to include you on our next electronic alert.</li>
</div>	<!--sidebar-->
<div class="sidebar-search">
    <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
</div>


