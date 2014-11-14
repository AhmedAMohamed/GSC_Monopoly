<?php

class Logout extends CI_Controller {
	public function index() {
		$this->log_out();
	}
	
	public function log_out() {
		$this->session->sess_destroy();
		$url = base_url("entry_check");
		redirect($url);
	}
}