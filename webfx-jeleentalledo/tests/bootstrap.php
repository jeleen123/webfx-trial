<?php
/**
 * PHPUnit bootstrap file
 *
 * @package YourPluginOrTheme
 */

$_tests_dir = 'C:/freelance/xamppp/htdocs/webfx-jeleentalledo/wordpress-develop/tests'; // Path to wp-tests-lib

// Load WordPress testing environment
if ( ! file_exists( $_tests_dir . '/includes/functions.php' ) ) {
    echo "Could not find {$_tests_dir}/includes/functions.php\n";
    exit( 1 );
}

// Load WordPress tests config
require_once $_tests_dir . '/includes/bootstrap.php';

// Activate your plugin or theme
function activate_plugin_or_theme() {
    // Replace with activation logic for your plugin or theme
    // For plugins: activate_plugin('plugin-folder/plugin-file.php');
    // For themes: switch_theme('your-theme-slug');
}
activate_plugin_or_theme();

// Load your plugin or theme
// For plugins:
// require_once dirname( dirname( __FILE__ ) ) . '/plugin-folder/plugin-file.php';
// For themes:
// require_once dirname( dirname( __FILE__ ) ) . '/path-to-theme/functions.php';