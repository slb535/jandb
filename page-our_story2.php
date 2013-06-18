<?php
/*
  Template Name: Our Story Timeline 2
 */
?>
<?php get_header(); ?>
<div id="content">






    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

                <article>
                    <h1><?php the_title(); ?></h1>
                    <p class="timeline-intro"><?php the_content(); ?></p>
                </article>

                <!-- http://timeline.verite.co/ -->
                <div id="timeline-embed"></div>



                <script type="text/javascript">
                    var timeline_config = {
                        width: '100%',
                        height: '600',
                        source: '/wp-content/themes/johnsonandbell/timeline_json.json',
                        embed_id: 'timeline-embed', //OPTIONAL USE A DIFFERENT DIV ID FOR EMBED
                        start_at_end: false, //OPTIONAL START AT LATEST DATE
                        start_at_slide: '0', //OPTIONAL START AT SPECIFIC SLIDE
                        start_zoom_adjust: '0', //OPTIONAL TWEAK THE DEFAULT ZOOM LEVEL
                        hash_bookmark: true, //OPTIONAL LOCATION BAR HASHES
                        css: '/wp-content/themes/johnsonandbell/css/timeline-custom.css', //OPTIONAL PATH TO CSS
                        js: '/wp-content/themes/johnsonandbell/js/timeline-min.js'    //OPTIONAL PATH TO JS
                    };
                </script>
                <script type="text/javascript" src="/wp-content/themes/johnsonandbell/js/storyjs-embed.js"></script>
                <br class="clear">

            </div><!-- /#timelineContainer -->
            <p class="disclaimer"><strong>Attorney Advertising:</strong>  Some of the content on this site is considered Attorney Advertising under the applicable rules of professional conduct in Illinois and Indiana. Case results are fact-specific so prior results do not guarantee <br />a similar outcome.</p>
        </div><!-- content -->


    <?php endwhile; /* end loop */ ?>


<div style='clear:both;'></div>


<?php
$quote = types_render_field("quote", array('raw' => 'true'));
$quotesource = types_render_field("quote-source", array('raw' => 'true'));
$quotesourcetitle = types_render_field("quote-source-title", array('raw' => 'true'));


if ($quote)
    echo '<div class="quote-block"><div class="quote">' . $quote . '</div>';
if ($quotesource)
    echo '<div class="quote-source">' . $quotesource;
if ($quotesourcetitle)
    echo ', <span class="quote-source-title">' . $quotesourcetitle . '</span></div></div>';
?>





<?php get_footer(); ?>
