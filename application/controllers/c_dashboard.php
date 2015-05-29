<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('v_dashboard');
	}

}

/* End of file c_dashboard.php */
/* Location: ./application/controllers/c_dashboard.php */