<?php

class Candidate_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insertCandidate($data){
        return $this->db->insert('candidate',$data);
    }

    public function getCandidate($email,$password){
        $query = $this->db->get_where('candidate', array('email' => $email, 'password' => $password));
        return $query->result_array();
    }

}

?>