<?php
/**
 * ------------------------------------------------------------------------- *
 * GENERAL CONFIGURATION (styles and scripts) *
 * ------------------------------------------------------------------------- *
 *
 * @package Flex
 */

 
/**
 * Load scripts and style.
 */
function enqueue_scripts() {

  wp_enqueue_style('bootstrap-css', WP_STYLE_URL . '/bootstrap.css', array(), null, false);
  wp_enqueue_style('style-css', WP_STYLE_URL . '/style.css', array(), null, false);
  wp_enqueue_style('all-css', WP_STYLE_URL . '/all.css', array(), null, false);
  wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Salsa&display=swap', array(), null, false);

  wp_register_script('popper', WP_SCRIPT_URL . '/popper.js', array(), null, true);
  wp_enqueue_script('jquery');

  wp_register_script('popper', WP_SCRIPT_URL . '/popper.js', array(), null, true);
  wp_enqueue_script('popper');

  wp_register_script('popperenable', WP_SCRIPT_URL . '/popperenable.js', array(), null, true);
  wp_enqueue_script('popperenable');

  wp_register_script('bootstrap-js', WP_SCRIPT_URL . '/bootstrap.js', array(), null, true);
  wp_enqueue_script('bootstrap-js');

  wp_register_script('banner', WP_SCRIPT_URL . '/banner.js', array(), null, true);
  wp_enqueue_script('banner');



   
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

add_theme_support( 'post-thumbnails' ); // Adiciona imagem destacada




// admin styles
$current_user = wp_get_current_user();
if ($current_user->user_login != '') {
    function custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/assets/admin/admin.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );

        wp_register_script('admin', get_template_directory_uri() . '/assets/admin/admin.js', array(), null, true);
        wp_enqueue_script('admin');

        wp_register_script('mask', get_template_directory_uri() . '/assets/admin/jquery.mask.min.js', array(), null, true);
        wp_enqueue_script('mask');

        
    }
    add_action( 'admin_enqueue_scripts', 'custom_wp_admin_style' );
}

function wpb_custom_logo() {
  echo '
  <style type="text/css">
  #menu-dashboard:before {
  content: "";
  background-image: url(' .  get_template_directory_uri() . '/assets/images/custom-admin-logo.png) !important;
  width: 100%;
  height: 40px;
  background-size: contain;
  position: absolute;
  top: 0;
  left: 20px;
  background-repeat: no-repeat;
  }
  </style>
  ';
  }

   
  //hook into the administrative header output
  add_action('wp_before_admin_bar_render', 'wpb_custom_logo');

// login styles
function custom_login_page() {
    wp_enqueue_style('login', get_template_directory_uri() . '/assets/login/login.css', false, '1.0.0' ); 
}
add_action( 'login_enqueue_scripts', 'custom_login_page', 10 );

function images($url, $theme = NULL){
$template = get_template_directory_uri();
$images = '/assets/img/';

  if($theme == NULL){
    return $url;
  }
  else {
    return $template . '/' . $images . '/' . $url;
  }
}


function ACF_GOOGLE_KEY() {
  acf_update_setting('google_api_key', 'AIzaSyBgtPPzikTR7Cw15AjqUGKDM0pfdp2MCgs');
}
add_action('acf/init', 'ACF_GOOGLE_KEY');

// Login via email ou username

function login_with_email_address( &$username ) {
	$user = get_user_by( 'email', $username );
    if ( !empty( $user->user_login ) )
	$username = $user->user_login;

	return $username;
	
}

add_action( 'wp_authenticate','login_with_email_address');



// Custom Excerpt

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);

  if (count($excerpt) >= $limit) {
      array_pop($excerpt);
      $excerpt = implode(" ", $excerpt) . '...';
  } else {
      $excerpt = implode(" ", $excerpt);
  }

  $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);

  return $excerpt;
}


function slugify($text)
{
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  $text = preg_replace('~[^-\w]+~', '', $text);
  $text = trim($text, '-');
  $text = preg_replace('~-+~', '-', $text);
  $text = strtolower($text);

  if (empty($text)) {
    return '';
  }

  return $text;
}


// Menu
register_nav_menus(array(
  'header-menu' => 'Header Menu',
  'footer-menu' => 'Footer Menu'
 ));

 function clean_custom_menus() {

  $obj_query = get_queried_object();
  $actualPage = $obj_query->post_title;
  $menu_arr = array();
	$menu_name = 'header-menu'; 
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);
    $count = 0;
	
		$menu_list = "\t\t\t\t". '<ul class="navbar-nav  testecollapse ">' ."\n";
		foreach ((array) $menu_items as $key => $menu_item) {
      $activeClass = '';

      $hasChild = false;
      $parentID = NULL;

      if(intval($menu_items[ $count + 1 ]->menu_item_parent) > 0){
        $parentID = $menu_item->ID;
        $hasChild = true;
        $activeClass = 'child-menu-active';
      }
      if($menu_item->title == $actualPage) {
        $activeClass = 'active';
      }


			$title = $menu_item->title;
      $url = $menu_item->url;

     
      
      if($hasChild AND !in_array($menu_item->ID, $menu_arr)) {

        

        foreach ((array) $menu_items as $key => $sub_menu_item) {
          
          if(intval($sub_menu_item->menu_item_parent) == $parentID AND $sub_menu_item->title == $actualPage){
              $activeClass = 'active';

          }

        }
       
        $menu_list .= "\t\t\t\t\t". '<li class="nav-item mr-5 dropdown '.$activeClass.'">
        <a class="nav-link text-uppercase dropdown-toggle" 
        href="'. $url .'" style="color: #000;" 
        id="navbarDropdown" role="button" 
        data-toggle="dropdown" aria-haspopup="true" 
        aria-expanded="true" >'. 
        $title .'</a>
        ' ."\n";
          array_push($menu_arr, $menu_item->ID);
          $menu_list .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';

            foreach ((array) $menu_items as $key => $sub_menu_item) {
              
              $activeClass = '';
              if($sub_menu_item->title == $actualPage) {
                $activeClass = 'active-sub-menu';
              }
              
              if(intval($sub_menu_item->menu_item_parent) == $parentID AND !in_array($sub_menu_item->ID, $menu_arr)){
                $menu_list .= '<a class="dropdown-item sub-item text-uppercase '.$activeClass.'" href="'.$sub_menu_item->url.'" style="color: #000;">'.$sub_menu_item->title.'</a>';

                array_push($menu_arr, $sub_menu_item->ID);

              }

            }
            
          $menu_list .= '</div>';
        $menu_list .= '</li>';

      }else if(intval($menu_item->menu_item_parent) == 0 AND !in_array($menu_item->ID, $menu_arr)){
        array_push($menu_arr, $menu_item->ID);
        $menu_list .= "\t\t\t\t\t". '<li class="nav-item mr-5 '.$activeClass.'"><a class="nav-link  text-uppercase" style="color: #000;" href="'. $url .'">'. $title .'</a></li>' ."\n";
      }
   
      
      $count++;
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";

	} else {
		// $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}


 ?>



