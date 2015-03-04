<div ID="photo-row">
    <h3>Our Varied Practices Meet Your Needs</h3>
    <?php
    $posts = get_posts('post_type=lawyer_profile&orderby=rand&numberposts=7&cat=-46');
    foreach ($posts as $post) {
        $lawyer_name = get_the_title();
        $first_name = substr($lawyer_name, 0, 15);
        ?>
        <div class="photo-block">
            <?php
            if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image');
            endif;
            ?>
            <div class="bar"></div>

            <?php if ($first_name == 'Helena Gonzalez') { ?>
                <h5 class="lawyer-name"><a href="<?php the_permalink(); ?>">Helena G. Jorgensen</a></h5> <?php } else {
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
