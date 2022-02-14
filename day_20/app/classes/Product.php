<?php


namespace App\Classes;


class Product
{
    public function getAllProduct()
    {
        return[
            0 =>[
                'id'          => 1,
                'name'        => 'new Product',
                'price'       => '450',
                'description' => 'description',
                'image'       =>'1.jpg'
            ],
            1 =>[
                'id'          => 2,
                'name'        => 'new t-shirt',
                'price'       => '5500',
                'description' => 'description',
                'image'       =>'2.jpg'
            ],
            2 =>[
                'id'          => 3,
                'name'        => 'new Shari',
                'price'       => '10500',
                'description' => 'description',
                'image'       =>'3.jpg'
            ],
        ];
    }
}