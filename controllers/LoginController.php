<?php
require_once '../models/Login.php';
require_once '../views/LoginView.php';
require_once '../views/MainView.php';
require_once '../views/RedirectView.php';

class LoginController
{
  public function login()
  {
    if (isset($_SESSION['login'])) 
    {
      $com="HEJ, TUTAJ! Jesteś już zalogowany.";
      http_response_code(406);
      return new MainView($com);
    }
    return new LoginView();
  }

  public function connect()
  {
    if (!empty($_POST)) 
    {
      $login = ($_POST['login']);
      $haslo = ($_POST['haslo']);

      $user = new Login($login, $haslo);

      if($user->check_log())
      {
        if($user->check_pass())
        {
          $_SESSION['login']= $login;
          return new RedirectView('/', 200);
        }
        else
        {
          $com= "Niepoprawne hasło!";
          http_response_code(400);
          return new LoginView($com);
        }
      }
      else
      {
        $com= "Niepoprawny login!";
        http_response_code(400);
        return new LoginView($com);
      }
    }
    else
    return new RedirectView('/login', 400);
  }
}
