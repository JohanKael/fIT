<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Objectifs extends CI_Model{
    private $descriObjectif;

    public function __construct(){

    }

    public function setDescri($descri)
    {
        $this->descriObjectif = $descri;
    }

    public function getAllDescri(){
        $sql = "SELECT * FROM Objectif";
        $query = $this->db->query($sql);

        return $query->result_array();
    }

    public function setObjectif($objectif, $user){
        $sql = "UPDATE UserProfile SET idObjectif = '%s' WHERE idUser = '%s'";
        $sql = sprintf($sql, $objectif, $user);
        $query = $this->db->query($sql);
    }

    public function settedObjectif($idUser){
        $this->db->select('idObjectif');
        $this->db->from('UserProfile');
        $this->db->where('idUser', $idUser);

        $query = $this->db->get();

        $row = $query->row();
        if ($row->idObjectif == null) {
            return true;
        } else {
            return false;
        }

    }

}



?>