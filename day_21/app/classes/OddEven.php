<?php


namespace App\Classes;


class OddEven
{
    protected $firstnumber;
    protected $lastnumber;
    protected $option;
    protected $result;

    public function __construct($post=null)
    {


        if ($post)
        {
            $this->firstNumber = $post['first_number'];
            $this->lastNumber = $post['last_number'];
            $this->option = $post['option'];
        }
    }
    public function index()
    {
        if ($this->firstnumber <$this->lastnumber)
        {
            for($this->i = $this->firstnumber; $this->i <= $this->lastnumber; $this->i++)
            {
                if ($this->option == 'even')
                {
                    if ($this->i%2 == 0)
                    {
                        $this->result .=$this->i.' ';
                    }
                    return $this->result;
                }
                elseif($this->option == 'odd')
                {
                    if ($this->i%2 == 0)
                    {
                        $this->result .=$this->i.' ';
                    }

                }

            }

        }
        elseif ($this->firstnumber> $this->lastnumber)
        {
            for($this->i = $this->lastnumber; $this->i <= $this->firstnumber; $this->i--)
//            for($this->i = $this->firstnumber; $this->i >= $this->lastnumber; $this->i--)
            {
                if ($this->option == 'even')
                {
                    if ($this->i%2 == 0)
                    {
                        $this->result .=$this->i.' ';
                    }
                    return $this->result;
                }
                elseif($this->option == 'odd')
                {
                    if ($this->i%2 == 0)
                    {
                        $this->result .=$this->i.' ';
                    }
                }
            }
        }


        return $this->result;
    }
}