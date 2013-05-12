 <!--INDIANA PAGE -->                

            <?php     if ( is_page(592) ) { ?>
      
              <div class="indiana">
                    <div class="photo-row">
                        

				<h3> Our Specialized Practices Meet Your Needs</h3>
                                        <?php 
                                                $posts = get_posts('post_type=lawyer_profile&orderby=rand&numberposts=7&cat=-46,47'); 
                                                foreach($posts as $post) {
                                        ?>
                                                                        <div class="photo-block">
                                                                        <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?>
                                                                                <div class="bar"></div>
                                                                                <h5 class="lawyer-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                <?php 
                                                $practice_area_select = types_render_field("practice-area-select",  array("raw" => "true"));
                                                echo '<h4 class="practice-name '. $practice_area_select .'">';
                                                $practice_area_term = get_term_by('name', $practice_area_select, 'practice-area');
                                                $practice_area_link = get_term_link($practice_area_term->slug, 'practice-area');
                                                if (!is_wp_error($practice_area_link)) {
                                                        echo '<span><a href="'.$practice_area_link.'">'.$practice_area_select.'</a></span>';
                                                }  else {
                                                         echo '<span>'.$practice_area_select.'</span>';
                                                }
                                                echo '</h4>';
                                        ?>
                                                                        </div>
                                        <?php } 
                                                wp_reset_query(); 
                                        ?>
				<div style='clear:both;'></div>
			</div> <!-- end photo-row-->
                </div> <!-- end indiana -->
                     <?php  } ?>    <!-- end INDIANA Page content -->                     

                     
                     
                     <!--PUBLICATIONS PAGE -->                

            <?php     if ( is_page(555) ) { ?>
      
                 <div class="publications">
                    <div class="headlines">
                        
                            <h3>Highlights</h3>
                            
                            <ul>
                                <?php     $args = array(
                                            'cat'      => 24,
                                            'posts_per_page' => 3,
                                            'order'    => 'ASC'
                                            );

				query_posts ($args);

				if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						 <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?><br /><span class="readmore">read more</span></a>
						</li>
                                <?php                    
				 endwhile; 
				wp_reset_query(); ?>
                             </ul>
                        </div> <!-- end headlines -->
                </div><!-- end publications -->
                     <?php  } ?>    <!-- end Publications Page content -->
                     
    <!--PRACTICES PAGE -->                
                     <?php     if ( is_page(595) ) {  
                                //list terms in a given taxonomy
                                $taxonomy = 'practice-area';
                                $term_args=array(
                                  'hide_empty' => false,
                                  'orderby' => 'name',
                                  'order' => 'ASC'
                                );   
                                $tax_terms = get_terms($taxonomy,$term_args);
                                ?>
                          <div class="practice-areas-list three-columns column">
                                <ul>
                                <?php
                                foreach ($tax_terms as $tax_term) {
                                    echo '<li>' . '<a href="' . $tax_term->slug . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
                                }
                                ?>
                                </ul>
                          </div>
                  <?php   } ?> <!-- end Practices Page content -->
                     
                  
                      <!--FIRM NEWSPAGE -->                

                   <?php     if ( is_page(75) ) { ?>
      
                    <div class="firm-news">
                          <div class="headlines">
                          
                            <ul>
                                <?php     $args = array(
                                            'cat'      => 24,
                                            'posts_per_page' => 4,
                                            'order'    => 'ASC'
                                            );

				query_posts ($args);

				if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						 <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?><br /><span class="readmore">read more</span></a>
						</li>
                                <?php                    
				 endwhile; 
				wp_reset_query(); ?>
                             </ul>

                            </div> <!--end headlines-->
                    </div> <!--end firm-news-->
                     <?php  } ?>    <!-- end Firm News Page content -->
                  
                  
                  <!--AWARDS PAGE -->                
                     <?php     if ( is_page(66) ) { ?>
                         
                   <div class="awards">
                          <div class="headlines">
                        
                            
                            <ul>
                                <?php     $args = array(
                                            'cat'      => 25,
                                            'posts_per_page' => 3,
                                            'order'    => 'ASC'
                                            );

				query_posts ($args);

				if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						 <li><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a><br />
                                               <span class="source"><?php  echo types_render_field ("award-source",  array('raw' => 'true')); ?></span>

                                                         <span class="readmore"><a href="<?php the_permalink(); ?>" >read more</a></span>
						</li>
                                           
                                        
                                <?php                    
				 endwhile; 
				wp_reset_query(); ?>
                                </ul>

                            </div>
                   </div>     
                         
                          <?php   } ?> <!-- end Awards Page content -->

                          
                          
                            <!--COMMUNITY -->                

            <?php     if ( is_page(545) ) { ?>
      
      <div class="community">
          <img src="<?php bloginfo( 'template_url' ); ?>/images/community_logos.png" />
      </div> <!-- end community -->   
      
                           <?php  } ?>    <!-- end Community content (MORE IN SIDEBAR) -->