<?php include(APPROOT . "/views/includes/header.php"); ?>


<!--CHECK-->
    <!--Google Maps API-->
    <!--LinkedIn CHAT API-->
    <!-- * Question - Google agenda???-->
    <!--Contact Form-->




<!--Content of the page-->

<span6>&nbsp;</span6>

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
    <iframe src="https://calendar.google.com/calendar/embed?title=Neuron%20Events&amp;showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showTabs=0&amp;height=600&amp;wkst=1&amp;hl=en&amp;bgcolor=%23ffffff&amp;src=d30cgmb84h3dmbvmfn35ukdpoo%40group.calendar.google.com&amp;color=%23875509&amp;ctz=Pacific%2FAuckland" style="min-height: 300px" frameborder="0" scrolling="no"></iframe>
</div>


    <span>&nbsp;</span>   <span>&nbsp;</span>

<!--Skype API--> 
<div class="skype-button bubble" data-bot-id="Neuron Chat"></div>
            </div><!--Fecha col 2a-->
  
    



    <!--Form-->
            <div class="col-lg-6 offset-lg-1 col-md-12 col-sm-12">
                <form>
                    <!--Name-->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name*</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Name">
                    </div>      
                        <!--Company Name-->
                        <div class="form-group">
                            <label for="exampleInputPassword1">Company Name*</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Company name">
                    </div>                              
                        <!--Company Adress-->
                        <div class="form-group">
                            <label for="exampleInputPassword1">Company Adress*</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Company Adress">
                    </div>                             
                        <!--Country-->
                        <div class="form-group">
                        <label for="exampleSelect1">Country*</label>
                            <select class="form-control" id="exampleSelect1" placeholder="Country">
                                
<!--For loop for Coutries ( tbl_country )-->                                
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia, Plurinational State of</option>
                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, the Democratic Republic of the</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Côte d'Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curaçao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and McDonald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Réunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin (French part)</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten (Dutch part)</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.S.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>                             
                    <!--Email-->            
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address*</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <!--Phone Number-->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Phone number">
                        </div>
                    <!--Subject-->
                        <div class="form-group">
                        <label for="exampleSelect1">Subject</label>
                            <select class="form-control" id="exampleSelect1" placeholder="Country">
                                <option value=001>General information</option>
                                <option value=002>Appointment request</option>
                                <option value=003>Feedback</option>
                            </select>
                        </div> 
                    <!--Text Area-->
                    <div class="form-group">
                        <label for="exampleTextarea">Message</label>
                        <textarea class="form-control" id="exampleTextarea" rows="10"></textarea>
                    </div>
                    <!--Submit Button-->
                    </fieldset>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
                </div>
            </div><!--Fecha col 2b-->
        </div><!--Fecha rom-->
    </div>   <!--Fecha container das col a e b-->       
</div><!--Fecha container do body depois da imagem-->  
</div><!--Fecha sessao 2-->    
        <span>&nbsp;</span>
</div><!--Fecha row da pagina-->
</div><!--Fecha container da pagina-->  


<!--JavaScript -->  
    <!--Bootstrap  -->   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAk7ID4iZPTk7o08S1Oc2DJGL7ACqZ1Yz4&callback=initMap" async defer></script>

    <!--Skype API -->
            <script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script>

    </body>
    </html>


<?php include(APPROOT . "/views/includes/footer.php"); ?>