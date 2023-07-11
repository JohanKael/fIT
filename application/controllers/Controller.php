<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {
    public function getObjectif(){
        $this->load->model('Functions');
        $varCompte = $this->Functions->getAll('Objectif');
       // $taille = $this->Functions->countGeneralisation('Objectif');
        $variable = Array(
            'Objectif' => $varCompte,
            //'taille' => $taille
        );
        $this->load->view('Templates/header');
        $this->load->view('Templates/footer');
        $this->load->view('pages/Objectif', $variable);
    }
}
?>