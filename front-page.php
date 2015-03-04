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
                    'posts_per_page' => 5,
                    'order' => 'DESC',
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
            <div class="smaller">
                <?php
                if (is_mobile()) {
                    get_sidebar('home');
                }
                ?>
            </div>

        </div><!--end news headlines -->

        <?php include ('photo-strip.php'); ?> 

    </div> <!-- end column front-left-->
    <div class="column front-right omega larger" >
        <!--  <div class="sidebar"> -->
        <?php
        if (!is_mobile()) {
            get_sidebar('home');
        }
        ?>
        <!--  </div> -->
    </div>
    <div class="clearfix"></div>
</div><!--#content-home-->
<?php get_footer(); ?>