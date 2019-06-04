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
        $buttons = $this->controller->getbuttons($id);
       
        //Hard Coded
        $links = $this->controller->getNavLinks();

        $data = [
            'page' => $page,
            'heading' => $heading,
            'text' => $text,
            'media' => $media,
            'buttons' => $buttons,
            'links' => $links
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
        $buttons = $this->controller->getbuttons($id);
       
        //Hard Coded
        $links = $this->controller->getNavLinks();

        $data = [
            'page' => $page,
            'heading' => $heading,
            'text' => $text,
            'media' => $media,
            'buttons' => $buttons,
            'links' => $links
        ];
        $this->view('pages/template2/temp2', $data);
      }

      
//Controler - Policy
    public function index2a() {

      $id = myTryParse(URLROOT);
      
      //From the Database
      $page = $this->controller->getPage($id);
      $heading = $this->controller->getHeading($id);
      $text = $this->controller->getText($id);
      $media = $this->controller->getMedia($id);
      $buttons = $this->controller->getbuttons($id);
     
      //Hard Coded
      $links = $this->controller->getNavLinks();

      $data = [
          'page' => $page,
          'heading' => $heading,
          'text' => $text,
          'media' => $media,
          'buttons' => $buttons,
          'links' => $links
      ];
      $this->view('pages/template2/policy', $data);
    }


//Controler - Temp 3 - News, Testimonials & About
        public function index3() {

        $id = myTryParse(URLROOT);
          
        //From the Database
          $page = $this->controller->getPage($id);
          $heading = $this->controller->getHeading($id);
          $text = $this->controller->getText($id);
          $media = $this->controller->getMedia($id);
          $buttons = $this->controller->getbuttons($id);
          switch ($id){
              case 6:  $template3 = $this->controller->getTestimonial($id); break;
              case 7:  $template3 = $this->controller->getNews($id); break;
              case 9:  $template3 = $this->controller->getAbout($id); break;
              default: break;
          }            
        //Hard Coded
          $links = $this->controller->getNavLinks();
  
          $data = [
              'page' => $page,
              'heading' => $heading,
              'text' => $text,
              'media' => $media,
              'buttons' => $buttons,
              'links' => $links,
              'template3' => $template3
          ];    
          $this->view('pages/template3/temp3', $data);
        }





//Controler - Temp 4 - Contact
      public function index4() {

        $id = myTryParse(URLROOT);
        
        //From the Database
        $page = $this->controller->getPage($id);
        $heading = $this->controller->getHeading($id);
        $text = $this->controller->getText($id);
        $media = $this->controller->getMedia($id);
        $buttons = $this->controller->getbuttons($id);
        $countries = $this->controller->getCountries();
        $subject = $this->controller->getSubject();
      
        //Hard Coded
        $links = $this->controller->getNavLinks();

        $data = [
            'page' => $page,
            'heading' => $heading,
            'text' => $text,
            'media' => $media,
            'buttons' => $buttons,
            'links' => $links,
            'countries'=>$countries,
            'subject'=>$subject
        ];    
        $this->view('pages/template4/contact', $data);
      }


    }
