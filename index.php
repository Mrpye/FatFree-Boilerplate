<?php
date_default_timezone_set("Europe/London");

//*********************************
//Setup the route and config folder
//*********************************
$f3=require('vendor/bcosca/fatfree/lib/base.php');
$f3->config('config/config.ini');
$f3->config('config/routes.ini');

$f3->run();
