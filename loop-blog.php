
<div class = "post-single">
    <div class = "alert-blog-post">

        <p class = "byline"><span class = "date"><?php echo $date;
?></span>

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

