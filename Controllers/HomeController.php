<?php
namespace App\Controllers;
use App\Controller;

class HomeController extends Controller{
    function index()
    {
        // $this->render('home');
        echo 'hello controlller works';
    }
}