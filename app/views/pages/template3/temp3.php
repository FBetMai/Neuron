<?php include(APPROOT . "/views/includes/header.php"); ?>


<!--Top Empty line-->      
<div class="container">
        <p></p>
    </div>
</div>

<!--Leave a Testimonial / Subscribe News -->
        <!--Heading-->
        <div class="container">   
            <div class="jumbotron-primary">      
                <h3><?php echo $data['heading'][0]['HEADINGDESCRIPTION']; ?></h3>
                <hr class="my-3">  
            </div>
        </div>

        <!--Text - top of page-->
        <div class="container">   
                <div class="row d-flex flex-row">
                    <div class="col-lg-8 offset-lg-2 col-md-8 col-sm-8">
                        <h6 class="text-justify"><?php echo $data['text'][0]['TEXTDESCRIPTION']; ?></h6>
                        <span>&nbsp;</span>
                    </div>

        <!--Coditional to activate the correct button function - Contact link OR Testimonal / Subscribe Modals-->
           <div class="col-lg-2 col-md-4 col-sm-4">
                <?php
                //Contact link - Page About - PAGEID = 9
                if($data['buttons'][0]['PAGEID'] == 9):?>
                    <a href="<?php echo URLROOT . 'pages/index4/8'; ?>"><button type="button" class="btn btn-success btn-lg ">Contact</button></a>
                <!--Button to activate Modals depending on page PAGEID-->
                <?php else:?>
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target=<?php echo '#modal' . $data['buttons'][0]['PAGEID']; ?>>
                        <?php echo $data['buttons'][0]['BUTTONDESCRIPTION']; ?>
                    </button>
                <?php endif?>


        <!--Modal Testimonial-->
                    <div class="modal fade" id="leave" tabindex="-1" role="dialog" aria-labelledby="leave" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Leave a Testimonial</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--Form (Modal)-->
                                <div class="modal-body">
                                <form action="Testimonials/addData.php" method="POST">                                
                                    <!--Name-->
                                    <div class="form-group">
                                        <label for="name">Name*</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="clientName" placeholder="Enter full name">
                                    </div>
                                    <!--Company Name-->
                                    <div class="form-group">
                                        <label for="companyName">Company name*</label>
                                        <input type="text" class="form-control" id="companyName" aria-describedby="companyName" placeholder="Enter company name">
                                    </div>
                                    <!--Company Website-->
                                    <div class="form-group">
                                        <label for="companyWeb">Company website*</label>
                                        <input type="text" class="form-control" id="companyWeb" aria-describedby="clientWebsite" placeholder="Enter company website">
                                    </div>       
                                    <!--Email-->            
                                    <div class="form-group">
                                        <label for="Address">Email address*</label>
                                        <input type="email" class="form-control" id="Address" aria-describedby="clientEmail" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <!--Text Area-->
                                    <div class="form-group">
                                        <label for="testimonial">Your Testimonial</label>
                                        <small class="form-text text-muted">(maximum 310 characteres)</small>
                                        <textarea class="form-control" id="testimonial" rows="10" maxlength="310"></textarea>
                                    </div>
<!--How to setup it?-->             <!--Agreement to share-->
                                    <fieldset class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios" id="agreement" value="option1" checked="">
                                                I am happy for this testimonial to be used by Neuron for promotional purposes
                                            </label>
                                        </div>                                                    
                                    </fieldset>
                                    <!--Submit Button-->
                                    <fieldset class="form-group">
                                            <button type="submit" class="btn btn-primary" name="SubmitForm">Submit</button>
                                    </fieldset>
                                    <!--Terms and conditions-->
                                    <div class="form-group">
                                        <div>&nbsp;</div> 
                                        <p>*** By submitting this form, you accept the <a href="policy.html">Terms and Conditions</a></p>                                     
                                    </div>
                                    <div class="modal-footer">    
                                    </div>
                                </div>                                        
                            </div>
                        </div>
                    </div>
                <span>&nbsp;</span>
            </div>

        <!--Modal Subscribe-->
                    <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal7" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title">Subscribe to receive Neuron newsletter</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <!--Form (Modal)-->
                                <form action="Subscribe/addData.php" method="POST">
                                        <div class="form-group ">
                                            <label for="name">Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                                        </div>
                                        <div class="form-group ">
                                            <label for="company name">Company Name</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company Name">
                                        </div>
                                        <div class="form-group ">
                                            <label for="exampleInputEmail1">Email address*</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Confirm</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
            <!--Empty line-->      
            <div class="container">
                    <p></p>
                </div>
            </div>


<!--Content of the Page-->  
    <!--Heading--> 
    <div class="container">
        <h3><?php echo $data['heading'][1]['HEADINGDESCRIPTION']; ?></h3>
        <hr class="my-4">
    </div>

<!--ROW 1 - 1 row 3 col-->
<div class="container">   
    <div class="row d-flex flex-row">

    <?php for($i = 0; $i < count($data['template3']); $i++)
        {
        ?>
        <?php if($i<7):?>
        <div class="col-lg-4 col-md-12 col-sm-12">
            
                <?php if($data['template3'] [$i] ['ISIMAGE']== TRUE):?>
                        <a class="cardcust" href="<?php echo $data['template3'][$i]['MEDIAPATH']; ?>"><img class="img-circle wimgl60 wimgm40 wimgs55 mx-auto d-block" src=<?php echo $data['template3'][$i]['MEDIAPATH']; ?> alt="Card image"></a>
                <?php else:?>
                    <div class="card mb-3">
                        <iframe class ="cardcust" src="<?php echo $data['template3'][$i]['MEDIAPATH']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <?php endif?>                                                    
            <div>
                <hr class="my-6">
                    <a href="<?php echo $data['template3'][$i]['MEDIAPATH']; ?>"><h5 class="text-center font-weight-bold text-success"><?php echo $data['template3'][$i]['TITLE']; ?></h5></a>
                    <h6 class="text-center text-muted text-center"><?php echo $data['template3'][$i]['SUBTITLE']; ?></h6>
                <hr class="my-6">
            </div>
            <div class="cardcust1">
                    <p class="card-text text-justify"><?php echo $data['template3'][$i]['TEXTDESCRIPTION']; ?></p>
            </div>
        </div> 
        <?php endif?>              
    <?php
        }
        ?> 


<!--toolbar-->
<div class="container">
        <div class="row d-flex flex-row">
            <div class="col-lg col-md-12 col-sm-12">
                <div>
                    <ul class="pagination pagination-sm float-right">                                   
                        <li class="page-item disabled">
                            <a class="page-link" href="#">&laquo;</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>  
        </div>
    </div> 
</div> 
</div> 




<?php include(APPROOT . "/views/includes/footer.php"); ?>