<?php 

namespace App\Controllers;

class HomeController {
    public function index()
    {
        echo "Je suis la homepage";
    }

    public function show(int $id)
    {
        echo "Je suis le post " . $id;
    }
}