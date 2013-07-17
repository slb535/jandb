<?php get_header(); ?>

<div id="content">



    <div class="column front-left">
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

                    <h2><?php the_title(); ?></h2>



                    <div class="post-content">
                        <?php
                        if (has_post_thumbnail()) {
                            $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                            echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" class="post-thumbnail"> ';
                            the_post_thumbnail('thumbnail');
                            echo ' </a>';
                        }
                        ?>




                        <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL, 'add-news-image-thumbnail', array('class' => 'post-thumbnail'), true);
                        endif; ?>




                        <?php the_content(); ?>
        <?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
                    </div><!--.post-content-->



                </div><!-- #post-## -->
                <?php $post = $wp_query->post;
                if (!in_category('Full Bio')) {
                    ?>


                    <div class="newer-older">
                        <p class="newer-older"><?php previous_post_link('%link', '&laquo; previous') ?> | <?php next_post_link('%link', 'next  &raquo;') ?></p>
                    </div><!--.newer-older-->
                <?php } ?>


        <?php edit_post_link('<small>Edit this entry</small>', '', ''); ?>



    <?php endwhile; /* end loop */ ?>
    </div> <!-- end front-left -->





    <div class="column front-right" >
        <aside>
            <?php
            $post = $wp_query->post;
            if (in_category('News')) {

                get_sidebar('news');
            } elseif (in_category('Awards')) {

                get_sidebar('awards');
            } else {
                get_sidebar('search');
            }
            ?>


        </aside>

    </div>
    <div style='clear:both;'></div>
</div><!--#content-->

<?php get_footer(); ?>