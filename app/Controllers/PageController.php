<?php

namespace App\Controllers;

use App\Models\PageModel;

class PageController {

    public function home() {

        $model = new PageModel();
        $data = $model->getHomeData();

        require "app/Views/home.php";
    }

    public function about() {

        $model = new PageModel();
        $data = $model->getAboutData();

        require "app/Views/about.php";
    }
}