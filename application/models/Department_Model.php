<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_Model extends CI_Model {

	function list_department() {
        	$result = $this->db->get("Department");
        	return $result->result_array();
	}

	function list_department_by_dnumber($dnumber) {
		$this->db->where('dnumber', $dnumber);
		$result = $this->db->get('Department');
		return $result->result_array();
	}

	function insert_department() {
		$data = array(
			'dnumber' => $this->input->post("dnumber"),
			'dname' => $this->input->post("dname")
		);
		$this->db->insert('Department', $data);	
	}

	function edit_department() {
		$data = array(
			'dname' => $this->input->post("dname"),
		);
		$this->db->where('dnumber', $this->input->post('dnumber'));
		$this->db->update('Department', $data);
	}

	function delete_department($dnumber) {
		$this->db->where('dnumber', $dnumber);
		$this->db->delete('Department');
	}
} 
