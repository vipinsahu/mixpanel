<?php
// import dependencies
require 'vendor/autoload.php';

// get the Mixpanel class instance, replace with your project token
$mp = Mixpanel::getInstance("XXXXXX");

// create/update a profile for user id 12345
$current_distinct_id = 612345;

$mp->people->set($current_distinct_id, array(
    '$first_name'       => "vipin",
    '$last_name'        => "vipin",
    '$email'            => "vipin.doe@example.com",
    '$phone'            => "1234555555",
    "Favorite Color"    => "green"
));
?>
<html>
<head>
  <title>MixPanel</title>  
</head>
<body>
	<form action="capture_event.php">
		
		<label>Enter Event Name:</label><input type="input" name="event">

		<input type="submit" name="Capture Event">			

		<input type="hidden" name="distinct_id" value="<?php echo $current_distinct_id; ?>">
	</form>
</body>
</html>