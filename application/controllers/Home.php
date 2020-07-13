<?php

class Home extends CI_Controller {
  
  function __construct() {
    parent::__construct();
    $this->load->model('citizen_model');
  }

  function index() {
    $this->layout->view('home/index');
  }

  function register() {
    if ($this->input->post()) {
      $citizen = registration_form();
      $this->citizen_model->save($citizen);
    }
    $this->layout->view('home/register');
  }
}