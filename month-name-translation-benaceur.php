<?php
/** 
Plugin Name: month name translation benaceur
Plugin URI: http://benaceur-php.com/
Description: This plugin allow you to display the latest news or latest articles in a bar with four beautiful animations...
Version: 1.0
Author: benaceur
Author URI: http://benaceur-php.com/
License: GPL2
*/

define("MONTH_TRANSLATION_BENACEUR", "month-name-translation-benaceur");

// Add settings link on plugin page
function month_name_translation_benaceur_action_links($links){
	$links[] = '<a href="'.get_admin_url(null, 'options-general.php?page='.MONTH_TRANSLATION_BENACEUR.'').'">'.__("Settings", 'month-name-translation-benaceur').'</a>';
	return $links;
}
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'month_name_translation_benaceur_action_links');
// Add settings link on plugin page


load_plugin_textdomain( 'month-name-translation-benaceur', false, basename( dirname( __FILE__ ) ) . '/lang/' );

add_action('admin_init', 'month_name_translation_benaceur_register_options');

  add_action('admin_menu', 'menu_month_name_translation_benaceur');
  function menu_month_name_translation_benaceur() {
  if (function_exists('add_options_page')) {
  $plugin_page_options = add_options_page('month-name-translation-benaceur', 'Month-Translation-Benaceur', 'administrator', 'month-name-translation-benaceur', 'month_name_translation_benaceur_page_options');
  }
}

  function month_name_translation_benaceur_register_options() { 
	
  register_setting('month_name_translation_benaceur_all_reset', 'mntb_all_reset');

  global $AllOptions_MNTB;	
  $AllOptions_MNTB = array(
  'month_name_translation_benaceur_enable_plug',
  'month_name_translation_benaceur_delete_all_options',
  'month_name_translation_benaceur_hide_icon_evol_plug',
  'month_name_translation_benaceur_jan',
  'month_name_translation_benaceur_t_jan',
  'month_name_translation_benaceur_Fev',
  'month_name_translation_benaceur_t_Fev',
  'month_name_translation_benaceur_Mar',
  'month_name_translation_benaceur_t_Mar',
  'month_name_translation_benaceur_Avr',
  'month_name_translation_benaceur_t_Avr',
  'month_name_translation_benaceur_Mai',
  'month_name_translation_benaceur_t_Mai',
  'monthnametranslationbenaceurjuin',
  'monthnametranslationbenaceurtjuin',
  'monthnametranslationbenaceurjuil',
  'monthnametranslationbenaceurtjuil',
  'month_name_translation_benaceur_Aou',
  'month_name_translation_benaceur_t_Aou',
  'month_name_translation_benaceur_Sep',
  'month_name_translation_benaceur_t_Sep',
  'month_name_translation_benaceur_Oct',
  'month_name_translation_benaceur_t_Oct',
  'month_name_translation_benaceur_Nov',
  'month_name_translation_benaceur_t_Nov',
  'month_name_translation_benaceur_Dec',
  'month_name_translation_benaceur_t_Dec'
  
  );
  foreach($AllOptions_MNTB as $optionN_MNTB) {
    register_setting('month_name_translation_benaceur_group', $optionN_MNTB);
}	
	
	    if ($GLOBALS['pagenow'] == 'options-general.php' && $_GET['page'] == 'month-name-translation-benaceur'){
		wp_enqueue_style('month-name-translation-benaceur-admin',plugins_url('admin/style.css',__FILE__), false, '' );
		wp_enqueue_style('farbtastic');	
	}
}

