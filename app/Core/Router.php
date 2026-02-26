<?php

namespace App\Core; #bagitau class ni ada dalam folder App\Core

use App\Controllers\PageController; #import class PageController

class Router {

    public function run($url) { 

        $controller = new PageController(); #new = arahan untuk buat object

        switch ($url) { #If Url 
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