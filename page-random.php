<?php
/*
Template Name: Random Post
*/
?>




<?php 
    query_posts('showposts=1&orderby=rand'); 
    the_post();
?>

<a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>