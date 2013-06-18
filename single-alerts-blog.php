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

                    <?php
                    $child_id = $post->ID;
                    $parent_id = get_post_meta($child_id, '_wpcf_belongs_lawyer_profile_id', true);
                    $parent_permalink = get_permalink($parent_id);
                    $parent_title = get_the_title($parent_id);
                    $date = get_the_date('m.Y');
                    $second_author = types_render_field("second-author", array("raw" => "true"))
                    ?>
                    <p class="byline"><span class="date"><?php echo $date; ?></span>

                        <?php
                        if ($parent_id)
                            echo '<span class="divider">|</span>   <span class="author"><a href="' . $parent_permalink . '" target="_blank">' . $parent_title . '</a></span>';
                        if ($second_author)
                            echo '<span class="divider">|</span>  <span class="author">' . $second_author . '</span>';
                        ?>
                    </p>
                        <!--                        <span class="divider">|</span>   <span class="author"><a href="<?php echo $parent_permalink; ?>" target="_blank"><?php echo $parent_title; ?></a></span>-->

                    <h2><?php the_title(); ?></h2>

                    <div class="post-content page-content alerts-blog">
                        <?php the_content(); ?>
                    </div><!--.post-content .page-content -->




                </div><!--#post-# .post-->


            <?php endwhile; ?>

        <?php wp_reset_query(); ?>

    </div> <!-- end front-left -->





    <div class="column front-right" >


        <?php
        get_sidebar('blog');
        ?>

    </div>
    <div style='clear:both;'></div>
</div><!--#content-->

<?php get_footer(); ?>