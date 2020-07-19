<?php
require_once '../models/Image.php';
require_once '../views/GalleryView.php';
require_once '../views/GalleryUserView.php';
require_once '../views/RedirectView.php';
class ImageController
{
  public function gallery()
  {
    return new GalleryView();
  }

  public function gallery_user()
  {
    return new GalleryUserView();
  }

  public function add()
  {
    if (!empty($_POST)) {
      if (isset($_POST['radio']) && $_POST['radio'] == 'private') {
        $_SESSION['radio'] = $_SESSION['login'];
      }
      $title = $_POST['title'];
      $author = $_POST["author"];
      $watermark = $_POST["watermark"];
      $target_dir = "oryginalne/";
      $image = $_FILES['fileToUpload'];
      $file_name = basename($image["name"]);
      $target_file = $target_dir . $file_name;
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
      global $errors, $com;

      $photo = new Image($title, $author, $watermark, $imageFileType, $target_file, $file_name);

      $photo->check($errors);

      if (!(isset($errors))) {
        $photo->create();
        $photo->insert();
        $com = "Poprawny przesył zdjęcia!";

        http_response_code(303);
        return new GalleryView($com);
      } else {
        $com = "";

        http_response_code(400);
        return new GalleryView($com, $errors);
      }
    } else {
      return new RedirectView('/gallery', 400);
    }
  }

  public function remember()
  {
    if (!empty($_POST)) {
      for ($i = 0; $i < 10; $i++) {
        if (isset($_POST[$i])) {
          $strona = $i;
          unset($_POST[$i]);
        }
      }
      unset($_SESSION['name'][$strona]);

      if (isset($_POST['photo'])) {
        $photos = $_POST['photo'];
      } else {
        return new GalleryView();
      }
      $count = count($photos);

      for ($i = 0; $i < $count; $i++) {
        $_SESSION['name'][$strona][$i] = $photos[$i];
      }
    }
    return new GalleryView();
  }

  public function unremember()
  {
    if (!empty($_POST)) {
      for ($i = 0; $i < 10; $i++) {
        if (isset($_SESSION['name'][$i])) {
          $strona = $i;
        }
      }

      if (isset($_POST['~photo'])) {
        $photos = $_POST['~photo'];
      } else {
        return new GalleryUserView();
      }
      $count = count($photos);

      for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j <= $strona; $j++) {
          if (isset($_SESSION['name'][$j])) {
            for ($k = 0; $k < 3; $k++) {
              if (isset($_SESSION['name'][$j][$k])) {
                if ($_SESSION['name'][$j][$k] == $_POST['~photo'][$i]) {
                  unset($_SESSION['name'][$j][$k]);
                  break 2;
                }
              }
            }
          }
        }
      }
    }
    return new GalleryUserView();
  }
}
