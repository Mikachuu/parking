<?php
	class Signup_user extends CI_Controller{

		public function __construct()
		{
			parent::__construct();

				$this->load->model('Post_model');
				$this->load->helper(array('form', 'url'));
			
		}

		// .....................

		// main page
		public function reg_user()
		{

			
	 // $data['user_signup'] =$this->post_model->register_user();


			$this->load->view('templates/loginHeader');	
			$this->load->view('user/register_user', $data);
			$this->load->view('templates/footer');
			
		}

	}