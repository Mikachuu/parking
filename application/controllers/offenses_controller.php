<?php
	class offenses_controller extends CI_Controller{

		public function __construct()
		{
			parent::__construct();

				$this->load->model('Post_model');
				$this->load->helper(array('form', 'url'));
			
		}

		// .....................

		// main page
		public function index()
		{


		}

		public function view_offenses()
		{
			 $data['tourist'] =$this->post_model->post_join();
			$this->load->view('templates/loginHeader');	
			$this->load->view('offenses_file/offenses_record', $data);
			$this->load->view('templates/footer');

		}
	}