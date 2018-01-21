<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('Post_model');
    }

    public function index()
    {

        // $this->load->view('upload_form', array('error' => ' ' ));
        			//http://localhost/parking/main/login
	 		$data['title'] = 'Log In';
	 		$this->load->view('templates/header', $data);
			$this->load->view('login/login_view.php');

    }

    public function register()
    {
    	$this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');
    	$this->form_validation->set_rules('employeeid', 'Employe ID', 'required');
    	$this->form_validation->set_rules('fname', 'First Name', 'required');
    	$this->form_validation->set_rules('lname', 'Last Name', 'required');
    	$this->form_validation->set_rules('email', 'Email', 'required');
    	$this->form_validation->set_rules('contact', 'Contact Number', 'required');
    	$this->form_validation->set_rules('department', 'Department', 'required');
    	$this->form_validation->set_rules('password', 'Password', 'required');
    	$this->form_validation->set_rules('plateno', 'Plate Number', 'required');

    	$config = array(
    	
    	'upload_path' => './uploads/',
    	'allowed_types' => "gif|jpg|png|jpeg|pdf",
    	'overwrite' => TRUE,
    	'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
    	'max_height' => "1500",
    	'max_width' => "1024"
    	);
    	$this->load->library('upload', $config);
    	$this->upload->initialize($config);

    	if (($this->form_validation->run()==true) && ($this->upload->do_upload()==true))
    	{
    		// register successful
    		$data = array('upload_data' => $this->upload->data());
    		$post_image = $_FILES['userfile']['name'];
    		$this->Post_model->register_post($post_image);
    		$this->load->view('templates/header', $data);
    		$this->load->view('pages/success');
    		$this->load->view('templates/footer');	
    	}
    	else
    	{
    		// register failed
    		$error = array('error' => $this->upload->display_errors());
    		$this->load->view('templates/header', $error);
    		$this->load->view('login/register_view.php');
    		$this->load->view('templates/footer');
    	}
    }

    public function login()
		{
			//http://localhost/parking/main/login
	 		$data['title'] = 'Log In';
	 		$this->load->view('templates/header');
			$this->load->view('login/login_view', $data);
		}



	public function login_validation(){

			$this->load->library('form_validation');

			$this->form_validation->set_rules('employeeid', 'Employee ID', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run())
			{
				//true
				$employeeid = $this->input->post('employeeid');
				$password = $this->input->post('password'); 


				//model function

				$this->load->model('Post_model');

				if($this->Post_model->can_login($employeeid, $password))
				{
					$session_data = array(

						'employeeid' => $employeeid,
						'fname' => $fname

					);
					$this->session->set_userdata($session_data);
					redirect(base_url('login/enter'));

				}

				else
				{
					$this->session->set_flashdata('error', 'Invalid employee id or password');
					redirect(base_url('login/login'));
				}
			}

			else{

				//false no values
				$this->login();
			}
		}

		function enter(){
			if($this->session->userdata('employeeid') != '')
			{
					
					$this->load->view('templates/loginHeader');		
					$this->load->view('pages/inside');	
					$this->load->view('templates/footer');
					
			}
			else
			{
				redirect (base_url('login/login'));
			}
		}

		function logout()
		{
			$this->session->unset_userdata('employeeid');
			redirect(base_url().'login/login');
		}

		public function register_admin()
		{
			$this->load->view('templates/loginHeader');	
			$this->load->view('login/register_admin');
			$this->load->view('templates/footer');
		}
        
}
?>