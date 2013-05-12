<?php

/*
Template Name: Whole Page (no sidebar)
*/

?>
<?php get_header(); ?>
<div id="content">
	
	
                        
                        
	
            
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

			<article>
                                <h1><?php the_title(); ?></h1>                       
                               	<p><?php the_content(); ?></p>
                        </article>       
          
                                   
                </div><!-- content -->
                        
                                           
                                    		
<?php endwhile; /* end loop */ ?>
   


       
        
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
