<?php

namespace App\Core;

use App\Controllers\PageController;

class Router {

    public function run($url) {

        $controller = new PageController();

        switch ($url) {
            case 'about':
                $controller->about();
                break;

            case '':
            case 'home':
                $controller->home();
                break;

            default:
                echo "404 Page Not Found";
                break;
        }
    }
}