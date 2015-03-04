<?php
/*
  Template Name: Alerts-Blog Product Home
 */
?>

<?php get_header(); ?>


<div id="content">



    <div class="column front-left">
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
                    <h1><?php the_title(); ?></h1>


                    <?php
                    $practice_ID = get_cat_ID('Practice Area');
                    $practices = get_categories("parent=$practice_ID");
                    $practice_query = new WP_Query();

                    foreach ($practices as $practice):
                        ?>

                        <h2><?php echo esc_html($practice->name); ?></h2>

                        <?php $practice_query->query('posts_per_page=1&cat=' . $practice->term_id); ?>
                        <?php if ($practice_query->have_posts()): $practice_query->the_post(); ?>

                            <div class="post">
                                <?php the_title(); ?>
                                <!-- do whatever you else you want that you can do in a normal loop -->
                            </div>

                        <?php endif; ?>

                    <?php endforeach; ?>





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

            wp_reset_postdata();
            ?>




        </div><!--#post-# .post-->



        <?php wp_reset_query(); ?>

    </div> <!-- end front-left -->





    <div class="column front-right" >


        <?php
        get_sidebar('publications');
        ?>

    </div>
    <div style='clear:both;'></div>
</div><!--#content-->

<?php get_footer(); ?>