// add_option
  function MNTB_group_options_default() {
  add_option( 'month_name_translation_benaceur_enable_plug', '1');
  add_option( 'month_name_translation_benaceur_delete_all_options', 'no_delete_opt_mntb');
  add_option( 'month_name_translation_benaceur_jan', 'يناير');
  add_option( 'month_name_translation_benaceur_t_jan', 'كانون الثاني');
  add_option( 'month_name_translation_benaceur_Fev', 'فبراير');
  add_option( 'month_name_translation_benaceur_t_Fev', 'شباط');
  add_option( 'month_name_translation_benaceur_Mar', 'مارس');
  add_option( 'month_name_translation_benaceur_t_Mar', 'آذار');
  add_option( 'month_name_translation_benaceur_Avr', 'أبريل');
  add_option( 'month_name_translation_benaceur_t_Avr', 'نيسان');
  add_option( 'month_name_translation_benaceur_Mai', 'مايو');
  add_option( 'month_name_translation_benaceur_t_Mai', 'أيار');
  add_option( 'monthnametranslationbenaceurjuin', 'يونيو');
  add_option( 'monthnametranslationbenaceurtjuin', 'حزيران');
  add_option( 'monthnametranslationbenaceurjuil', 'يوليو');
  add_option( 'monthnametranslationbenaceurtjuil', 'تموز');
  add_option( 'month_name_translation_benaceur_Aou', 'أغسطس');
  add_option( 'month_name_translation_benaceur_t_Aou', 'آب');
  add_option( 'month_name_translation_benaceur_Sep', 'سبتمبر');
  add_option( 'month_name_translation_benaceur_t_Sep', 'أيلول');
  add_option( 'month_name_translation_benaceur_Oct', 'أكتوبر');
  add_option( 'month_name_translation_benaceur_t_Oct', 'تشرين الأول');
  add_option( 'month_name_translation_benaceur_Nov', 'نوفمبر');
  add_option( 'month_name_translation_benaceur_t_Nov', 'تشرين الثاني');
  add_option( 'month_name_translation_benaceur_Dec', 'ديسمبر');
  add_option( 'month_name_translation_benaceur_t_Dec', 'كانون الأول');
  }
// add_option

     register_activation_hook( __FILE__, 'MNTB_up_options' );
     function MNTB_up_options(){
      MNTB_group_options_default();
	 }

if (get_option('month_name_translation_benaceur_enable_plug')):

add_filter('get_archives_link', 'modif_month_name_translation_benaceur');
add_filter('date_i18n', 'modif_month_name_translation_benaceur');
add_filter('wp_title', 'modif_month_name_translation_benaceur');

function modif_month_name_translation_benaceur($list) {
  include ('includes/panel-var.php');	
  $patterns = array(
    '/'.$mntb_jan.'/', '/'.$mntb_Fev.'/', '/'.$mntb_Mar.'/', '/'.$mntb_Avr.'/', '/'.$mntb_Mai.'/', '/'.$mntb_Juin.'/',
    '/'.$mntb_Juil.'/', '/'.$mntb_Aou.'/', '/'.$mntb_Sep.'/', '/'.$mntb_Oct.'/',  '/'.$mntb_Nov.'/', '/'.$mntb_Dec.'/'
  );
  $replacements = array(
    $mntb_t_jan, $mntb_t_Fev, $mntb_t_Mar, $mntb_t_Avr, $mntb_t_Mai, $mntb_t_Juin, 
    $mntb_t_Juil, $mntb_t_Aou, $mntb_t_Sep, $mntb_t_Oct, $mntb_t_Nov, $mntb_t_Dec
  );    
  $list = preg_replace($patterns, $replacements, $list);
return $list; 
}

endif; // month_name_translation_benaceur_enable_plug	

        require_once ('panel-page.php');

  if ( get_option( 'month_name_translation_benaceur_delete_all_options') == 'delete_opt_mntb') :
  register_deactivation_hook( __FILE__, 'MNTB_plugin_deactivation' );
  function MNTB_plugin_deactivation() {
	
  global $AllOptions_MNTB;	
  foreach($AllOptions_MNTB as $optionN_MNTB) {
     delete_option($optionN_MNTB);
}
     delete_option('mntb_all_reset');
}
  endif; // endif month_name_translation_benaceur_delete_all_options

    add_action( 'admin_init', 'month_name_translation_benaceur_admin_notices' );
    function month_name_translation_benaceur_admin_notices() {
    $add_notice_admin = true;
	
	if ( false === $add_notice_admin ) { 
    if ( $GLOBALS['pagenow'] == 'options-general.php' && $_GET['page'] == 'month-name-translation-benaceur' ) {
    include ('includes/notices-mntb.php');
    }
	    }
	}

	if (get_option('mntb_all_reset')) :
  add_action('admin_init', 'mntb_all_reset_AllOptions');
  function mntb_all_reset_AllOptions() {
	  
  global $AllOptions_MNTB;	
  foreach($AllOptions_MNTB as $optionN_MNTB) {
     delete_option($optionN_MNTB);
}

     delete_option('mntb_all_reset');
	 
      MNTB_group_options_default();
	  
  }  
endif;	
