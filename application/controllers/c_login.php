<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->database('default');
	}

	public function index()
		{	
			switch ($this->session->userdata('perfil')) {
				case '':
					$data['token'] = $this->token();
					$data['titulo'] = 'Login con roles de usuario en codeigniter';
					$this->load->view('v_login',$data);
					break;
				case 'administracion':
					redirect(base_url().'c_administracion');
					break;
				case 'kardex':
					redirect(base_url().'c_kardex');
					break;	
				case 'produccion':
					redirect(base_url().'c_produccion');
					break;
				case 'reporte':
					redirect(base_url().'c_reporte');
					break;
				default:
					$data['titulo'] = 'Login con roles de usuario en codeigniter';
					$this->load->view('v_login',$data);
					break;
			}
		}
	 
	public function new_user()
		{
			if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
			{
	            $this->form_validation->set_rules('username', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
	            $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[5]|max_length[150]|xss_clean');
	 
	            //lanzamos mensajes de error si es que los hay
	            
				if($this->form_validation->run() == FALSE)
				{
					$this->index();
				}else{
					$username = $this->input->post('username');
					$password = sha1($this->input->post('password'));
					$check_user = $this->m_login->login_user($username,$password);
					if($check_user == TRUE)
					{
						$data = array(
		                'is_logued_in' 	=> 		TRUE,
		                'id_usuario' 	=> 		$check_user->id,
		                'perfil'		=>		$check_user->perfil,
		                'username' 		=> 		$check_user->username
	            		);		
						$this->session->set_userdata($data);
						$this->index();
					}
				}
			}else{
				redirect(base_url().'c_login');
			}
		}
		
		public function token()
		{
			$token = md5(uniqid(rand(),true));
			$this->session->set_userdata('token',$token);
			return $token;
		}
		
		public function logout_ci()
		{
			$this->session->sess_destroy();
			redirect('c_login', 'refresh');
		}
}

/* End of file c_login.php */
/* Location: ./application/controllers/c_login.php */