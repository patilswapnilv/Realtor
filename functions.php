<?php 

//File Imports

require_once dirname( __FILE__ ) . '/inc/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php';
require_once dirname( __FILE__ ) . '/inc/breadcrumbs.php';
require_once dirname( __FILE__ ) . '/inc/Bootstrap-wordpress-pagination-master/wp_bootstrap_pagination.php';
//TGM Plugin Activation
require_once dirname( __FILE__ ) . '/inc/tgm-plugin-activation/class-tgm-plugin-activation.php';


//Translation text domain

load_theme_textdomain( 'realtor', get_template_directory_uri().'/languages' );

//Post Thumbnails Support

add_theme_support( 'post-thumbnails' ); 


//Custom Image Sizes

add_image_size( 'realtor_blog_thumbnail', 648, 409,true );
add_image_size( 'realtor_single_blog_thumbnail', 773, 430,true );
add_image_size( 'realtor_related_posts_thumbnail', 372, 247,true );
add_image_size( 'realtor_property_single', 773, 374,true );
add_image_size( 'realtor_attachments', 800 );

//TGM Plugin Activation
add_action( 'tgmpa_register', 'realtor_register_required_plugins' );

function realtor_register_required_plugins() {
	
	$plugins = array(

		array(
			'name'      => 'Meta Box',
			'slug'      => 'meta-box',
			'required'  => true,
		),

		
	$config = array(
		'id'           => 'realtor',             // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	));

	tgmpa( $plugins, $config );
}


//For Loading Theme Styles

if ( ! function_exists( 'realtor_enqueue_theme_styles' ) ) {
	
	function realtor_enqueue_theme_styles() {
		if ( ! is_admin() ) {

			$protocol = is_ssl() ? 'https' : 'http';

			//Google Fonts
			wp_enqueue_style('google-fonts',"$protocol://fonts.googleapis.com/css?family=Lato:300,400,700 |Raleway:100,100i,300,300i,400,400i,500,500i,600,700,700i,900'");

			//Font Awesome
			wp_enqueue_style('font-awesome',"$protocol://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css");

			//Style 2
			//wp_enqueue_style( 'home-variation-1', get_template_directory_uri().'/css/style2.css');

			//Themify Icons
			wp_enqueue_style( 'themify-icons', get_template_directory_uri().'/css/themify-icons.css');

			//Elegant Icons
			wp_enqueue_style( 'elegant-icons', get_template_directory_uri().'/css/elegant-icons.min.css');

			//Bootstrap
			wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');

			//Bootstrap Theme
			wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri().'/css/bootstrap-theme.min.css');

			//Bootstrap Select
			wp_enqueue_style( 'bootstrap-select', get_template_directory_uri().'/css/bootstrap-select.min.css');

			//Colorbox
			wp_enqueue_style( 'colorbox', get_template_directory_uri().'/css/colorbox.css');

			//Animate
			wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css');

			//Owl Carousel
			wp_enqueue_style( 'out-carousel', get_template_directory_uri().'/css/owl.carousel.css');

			//Owl Carousel Theme
			wp_enqueue_style( 'out-carousel-theme', get_template_directory_uri().'/css/owl.theme.css');

			//C3
			wp_enqueue_style( 'c3', get_template_directory_uri().'/css/c3.css');

			//General Style
			wp_enqueue_style( 'general-style', get_template_directory_uri().'/css/style.css');






		}

	}
	add_action( 'wp_enqueue_scripts', 'realtor_enqueue_theme_styles' );
}

// //Filtering the enqued less style sheet with stylesheet/less
// function poporealator_stylesheet_less( $tag ) {
//     return preg_replace( "/='stylesheet' id='Color-LESS-css'/", "='stylesheet/less' id='Color-LESS-css'", $tag );
// }
// add_filter( 'style_loader_tag', 'make_stylesheet_less' );

//For Loading Theme Scripts

if ( ! function_exists( 'realtor_enqueue_theme_scripts' ) ) {
	
	function realtor_enqueue_theme_scripts() {
		if ( ! is_admin() ) {

			$protocol = is_ssl() ? 'https' : 'http';

			//jQuery
			wp_enqueue_script('jquery');

			// //Custom jQuery
			// wp_enqueue_script( 'custom-jquery', get_template_directory_uri().'/js/jquery.min.js'); 

			//Bootstrap
			wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.min.js'); 

			//Modernizr
			wp_enqueue_script( 'modernizr', get_template_directory_uri().'/js/modernizr.js'); 

			//Animate wow
			wp_enqueue_script( 'wow', get_template_directory_uri().'/js/wow.min.js'); 

			//jQuery Easing
			wp_enqueue_script( 'jquery-Easing', get_template_directory_uri().'/js/jquery.easing.min.js'); 

			//DD Smooth Menu
			wp_enqueue_script( 'dd-smooth-menu', get_template_directory_uri().'/js/ddsmoothmenu.js');

			//jQuery Scroll To
			wp_enqueue_script( 'jquery-scroll-to', get_template_directory_uri().'/js/jquery.scrollTo-1.4.2-min.js'); 

			//jQuery Parallax
			//wp_enqueue_script( 'jquery-parallax', get_template_directory_uri().'/js/jquery.parallax.js'); 

			//jQuery Parallax 2
			//wp_enqueue_script( 'jquery-parallax-2', get_template_directory_uri().'/js/jquery.parallax-1.1.3.js'); 

			//Owl Carousel
			wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/js/owl.carousel.js'); 

			//Bootstrap Select
			wp_enqueue_script( 'bootstrap-select', get_template_directory_uri().'/js/bootstrap-select.min.js'); 

			//Custom
			wp_enqueue_script( 'custom', get_template_directory_uri().'/js/script.js'); 
			


		}
	}
	add_action( 'wp_enqueue_scripts', 'realtor_enqueue_theme_scripts' );
}

//Register Main Menu

function realtor_register_main_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'realtor_register_main_menu' );

