<?php


function login(){
	//http://localhost/parking/main/login
	 $data['title'] = 'Log In';
	$this->load->view("login", $data) ;
}

?>