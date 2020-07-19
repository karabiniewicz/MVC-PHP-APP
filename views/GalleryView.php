<?php
require_once '../DB.php';

class GalleryView
{
  public $com;
  public $errors;

  public function __construct($com="", $errors=[]) {
    $this->com = $com;
    $this->errors = $errors;
  }

  public function render()
  {
    $com=$this->com;
    $errors=$this->errors;
    $length = 0;
    $ile_zdjec_na_stronie = 3;
    $strona = 0;

    if (isset($_GET["page"])) {
      $strona = intval($_GET["page"]) - 1;
    }

    function GetPhotoByName($name)
    {
      $query = [
        '_id' => $name
      ];
      return DB::get()->zdjecia->findOne($query);
    }
    
    function CheckPublic($zdjecie, &$private)
    {
      $private = '';
      if (isset($zdjecie['private'])&& $zdjecie['private'] != '') { 
          if (isset($_SESSION['login'])) {
              if ($_SESSION['login'] == $zdjecie['private']) {
                  $private = "prywatne";
                  return true;
              }
          }
          return false;
      } else
          return true;
    }
    
    function CheckPrivate($i, $files, &$title, &$author, &$private)
    {
      $zdjecia = GetPhotoByName($files[$i]);
      $title = $zdjecia['tytul'] . "<br/>";
      $author = $zdjecia['autor'];
      CheckPublic($zdjecia,$private);      
    }

    $root = "zdjecia/";
    $files = scandir($root);
    sort($files);
    $length = count($files);
    $start = $strona * $ile_zdjec_na_stronie + 2;
    $end = $start + $ile_zdjec_na_stronie;

    $all= $length;
    for ($i = 2, $j = 2; $j < $all; $i++, $j++) {
      $zdjecie=GetPhotoByName($files[$j]);
      if(!CheckPublic($zdjecie,$private)){
        $length--;
        $i--;
      }else {
        $name[$i] = $files[$j];
      }
    }

    $cnt = ceil(($length - 2) / $ile_zdjec_na_stronie);

    $photo = array();
    function IsChecked($strona, $value)
    {
      if (!empty($_SESSION['name'][$strona])) {
        foreach ($_SESSION['name'][$strona] as $check) {
          if ($check == $value) {
            return true;
          }
        }
      }
      return false;
    }
    function UserLogIn()
    {
      if (isset($_SESSION['login'])) {
        return true;
      } else {
        return false;
      }
    }

    include '../layouts/gallery.php';
  }
}
