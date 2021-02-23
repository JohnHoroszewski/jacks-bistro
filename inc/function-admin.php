<?php

/* ==========================
      ADMIN PAGE
===========================*/


function jb_add_admin_page() {

    // Generate jb Theme Admin Page
    add_menu_page( 'General Information Options', 'JB Options', 'manage_options', 'jb_options', 'jb_theme_create_page', 'dashicons-admin-generic', 73 );

    // Gererate jb Admin Sub Pages
    add_submenu_page( 'jb_options', 'jb Theme Options', 'General', 'manage_options', 'jb_options', 'jb_theme_create_page' );

    add_submenu_page( 'jb_options', 'jb CSS Options', 'Custom CSS', 'manage_options', 'jb_manage_css', 'jb_theme_css_page' );

    // Activate Custom Settings
    add_action( 'admin_init', 'jb_custom_settings' );

}

add_action( 'admin_menu', 'jb_add_admin_page' );

function jb_custom_settings(){

    // General Section Informaiton
    add_settings_section( 'jb-general-options', 'General Options', 'jb_general_options', 'jb_options' );

    // Logo
    register_setting( 'jb-settings-group', 'logo_image' );
    add_settings_field( 'company-logo', 'Company Logo', 'jb_main_logo', 'jb_options', 'jb-general-options' );

    // Street
    register_setting( 'jb-settings-group', 'general_street' );
    add_settings_field( 'street', 'Street', 'jb_general_street', 'jb_options', 'jb-general-options' );
    // Town
    register_setting( 'jb-settings-group', 'general_town' );
    add_settings_field( 'town', 'Town', 'jb_general_town', 'jb_options', 'jb-general-options' );
    // State
    register_setting( 'jb-settings-group', 'general_state' );
    add_settings_field( 'state', 'Company State', 'jb_general_state', 'jb_options', 'jb-general-options' );
    // ZipCode
    register_setting( 'jb-settings-group', 'general_zip' );
    add_settings_field( 'zip', 'Company Zip Code', 'jb_general_zip', 'jb_options', 'jb-general-options' );    
    // Email
    register_setting( 'jb-settings-group', 'general_email' );
    add_settings_field( 'email', 'Main Contact Email Address', 'jb_general_email', 'jb_options', 'jb-general-options' );
    // Phone
    register_setting( 'jb-settings-group', 'general_phone' );
    add_settings_field( 'phone', 'Main Phone Number', 'jb_general_phone', 'jb_options', 'jb-general-options' );

    // Social Media Account Options
    add_settings_section( 'jb-social-options', 'Social Media Accounts', 'jb_social_options', 'jb_options' );

    // Facebook
    register_setting( 'jb-settings-group', 'social_facebook' );
    add_settings_field( 'facebook', 'Facebook URL', 'jb_social_facebook', 'jb_options', 'jb-social-options' );
    // Twitter
    register_setting( 'jb-settings-group', 'social_twitter' );
    add_settings_field( 'twitter', 'Twitter', 'jb_social_twitter', 'jb_options', 'jb-social-options' );
    // Instagram
    register_setting( 'jb-settings-group', 'social_instagram' );
    add_settings_field( 'instagram', 'Instagram URL', 'jb_social_instagram', 'jb_options', 'jb-social-options' );
    // Google Business
    register_setting( 'jb-settings-group', 'social_gbusiness' );
    add_settings_field( 'gbusiness', 'Google Business URL', 'jb_social_gbusiness', 'jb_options', 'jb-social-options' );
    // YouTube
    register_setting( 'jb-settings-group', 'social_youtube' );
    add_settings_field( 'youtube', 'Youtube URL', 'jb_social_youtube', 'jb_options', 'jb-social-options' );
    // Yelp
    register_setting( 'jb-settings-group', 'social_yelp' );
    add_settings_field( 'yelp', 'Yelp URL', 'jb_social_yelp', 'jb_options', 'jb-social-options' );
    // TripAdvisor
    register_setting( 'jb-settings-group', 'social_tripadvisor' );
    add_settings_field( 'tripadvisor', 'Tripadvisor URL', 'jb_social_tripadvisor', 'jb_options', 'jb-social-options' );
}

// General Site Options
function jb_general_options() {

    echo 'Customize your sites general information.';

}

