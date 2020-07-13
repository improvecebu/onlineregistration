<?php

function app_form() {
  $obj = &get_instance();
  return array(
    'name' => $obj->input->post('name'),
    'token' => $obj->input->post('token'),
  );
}

function app_form_validate() {
  $obj = &get_instance();
  $obj->form_validation->set_rules('name', 'Name', 'required');
  $obj->form_validation->set_rules('token', 'Token', 'required');
}