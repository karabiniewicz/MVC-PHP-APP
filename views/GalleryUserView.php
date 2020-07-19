<?php
require_once '../DB.php';

class GalleryUserView
{
  public function render()
  {
    $length = 0;
    $ile_zdjec_na_stronie = 3;
    $strona = 0;

    if (isset($_GET["page"])) {
      $strona = intval($_GET["page"]) - 1;
    }

    $i = 0;
    $checked = [];
    if (isset($_SESSION['name'])) {
      foreach ($_SESSION['name'] as $page) {
        foreach ($page as $photo) {
          if (isset($photo)) {
            $checked[$i] = $photo;
            $i++;
          }
        }
      }
    }

    sort($checked);
    $length = count($checked);
    $start = $strona * $ile_zdjec_na_stronie;
    $end = $start + $ile_zdjec_na_stronie;

    $name = [];
    for ($i = 0; $i < $length; $i++) {
      $name[$i] = $checked[$i];
    }

    function printTitAut($i, $files, &$title, &$author)
    {
      $query = [
        '_id' => $files[$i]
      ];
      $zdjecia = DB::get()->zdjecia->findOne($query);
      $title = $zdjecia['tytul'] . "<br/>";
      $author = $zdjecia['autor'];
    }

    $cnt = ceil(($length) / $ile_zdjec_na_stronie);

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
    
    include '../layouts/gallery_user.php';
  }
}
