

<div ID="photo-row">
				<h3> Our Specialized Practices Meet Your Needs</h3>
<?php 
	$posts = get_posts('post_type=lawyer_profile&orderby=rand&numberposts=7&cat=-46'); 
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

