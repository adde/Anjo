<?php
/**
 * This is a Anjo pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anjo variable with its defaults.
include(__DIR__.'/config.php');



// Do it and store it all in variables in the Anjo container.
$anjo['title'] = "404";
$anjo['header'] = "";
$anjo['main'] = "This is a Anjo 404. Document is not here.";
$anjo['footer'] = "";

// Send the 404 header
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of Anjo.
include(ANJO_THEME_PATH);
