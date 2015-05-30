<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
/**
 * 
 */
class C_produccion extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
	}
	
	public function index()
	{
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'produccion')
		{
			redirect(base_url().'c_login');
		}
		$data['titulo'] = 'Bienvenido produccion';
		$this->load->view('v_produccion',$data);
	}

}