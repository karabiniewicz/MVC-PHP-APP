<?php
require_once '../views/SearchView.php';
require_once '../views/RedirectView.php';

class SearchController
{
  public function search()
  {
    return new SearchView();
  }
}
