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

				$data['messages_tbl'] = $this->post_model->get_posts_message();

				$this->load->view('templates/loginHeader');
				$this->load->view('message_file/get_message', $data);
				$this->load->view('templates/footer');
		}

		public function view_message($employeeid = NULL){
			$data['messages_tbl'] = $this->post_model->get_posts_message($employeeid);

			if(empty($data['messages_tbl']))
			{
				show_404();

			}
				$this->load->view('templates/loginHeader');
				$this->load->view('message_file/view_message', $data);
				$this->load->view('templates/footer');
		}

		public function snd_msg(){

			$this->post_model->send_message();
			redirect('message/view_message');
		}
	}