//Comments Template
function realtor_comments($comment, $args, $depth)
    {
        $GLOBALS['comment'] = $comment;
        switch ($comment->comment_type) :
            case 'pingback' :
            case 'trackback' :
                ?>
                <li class="pingback">
                    <p><?php _e('Pingback:', 'realtor'); ?> <?php comment_author_link(); ?><?php edit_comment_link(__('(Edit)', 'realtor'), ' '); ?></p>
                </li>
                <?php
                break;
            default :
                ?>
                <li <?php comment_class("media"); ?> id="li-comment-<?php comment_ID(); ?>">
                	<div class="media-left"> <a href="<?php echo comment_author_url(); ?>"> <?php echo get_avatar($comment, 64); ?> </a> </div>
	                  <div class="media-body">
	                  	<div class="media-outer">
	                    <p><?php comment_text(); ?></p>
	                    <div class="comment-info"><span><?php printf(__('Posted By: <a href="'.comment_author_url().'">%s</a>', 'realtor'), sprintf('<cite class="fn">%s</cite>', get_comment_author_link())); ?></span>    |    <span><?php printf(__('%1$s', 'realtor'), get_comment_date()); ?></span>    |   <span> <?php comment_reply_link(array_merge(array('after' => '', 'reply_text' => __('Reply<i class="ti-arrow-top-right"></i>', 'realtor')), array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></span> </div>
	                    </div>
	                                        
	                  </div>
                    <!-- end of comment -->
                <?php
                break;
        endswitch;
    }

function realtor_properties_post_type()
{
	$labels=array(
		'name'					=>	_x('Properties', 'Post Type General Name', 'realtor'),
		'singular name'			=>	_x('Property', 'Post Type Singular Name' , 'realtor'),
		'menu_name'				=>	__('Properties', 'realtor'),
		'all_items'				=>	__('All Properties', 'realtor'),
		'view_item'				=> 	__('View Property', 'realtor'),
		'add_new_item'			=>	__('Add New Property', 'realtor'),
		'add_new'				=>	__('Add New', 'realtor'),
		'edit_item'				=>	__('Edit Property', 'realtor'),
		'update_item'			=> 	__('Update Property', 'realtor'),
		'search_item'			=>	__('Search Property', 'realtor'),
		'not_found'				=>	__('Not Found' , 'realtor'),
		'not_found_in_trash'	=>	__('Not Found In Trash', 'realtor'),
		'featured_image'		=>	__('Property Featured Image', 'realtor'),
		'set_featured_image'	=>	__('Set Featured image', 'realtor')


		);

	$args=array(

		'label'					=>	__('property', 'realtor'),
		'description'			=>	__('Properties', 'realtor'),
		'labels'				=>	$labels,
		'supports'				=>	array('title', 'editor','thumbnail'),
		'hierarchical'			=>	false,
		'public'				=> 	true,
		'show_ui'				=>	true,
		'show_in_menu'			=>	true,
		'show_in_nav_menus'		=> 	true,
		'show_in_admin_bar'		=>	true,
		'menu_position'			=>	7,
		'can_export'			=>	true,
		'has_archive'			=>	false,
		'exclude_from_search'	=>	false,
		'publicly_queryable'	=>	true,
		'menu_icon'				=>	'dashicons-admin-home',
		



		);

	register_post_type( 'property', $args );

}
add_action( 'init', 'realtor_properties_post_type', 0 );

function realtor_property_type_taxonomy()
{
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Property Types', 'taxonomy general name', 'realtor' ),
		'singular_name'              => _x( 'Property Type', 'taxonomy singular name', 'realtor' ),
		'search_items'               => __( 'Search Property Types', 'realtor' ),
		'popular_items'              => __( 'Popular Property Types', 'realtor' ),
		'all_items'                  => __( 'All Property Types', 'realtor' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Property Type', 'realtor' ),
		'update_item'                => __( 'Update Property Type', 'realtor' ),
		'add_new_item'               => __( 'Add New Property Type', 'realtor' ),
		'new_item_name'              => __( 'New Property Type', 'realtor' ),
		'separate_items_with_commas' => __( 'Separate Property Types with commas', 'realtor' ),
		'add_or_remove_items'        => __( 'Add or remove property types', 'realtor' ),
		'choose_from_most_used'      => __( 'Choose from the most used property types' ),
		'not_found'                  => __( 'No menu property types found.' ),
		'menu_name'                  => __( 'Property Types' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => __('property-type','realtor') ),
	);

	register_taxonomy( 'property_types', 'property', $args );
}
add_action( 'init', 'realtor_property_type_taxonomy');

function realtor_property_status_taxonomy()
{
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Property Statuses', 'taxonomy general name', 'realtor' ),
		'singular_name'              => _x( 'Property Status', 'taxonomy singular name', 'realtor' ),
		'search_items'               => __( 'Search Property Statuses', 'realtor' ),
		'popular_items'              => __( 'Popular Property Statuses', 'realtor' ),
		'all_items'                  => __( 'All Property Statuses', 'realtor' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Property Status', 'realtor' ),
		'update_item'                => __( 'Update Property Status', 'realtor' ),
		'add_new_item'               => __( 'Add New Property Status', 'realtor' ),
		'new_item_name'              => __( 'New Property Status', 'realtor' ),
		'separate_items_with_commas' => __( 'Separate Property Statuses with commas', 'realtor' ),
		'add_or_remove_items'        => __( 'Add or remove property statuses', 'realtor' ),
		'choose_from_most_used'      => __( 'Choose from the most used property statuses' ),
		'not_found'                  => __( 'No menu property statuses found.' ),
		'menu_name'                  => __( 'Property Statuses' ),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => __('property-status','realtor') ),
	);

	register_taxonomy( 'property_statuses', 'property', $args );
}
add_action( 'init', 'realtor_property_status_taxonomy');

//Meta Boxes

add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
function your_prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Property Details', 'realtor' ),
        'post_types' => 'property',
        'fields'     => array(
            array(
                'id'      => 'features',
                'name'    => __( 'Features', 'realtor' ),
                'clone'	  =>	'true',
                'type'    => 'text_list',
                'options' => array(
                    'Feature Name' => __( '', 'realtor' ),
                ),
            ),
            array(
                'id'      => 'address',
                'name'    => __( 'Address', 'realtor' ),
                'type'    => 'text',
            ),
            array(
                'id'      => 'address-map',
                'name'    => __( 'Location on Map', 'realtor' ),
                'type'    => 'map',
                'address_field' => 'address',
                'api_key'       => 'AIzaSyBQs6Z-1uzgEy7UFKrNjOK8eCCKHiTSHAs'
            ),
            array(
                'id'   => 'attachments',
                'name' => __( 'Floor Plans & Other Attachments', 'realtor' ),
                'type' => 'image_upload',
            ),
            array(
                'id'   => 'beds',
                'name' => __( 'No. of Beds', 'realtor' ),
                'type' => 'number',
            ),
            array(
                'id'   => 'baths',
                'name' => __( 'No. of Baths', 'realtor' ),
                'type' => 'number',
            ),
            array(
                'id'   => 'area',
                'name' => __( 'Area (Sq Feet)', 'realtor' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'price',
                'name' => __( 'Price', 'realtor' ),
                'type' => 'number',
            ),
        ),
    );
    return $meta_boxes;
}


?>
