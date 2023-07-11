<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
	public function index(){
		$this->load->view('login_view');
	}	
	
	public function checkLogin(){
		$this->load->model('Objectifs');

		$this->load->library('session');
		$idUser = $this->session->has_userdata('idUser');
		$bool = $this->Objectifs->settedObjectif($idUser);
		
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
				if($bool == true){
					redirect('index.php/Login/chooseObjectif');
				}else{
					redirect('index.php/Login/home');
				}
				
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
	
	
	public function chooseObjectif(){
		$this->load->model('Objectifs');
		$data = array();
		$data['infoDescri'] = $this->Objectifs->getAllDescri();

		$this->load->view('objectif_view', $data);
	}

	public function home(){
		$this->load->library('session');
		$idUser = $this->session->has_userdata('idUser');
		$objectif = $this->input->post('objectif');
		echo $idUser;
		echo $objectif;
		$this->load->model('Objectifs');

		$this->Objectifs->setObjectif($objectif, $idUser);

		$this->load->view('home_view');
		$this->load->library('session');
		$idUser = $this->session->has_userdata('idUser');
		$objectif = $this->input->post('objectif');
	}
	

}

?>