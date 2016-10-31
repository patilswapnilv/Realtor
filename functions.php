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
add_image_size( 'realtor_property_thumb', 369, 202,true );
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

//For Loading Theme Scripts

if ( ! function_exists( 'realtor_enqueue_theme_scripts' ) ) {
	
	function realtor_enqueue_theme_scripts() {
		if ( ! is_admin() ) {

			$protocol = is_ssl() ? 'https' : 'http';

			//jQuery
			wp_enqueue_script('jquery');

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


			//Owl Carousel
			wp_enqueue_script( 'owl-carousel', get_template_directory_uri().'/js/owl.carousel.js'); 

			//Bootstrap Select
			wp_enqueue_script( 'bootstrap-select', get_template_directory_uri().'/js/bootstrap-select.min.js'); 

			//Google Captcha
			wp_enqueue_script( 'google-captcha', 'https://www.google.com/recaptcha/api.js');

			//Custom
			wp_register_script( 'custom', get_template_directory_uri().'/js/script.js' );
			wp_localize_script('custom','my_ajax_vars', array(
			    				'ajaxurl'       => admin_url( 'admin-ajax.php' )
			));
			wp_enqueue_script( 'custom');

			//Google Maps
			wp_enqueue_script('google-maps',"$protocol://maps.googleapis.com/maps/api/js?key=AIzaSyBQs6Z-1uzgEy7UFKrNjOK8eCCKHiTSHAs&callback=initMap");

			//Localizing Scripts

			// Register the script
			wp_register_script( 'realtor-maps', get_template_directory_uri().'/js/realtor_map_scripts.js' );

			// Localize the script with new data
			if(is_singular( 'property' ))
			{
				$translation_array = array(
					'location' => get_post_meta(get_the_id(),'address-map',true)
					);
			}
			else
			{
				$translation_array = array(
					'location' => 'none'
					);
			}
			
			wp_localize_script( 'realtor-maps', 'single_property_loc', $translation_array );

			// Enqueued script with localized data.
			wp_enqueue_script( 'realtor-maps' );
			


		}
	}
	add_action( 'wp_enqueue_scripts', 'realtor_enqueue_theme_scripts' );
}
//Add Script Attributes
function add_async_attribute($tag, $handle) {
    if ( 'google-maps' !== $handle )
        return $tag;
    return str_replace( ' src', ' async="async" src', $tag );
}
add_filter('script_loader_tag', 'add_async_attribute', 10, 2);






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
		'supports'				=>	array('title', 'editor','thumbnail','comments'),
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
                'id'   => 'garages',
                'name' => __( 'Garages', 'realtor' ),
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

//Realtor Profile Fields

add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
<h3><?php _e("Realtor Profile Information", "realtor"); ?></h3>

<table class="form-table">
<tr>
<th><label for="profile-tagline"><?php _e("Profile Tagline"); ?></label></th>
<td>
<input type="text" name="profile-tagline" id="profile-tagline" value="<?php echo esc_attr( get_the_author_meta( 'profile-tagline', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please write your profile tagline."); ?></span>
</td>
</tr>
<tr>
<th><label for="address"><?php _e("Address"); ?></label></th>
<td>
<input type="text" name="address" id="address" value="<?php echo esc_attr( get_the_author_meta( 'address', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please enter your address."); ?></span>
</td>
</tr>
<tr>
<th><label for="phonenumber"><?php _e("Phone Number"); ?></label></th>
<td>
<input type="text" name="phonenumber" id="address" value="<?php echo esc_attr( get_the_author_meta( 'phonenumber', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please enter your phonenumber."); ?></span>
</td>
</tr>
<tr>
<th><label for="facebook-url"><?php _e("Facebook URL"); ?></label></th>
<td>
<input type="text" name="facebook-url" id="facebook-url" value="<?php echo esc_attr( get_the_author_meta( 'facebook-url', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please enter your Facebook URL."); ?></span>
</td>
</tr>
<tr>
<th><label for="twitter-url"><?php _e("Twitter URL"); ?></label></th>
<td>
<input type="text" name="twitter-url" id="twitter-url" value="<?php echo esc_attr( get_the_author_meta( 'twitter-url', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please enter your Twitter URL."); ?></span>
</td>
</tr>
<th><label for="pinterest-url"><?php _e("Pinterest URL"); ?></label></th>
<td>
<input type="text" name="pinterest-url" id="pinterest-url" value="<?php echo esc_attr( get_the_author_meta( 'pinterest-url', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please enter your Pinterest URL."); ?></span>
</td>
</tr>
<th><label for="googleplus-url"><?php _e("Google+ URL"); ?></label></th>
<td>
<input type="text" name="googleplus-url" id="googleplus-url" value="<?php echo esc_attr( get_the_author_meta( 'googleplus-url', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please enter your Google+ URL."); ?></span>
</td>
</tr>
<th><label for="tumblr-url"><?php _e("Tumblr URL"); ?></label></th>
<td>
<input type="text" name="tumblr-url" id="tumblr-url" value="<?php echo esc_attr( get_the_author_meta( 'tumblr-url', $user->ID ) ); ?>" class="regular-text" /><br />
<span class="description"><?php _e("Please enter your Tumblr URL."); ?></span>
</td>
</tr>
</table>
<?php }

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {

if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }

