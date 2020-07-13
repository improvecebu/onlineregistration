<?php

class Citizen_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function find_all() {
    return $this->db->get('citizens')->result();
  }

  function read($id) {
    return $this->db->get_where('citizens', array('id' => $id))->row();
  }

  function save($citizen) {
    $this->db->insert('citizens', $citizen);
  }

  function update($citizen, $id) {
    $this->db->update('citizens', $citizen, array('id' => $id));
  }

  function delete($id) {
    $this->db->delete('citizens', array('id' => $id));
  }

}