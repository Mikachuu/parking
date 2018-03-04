<?php 
	class Post_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}


		public function get_posts($slug = FALSE)
		{
			
			if($slug === FALSE){
				$query = $this->db->get('reginfo');
				return $query->result_array();
			}

				$query = $this->db->get_where('reginfo', array('id'=> $slug));
				return $query->result_array();
		}



		public function getEmployees($slug = FALSE){
			if($slug === FALSE){
				$query = $this->db->get('reginfo');
				return $query->result_array();
			}

				$query = $this->db->get_where('reginfo', array('id' => $slug));
				return $query->row_array();
		}



		public function register_post($post_image){
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
			return $this->db->insert('reginfo',$data);
		}
		

		function can_login($employeeid, $password){

			$this ->db->where('employeeid', $employeeid);
			$this->db->where('password', $password);
			
			$query = $this->db->get('reginfo');

			//SELECT * FROM reginfo WHERE employeeid = '$employeeid' AND password = '$password'

			if($query->num_rows()>0)
			{
					return true;
			}
			else

			{
				return false;  
			}
		}

			function can_login_user($employeeid, $password){

			$this ->db->where('employeeid', $employeeid);
			$this->db->where('password', $password);
			$this->db->where('fname', $fname);
			
			$query = $this->db->get_where('reginfo', array('employeeid' => $employeeid));
			$query = $this->db->get_where('reginfo', array('employeeid' => $employeeid));

			//SELECT * FROM reginfo WHERE employeeid = '$employeeid' AND password = '$password'

			if($query->num_rows()>0)
			{
					return true;
			}
			else

			{
				return false;  
			}
		}
		
		public function count_notif()
		{
			$query = $this->db->select('notif')->where('notif',1)->count_all_results('reginfo');
			return $query;
		}

		public function update_post(){
			// echo $this->input->post('id');die();

			$data = array(
				'notif' => 0, 
				
				'rfidno' => $this->input->post('rfidno')
			);
			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('reginfo', $data);
		}


		public function get_newreg($slug = FALSE)
		{

				$query = $this->db->get_where('reginfo', array('notif'=>1));
				return $query->result_array();
		}


		public function post_join(){

			$this->db->select('
				reginfo.id,
				reginfo.employeeid,
				reginfo.fname,
				reginfo.lname,
				reginfo.email,
				reginfo.contact,
				reginfo.department,
				reginfo.plateno,
				reginfo.rfidno,
				parking_tbl.timein,
				parking_tbl.timeout,
				TIMEDIFF(parking_tbl.timeout, parking_tbl.timein) as date_stay', FALSE);
			$this->db->from('reginfo');
			$this->db->join('parking_tbl', 'parking_tbl.rfidno = reginfo.rfidno');
			$query = $this->db->get();


			 return $query->result_array();


		}
	}