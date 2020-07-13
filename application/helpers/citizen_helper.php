<?php

function citizen_form() {
  $obj = &get_instance();
  return array(
    'last_name' => $obj->input->post('last_name'),
    'first_name' => $obj->input->post('first_name'),
    'middle_name' => $obj->input->post('middle_name'),
    'address' => $obj->input->post('address'),
    'phone' => $obj->input->post('phone'),
    'email' => $obj->input->post('email'),
  );
}

function citizen_form_validate() {
  $obj = &get_instance();
  $obj->form_validation->set_rules('last_name', 'Last_name', 'required');
  $obj->form_validation->set_rules('first_name', 'First_name', 'required');
  $obj->form_validation->set_rules('middle_name', 'Middle_name', 'required');
  $obj->form_validation->set_rules('address', 'Address', 'required');
  $obj->form_validation->set_rules('phone', 'Phone', 'required');
  $obj->form_validation->set_rules('email', 'Email', 'required');
}