update_user_meta( $user_id, 'profile-tagline', $_POST['profile-tagline'] );
update_user_meta( $user_id, 'address', $_POST['address'] );
update_user_meta( $user_id, 'phonenumber', $_POST['phonenumber'] );
update_user_meta( $user_id, 'facebook-url', $_POST['facebook-url'] );
update_user_meta( $user_id, 'twitter-url', $_POST['twitter-url'] );
update_user_meta( $user_id, 'pinterest-url', $_POST['pinterest-url'] );
update_user_meta( $user_id, 'googleplus-url', $_POST['googleplus-url'] );
update_user_meta( $user_id, 'tumblr-url', $_POST['tumblr-url'] );
}

//Send Email On Single Property Page

function realtor_single_property_form_submit()
{
	$captcha_enabled=true;

	if($captcha_enabled)
	{
		//echo $_POST['g-recaptcha-response'];
		//$request = wp_remote_get(
		//'https://www.google.com/recaptcha/api/siteverify?secret=your_secret&response=' . $response . '&remoteip=' . $remote_ip);
		$response = wp_remote_post( 'https://www.google.com/recaptcha/api/siteverify', array(
			'method' => 'POST',
			'timeout' => 45,
			'redirection' => 5,
			'httpversion' => '1.0',
			'blocking' => true,
			'headers' => array(),
			'body' => array( 'secret' => '6LeErQoUAAAAAHfzuGL1W7fROtUOffMJOH7W_T_P', 'response' => $_POST['g-recaptcha-response'], 'remoteip'  => $_SERVER['REMOTE_ADDR'] ),
			'cookies' => array()
		    ));

		if(strpos($response['body'], 'true') == null)
		{
			echo __("CAPTCHA error! Please resubmit.", 'realtor');
			print_r($response['body']);
			wp_die();
		}


	}

	if(!(
		trim($_POST['full-name']) == "" &&
		trim($_POST['phone-number']) == "" &&
		trim($_POST['email']) == "" &&
		trim($_POST['message']) == ""
		))
	{
		echo trim($_POST['full-name']) == "";
		$name=$_POST['full-name'];
		$phone=$_POST['phone-number'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		$author_id=$_POST['author-id'];


		if(wp_mail(get_the_author_meta( 'email', $author_id ), "Realtor - Message From ".$name, $message.'<p>Phone Number:'.$phone.'</p>',
			array(
			    'From: '.$name.'<'.$email.'>',
					)
				))
		{
			echo __("Message Sent!",'realtor');
		}
		else
		{	
			echo __("There was an error. Message not sent", 'realtor');
		}
	}
	else
	{
		echo __("Message was not sent. Please fill all fields.", 'realtor');

	}
	
	wp_die();
}
add_action('wp_ajax_realtor_single_property_form_submit', 'realtor_single_property_form_submit');
add_action('wp_ajax_nopriv_realtor_single_property_form_submit', 'realtor_single_property_form_submit');

//Set Mail Content Type
function realtor_set_content_type(){
    return "text/html";
}
add_filter( 'wp_mail_content_type','realtor_set_content_type' );

//Adding Query Vars
function add_query_vars_filter( $vars ){
  $vars[] = "keyword";
  return $vars;
}
add_filter( 'query_vars', 'add_query_vars_filter' );
?>