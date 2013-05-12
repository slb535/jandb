<?php

/*
Template Name: Practice Page Template
*/
?>
<?php get_header(); ?>
<div id="content" class="practice-page">
	<div class="column front-left">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
		<article>
                                <h1><?php the_title(); ?></h1>                       
                           
                                <div class="practice-body">
                                <?php the_content(); ?>
                                </div>
                                
         <hr /> 

                </div>             
                                
<?php endwhile; /* end loop */ ?>
            
     <div class="practices-footer">
                                 <h3>Johnson & Bell Practices</h3>
              
                                      <?php   
                                //list terms in a given taxonomy
                                $taxonomy = 'practice-area';
                                $term_args=array(
                                  'hide_empty' => false,
                                  'orderby' => 'name',
                                  'order' => 'ASC'
                                );   
                                $tax_terms = get_terms($taxonomy,$term_args);
                                $site_url = network_site_url( '/' );

                                
                                ?>
        
                                                                              
                                 
                                 
                                  <div class="practice-areas-list-small four-columns">
                                       
                                      
                                      
                                      
                                      
                                <ul>
                                <?php
                                foreach ($tax_terms as $tax_term) { 
                                echo '<li>' . '<a href="' . $site_url . 'practices-home/' . $tax_term->slug . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a></li>';
                                }
                                ?>
                                </ul>
                                                                
                                                                

              
                                </div>
        </div>
           
        </div> <!-- end column front-left-->
       
       
                 <div class="column front-right" >
                         

                <?php 
                        get_sidebar("practice"); 
                ?>
             
        </div>
 </div><!--#content-->

	<div style='clear:both;'></div>
        
       
        
                                 
                       <?php get_footer(); ?>
