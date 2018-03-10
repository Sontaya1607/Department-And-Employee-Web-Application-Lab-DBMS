<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

	public function list_employee() {
		$result = $this->db->get("Employee");
		return $result->result_array();
	}

	function list_employee_by_ssn($ssn) {
		$this->db->where('ssn', $ssn);
		$result = $this->db->get('Employee');
		return $result->result_array();
	}

	function insert_employee() {
		$data = array(
			'name' => $this->input->post("name"),
			'ssn' => $this->input->post("ssn"),
			'dno' => $this->input->post("dno")
		);
		$this->db->insert('Employee', $data);	
	}

	function edit_employee() {
		$data = array(
			'name' => $this->input->post("name"),
			'dno' => $this->input->post("dno")
		);
		$this->db->where('ssn', $this->input->post('ssn'));
		$this->db->update('Employee', $data);
	}

	function delete_employee($ssn) {
		$this->db->where('ssn', $ssn);
		$this->db->delete('Employee');
	}
} 
