<?php
    class Club_model extends CI_Model {
    
    var $pk_club_id   = '';
    var $club_name = '';
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        //
        $this->load->database();
    }

    function get_club($id)
    {   
        $query = $this->db->get_where('club', array('pk_club_id' => $id));
        //$query = $this->db->get('club');
        return $query->result_array();
    }
    
    function get_clubs()
        {
            $query = $this->db->get('club');
            return $query->result_array();
        }
        
    function get_last_ten_entries()
    {
        $query = $this->db->get('club', 10);
        return $query->result();
    }
    
    function insert_entry()
    {
        $this->club_name   = $_POST['club_name']; // please read the below note
        
        $this->db->insert('club', $this);
    }
    
    function update_entry()
    {
        $this->club_name   = $_POST['club_name'];
        
        $this->db->update('club', $this, array('pk_club_id' => $_POST['pk_club_id']));
    }
    
}
?>