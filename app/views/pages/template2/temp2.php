<?php include(APPROOT . "/views/includes/header.php"); ?>

<!--Empty space-->
<div class="row d-flex flex-row">
    <div class="col-lg col-md order-md col-sm order-sm">
            <span>&nbsp;</span>
    </div>
</div>
<!--Column 1 (aside)-->
<div class="container">
    <div class="row">
        <aside class="col-lg-2 col-md-3 col-sm-4">
                <div class="card text-white bg-dark mb-1">
                    <div class="card-body">
                        <h5 class="card-title text-center">Our Services</h5>
                    </div>
                </div>
                <div class="row d-flex flex-row">
                    <?php for($i = 0; $i < count($data['media'])-1; $i++)
                    {
                        ?>
                            <div class="col-lg col-md-12 order-md col-sm">
                                <div class="card" style="width: auto;">
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
    <div class="col-lg-10 col-md-8 col-sm-8">
        <!--Service Image-->
        <section>
                <div class="card" style="width: auto;">
                    <a href="#"></a><img  class="img-fluid" style="width: 100%; max-height: 500px" src=<?php echo $data['media'][$i]['MEDIAPATH']; ?> alt="Card image"></a>
                </div>
        </section>

        <!--Text-->
        <section class="container">
            <div class="jumbotron-primary">
                <span6>&nbsp;</span6>                
                    <h3><?php echo $data['heading'][0]['HEADINGDESCRIPTION']; ?></h3>
                        <hr class="my-4">    

                        <?php for($i = 0; $i < count($data['text'])-1; $i++)
                         {
                            ?>       
                            <p class="text-justify"><?php echo $data['text'][$i]['TEXTDESCRIPTION']; ?></p>
                        <?php
                        }
                        ?>  
                            <p class="lead"></p>
            </div>
            </Section>
        <!--Contact Link-->
        <section class="container">
                <span>&nbsp;</span> 
                <hr class="my-4">     
                    <section class="row">
                        <div class="col-lg-9 offset-lg-1 col-md-9 col-sm-9">
                            <h5 class="text-center font-italic"><?php echo $data['text'][3]['TEXTDESCRIPTION']; ?></h5>
                        </div>
                        <div class="col-lg col-md col-sm">
                            <a href="<?php echo URLROOT . 'pages/index4/8'; ?><button type="button" class="btn btn-success btn-lg float-right">Contact</button></a>
                        </div>
                    </Section>
                    <hr class="my-4">
            <span6>&nbsp;</span6>
        </section>
   
<span6>&nbsp;</span6>
</div>
</div>
</div>
</div>

<?php include(APPROOT . "/views/includes/footer.php"); ?>