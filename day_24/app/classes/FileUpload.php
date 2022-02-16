<?php


namespace App\classes;


class FileUpload
{
    protected $name;
    protected $email;
    protected $phone;
    protected $value;
    protected $imageFile;
    protected $result;
    protected $imageName;
    protected $imagepath;
    protected $imageDirectory;
    protected $filePath;
    protected $file;
    protected $data;
    protected $imageFilename;
    protected $array;
    protected $array1;
    protected $array2;
    protected $key;


    public function __construct($file=null, $post=null)
    {
        if ($post)
        {
            $this->name = $post['name'];
            $this->name = $post['email'];
            $this->name = $post['phone'];
            $this->value = $post;
        }
        if ($file)
        {
            $this->imageFilename = $file['image'];

        }

    }
    public function index()
    {
        $this->imagepath = $this->imageUpload();
        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->data = "$this->name,$this->email,$this->phone,$this->imagepath".PHP_EOL;
//        foreach ($this->value as $item)
//        {
//            fwrite($this->file,$this.',');
//        }
//        fwrite($this->file, 'hello world');
        fwrite($this->file, $this->data);
        fclose($this->file);
//        echo 'success';
        return 'data saved successfully.';
    }
    protected function imageUpload()
    {
        $this->imageName = time().$this->imageFilename['name'];
        $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($this->imageFilename['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;

    }
    public function getAllStudentInfo()
    {
        $this->filePath = 'db/db.txt';
        $this->data = file_get_contents($this->filePath);
        return explode('$',  $this->data);
        foreach ($this->array as $key => $value)
        {
            $this->array2 = explode(',', $value);
            if ($this->array2[0])
            {
                $this->array1[0]['name'] = $this->array2[0];
                $this->array1[0]['email'] = $this->array2[1];
                $this->array1[0]['phone'] = $this->array2[2];
                $this->array1[0]['image'] = $this->array2[3];
            }


        }
        return $this->array1;

    }
}