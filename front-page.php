<?php get_header(); ?>

<div id="content" class="grid_13">
    <?php if (!dynamic_sidebar('Alert')) : ?>
        <!--Wigitized 'Alert' for the home page -->
    <?php endif; ?>
    <h1>Committed to <br />Our Clients</h1>

    <div class="column front-left">
        <div class="news_headlines_home">
            <h2>Firm News</h2>
            <ul>
                <?php
                $args = array(
                    'cat' => 24, -33,
                    'posts_per_page' => 3,
                    'order' => 'ASC',
                    'post__in' => get_option('sticky_posts'),
                    'ignore_sticky_posts' => 1
                );
                $posts = query_posts($args);
                if (have_posts())
                    while (have_posts()) : the_post();
                        ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php
                    endwhile;
                wp_reset_query();
                ?>

            </ul>
        </div><!--end news headlines -->
        <div ID="photo-row">
            <h3>Our Varied Practices Meet Your Needs</h3>
            <?php
            $posts = get_posts('post_type=lawyer_profile&orderby=rand&numberposts=7&cat=-46');
            foreach ($posts as $post) {
                $lawyer_name = get_the_title();
                $first_name = substr($lawyer_name, 0, 5);
                ?>
                <div class="photo-block">
                    <?php
                    if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
                    endif;
                    ?>
                    <div class="bar"></div>

                    <?php if ($first_name == 'Moyen') { ?>
                        <h5 class="lawyer-name"><a href="<?php the_permalink(); ?>">Moyenda M. Knapp</a></h5> <?php } else {
                        ?>
                        <h5 class="lawyer-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5> <?php } ?>
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
            <div class="clearfix"></div>
        </div> <!-- end photo-row-->
            <div class="clearfix"></div>
    </div> <!-- end column front-left-->
    <div class="column front-right omega" >
        <!--  <div class="sidebar"> -->
        <?php get_sidebar('home'); ?>
        <!--  </div> -->
    </div>
    <div style='clear:both;'></div>
</div><!--#content-home-->
<?php get_footer(); ?>