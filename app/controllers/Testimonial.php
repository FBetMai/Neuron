<?php

//CONTROLLER - Testimonial

class Testimonial extends Controller {

    public function __construct() {
        
      $this->controller = $this->model('_Testimonial');
    }

    //INSERT DATA in the Database
    public function addData() {
            //tbl_client
        $_POST['clientName'];
        $_POST['companyName'];
        $_POST['clientWebsite'];
        $_POST['clientEmail'];
            //tbl_testimonial                    
        $_POST['textDescription'];
        
        if(!empty($_POST['clientName']) && !empty($_POST['companyName']) && !empty($_POST['clientWebsite']) && !empty($_POST['clientEmail']) && !empty($_POST['textDescription'])) {

            $client = $this->controller->getClientEmail($_POST['clientEmail']);    

            if(empty($client)){
                $this->controller->addClient($_POST['clientName'], $_POST['companyName'], $_POST['clientWebsite'], $_POST['clientEmail']);
                $client = $this->controller->getClientEmail($_POST['clientEmail']);
            }
                $this->controller->addTestimonial(intval($client[0]['CLIENTID']), $_POST['textDescription']);               
                include(APPROOT . "/views/includes/header.php");
                echo
                "<div class=\"container\"><p></p>
                </div><div class=\"alert alert-dismissible alert-success\">                
                <strong>Thank you for your testimonial. It will be posted shortly. </strong> <a href=\"/pages/index3/6\" class=\"alert-link\"> Go back to the Testimonial page</a>.
                </div></div>";
                exit;
        } else {
            include(APPROOT . "/views/includes/header.php");
            echo
                "<div class=\"container\"><p></p>
                </div><div class=\"alert alert-dismissible alert-secondary\">                
                <strong>Something went wrong. </strong> <a href=\"/pages/index3/6\" class=\"alert-link\"> Please, go back to the Testimonial page</a> and try submitting again.
                </div></div>";
        }
    }
}