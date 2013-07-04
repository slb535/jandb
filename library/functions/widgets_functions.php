<?php


  // enables wigitized sidebars
	if ( function_exists('register_sidebar') )

	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array('name'=>'Sidebar',
		'before_widget' => '<div class="widget-area widget-sidebar"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	// Header Widget
	// Location: right after the navigation
	register_sidebar(array('name'=>'Header',
		'before_widget' => '<div class="widget-area widget-header"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	// Footer Widget
	// Location: at the top of the footer, above the copyright
	register_sidebar(array('name'=>'Footer',
		'before_widget' => '<div class="widget-area widget-footer"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	// The Alert Widget
	// Location: displayed on the top of the home page, right after the header, right before the loop, within the content area
	register_sidebar(array('name'=>'Alert',
		'before_widget' => '<div class="widget-area widget-alert"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        // The Newsletter Widget
	// Location: displayed on the Publications Page in the sidebar
	register_sidebar(array('name'=>'Publications',
		'before_widget' => '<div class="widget-area publications"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
                
        register_sidebar(array('name'=>'AdministrativeLaw',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
         register_sidebar(array('name'=>'AppellateLaw',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        
        register_sidebar(array('name'=>'BusinessLitigation',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'CommercialTransactions',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'ComplexLitigation',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'Construction',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'Employment',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'Energy',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'Environmental',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'GeneralNegligence',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'HealthCare',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
                register_sidebar(array('name'=>'Hospitality',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
  
        
        register_sidebar(array('name'=>'Insurance',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'Mediation',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'Municipal',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'ProductLiability',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'ProfessionalLiability',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'Retail',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'ToxicTort',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
        register_sidebar(array('name'=>'Transportation',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
        
  

	
// Check for widgets in widget-ready areas http://wordpress.org/support/topic/190184?replies=7#post-808787
// Thanks to Chaos Kaizer http://blog.kaizeku.com/
function is_sidebar_active( $index = 1){
	$sidebars	= wp_get_sidebars_widgets();
	$key		= (string) 'sidebar-'.$index;
 
	return (isset($sidebars[$key]));
}

// =============================== Contact Widget ======================================

class PracticeSidebar_widget extends WP_Widget {

	function PracticeSidebar_widget () {
		$widget_ops = array('classname' => __CLASS__, 'description' => 'Practice Sidebar' );
		$this->WP_Widget(__CLASS__, 'JB &rarr; Practice Sidebar', $widget_ops);
	}
 
	function widget($args, $instance) {
		global $post, $wp_query;
		extract($args, EXTR_SKIP);		
		$contact = empty($instance['contact']) ? '&nbsp;' : apply_filters('widget_contact', $instance['contact']);
		$email_address = empty($instance['email_address']) ? '&nbsp;' : apply_filters('widget_email_address', $instance['email_address']);
		$contact2 = empty($instance['contact2']) ? '' : apply_filters('widget_contact2', $instance['contact2']);
		$email_address2 = empty($instance['email_address2']) ? '' : apply_filters('widget_email_address2', $instance['email_address2']);

		$practice_link = empty($instance['practice_link']) ? '&nbsp;' : apply_filters('widget_practice_link', $instance['practice_link']);
		$practice = empty($instance['practice']) ? '&nbsp;' : apply_filters('widget_practice', $instance['practice']);
		$alerts_link = empty($instance['alerts_link']) ? '' : apply_filters('widget_alerts_link', $instance['alerts_link']);
		echo $before_widget;
//		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']); 
//		if ( !empty( $title ) ) { echo $before_title . $title . $after_title; }; 
/* NOTE: You need an if (is_category('something')) { here so that it only is shown on those pages and not the entire site */
?>
		<h2>Contact:</h2>
                <li class="sidebar-text contactinfo">
				<a href="mailto:<?php echo $email_address; ?>"><?php echo $contact; ?></a><?php if ($contact2) { ?> <br /><a href="mailto:<?php echo $email_address2; ?>"><?php echo $contact2; ?></a> <?php } ?>
		</li>
		<h2><a href="<?php echo $practice_link; ?>-attorneys"><?php echo $practice; ?> Attorneys</a></h2>  
                
                 <?php 
                 //Links to Representative Cases Pages, only for those groups that have them   also somewhere else for energy and mediation
                 if ((strripos($practice, "energy")===true)  || (strripos($practice, "mediation")===true)|| (strripos($practice, "hospitality")===true)) {
               
                $practice_rep_link = "$practice_link-rep/";  
                echo '<h2 class="repcases '.$practice.'"><a href="'.$practice_rep_link.'"> Representative Cases'.'</a></h2>';
                     
                 }
                 
      if ( $alerts_link ) echo '<h2><a href="' .  $alerts_link . '">Publications &amp; Alerts </h2></a>';  
      
                    $args = array(  
				'post_type' => 'post',
                                'tax_query' => array(
                            array(
                                'taxonomy' => 'practice-area',
                                'field' => 'slug',
				'terms' => $practice
                            )
                                    ),
				'posts_per_page' => 3,
				'orderby'       => 'menu_order',
                                'order' => 'asc'
				);
		
                   
                
            $my_query = new WP_Query($args);
               
	
		if ($my_query->have_posts())  {
			echo '<h2>Practice Group News</h2>';  
			
                 while ($my_query->have_posts())
	{
		$my_query->the_post();  ?>
				<li class="sidebar-text news"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php
		}
              }  
                  //Links to audio pages, only for those groups that have them     
                 if ((strripos($practice, "insurance")!==false)  || (strripos($practice, "business")!==false)) {
                    $practice_more_link = "$practice_link-more/"; 
                    echo '<h2><a href="'. $practice_more_link .'">More About <br />The '. $practice . ' Group</a></h2>';
                  
                 }
                    
		echo $after_widget; // Brings Search box to the bottom of the column - find where this is initialized
		wp_reset_query();	  		
	}
 
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['contact'] = strip_tags($new_instance['contact']);
		$instance['email_address'] = strip_tags($new_instance['email_address']);
		$instance['contact2'] = strip_tags($new_instance['contact2']);
		$instance['email_address2'] = strip_tags($new_instance['email_address2']);
		$instance['practice_link'] = strip_tags($new_instance['practice_link']);
		$instance['practice'] = strip_tags($new_instance['practice']);
		$instance['alerts_link'] = strip_tags($new_instance['alerts_link']);
		return $instance;
	}
 
	function form($instance) {
		$instance = wp_parse_args( (array) $instance, array( 'contact' => '', 'contact2' => '', 'practice_link' => '', 'practice' => '',  'alerts_link' => '', 'email_title' => '', 'email_address' => '', 'email_address2' => '' ) );
		$contact = strip_tags($instance['contact']);
		$email_address = strip_tags($instance['email_address']);
		$contact2 = strip_tags($instance['contact2']);
		$email_address2 = strip_tags($instance['email_address2']);
		$practice_link = strip_tags($instance['practice_link']);
		$practice = strip_tags($instance['practice']);
		$alerts_link = strip_tags($instance['alerts_link']);
?>
		<p><label for="<?php echo $this->get_field_id('contact'); ?>">Contact: <input class="widefat" id="<?php echo $this->get_field_id('contact'); ?>" name="<?php echo $this->get_field_name('contact'); ?>" type="text" value="<?php esc_attr_e($contact); ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id('email_address'); ?>">Email Address: <input class="widefat" id="<?php echo $this->get_field_id('email_address'); ?>" name="<?php echo $this->get_field_name('email_address'); ?>" type="text" value="<?php esc_attr_e($email_address); ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id('contact2'); ?>">Contact: <input class="widefat" id="<?php echo $this->get_field_id('contact2'); ?>" name="<?php echo $this->get_field_name('contact2'); ?>" type="text" value="<?php esc_attr_e($contact2); ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id('email_address2'); ?>">Email Address: <input class="widefat" id="<?php echo $this->get_field_id('email_address2'); ?>" name="<?php echo $this->get_field_name('email_address2'); ?>" type="text" value="<?php esc_attr_e($email_address2); ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id('attorney_title'); ?>">Practice Name: <input class="widefat" id="<?php echo $this->get_field_id('practice'); ?>" name="<?php echo $this->get_field_name('practice'); ?>" type="text" value="<?php esc_attr_e($practice); ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id('practice_link'); ?>">Practice URL (with http://, delete last /): <input class="widefat" id="<?php echo $this->get_field_id('practice_link'); ?>" name="<?php echo $this->get_field_name('practice_link'); ?>" type="text" value="<?php esc_attr_e($practice_link); ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id('alerts_link'); ?>">Link to Alerts: <input class="widefat" id="<?php echo $this->get_field_id('alerts_link'); ?>" name="<?php echo $this->get_field_name('alerts_link'); ?>" type="text" value="<?php echo esc_attr_e($alerts_link); ?>" /></label></p>
<?php
	}
}

register_widget('PracticeSidebar_widget');

?>