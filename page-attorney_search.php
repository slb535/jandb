<?php
/*
 * Template Name: Attorney Search Page
 */

get_header();
$sname = '';
$skey = '';
if (isset($_REQUEST['sname']))
    $sname = esc_attr($_REQUEST['sname']);
if (isset($_REQUEST['skey']))
    $skey = esc_attr($_REQUEST['skey']);
?>
<div id="content">
    <div class="column front-left">
        <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                    <article>
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <div id="alphaList" align="center">
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=a">A</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=b">B</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=c">C</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=d">D</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=e">E</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=f">F</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=g">G</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=h">H</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=i">I</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=j">J</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=k">K</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=l">L</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=m">M</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=n">N</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=o">O</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=p">P</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=q">Q</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=r">R</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=s">S</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=t">T</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=u">U</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=v">V</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=w">W</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=x">X</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=y">Y</a>
                            <a href="<?php echo home_url(); ?>/our-attorneys/?alpha=z">Z</a>
                        </div>
                    </article>
                <?php endwhile; /* end loop */ ?>
        </div> <!-- end post -->
        <div class="laywer_search_form">
            <form action="" id="searchform" method="get">
                <table>
                    <tr>
                        <td class="searchLabel">Name (first or last):</td>
                        <td>
                            <div class="attorney-search"><input  type="text" class="textInput lawyer-search" label="sname" value="<?php echo $sname; ?>" name="sname" id="navsearchbox" /></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="searchLabel">Keyword:</td>
                        <td>
                            <div class="attorney-search"><input type="text" class="textInput lawyer-search" label="skey" value="<?php echo $skey; ?>" name="skey" id="navsearchbox" /></div>
                            <input type="image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-button.gif" value="Search" alt="Search" />
                        </td>
                    </tr>
                </table>
            </form>
            <form name="practice">
                <table >
                    <tr>
                        <td class="searchLabel">Practice:</td>
                        <td valign="top">
                            <?php
                            //list terms in a given taxonomy
                            $taxonomy = 'practice-area';
                            $term_args = array(
                                'hide_empty' => false,
                                'orderby' => 'name',
                                'order' => 'ASC'
                            );
                            $tax_terms = get_terms($taxonomy, $term_args);
                            $site_url = network_site_url('/');
                            ?>

                            <div class="attorney-search"> <select name="example" size="1" style="margin-left: 7px;" onChange="go()">
                                    <option value="" >-select-</option>
                                    <?php
                                    foreach ($tax_terms as $tax_term) {
                                        echo '<option value="' . $site_url . 'practices-home/' . $tax_term->slug . '-attorneys" title="' . sprintf(__("View all posts in %s"), $tax_term->name) . '" ' . '>' . $tax_term->name . '</option>';
                                    }
                                    ?>
                                </select></div>

                            <script type="text/javascript">
                                <!--
                            function go() {
                                    location =
                                            document.practice.example.
                                            options[document.practice.example.selectedIndex].value
                                }
                                //-->
                            </script>


                        </td></tr></table>
            </form>

        </div> <!-- end Lawyer Search form -->


        <?php
        if (empty($skey) && !empty($sname) && !isset($_REQUEST['alpha'])) {
            global $wpdb;
            $name_query = "
			SELECT wposts.*
			FROM $wpdb->posts wposts
			WHERE wposts.post_status = 'publish'
			AND wposts.post_type = 'lawyer_profile'
			AND wposts.post_title LIKE '%" . $sname . "%'
			ORDER BY wposts.post_title ASC";
            $name_query_results = $wpdb->get_results($name_query, OBJECT);
            echo "<h3>Search by Name: '" . $sname . "'</h3>\r\n";
            echo '<div class="practice-body two-columns"><ul class="lawyer-search">';
            if (!empty($name_query_results)) {
                foreach ($name_query_results as $found_lawyer) {
                    ?>
                    <li><a href="<?php echo get_permalink($found_lawyer->ID) ?>" rel="bookmark"><?php echo $found_lawyer->post_title; ?></a></li>
                    <?php
                }
            } else {
                echo "<li>No attorneys found.</li>";
            }
            echo "</ul></div>\r\n";
        }

        if (!empty($skey) && empty($sname) && !isset($_REQUEST['alpha'])) {
            global $wpdb;
            $key_query = "
			SELECT wposts.*
			FROM $wpdb->posts wposts
			WHERE wposts.post_status = 'publish'
			AND wposts.post_type = 'lawyer_profile'
			AND wposts.post_content LIKE '%" . $skey . "%'
			ORDER BY wposts.post_title ASC";
            $key_query_results = $wpdb->get_results($key_query, OBJECT);
            echo "<h3>Search by Keyword: '" . $skey . "'</h3>\r\n";
            echo '<div class="practice-body two-columns"><ul class="lawyer-search">';
            if (!empty($key_query_results)) {
                foreach ($key_query_results as $found_lawyer) {
                    ?>
                    <li><a href="<?php echo get_permalink($found_lawyer->ID) ?>" rel="bookmark"><?php echo $found_lawyer->post_title; ?></a></li>
                    <?php
                }
            } else {
                echo "<li>No attorneys found.</li>";
            }
            echo "</ul></div>\r\n";
        }

        if ((!empty($skey) && !empty($sname)) && !isset($_REQUEST['alpha'])) {
            global $wpdb;
            $key_query = "
			SELECT wposts.*
			FROM $wpdb->posts wposts
			WHERE wposts.post_status = 'publish'
			AND wposts.post_type = 'lawyer_profile'
			AND wposts.post_content LIKE '%" . $skey . "%'
			AND wposts.post_title LIKE '%" . $sname . "%'
			ORDER BY wposts.post_title ASC";
            $key_query_results = $wpdb->get_results($key_query, OBJECT);
            echo "<h3>Search by Keyword: '" . $skey . "' and Name: '" . $sname . "'</h3>\r\n";
            echo '<div class="practice-body two-columns"><ul class="lawyer-search">';
            if (!empty($key_query_results)) {
                foreach ($key_query_results as $found_lawyer) {
                    ?>
                    <li><a href="<?php echo get_permalink($found_lawyer->ID) ?>" rel="bookmark"><?php echo $found_lawyer->post_title; ?></a></li>
                    <?php
                }
            } else {
                echo "<li>No attorneys found.</li>";
            }
            echo "</ul></div>\r\n";
        }


        $list = '';
        if (isset($_REQUEST['alpha']) && (!$skey && !$sname)) {
            $alpha = esc_attr($_REQUEST['alpha']);

            echo "<h3>" . $alpha . "</h3>\r\n";
            ?>

            <!--[if lt IE 10]> <div id="wrapper" style="padding-top: 10px"><div class="wide"> <![endif]-->


            <div class="practice-body two-columns">
                <ul class="lawyer-search">
                    <?php
                    global $wpdb;
                    $alpha_query = "
			SELECT DISTINCT wposts.*
			FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta
			WHERE wposts.ID = wpostmeta.post_id
			AND wpostmeta.meta_key = 'wpcf-last-name'
			AND wpostmeta.meta_value LIKE '" . $wpdb->escape($alpha) . "%'
			AND wposts.post_status = 'publish'
			AND wposts.post_type = 'lawyer_profile'
			ORDER BY wpostmeta.meta_value ASC";
                    $alpha_query_results = $wpdb->get_results($alpha_query, OBJECT);
                    if (!empty($alpha_query_results)) {
                        foreach ($alpha_query_results as $found_lawyer) {
                            ?>
                            <li><a href="<?php echo get_permalink($found_lawyer->ID) ?>" rel="bookmark"><?php echo $found_lawyer->post_title; ?></a></li>
                            <?php
                        }
                    } else {
                        echo "<li>No attorneys found. (" . $alpha . ")</li>";
                    }
                    ?>
                </ul>
            </div><!-- end two columns -->
        <?php } ?>


        <!--[if lt IE 10]>  </div> <![endif]-->
    </div>
    <!-- end column front-left-->

    <div class="column front-right" >
        <aside>
            <?php get_sidebar('search'); ?>
        </aside>

    </div>
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

</div><!--#content-->


<?php get_footer(); ?>


