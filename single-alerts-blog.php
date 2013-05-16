<?php
/*
  Template Name: Alerts-Blog
 */
?>

<?php get_header(); ?>


<div id="content">



    <div class="column front-left">
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>

                    <h1>J&amp;B Blog</h1>

                    <p class="byline">NumMonth.Year <span class="divider">|</span>  author</p>

                    <h2><?php the_title(); ?></h2>

                    <div class="post-content page-content alerts-blog">
                        <?php the_content(); ?>
                    </div><!--.post-content .page-content -->




                </div><!--#post-# .post-->


            <?php endwhile; ?>
    </div> <!-- end front-left -->





    <div class="column front-right" >


        <?php
        get_sidebar('blog');
        ?>

    </div>
    <div style='clear:both;'></div>
</div><!--#content-->

<?php get_footer(); ?>