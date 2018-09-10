<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Upload_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		$this->load->helper('url');
	}

	public function admin()

	{
		$this->load->view('templates/admin');
		$this->load->view('pages/admin', array('error' => ' ' ));
	}



	public function file_view()

	{
		$this->load->view('templates/header');
		$this->load->view('pages/file_view', array('error' => ' ' ));
	}


	public function do_upload()
	{
		$config = array(
	
		'upload_path' => './uploads/',
		'allowed_types' => "gif|jpg|png|jpeg|pdf",
		'overwrite' => TRUE,
		'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
		'max_height' => "1500",
		'max_width' => "1024"
		);


		$this->load->library('upload', $config);
		$this->upload->initialize($config);


		if($this->upload->do_upload('userfile'))
		{
			$data = array('upload_data' => $this->upload->data());
			// $this->load->view('pages/upload_success',$data);

				$this->form_validation->set_rules('employeeid', 'Employe ID', 'required');
				$this->form_validation->set_rules('fname', 'First Name', 'required');
				$this->form_validation->set_rules('lname', 'Last Name', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('contact', 'Contact Number', 'required');
				$this->form_validation->set_rules('department', 'Department', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('plateno', 'Plate Number', 'required');

				if($this->form_validation->run() === FALSE){

							$this->load->view('templates/header');
							$this->load->view('login/register_view.php', $data);
							$this->load->view('templates/footer');	
				} else{
					$this->post_model->register_post();
					// redirect('pages/success');
					$this->load->view('templates/header');
					$this->load->view('pages/success', $data);
					$this->load->view('templates/footer');	
				}

		}


		
		else
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('templates/header');
			$this->load->view('login/register_view', $error);
			$this->load->view('templates/footer');	
		}
		}

		public function register()
		{
			$data['title'] = 'create post';

			//rules for validation

				$this->form_validation->set_rules('employeeid', 'Employe ID', 'required');
				$this->form_validation->set_rules('fname', 'First Name', 'required');
				$this->form_validation->set_rules('lname', 'Last Name', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('contact', 'Contact Number', 'required');
				$this->form_validation->set_rules('department', 'Department', 'required');
				$this->form_validation->set_rules('password', 'Password', 'required');
				$this->form_validation->set_rules('plateno', 'Plate Number', 'required');
				// $this->form_validation->set_error_delimeters('<small class="text-error">','<small>');
				if($this->form_validation->run() === FALSE){

							$this->load->view('templates/header');
							$this->load->view('pages/file_view.php', $data);
							$this->load->view('templates/footer');	
				} else{
					$this->post_model->register_post();
					// redirect('posts');
				 $this->load->view('pages/success');
				}


		}

		}
?>