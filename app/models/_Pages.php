<?php
  //MODEL - Pages
  
  class _Pages {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }
    //Select from DATABASE
        //Select Pages from tbl_page (neuron Database)
        public function getPage($id) {
          $this->db->query('SELECT * FROM tbl_page WHERE PAGEID = :id');
          $this->db->bind(":id", $id);
          return $this->db->resultSet();
        }

        //Select Headings from tbl_heading (neuron Database)
        public function getHeading($id) {
          $this->db->query('SELECT * FROM tbl_heading WHERE PAGEID = :id');
          $this->db->bind(":id", $id);
          return $this->db->resultSet();
        }

        //Select Text from tbl_text (neuron Database)
        public function getText($id) {
          $this->db->query('SELECT * FROM tbl_text WHERE PAGEID = :id');
          $this->db->bind(":id", $id);
          return $this->db->resultSet();
        }

        //Select Media from tbl_media (neuron Database)
        public function getMedia($id) {
          $this->db->query('SELECT * FROM tbl_media WHERE PAGEID = :id');
          $this->db->bind(":id", $id);
          return $this->db->resultSet();
        }

        //Select buttons from tbl_buttons (neuron Database)
        public function getbuttons($id) {
          $this->db->query('SELECT * FROM tbl_buttons WHERE PAGEID = :id');
          $this->db->bind(":id", $id);
          return $this->db->resultSet();
        }

        //Select Temp3 info from tbl_testimonial (neuron Database)
        public function getTestimonial($id) {
          $this->db->query('SELECT T.TESTIMONIALID, T.PAGEID, T.ISIMAGE, T.MEDIAPATH, C.CLIENTNAME AS TITLE, C.COMPANYNAME AS SUBTITLE, T.TEXTDESCRIPTION FROM tbl_testimonial T JOIN tbl_client C on T.CLIENTID = C.CLIENTID WHERE PAGEID = :id AND T.APPROVED = 1 ORDER BY T.CREATEDDATE DESC LIMIT 6 '); // 
          $this->db->bind(":id", $id);
          return $this->db->resultSet();
        }

        //Select Temp3 info from tbl_news (neuron Database)
        public function getNews($id) {
          $this->db->query('SELECT * FROM tbl_news WHERE PAGEID = :id LIMIT 6 ');
          $this->db->bind(":id", $id);
          return $this->db->resultSet();
        }

        //Select Temp3 info from tbl_about (neuron Database)
        public function getAbout($id) {
          $this->db->query('SELECT * FROM tbl_about WHERE PAGEID = :id LIMIT 3 ');
          $this->db->bind(":id", $id);
          return $this->db->resultSet();
        }

        //Select Temp4 info from tbl_country (neuron Database)
        public function getCountries() {
          $this->db->query('SELECT * FROM tbl_country');
          return $this->db->resultSet();
        }

        //Select Temp4 info from tbl_subject (neuron Database)
        public function getSubject() {
          $this->db->query('SELECT * FROM tbl_subject');
          return $this->db->resultSet();
        }

    //HARD CODED

        //Get Nav Links to Home page (Index)
        public function getNavLinks() {
          return ["../index2/2", "../index2/3", "../index2/4", "../index2/5"];
      } 
         
  }
?>