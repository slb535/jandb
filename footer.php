

<div class="clearfix"></div>
</div><!--.container-->
<div id="footer"><footer>
        <div class="container">
            <?php if (!dynamic_sidebar('Footer')) : ?><!--Wigitized Footer--><?php endif; ?>

            <p>&copy; <?php echo date("Y") ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>">Johnson &amp; Bell, Ltd.</a> | 33 West Monroe Street, Suite 2700
                Chicago, Illinois 60603-5404  |  <?php _e('All Rights Reserved.'); ?>  |  <a href="http://johnsonandbell.com/web-site-disclaimer-information/">Disclaimer</a></p>

            <?php if (is_home() || is_front_page()) { ?>
                <div class="footer-right" ><a href="http://www.alfainternational.com/" target="new"><img src="<?php bloginfo('template_url'); ?>/images/logo_alfa.png" width="225" height="95" class="affiliation-logo-footer" /></a>            <div class="clearfix"></div>
                </div>
            <?php } ?>

            <?php if (is_page(60)) { ?>

                <div class="footer-right" >
                    <p class="employee"><a href="https://owa.jbltd.com/owa" target="new">Employee Log-in</a> | <a href="https://remote.jbltd.com/vpn/index.html" target="new">Citrix Log-in</a>  |
                        <a href="https://webtime.jbltd.com/LMS" target="new">Webtime Log-in</a></p>
                </div>

            <?php }
            ?>




        </div><!--.container-->
    </footer></div><!--#footer-->
</div><!--#main-->
<!-- <p><?php echo get_num_queries() ?> queries. <?php
if (function_exists('memory_get_usage')) {
    $unit = array('b', 'kb', 'mb', 'gb', 'tb', 'pb');
    echo @round(memory_get_usage(true) / pow(1024, ($i = floor(log(memory_get_usage(true), 1024)))), 2) . ' ' . $unit[$i];
    ?> Memory usage. <?php } timer_stop(1) ?> seconds.</p> -->
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work properly */ ?>

<script>
    var navigation = responsiveNav("#nav", {// Selector: The ID of the wrapper
        animate: true, // Boolean: Use CSS3 transitions, true or false
        transition: 400, // Integer: Speed of the transition, in milliseconds
        label: "Menu", // String: Label for the navigation toggle
        insert: "after", // String: Insert the toggle before or after the navigation
        customToggle: "", // Selector: Specify the ID of a custom toggle
        openPos: "static", // String: Position of the opened nav, relative or static
        jsClass: "js", // String: 'JS enabled' class which is added to <html> el
        init: function() {
        }, // Function: Init callback
        open: function() {
        }, // Function: Open callback
        close: function() {
        } // Function: Close callback
    });
</script>


<script>
    var originalNavClasses;

    function toggleNav() {
        var elem = document.getElementById('navigation_list');
        var classes = elem.className;
        if (originalNavClasses === undefined) {
            originalNavClasses = classes;
        }
        elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
    }
</script>

</body>
</html>