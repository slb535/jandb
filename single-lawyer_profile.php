<?php get_header(); ?>

<div id="content">
    <?php if (have_posts()) while (have_posts()) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?> >
                <?php
                if (has_post_thumbnail()) :
                    echo '<div class="featured-thumbnail grid_5 larger">';
                    the_post_thumbnail();
                    echo '</div><div class="smaller">';
                    the_post_thumbnail('mobile-thumb');
                    echo '</div></div>';
                endif;
                ?>
            </div>
            <div  class="grid_7 name">
                <span class="icons screen grid_3">
                    <?php
                    $email = types_render_field("email", array('raw' => 'true'));
                    if (!empty($email)) {
                        ?>
                        <a href="mailto:<?php echo $email ?>"><img src="<?php bloginfo('template_url'); ?>/images/icon-email.gif" width="24" height="24" /></a>
                    <?php } ?>
                    <?php
                    $vcf = types_render_field("vcf-card", array('raw' => 'true'));
                    if (!empty($vcf)) {
                        ?>
                        <a href="<?php echo $vcf ?>"><img src="<?php bloginfo('template_url'); ?>/images/icon-vcard.png" width="32" height="24" /></a>
                    <?php } ?>

                    <?php
                    $linkedin = types_render_field("linkedin", array('raw' => 'true'));
                    if (!empty($linkedin)) {
                        ?>
                        <a href="<?php echo $linkedin ?>" target="new"><img src="<?php bloginfo('template_url'); ?>/images/icon-linkedin.png" width="24" height="24" /></a>



                    <?php } ?>  </span>
                <h2 class="lawyer-name"><?php the_title(); ?>   </h2>


                <?php
                $title = types_render_field("title", array("raw" => "true"));


                echo '<div class="title">' . $title;
                if (in_category('Indiana')) {
                    echo '<br /><a href="/crown-point-indiana/">Crown Point, Indiana</a>';
                }
                echo '</div>';
                ?>

                <div class="phone screen">Direct <?php echo(types_render_field("phone", array('raw' => 'true'))); ?></div>
                <div class="phone print">Direct: <?php echo(types_render_field("phone", array('raw' => 'true'))); ?></div>


                <div class="clearfix"></div>

            </div>
            <div id="lawyer-left"  class="grid_7">


                <div class="post-content grid_11">


                    <?php if (!empty($email)) { ?>
                        <div class="phone print">Email: <span class="lowercase print"><?php echo $email; ?></span></div>
                    <?php } ?>

                    <div class="lawyer-bio">

                        <p><?php the_content(); ?>

                    </div>
                    <div class="clearfix"></div>

                </div><!--.post-content-->
            </div> <!-- lawyer left -->

            <div id="lawyer-right" class="grid_5">
                <div class="details">


                    <div class="practice-areas grid_5">

                        <h3>Practice Areas</h3>

                        <?php
                        $terms = wp_get_post_terms($post->ID, 'practice-area');
                        $count = count($terms);
                        if ($count > 0) {
                            echo "<ul>";
                            foreach ($terms as $term) {
                                echo '<li><a href="' . home_url() . '/practices-home/' . $term->slug . '/">' . $term->name . '</a></li>';
                            }
                            echo "</ul>";
                        }
                        ?>

                    </div><!-- practice areas-->
                    <div class="lawyer-list grid_6">




                        <?php
                        $url = site_url();
                        $lastname = types_render_field("last-name", array('raw' => 'true'));
                        global $post;
                        $slug = $post->post_name;
                        ?>


                        <?php
                        $fullbar = types_render_field("full-bar", array('raw' => 'true'));
                        if ($fullbar) {
                            echo '<h3><a href="' . $url . '/full-page/fullbar-' . $lastname . '/" class="popup">Bar Admissions</a></h3>';
                        } else {
                            $bar_admissions = get_post_meta($post->ID, 'wpcf-bar_admissions', false);
                            if (!empty($bar_admissions) && is_array($bar_admissions))
                                sort($bar_admissions);

                            echo '<h3><a href="javascript:toggleDiv(\'BarAdmissions\');">Bar Admissions</a></h3>' . '<div class="toggleBox" id="BarAdmissions"><ul>';

                            if (in_category('Indiana')) {
                                echo '<li>Indiana Supreme Court</li>';
                            } else {
                                echo '<li>Illinois Supreme Court</li>';
                            }

                            foreach ($bar_admissions as $bar) {
                                echo '<li>' . $bar . '</li>' . "\r\n";
                            }

                            echo '</ul></div>';
                        }
                        ?>


                        <?php
                        $education = types_render_field("education", array('separator' => '</li><li>'));
                        if ($education)
                            echo '<h3><a href="javascript:toggleDiv(\'Education\');">Education</a></h3>' . '<div class="toggleBox" id="Education"><ul><li>' . $education . '</ul></div>';
                        ?>



                        <?php
                        $fullhonors = types_render_field("full-honors", array('raw' => 'true'));
                        if ($fullhonors) {
                            echo '<h3><a href="' . $url . '/full-page/honors-' . $lastname . '/" class="popup">Honors</a></h3>';
                        } else {
                            $honors = types_render_field("honors", array('separator' => '</li><li>'));
                            if ($honors)
                                echo '<h3><a href="javascript:toggleDiv(\'Honors\');">Honors</a></h3>' . '<div class="toggleBox" id="Honors"><ul><li>' . $honors . '</ul></div>';
                        }
                        ?>

                        <?php
                        $fullcases = types_render_field("full-cases", array('raw' => 'true'));
                        if ($fullcases) {
                            echo '<h3><a href="' . $url . '/full-page/fullcases-' . $lastname . '/" class="popup">Representative Cases</a></h3> ';
                        } else {
                            $cases = types_render_field("cases", array('separator' => '</li><li>'));
                            if ($cases)
                                echo '<h3><a href="javascript:toggleDiv(\'RepresentativeCases\');">Representative Cases</a></h3>' . '<div class="toggleBox" id="RepresentativeCases"><ul><li>' . $cases . '</ul></div>';
                        }
                        ?>

                        <?php
                        $fullopinions = types_render_field("full-opinions", array('raw' => 'true'));
                        if ($fullopinions) {
                            echo '<h3><a href="' . $url . '/full-page/fullopinions-' . $lastname . '/" class="popup">Published Opinions</a></h3>';
                        } else {
                            $opinions = types_render_field("opinions", array('separator' => '</li><li>'));
                            if ($opinions)
                                echo '<h3><a href="javascript:toggleDiv(\'Opinions\');">Published Opinions</a></h3>' . '<div class="toggleBox" id="Opinions"><ul><li>' . $opinions . '</ul></div>';
                        }
                        ?>

                        <?php
                        $fullpublications = types_render_field("full-publications", array('raw' => 'true'));
                        if ($fullpublications) {
                            echo '<h3><a href="' . $url . '/full-page/fullpub-' . $lastname . '/" class="popup">Presentations &amp; Publications</a></h3>';
                        } else {
                            $publications = types_render_field("publications", array('separator' => '</li><li>'));
                            if ($publications)
                                echo '<h3><a href="javascript:toggleDiv(\'Publications\');">Presentations &amp; Publications</a></h3>' . '<div class="toggleBox" id="Publications"><ul><li>' . $publications . '</ul></div>';
                        }
                        ?>

                        <?php
                        $affiliations = types_render_field("affiliations", array('separator' => '</li><li>'));
                        if ($affiliations)
                            echo '<h3><a href="javascript:toggleDiv(\'Affiliations\');">Affiliations</a></h3>' . '<div class="toggleBox" id="Affiliations"><ul><li>' . $affiliations . '</ul></div>';
                        ?>

                        <?php
                        $community = types_render_field("community", array('separator' => '</li><li>'));
                        if ($community)
                            echo '<h3><a href="javascript:toggleDiv(\'Community\');">Community Involvement</a></h3>' . '<div class="toggleBox" id="Community"><ul><li>' . $community . '</ul></div>';
                        ?>

                        <?php
                        $fullbio = types_render_field("full-bio", array('raw' => 'true'));
                        if ($fullbio)
                            echo '<h3><a href="' . $url . '/full-page/fullbio-' . $lastname . '/" class="popup">Full Bio</a></h3> ';
                        ?>







                    </div><!-- lawyer list -->
                </div><!--   details-->

            </div><!--end lawyer-right-->


            <div class="clear"></div>

            <?php edit_post_link('<small>Edit this entry</small>', '', ''); ?>







        <?php endwhile; /* end loop */ ?>
</div><!--end post -->
</div><!--#content-->
<?php get_footer(); ?>

