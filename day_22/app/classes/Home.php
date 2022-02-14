<?php

namespace App\Classes;

class Home
{
    public function index()
    {
        header('location: action.php?pages=all-products');
    }
}





















//namespace App\Classes;
//
//
//class Home
//{
//    public function index()
//    {
//        header("Location: action.php?pages=home");
//    }
//}