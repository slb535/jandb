<?php

// URL logo link
function wpc_url_login() {
    return "http://johnsonandbell.com/"; // your URL here
}

add_filter('login_headerurl', 'wpc_url_login');

// Custom WordPress Login Logo
function login_css() {
    wp_enqueue_style('login_css', get_template_directory_uri() . '/css/login.css');
}

add_action('login_head', 'login_css');

// Custom Corner Logo
function custom_logo() {
    echo '<style type="text/css">
    #wp-admin-bar-wp-logo > .ab-item .ab-icon { background-image: url(' . get_bloginfo('template_directory') . '/images/JB_rev.png) !important; background-position: 0; }

    </style>';
}

add_action('admin_head', 'custom_logo');

function remove_menu_items() {
    global $menu;
    $restricted = array(__('Links'), __('Comments'), __('Feedbacks'));
    end($menu);
    while (prev($menu)) {
        $value = explode(' ', $menu[key($menu)][0]);
        if (in_array($value[0] != NULL ? $value[0] : "", $restricted)) {
            unset($menu[key($menu)]);
        }
    }
}

add_action('admin_menu', 'remove_menu_items');

function remove_submenus() {
    global $submenu;
    unset($submenu['themes.php'][5]); // Removes 'Themes'.
    unset($submenu['options-general.php'][15]); // Removes 'Writing'.
    unset($submenu['options-general.php'][25]); // Removes 'Discussion'.
    unset($submenu['options-permalinks.php']); // Removes 'Permalinks'.

    unset($submenu['edit.php'][16]); // Removes 'Tags'.
}

add_action('admin_menu', 'remove_submenus');

function remove_editor_menu() {
    remove_action('admin_menu', '_add_themes_utility_last', 101);
}

add_action('_admin_menu', 'remove_editor_menu', 1);

//Remove Columns from Page and Post Pages

function custom_post_columns($defaults) {
    unset($defaults['comments']);
    unset($defaults['type']);
    unset($defaults['author']);
    return $defaults;
}

add_filter('manage_posts_columns', 'custom_post_columns');

function custom_pages_columns($defaults) {
    unset($defaults['comments']);
    unset($defaults['type']);
    unset($defaults['author']);
    return $defaults;
}

add_filter('manage_pages_columns', 'custom_pages_columns');

// Create the function to use in the action hook

function example_remove_dashboard_widgets() {
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
}

add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets');

// Add a widget in WordPress Dashboard
function wpc_dashboard_widget_function() {
// Entering the text between the quotes
    echo "<table width=400>
        <tr><td><strong>Content Type</strong></td><td><strong>Where to Find/Enter</strong></td></tr>
        <tr><td colspan=2 height=5><div style=\"border-top: double #D21532 3px\">&nbsp;</div>
       <tr><td><strong>Lawyer Profiles<br />Pop Up Bio (etc) Pages</strong></td><td>Lawyer Profiles<br />Full Pages</td></tr>
        <tr><td><strong>News Articles</strong></td><td>Posts</td></tr>
       <tr><td><strong>Awards</strong></td><td>Posts</td></tr>
        <tr><td><strong>Practice Pages main copy</strong></td><td>Pages</td></tr>
        <tr><td><strong>Practice Pages Sidebar copy</strong></td><td>Widgets</td></tr>

	</table>";
}

function wpc_add_dashboard_widgets() {
    wp_add_dashboard_widget('wp_dashboard_widget', 'Quick Reference', 'wpc_dashboard_widget_function');
}

add_action('wp_dashboard_setup', 'wpc_add_dashboard_widgets');


add_editor_style('css/editor-style.css');


//END ADMIN CUSTOMIZATION //
// Theme variables

$functions_path = TEMPLATEPATH . '/library/functions/';

// Widgets
require_once ($functions_path . 'widgets_functions.php');


// post thumbnail support
add_theme_support('post-thumbnails');

// adds the post thumbnail to the RSS feed
function cwc_rss_post_thumbnail($content) {
    global $post;
    if (has_post_thumbnail($post->ID)) {
        $content = '<p>' . get_the_post_thumbnail($post->ID) .
                '</p>' . get_the_content();
    }
    return $content;
}

add_filter('the_excerpt_rss', 'cwc_rss_post_thumbnail');
add_filter('the_content_feed', 'cwc_rss_post_thumbnail');

// custom menu support
add_theme_support('menus');
if (function_exists('register_nav_menus')) {
    register_nav_menus(
            array(
                'header-menu' => 'Header Menu',
                'sidebar-menu' => 'Sidebar Menu',
                'footer-menu' => 'Footer Menu',
                'logged-in-menu' => 'Logged In Menu'
            )
    );
}

