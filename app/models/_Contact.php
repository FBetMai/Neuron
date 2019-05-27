<?php

 //MODEL - Contact

  class _Contact {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

        //ADD CLIENT to tbl_client (neuron Database)       
        public function addClient($clientName, $companyName, $clientEmail, $clientWebsite, $clientAdress, $countryID, $clientPhoneNumber, $clientNew, $clientSubscribe) {
            $this->db->query('INSERT INTO tbl_client (CLIENTNAME, COMPANYNAME, CLIENTEMAIL, CLIENTWEBSITE, CLIENTADRESS, COUNTRYID, CLIENTPHONENUMBER, CLIENTNEW, CLIENTSUBSCRIBE) VALUES (:clientName, :companyName, :clientEmail, :clientWebsite, :clientAdress, :countryID, :clientPhoneNumber, :clientNew, :clientSubscribe)');
            $this->db->bind(':clientName', $clientName);
            $this->db->bind(':companyName', $companyName);
            $this->db->bind(':clientEmail', $clientEmail);
            $this->db->bind(':clientWebsite', $clientWebsite);
            $this->db->bind(':clientAdress', $clientAdress);
            $this->db->bind(':countryID', $countryID);
            $this->db->bind(':clientPhoneNumber', $clientPhoneNumber);
            $this->db->bind(':clientNew', $clientNew);
            $this->db->bind(':clientSubscribe', $clientSubscribe);
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }


        //ADD CONTACT to tbl_contact (neuron Database)       
        public function addContact($clientID, $subjectID, $contactDesc, $contatcDate) {
            $this->db->query('INSERT INTO tbl_contact (CLIENTID, SUBJECTID, CONTACTDESCRIPTION, CONTACTDATE) VALUES (:clientID, :subjectID,:contactDesc, :contatcDate)');
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

        //ADD TESTIMONIAL to tbl_testimonial (neuron Database)       
        public function addTestimonial($clientID, $textDescription, $createdDate, $approved) {
            $this->db->query('INSERT INTO tbl_testimonial (CLIENTID, TEXTDESCRIPTION, CREATEDDATE, APPROVED) VALUES (:clientID, :textDescription, :createdDate, :approved)');
            $this->db->bind(':clientID', $clientID);
            $this->db->bind(':textDescription', $textDescription);
            $this->db->bind(':createdDate', $createdDate);
            $this->db->bind(':approved', $approved);
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }




        //SELECT from DATABASE

        //SHOW CONTACT from tbl_contact (neuron Database)
        public function showAllContact() {
            $this->db->query('SELECT * FROM tbl_contact');
            return $this->db->resultSet();
        }

}