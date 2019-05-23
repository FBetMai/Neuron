<?php

 //MODEL - Contact

  class _Contact {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    //Select from DATABASE
        //SHOW CONTACT from tbl_contact (neuron Database)
        public function showAllContact() {
            $this->db->query('SELECT * FROM tbl_contact');
            return $this->db->resultSet();
        }

        //ADD CONTACT from tbl_contact (neuron Database)       
        public function addContact($contactID, $clientID, $subjectID, $contactDesc, $contatcDate) {
            $this->db->query('INSERT INTO tbl_contact (CONTACTID, CLIENTID, SUBJECTID, CONTACTDESCRIPTION, CONTACTDATE) VALUES (:contactID, :clientID, :subjectID,:contactDesc, :contatcDate)');
            $this->db->bind(':contactID', $contatcID);
            $this->db->bind(':clientID', $clientID);
            $this->db->bind(':subjectID', $subjectID);
            $this->db->bind(':contactDesc', $contactDesc);
            $this->db->bind(':contatcDate', $contatcDate);
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
}