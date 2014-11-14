<?php 

class Community extends CI_Controller {
	public function index () {
		$this->load->model('user_helper_model');
		$data = $this->user_helper_model->get_all_users_data();
		if($this->session->userdata('session_check') == "true") {
			$this->load->view('users_visit_view', $data);
		}
		else {
			$this->load->view('users_view', $data);
		}
	}
	
	public function get_user_data ($serial) {
		$accesser = $this->session->userdata('serial');
		$data = $this->find_user_by_id($serial);
		$this->load->model('user_helper_model');
		$admin = $this->user_helper_model->check_admin($this->session->userdata('serial'));
		if($admin) {
			if($this->user_helper_model->is_layer_member($serial, $accesser)) {
				$this->load->view('member_admin_profile_view',$data);
			}
			else {
				$this->load->view('member_profile_view', $data);
			}
		}
		else{
			$this->load->view('member_profile_view', $data);
		}
	}
	
	public function find_user_by_id($serial) {
		$this->load->model('user_helper_model');
		return $this->user_helper_model->get_user_data($serial);
	}
}