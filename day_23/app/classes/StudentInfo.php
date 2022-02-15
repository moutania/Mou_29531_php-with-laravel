<?php


namespace App\classes;


class StudentInfo
{
    protected $name;
    protected $email;
    protected $phone;
    protected $value;
    protected $imageFile;
    protected $imageName;
    protected $imageDeroctory;

    public function __construct($post=null,$file=null)
    {
      if ($post)
      {
          $this->name = $post['name'];
          $this->email = $post['email'];
          $this->phone = $post['phone'];
          $this->value = $post;
      }
      if ($file)
      {
          $this->imageFile = $file['image'];

      }

    }
    public function index()
    {
//        $this->imageName = $_FILES['image']['name'];
//        $this->imageDeroctory = 'assets/img/upload/'.$this->imageName;
//        move_uploaded_file($_FILES['image']['tmp_name'], $this->imageDeroctory);
//        echo 'success';
//        $this->imageUpload();

        $db = 'db.txt';
        $file = fopen($db,'a');
        fwrite($file, "hello world");
        fclose($file);
        echo  'success';

    }
    protected function imageUpload()
    {
        $this->imageName = time().$this->imageFile ['name'];
        $this->imageDeroctory = 'assets/img/upload/' .$this->imageName;
        move_uploaded_file($this->imageFile['tmp_name'], $this->imageDeroctory);
        echo 'success';
    }
}