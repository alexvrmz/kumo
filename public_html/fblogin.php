<?php 
session_start();
require_once( 'Facebook/autoload.php' );
 
$fb = new Facebook\Facebook([
  'app_id' => '556896955739933',
  'app_secret' => 'dbdc6b3ad703a479ad130c1e37e14fdf',
  'default_graph_version' => 'v2.5',
]);
 
$helper = $fb->getRedirectLoginHelper();
 
$permissions = ['email']; // Optional permissions for more permission you need to send your application for review
$loginUrl = $helper->getLoginUrl('https://app.kumo.click/callbackfb.php', $permissions);
header("location: ".$loginUrl);

?>