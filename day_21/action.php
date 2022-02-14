<?php

require_once 'vendor/autoload.php';
use App\Classes\Calculator;

if (isset($_GET['pages']))
{
    if (($_GET['pages']) == 'home')
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
}
elseif(isset($_POST['oddbtn']))
{
    $oddEven = new \App\Classes\OddEven($_POST);
    $result = $oddEven->index();
    include 'pages/home.php';
}
elseif (isset($_POST['primebtn']))
{
    $result

}
