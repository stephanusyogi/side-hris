<?php
 //
defined('BASEPATH') OR exit('No direct script access allowed');

class Employer extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Xin_model');
		$this->load->model("Job_post_model");
		$this->load->model("Designation_model");
		$this->load->model("Department_model");
		$this->load->model("Xin_recruitment_model");
	}
	// post new job
	public function post_a_job() {		
		$data['title'] = $this->Xin_model->site_title();
		$data['subview'] = $this->load->view("frontend/employer_post_new", $data, TRUE);
		$this->load->view('frontend/layout/job_layout_main', $data); //page load
	}
	// manage jobs
	public function manage_jobs() {		
		$data['title'] = $this->Xin_model->site_title();
		$data['subview'] = $this->load->view("frontend/employer_manage_jobs", $data, TRUE);
		$this->load->view('frontend/layout/job_layout_main', $data); //page load
	}
	// candidates resumes
	public function candidates_resumes() {		
		$data['title'] = $this->Xin_model->site_title();
		$data['subview'] = $this->load->view("frontend/employer_resume", $data, TRUE);
		$this->load->view('frontend/layout/job_layout_main', $data); //page load
	}
	// change password
	public function change_password() {		
		$data['title'] = $this->Xin_model->site_title();
		$data['subview'] = $this->load->view("frontend/employer_change_password", $data, TRUE);
		$this->load->view('frontend/layout/job_layout_main', $data); //page load
	}
}