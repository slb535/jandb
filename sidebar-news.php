<div id="sidebar" class="news">




    <h2><a href="<?php echo site_url(); ?>/news/">All News Articles</a></h2>

    <?php if (!dynamic_sidebar('news-sidebar')) : ?><!-- Wigitized Area --><?php endif ?>

</div>

<div id="sidebar-search" class="widget">
    <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
</div>

<!--sidebar-->