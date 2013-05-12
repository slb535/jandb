<?php
/* Template Name: Download */
wp_head(); ?>
<table id="download">
<tr>
<th>Title</th>
<th>Address</th>
<th>Area</th>
<th>Postal Code</th>
<th>City</th>
<th>Manager</th>
<th>Phone No</th>
<th>E-Mail</th>
<th>Website</th>
<th>Category</th>
</tr>
<?php $downloads = new WP_Query('showposts=-1');
while ($downloads->have_posts()): $downloads->the_post();
global $post; ?>
<tr>
<td><?php the_title();?></td>
<td><?php the_permalink();?></td>
<td><?php echo get_post_meta($post->ID,'custom_field_name',true);?></td>
<td><?php $poc = get_the_terms( $post->ID, 'custom_taxonomy_name', '', ', ', '' ); $list = ''; if ($poc) { foreach ($poc as $data) $list .= $data->name.', '; echo $list; } ?></td>
<td><?php $cats = get_the_category(', '); $list = ''; if ($cats) { foreach ($cats as $data) $list .= $data->cat_name.', '; echo $list; } ?></td>
</tr>
<?php
endwhile;
wp_reset_query(); ?>
</table>