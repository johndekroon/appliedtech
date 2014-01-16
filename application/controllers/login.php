<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->library('session');

	}	 
	
	public function auth()
	{
		$username = $this->input->post("username");
		$password = sha2($this->input->post("password"));
		
		$users = getUsers();
		
		foreach($users as $user)
		{
			if($username === $user['username'] && $password === $user['password'])
				$this->_login($user);
		}
		redirect("proto?error=1");
	}
	
	public function login($user)
	{
		$this->session->set_userdata($user);
		redirect("proto");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/proto.php */