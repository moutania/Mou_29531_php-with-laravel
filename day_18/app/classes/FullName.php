<?php


namespace App\classes;


class FullName
{
    public $firstName;
    public $lastName;


    public function __construct($data)
    {
        echo '<pre>';
        print_r(($data));
        echo $data['first_name'];
        exit();
        $this->fastName = 'data';
        $this->lastName = 'Rahman';
    }

    public function index()
    {
        header('location: action.php?pages=full-name');
    }
    public function getFullName ()
    {
        echo $this->lastName;
    }
}