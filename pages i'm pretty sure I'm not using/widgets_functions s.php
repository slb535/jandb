<?php


  // enables wigitized sidebars
	if ( function_exists('register_sidebar') )

	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array('name'=>'Sidebar',
		'before_widget' => '<div class="widget-area widget-sidebar"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
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
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        // The Newsletter Widget
	// Location: displayed on the Publications Page in the sidebar
	register_sidebar(array('name'=>'Publications',
		'before_widget' => '<div class="widget-area publications"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
                
        register_sidebar(array('name'=>'AdministrativeLaw',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
         register_sidebar(array('name'=>'AppellateLaw',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        
        register_sidebar(array('name'=>'BusinessLitigation',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'CommercialTransactions',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'ComplexLitigation',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'Construction',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'Employment',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'Energy',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'Environmental',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'GeneralNegligence',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'HealthCare',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'Insurance',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'Mediation',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'Municipal',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'ProductLiability',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'ProfessionalLiability',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'Retail',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'ToxicTort',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
        register_sidebar(array('name'=>'Transportation',
		'before_widget' => '<div class="widget-area practices"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
        
  

	
// Check for widgets in widget-ready areas http://wordpress.org/support/topic/190184?replies=7#post-808787
// Thanks to Chaos Kaizer http://blog.kaizeku.com/
function is_sidebar_active( $index = 1){
	$sidebars	= wp_get_sidebars_widgets();
	$key		= (string) 'sidebar-'.$index;
 
	return (isset($sidebars[$key]));
}



// =============================== Contact Widget ======================================

class PracticeSidebar extends WP_Widget {

	function PracticeSidebar () {
	//Constructor
	
		$widget_ops = array('classname' => 'widget practicesidebar', 'description' => 'Practice Sidebar' );
		$this->WP_Widget('widget_practice', 'JB &rarr; Practice Sidebar', $widget_ops);
	}
 
	function widget($args, $instance) {
	// prints the widget

		extract($args, EXTR_SKIP);
 
		$contact = empty($instance['contact']) ? '&nbsp;' : apply_filters('widget_contact', $instance['contact']);
                $email_address = empty($instance['email_address']) ? '&nbsp;' : apply_filters('widget_email_address', $instance['email_address']);
                $contact2 = empty($instance['contact2']) ? '' : apply_filters('widget_contact2', $instance['contact2']);
                $email_address2 = empty($instance['email_address2']) ? '' : apply_filters('widget_email_address2', $instance['email_address2']);

		$practice_link = empty($instance['practice_link']) ? '&nbsp;' : apply_filters('widget_practice_link', $instance['practice_link']);
		$practice = empty($instance['practice']) ? '&nbsp;' : apply_filters('widget_practice', $instance['practice']);
                
                
                
	        $alerts_link = empty($instance['alerts_link']) ? '' : apply_filters('widget_alerts_link', $instance['alerts_link']);
                
                
                             ?>           
                   
			  
			
			  
            <h3>Contact:</h3>
                <li class="sidebar-text"><div class="contactinfo"> <a href="mailto:<?php echo $email_address; ?>"><?php echo $contact; ?></a>
                        <?php if ($contact2) { ?> <br /><a href="mailto:<?php echo $email_address2; ?>"><?php echo $contact2; ?></a> <?php } ?></div>
                 </li>
             
            <h3> <a href="<?php echo $practice_link; ?>"><?php echo $practice; ?> Attorneys</a></h3>

                                
             <?php if ( $alerts_link ) echo '<h3><a href="' .  $alerts_link . '">Publications &amp; Alerts </h3>'; ?>
                
                <?php     $args = array(  
                                            'category_name' => 'news', 
                                            'practice-area' => $practice,
                                            'posts_per_page' => 3,
                                            'order'    => 'ASC'
                                            );

				query_posts ($args);
                        
                                 if ( have_posts() )  echo '<h3>Practice Group News</h3>';  

                                
                       		if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                                
						 <li class="sidebar-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
                                <?php                    
				 endwhile; 
                                 
                                 wp_reset_query();
                                 
                                
                                $practice_area_link = $practice_link."-rep/";  
                                      if (!is_wp_error($practice_area_link)) {
                                            echo '<h3><a href="'.$practice_area_link.'">'.'Representative Cases'.'</a></h3>';
                                                               
                                      }
                                      
                                                               
                                                               ?>
                                                
                                 
		<?php
			  		
	}
 
	function update($new_instance, $old_instance) {
	//save the widget
	
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
	//widgetform in backend

		$instance = wp_parse_args( (array) $instance, array( 'contact' => '', 'contact2' => '', 'practice_link' => '', 'practice' => '',  'alerts_link' => '', 'email_title' => '', 'email_address' => '', 'email_address2' => '' ) );
		$contact = strip_tags($instance['contact']);
                $email_address = strip_tags($instance['email_address']);
                $contact2 = strip_tags($instance['contact2']);
                $email_address2 = strip_tags($instance['email_address2']);
		$practice_link = strip_tags($instance['practice_link']);
		$practice = strip_tags($instance['practice']);
		$alerts_link = strip_tags($instance['alerts_link']);
?>
			<p><label for="<?php echo $this->get_field_id('contact'); ?>">Contact: <input class="widefat" id="<?php echo $this->get_field_id('contact'); ?>" name="<?php echo $this->get_field_name('contact'); ?>" type="text" value="<?php echo attribute_escape($contact); ?>" /></label></p>
						<p><label for="<?php echo $this->get_field_id('email_address'); ?>">Email Address: <input class="widefat" id="<?php echo $this->get_field_id('email_address'); ?>" name="<?php echo $this->get_field_name('email_address'); ?>" type="text" value="<?php echo attribute_escape($email_address); ?>" /></label></p>
                        <p><label for="<?php echo $this->get_field_id('contact2'); ?>">Contact: <input class="widefat" id="<?php echo $this->get_field_id('contact2'); ?>" name="<?php echo $this->get_field_name('contact2'); ?>" type="text" value="<?php echo attribute_escape($contact2); ?>" /></label></p>
						<p><label for="<?php echo $this->get_field_id('email_address2'); ?>">Email Address: <input class="widefat" id="<?php echo $this->get_field_id('email_address2'); ?>" name="<?php echo $this->get_field_name('email_address2'); ?>" type="text" value="<?php echo attribute_escape($email_address2); ?>" /></label></p>
                      
                                                
                                                
                                                <p><label for="<?php echo $this->get_field_id('attorney_title'); ?>">Practice Name: <input class="widefat" id="<?php echo $this->get_field_id('practice'); ?>" name="<?php echo $this->get_field_name('practice'); ?>" type="text" value="<?php echo attribute_escape($practice); ?>" /></label></p>
                        <p><label for="<?php echo $this->get_field_id('practice_link'); ?>">Main Practice Page Link: (include http://) <input class="widefat" id="<?php echo $this->get_field_id('practice_link'); ?>" name="<?php echo $this->get_field_name('practice_link'); ?>" type="text" value="<?php echo attribute_escape($practice_link); ?>" /></label></p>
                        
                        
                        <p><label for="<?php echo $this->get_field_id('alerts_link'); ?>">Link to Alerts: <input class="widefat" id="<?php echo $this->get_field_id('alerts_link'); ?>" name="<?php echo $this->get_field_name('alerts_link'); ?>" type="text" value="<?php echo attribute_escape($alerts_link); ?>" /></label></p>
<?php
	}
}
register_widget('PracticeSidebar');

?>