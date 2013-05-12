<?php

add_action('init', 'lawyer_register');

function lawyer_register() {

	$labels = array(
		'name' => _x('Lawyer Profiles', 'post type general name'),
		'singular_name' => _x('Lawyer Profile', 'post type singular name'),
		'add_new' => _x('Add New', 'lawyer_profile'),
		'add_new_item' => __('Add New Lawyer Profile'),
		'edit_item' => __('Edit Lawyer Profile'),
		'new_item' => __('New Lawyer Profile'),
		'view_item' => __('View Lawyer Profile'),
		'search_items' => __('Search Lawyer Profiles'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => null,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail', 'excerpt', 'page-attributes','custom-fields','revisions')
	  ); 

	register_post_type( 'lawyer' , $args );
}

add_action("admin_init", "admin_init");

function admin_init(){
  add_meta_box("special_info", "Special Info", "special_info", "lawyer", "normal", "low");
}

function special_info() {
	global $post;
	$custom = get_post_custom($post->ID);
        $title = $custom["title"][0];
        $practice_areas = $custom["practice_areas"][0];
        $email = $custom["email"][0];
        $phone = $custom["phone"][0];
        $bar_admissions = $custom["bar_admissions"][0];
	$education = $custom["education"][0];
	$honors = $custom["honors"][0];
	$clients = $custom["clients"][0];
	$publicity = $custom["publicity"][0];
	$affiliations = $custom["affiliations"][0];
        $community = $custom["community"][0];
       ?>
	<table cellspacing="2">

            <tr><td valign="top"><label>Title:</label></td><td><input type="text"   name="title" placeholder="Title" value="<?php echo $title; ?>" /></td></tr>

            <tr><td valign="top"><label>Email:</label></td><td><input type="text"   name="email" placeholder="Email Address" value="<?php echo $email; ?>"/></td></tr>
             <tr><td valign="top"><label>Phone:</label></td><td><input type="text"   name="phone" placeholder="Desk Phone" value="<?php echo $phone; ?>"/></td></tr>
	
            <tr>
			<td valign="top">
				<label>Practice Area(s):</label>
			</td>
			<td>
				<textarea ROWS=7 COLS=40 name="practice_areas" placeholder="Practice Areas" value="<?php echo $practice_areas; ?>"></textarea>
			</td>
			
		</tr>
		<tr><td valign="top"><label>Education:</label></td><td><textarea rows="7" cols="40" name="education" placeholder="Schools and Degrees" value="<?php echo $education; ?>"></textarea></td></tr>
		<tr><td valign="top"><label>Bar Admissions:</label></td><td><textarea rows="7" cols="40" name="bar_admissions" placeholder="Bar Admissions" value="<?php echo $bar_admissions; ?>"></textarea></td></tr>
		<tr><td valign="top"><label>Honors:</label></td><td><textarea rows="7" cols="40" name="honors" placeholder="honors" value="<?php echo $honors; ?>"></textarea></td></tr>
		<tr><td valign="top"><label>Clients:</label></td><td><textarea rows="7" cols="40" name="clients" placeholder="Clients" value="<?php echo $clients; ?>"></textarea></td></tr>
		<tr><td valign="top"><label>Publications/<br />Speaking Engagements:</label></td><td><textarea rows="7" cols="40" name="publicity" placeholder="Publications/Speaking Engaments" value="<?php echo $publicity; ?>"></textarea></td></tr>
		<tr><td valign="top"><label>Affiliations:</label></td><td><textarea rows="3" cols="40" name="affiliations" placeholder="Organization Affiliations" value="<?php echo $affiliations; ?>"></textarea></td></tr>
		<tr><td valign="top"><label>Community Involvement:</label></td><td><textarea rows="7" cols="40" name="community" placeholder="Community Involvement" value="<?php echo $community; ?>"></textarea></td></tr>

        </table>
	
	<?php

}

add_action('save_post', 'save_details');

function save_details(){
  global $post;
  $postID = $post->ID;

  // To prevent metadata or custom fields from disappearing...
  if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
  return $postID;

  update_post_meta($postID, "email", $_POST["email"]);
  update_post_meta($postID, "phone", $_POST["phone"]);
  update_post_meta($postID, "title", $_POST["title"]);
  update_post_meta($postID, "practice_areas", $_POST["practice_areas"]);
  update_post_meta($postID, "education", $_POST["education"]);
  update_post_meta($postID, "honors", $_POST["honors"]);
  update_post_meta($postID, "clients", $_POST["clients"]);
  update_post_meta($postID, "publications", $_POST["publications"]);
  update_post_meta($postID, "affiliations", $_POST["affiliations"]);
  update_post_meta($postID, "community", $_POST["community"]);
  
}

?>
