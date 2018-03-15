<?php 
	class Post_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}


		public function get_posts($slug = FALSE)
		{
			
			if($slug === FALSE){
				$query = $this->db->get('tourist');
				return $query->result_array();
			}

				$query = $this->db->get_where('tourist', array('userid'=> $slug));
				return $query->result_array();
		}



		public function getEmployees($slug = FALSE){
			if($slug === FALSE){
				$query = $this->db->get('tourist');
				return $query->result_array();
			}

				$query = $this->db->get_where('tourist', array('userid' => $slug));
				return $query->row_array();
		}



/*		public function register_post($post_image){
			$slug = url_title($this->input->post('employeeid'));

			$data = array(
						'employeeid' => $this->input->post('employeeid'),
						'fname'=>$this->input->post('fname'),
						'lname'=>$this->input->post('lname'),
						'email'=>$this->input->post('email'),
						'contact'=>$this->input->post('contact'),						
						'department'=>$this->input->post('department'),
						'password'=>$this->input->post('password'),
						'plateno'=>$this->input->post('plateno'),
						'post_image'=>$post_image,
						// 'filename'=>$this->input->post('userfile'),
						'notif'=>$this->input->post('notif')
				);
			return $this->db->insert('tourist',$data);
		}*/
		

		function can_login($admin_id, $password){

			$this ->db->where('admin_id', $admin_id);
			$this->db->where('password', $password);
			
			$query = $this->db->get('admin_tbl');

			//SELECT * FROM tourist WHERE employeeid = '$employeeid' AND password = '$password'

			if($query->num_rows()>0)
			{
					return true;
			}
			else

			{
				return false;  
			}
		}
/*
			function can_login_user($employeeid, $password){

			$this ->db->where('employeeid', $employeeid);
			$this->db->where('password', $password);
			$this->db->where('fname', $fname);
			
			$query = $this->db->get_where('tourist', array('employeeid' => $employeeid));
			$query = $this->db->get_where('tourist', array('employeeid' => $employeeid));

			//SELECT * FROM tourist WHERE employeeid = '$employeeid' AND password = '$password'

			if($query->num_rows()>0)
			{
					return true;
			}
			else

			{
				return false;  
			}
		}*/
		
		public function count_notif()
		{
			$query = $this->db->select('notif')->where('notif',0)->count_all_results('tourist');
			return $query;
		}

		public function count_message()
		{
			$query = $this->db->select('employeeid')->count_all_results('messages_tbl');
			return $query;
		}

		public function update_post(){
			// echo $this->input->post('id');die();

			$data = array(
				'notif' => 1, 
				
				'rfidno' => $this->input->post('rfidno')
			);
			$this->db->where('userid', $this->input->post('userid'));
			return $this->db->update('tourist', $data);
		}

		public function get_newreg($slug = FALSE)
		{
			//shows in table

				$query = $this->db->get_where('tourist', array('notif'=>0));
				return $query->result_array();
		}



		public function post_join(){

			$this->db->select('
				tourist.userid,
				tourist.employeeid,
				tourist.tour_fN,
				tourist.tour_mN,
				tourist.tour_lN,
				tourist.tour_address,
				tourist.tour_contact,
				tourist.email,
				tourist.tour_contact,
				tourist.plateno,
				tourist.rfidno,
				parking_tbl.timein,
				parking_tbl.timeout,
				TIMEDIFF(parking_tbl.timeout, parking_tbl.timein) as date_stay', FALSE);
			$this->db->from('tourist');
			$this->db->join('parking_tbl', 'parking_tbl.rfidno = tourist.rfidno');
			$query = $this->db->get();


			 return $query->result_array();


		}
	}