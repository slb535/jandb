<div id="sidebar" class="border">
    <ul>


        <div id="sidebar" class="alerts-blog">

            <?php dynamic_sidebar('Publications'); ?>

            <p class="sidebar-text">If you are interested in receiving our law alerts and/or newsletters, please <a href="mailto:info@jbltd.com">send us an email</a> and we’d be happy to include you on our next electronic alert.</p>

            <!-- create sidebar widget for speaking engagements -->


            <h2><a href="http://johnsonandbell.com/alerts-blog/<?php
                foreach (get_the_terms($wp_query->post->ID, 'practice-area') as $term)
                    echo $term->slug;
                ?>"><?php echo strip_tags(get_the_term_list($post->ID, 'practice-area')); ?> Alert Archive</a></h2> <br />

        </div>
    </ul>
</div>

<div id="sidebar-search" class="widget">
    <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
</div>

<!--sidebar-->