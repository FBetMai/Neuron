<?php

 //MODEL - Testimonial

  class _Testimonial {
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
        public function addClient($clientName, $companyName, $clientWebsite, $clientEmail) {

            $checkClientExists = $this->getClientEmail($clientEmail);

            var_dump($checkClientExists);

            $this->db->query('INSERT INTO tbl_client (CLIENTNAME, COMPANYNAME, CLIENTWEBSITE, CLIENTEMAIL) VALUES (:clientName, :companyName, :clientWebsite, :clientEmail)');


            
                
//*** IF THEY ARE ALREADY CLIENT, UPDATE THE tbl-client (CLIENTNEW) TO 0, WHOSE BOLLEAN IS SET AS DEFAULT = 1.
//             $this->db->query('UPDATE tbl_client SET CLIENTNEW = 0 WHERE ');    

            $this->db->bind(':clientName', $clientName);
             $this->db->bind(':companyName', $companyName);
            $this->db->bind(':clientWebsite', $clientWebsite);
            $this->db->bind(':clientEmail', $clientEmail);    //NOT NULL

             if($this->db->execute()) {
                 return true;
             } else {
                 return false;
             }        
        }

        //ADD TESTIMONIALS into tbl_testimonial (neuron Database)
        public function addTestimonial($clientID, $textDescription) {
            $this->db->query('INSERT INTO tbl_testimonial (CLIENTID, TEXTDESCRIPTION) VALUES (:clientID, :textDescription)');
            $this->db->bind(':clientID', $clientID);
            $this->db->bind(':textDescription', $textDescription);         
            
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }        
        }













        
    //SELECT QUERIES

        //SHOW CONTACT from tbl_contact (neuron Database)
        public function showTestimonial() {
            $this->db->query('SELECT * FROM tbl_contact');
            return $this->db->resultSet();
        }

}