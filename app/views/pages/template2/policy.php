<?php include(APPROOT . "/views/includes/header.php"); ?>


<!--CHECK-->
    <!-- * Question - Loop for printing Aside colunm (Pictures, buttons)-->
    <!-- Check long Policy text-->




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

<!--Column 1 (aside)-->
<div class="container">
        <div class="row">
            <aside class="col-lg-2 col-md-3 col-sm-0">
                    <div class="card text-white bg-dark mb-1 poster-images">
                        <div class="card-body">
                            <h5 class="card-title text-center">Our Services</h5>
                        </div>
                    </div>
                    <div class="row d-flex flex-row">
                        <!--Data Architecture-->
                            <div class="col-lg col-md-12 order-md col-sm">
                                <div class="card poster-images" style="width: auto;">
                                        <a href="servicedata.html"><img  class="img-fluid poster-images" src="./img/ML3.PNG" alt="Card image"></a>
                                    <div class="card">
                                        <a href="servicedata.html" class="btn btn-outline-success btn-block poster-images" role="button">Data Architecture</a>
                                    </div>
                                </div>
                            </div>            
                        <!--Big Data-->
                            <div class="col-lg col-md order-md-12 col-sm">
                                <div class="card poster-images" style="width: auto;">
                                        <a href="servicebig.html"><img class="img-fluid poster-images" src="./img/ML2.PNG" alt="Card image"></a>
                                    <div class="card">
                                        <a href="servicebig.html" class="btn btn-outline-success btn-block poster-images" role="button">Big Data</a>
                                    </div>
                                </div>
                            </div>
                            
                            <!--AI for Business-->
                            <div class="col-lg col-md order-md-12 col-sm">
                                <div class="card poster-images" style="width: auto;">
                                        <a href="servicebusiness.html"><img class="img-fluid poster-images" src="./img/ML5.PNG" alt="Card image"></a>
                                    <div class="card">
                                        <a href="servicebusiness.html" class="btn btn-outline-success btn-block poster-images" role="button">AI for Business</a>
                                    </div>
                                </div>
                            </div>
                            <!--Solution Integration-->
                            <div class="col-lg col-md order-md-12 col-sm">
                                <div class="card poster-images" style="width: auto;">
                                        <a href="servicesolution.html"><img class="img-fluid poster-images" src="./img/ML6.PNG" alt="Card image"></a>
                                    <div class="card">
                                        <a href="servicesolution.html" class="btn btn-outline-success btn-block poster-images" role="button">Solution Integration</a>
                                    </div>
                                </div>
                            </div>
                    </div>
        </aside>
<!--Column 2-->
    <div class="col-lg-10 col-md-8 col-sm-12">        
            <section>
                    <div class="card" style="width: auto;">
                        <a href="service.html"></a><img  class="img-fluid" style="width: 100%; max-height: 500px" src="./img/ML7.png" alt="Card image"></a>
                    </div>
            </section>              
<!--Terms and conditions-->

