<?php
	class Main extends CI_Controller{

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

				$data['reginfo'] = $this->post_model->get_posts();

				$this->load->view('templates/Header');
				$this->load->view('pages/home');
				$this->load->view('templates/footer');
		}

		public function view($slug = NULL){
			$data['reginfo'] = $this->post_model->get_posts($slug);

			if(empty($data['reginfo']))
			{
				show_404();

			}
				$this->load->view('templates/loginHeader');
				$this->load->view('pages/view', $data);
				$this->load->view('templates/footer');
		}

		public function update(){

			$this->post_model->update_post();
			redirect('login/enter');
		}


		public function records(){
				// $data['title'] = 'Latest Post';

				$data['reginfo'] = $this ->post_model ->get_newreg();
	
				
				$this->load->view('templates/loginHeader');
				$this->load->view('posts/new_reg', $data);
				$this->load->view('templates/footer');
		}

		public function count_notif()
		{
			$query = $this->db->select('notif')->where('notif',1)->count_all_results('reginfo');
			return $query;
		}


		public function view_new_user(){
				$data['title'] = 'New users';

				$data['reginfo'] = $this ->post_model ->getEmployees();
				
				$this->load->view('templates/loginHeader');
				$this->load->view('posts/view_new_user', $data);
				$this->load->view('templates/footer');
		}


	}