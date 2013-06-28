<?php
/*
  Template Name: Section Home Page
 */
?>
<?php get_header(); ?>
<div id="content">




    <div class="column front-left">
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>


                    <h1><?php the_title(); ?></h1>
                    <div class="intro"><p><?php the_content(); ?></p></div>
                </div>
                <!--INDIANA PAGE -->

                <?php if (is_page(592)) { ?>

                    <div class="indiana">
                        <div class="photo-row">


                            <h2> Our Specialized Practices Meet Your Needs</h2>
                            <?php
                            $posts = get_posts('post_type=lawyer_profile&orderby=rand&numberposts=7&cat=-46,47');
                            foreach ($posts as $post) {
                                ?>
                                <div class="photo-block">
                                    <?php
                                    if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
                                    endif;
                                    ?>
                                    <div class="bar"></div>
                                    <h5 class="lawyer-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    <?php
                                    $practice_area_select = types_render_field("practice-area-select", array("raw" => "true"));
                                    echo '<h4 class="practice-name ' . $practice_area_select . '">';
                                    //	$practice_area_term = get_term_by('name', $practice_area_select, 'practice-area');
                                    echo '<span><a href="' . home_url() . '/practices-home/' . sanitize_title($practice_area_select) . '">' . $practice_area_select . '</a></span>';
                                    echo '</h4>';
                                    ?>










                                </div>
                                <?php
                            }
                            wp_reset_query();
                            ?>
                            <div style='clear:both;'></div>
                        </div> <!-- end photo-row-->
                    </div> <!-- end indiana -->
                <?php } ?>    <!-- end INDIANA Page content -->



                <!--PUBLICATIONS PAGE -->

                <?php if (is_page(555)) { ?>

                    <div class="publications">
                        <div class="headlines">

                            <h2>Highlights</h2>

                            <ul>
                                <?php
                                $args = array(
                                    'cat' => 49,
                                    'posts_per_page' => 3,
                                    'post__in' => get_option('sticky_posts'),
                                    'ignore_sticky_posts' => 1
                                );

                                query_posts($args);

                                if (have_posts())
                                    while (have_posts()) : the_post();
                                        $author = types_render_field("article-author", array("raw" => "true"));
                                        ?>

                                        <li><a href="<?php the_permalink(); ?>" target="new"><?php the_title(); ?><br />
                                                <span class="author"><?php echo $author; ?></span>
                                                <span class="readmore">read more</span></a>
                                        </li>
                                        <?php
                                    endwhile;
                                wp_reset_query();
                                ?>
                            </ul>

                        </div> <!-- end headlines -->
                    </div><!-- end publications -->
                <?php } ?>    <!-- end Publications Page content -->

                <!--PRACTICES PAGE -->
                <?php
                if (is_page(595)) {
                    //list terms in a given taxonomy
                    $taxonomy = 'practice-area';
                    $term_args = array(
                        'hide_empty' => false,
                        'orderby' => 'name',
                        'order' => 'ASC'
                    );
                    $tax_terms = get_terms($taxonomy, $term_args);
                    ?>
                    <div class="practice-areas-list three-columns column">


                        <!--[if lt IE 10]><div id="wrapper">  <div class="three">
            <![endif]-->




                        <ul>
                            <?php
                            foreach ($tax_terms as $tax_term) {
                                echo '<li>' . '<a href="' . $tax_term->slug . '" title="' . sprintf(__("View all posts in %s"), $tax_term->name) . '" ' . '>' . $tax_term->name . '</a></li>';
                            }
                            ?>
                        </ul>

                        <!--[if lt IE 10]> </div>       </div> <![endif]-->
                    </div>
                <?php } ?> <!-- end Practices Page content -->


                <!--FIRM NEWSPAGE -->

                <?php if (is_page(75)) { ?>

                    <div class="firm-news">
                        <div class="headlines">

                            <ul>
                                <?php
                                $args = array(
                                    'cat' => 24,
                                    'posts_per_page' => 4,
                                    'post__in' => get_option('sticky_posts'),
                                    'ignore_sticky_posts' => 1
                                );

                                query_posts($args);

                                if (have_posts())
                                    while (have_posts()) : the_post();
                                        ?>

                                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?><br /><div class="readmore">read more</div></a>
                                        </li>
                                        <?php
                                    endwhile;
                                wp_reset_query();
                                ?>
                            </ul>

                        </div> <!--end headlines-->
                    </div> <!--end firm-news-->
                <?php } ?>    <!-- end Firm News Page content -->


                <!--AWARDS PAGE -->
                <?php if (is_page(66)) { ?>

                    <div class="awards">
                        <div class="headlines">


                            <ul>
                                <?php
                                $args = array(
                                    'category_name' => 'awards',
                                    'posts_per_page' => 3,
                                    'post__in' => get_option('sticky_posts'),
                                    'ignore_sticky_posts' => 1
                                );

                                query_posts($args);

                                if (have_posts())
                                    while (have_posts()) : the_post();
                                        ?>

                                        <li><a href="<?php the_permalink(); ?>" ><?php the_title(); ?><br />
                                                <span class="source"><?php echo types_render_field("award-source", array('raw' => 'true')); ?></span>

                                                <div class="readmore">read more</a></div>
                                        </li>


                                        <?php
                                    endwhile;
                                wp_reset_query();
                                ?>
                            </ul>

                        </div>
                    </div>

                <?php } ?> <!-- end Awards Page content -->



                <!--COMMUNITY -->

                <?php if (is_page(545)) { ?>

                    <div class="community">
                        <div class="headlines">


                            <ul>
                                <?php
                                $args = array(
                                    'cat' => 50,
                                    'posts_per_page' => 3,
                                    'post__in' => get_option('sticky_posts'),
                                    'ignore_sticky_posts' => 1
                                );

                                query_posts($args);

                                if (have_posts())
                                    while (have_posts()) : the_post();
                                        ?>

                                        <li><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a><br />
                                            <span class="source"><?php echo types_render_field("award-source", array('raw' => 'true')); ?></span>

                                            <span class="readmore"><a href="<?php the_permalink(); ?>" >read more</a></span>
                                        </li>


                                        <?php
                                    endwhile;
                                wp_reset_query();
                                ?>
                            </ul>

                        </div>


                        <div style="padding-top: 55px;"> <img src="<?php bloginfo('template_url'); ?>/images/community_logos.png" /></div>
                    </div> <!-- end community -->

                <?php } ?>    <!-- end Community content (MORE IN SIDEBAR) -->

            <?php endwhile; /* end loop */ ?>

    </div><!-- end column front-left-->




    <div class="column front-right" >
        <?php
        if (is_tree(555))
            get_sidebar('publications');

        elseif (is_tree(545))
            get_sidebar('community');

        elseif (is_tree(592))
            get_sidebar('indiana');

        elseif (is_tree(60))
            get_sidebar('contact');

        elseif (is_tree(75))
            get_sidebar('news');

        elseif (is_tree(66))
            get_sidebar('awards');
        else
            get_sidebar('search');
        ?>
    </div>

    <div style='clear:both;'></div>
    <?php
    $quote = types_render_field("quote", array('raw' => 'true'));
    $quotesource = types_render_field("quote-source", array('raw' => 'true'));
    $quotesourcetitle = types_render_field("quote-source-title", array('raw' => 'true'));
    $bonus = types_render_field("bonus-text", array('raw' => 'true'));

    if ($quote)
        echo '<div class="quote-block grid_9"><p class="quote">' . $quote . '</p>';
    if ($quotesource)
        echo '<p class="quote-source">' . $quotesource;
    if ($quotesourcetitle)
        echo ', <span class="quote-source-title">' . $quotesourcetitle . '</span></p></div>
                        <div style="clear:both;"></div>';

    if ($bonus)
        echo '<p class="bonus  grid_9">' . $bonus . '</p>';
    ?>

</div>

<?php get_footer(); ?>
