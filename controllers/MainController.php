<?php
require_once '../views/MainView.php';
require_once '../views/RedirectView.php';

class MainController
{
  public function main()
  {
    return new MainView();
  }

  public function logout()
  {
    session_unset();
        
    return new RedirectView('/', 200);
  }
}
