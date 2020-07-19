<?php

class MainView
{
  public $com;

  public function __construct($com="") {
    $this->com = $com;
  }

  public function render()
  {
    $com=$this->com;
    include '../layouts/main.php';
  }
}
