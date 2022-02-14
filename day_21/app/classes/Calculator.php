<?php


namespace App\Classes;


class Calculator
{
    protected $firstnumber;
    protected $lastnumber;
    protected $option;
    protected $result;


    public function __construct($post=null)
    {
        if($post)
        {
            $this->firstnumber = $post['first_number'];
            $this->lastnumber = $post['last_number'];
            $this->option = $post['option'];
        }
    }
    protected function add()
    {
        $this->result = $this->firstnumber + $this->lastnumber ;
        return $this->result;
    }
    protected function sub()
    {
        $this->result = $this->firstnumber - $this->lastnumber ;
        return $this->result;
    }
    protected function mul()
    {
        return $this->firstnumber * $this->lastnumber ;

    }
    protected function div()
    {
        return $this->firstnumber / $this->lastnumber ;
    }
    protected function mod()
    {
        return $this->firstnumber % $this->lastnumber ;
    }


    public function index()
    {
        switch ($this->option)
        {
            case'+';
            $this->result = $this->add();
            break;
            case'-';
                $this->result = $this->sub();
            break;
            case'*';
                $this->result = $this->mul();
            break;
            case'/';
                $this->result = $this->div();
            break;
            case'%';
                $this->result = $this->mod();
            break;
        }
        return $this->result;
    }
}