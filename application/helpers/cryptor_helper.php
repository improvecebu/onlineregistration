<?php

function encrypt($str) {
  $obj = &get_instance();
  $obj->load->library('cryptor');
  $obj->cryptor->set_key(config_item('crpytor_key'));
  return $obj->cryptor->encrypt($str);
}

function decrypt($str) {
  $obj = &get_instance();
  $obj->load->library('cryptor');
  $obj->cryptor->set_key(config_item('crpytor_key'));
  return $obj->cryptor->decrypt($str);
}
