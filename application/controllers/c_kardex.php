<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * 
 */
class C_kardex extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'kardex')
		{
			redirect(base_url().'c_login');
		}
		$data['titulo'] = 'Bienvenido kardex';
		$this->load->view('v_dashboard',$data);
	}
}