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
	 		$this->load->view('templates/Header');
			$this->load->view('login/login_view.php');
			$this->load->view('templates/footer');

    }

        public function register_user()
    {

        // $this->load->view('upload_form', array('error' => ' ' ));
        			//http://localhost/parking/main/login
	 		
	 		$this->load->view('templates/Header');
			$this->load->view('login/register_view.php');
			$this->load->view('templates/footer');

    }

/*5*/

    public function login()
		{
			//http://localhost/parking/main/login
	 		$data['title'] = 'Log In';
	 		$this->load->view('templates/header');
			$this->load->view('login/login_view', $data);
		}


    public function login_user()
		{
			//http://localhost/parking/main/login
	 		$data['title'] = 'Log In';
	 		$this->load->view('templates/header');
			$this->load->view('login/login_user', $data);
		}



	public function login_validation()
	{

			$this->load->library('form_validation');

			$this->form_validation->set_rules('admin_username', 'Admin ID', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			

			if($this->form_validation->run())
				{
						//true
						$admin_username = $this->input->post('admin_username');
						$password = $this->input->post('password'); 

						//model function

						$this->load->model('Post_model');

						if($this->Post_model->can_login($admin_username, $password))

						{					
									$session_data = array(

										'admin_id' => $admin_username,
										'fname' => $fname

										);

									$this->session->set_userdata($session_data);
									redirect(base_url('login/enter'));
								}
						else
						{
							$this->session->set_flashdata('error', 'Invalid Admin id or password');
							redirect(base_url('login/login'));
						}
				}

			else{

				//false no values
				$this->login();
			}
	}


	public function login_validation_user()
	{

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

						if($this->Post_model->can_login_user($employeeid, $password))

						{					
									$session_data = array(

										'employeeid' => $employeeid,
										'fname' => $fname,
											

										);

									$this->session->set_userdata($session_data);
									redirect(base_url('login/enter_user'));
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
			if($this->session->userdata('admin_id') != '')
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


		function enter_user(){
			if($this->session->userdata('employeeid') != '')
			{
					
					$this->load->view('templates/Header');		
					$this->load->view('login/user_profile');		
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