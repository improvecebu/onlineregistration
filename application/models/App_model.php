<?php

class App_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function find_all() {
    return $this->db->get('apps')->result();
  }

  function read($id) {
    return $this->db->get_where('apps', array('id' => $id))->row();
  }

  function save($app) {
    $this->db->insert('apps', $app);
  }

  function update($app, $id) {
    $this->db->update('apps', $app, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('apps', array('id' => $id));
  }

}