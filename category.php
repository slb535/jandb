<?php get_header(); ?>

<div id="content">



    <div class="column front-left">

        <h1>
            <?php if (is_category('News')) : /* if the news archive is loaded */ ?>
                <?php printf(__('Firm News')); ?>
            <?php elseif (is_category('Awards')) : /* if the news archive is loaded */ ?>
                <?php printf(__('Industry Awards')); ?>


            <?php else : /* if anything else is loaded, ex. if the tags or categories template is missing this page will load */ ?>
                Blog Archives
            <?php endif; ?>
        </h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post-single"><?php
                    if (has_post_thumbnail()) {
                        echo '<div class="archive-thumbnail">';
                        the_post_thumbnail('thumbnail');
                        echo '</div>';
                    }
                    ?>
                    <h2 class="archive"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    <?php
                    $award_source = types_render_field("award-source", array('raw' => 'true'));
                    if ($award_source) {
                        echo '<span class="source">' . $award_source . '</span>';
                    }
                    ?>



                    <div class="post-excerpt">
                        <?php the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */ ?>
                    </div>

                </div><!--.post-single-->
                <?php
            endwhile;
        else:
            ?>
            <div class="no-results">
                <p><strong><?php _e('There has been an error.'); ?></strong></p>
                <p><?php _e('We apologize for any inconvenience, please hit back on your browser or use the search form below.'); ?></p>
                <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
            </div><!--noResults-->
        <?php endif; ?>

        <?php numeric_posts_nav(); ?>

    </div> <!-- end front-left -->





    <div class="column front-right" >
        <?php
        if (is_category('News')) : /* if the news archive is loaded */
            get_sidebar('news');

        elseif (is_category('Awards')) : /* if the news archive is loaded */
            get_sidebar('awards');
        else : /* if anything else is loaded, ex. if the tags or categories template is missing this page will load */
            get_sidebar('search');
        endif;
        ?>

    </div>
    <div style='clear:both;'></div>
</div><!--#content-->

<?php get_footer(); ?>