<?php include(APPROOT . "/views/includes/header.php"); ?>


<!--CHECK-->
    <!-- * Question - Loop for printing Aside colunm (Pictures, buttons)-->
    <!-- * Question - Loop for printing DIFFERENT SERVICES (Pictures, texts)-->
    <!-- Contact link-->



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
                    <?php for($i = 0; $i < count($data['media']); $i++)
                    {
                        ?>
                            <div class="col-lg col-md-12 order-md col-sm">
                                <div class="card" style="width: auto;">
                                        <a href="<?php echo $data['links'][$i]; ?>"><img  class="img-fluid poster-images" src=<?php echo $data['media'][$i]['MEDIAPATH']; ?> alt="Card image"></a>
                                    <div class="card">
                                        <a href="<?php echo $data['links'][$i]; ?>" class="btn btn-outline-success btn-block" role="button">Data Architecture</a>
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
    
         
    <!--Big Data-->
        <!--Image - Big Data-->
        <section>
                <div class="card" style="width: auto;">
                    <a href="service.html"></a><img  class="img-fluid" style="width: 100%; max-height: 500px" src="./img/ML2a.jpg" alt="Card image"></a>
                </div>
        </section>
        <!--Text - Big Data-->
        <section class="container">
            <div class="jumbotron-primary">
                <span6>&nbsp;</span6>
                <h3>Big Data</h3>
                <hr class="my-4">            
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, aut, labore adipisci eius et dignissimos exercitationem, possimus eos harum animi voluptates deleniti modi est quo totam itaque sapiente distinctio suscipit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique perferendis, aperiam nihil rem aspernatur aliquid quae temporibus dignissimos illo voluptate, harum laboriosam. Perferendis maiores sequi soluta quos blanditiis quia dolorem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi incidunt at vero error deleniti accusamus fugiat dolores! Mollitia temporibus in fugit doloribus qui, adipisci, accusamus voluptas distinctio blanditiis quae similique?</p>
                    <p class="lead"></p>
                </div>
        </Section>
        <!--Contact Link-->
        <section class="container">
                <span>&nbsp;</span> 
                <hr class="my-4">     
                    <section class="row">
                        <div class="col-lg-9 offset-lg-1 col-md-9 col-sm-9">
                            <h5 class="text-center font-italic">Would you like to learn more about how this technology can benefit your company?</h5>
                            <h5 class="text-center font-italic">Send us an appointement request and we will be pleased to meet you.</h5>
                        </div>
                        <div class="col-lg col-md col-sm">
                            <a href="contact.html"><button type="button" class="btn btn-success btn-lg float-right">Contact</button></a>
                        </div>
                    </Section>
                    <hr class="my-4">
            <span6>&nbsp;</span6>
            </section>

    

<span6>&nbsp;</span6>
</div>
</div>
</div>

<?php include(APPROOT . "/views/includes/footer.php"); ?>