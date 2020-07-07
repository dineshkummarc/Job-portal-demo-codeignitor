<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		 $this->load->library('session');
		 $this->load->model('candidate_model');
		 $this->load->model('employer_model');
	}
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('register');
	}
	
	public function login()
	{
		$employeer = $this->input->post('0');
		$candidate = $this->input->post('1');
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		
		if(isset($employeer)){
		//search with given data
			//if found
			$result = $this->employer_model->getEmployer($email,$password);
			if($result){
				echo 'employeer login found ';
				$this->session->set_userdata('username', $result[0]['email']);
				$this->session->set_userdata('email', $result[0]['email']);
				$this->session->set_userdata('user_type', 'employer');
				$this->session->set_userdata('logged_in', TRUE);
				redirect(base_url('Jobs'));
			}
			else{
					$this->alert("INVALID EMPLOYER DATA",base_url('register'));
			}
        
		}
		else{
			
			$result = $this->candidate_model->getCandidate($email,$password);
			if($result){
				echo "candidate login found ";
				$this->session->set_userdata('username', $result[0]['username']);
				$this->session->set_userdata('user_type', 'candidate');
				$this->session->set_userdata('logged_in', TRUE);
				redirect(base_url());
			}
			else{
					$this->alert("INVALID CANDIDATE DATA",base_url('register'));
			}
			
			}

	}
	
	public function signin(){
		$candidate_data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'skill' => $this->input->post('skills')
        );
		$result = $this->candidate_model->insertCandidate($candidate_data);
	  
	  if($result){
		$this->alert("Successfully registered ... Please Login to continue",base_url('register'));
		
	  }
	  else{
		  	$this->alert("Unable to register...",base_url('register'));
		
	  }
	}
	
	public function logout(){
		
		 $this->session->unset_userdata('username');
        $this->session->unset_userdata('logged_in');
		$this->load->view('register');
	}
	
	public function addNewJob(){
		$job_data = array(
                'job_title' => $this->input->post('title'),
                'job_location' => $this->input->post('loc'),
                'job_skills' => $this->input->post('skills'),
                'job_salary' => $this->input->post('salary'),
				'job_company_name' => $this->input->post('com_name'),
                'job_description' => $this->input->post('description'),
                'job_experience' => $this->input->post('experience'),
                'job_employeer_email' => $this->session->userdata("email")
        );
		$result = $this->employer_model->insertEmployerJob($job_data);
	  
	  if($result){
		$this->alert("Job posted successfully",base_url('Jobs'));
		
	  }
	  else{
		  	$this->alert("Unable to add new Job...",base_url('addJob'));
		
	  }

	}
	
	function alert($message,$url) { 
		echo "<script>";
		echo " alert('$message');      
			window.location.href='$url';
			</script>";
	} 
	
}
