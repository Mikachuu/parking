<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->library('upload');

                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {

                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';


                $this->load->library('Upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
}
?>








<!-- <?php
// defined('BASEPATH') OR exit('No direct script access allowed');

 -->