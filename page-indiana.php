<?php

/*
Template Name: Indiana Home Page
*/

?>
<?php get_header(); ?>
<div id="content">
	
	
                        
                        
	<div class="column front-left">
            
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

			<article>
                                <h1><?php the_title(); ?></h1>                       
                               	<p><?php the_content(); ?></p>
                </div>              
            <!--INDIANA PAGE -->                

            <?php     if ( is_page(592) ) { ?>
      
      <div class="indiana">
                    <div class="photo-row">
                        
                           Photo Row
                           
                           
                    </div>
                     <?php  } ?>    <!-- end INDIANA Page content -->                     
    
                                   
                </div><!-- content -->
                        
                                           
                                    		
<?php endwhile; /* end loop */ ?>
   

</div> <!-- end column front-left-->
       
        <div class="column front-right" >
                   <aside>
                        

                <?php 
                            
                        if (is_tree(555)) 
                           get_sidebar('publications'); 

                       elseif (is_tree(545)) 
                        
                            get_sidebar('community'); 
                       
                        elseif (is_tree(592)) 
                        
                            get_sidebar('indiana'); 
                        
                           elseif (is_tree(60)) 
                        
                            get_sidebar('contact'); 
                       else 
                            get_sidebar('search'); 
                   ?>
                   </aside>
            
        </div>
	<div style='clear:both;'></div>
                                 </div><!--#content-->
                                 
                       <?php  
                           $quote = types_render_field ("quote", array('raw' => 'true'));
                                       $quotesource = types_render_field ("quote-source", array('raw' => 'true'));
                                       $quotesourcetitle = types_render_field ("quote-source-title", array('raw' => 'true'));
                                      
                       
                       if ( $quote) echo '<div class="quote-block"><div class="quote">'. $quote . '</div>';  
                                            if ( $quotesource) echo '<div class="quote-source">'. $quotesource;  
                                            if ( $quotesourcetitle) echo ', <span class="quote-source-title">'. $quotesourcetitle . '</span></div></div>'; ?>
                                      
                                         
                       <?php get_footer(); ?>
