<?php
// import dependencies
require 'vendor/autoload.php';

// get the Mixpanel class instance, replace with your project token
$mp = Mixpanel::getInstance("5046154cc9a767d739e4cbc859e38c50");


// track an event
$mp->identify($_GET['distinct_id']);

$mp->track($_GET['event']);