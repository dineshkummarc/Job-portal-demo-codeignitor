<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	
	function __construct() {
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('job_model');
		$this->data = $this->job_model->readJobs();
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
		$list = $this->data;
        $data['jobs'] = $list;
        $this->load->view('home_page',$data);
	}
	
	public function job()
	{
		$item = $this->data;
		$data['job'] = $item[$this->uri->segment(2)];
		$this->load->view('description',$data);
	}
	
	public function search(){
		$term = $this->input->post('search_term');
		$result = $this->job_model->searchJob($term);
		$data['searchResult'] = $result;
		$data['term'] = $term;
		$this->load->view('searchresult',$data);
	}
	
	public function adminAddJob()
	{
		if($this->checklogin())
		{
			$this->load->view('addJob_admin');
		}
	}
	
	public function adminJobList()
	{
		if($this->checklogin())
		{
			$list = $this->data;
			$data['jobs'] = $list;
			$this->load->view('allJobs_admin',$data);
		}
	}
	
	
	public function checklogin()
	{
		if($this->session->userdata('logged_in')){
			return true;
		}
		else{
			
			$this->alert("register or login first...",base_url('register'));
			
		}
	}
	
	function alert($message,$url) { 
		echo "<script>";
		echo " alert('$message');      
			window.location.href='$url';
			</script>";
	} 
	
}
