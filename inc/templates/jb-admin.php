<h1>JR General Information</h1>

<?php settings_errors(); ?>
<?php
    $logo = esc_attr( get_option( 'logo_image') );
?>

<form method="post" action="options.php">
    <img src="<?php print $logo; ?>" alt="">
    <?php settings_fields( 'jb-settings-group' ); ?>
    <?php do_settings_sections( 'jb_options' ); ?>
    <?php submit_button(); ?>
</form>
