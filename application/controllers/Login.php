<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
	public function index(){
		$this->load->view('login_view');
	}		

	public function sign(){
		$this->load->view('sign_view');

		$this->load->model('UserProfile');

		$dataUser = array();

		if ($this->input->post()) {
			$data['userName'] = $this->input->post('userName');
			$data['bday'] = $this->input->post('bday');
			$data['userHeight'] = $this->input->post('userHeight');
			$data['userWeight'] = $this->input->post('userWeight');
			$data['userGender'] = $this->input->post('userGender');

			$userProfil = new UserProfile();
        	$userProfil->save($data);

			redirect(base_url());
		}
	
		

	}

}

?>