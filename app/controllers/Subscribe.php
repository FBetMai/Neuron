<?php

//CONTROLLER - Subscribe

class Subscribe extends Controller {

    public function __construct() {
        
      $this->controller = $this->model('_Subscribe');
    }
    //INSERT DATA in the Database

    public function addData() {
            //tbl_client
        $_POST['clientName'];
        $_POST['companyName'];
        $_POST['clientEmail'];
           
        
        if(!empty($_POST['clientName']) && !empty($_POST['companyName']) && !empty($_POST['clientEmail'])) {

            $client = $this->controller->getClientEmail($_POST['clientEmail']);    

            if(empty($client)){
                $this->controller->addClient($_POST['clientName'], $_POST['companyName'], $_POST['clientEmail']);
                $client = $this->controller->getClientEmail($_POST['clientEmail']);
            }else {
                $this->controller->updateClient(intval($client[0]['CLIENTID']));
                }
                include(APPROOT . "/views/includes/header.php");
                echo
                "<div class=\"container\"><p></p>
                </div><div class=\"alert alert-dismissible alert-success\">                
                <strong>Thank you for subscribing. </strong> <a href=\"/pages/index3/7\" class=\"alert-link\"> Go back to the News page</a>.
                </div></div>";
                exit; 
        } else {
            include(APPROOT . "/views/includes/header.php");
                echo
                "<div class=\"container\"><p></p>
                </div><div class=\"alert alert-dismissible alert-secondary\">                
                <strong>Something went wrong.  </strong> <a href=\"/pages/index3/7\" class=\"alert-link\"> Please, go back to the News page</a> and try submitting again.
                </div></div>";
        }
    }
}