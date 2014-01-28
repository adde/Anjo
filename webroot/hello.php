<?php
/**
 * This is a Anjo pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anjo variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the Anjo container.
$anjo['title'] = "Hello World";

$anjo['header'] = <<<EOD
<img class='sitelogo' src='img/anjo.png' alt='Anjo Logo'/>
<span class='sitetitle'>Anjo webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$anjo['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Anjo ser ut och fungerar.</p>
EOD;

$anjo['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) | <a href='https://github.com/mosbth/Anjo-base'>Anjo på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of Anjo.
include(ANJO_THEME_PATH);
