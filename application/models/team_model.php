<?php
    class Team_model extends CI_Model {
    
    var $pk_team_id   = '';
    var $team_grade = '';
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        //
        $this->load->database();
    }
    
    function get_teams()
        {
            $query = $this->db->get('team');
            return $query->result_array();
        }
        
    function get_last_ten_entries()
    {
        $query = $this->db->get('team', 10);
        return $query->result();
    }
    
    function insert_entry()
    {
        $this->team_grade = $_POST['team_grade']; // please read the below note
        
        $this->db->insert('team', $this);
    }
    
    function update_entry()
    {
        $this->db->where('pk_team_id', $id);
        $this->team_grade = $_POST['team_grade'];
        
        $this->db->update('team', $this, array('pk_team_id' => $_POST['pk_team_id']));
    }
    
}
?>