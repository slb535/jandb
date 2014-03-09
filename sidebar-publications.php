<div id="sidebar" class="border">
    <ul>


        <div id="sidebar" class="alerts-blog">

            <?php dynamic_sidebar('Publications'); ?>

            <p class="sidebar-text">

                Let us know what updates you'd like to receive.
                <iframe width="270px" height="400px" src="<?php bloginfo('template_url'); ?>/blogalerts-form.html"></iframe>


            </p>

            <!-- create sidebar widget for speaking engagements -->

            <?php if (!is_page(6040)) { ?>
                <h2><a href="http://johnsonandbell.com/alerts-blog/<?php
                    foreach (get_the_terms($wp_query->post->ID, 'practice-area') as $term)
                        echo $term->slug;
                    ?>"><?php echo strip_tags(get_the_term_list($post->ID, 'practice-area')); ?> Alert Archive</a></h2> <br />
                <?php } ?>
        </div>
    </ul>
</div>

<div id="sidebar-search" class="widget">
    <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
</div>

<!--sidebar-->