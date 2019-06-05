<?php

//CONTROLLER - Contact 

class Contact extends Controller {

    public function __construct() {
        
      $this->controller = $this->model('_Contact');
    }
    //INSERT DATA in the Database

    public function addData() {
            //tbl_client
        $_POST['clientName'];
        $_POST['companyName'];
        $_POST['companyAdress'];
        $_POST['country'];
        $_POST['clientEmail'];
        $_POST['phoneNumber'];
            //tbl_contact                    
        $_POST['subjectID'];
        $_POST['textDescription'];
        
        if(!empty($_POST['clientName']) && !empty($_POST['companyName']) && !empty($_POST['companyAdress']) && !empty($_POST['country']) && !empty($_POST['clientEmail']) && !empty($_POST['phoneNumber']) && !empty($_POST['subjectID']) && !empty($_POST['textDescription'])) {

            $client = $this->controller->getClientEmail($_POST['clientEmail']);    

            if(empty($client)){
                $this->controller->addClient($_POST['clientName'], $_POST['companyName'], $_POST['companyAdress'], $_POST['country'], $_POST['clientEmail'], $_POST['phoneNumber']);
                $client = $this->controller->getClientEmail($_POST['clientEmail']);
            }
                $this->controller->addContact(intval($client[0]['CLIENTID']), $_POST['subjectID'], $_POST['textDescription']);
                include(APPROOT . "/views/includes/header.php");
                echo
                "<div class=\"container\"><p></p>
                </div><div class=\"alert alert-dismissible alert-success\">                
                <strong>Thank you for you message. We will get in touch shortly. </strong> <a href=\"/pages/index4/8\" class=\"alert-link\"> Go back to the Contact page</a>.
                </div></div>";
                exit;    
        } else {
            include(APPROOT . "/views/includes/header.php");
                echo
                "<div class=\"container\"><p></p>
                </div><div class=\"alert alert-dismissible alert-secondary\">                
                <strong>Something went wrong.  </strong> <a href=\"/pages/index4/8\" class=\"alert-link\"> Please, go back to the Contact page</a> and try submitting again.
                </div></div>";
        }
    }
}