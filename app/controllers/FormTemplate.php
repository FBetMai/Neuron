<?php

//CONTROLLER - Form Template
//Form -from Jeff's Github - to-jk11/php-mvc-kit

class ControlerName extends Controller {

    public function __construct() {
        
      $this->form = $this->model('_form'); //name your model
    }
    public function index() {
        $form = $this->form->showAllMessage();
        $data = [
            'form' => $form
        ];
        $this->view('form/index', $data);
    }
    public function addData() {
        echo $_POST['fname'];
        echo $_POST['lname'];
        echo $_POST['subject'];
        echo $_POST['message'];
        if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
            if($this->form->addDataToTheDataBase($_POST['fname'], $_POST['lname'], $_POST['subject'], $_POST['message'])) {
                echo "SUCCESS!";
            } else {
                echo "WRONG - IT BROKE!";
            }
        }
    }
}