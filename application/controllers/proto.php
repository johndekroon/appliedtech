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
		$this->load->helper('proto');
		$this->load->helper('form');
		$this->load->library('session');
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
		$this->viewloader('experience');
	}
	public function experienceRoute()
	{
		$this->viewloader('experienceRoute');
	}
	
	public function route()
	{
		$this->viewloader('route');
	}
	
	public function randomRoute()
	{
		$this->viewloader('randomRoute');
	}
	
	public function preferenceRoute()
	{
		$this->viewloader('preferenceRoute');
	}
	
	public function navigate($id)
	{
		if(empty($id))
			redirect("proto/experience");

		$data['id'] = $id;
		$this->viewloader('navigate', $data);
	}
	
	public function profile()
	{
		$username = $this->session->userdata('username');
		if(empty($username))
			redirect("proto/index");
		
		$data['username'] = $username;
		$this->viewloader("profile");
	}
	
	public function stores()
	{
		$this->viewloader("stores");	
	}
	
	public function history()
	{
		$this->viewloader("geschiedenis");	
	}
	
	public function viewloader($view, $data = null)
	{
		$header = array();
		
		$header["username"] = $this->session->userdata('username');
		
		$this->load->view('general/header', $header);
		$this->load->view($view, $data);
		$this->load->view('general/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/proto.php */