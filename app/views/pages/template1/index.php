<?php include(APPROOT . "/views/includes/header.php"); ?>

<!--CHECK-->


<!--Empty space-->
<div class="row d-flex flex-row">
    <div class="col-lg col-md order-md col-sm order-sm">
            <span>&nbsp;</span>
    </div>
</div>
<!--4 coloumns - SAME size-->
<div class="container">
    <div class="row d-flex flex-row">
        <?php for($i = 0; $i < count($data['media']); $i++)
        {
            ?>
            <div class="col-lg col-md col-sm-6">
                <div class="card" style="width: auto;">
                    <a href="<?php echo $data['links'][$i]; ?>"><img  class="img-fluid poster-images" src=<?php echo $data['media'][$i]['MEDIAPATH']; ?> alt="Card image"></a>
                        <div class="card">
                            <a href="<?php echo $data['links'][$i]; ?>" class="btn btn-outline-success btn-lg btn-btn-block" role="button"><?php echo $data['buttons'][$i]; ?></a>
                        </div>
                </div>
            </div>
        <?php
        }
            ?> 
    </div>
</div>
 
<!--Empty space-->
    <div class="row d-flex flex-row">
        <div class="col-lg col-md  col-sm ">
            <span>&nbsp;</span>
        </div>
    </div>
            

<!--Text space-->
<div class="container"> 
    <div class="row d-flex flex-row">
        <div class="col-lg col-md col-sm-12 ">
            <div class="jumbotron-primary">
                <h3><?php echo $data['heading'][0]['HEADINGDESCRIPTION']; ?></h3>
                <hr class="my-4">    
            </div>
        </div>
    </div>
</div>
<div class="container">          
    <div class="row">
        <div class="col-lg-9 offset-lg-3 col-md-12 col-sm-12">
            <p class="text-justify"><?php echo $data['text'][0]['TEXTDESCRIPTION']; ?></p>
            <p class="lead"></p>
        </div>
    </div>          
</div>
        </div>
    </div>

<!--Empty space-->
    <div class="row d-flex flex-row">
        <div class="col-lg col-md col-sm">
            <span>&nbsp;</span>
        </div>
    </div>
</div>

<?php include(APPROOT . "/views/includes/footer.php"); ?>