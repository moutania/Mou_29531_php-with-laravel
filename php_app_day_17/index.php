<?php

namespace app\classess;
class Example
{
    public function index()
    {
//        *single line
//        *conditional
//            *If
//            *if else
//        for($this->i=0; $this->i<5; $this->i++)
//        {
//            echo 'hello world';
//        }
        $this->i=10;
        while($this->i<20)
        {
            echo $this->i;
            $this->i++;
        }
        $this->i=10;
        do{
            echo $this->i;
            $this->i++;

        } while($this->i>20);
    }
}
