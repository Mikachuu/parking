<?php
	class Incident extends CI_Controller{

		public function __construct()
		{
			parent::__construct();

				$this->load->model('Post_model');
				$this->load->helper(array('form', 'url'));
			
		}

		public function view_incident()
		{

			$data['incidentreport_tbl'] = $this ->post_model ->get_incident();

			$this->load->view('templates/loginHeader');
			$this->load->view('incidents/incident_page',$data);
			$this->load->view('templates/footer');

		}

		public function assist_incident($id)
		{

			$data['incidentreport_tbl'] = $this ->post_model ->fetch_incident($id);
            // redirect('Main/records');

            $this->load->view('templates/loginHeader');
            $this->load->view('incidents/view_incident_page', $data);
            $this->load->view('templates/footer');

		}
	}