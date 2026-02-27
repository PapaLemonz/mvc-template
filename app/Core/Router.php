<?php
namespace App\Core;

class Router {

    public function run($url) {
        switch ($url) {
            case 'about':
                $controller = new \App\Controllers\PageController();
                $controller->about();
                break;
            default:
                $controller = new \App\Controllers\PageController();
                $controller->home();
                break;
        }
    }
}