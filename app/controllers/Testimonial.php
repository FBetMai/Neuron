<?php

//CONTROLLER - Testimonial

class Testimonial extends Controller {

    public function __construct() {
        
      $this->controller = $this->model('_Testimonial');
    }

    //INSERT DATA in the Database
        // How to setup the Agreement to share option
        //Check issets

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

            //if($this->controller->addDataToTheDataBase($_POST['clientName'], $_POST['companyName'], $_POST['clientWebsite'], $_POST['clientEmail'], $_POST['textDescription'])) {
                //echo "Thank you for taking the time to send us this message. It will be posted shortly after approval.";

                header("Location: /pages/index3/6");
                exit;
            //} else {
              //  echo "Something went wrong. Please, check the fields above.";
            //}
        } else {
            echo "Something went wrong. Please, check the fields above.";
        }
    }

    
    

//How to deal with these buttons here in the if statement and in the model       
//echo isset($_POST['optionsRadios']); //Agreement to share option
//echo isset($_POST['SubmitForm']); //button
 

}