<?php

print_r($_POST);


if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'full-name')
    {
        include 'pages/FullName.php';
    }
}
else if (isset($_POST['btn']))
{
    $fullName = new FullName($_POST);
    $fullName->getFullName();

}