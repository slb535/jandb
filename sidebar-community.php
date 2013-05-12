<div id="sidebar" class="border">
	
          
            	               
            <div class="community sidebar">
                       
                <h2>WE ARE PROUD TO SUPPORT OUR LAWYERS IN THESE VOLUNTEER INITIATIVES:</h2>

                            
                                <?php     $args = array(
                                            'cat'      => 33,-24,
                                            'posts_per_page' => 5,
                                            'orderby' => rand
                                            );

				query_posts ($args);

				if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                                <?php if ( has_post_thumbnail() ) { /* loads the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
				
                              <ul>
                                <li><span class="h2"><?php the_title(); ?> </span><?php the_content(); ?></li>
						
                                <?php                    
				 endwhile; 
				wp_reset_query(); ?>
                              </ul>
              </div>
        
</div><!--sidebar-->
<div id="sidebar-search">
    <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
</div>



