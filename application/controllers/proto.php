<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proto extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/proto
	 *	- or -  
	 * 		http://example.com/index.php/proto/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/proto/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}	 
	
	public function index()
	{
		$this->viewloader('home');
	}
	
	public function about()
	{
		$this->viewloader('about');
	}
	
	public function experience()
	{
		
		$this->load->view('experience');
		
	}
	public function viewloader($view, $data = null)
	{
		$this->load->view('general/header');
		$this->load->view($view, $data);
		$this->load->view('general/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/proto.php */