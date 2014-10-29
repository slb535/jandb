

<?php if (!is_page(6040)) { ?>
    <h2><a href="http://johnsonandbell.com/alerts-blog/<?php
        foreach (get_the_terms($wp_query->post->ID, 'practice-area') as $term)
            echo $term->slug;
        ?>"><?php echo strip_tags(get_the_term_list($post->ID, 'practice-area')); ?> Alert Archive</a></h2> <br />
    <?php } ?>


