<?php

require_once 'vendor/autoload.php';
use App\classes\Example;
use App\classes\FullName;
//$example = new Example();
//$example->index();

$fullName = new FullName('BITM');
$fullName-> index();