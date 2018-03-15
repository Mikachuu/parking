<?php
	class Message extends CI_Controller{

		public function __construct()
		{
			parent::__construct();

				$this->load->model('Post_model');
				$this->load->helper(array('form', 'url'));
			
		}

		public function get_message()
		{

				$data['tourist'] = $this->post_model->get_posts();

				$this->load->view('templates/Header');
				$this->load->view('message_file/get_message');
				$this->load->view('templates/footer');
		}