function jb_main_logo() {

    $mLogo = esc_attr( get_option( 'logo_image' ) );
    echo '<input name="logo_image" type="button" class="button button-seondary" value="Upload/Change Logo" id="upload-button"><input class="ewm-jb-admin-address" type="hidden" id="company-logo" name="logo_image" value="'.$mLogo.'" />';
}

function jb_general_street() {

    $streetAddress = esc_attr( get_option( 'general_street' ) );
    echo '<input class="ewm-jb-admin-address" type="text" name="general_street" value="'.$streetAddress.'" placeholder="Street/Road" />';

}

function jb_general_town() {

    $townAddress = esc_attr( get_option( 'general_town' ) );
    echo '<input class="ewm-jb-admin-address" type="text" name="general_town" value="'.$townAddress.'" placeholder="Town/City" />';

}

function jb_general_state() {

    $stateAddress = esc_attr( get_option( 'general_state' ) );
    echo '<input class="ewm-jb-admin-address" type="text" name="general_state" value="'.$stateAddress.'" placeholder="State" />';

}

function jb_general_zip() {

    $zipAddress = esc_attr( get_option( 'general_zip' ) );
    echo '<input class="ewm-jb-admin-address" type="text" name="general_zip" value="'.$zipAddress.'" placeholder="Zip Code" />';

}

function jb_general_email() {

    $emailAddress = esc_attr( get_option( 'general_email' ) );
    echo '<input class="ewm-jb-admin-contact" type="email" name="general_email" value="'.$emailAddress.'" placeholder="Email Address" />';

}

function jb_general_phone() {

    $phoneNumber = esc_attr( get_option( 'general_phone' ) );
    echo '<input class="ewm-jb-admin-contact" type="text" name="general_phone" value="'.$phoneNumber.'" placeholder="Phone Number" />';

}

// Social Media Options

function jb_social_options() {

    echo 'Add your social media accounts information here.';

}

// Facebook
function jb_social_facebook() {

    $facebookSocial = esc_attr( get_option( 'social_facebook' ) );
    echo '<input class="ewm-jb-admin-social" type="text" name="social_facebook" value="'.$facebookSocial.'" placeholder="Facebook Account" />';

}
// Twitter
function jb_social_twitter() {

    $twitterSocial = esc_attr( get_option( 'social_twitter' ) );
    echo '<input class="ewm-jb-admin-social" type="text" name="social_twitter" value="'.$twitterSocial.'" placeholder="Twitter Account" />';

}
// Instagram
function jb_social_instagram() {

    $instagramSocial = esc_attr( get_option( 'social_instagram' ) );
    echo '<input class="ewm-jb-admin-social" type="text" name="social_instagram" value="'.$instagramSocial.'" placeholder="Instagram Account" />';

}
// Google Business
function jb_social_gbusiness() {

    $gbusinessSocial = esc_attr( get_option( 'social_gbusiness' ) );
    echo '<input class="ewm-jb-admin-social" type="text" name="social_gbusiness" value="'.$gbusinessSocial.'" placeholder="Google Business Account" />';

}
// YouTube
function jb_social_youtube() {

    $youtubeSocial = esc_attr( get_option( 'social_youtube' ) );
    echo '<input class="ewm-jb-admin-social" type="text" name="social_youtube" value="'.$youtubeSocial.'" placeholder="YouTube Account" />';

}
// Yelp
function jb_social_yelp() {

    $yelpSocial = esc_attr( get_option( 'social_yelp' ) );
    echo '<input class="ewm-jb-admin-social" type="text" name="social_yelp" value="'.$yelpSocial.'" placeholder="Yelp Account" />';

}
// TripAdvisor
function jb_social_tripadvisor() {

    $tripadvisorSocial = esc_attr( get_option( 'social_tripadvisor' ) );
    echo '<input class="ewm-jb-admin-social" type="text" name="social_tripadvisor" value="'.$tripadvisorSocial.'" placeholder="TripaAdvisor Account" />';

}


function jb_theme_create_page() {
    
    require_once( get_template_directory() . '/inc/templates/jb-admin.php' );

}

function jb_theme_css_page() {
    
    require_once( get_template_directory() . '/inc/templates/jb-css.php' );

}