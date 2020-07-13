<?php

class Apps extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('app_model');
  }

  function index() {
    $data['apps'] = $this->app_model->find_all();
    $this->layout->view('apps/index', $data);
  }

  function add() {
    if ($this->input->post()) {
      $app = app_form();
      app_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->app_model->save($app);
        redirect('apps');
      }
    }
    $this->layout->view('apps/add');
  }

  function edit($id) {
    if ($this->input->post()) {
      $app = app_form();
      app_form_validate();
      if ($this->form_validation->run() != FALSE) {
        $this->app_model->update($app, $id);
        redirect('apps');
      }
    }
    $data['app'] = $this->app_model->read($id);
    $this->layout->view('apps/edit', $data);
  }

  function delete($id) {
    $this->app_model->delete($id);
    redirect('apps');
  }

}