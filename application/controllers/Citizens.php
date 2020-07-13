<?php

class Citizens extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('citizen_model');
  }

  function index() {
    $data['citizens'] = $this->citizen_model->find_all();
    $this->layout->view('citizens/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $citizen = citizen_form();
      citizen_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->citizen_model->save($citizen);
        redirect('citizens');
      }
    }
    $this->layout->view('citizens/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $citizen = citizen_form();
      citizen_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->citizen_model->update($citizen, $id);
        redirect('citizens');
      }
    }
    $data['citizen'] = $this->citizen_model->read($id);
    $this->layout->view('citizens/edit', $data);
  }

  function delete($id) {
    $this->citizen_model->delete($id);
    redirect('citizens');
  }

}