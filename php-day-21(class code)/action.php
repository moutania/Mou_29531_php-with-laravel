<?php

require_once 'vendor/autoload.php';

use App\Classes\Calculator;
use App\Classes\OddEven;
use App\Classes\Prime;
use App\Classes\Category;

if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include "pages/home.php";
    }
    elseif ($_GET['pages'] == 'odd-even')
    {
        include "pages/odd.php";
    }
    elseif ($_GET['pages'] == 'prime')
    {
        include "pages/prime.php";
    }
    elseif ($_GET['pages'] == 'all-products')
    {
        $category = new Category();
        $categories = $category->index();
        include "pages/allProducts.php";
    }
} elseif (isset($_POST['btn']))
{
    $calculator = new Calculator($_POST);
    $result = $calculator->index();
    include 'pages/home.php';
} elseif (isset($_POST['oddBtn']))
{
    $oddEven = new OddEven($_POST);
    $result = $oddEven->index();
    include 'pages/odd.php';
} elseif (isset($_POST['primeBtn']))
{
    $prime = new Prime($_POST);
    $result = $prime->index();
    include 'pages/prime.php';
}