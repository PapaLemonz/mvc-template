<?php

namespace App\Controllers;

use App\Models\PageModel;

class PageController {

    public function home() { 

        $model = new PageModel();
        $data = $model->getHomeData(); #Panggil Function dekat Models/PageModel.php

        require "app/Views/home.php";
    }

    public function about() {

        $model = new PageModel();
        $data = $model->getAboutData(); #Panggil Function dekat Models/PageModel.php

        require "app/Views/about.php"; #Include dan jalankan pada file (about.php) sekarang juga. 
                                       #Require = perlu
    }
}