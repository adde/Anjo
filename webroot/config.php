<?php
/**
 * Config-file for Anjo. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Anjo paths.
 *
 */
define('ANJO_INSTALL_PATH', __DIR__ . '/..');
define('ANJO_THEME_PATH', ANJO_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(ANJO_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the Anjo variable.
 *
 */
$anjo = array();


/**
 * Site wide settings.
 *
 */
$anjo['lang']         = 'sv';
$anjo['title_append'] = ' | Anjo en webbtemplate';

$anjo['header'] = <<<EOD
<img class='sitelogo' src='img/anjo.png' alt='Anjo Logo'/>
<span class='sitetitle'>Anjo webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$anjo['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/mosbth/Anjo-base'>Anjo på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;



/**
 * Theme related settings.
 *
 */
//$anjo['stylesheet'] = 'css/style.css';
$anjo['stylesheets'] = array('css/style.css');
$anjo['favicon']    = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$anjo['modernizr'] = 'js/modernizr.js';
$anjo['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$anjo['jquery'] = null; // To disable jQuery
$anjo['javascript_include'] = array();
//$anjo['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**
 * Google analytics.
 *
 */
$anjo['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics
