<?php


namespace App\Classes;


class Home
{
    public function index()
    {
        header('location: action.php?pages=home');
    }

}