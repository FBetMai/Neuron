<?php

 //MODEL - Contact

  class _Contact {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    //client VALIDATION by client email
    public function getClientEmail($clientEmail) {
        $this->db->query('SELECT * FROM tbl_client WHERE CLIENTEMAIL = :clientEmail');
        $this->db->bind(":clientEmail", $clientEmail);
        return $this->db->resultSet();
    }

    //INSERT QUERIES

        //ADD CLIENT into tbl_client (neuron Database)
        public function addClient($clientName, $companyName, $companyAdress, $country, $clientEmail, $phoneNumber) {

//*** IF THEY ARE ALREADY A CLIENT, UPDATE THE tbl-client (CLIENTNEW) TO 0 (whose boolean is set as default = 1) AND DO NOT DOUBLE THEIR DATA .
            $checkClientExists = $this->getClientEmail($clientEmail);
            var_dump($checkClientExists);

            $this->db->query('INSERT INTO tbl_client (CLIENTNAME, COMPANYNAME, CLIENTADRESS, COUNTRYID, CLIENTEMAIL, CLIENTPHONENUMBER) VALUES (:clientName,:companyName, :companyAdress, :country, :clientEmail, :phoneNumber)');
            $this->db->bind(':clientName', $clientName);
            $this->db->bind(':companyName', $companyName);
            $this->db->bind(':companyAdress', $companyAdress);
            $this->db->bind(':country', $country);
            $this->db->bind(':clientEmail', $clientEmail);    //NOT NULL
            $this->db->bind(':phoneNumber', $phoneNumber);

             if($this->db->execute()) {
                 return true;
             } else {
                 return false;
             }        
        }

        //ADD CONTACT into tbl_CONTACT (neuron Database)
        public function addContact($clientID, $subjectID, $textDescription) {
            $this->db->query('INSERT INTO tbl_contact (CLIENTID, SUBJECTID, TEXTDESCRIPTION) VALUES (:clientID, :subjectID, :textDescription)');
            $this->db->bind(':clientID', $clientID);
            $this->db->bind(':subjectID', $subjectID); 
            $this->db->bind(':textDescription', $textDescription);         
            
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }        
        }        
     
}