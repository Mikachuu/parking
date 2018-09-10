<?php 
	class Post_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}


		public function get_posts($slug = FALSE)
		{
			
			if($slug === FALSE){
				$query = $this->db->get('user_tbl');
				return $query->result_array();
			}

				$query = $this->db->get_where('user_tbl', array('id'=> $slug));
				return $query->result_array();
		}

		public function get_slot_manager()
		{
			
	
				$query = $this->db->get('listofslots_tbl');
				return $query->result_array();

		}

		public function get_incident()
		{
			
	
				$query = $this->db->get('incidentreport_tbl');
				return $query->result_array();

		}

		public function get_posts_message($employeeid = FALSE)
		{
			
						$this->db->select('
							messages_tbl.employeeid,
							messages_tbl.title,
							messages_tbl.message,
							messages_tbl.date,
							tourist.tour_fN,
							tourist.tour_mN,
							tourist.tour_lN');

				
						$this->db->from('tourist');
						$this->db->join('messages_tbl', 'tourist.employeeid = messages_tbl.employeeid');
						$query = $this->db->get();

						
						return $query->result_array();
		}


		public function getEmployees($slug = FALSE){
			if($slug === FALSE){
				$query = $this->db->get('user_tbl');
				return $query->result_array();
			}

				$query = $this->db->get_where('user_tbl', array('id' => $slug));
				return $query->row_array();
		}



		public function register_post($userfile){
			$slug = url_title($this->input->post('employeeid'));

			$data = array(
						'employeeid' => $this->input->post('employeeid'),
						'fname'=>$this->input->post('fname'),
						'mname'=>$this->input->post('mname'),
						'lname'=>$this->input->post('lname'),
						'email'=>$this->input->post('email'),
						'contact'=>$this->input->post('contact'),						
						'department'=>$this->input->post('department'),
						'occupation'=>$this->input->post('occupation'),
						'password'=>$this->input->post('password'),
						'plateno'=>$this->input->post('plateno'),
						'userfile'=>$this->input->post('$userfile'),
						// 'filename'=>$this->input->post('userfile'),
						'notif'=>$this->input->post('notif')
				);
			return $this->db->insert('user_signup',$data);
		}
		

		function can_login($admin_username, $password){

			$this ->db->where('admin_username', $admin_username);
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
			$query = $this->db->select('notif')->where('notif',0)->count_all_results('user_tbl');
			return $query;
		}

		public function count_inc()
		{
			$query = $this->db->select('status')->where('status',0)->count_all_results('incidentreport_tbl');
			return $query;
		}

		public function count_message()
		{
			$query = $this->db->select('employeeid')->count_all_results('messages_tbl');
			return $query;
		}

		public function count_records()
		{
			$query = $this->db->select('rfidno')->count_all_results('parking_tbl');
			return $query;
		}
/*		public function count_violations()
		{
			$query = $this->db->select('rfidno')->count_all_results('parking_tbl');
			return $query;
		}
*/

		public function count_violations()
		{
			$query = $this->db->select('rfidno')->count_all_results('parking_tbl');


			 return $query;
		}

		public function update_post(){
			// echo $this->input->post('id');die();

			$data = array(
				'notif' => 1, 
				
				'rfidno' => $this->input->post('rfidno')
			);

			$this->db->where('employeeid', $this->input->post('employeeid'));
			return $this->db->update('user_tbl', $data);

		}


		public function get_newreg($slug = FALSE)
		{
			//shows in table

				$query = $this->db->get_where('user_tbl', array('notif'=>0));
				return $query->result_array();
		}

		public function update_slots($list_id)
		{
				$query = $this->db->get_where('listofslots_tbl', array('list_id'=>$list_id));
				return $query->result_array();
		}

		public function fetch_incident($id)
		{
				$query = $this->db->get_where('incidentreport_tbl', array('id'=>$id));
				return $query->result_array();
		}

		public function updated_slot($list_array){
                  


	

			$this->db->where('list_id', $list_array['id']);
			$this->db->set('floor', $list_array['floor']);
			$this->db->set('slot', $list_array['slot']);
			$this->db->set('category', $list_array['category']);
			$this->db->set('status', $list_array['status']);
			$this->db->update('listofslots_tbl');
			if ($this->db->affected_rows()==1)
			{
					return true;
			}
			else{
				return false;
			}
			

		}

		public function post_join(){

			$this->db->select('
				tourist.tour_id,
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

		public function create_slot(){

			$new_slot_insert_data = array(
			'floor' => $this->input->post('floor'),
			'slot'=>$this->input->post('slot'),
			'category'=>$this->input->post('category'),
			'date_created'=>$this->input->post('date_created'),
			'status'=>$this->input->post('status')
		);
		$insert = $this->db->insert('listofslots_tbl', $new_slot_insert_data);
		return $insert;
		}
	}