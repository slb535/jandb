<?php
/*
Template Name: Photo Row
*/
?>




<h2>Random Post</h2>
<ul>
<?php $posts = get_posts('post_type=lawyer_profile&orderby=rand&numberposts=6'); foreach($posts as $post) { ?>
    
    
    
    
    <div class="photo-block">
                                 
                                   <?php if (class_exists('MultiPostThumbnails')) : MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image'); endif; ?>
                                         <h5 class="lawyer-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5><div class="bar"></div>
                                         <h4 class="practice-name municipal"><span>Municipal Liability Law</span></h4>
                                         
                                          <?php $terms = get_the_terms( $post->ID, 'practice-area' ); ?> 
                                         
                   <?php        $terms = get_the_terms( $post->ID, 'on-draught' );
						
if ( $terms && ! is_wp_error( $terms ) ) : 

	$draught_links = array();

	foreach ( $terms as $term ) {
		$draught_links[] = $term->name;
	}
						
	$on_draught = join( ", ", $draught_links );
?>

<p class="beers draught">
	On draught: <span><?php echo $on_draught; ?></span>
</p>

<?php endif; ?>

                             </div>           
                                                 
                              
    
    

<?php } ?>
</ul>