register_sidebar(array(
    'name' => __('News Sidebar'),
    'id' => 'news-sidebar',
    'description' => __('Widgets in this area will be shown on the news page.'),
    'before_title' => '<h2>',
    'after_title' => '</h2>'
));


// removes detailed login error information for security
add_filter('login_errors', create_function('$a', "return null;"));

// removes the WordPress version from your header for security
function wb_remove_version() {
    return '<!--built on the Whiteboard Framework-->';
}

add_filter('the_generator', 'wb_remove_version');


// post thumbnail support
if (function_exists('add_image_size'))
    add_theme_support('post-thumbnails');
if (function_exists('add_image_size')) {
    add_image_size('post-thumb', 396, 225);
    add_image_size('cat-thumb', 396, 225);
    add_image_size('mobile-thumb', 158, 119, true);
}

// Removes Trackbacks from the comment cout
add_filter('get_comments_number', 'comment_count', 0);

function comment_count($count) {
    if (!is_admin()) {
        global $id;
        $comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
        return count($comments_by_type['comment']);
    } else {
        return $count;
    }
}

// invite rss subscribers to comment
function rss_comment_footer($content) {
    if (is_feed()) {
        if (comments_open()) {
            $content .= 'Comments are open! <a href="' . get_permalink() . '">Add yours!</a>';
        }
    }
    return $content;
}

// custom excerpt ellipses for 2.9+
function custom_excerpt_more($more) {
    return 'Read More &raquo;';
}

add_filter('excerpt_more', 'custom_excerpt_more');

// no more jumping for read more link
function no_more_jumping($post) {
    return '<a href="' . get_permalink($post->ID) . '" class="read-more">' . '&nbsp; Continue Reading &raquo;' . '</a>';
}

add_filter('excerpt_more', 'no_more_jumping');

// category id in body and post class
function category_id_class($classes) {
    global $post;
    foreach ((get_the_category($post->ID)) as $category)
        $classes [] = 'cat-' . $category->cat_ID . '-id';
    return $classes;
}

add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

// adds a class to the post if there is a thumbnail
function has_thumb_class($classes) {
    global $post;
    if (has_post_thumbnail($post->ID)) {
        $classes[] = 'has_thumb';
    }
    return $classes;
}

add_filter('post_class', 'has_thumb_class');




// Add the Custom Post Type
//require_once('inc/custom-posts.php');
//Get rid of extra p tags
//  remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

function filter_ptags_on_images($content) {
// do a regular expression replace...
// find all p tags that have just
// <p>maybe some white space<img all stuff up to /> then maybe whitespace </p>
// replace it with just the image tag...
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
// now pass that through and do the same for iframes...
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}

// we want it to be run after the autop stuff... 10 is default.
add_filter('the_content', 'filter_ptags_on_images');

//Alphabetical Listing
function get_alphabet_nav($sef = '') {

    $url_array = explode('/', $_SERVER['REQUEST_URI']);
    $folder = $url_array[sizeof($url_array) - 2];

    $base = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    $sef = $sef . '/';

    $path = $_SERVER['REQUEST_URI'];

    for ($i = 65; $i <= 90; $i++) {
        $x = chr($i);
        $nav .= '<a href="' . $base . $sef . strtolower($x) . '/">' . $x . '</a>' . "\n";
    }
    return $nav;
}

//Lawyer Profile Search Form
function custom_search_form($form) {
    $form = '<form method="get" id="quick-search" action="/" >';
    $form .= '<div><label for="s">Search this site for:</label>';
    $form .= '<input type="text" value="' . get_search_query() . '" name="s" id="s" />';
    $form .= '<input type="submit" value="Search" />';
    $form .= '</div>';
    $form .= '</form>';
    return $form;
}

add_filter('get_search_form', 'custom_search_form');

// Fix for WP 3.6 update searchform.php problem

function search_form_no_filters() {
    // look for local searchform template
    $search_form_template = locate_template('searchform.php');
    if ('' !== $search_form_template) {
        // searchform.php exists, remove all filters
        remove_all_filters('get_search_form');
    }
}

add_action('pre_get_search_form', 'search_form_no_filters');

// Tests for a page and its children
function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
    global $post;         // load details about this page
    if (is_page() && ($post->post_parent == $pid || is_page($pid)))
        return true;   // we're at the page or at a sub page
    else
        return false;  // we're elsewhere
}

;


if (class_exists('MultiPostThumbnails')) {
    $types = array('lawyer_profile', 'page', 'post');
    foreach ($types as $type) {
        new MultiPostThumbnails(array(
            'label' => 'Secondary Image',
            'id' => 'secondary-image',
            'post_type' => $type
                )
        );
    }
}

