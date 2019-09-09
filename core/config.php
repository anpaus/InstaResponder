<?php

require __DIR__.'/../vendor/autoload.php';

/////// IG CONFIG ///////
$username = getenv('USER_NAME');
$password = getenv('USER_PASS');
$debug = false;
$truncatedDebug = false;
/////// DIALOGFLOW CONFIG ///////
$agentName = "chatbot2";
/////////////////////////////////

$ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);

$dflow = new \juanmicl\dummiesflow\dummiesFlow();
$dflow->setAgent($agentName);

?>
