<?php
/*
  Template Name: Our Story
 */
?><?php get_header(); ?>


<div id="content">



    <div class="column front-left">
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
                    <article>
                        <h2 class="lawyer-name"><?php the_title(); ?></h2>
                        <?php edit_post_link('<small>Edit this entry</small>', '', ''); ?>

                        <div class="post-content page-content">
                            <?php the_content(); ?>
                            <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
                        </div><!--.post-content .page-content -->
                    </article>


                </div><!--#post-# .post-->


            <?php endwhile; ?>
    </div> <!-- end front-left -->





    <div class="column front-right" >
        <aside>


            <?php
            get_sidebar('search');
            ?>
        </aside>

    </div>
    <div style='clear:both;'></div>
</div><!--#content-->

<?php get_footer(); ?>