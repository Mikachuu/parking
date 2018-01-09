<?php
	class Posts extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Post_model');
		}



		public function index(){
				$data['title'] = 'Latest Post';

				$data['reginfo'] = $this ->post_model ->get_posts();
				
				$this->load->view('templates/loginHeader');
				$this->load->view('posts/index', $data);
				$this->load->view('templates/footer');
		}


		public function view_new_user(){
				$data['title'] = 'New users';

				$data['reginfo'] = $this ->post_model ->getEmployees();
				
				$this->load->view('templates/loginHeader');
				$this->load->view('posts/view_new_user', $data);
				$this->load->view('templates/footer');
		}

/*		public function view($slug = NULL){
			$data['post'] = $this->post_model->get_posts($slug);

			if(empty($data['post'])){
				show_404;
			}

			$data['title']=$data['post']['title'];

				$this->load->view('templates/header');
				$this->load->view('posts/index', $data);
				$this->load->view('templates/footer');
		}*/

		public function register(){
			$data['title'] = 'create post';

			//rules for validation

				$this->form_validation->set_rules('employeeid', 'Employe ID', 'required');
				$this->form_validation->set_rules('fname', 'First Name', 'required');
				$this->form_validation->set_rules('lname', 'Last Name', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('contact', 'Contact Number', 'required');
				$this->form_validation->set_rules('department', 'Department', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				// $this->form_validation->set_error_delimeters('<small class="text-error">','<small>');
				if($this->form_validation->run() === FALSE){

							$this->load->view('templates/header');
							$this->load->view('posts/register', $data);
							$this->load->view('templates/footer');	
				} else{
					$this->post_model->register_post();
					redirect('posts');
					// $this->load->view('posts/success');
				}


		}


		function login(){
			//http://localhost/parking/main/login
	 		$data['title'] = 'Log In';
	 		$this->load->view('templates/header', $data);
			$this->load->view('login.php');
			}



		function login_validation(){

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
						'fnamw' => $fname

					);
					$this->session->set_userdata($session_data);
					redirect(base_url() . 'Posts/enter');

				}

				else
				{
					$this->session->set_flashdata('error', 'Invalid employee id or password');
					redirect(base_url() . 'Posts/login');
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
					// $page_data = array(
					// 	'notif_count' => $this->Post_model->count_notif(), 
					// );
					
					$this->load->view('templates/loginHeader');		
					$this->load->view('pages/inside');	
					$this->load->view('templates/footer');
					
			}
			else
			{
				redirect (base_url().'Posts/login');
			}
		}

		function logout()
		{
			$this->session->unset_userdata('employeeid');
			redirect(base_url().'Posts/login');
		}
	}