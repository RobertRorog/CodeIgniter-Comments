<?php
class welcome_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    
    function form_insert($data){
        $this->db->insert('comments', $data);
    }
    
    function all_comments(){
        $this->db->select('*');
        $this->db->from('comments');
        $this->db->order_by("id","desc");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } 
        else {
            return false;
        }
    }
    
}