add_image_size('post-secondary-image-thumbnail', 90, 100);
add_image_size('add-news-image-thumbnail', 200, 200, true); // Used for extra news image
// get taxonomies terms links

function custom_taxonomies_terms_links() {
    global $post, $post_id;
// get post by post id
    $post = &get_post($post->ID);
// get post type by post
    $post_type = $post->post_type;
// get post type taxonomies
    $taxonomies = get_object_taxonomies($post_type);
    foreach ($taxonomies as $taxonomy) {
// get the terms related to post
        $terms = get_the_terms($post->ID, $taxonomy);
        if (!empty($terms)) {
            $out = array();
            foreach ($terms as $term)
                $out[] = '<a href="' . get_term_link($term->slug, $taxonomy) . '">' . $term->name . '</a>';
            $return = join(', ', $out);
        }
    }
    return $return;
}

//Page Slug Post Class
function add_slug_post_class($classes) {
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

add_filter('post_class', 'add_slug_post_class');

add_filter('body_class', 'easel_body_class');

function easel_body_class($classes = '') {
    global $current_user, $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone, $post, $wp_query, $easel_is_signup;

    get_currentuserinfo();

    if (!empty($user_ID)) {
        $user_login = addslashes($current_user->user_login);
        if (!empty($user_login))
            $classes[] = 'user-' . $user_login;
    } else {
        $classes[] = 'user-guest';
    }

    if ($is_lynx)
        $classes[] = 'lynx';
    elseif ($is_gecko)
        $classes[] = 'gecko';
    elseif ($is_opera)
        $classes[] = 'opera';
    elseif ($is_NS4)
        $classes[] = 'ns4';
    elseif ($is_safari)
        $classes[] = 'safari';
    elseif ($is_chrome)
        $classes[] = 'chrome';
    elseif ($is_IE)
        $classes[] = 'ie';
    else
        $classes[] = 'unknown';
    if ($is_iphone)
        $classes[] = 'iphone';


// Hijacked from the hybrid theme, http://themehybrid.com/
    if (is_single()) {
        foreach ((array) get_the_category($wp_query->post->ID) as $cat) :
            $classes[] = 'single-category-' . sanitize_html_class($cat->slug, $cat->term_id);
        endforeach;
        $classes[] = 'single-author-' . get_the_author_meta('user_nicename', $wp_query->post->post_author);
    }

    if (is_page()) {
        if (isset($wp_query->query_vars['pagename']))
            $classes[] = 'page-' . $wp_query->query_vars['pagename'];
    }

    if (is_single() && is_sticky($post->ID)) {
        $classes[] = 'sticky-post';
    }

// NOT hijacked from anything, doi! people should do this.
    $timestamp = current_time('timestamp');
    $rightnow = (int) date('Gi', $timestamp);
    $ampm = date('a', $timestamp);
    $classes[] = $ampm;
//	$classes[] = 'time-'.$rightnow;
    if ($rightnow > 559 && (int) $rightnow < 1800)
        $classes[] = 'day';
    if ($rightnow < 600 || (int) $rightnow > 1759)
        $classes[] = 'night';

    if ($rightnow > 2329 || $rightnow < 30)
        $classes[] = 'midnight';
    if ($rightnow > 459 && $rightnow < 1130)
        $classes[] = 'morning';
    if ($rightnow > 1129 && $rightnow < 1230)
        $classes[] = 'noon';
    if ($rightnow > 1759 && $rightnow < 2330)
        $classes[] = 'evening';

    $classes[] = strtolower(date('D', $timestamp));

    if (is_attachment()) {
        $classes[] = 'attachment attachment-' . $wp_query->post->ID;
        $mime_type = explode('/', get_post_mime_type());
        foreach ($mime_type as $type) :
            $classes[] = 'attachment-' . $type;
        endforeach;
    }
    return $classes;
}

function get_ID_by_page_name($page_name) {
    global $wpdb;
    $page_name_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '" . $page_name . "' AND post_type = 'page'");
    return $page_name_id;
}

//Make links clickable in posts
add_filter('the_content', 'make_clickable', 12);

//Remove smartquotes from copy and pasted stuff

remove_filter('the_content', 'wptexturize');

remove_filter('comment_text', 'wptexturize');

remove_filter('single_post_title', 'wptexturize');

remove_filter('the_title', 'wptexturize');

remove_filter('wp_title', 'wptexturize');



// TinyMCE: First line toolbar customizations
if (!function_exists('base_extended_editor_mce_buttons')) {

    function base_extended_editor_mce_buttons($buttons) {
// The settings are returned in this array. Customize to suite your needs.
        return array(
            'formatselect', 'bold', 'italic', 'sub', 'sup', 'bullist', 'numlist', 'link', 'unlink', 'blockquote', 'outdent', 'indent', 'charmap', 'removeformat', 'spellchecker', 'fullscreen', 'wp_more', 'wp_help'
        );
        /* WordPress Default
          return array(
          'bold', 'italic', 'strikethrough', 'separator',
          'bullist', 'numlist', 'blockquote', 'separator',
          'justifyleft', 'justifycenter', 'justifyright', 'separator',
          'link', 'unlink', 'wp_more', 'separator',
          'spellchecker', 'fullscreen', 'wp_adv'
          ); */
    }

    add_filter("mce_buttons", "base_extended_editor_mce_buttons", 0);
}

// TinyMCE: Second line toolbar customizations
if (!function_exists('base_extended_editor_mce_buttons_2')) {

    function base_extended_editor_mce_buttons_2($buttons) {
// The settings are returned in this array. Customize to suite your needs. An empty array is used here because I remove the second row of icons.
        return array();
        /* WordPress Default
          return array(
          'formatselect', 'underline', 'justifyfull', 'forecolor', 'separator',
          'pastetext', 'pasteword', 'removeformat', 'separator',
          'media', 'charmap', 'separator',
          'outdent', 'indent', 'separator',
          'undo', 'redo', 'wp_help'
          ); */
    }

    add_filter("mce_buttons_2", "base_extended_editor_mce_buttons_2", 0);
}

// Customize the format dropdown items
if (!function_exists('base_custom_mce_format')) {

    function base_custom_mce_format($init) {
// Add block format elements you want to show in dropdown
        $init['theme_advanced_blockformats'] = 'p,h2,h3,h4,h5,h6,pre';
// Add elements not included in standard tinyMCE dropdown p,h1,h2,h3,h4,h5,h6
//$init['extended_valid_elements'] = 'code[*]';
        return $init;
    }

    add_filter('tiny_mce_before_init', 'base_custom_mce_format');
}

/*
 * Gets the excerpt of a specific post ID or object
 * @param - $post - object/int - the ID or object of the post to get the excerpt of
 * @param - $length - int - the length of the excerpt in words
 * @param - $tags - string - the allowed HTML tags. These will not be stripped out
 * @param - $extra - string - text to append to the end of the excerpt
 */

function pippin_excerpt_by_id($post, $length = 10, $tags = '<a><em><strong><p>', $extra = ' . . .') {

    if (is_int($post)) {
// get the post object of the passed ID
        $post = get_post($post);
    } elseif (!is_object($post)) {
        return false;
    }

    if (has_excerpt($post->ID)) {
        $the_excerpt = $post->post_excerpt;
        return apply_filters('the_content', $the_excerpt);
    } else {
        $the_excerpt = $post->post_content;
    }

    $the_excerpt = strip_shortcodes(strip_tags($the_excerpt), $tags);
    $the_excerpt = preg_split('/\b/', $the_excerpt, $length * 2 + 1);
    $excerpt_waste = array_pop($the_excerpt);
    $the_excerpt = implode($the_excerpt);
    $the_excerpt .= $extra;

    return apply_filters('the_content', $the_excerpt);
}

//Pagination

function numeric_posts_nav() {

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /** 	Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** 	Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (( $paged + 2 ) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="pagination"><ul>' . "\n";

    /** 	Previous Post Link */
    if (get_previous_posts_link())
        printf('<li>%s</li>' . "\n", get_previous_posts_link());

    /** 	Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }

    /** 	Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** 	Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** 	Next Post Link */
    if (get_next_posts_link())
        printf('<li>%s</li>' . "\n", get_next_posts_link());

    echo '</ul></div>' . "\n";
}

// custom taxonomy permalinks
add_filter('post_link', 'practice_area_permalink', 10, 3);
add_filter('post_type_link', 'practice_area_permalink', 10, 3);

function practice_area_permalink($permalink, $post_id, $leavename) {
    if (strpos($permalink, '%practice-area%') === FALSE)
        return $permalink;

// Get post
    $post = get_post($post_id);
    if (!$post)
        return $permalink;

// Get taxonomy terms
    $terms = wp_get_object_terms($post->ID, 'practice-area');
    if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0]))
        $taxonomy_slug = $terms[0]->slug;
    else
        $taxonomy_slug = 'other';

    return str_replace('%practice-area%', $taxonomy_slug, $permalink);
}

// get rid of dimensions in images
add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);

function remove_width_attribute($html) {
    $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
    return $html;
}

//prepare phone numbers for skype callto
function clean($string) {
    $string = str_replace("-", "", $string); // Replaces all spaces with hyphens.
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
?>