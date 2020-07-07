<?php

class Employer_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insertEmployerJob($data){
        return $this->db->insert('joblist',$data);
    }

	public function getEmployer($email,$password){
		$query = $this->db->get_where('employer', array('email' => $email, 'password' => $password));
        return $query->result_array();
	}
}

?>