<?php

 //MODEL - Testimonial

  class _Testimonials {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    //INSERT QUERIES

        //ADD TESTIMONIALS into tbl_client & tbl_testimonial (neuron Database)
                //1 - this is the union of tbl_client & tbl_testimonial.
                //2 - *** IF THEY ARE ALREADY CLIENT, RETRIEVE CLIENTNAME, COMPANYNAME, CLIENTWEBSITE, CLIENTEMAIL FROM THE tbl-client by the CLIENTID. OTHERWISE, THE tbl-client'S FIELDS SHOULD BE COMPLETED BY THE TESTIMONIAL FORM, AND THEY BECOME A NEW CLIENT.
                //3 - *** IF THEY ARE ALREADY CLIENT, UPDATE THE tbl-client (CLIENTNEW) TO 0, WHOSE BOLLEAN IS SET AS DEFAULT = 1.

        public function addTestimonial($clientName, $companyName, $clientWebsite, $clientEmail, $textDescription) {
            $this->db->query('INSERT INTO tbl_client (CLIENTNAME, COMPANYNAME, CLIENTWEBSITE, CLIENTEMAIL) VALUES (:clientName, :companyName, :clientWebsite, :clientEmail) INSERT INTO tbl_testimonial (TEXTDESCRIPTION) VALUES (:textDescription)');
                
                //3 - *** IF THEY ARE ALREADY CLIENT, UPDATE THE tbl-client (CLIENTNEW) TO 0, WHOSE BOLLEAN IS SET AS DEFAULT = 1.
            $this->db->query('UPDATE tbl_client (CLIENTNEW) VALUES (0)');    

                    //tbl_client
            $this->db->bind(':clientName', $clientName);
            $this->db->bind(':companyName', $companyName);
            $this->db->bind(':clientWebsite', $clientWebsite);
            $this->db->bind(':clientEmail', $clientEmail);    //NOT NULL
                //tbl_testimonial
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