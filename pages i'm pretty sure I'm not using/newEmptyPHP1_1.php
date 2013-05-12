 <?php 
                                     if ( has_post_thumbnail()) {
                                       $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
                                       echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" ><div class="post-thumbnail">';
                                       the_post_thumbnail('thumbnail');
                                       echo '</div></a>';
                                     }
                                   ?>
                                    <div class="post-thumbnail">
                                     
                                  <?php   if (class_exists('MultiPostThumbnails')):MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'add-news-image', NULL,  'post-add-news-image-thumbnail');
; endif; ?>