<?php
// import dependencies
require 'vendor/autoload.php';

// get the Mixpanel class instance, replace with your project token
$mp = Mixpanel::getInstance("XXXXX");


// track an event
$mp->identify($_GET['distinct_id']);

$mp->track($_GET['event']);