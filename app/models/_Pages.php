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

    //HARD CODED

        //Get Nav Links to Home page (Index)
        public function getNavLinks() {
          return ["servicedata.html", "servicebig.html", "servicebusiness.html", "servicesolution.hmtl"];
      }
    
        //Services Button texts
        public function getbuttons() {
          return ["Data Architecture", "Big Data", "AI for Business", "Solution Integration"];
      }

        //Aba
        public function getAba() {
          return ["Neuron", "Neuron Services", "Neuron Testimonials", "Neuron News", "Neuron Contact", "Neuron About"];
      }
    
  }
?>