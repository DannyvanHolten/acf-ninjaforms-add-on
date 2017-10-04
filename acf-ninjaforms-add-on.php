<?php
/*
Plugin Name: Advanced Custom Fields: Ninjaforms Add-on
Plugin URI: https://github.com/dannyvanholten/acf-ninjaforms-add-on
Description: Advanced Custom Field with which we can select Ninjaforms.
Version: 1.1
Author: Danny van Holten
Author URI: http://www.dannyvanholten.com/
Copyright: Danny van Holten
*/

if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

// Define multiple necessary constants
define('ACF_NF_FIELD_VERSION', '1.1');
define('ACF_NF_FIELD_TEXTDOMAIN', 'acf-ninjaforms-add-on');
define('ACF_NF_FIELD_LANGUAGES', dirname(plugin_basename(__FILE__)) . '/languages/');

define('ACF_NF_FIELD_ASSETS', plugin_dir_url(__FILE__));
define('ACF_NF_FIELD_RESOURCES', __DIR__ . '/resources/');

// Use composer to autoload our classes
require_once __DIR__ . '/vendor/autoload.php';

// Initiate the field!
new ACFNinjaformsField\Init();
