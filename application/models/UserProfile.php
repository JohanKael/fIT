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
        $sql = "INSERT INTO UserProfile (userName, bday, userHeight, userWeight, userGender, userEmail, userPassword) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')";
        $sql = sprintf($sql, $data['userName'], $data['bday'], $data['userHeight'], $data['userWeight'], $data['userGender'], $data['userEmail'], $data['userPassword']);
        $this->db->query($sql);
    }

    public function authenticate($email, $pass){
        $sql = "SELECT idUser from UserProfile where userEmail = '%s' and userPassword = '%s'";
        $sql = sprintf($sql, $email, $pass);
        $ans = $this->db->query($sql);

        return $ans->row_array();
    }

}

?>