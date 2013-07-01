<?php  

/*  Template Name: Lawyers Listing Page  */


get_header(); ?>

<div id="content">
    
<?php    echo '<h1>Alphabetical Search Results</h1><div id="alphaList" align="center">'.get_alphabet_nav('wordpress/attorney-listing').'</div><br />'; /* WILL NEED TO FIX THIS */
?>
    
	<?php 
        query_posts(array('post_type'=>'lawyer_profile')); /*replace 'book' with your custom post type*/
        
        if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<?php
 
if( ereg( '/[a-z-]+/[a-z]/$', $_SERVER['REQUEST_URI'])) {
 
$url_array = explode('/', $_SERVER['REQUEST_URI']); 
$alpha = $url_array[sizeof($url_array)-2];
 
$postids = $wpdb->get_col("
    SELECT p.ID
    FROM $wpdb->posts p
    WHERE p.post_title REGEXP '^" . $wpdb->escape($alpha) . "'
    AND p.post_status = 'publish' 
    AND p.post_type = 'lawyer_profile' 
    AND p.post_date < NOW()
    ORDER BY p.post_title ASC"
);



 
 
if ($postids) {
  $args=array(
    'post__in' => $postids,
    'post_type' => 'lawyer_profile', /*replace 'book' with your custom post type*/
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'caller_get_posts'=> 1
  );
  $my_query = null;
  $my_query = new WP_Query($args);
  if( $my_query->have_posts() ) {
 
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
 
	<div class="listing">
 
       <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

        </div>
 
      <?php
      
          endwhile;
    }
 
  }
 
}
 else {
	query_posts(array('post_type'=>'lawyer_profile')); /*replace 'book' with your custom post type*/
 
	if (have_posts()) : while (have_posts()) : the_post(); 
 
	 ?>    

    <div class="listing">
     <h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<?php the_excerpt(); ?>				
	</div>
 
	 
    <?php endwhile; else: ?>
 
    <p>Sorry, no profiles matched your criteria.</p>
 
   <?php endif; ?>
 
</div> <!-- end post -->
 
<div class="navigation">
 
<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
 
<div class="floatleft"><?php next_posts_link( __('&laquo; Older Entries', '') ); ?></div>
<div class="floatright"><?php previous_posts_link( __('Newer Entries &raquo;', '') ); ?></div>
 
  <?php } 
} ?>

	<?php endwhile; ?>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
