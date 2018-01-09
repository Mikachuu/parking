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

				$query = $this->db->get_where('reginfo', array('id' => $slug));
			}

		public function getEmployees($slug = FALSE){
			if($slug === FALSE){
				$query = $this->db->get('reginfo');
				return $query->result_array();
			}

				$query = $this->db->get_where('reginfo', array('id' => $slug));
				return $query->row_array();
		}



		public function register_post(){
			$slug = url_title($this->input->post('employeeid'));

			$data = array(
						'employeeid' => $this->input->post('employeeid'),
						'fname'=>$this->input->post('fname'),
						'lname'=>$this->input->post('lname'),
						'email'=>$this->input->post('email'),
						'contact'=>$this->input->post('contact'),						
						'department'=>$this->input->post('department'),
						'password'=>$this->input->post('password'),
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
		
		public function count_notif()
		{
			$query = $this->db->select('notif')->where('notif',1)->count_all_results('reginfo');
			return $query;
		}
	}