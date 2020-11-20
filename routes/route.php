<?php

require_once '../Controllers/HomeController.php';
//Instanciate AltoRouter
$router = new AltoRouter();

//Routes
$router->map('GET','/', 'App\Controllers\HomeController#index', 'home');

$router->map('GET','/about', function(){
    require '../Views/about.php';
}, 'about');


$match = $router->match();

// dump($match);

if($match['target'] === false)
{
    echo '404 page not found';
}else if($match['target'] instanceof Closure)
{
    call_user_func($match['target'], $match['params'] );
}
else
{
    list( $controller, $action ) = explode( '#', $match['target'] );
    if (is_callable(array($controller, $action)))
    {

        $obj = new $controller;
        // dump(obj)
        call_user_func_array(array($obj,$action), array($match['params']));

    }else
    {
        echo 'Error: can not call '.$controller.'#'.$action; 
    }

}

// dump(new $controller);

//  else if ($match['target']==''){
//     echo 'Error: no route was matched'; 

// } else {

// }

// Can be placed in a different directory but needs to be loaded
// class HomeController {
//     public function index() {
//         echo 'hi from home';
//     }
// }

 ?>