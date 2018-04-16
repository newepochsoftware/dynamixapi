<?php

require_once(__DIR__ . "/../generated-classes/Dynamix/API/API.php");

$api = new \Dynamix\API\API(new \Dynamix\API\User("david@newepochsoftware.com", "cJio3_7fba436cd4c611ff3dca0749dac44d325ef35725"));

$template = new \Dynamix\API\Template();
$template->setName("FHAMortgage");

if (($profile = $api->loadProfile($template)) !== false) {
  header("Content-Type: text/plain");
  echo "Template: ", $template->getName(), "\n";
  echo "Profile:  ", $profile->getName(), "\n";
  echo "XID:\n";
  echo json_encode($profile->getFields(), JSON_PRETTY_PRINT);
}
