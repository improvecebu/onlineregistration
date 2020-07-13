<?php

class Home extends CI_Controller {
  function __construct() {
    parent::__construct();
  }

  function register() {
    $this->layout->view('home/register');
  }
}