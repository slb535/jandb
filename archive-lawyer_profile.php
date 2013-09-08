<?php get_header(); ?>

<div id="content">


    <h1>
        Our Attorneys
    </h1>

    <div class="column front-left">

        <h3>Alphabetical Listing</h3><br />


        <!--[if lt IE 10]> <div id="wrapper" style="padding-top: 10px"><div class="wide"> <![endif]-->


        <div class="practice-body three-columns">
            <ul class="lawyer-search">

                <?php
                global $wpdb;
                $alpha_query = "
			SELECT DISTINCT wposts.*
			FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta
			WHERE wposts.ID = wpostmeta.post_id
			AND wpostmeta.meta_key = 'wpcf-last-name'
			AND wpostmeta.meta_value LIKE '" . $wpdb->escape($alpha) . "%'
			AND wposts.post_status = 'publish'
			AND wposts.post_type = 'lawyer_profile'
			ORDER BY wpostmeta.meta_value ASC";
                $alpha_query_results = $wpdb->get_results($alpha_query, OBJECT);
                if (!empty($alpha_query_results)) {
                    foreach ($alpha_query_results as $found_lawyer) {
                        ?>
                        <li><a href="<?php echo get_permalink($found_lawyer->ID) ?>" rel="bookmark"><?php echo $found_lawyer->post_title; ?></a></li>
                        <?php
                    }
                } else {
                    echo "<li>No attorneys found. (" . $alpha . ")</li>";
                }
                ?>

            </ul>
        </div><!-- end two columns -->
        <!--[if lt IE 10]>  </div> <![endif]-->



    </div> <!-- end front-left -->





    <div class="column front-right" >
        <div id="sidebar" class="border">
            <h3><a href="<?php bloginfo('url'); ?>/our-attorneys/">Back to Attorney Search</a></h3>
            <?php
            get_sidebar('other');
            ?>
        </div>
    </div>
    <div style='clear:both;'></div>
</div><!--#content-->

<?php get_footer(); ?>