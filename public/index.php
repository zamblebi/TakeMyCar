<?php
// use App\Controllers\HomeController;
require '../vendor/autoload.php';

//Make Route in global
define('PUBLIC', str_replace('public/index.php', '', $_SERVER['SCRIPT_NAME']));
define('ROOT', str_replace('public/index.php','', $_SERVER["SCRIPT_FILENAME"]));


// See errors with Whoops
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

//router
require_once '../routes/route.php';
