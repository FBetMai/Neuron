<?php include(APPROOT . "/views/includes/header.php"); ?>

<!--CHECK-->
    <!--Testimonial Form - MODAL-->
    <!--Loop for printing Testimonials (Picture, title, subtitles, text)-->

<!--Top Empty line-->      
<div class="container">
        <p></p>
    </div>
</div>

<!--Leave a testemonial-->
    <!--Heading-->
    <div class="container">   
        <div class="jumbotron-primary">      
            <h3>What is your Neuron Story?</h3>
            <hr class="my-3">  
        </div>
    </div>

    <!--Text and button-->
    <div class="container">   
        <div class="row d-flex flex-row">
            <!--Col 1 - Tetx-->
            <div class="col-lg-8 offset-lg-2 col-md-8 col-sm-8">
                    <h6 class="text-justify">Have you got some amazing results you would like to share with us? We love to hear success stories from our customers. 
                        Get in touch and share your story with us using this form. We look forward to hearing your Neuron story!</h6>
                        <span>&nbsp;</span>
            </div>
            <!--Col 2 - Button-->
            <div class="col-lg-2 col-md-4 col-sm-4">
                <!--Modal-->
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#leave">
                        Leave a Testimonial
                </button>
                    <div class="modal fade" id="leave" tabindex="-1" role="dialog" aria-labelledby="leave" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Leave a Testimonial</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <!--Form (Modal)-->
                                    <!--Name-->
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name*</label>
                                        <input type="text" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" placeholder="Enter full name">
                                    </div>
                                    <!--Company Name-->
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Company name*</label>
                                        <input type="text" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" placeholder="Enter company name">
                                    </div>
                                    <!--Company Website-->
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Company website*</label>
                                        <input type="text" class="form-control" id="exampleInputText1" aria-describedby="emailHelp" placeholder="Enter company website">
                                    </div>       
                                    <!--Email-->            
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address*</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <!--Text Area-->
                                    <div class="form-group">
                                        <label for="exampleTextarea">Your Testimonial</label>
                                        <small class="form-text text-muted">(maximum 310 characteres)</small>
                                        <textarea class="form-control" id="exampleTextarea" rows="10" maxlength="310"></textarea>
                                    </div>
                                    <!--Agreement to share-->
                                    <fieldset class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                                I am happy for this testimonial to be used by Neuron for promotional purposes
                                            </label>
                                        </div>                                                    
                                    </fieldset>
                                    <!--Submit Button-->
                                    <fieldset class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
        </div>
    </div>

<!--Empty line-->      
<div class="container">
        <p></p>
    </div>
</div>

<!--Testimonials--> 
    <!--Heading--> 
    <div class="container">
        <h3>The Satisfied Customers' Testimonials</h3>
        <hr class="my-4">
    </div>
<!--ROW 1 - 1 row 3 col-->
<div class="container">   
    <div class="row d-flex flex-row">
        <!--ROW 1 - Col 1-->
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div>                          
                <img  class="img-circle wimgl60 wimgm40 wimgs55 mx-auto d-block" src="./img/S2.jpg" alt="Card image">                              
            </div>
            <div>
                <hr class="my-6">
                <h5 class="text-center font-weight-bold text-success">Name</h5>
                <h6 class="text-center font-weight-light text-success">Company</h6>
                <p class="text-center text-success font-italic">Company's website</p>
                <hr class="my-6">
            </div>
            <div class="cardcust1">
                <p class="text-center font-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime.</p>
            </div>
        </div>
        <!--ROW 1 - Col 2-->
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div>                          
                <img  class="img-circle wimgl60 wimgm40 wimgs55 mx-auto d-block" src="./img/S2.jpg" alt="Card image">                              
            </div>
            <div>
                <hr class="my-6">
                <h5 class="text-center font-weight-bold text-success">Name</h5>
                <h6 class="text-center font-weight-light text-success">Company</h6>
                <p class="text-center text-success font-italic">Company's website</p>
                <hr class="my-6">
            </div>
            <div class="cardcust1">
                <p class="text-center font-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime.</p>
            </div>
        </div>
        <!--ROW 1 - Col 3-->
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div>                          
                <img  class="img-circle wimgl60 wimgm40 wimgs55 mx-auto d-block" src="./img/S2.jpg" alt="Card image">                              
            </div>
            <div>
                <hr class="my-6">
                <h5 class="text-center font-weight-bold text-success">Name</h5>
                <h6 class="text-center font-weight-light text-success">Company</h6>
                <p class="text-center text-success font-italic">Company's website</p>
                <hr class="my-6">
            </div>
            <div class="cardcust1">
                <p class="text-center font-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime.</p>
            </div>
        </div>
    </div>
</div>

<!--ROW 2 - 1 row 3 col-->
<div class="container">   
    <div class="row d-flex flex-row">
        <!--ROW 2 - Col 1-->
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div>                          
                <img  class="img-circle wimgl60 wimgm40 wimgs55 mx-auto d-block" src="./img/S2.jpg" alt="Card image">                              
            </div>
            <div>
                <hr class="my-6">
                <h5 class="text-center font-weight-bold text-success">Name</h5>
                <h6 class="text-center font-weight-light text-success">Company</h6>
                <p class="text-center text-success font-italic">Company's website</p>
                <hr class="my-6">
            </div>
            <div class="cardcust1">
                    <p class="text-center font-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime.</p>
            </div>
        </div>
        <!--ROW 2 - Col 2-->
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div>                          
                <img  class="img-circle wimgl60 wimgm40 wimgs55 mx-auto d-block" src="./img/S2.jpg" alt="Card image">                              
            </div>
            <div>
                <hr class="my-6">
                <h5 class="text-center font-weight-bold text-success">Name</h5>
                <h6 class="text-center font-weight-light text-success">Company</h6>
                <p class="text-center text-success font-italic">Company's website</p>
                <hr class="my-6">
            </div>
            <div class="cardcust1">
                    <p class="text-center font-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime.</p>
            </div>
        </div>
        <!--ROW 2 - Col 3-->
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div>                          
                <img  class="img-circle wimgl60 wimgm40 wimgs55 mx-auto d-block" src="./img/S2.jpg" alt="Card image">                              
            </div>
            <div>
                <hr class="my-6">
                <h5 class="text-center font-weight-bold text-success">Name</h5>
                <h6 class=" text-center font-weight-light text-success">Company</h6>
                <p class="text-center text-success font-italic">Company's website</p>
                <hr class="my-6">
            </div>
            <div class="cardcust1">
                    <p class="text-center font-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Amet impedit excepturi iusto eveniet, distinctio animi enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quo aperiam magnam temporibus molestias qui, tempore accusantium totam modi vero error, necessitatibus maxime.</p>
            </div>
        </div>
    </div>
</div>        

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

<!--CONTENT OF THE PAGE-->

<?php include(APPROOT . "/views/includes/footer.php"); ?>