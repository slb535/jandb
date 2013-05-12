<?php

if (empty($skey) && !empty($sname) && !isset($_REQUEST['alpha'])) {
	global $wpdb;
	$name_query = "
			SELECT wposts.*
			FROM $wpdb->posts wposts
			WHERE wposts.post_status = 'publish'
			AND wposts.post_type = 'lawyer_profile'
			AND wposts.post_title LIKE '%".$sname."%'
			ORDER BY wposts.post_title ASC";
	$name_query_results = $wpdb->get_results($name_query, OBJECT);
	echo "<h3>Search by Name: '".$sname."'</h3>\r\n";
	echo '<div class="practice-body two-columns"><ul class="lawyer-search">';
	if (!empty($name_query_results)) {
		foreach ($name_query_results as $found_lawyer) { ?>
			<li><a href="<?php echo get_permalink($found_lawyer->ID) ?>" rel="bookmark"><?php echo $found_lawyer->post_title; ?></a></li>
		<?php }

	} else {
		echo "<li>No attorneys found.</li>";
	}
	echo "</ul></div>\r\n";
}

if (!empty($skey) && empty($sname) && !isset($_REQUEST['alpha'])) {
	global $wpdb;
	$key_query = "
			SELECT wposts.*
			FROM $wpdb->posts wposts
			WHERE wposts.post_status = 'publish'
			AND wposts.post_type = 'lawyer_profile'
			AND wposts.post_content LIKE '%".$skey."%'
			ORDER BY wposts.post_title ASC";
	$key_query_results = $wpdb->get_results($key_query, OBJECT);
	echo "<h3>Search by Keyword: '".$skey."'</h3>\r\n";
	echo '<div class="practice-body two-columns"><ul class="lawyer-search">';
	if (!empty($key_query_results)) {
		foreach ($key_query_results as $found_lawyer) { ?>
			<li><a href="<?php echo get_permalink($found_lawyer->ID) ?>" rel="bookmark"><?php echo $found_lawyer->post_title; ?></a></li>
		<?php }
		
	} else {
		echo "<li>No attorneys found.</li>";
	}
	echo "</ul></div>\r\n";
}

if ((!empty($skey) && !empty($sname)) && !isset($_REQUEST['alpha'])) {
	global $wpdb;
	$key_query = "
			SELECT wposts.*
			FROM $wpdb->posts wposts
			WHERE wposts.post_status = 'publish'
			AND wposts.post_type = 'lawyer_profile'
			AND wposts.post_content LIKE '%".$skey."%'
			AND wposts.post_title LIKE '%".$sname."%'			
			ORDER BY wposts.post_title ASC";
	$key_query_results = $wpdb->get_results($key_query, OBJECT);
	echo "<h3>Search by Keyword: '".$skey."' and Name: '".$sname."'</h3>\r\n";
	echo '<div class="practice-body two-columns"><ul class="lawyer-search">';
	if (!empty($key_query_results)) {
		foreach ($key_query_results as $found_lawyer) { ?>
			<li><a href="<?php echo get_permalink($found_lawyer->ID) ?>" rel="bookmark"><?php echo $found_lawyer->post_title; ?></a></li>
		<?php }
		
	} else {
		echo "<li>No attorneys found.</li>";
	}
	echo "</ul></div>\r\n";
}


$list = '';
if (isset($_REQUEST['alpha']) && (!$skey && !$sname)) {
	$alpha = esc_attr($_REQUEST['alpha']);
	
	echo "<h3>".$alpha."</h3>\r\n"; ?>
<div class="practice-body two-columns">
	<ul class="lawyer-search">
	<?php	
	global $wpdb;
	$alpha_query = "
			SELECT wposts.*
			FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta
			WHERE wposts.ID = wpostmeta.post_id
			AND wpostmeta.meta_key = 'wpcf-last-name'
			AND wpostmeta.meta_value LIKE '".$wpdb->escape($alpha)."%'
			AND wposts.post_status = 'publish'
			AND wposts.post_type = 'lawyer_profile'
			ORDER BY wpostmeta.meta_value ASC";
	$alpha_query_results = $wpdb->get_results($alpha_query, OBJECT);
	if (!empty($alpha_query_results)) {
		foreach ($alpha_query_results as $found_lawyer) {
?>
		<li><a href="<?php echo get_permalink($found_lawyer->ID) ?>" rel="bookmark"><?php echo $found_lawyer->post_title; ?></a></li>
			<?php
		}
	} else {
		echo "<li>No attorneys found. (".$alpha.")</li>";
	} ?>
		</ul>                             

<?php } ?>
</div><!-- end two columns -->