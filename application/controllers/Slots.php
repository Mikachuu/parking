<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Slots extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();

       
        $this->load->model('Post_model');
    }

public function view_slot()
    {
                $this->load->view('templates/loginHeader');
                $this->load->view('slots/slots_page');
                $this->load->view('templates/footer');
    }


public function create()
    {

        $this->form_validation->set_rules('floor', 'Floor','required');

        if ($this->form_validation->run()==FALSE){ //didnt return value
            $this->load->view('templates/loginHeader');
            $this->load->view('slots/slots_page');
        }
        else{

        // $this->load->model('membership_model');
        
        if ($query=$this->Post_model->create_slot()){
            $this->session->set_flashdata('slot_success', 'Slot Added');
            $data['SLOT_created'] = 'slot has been added';

            $this->load->view('templates/loginHeader');
            $this->load->view('slots/slots_page', $data);
           
        }
        
    }
}
public function view_manage(){

    $data['listofslots_tbl'] = $this ->post_model ->get_slot_manager();

        $this->load->view('templates/loginHeader');
        $this->load->view('slots/manage_slots.php', $data);
        $this->load->view('templates/footer');
    }

public function edit_slot($list_id = NULL){
            
            $data['listofslots_tbl'] = $this ->post_model ->update_slots($list_id);
            // redirect('Main/records');

            $this->load->view('templates/loginHeader');
            $this->load->view('slots/edit_this_slot', $data);
    }

public function edited_slot($list_id) {

            $list_array = array(
                'id' => $list_id,
                'floor' => $this->input->post('floor'),
                'slot' => $this->input->post('slot'),
                'category' => $this->input->post('category'),
                'status' => $this->input->post('status'),
            );
            if($this->post_model->updated_slot($list_array)==true)
            {
               redirect ('Slots/view_manage');
            }
            else
            {
               echo "error";
            }
            

        }

}
