<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }
    public function showArray()
    {
        $array = [
            ["id" => 1, "title" => "продукт 1", "price" => 500, "path" => "https://picsum.photos/200"],
            ["id" => 2, "title" => "продукт 2", "price" => 1500, "path" => "https://picsum.photos/201"],
            ["id" => 3, "title" => "продукт 3", "price" => 2000, "path" => "https://picsum.photos/202"],
            ["id" => 4, "title" => "продукт 4", "price" => 3500, "path" => "https://picsum.photos/203"],
            ["id" => 5, "title" => "продукт 5", "price" => 5000, "path" => "https://picsum.photos/204"],
            ["id" => 6, "title" => "продукт 6", "price" => 10000, "path" => "https://picsum.photos/205"],

        ];
        return view('array', compact("array"));
    }
}
