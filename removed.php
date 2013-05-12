from header:

<?php if ( ! is_home() ) { ?>
        <div id="main"><!-- this encompasses the entire Web site -->
    <?php } else {?>
       <div id="home">
<?php } ?>

             <?php $practice_areas = wp_list_categories( 
                                                    array( 'taxonomy' => 'practice-area', 'orderby' => 'name', 'show_count' => 0, 'pad_counts' => 0, 'hierarchical' => 1, 'echo' => 0, 'title_li' => '' ) );  
                                            //// Make sure there are terms with articles 
                                            if ( $practice_areas ) echo '<ul>' . $practice_areas . '</ul>';
                                            ?>
                      
           
           
           From functions:
           
        

function Practices () {
  return  $practice_areas = wp_list_categories(
           array( 'show_option_all'    => '', 'taxonomy' => 'practice-area', 'orderby' => 'name', 'pad_counts' => 0, 'hierarchical' => 1, 'echo' => 0, 'title_li' => '', 'class' => 'test', 'hide_empty' => 'false' ) );  
           //// Make sure there are terms with articles 
    echo '<ul>' . $practice_areas . '</ul>';
      }                                        
  

add_shortcode('practices', 'Practices');