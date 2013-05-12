<div id="sidebar" class="border alerts-blog">




    <h2>Recent Posts</h2>

    <?php /*
     *  if lawalert  -- check custom field wcpf-law-alert for 1
     * only display from the same alert
     *      display 4 most recent posts where
     *      the taxonomy practice-area matches that of the main article
     *      the published year and month matches that of the main article (can you do that?)
     *      and is sticky
     *      sort by date (desc)
     *
     *  else,
     *      display 4 most recent posts where
     *       the taxonomy practice-area matches that of the main article
     *       and is sticky
     *       (doesn't matter if it's law-alert or not)
     *
     */ ?>


    <div class="recent-post">

        <p class="byline"><span class="date">NumMonth.Year</span>  <span class="divider">|</span>   <span class="author">author</span>
        <h3>Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia arcu non nulla conse</p>
        <p class="read-more"><a href="">read more</a></p>

    </div><!--end recent post -->




</div>	<!--sidebar-->
<div class="sidebar-search">
    <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
</div>


