<?php

class Api extends CI_Controller {
  
  function __construct() {
    parent::__construct();
    $this->load->model('app_model');
  }

  function get_citizen() {
    $app = $this->app_model->read_by_token($this->input->post('token'));
    if ($app) {
      $citizen = $this->citizen_model->read_by_code($this->input->post('code'));
      echo json_encode(array('message' => 'OK', 'data' => $citizen));
    } else {
      echo json_encode(array('message' => 'Invalid token'));
    }
  }
}