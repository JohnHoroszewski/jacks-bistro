<h1>Jack's Bistro General Information</h1>

<?php settings_errors(); ?>
<form method="post" action="options.php">
    <!-- General Settings -->
    <?php settings_fields( 'jb-settings-group' ); ?>
    
    <!-- Social Accoutns -->
    <?php settings_fields( 'jb-social-group' ); ?>
    
    <?php do_settings_sections( 'jb_options' ); ?>
    <?php submit_button(); ?>
</form>