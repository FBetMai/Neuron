<?php include(APPROOT . "/views/includes/header.php"); ?>


<!--CHECK-->
    <!--Subscribe Form - MODAL-->
    <!--Loop for printing News (Picture, title, subtitle, text)-->



<!--CONTENT OF THE PAGE-->

<!--Top Empty line-->      
<div class="container">
        <p></p>
    </div>
</div>

<!--Subscribe-->
    <!--Heading-->
    <div class="container">   
        <div class="jumbotron-primary">      
            <h3>Subscribe</h3>
            <hr class="my-3">  
        </div>
    </div>
    <!--Text and button-->
    <div class="container">   
            <div class="row d-flex flex-row">
                <!--Col 1 - Tetx-->
                <div class="col-lg-8 offset-lg-2 col-md-8 col-sm-8">
                    <h6 class="text-right">Stay up-to-date with the latest news of technology for business. Subscribe to receive our newsletter.</h6>
                    <span>&nbsp;</span>
                </div>
                <!--Col 2 - Button-->
                <div class="col-lg-2 col-md-4 col-sm-4">
                    <!--Modal-->
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#subscribe">
                            Subscribe
                    </button>
                    <div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-labelledby="subscribe" aria-hidden="true">
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
                                    <form>
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

<!--News-->  
    <!--Heading--> 
    <div class="container">
        <h3>News</h3>
        <hr class="my-4">
    </div>

<!--ROW 1 - 1 row 3 col-->
<div class="container">   
    <div class="row d-flex flex-row">
        <!--ROW 1 - Col 1-->
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card mb-3">
                <iframe class ="cardcust" src="https://www.youtube.com/embed/vORRyZQDR8Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                             
            </div>
            <div>
                <hr class="my-6">
                <a href="https://www.youtube.com/embed/vORRyZQDR8Y"><h5 class="text-center font-weight-bold text-success">Globalization 4.0</h5></a>
                    <h6 class="text-center text-muted text-center">World Economic Forum, 16/11/2018</h6>
                <hr class="my-6">
            </div>
            <div class="cardcust1">
                <p class="card-text text-justify">Globalization is being redefined politically, economically and ecologically at a moment when advanced technologies have ushered in a 4th Industrial 
                        Revolution at a speed and scale unparalleled in human history.</p>
            </div>
        </div>
        <!--ROW 1 - Col 2-->
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card mb-3">
                    <iframe class ="cardcust" src="https://www.youtube.com/embed/kpW9JcWxKq0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                             
            </div>
            <div>
                <hr class="my-6">
                <a href="https://www.youtube.com/embed/kpW9JcWxKq0"><h5 class="text-center font-weight-bold text-success">The 4th Industrial Revolution</h5></a>
                    <h6 class="text-center text-muted text-center">World Economic Forum, 18/07/2016</h6>
                <hr class="my-6">
            </div>
            <div class="cardcust1">
                <p class="card-text text-justify">It is characterized by a range of new technologies that are fusing 
                        the physical, digital and biological worlds, impacting all disciplines, economies and industries, and even challenging ideas about what it means to be human.</p>
            </div>
        </div>
        <!--ROW 1 - Col 3-->
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card mb-3">
                    <iframe class ="cardcust" src="https://www.youtube.com/embed/YOEFogy9VSQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                             
            </div>
            <div>
                <hr class="my-6">
                <a href="https://www.youtube.com/embed/YOEFogy9VSQ"><h5 class="text-center font-weight-bold text-success">Applications of AI in Business</h5></a>
                    <h6 class="text-center text-muted text-center">Growth Tribe, 19/09/2018</h6>
                <hr class="my-6">
            </div>
            <div class="cardcust1">
                <p class="card-text text-justify">Artificial Intelligence is a marketers secret weapon right now and most big opportunities have not yet been tapped. 
                        Now is the time to get ahead of the game. Predictive analysis to forecast products and Customer Lifetime Value.</p>
            </div>
        </div>
    </div>
</div>


<!--ROW 2- 2row 3 col-->
<div class="container">   
    <div class="row d-flex flex-row">
        <!--ROW 2- Col 1-->
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card mb-3">
                    <a class="cardcust" href="https://www.forbes.com/sites/bernardmarr/2019/03/21/why-every-company-needs-an-artificial-intelligence-ai-strategy-for-2019/#5111ab4e68ea"><img class="img-fluid mx-auto" src="./img/Forbes.PNG" alt="Card image"></a>                             
            </div>
            <div>
                <hr class="my-6">
                <a href="https://www.forbes.com/sites/bernardmarr/2019/03/21/why-every-company-needs-an-artificial-intelligence-ai-strategy-for-2019/#5111ab4e68ea"><h5 class="text-center font-weight-bold text-success">Why Every Company Needs An Artificial Intelligence (AI) Strategy For 2019</h5></a>
                    <h6 class="text-center text-muted text-center">Forbes, 21/03/2019</h6>
                <hr class="my-6">
            </div>
            <div class="cardcust1">
                <p class="card-text text-justify">Why Every Company Needs An Artificial Intelligence (AI) Strategy For 2019. AI is ultimately going to transform every business, in every industry.</p>
            </div>
        </div>
        <!--ROW 2 - Col 2-->
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card mb-3">
                    <a class="cardcust3" href="https://www.analyticsinsight.net/the-impact-of-big-data-on-different-industries/"><img class="img-fluid mx-auto" src="./img/BD1.PNG" alt="BD1"></a>
            </div>
            <div>
                <hr class="my-6">
                <a href="https://www.analyticsinsight.net/the-impact-of-big-data-on-different-industries/"><h5 class="text-center font-weight-bold text-success">The Impact of Big Data on Different Industries</h5></a>
                    <h6 class="text-center text-muted text-center">Analytics Insight, 24/03/2019</h6>
                <hr class="my-6">
            </div>
            <div class="cardcust1">
                <p class="card-text text-justify">Healthcare; Education; Telecom; Banking and Finance; Consumer Goods Industry.</p>
            </div>
        </div>
        <!--ROW 2 - Col 3-->
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card mb-3">
                    <iframe class="cardcust" src="https://www.youtube.com/embed/eo4oQZdJAaQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div>
                <hr class="my-6">
                <a href="https://www.youtube.com/embed/eo4oQZdJAaQ"><h5 class="text-center font-weight-bold text-success">Big Data Business Impact</h5></a>
                    <h6 class="text-center text-muted text-center">Oracle Big Data, 25/10/2015</h6>
                <hr class="my-6">
            </div>
            <div class="cardcust1">
                <p class="card-text text-justify">Big Data allows businesses to do big things. Oracle provides leadership and solutions to business ready to maximize big data.</p>
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

<?php include(APPROOT . "/views/includes/footer.php"); ?>