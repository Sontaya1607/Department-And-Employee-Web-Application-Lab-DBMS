<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

    public function index() {
		$this->load->model('Department_Model');
		$this->load->model('Employee_Model');
		$data['dept'] = $this->Department_Model->list_department();
		$data['emp'] = $this->Employee_Model->list_employee();

		$this->load->view('ShowDepartment_View', $data);
    }
    
	public function insert() {
		if($this->input->post("Insert") != NULL) {
			$this->load->model("Employee_Model");
			$this->Employee_Model->insert_employee();
			redirect("employee");
		} else {
			$this->load->model("Department_Model");
			$data['dept'] = $this->Department_Model->list_department();
			$this->load->view('InsertEmployee_View', $data);
		}
	}

	public function edit() {
		if($this->input->post("Edit") != NULL) {
			$this->load->model("Employee_Model");
			$this->Employee_Model->edit_employee();
			redirect("employee");
		} else {
			$ssn = $this->uri->segment(3);
			$this->load->model("Employee_Model");
			$this->load->model("Department_Model");
			$data['dept'] = $this->Department_Model->list_department();
			$data['emp'] = $this->Employee_Model->list_employee_by_ssn($ssn);
			$this->load->view("EditEmployee_View", $data);
		}
	}

	public function delete() {
		$ssn = $this->uri->segment(3);
		$this->load->model('Employee_Model');
		$this->Employee_Model->delete_employee($ssn);
		redirect("employee");
	}
}
