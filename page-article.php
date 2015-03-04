<?php
/*
  Template Name: Blog
 */
?>

<?php get_header(); ?>


<div id="content">

    <h1>J&amp;B Blog</h1>

    <div class="column front-left">

        <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
                    <article>
                        <h1><?php the_title(); ?></h1>

                        <div class="post-content page-content">
                            <?php the_content(); ?>
                        </div><!--.post-content .page-content -->
                    </article>




                </div><!--#post-# .post-->


            <?php endwhile; ?>
    </div> <!-- end front-left -->





    <div class="column front-right" >


        <?php
        get_sidebar('contact');
        ?>

    </div>
    <div style='clear:both;'></div>
</div><!--#content-->

<?php get_footer(); ?>