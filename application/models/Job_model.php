<?php

class Job_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function readJobs(){
        $query = $this->db->get('joblist');
        return $query->result_array();
    }

    public function insertJob($data){
        return $this->db->insert('joblist',$data);
    }

	public function searchJob($skill){
		
		$terms = explode(' ',str_replace(',',' ',$skill));
		
		foreach($terms as $term)
		{
		$this->db->or_like('job_skills', $term);
		$this->db->or_like('job_location', $term);
		$this->db->or_like('job_title', $term);
		}
                 
         $query = $this->db->get('joblist');
         return $query->result_array();
				 
	}

}

?>