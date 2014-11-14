<?php

class Money extends CI_Controller {
	
	public function index() {
		$this->load->view("Not_valid_user_view");	
	}
	
	public function users_list() {
		if($this->session->userdata('session_check') == "true") {
			$serial = $this->session->all_userdata();
			$serial = $serial[0];
			$serial = $serial->id;
			$this->load->model("user_helper_model");
			$valid = $this->user_helper_model->check_admin($serial);
			if($valid) {
				$array_members = $this->get_members_data();
				$data = new StdClass();
				$data->members = $array_members;
				//var_dump($data);
				$this->load->view("addGollars",$data);
			}
			else {
				$this->load->view("welcome_massage");
			}
		}
		else {
			$this->load->view("welcome_massage");
		}
	}
	public function get_members_serials() {
		$this->load->model("user_helper_model");
		return $this->user_helper_model->get_serials();
	}
	public function get_members_data() {
		$this->load->model("user_helper_model");
		$data = $this->user_helper_model->get_members_data();
		return $data;
	}
	public function money_addition_form($member_serial) {
		$data = new StdClass();
		$data->serial = $member_serial;
		$this->load->view('form_money_addition',$data);
	}
	public function validate_money_form($serial) {
		 $money = $this->input->post('gooler_adition');
		 $this->load->model('money_model');
		 $done = $this->money_model->add_money_to_user($money, $serial);
		 if($done) {
			$this->load->view('done_view');
		}
		else {
			$this->load->view('failed_view');
		}
	}
}