<?php

namespace App\Models;

class PageModel {

    public function getHomeData() {
        return "Selamat datang ke MVC versi namespace!";
    }

    public function getAboutData() {
        return "Ini adalah halaman About Us (Namespace Version).";
    }
}