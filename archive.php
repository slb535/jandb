<?php get_header(); ?>
<div id="content">

    <h1>
        <?php if (is_category('News')) : /* if the news archive is loaded */ ?>
            <?php printf(__('Firm News')); ?>
        <?php elseif (is_month()) : /* if the montly archive is loaded */ ?>
            <?php printf(__('Monthly Archives: <span>%s</span>'), get_the_date('F Y')); ?>
        <?php elseif (is_year()) : /* if the yearly archive is loaded */ ?>
            <?php printf(__('Yearly Archives: <span>%s</span>'), get_the_date('Y')); ?>
        <?php elseif (is_tax()) : /* if the news archive is loaded */
            ?>
            <?php printf(__('Alerts Blog Archive')); ?>
        <?php else : /* if anything else is loaded, ex. if the tags or categories template is missing this page will load */ ?>
            Blog Archives
        <?php endif; ?>
    </h1>

    <?php
    if (is_tax()) : /* if it's a taxonomy archive */
        $term = get_the_terms($post->ID, 'practice-area');
        ?><p>Blog Articles here</p>



        <?php
    else :

        if (have_posts()) : while (have_posts()) : the_post();
                ?>
                <div class="post-single">
                    <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

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
    <?php endif; ?>

    <?php numeric_posts_nav(); ?>


</div><!--#content-->
<?php
if (is_tax()) : /* if the news archive is loaded */
    get_sidebar('publications');
else: get_sidebar();
endif;
?>

<?php get_footer();
?>
