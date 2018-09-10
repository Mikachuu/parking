<?php
	class Main extends CI_Controller{

		public function __construct()
		{
			parent::__construct();

				$this->load->model('Post_model');
				$this->load->helper(array('form', 'url'));
			
		}

		// ....................

		// main page
		public function index()
		{

			
				$this->load->view('templates/header');
				$this->load->view('login/login_view.php');
			
		}

		public function view($slug = NULL){
			$data['user_tbl'] = $this->post_model->get_posts($slug);

			if(empty($data['user_tbl']))
			{
				show_404();

			}

		


				$this->load->view('templates/loginHeader');
				$this->load->view('pages/view', $data);
				$this->load->view('templates/footer');
		}

		public function update(){

			$this->post_model->update_post();
			redirect('Main/records');
		}																																																													
		public function count_notif()
		{
			$query = $this->db->select('notif')->where('notif',0)->count_all_results('tourist');
			return $query;
		}


		public function view_new_user(){
				$data['title'] = 'New users';

				$data['tourist'] = $this ->post_model ->getEmployees();
				
				$this->load->view('templates/loginHeader');
				$this->load->view('posts/view_new_user', $data);
				$this->load->view('templates/footer');
		}

		public function records(){
				// $data['title'] = 'Latest Post';

				$data['user_tbl'] = $this ->post_model ->get_newreg();
	
				
				$this->load->view('templates/loginHeader');
				$this->load->view('posts/new_reg', $data);
				$this->load->view('templates/footer');
		}

 public function record_join()
    {	
    
  
   		 $data['tourist'] =$this->post_model->post_join();


			$this->load->view('templates/loginHeader');	
			$this->load->view('pages/parking_records', $data);
			$this->load->view('templates/footer');
    }


	}