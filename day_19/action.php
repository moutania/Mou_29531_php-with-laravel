<?php

require_once 'vendor/autoload.php';

use App\classes\Word;

//echo '<pre/>';
//print_r($_POST);
//exit();


if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }
}
elseif (isset($_POST['btn']))
{
    $word = new Word($_POST);
    $result = $word->index();
    extract($result);
    echo $result;include 'pages/home.php';
}
