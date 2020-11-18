<?php
require '../vendor/autoload.php';
$router = new AltoRouter();


$router->map('GET','/', function(){
    require '../src/views/home.php';
}, 'home');

$router->map('GET','/about', function(){
    // require __DIR__ . '../views/home.php';
     echo "about page";
}, 'about');


$match = $router->match();

// dump($match);


if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
}else {
	// no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}