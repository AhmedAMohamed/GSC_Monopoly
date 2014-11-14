<?php

class Profile extends CI_Controller{

	public function index(){

		if($this->session->userdata('session_check') == "true"){
			$serial = $this->session->all_userdata();
			$serial = $serial[0];
			$data = $this->get_user_data($serial->id);
			$data = $data[0];
			$this->load->view("includes/header", $data);		
			$this->load->view("profile", $data);
			$this->load->view("includes/footer");
		}
		else{
			$url = base_url("logout");
			redirect($url);
		}
	}

	public function get_user_data($serial){
		$this->load->model('user_helper_model');
		$data = $this->user_helper_model->get_user_data($serial);
		return $data;
	}
}