<?php include(APPROOT . "/views/includes/header.php"); ?>


<!--Content of the page-->

<span6>&nbsp;</span6>

<!--Column 1 (aside)-->
<div class="container">
    <div class="row">
        <aside class="col-lg-2 col-md-3 col-sm-4">
                <div class="card text-white bg-dark mb-1 poster-images">
                    <div class="card-body">
                        <h5 class="card-title text-center">Our Services</h5>
                    </div>
                </div>
                <div class="row d-flex flex-row">
                    <?php for($i = 0; $i < count($data['media'])-1; $i++)
                    {
                        ?>
                            <div class="col-lg col-md-12 order-md col-sm">
                                <div class="card poster-images" style="width: auto;">
                                        <a href="<?php echo $data['links'][$i]; ?>"><img  class="img-fluid poster-images" src=<?php echo $data['media'][$i]['MEDIAPATH']; ?> alt="Card image"></a>
                                    <div class="card">
                                        <a href="<?php echo $data['links'][$i]; ?>" class="btn btn-outline-success btn-block" role="button"><?php echo $data['buttons'][$i]['BUTTONDESCRIPTION']; ?></a>
                                    </div>
                                </div>
                            </div> 
                    <?php
                    }
                        ?>  
                </div>
        </aside>


<!--Column 2-->
<!--Image on the top-->
    <div class="col-lg-10 col-md-9 col-sm-12">        
            <section>
                    <div class="card" style="width: auto;">
                        <img  class="img-fluid" style="width: 100%; max-height: 500px" src=<?php echo $data['media'][$i]['MEDIAPATH']; ?> alt="Card image"></a>
                    </div>
            </section> 

<!--Contact-->
<span>&nbsp;</span>   <span>&nbsp;</span>
    <!--Text-->
<div class="container">
<h3><?php echo $data['heading'][0]['HEADINGDESCRIPTION']; ?></h3>
        <hr class="my-4">

    <!--Find Us-->
    <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="jumbotron-primary">                                
                        <div class="card text-white bg-secondary mb-3" style="max-width: 30rem;">
                            <div class="card-header"><?php echo $data['text'][0]['TEXTDESCRIPTION']; ?></div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $data['text'][1]['TEXTDESCRIPTION']; ?></h4>
                                </div>
                        </div>
                    </div>    
            

<!--Google Maps API--> 
    <section class="cardcust">               
        <div id="map"></div>
    </section> 

        <span>&nbsp;</span>   <span>&nbsp;</span>


<!--Google calendar-->
<div class="card mb-3">
    <h5 class="card-header text-center">Attend the next Neuron's Events</h5>    
    <iframe src="<?php echo $data['agenda'][0]; ?>" style="min-height: 300px" frameborder="0" scrolling="no"></iframe>
</div>


    <span>&nbsp;</span>   <span>&nbsp;</span>

<!--Skype API--> 
<div class="skype-button bubble" data-bot-id="Neuron Chat"></div>
            </div><!--Fecha col 2a-->
 
<!--Form-->
            <div class="col-lg-6 offset-lg-1 col-md-12 col-sm-12">
                <form action="/Contact/addData" method="POST"> 
                    <!--Name-->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name*</label>
                        <input type="text" class="form-control" id="name" name="clientName" placeholder="Name">
                    </div>      
                        <!--Company Name-->
                        <div class="form-group">
                            <label for="exampleInputPassword1">Company Name*</label>
                            <input type="text" class="form-control" id="company" name="companyName" placeholder="Company name">
                    </div>                              
                        <!--Company Adress-->
                        <div class="form-group">
                            <label for="exampleInputPassword1">Company Adress*</label>
                            <input type="text" class="form-control" id="address" name="companyAdress" placeholder="Company Adress">
                    </div>                             
                        <!--Country-->
                        <div class="form-group">
                        <label for="exampleSelect1">Country*</label>
                            <select class="form-control" id="country" name="country" placeholder="Country">                                
                        <!--For loop for Coutries ( tbl_country )-->   
                        <?php for($i = 0; $i < count($data['countries']); $i++)
                                {
                                    ?>
                                    <option value='<?php echo $data['countries'][$i]['COUNTRYID'] ?>'><?php echo $data['countries'][$i]['COUNTRYNAME'] ?></option>
                                <?php
                                }
                                    ?>    
                            </select>
                        </div>                             
                    <!--Email-->            
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address*</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="clientEmail" aria-describedby="emailHelp" placeholder="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <!--Phone Number-->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="phoneNumber" placeholder="Phone number">
                        </div>
                    <!--Subject-->
                        <div class="form-group">
                        <label for="exampleSelect1">Subject</label>
                            <select class="form-control" id="exampleSelect1" name="subjectID" placeholder="Subject">
                                <!--For loop for Coutries ( tbl_country )-->   
                        <?php for($i = 0; $i < count($data['subject']); $i++)
                                {
                                    ?>
                                    <option value='<?php echo $data['subject'][$i]['SUBJECTID'] ?>'><?php echo $data['subject'][$i]['SUBJECTDESCRIPTION'] ?></option>
                                <?php
                                }
                                    ?> 
                            </select>
                        </div> 
                    <!--Text Area-->
                    <div class="form-group">
                        <label for="exampleTextarea">Message</label>
                        <textarea class="form-control" id="exampleTextarea" name="textDescription" rows="10"></textarea>
                    </div>
                    <!--Submit Button-->
                    </fieldset>
                            <button type="submit" class="btn btn-primary" name="submitForm">Submit</button>
                    </fieldset>
                </form>
                <?php if(count($_POST)>0)
 echo "Thank you for your message. We will get in touch shortly.";
 ?>


                </div>
            </div><!--Fecha col 2b-->
        </div><!--Fecha rom-->
    </div>   <!--Fecha container das col a e b-->       
</div><!--Fecha container do body depois da imagem-->  
</div><!--Fecha sessao 2-->    
        <span>&nbsp;</span>
</div><!--Fecha row da pagina-->
</div><!--Fecha container da pagina-->  


    <!--Google Maps API -->  
            <script>
                var map;
                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'),
                    {
                    center: {lat: -37.6665, lng: 176.1283},
                    zoom: 15
                    });
                }
            </script>
            <script src="<?php echo $data['maps'][0]; ?>" async defer></script>

    <!--Skype API -->
            <script src="<?php echo $data['skype'][0]; ?>"></script>

    </body>
    </html>


<?php include(APPROOT . "/views/includes/footer.php"); ?>