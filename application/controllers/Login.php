<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
	public function index(){
		$this->load->view('login_view');
	}	

	public function afterLogged(){
		$this->load->view('home_view');
	}
	
	public function checkLogin(){
		
        $email = $this->input->post('userEmail');
        $password = $this->input->post('userPassword');

		$this->form_validation->set_rules('userEmail', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('userPassword', 'Mot de passe', 'required|trim');

		if($this->form_validation->run()){
			$this->load->model('UserProfile');
			$result = $this->UserProfile->authenticate($email, $password);
			if($result == null){
				redirect(base_url());
			}else{
				$this->load->library('session');
				$this->session->set_userdata('idUser', $result);
				redirect('index.php/Login/afterLogged');
			}
		}
		
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
			$data['userEmail'] = $this->input->post('email');
			$data['userPassword'] = $this->input->post('password');

			$userProfil = new UserProfile();
        	$userProfil->save($data);

			redirect(base_url());
		}
	
		

	}

}

?>