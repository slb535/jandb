<?php
/*
  Template Name: Practice Page Attorney Template
 */
?>
<?php get_header(); ?>
<div id="wrapper">

    <div id="content" class="practice-page">
        <div class="column front-left">
            <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                        <article>
                            <h1><?php the_title(); ?></h1>

                            <div class="practice-body">
                                <?php 
        $practice = strip_tags(get_the_term_list($post->ID, 'practice-area'));
                                        ?>
                                <h3><?php echo $practice; ?> Attorneys</h3>


                                <?php
                                $args = array(
                                    'posts_per_page' => -1,
                                    'meta_key' => 'wpcf-last-name',
                                    'orderby' => 'wpcf-last-name',
                                    'order' => 'ASC',
                                    'post_type' => 'lawyer_profile',
                                    'practice-area' => $practice ,
                                    'post_status' => 'publish'
                                );

                                $posts = query_posts($args);
                                $count_posts = $wp_query->post_count;
                                if ($count_posts > 10) {
                                    ?>
                                    <div class="two-columns wide">
                                    <?php
                                    echo '<ul id="entry" >';
                                }
                                else
                                    echo '<div class="one-column"><ul>';
                                if (have_posts())
                                    while (have_posts()) : the_post();
                                        ?>
                                            <li><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></li>
                                            <?php
                                        endwhile;
                                    wp_reset_query();
                                    ?>
                                </div>


                            </div>

    <?php endwhile; /* end loop */ ?>
                    <hr />

                    <div class="practices-footer">
                        <h3>Johnson &amp; Bell Practices</h3>

                        <?php
                        //list terms in a given taxonomy
                        $taxonomy = 'practice-area';
                        $term_args = array(
                            'hide_empty' => false,
                            'orderby' => 'name',
                            'order' => 'ASC'
                        );
                        $tax_terms = get_terms($taxonomy, $term_args);
                        $site_url = network_site_url('/');
                        ?>




                        <div class="practice-areas-list-small four-columns thin">




                            <ul>
                                <?php
                                foreach ($tax_terms as $tax_term) {
                                    echo '<li>' . '<a href="' . $site_url . 'practices-home/' . $tax_term->slug . '" title="' . sprintf(__("View all posts in %s"), $tax_term->name) . '" ' . '>' . $tax_term->name . '</a></li>';
                                }
                                ?>
                            </ul>




                        </div>
                    </div>
            </div>

        </div> <!-- end column front-left-->


        <div class="column front-right" >


            <?php
            get_sidebar("practice");
            ?>

        </div>
    </div><!--#content-->
</div>
<div style='clear:both;'></div>




<?php get_footer(); ?>
