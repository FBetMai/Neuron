<?php

 //MODEL - Subscribe

  class _Subscribe {
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
        public function addClient($clientName, $companyName, $clientEmail) {

            $checkClientExists = $this->getClientEmail($clientEmail);

            var_dump($checkClientExists);

            $this->db->query('INSERT INTO tbl_client (CLIENTNAME, COMPANYNAME, CLIENTEMAIL, CLIENTSUBSCRIBE) VALUES (:clientName, :companyName, :clientEmail, 1)');
            $this->db->bind(':clientName', $clientName);
            $this->db->bind(':companyName', $companyName);
            $this->db->bind(':clientEmail', $clientEmail);    //NOT NULL

             if($this->db->execute()) {
                 return true;
             } else {
                 return false;
             }        
        }  
        
        
        //INSERT QUERIES

        //UPDATE CLIENT into tbl_client (neuron Database)
        public function updateClient($clientID) {
            $this->db->query('UPDATE tbl_client SET CLIENTSUBSCRIBE = 1 WHERE CLIENTID = :clientID');
            $this->db->bind(':clientID', $clientID);
             if($this->db->execute()) {
                 return true;
             } else {
                 return false;
             }        
        }

}