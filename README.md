# dynamixapi
The Dynamix PHP API Library

For detailed examples and instructions on using the Dynamix RESTful API, please visit https://dynamix.systems/docs.

## Example 1 - Fetch a Profile

        <?php

	    require_once("Dynamix/API/API.php");
	    $email = "me@myemail.com";
	    $apiKey = "XXXXXX";
	    $user = new \Dynamix\API\User($email, $apiKey);
	    $api = new \Dynamix\API\API($user);
	    $template = new \Dynamix\API\Template();
	    $template->setName("MyTemplate");
	    $profile = $api->loadProfile($template);
	    echo $profile->xid("my_var");
