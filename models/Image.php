<?php
require_once '../DB.php';

class Image
{
  public $title;
  public $author;
  public $watermark;
  public $imageFileType;
  public $target_file;
  public $file_name;
  private $_id;

  public function __construct($title, $author, $watermark, $imageFileType, $target_file, $file_name)
  {
    $this->title = $title;
    $this->author = $author;
    $this->watermark = $watermark;
    $this->imageFileType = $imageFileType;
    $this->target_file = $target_file;
    $this->file_name = $file_name;
  }

  public function check(&$errors)
  {
    if ($_FILES["fileToUpload"]["size"] > 1024 * 1024) {
      $errors[0] = "Za duży plik";
    }

    if ($this->imageFileType != "jpg" && $this->imageFileType != "png") {
      $errors[1] = "To nie jest plik JPG lub PNG";
    }

    if (isset($errors)) {
      $errors[2] =  "Plik nie został załadowany";
    }
  }

  public function create()
  {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $this->target_file)) {

      if ($this->imageFileType == "png") {
        $im = imagecreatefrompng($this->target_file);
        $miniatura = imagecreatefrompng($this->target_file);
      } else {
        $im = imagecreatefromjpeg($this->target_file);
        $miniatura = imagecreatefromjpeg($this->target_file);
      }
      $color = imagecolorallocate($im, 105, 105, 105);

      $marge_right = 10;
      $marge_bottom = 10;
      $sx = imagesx($im);
      $sy = imagesy($im);

      imagestringup($im, 5, $sx / 5, $sy / 1.3, $this->watermark, $color);

      $icon = imagecreatetruecolor(200, 125);


      imagecopyresized($icon, $miniatura, 0, 0, 0, 0, 200, 125, imagesx($miniatura), imagesy($miniatura));


      imagejpeg($icon, "miniatury/" . basename($_FILES["fileToUpload"]["name"]));
      imagejpeg($im, "zdjecia/" . basename($_FILES["fileToUpload"]["name"]));
      imagedestroy($im);
    }
  }

  public function insert()
  {
    $query = [
      '_id' => $this->file_name
    ];
    $zdjecie = DB::get()->zdjecia->findOne($query);
    if(isset($_SESSION['radio']))
    {
      $private=$_SESSION['radio'];
    }
    else
    $private = '';

    if ($zdjecie == NULL) {
      $zdjecie = [
        '_id' => $this->file_name,
        'tytul' => $this->title,
        'autor' => $this->author,
        'private' => $private
      ];
      DB::get()->zdjecia->insertOne($zdjecie);  //$response
    } else {
      $zdjecie = [
        'tytul' => $this->title,
        'autor' => $this->author,
        'private' => $private
      ];
      DB::get()->zdjecia->replaceOne($query, $zdjecie); //$response
    }
  }
}
