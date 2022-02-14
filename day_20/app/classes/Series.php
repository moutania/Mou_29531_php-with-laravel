<?php


namespace App\Classes;


class Series
{
    protected  $startingNumber;
    protected $endingNumber;
    protected $i;
    protected $result;
    protected $tempstart;
    protected $tempend;

    public  function  __construct($data = null)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber = $data['ending_number'];

    }

    public function index()
    {
//       for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
//       {
//          $this->result .= $this->i. ' ';
//       }
//           return$this->result;
        if($this->type == 'desc')
        {
           if ($this->startingNumber > $this->endingNumber)
           {
               $this->tempstart = $this->startingNumber;
               $this->tempend = $this->endingNumber;
           }
           else
           {
               $this->tempstart = $this->endingNumber;
               $this->tempend = $this->startingNumber;
           }
        }
         for ($this->i = $this->tempstart; $this->i >= $this->tempend; $this->i--)
        {
            $this->result .= $this->i. ' ';
        }
        return $this->result;

        else if($this->type == 'asc')
        {
           if ($this->startingNumber < $this->endingNumber)
           {
               $this->tempstart = $this->startingNumber;
               $this->tempend = $this->endingNumber;
           }
           else
           {
               $this->tempstart = $this->endingNumber;
               $this->tempend = $this->startingNumber;
           }
        }
         for ($this->i = $this->tempstart; $this->i <= $this->tempend; $this->i++)
        {
            $this->result .= $this->i. ' ';
        }
        return $this->result;

    }
}