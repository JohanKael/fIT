<?php
    defined('BASEPATH') or exit('No direct access');
    class Functions extends CI_Model {
        public function connexion($mail,$mdp) {
            $requete =  "select * from personnage where email_personne='".$mail."' and mdp_personne='".$mdp."'";
            $result = $this->db->query($requete);
            $array = $result->row_array();
            return $array;
        }

$result = array();
            $query = $this->db->query("SELECT *FROM $table");
            foreach ($query->result_array() as $row){
                foreach($row as $key=>$value){
                    $result[$key][] = $value;
                }
            }
            return $result;
        }
    
    ?>
    