<div class="jumbotron-primary">
        <span6>&nbsp;</span6>
        <h3>Terms and Conditions</h3>
        <hr class="my-4">            
    <p class="text-justify">Your privacy is critically important to us.</p>
    <h6>Neuron is located at:<h/6>
    <address>
        315 Levers Road Matua<br/>0210111111			
    </address>

    <p class="text-justify">It is Neuron’s policy to respect your privacy regarding any information we may collect while operating our website. This Privacy Policy applies to <a href="https://neuron.co.nz">https://neuron.co.nz</a> (hereinafter, "us", "we", or "https://neuron.co.nz"). We respect your privacy and are committed to protecting personally identifiable information you may provide us through the Website. We have adopted this privacy policy ("Privacy Policy") to explain what information may be collected on our Website, how we use this information, and under what circumstances we may disclose the information to third parties. This Privacy Policy applies only to information we collect through the Website and does not apply to our collection of information from other sources.</p>
    <p class="text-justify">This Privacy Policy, together with the Terms and conditions posted on our Website, set forth the general rules and policies governing your use of our Website. Depending on your activities when visiting our Website, you may be required to agree to additional terms and conditions.</p>

                <h4>Website Visitors</h4>
    <p class="text-justify">Like most website operators, Neuron collects non-personally-identifying information of the sort that web browsers and servers typically make available, such as the browser type, language preference, referring site, and the date and time of each visitor request. Neuron’s purpose in collecting non-personally identifying information is to better understand how Neuron’s visitors use its website. From time to time, Neuron may release non-personally-identifying information in the aggregate, e.g., by publishing a report on trends in the usage of its website.</p>
    <p class="text-justify">Neuron also collects potentially personally-identifying information like Internet Protocol (IP) addresses for logged in users and for users leaving comments on https://neuron.co.nz blog posts. Neuron only discloses logged in user and commenter IP addresses under the same circumstances that it uses and discloses personally-identifying information as described below.</p>
    
                <h4>Gathering of Personally-Identifying Information</h4>
    <p class="text-justify">Certain visitors to Neuron’s websites choose to interact with Neuron in ways that require Neuron to gather personally-identifying information. The amount and type of information that Neuron gathers depends on the nature of the interaction. For example, we ask visitors who sign up for a blog at https://neuron.co.nz to provide a username and email address.</p>
    
                <h4>Security</h4>
    <p class="text-justify">The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p>
    
                <h4>Advertisements</h4>
    <p class="text-justify">Ads appearing on our website may be delivered to users by advertising partners, who may set cookies. These cookies allow the ad server to recognize your computer each time they send you an online advertisement to compile information about you or others who use your computer. This information allows ad networks to, among other things, deliver targeted advertisements that they believe will be of most interest to you. This Privacy Policy covers the use of cookies by Neuron and does not cover the use of cookies by any advertisers.</p>

                <h4>Links To External Sites</h4>
    <p class="text-justify">Our Service may contain links to external sites that are not operated by us. If you click on a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy and terms and conditions of every site you visit.</p>
    <p class="text-justify">We have no control over, and assume no responsibility for the content, privacy policies or practices of any third party sites, products or services.</p>
    
                <h4>Protection of Certain Personally-Identifying Information</h4>
    <p class="text-justify">Neuron discloses potentially personally-identifying and personally-identifying information only to those of its employees, contractors and affiliated organizations that (i) need to know that information in order to process it on Neuron’s behalf or to provide services available at Neuron’s website, and (ii) that have agreed not to disclose it to others. Some of those employees, contractors and affiliated organizations may be located outside of your home country; by using Neuron’s website, you consent to the transfer of such information to them. Neuron will not rent or sell potentially personally-identifying and personally-identifying information to anyone. Other than to its employees, contractors and affiliated organizations, as described above, Neuron discloses potentially personally-identifying and personally-identifying information only in response to a subpoena, court order or other governmental request, or when Neuron believes in good faith that disclosure is reasonably necessary to protect the property or rights of Neuron, third parties or the public at large.</p>
    <p class="text-justify">If you are a registered user of https://neuron.co.nz and have supplied your email address, Neuron may occasionally send you an email to tell you about new features, solicit your feedback, or just keep you up to date with what’s going on with Neuron and our products. We primarily use our blog to communicate this type of information, so we expect to keep this type of email to a minimum. If you send us a request (for example via a support email or via one of our feedback mechanisms), we reserve the right to publish it in order to help us clarify or respond to your request or to help us support other users. Neuron takes all measures reasonably necessary to protect against the unauthorized access, use, alteration or destruction of potentially personally-identifying and personally-identifying information.</p>
    
                <h4>Aggregated Statistics</h4>
    <p class="text-justify">Neuron may collect statistics about the behavior of visitors to its website. Neuron may display this information publicly or provide it to others. However, Neuron does not disclose your personally-identifying information.</p>
    
                <h4>Cookies</h4>
    <p class="text-justify">To enrich and perfect your online experience, Neuron uses "Cookies", similar technologies and services provided by others to display personalized content, appropriate advertising and store your preferences on your computer.</p>
    <p class="text-justify">A cookie is a string of information that a website stores on a visitor’s computer, and that the visitor’s browser provides to the website each time the visitor returns. Neuron uses cookies to help Neuron identify and track visitors, their usage of https://neuron.co.nz, and their website access preferences. Neuron visitors who do not wish to have cookies placed on their computers should set their browsers to refuse cookies before using Neuron’s websites, with the drawback that certain features of Neuron’s websites may not function properly without the aid of cookies.</p>
    <p class="text-justify">By continuing to navigate our website without changing your cookie settings, you hereby acknowledge and agree to Neuron's use of cookies.</p>
    
                <h4>Privacy Policy Changes</h4>
    <p class="text-justify">Although most changes are likely to be minor, Neuron may change its Privacy Policy from time to time, and in Neuron’s sole discretion. Neuron encourages visitors to frequently check this page for any changes to its Privacy Policy. Your continued use of this site after any change in this Privacy Policy will constitute your acceptance of such change.</p>

        <h4></h4>			  
            <p class="text-justify"></p>			
    
    <small class=text-muted>Credit & Contact Information</small>
        <small class=text-muted>This privacy policy was created at <a style="color:inherit;text-decoration:none;" href="https://termsandconditionstemplate.com/privacy-policy-generator/" title="Privacy policy template generator" target="_blank">termsandconditionstemplate.com</a>.</small>

        <p class="lead">
            </div>
        </div>          
    </div>
</div>
</div>
</div>

   <!--Contact Link-->
   <section class="container poster-card">
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

<?php include(APPROOT . "/views/includes/footer.php"); ?>