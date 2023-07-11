<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

class UserProfile extends CI_Model{
    private $name;
    private $birthday;
    private $height;
    private $weight;
    private $gender;

    public function __construct(){

    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function save($data) {
        $sql = "INSERT INTO UserProfil (userName, bday, userHeight, userWeight, userGender) VALUES ('%s', '%s', '%s', '%s', '%s')";
        $sql = sprintf($sql, $data['userName'], $data['bday'], $data['userHeight'], $data['userWeight'], $data['userGender']);
        $this->db->query($sql);
    }

}

?>