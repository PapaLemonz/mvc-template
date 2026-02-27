<?php
namespace App\Controllers;

use App\Models\PageModel;

class PageController {

    public function home() {
        $model = new PageModel();
        $data = $model->getHomeData();

        $content = __DIR__ . "/../Views/home.php";  // content page
        require __DIR__ . "/../Views/layout.php";   // load template
    }

    public function about() {
        $model = new PageModel();
        $data = $model->getAboutData();

        $content = __DIR__ . "/../Views/about.php";
        require __DIR__ . "/../Views/layout.php";
    }
}