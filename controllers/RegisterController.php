<?php
require_once '../models/Registered.php';
require_once '../views/RegisterView.php';
require_once '../views/LoginView.php';
require_once '../views/MainView.php';
require_once '../views/RedirectView.php';

global $errors, $com;
class RegisterController
{
  public function add()
  {
    if (!empty($_POST)) 
    {
      $email = $_POST["email"];
      $login = $_POST["login"];
      $haslo = $_POST["haslo"];
      $powtorz_haslo = $_POST["powtorz_haslo"];
      $wszystko_OK = true;

      $user = new Registered($email, $login, $haslo, $powtorz_haslo);

      $user->check_password($wszystko_OK, $errors);
      $user->check_login($wszystko_OK, $errors);
      $user->check_email($wszystko_OK, $errors);

      if ($wszystko_OK == true) {
        $user->dodawanie($com);

        http_response_code(303);
        return new LoginView($com);
      } else {
        http_response_code(400);
        return new RegisterView($errors);
      }
    } else
    return new RedirectView('/register', 400);
  }
  
  public function register()
  {
    if (isset($_SESSION['login'])) 
    {
      $com="HEJ, TUTAJ! Jesteś już zarejestrowany.";
      http_response_code(406);
      return new MainView($com);
    }
    return new RegisterView();
  }
}
