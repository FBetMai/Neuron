<?php
  //CONTROLLER - Pages
    include(APPROOT . '/helper/helperfunctions.php');

    class Pages extends Controller {

      public function __construct() {
        $this->controller = $this->model('_Pages');
      }


    //Controler - Index
      public function index() {

        $id = myTryParse(URLROOT);
        
        //From the Database
        $page = $this->controller->getPage($id);
        $heading = $this->controller->getHeading($id);
        $text = $this->controller->getText($id);
        $media = $this->controller->getMedia($id);
       
        //Hard Coded
        $buttons = $this->controller->getbuttons();
        $links = $this->controller->getNavLinks($id);
        $aba = $this->controller->getAba($id);

        $data = [
            'page' => $page,
            'heading' => $heading,
            'text' => $text,
            'media' => $media,
            'buttons' => $buttons,
            'links' => $links,
            'aba'=> $aba
        ];

        $this->view('pages/template1/index', $data);
      }

    //Controler - Temp2
      public function index2() {

        $id = myTryParse(URLROOT);
        
        //From the Database
        $page = $this->controller->getPage($id);
        $heading = $this->controller->getHeading($id);
        $text = $this->controller->getText($id);
        $media = $this->controller->getMedia($id);
       
        //Hard Coded
        $buttons = $this->controller->getbuttons();
        $links = $this->controller->getNavLinks($id);
        $aba = $this->controller->getAba($id);

        $data = [
            'page' => $page,
            'heading' => $heading,
            'text' => $text,
            'media' => $media,
            'buttons' => $buttons,
            'links' => $links,
            'aba'=> $aba
        ];

        $this->view('pages/template2/temp2', $data);
      }
    }
