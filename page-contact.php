<?php
/*
  Template Name: Contact Page
 */
?>

<?php get_header(); ?>


<div id="content">



    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="column front-left">

                    <div class="post-content page-content">
                        <?php the_content(); ?>
                    </div><!--.post-content .page-content -->



                    <div class="contact grid_13">
                        <div class="grid_6">
                            <h4> Chicago Office: </h4>
                            <div class="address-text">33 West Monroe St. Suite 2700<br />
                                Chicago, IL 60603-5404<br />
                                tel <a href="callto://+13123720770">(312) 372-0770</a><br />
                                fax (312) 372-9818
                            </div>
                            <a href="https://maps.google.com/maps/ms?msid=202963780411458165446.0004ce16cf8a9f041866e&msa=0&ll=41.880681,-87.628927&spn=0.018165,0.021672" target="new">
                                <img alt="Map, Chicago Location" src="<?php bloginfo('template_url'); ?>/images/map_chicago.jpg" width="250px" height="250px" class="map" \></a>
                        </div>

                        <div class="contact grid_6 pull_1">
                            <?php $url = site_url('/crown-point-indiana/', 'http'); ?>

                            <h4><a href="<?php echo $url; ?>">Indiana Office:</a></h4>
                            <div class="address-text">
                                11051 Broadway St. Suite B<br />
                                Crown Point, IN 46307<br />
                                tel <a href="callto://+12197911900">(219) 791-1900</a><br />
                                fax (219) 791-1901
                            </div>


                            <a href="https://maps.google.com/maps?q=11051+Broadway,+Crown+Point,+IN&hl=en&ll=41.4175,-87.335472&spn=0.292732,0.346756&sll=41.880681,-87.628927&sspn=0.018165,0.021672&oq=11051+Broadway,+Crown&hnear=11051+Broadway,+Crown+Point,+Indiana+46307&t=m&z=12" target="new">
                                <img alt="Map, Crown Point Location" src="<?php bloginfo('template_url'); ?>/images/map_indiana.jpg" width="250px" height="250px" class="map" \></a>

                        </div>
                    </div>
                </div><!--#post-# .post-->


            <?php endwhile; ?>
    </div> <!-- end front-left -->





    <div class="column front-right" >


        <?php
        get_sidebar('contact');
        ?>

    </div>
    <div style='clear:both;'></div>
</div><!--#content-->

<?php get_footer(); ?>