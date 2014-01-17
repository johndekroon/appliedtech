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
		$password = sha1($this->input->post("pass"));

		$users = getUsers();
		
		foreach($users as $user)
		{
			if($username == $user['username'] && $password == $user['password'])
				$this->_login($user);
		}
		
		redirect("proto/index/?error=1");
	}
	
	public function _login($user)
	{
		$this->session->set_userdata($user);
		redirect("proto/index");
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect("proto/index");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/proto.php */