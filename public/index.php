<?php
require '../vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


$router = new AltoRouter();


$router->map('GET','/', function(){
    require '../Views/home.php';
}, 'home');

$router->map('GET','/about', function(){
    require '../Views/about.php';
}, 'about');


$match = $router->match();

// dump($match);


if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
}else {
	// no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    echo "404 page not found";
}