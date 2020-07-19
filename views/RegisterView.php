<?php

class RegisterView
{
  public $errors;

  public function __construct($errors=[]) {
    $this->errors = $errors;
  }

  public function render()
  {
    $errors=$this->errors;
    include '../layouts/register.php';
  }
}
