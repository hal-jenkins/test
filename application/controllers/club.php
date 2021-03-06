<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Club extends CI_Controller {

	/**
	 * Index Page for this controller. ss
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
    public function __construct()
    {
        parent::__construct();
       $this->load->model('club_model'); 
    }
    
    public function index()
    {
        //$this->load->model('club_model');
        $data['clubs'] = $this->club_model->get_clubs();
        $this->load->view('club_list', $data);
    }
        
    public function clubdetail($id)
    {
        //$this->load->model('club_model');
        $data['clubs'] = $this->club_model->get_club($id);
        $this->load->view('club_detail', $data);

    }
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */