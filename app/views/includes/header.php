<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Data and Machine Learning Services">
    <meta name="keywords" content="business intelligence, buiness analysis, data analysis. machine learning, data aquisition, data preparation, data transformations, EDA, exploratory data analysis, data modeling, authomation, data visualization, dashboard, data communications, machine learning models, performance, KPI, efficiency, data mining, assited model, unasisted model, deep learning, decision tree, KNN, naive bayers">
    <meta name="author" content="Fernanda Bettega Mairesse">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">



 <!-- Page Name (aba) -->
    <title>
            <?php 
            if($id==0)
            {
                echo $data['aba'][0];
            }elseif($id==1)
            {
                echo $data['aba'][1];
            }elseif($id==2)
            {
                echo $data['aba'][2];
            }elseif($id==3)
            {
                echo $data['aba'][3];
            }elseif($id==4)
            {
                echo $data['aba'][4];
            }elseif($id==5)
            {
                echo $data['aba'][5];
            }else
            {
                echo $data['aba'][6];
            }
            ?>
        </title>



 <!-- Bootstrap CSS -->
 <link href="/css/bootstrap.min.css" rel="stylesheet">
 <link href="/css/css.css" rel="stylesheet">
</head>

<body>
<!--BODY-->
<!--Navbar space-->
<div class="row d-flex flex-row">
    <div class="col-lg col-md col-sm">            
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!--Logo column-->                   
            <div class="container">   
                <div class="col-lg col-md col-sm">                                            
                    <a class= "navbar-brand font-weight-bold text-success" href="index.html"><h3>Neuron<img src="./img/Brain.png" alt="Brain" height="30" width="35"></h3></a>
                    <h6 class= "text-success font-weight-bold">Data & Machine Learning</h6>                           
                </div>                                  
    <!--Colapse buttons-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    <!--Navbar buttons-->
                <div class="col-lg col-md col-sm"> 
                    <div class="collapse navbar-collapse" id="navbarColor03">                    
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="services.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="servicedata.html">Data Architecture</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="servicebig.html">Big Data</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="servicebusiness.html">AI for Business</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="servicesolution.html">Solution Integration</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="testimonials.html">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.html">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item dropdown active">
                               <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   About
                               </a>
                               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                       <a class="dropdown-item" href="about.html">About us</a>
                                   <div class="dropdown-divider"></div>
                                       <a class="dropdown-item" href="Policy.html">Policy</a>
                                   </div>
                           </li>
                       </ul>
                   </div>
               </div> 
           </div>
           </nav>
       </div>
   </div>

    <div class="container">