
# Mixpanel
Mixpanel is a business analytics service company. It tracks user interactions with web and mobile applications and provides tools for targeted communication with them.

## Dependencies

The following PHP packages are required and we can install via Composer. 
1. `mixpanel/mixpanel-php` Mixpanel PHP library provides integration access to the Mixpanel Gateway

## Configuration
API credentials are unique account identifiers that must be added to your code before you can process interact via the API.
```php
<?php 
    $mp = Mixpanel::getInstance("XXXXXX");
?>
```

## Setting Profile Properties
The Mixpanel class has a public property called people that exposes an instance of Producers_MixpanelPeople that you can use to make profile updates.

```php
<?php
require "vendor/autoload.php";
$mp = Mixpanel::getInstance("MIXPANEL_PROJECT_TOKEN");

// create or update a profile with First Name, Last Name,
// E-Mail Address, Phone Number, and Favorite Color
// without updating geolocation data or $last_seen
$mp->people->set(12345, array(
    '$first_name'       => "John",
    '$last_name'        => "Doe",
    '$email'            => "john.doe@example.com",
    '$phone'            => "5555555555",
    "Favorite Color"    => "red"
), $ip = 0, $ignore_time = true);

?>
```
## Sending Event for identity/profile
Track events in the mixpanel-php library by using the track method on the Mixpanel class:

```php
<?php
// import dependencies (using composer's autoload)
// if not using Composer, you'll want to require the
// lib/Mixpanel.php file here
require "vendor/autoload.php";

// get the Mixpanel class instance, replace with your
// project token
$mp = Mixpanel::getInstance("MIXPANEL_PROJECT_TOKEN");

// track an event
$mp->identify($distinct_id);

$mp->track('event name');//example login/signup
```


## Sending Events
Track events in the mixpanel-php library by using the track method on the Mixpanel class:
```php
<?php
// import dependencies (using composer's autoload)
// if not using Composer, you'll want to require the
// lib/Mixpanel.php file here
require "vendor/autoload.php";

// get the Mixpanel class instance, replace with your
// project token
$mp = Mixpanel::getInstance("MIXPANEL_PROJECT_TOKEN");

// track an event
$mp->track("button clicked", array("label"  =>  "sign-up"));
```

## Quick Start Example
- To create a new subscription by running the below code or after successful installation you would able to access create new `profile` page by visiting the URL `http://localhost/mixpanel`


## MixPanel Documentation
[Official documentation](https://developer.mixpanel.com/docs/php)
