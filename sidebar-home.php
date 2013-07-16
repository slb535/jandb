<div id="sidebar" class="border">

    <h2> William V. Johnson <span class="amp">&</span> John W. Bell</h2>


    <div class="video"> <?php // dynamic_sidebar('Sidebar');    ?>


        <div class="larger">
            <iframe name="video" class='video-player' frameborder="0" type='text/html' width='278'  height='187' scrolling="no" src='<?php bloginfo('template_url'); ?>/video.html' frameborder='0'></iframe>
        </div>

        <div class="smaller">
            <iframe name="video" class='video-player' frameborder="0" type='text/html' width='130'  height='75' scrolling="no" src='<?php bloginfo('template_url'); ?>/video.html' frameborder='0'></iframe>
        </div>

    </div>


    <h2><a href="<?php echo site_url(); ?>/crown-point-indiana/">Our Indiana Office</a></h2>
    <div class="icon"><a href="http://www.linkedin.com/company/johnson-&-bell-ltd." target="new"><img src="http://johnsonandbell.com/wp-content/themes/johnsonandbell/images/icon-linkedin.png" width="24" height="24"></a>
    </div>
    <h2><a href="<?php echo site_url(); ?>/firm-news/">More Firm News</a></h2>

</div><!--sidebar-->
<div id="sidebar-search" class="widget">
    <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
</div>


