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

	public function in(){
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'kardex')
		{
			redirect(base_url().'c_login');
		}
		$data['titulo'] = 'Bienvenido a Kardex-Ingreso';
		$this->load->view('v_kardexin',$data);
		}

		public function out(){
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'kardex')
		{
			redirect(base_url().'c_login');
		}
		$data['titulo'] = 'Bienvenido a Kardex-Salida';
		$this->load->view('v_kardexout',$data);
		}

		public function indet(){
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'kardex')
		{
			redirect(base_url().'c_login');
		}
		$data['titulo'] = 'Bienvenido a Kardex-Ingreso-Detalle';
		$this->load->view('v_kardexindet',$data);
		}

		public function outdet(){
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'kardex')
		{
			redirect(base_url().'c_login');
		}
		$data['titulo'] = 'Bienvenido a Kardex-Salida-Detalle';
		$this->load->view('v_kardexoutdet',$data);
		}

		public function inouthistorial(){
		if($this->session->userdata('perfil') == FALSE || $this->session->userdata('perfil') != 'kardex')
		{
			redirect(base_url().'c_login');
		}
		$data['titulo'] = 'Bienvenido a Kardex-Salida-Detalle';
		$this->load->view('v_kardexinouthistorial',$data);
		}

}