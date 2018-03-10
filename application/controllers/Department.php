<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

	public function index() {
		$this->load->model('Department_Model');
		$this->load->model('Employee_Model');
		$data['dept'] = $this->Department_Model->list_department();
		$data['emp'] = $this->Employee_Model->list_employee();

		$this->load->view('ShowDepartment_View', $data);
	}

	public function insert() {
		if($this->input->post("Insert") != NULL) {
			$this->load->model("Department_Model");
			$this->Department_Model->insert_department();
			redirect("department");
		} else {
			$this->load->view('InsertDepartment_View');
		}
	}

	public function edit() {
		if($this->input->post("Edit") != NULL) {
			$this->load->model("Department_Model");
			$this->Department_Model->edit_department();
			redirect("department");
		} else {
			$dnumber = $this->uri->segment(3);
			$this->load->model("Department_Model");
			$data['dept'] = $this->Department_Model->list_department_by_dnumber($dnumber);
			$this->load->view("EditDepartment_View", $data);
		}
	}
	
	public function delete() {
		$dnumber = $this->uri->segment(3);
		$this->load->model('Department_Model');
		$this->Department_Model->delete_department($dnumber);
		redirect("department");
	}
}
