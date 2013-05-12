 $practice_rep_link = "$practice_link-rep/";  
                         if  (!is_404($practice_rep_link)) {
                    echo '<h3><a href="'.$practice_rep_link.'"> Representative Cases'.'</a></h3>';
                     }
                     
                      global $pagename; 
                  $check_page = 'practices-home/'.$pagename.'-rep';
                  $check_page_rep = strpos($pagename, '-rep');
                  
                  if (get_page_by_path($check_page)) { echo '<h3><a href="'.home_url().'/'.$check_page.'">Representative Cases'.'</a></h3>'; } 
                  
                  
                  <div class="photo-block">
				<?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?>
					<div class="bar"></div>
					<h5 class="lawyer-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	<?php 
	$practice_area_select = types_render_field("practice-area-select",  array("raw" => "true"));
	echo '<h4 class="practice-name '. $practice_area_select .'">';
//	$practice_area_term = get_term_by('name', $practice_area_select, 'practice-area');
	echo '<span><a href="'.home_url().'/practices-home/'.sanitize_title($practice_area_select).'">'.$practice_area_select.'</a></span>';
	echo '</h4>';
?>
				</div>
                  
                  
                  
                  
                                     
           
<?php

	$args = array(
			'posts_per_page' => -1,
			'meta_key' => 'wpcf-last-name',
			'orderby' => 'wpcf-last-name',
			'order' => 'ASC',
			'post_type' => 'lawyer_profile',
			'practice-area' => sanitize_title($practice),
			'post_status' => 'publish'
			);

			$posts = query_posts($args);
			$count_posts = $wp_query->post_count;
			if ($count_posts > 10) {
				echo '<ul id="entry" class="two-columns">';
                                                                
			} else 
				echo '<ul>';
			if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></li>
<?php
			endwhile;
			wp_reset_query(); 
?>

                                
                                
                                
                                
                                
                                  <ul>
                                <?php
                                foreach ($tax_terms as $tax_term) { 
                                echo '<li>' . '<a href="' . $site_url . 'practices-home/' . $tax_term->slug . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
                                }
                                ?>
                                </ul>
                                
                                
                                
                                 <?php if ($is_IE) { ?> 
                                            <script>
                                                $(function(){
                                                        $('#wrapper').columnize({
                                                                columns : 4,
                                                                accuracy : 1,
                                                                buildOnce : true,
                                                                lastNeverTallest: true,
                                                                height: 100,
                                                                width: 170
                                                            })
                                                });
                                            </script>
                                                            <div id="wrapper" style="padding-top: 10px">
                                                <?php } ?>

                                              <?php if ($is_IE) { ?> </div> <?php } ?>
