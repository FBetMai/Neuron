<?php

//CONTROLLER - Testimonial

class Testimonial extends Controller {

    public function __construct() {
        
      $this->controller = $this->model('_Testimonial');
    }

    //INSERT DATA in the Database

    public function addData() {
            //tbl_client
        echo $_POST['clientName'];
        echo $_POST['companyName'];
        echo $_POST['clientWebsite'];
        echo $_POST['clientEmail'];
            //tbl_testimonial
                    //echo $_POST['clientID'];
        echo $_POST['textDescription'];
                    //echo $_POST['createdDate'];
                    //echo $_POST['approved'];

        if(!empty($_POST['clientName']) && !empty($_POST['companyName']) && !empty($_POST['clientWebsite']) && !empty($_POST['clientEmail']) && !empty($_POST['textDescription'])) {
            if($this->contact->addDataToTheDataBase($_POST['clientName'], $_POST['companyName'], $_POST['clientWebsite'], $_POST['clientEmail'], $_POST['textDescription'])) {
                echo "Thank you for taking the time to send us this message. It will be posted soon after approval.";
            } else {
                echo "Something went wrong by submitting this message. Please, check if you completed all the fields above.";
            }
        }
    }

    
    
    //READ DATA from the Database ************* MUST BE REVIEWED *************

    public function index() {

        $id = myTryParse(URLROOT);


        $testimonial = $this->controller->showTestimonial($id);

        $data = [
            'testimonial' => $testimonial
        ];
        $this->view('pages/template3/temp3', $data);
    }


}