<!doctype html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IMM GLOBAL PARTNERS NETWORK</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/nprogress@0.2.0/nprogress.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="build/css/intlTelInput.css">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="modal fade" id="KingschatModal" tabindex="-1" role="dialog" aria-labelledby="KingschatModalLabel"
         aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="KingschatModalLabel">KingsChat Code</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" align="center">
                    <h1>IMM01</h1>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" onclick="submitKingschat()">Submit Data</button>
                </div>
            </div>
        </div>
    </div>

    <section class="fxt-template-animation fxt-template-layout11 has-animation">

        <div class="container">

            <div class="row align-items-center justify-content-center">

                <div class="col-xl-6 col-lg-7 col-sm-12 col-12 fxt-bg-color">

                    <div class="fxt-content"> <img src="img/letterhead.jpg" alt="Logo" style="width:100%;">
                        <div class="fxt-header">
                            <?php session_start();
                                if(isset($_SESSION['msg']) && $_SESSION['msg'] != ''){
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                }
                            ?>
                            <a class="fxt-logo"></a><br />
                            <h2>IMM GLOBAL PARTNERS NETWORK</h2>
                            <h6>Become a global partner  and  reach billions of people across the globe.</h6>
                        </div>                            
                        <div class="fxt-form">
                            <form action="insert.php" method="post" id="forme">
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <select name="title" id="mytitle"class="form-control">
                                            <option value="">Select Title</option>
                                            <option value="Brother" >Brother</option>
                                            <option value="Sister">Sister</option>
                                            <option value="Pastor">Pastor</option>
                                            <option value="Deacon">Deacon</option>
                                            <option value="Deaconess">Deaconess</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">                                              
                                        <input type="text" id="surname" class="form-control" name="surname" placeholder="Surname" required="required" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="text" id="first" class="form-control" name="first" placeholder="Firstname" required="required" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="number" id="phone" class="form-control" name="phone" placeholder="Phone
                                        +234" required="required" >
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">                                              
                                        <input type="email" id="email" class="form-control" name="email" placeholder="Email" required="required" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <select name="member" id="mymember" class="form-control">
                                            <option value="" >Are you a member of Christ Embassy?</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="zonalBox" style="display:none">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">

                                    <select name="zonal" id="myzonal"class="form-control">
                                        <option value="" >Please select your Zone</option>
                                        <option value='Christ Embassy Abuja Ministry Centre'>Christ Embassy Abuja Ministry Centre</option>
                                        <option value=' Christ Embassy Canada Region'> Christ Embassy Canada Region</option>
                                        <option value=' Christ Embassy Eastern Europe Region '> Christ Embassy Eastern Europe Region </option>
                                        <option value='Christ Embassy Warri Ministry Centre'>Christ Embassy Warri Ministry Centre</option>
                                        <option value='Christ Embassy Accra Ghana Zone'>Christ Embassy Accra Ghana Zone</option>
                                        <option value='Christ Embassy Middle East Zone/South East Asia Virtual Region'>Christ Embassy Middle East Zone/South East Asia Virtual Region</option>
                                        <option value='Christ Embassy Port Harcourt Zone 2'>Christ Embassy Port Harcourt Zone 2</option>
                                        <option value='Christ Embassy Abeokuta Ministry Center'>Christ Embassy Abeokuta Ministry Center</option>
                                        <option value='Christ Embassy Ethiopia'>Christ Embassy Ethiopia</option>
                                        <option value='Christ Embassy Ibadan South'>Christ Embassy Ibadan South</option>
                                        <option value='Christ Embassy Owerri South East Virtual Zone 1'>Christ Embassy Owerri South East Virtual Zone 1</option>
                                        <option value='Christ Embassy Port Harcourt Central  Zone 3'>Christ Embassy Port Harcourt Central  Zone 3</option>
                                        <option value='Christ Embassy Port Harcourt  Ministry Centre '>Christ Embassy Port Harcourt  Ministry Centre </option>
                                        <option value='Christ Embassy Lagos Zone 2'>Christ Embassy Lagos Zone 2</option>
                                        <option value='Christ Embassy Lagos Zone 3'>Christ Embassy Lagos Zone 3</option>
                                        <option value='Christ Embassy Lagos Zone 5'>Christ Embassy Lagos Zone 5</option>
                                        <option value='Christ Embassy Lagos Zone 5'>Christ Embassy Lagos Zone 5</option>
                                        <option value='Christ Embassy Lagos Zone 5'>Christ Embassy Lagos Zone 5</option>
                                        <option value='Christ Embassy Lagos Virtual Zone'>Christ Embassy Lagos Virtual Zone</option>
                                        <option value='Christ Embassy Asaba South East Virtual Zone 2'>Christ Embassy Asaba South East Virtual Zone 2</option>
                                        <option value='Christ Embassy Calabar Ministry Center'>Christ Embassy Calabar Ministry Center</option>
                                        <option value='Christ Embassy Lagos Zone 1'>Christ Embassy Lagos Zone 1</option>
                                        <option value='Christ Embassy Lagos Zone 4'>Christ Embassy Lagos Zone 4</option>
                                        <option value='Christ Embassy Port Harcourt  Zone 1'>Christ Embassy Port Harcourt  Zone 1</option>
                                        <option value='Christ Embassy Benin Zone 1'>Christ Embassy Benin Zone 1</option>
                                        <option value='Christ Embassy Mid West Zone'>Christ Embassy Mid West Zone</option>
                                        <option value='Christ Embassy UK, Zone 1'>Christ Embassy UK, Zone 1</option>
                                        <option value='Christ Embassy UK, Zone 1'>Christ Embassy UK, Zone 1</option>
                                        <option value='Christ Embassy UK, Zone 2'>Christ Embassy UK, Zone 2</option>
                                        <option value='Christ Embassy UK, Zone 3'>Christ Embassy UK, Zone 3</option>
                                        <option value='Christ Embassy Onitsha Zone'>Christ Embassy Onitsha Zone</option>
                                        <option value='Christ Embassy Southern Africa Zone 1'>Christ Embassy Southern Africa Zone 1</option>
                                        <option value='Christ Embassy Southern Africa Zone 2'>Christ Embassy Southern Africa Zone 2</option>
                                        <option value='Christ Embassy Southern Africa Zone 3'>Christ Embassy Southern Africa Zone 3</option>
                                        <option value='Christ Embassy Southern Africa Zone 4'>Christ Embassy Southern Africa Zone 4</option>
                                        <option value='Christ Embassy Sothern Africa Zone 5'>Christ Embassy Sothern Africa Zone 5</option>
                                        <option value='Christ Embassy Houston Texas, USA'>Christ Embassy Houston Texas, USA</option>
                                        <option value='Christ Embassy Warri Sub Zone'>Christ Embassy Warri Sub Zone</option>
                                        <option value='Christ Embassy Kenya Zone'>Christ Embassy Kenya Zone</option>
                                        <option value='Christ Embassy  South South   Zone 1 (Bayelsa)'>Christ Embassy  South South   Zone 1 (Bayelsa)</option>
                                        <option value='Christ Embassy Kano Northern West Zone 2'>Christ Embassy Kano Northern West Zone 2</option>
                                        <option value='Christ Embassy Edo North Central Zone'>Christ Embassy Edo North Central Zone</option>
                                        <option value='Christ Embassy Nungua East West Central  Africa Zone 5'>Christ Embassy Nungua East West Central  Africa Zone 5</option>
                                        <option value='Christ Embassy  France  Zone 2 '>Christ Embassy  France  Zone 2 </option>
                                        <option value='Christ Embassy Douala Cameroon East Central West Africa Zone 4'>Christ Embassy Douala Cameroon East Central West Africa Zone 4</option>
                                        <option value='Christ Embassy South South  Zone 2 (Uyo)'>Christ Embassy South South  Zone 2 (Uyo)</option>
                                        <option value='Christ Embassy Jos North Central  Zone 1'>Christ Embassy Jos North Central  Zone 1</option>
                                        <option value='Christ Embassy East Africa  Zone 3'>Christ Embassy East Africa  Zone 3</option>
                                        <option value='Christ Embassy Kaduna, Northern Zone 2'>Christ Embassy Kaduna, Northern Zone 2</option>
                                        <option value='Christ Embassy Western Europe Zone 3'>Christ Embassy Western Europe Zone 3</option>
                                        <option value='Christ Embassy UK Zone 1 Region 2'>Christ Embassy UK Zone 1 Region 2</option>
                                        <option value='Christ Embassy Europe  Zone 4'>Christ Embassy Europe  Zone 4</option>
                                        <option value='Christ Embassy Yola North East  Zone 1'>Christ Embassy Yola North East  Zone 1</option>
                                        <option value='Christ Embassy Netherlands Europe  Zone 1'>Christ Embassy Netherlands Europe  Zone 1</option>
                                        <option value='Christ Embassy North Central Makurdi'>Christ Embassy North Central Makurdi</option>
                                        <option value='Christ Embassy Congo DRC'>Christ Embassy Congo DRC</option>
                                        <option value='Christ Embassy Benin  Zone 2'>Christ Embassy Benin  Zone 2</option>
                                        <option value='Christ Embassy UK Zone 4, Region 2'>Christ Embassy UK Zone 4, Region 2</option>
                                        <option value='Christ Embassy South West  Zone 2 (Osogbo)'>Christ Embassy South West  Zone 2 (Osogbo)</option>
                                        <option value='Christ Embassy USA Region 1  Zone 2'>Christ Embassy USA Region 1  Zone 2</option>
                                        <option value='Christ Embassy East West Central Africa  Zone 2 (cote d'Ivoire)'>Christ Embassy East West Central Africa  Zone 2 (cote d'Ivoire)</option>
                                        <option value='Christ Embassy South West  Zone 3 (Abeokuta)'>Christ Embassy South West  Zone 3 (Abeokuta)</option>
                                        <option value='Christ Embassy Abuja Zone'>Christ Embassy Abuja Zone</option>
                                        <option value='Christ Embassy Aba Zone'>Christ Embassy Aba Zone</option>
                                        <option value='Christ Embassy Uk  Zone 3 Region 2'>Christ Embassy Uk  Zone 3 Region 2</option>
                                        <option value='Christ Embassy Texas Zone 1 &2'>Christ Embassy Texas Zone 1 &2</option>
                                        <option value="Not listed">Not listed</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <select id="mycountry" class="form-control" name="country">
                                            <option value="">Select Your Country</option>
                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>


                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <select name="partner" id="mypartner" class="form-control">
                                            <option value="" >SELECT YOUR PARTNERSHIP
                                                OPTION</option>
                                            <option value="1,000,000 Online Outreaches with Technology">1,000,000 Online Outreaches with
                                                Technology</option>
                                            <option  value="Translation Outreach Projec">Translation Outreach Project</option>
                                            <option  value="Global Ministry Transmission and Translation Project">Global Ministry Transmission and Translation Project</option>
                                            <option  value="Setting up New Mobile Live Translation Studios">Setting up New Mobile Live Translation Studios</option>
                                            <option  value="Global Ministry Transmission Sponsorship">Global Ministry Transmission Sponsorship</option>
                                            <option  value="1 Million images on Ceflix Campaign( Get free personalized greetings, events and occasion designs for one month on ceflix images">1 Million images on Ceflix Campaign( Get free personalized  greetings,events and occasion designs for one month on ceflix images</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">
                                        <input type="number" id="amount" class="form-control" name="amount" placeholder="Amount" required="required" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">

                                        <input  name="submit" class="fxt-btn-fill" id="payee2" value="Pay with KingsPay"
                                                onclick="payWithKingsChat()" style="text-align: center">
<!--                                        <button type="submit" name="submit" class="fxt-btn-fill">Log in</button>-->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">

                                        <input name="submit" class="fxt-btn-fill" id="payee" value="Pay with Debit/Credit Card" onclick="payWithPaystack()" style="text-align: center">
                                        <!--                                        <button type="submit" name="submit" class="fxt-btn-fill">Log in</button>-->
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>                    
            </div>
        </div>



        <!-- Modal -->

    </section>





    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <script src="js/notify.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- Validator js -->
    <script src="js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/nprogress@0.2.0/nprogress.js"></script>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script src="build/js/intlTelInput.js"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
             dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
             hiddenInput: "full_number",
             //initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
             nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            //utilsScript: "build/js/utils.js",
        });
    </script>
    <script>

        $("#zonalBox").hide();

        $("#mymember").change(function (){

            var amountex =   $(this).children("option:selected").attr("value")

            if(amountex == "Yes"){
                $("#zonalBox").show(500);
            }else{
                ("#zonalBox").hide();
            }

        });



        function payWithKingsChat(){

            var title =  $( "#mytitle" ).val();
            var first = $('input[name=first]').val();
            var surname = $('input[name=surname]').val();
            var email = $('input[name=email]').val();
            var phone = $('input[name=phone]').val();
            var partner = $( "#mypartner" ).val();
            var zonal = $( "#myzonal" ).val();
            var member = $( "#mymember" ).val();
            var amount = $('input[name=amount]').val();
            var country = $( "#mycountry" ).val();



            //alert(var countryCode = $('#phone-number-field').intlTelInput("getDialCode"););


            if(title != "" && first != "" && surname != "" && email != "" && phone != "" && partner != "" && member != "" && amount != "" && country !="") {

                $('#KingschatModal').modal('show');

                $('#KingschatModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });

            }else{

                $.notify("All fields are compulsory", {className: 'error',
                    autoHide: true,} );

            }


        }


        function submitKingschat (){
            var title =  $( "#mytitle" ).val();
            var first = $('input[name=first]').val();
            var surname = $('input[name=surname]').val();
            var email = $('input[name=email]').val();
            var phone = $('input[name=phone]').val();
            var partner = $( "#mypartner" ).val();
            var zonal = $( "#myzonal" ).val();
            var member = $( "#mymember" ).val();
            var country = $( "#mycountry" ).val();
            var amount = $('input[name=amount]').val();


            if(title != "" && first != "" && surname != "" && email != "" && phone != "" && partner != ""  && member
                != "" && amount != "" && country !="") {
                $("#payee2").hide(500);
                NProgress.start();
                event.preventDefault();


                var mymeme = $( "#myzonal" ).val();
                var memb_final = ""

                if(mymeme != "" && mymeme !=null){
                    memb_final = mymeme
                }

                var formData = {
                    'title'              : $( "#mytitle" ).val(),
                    'first'             : $('input[name=first]').val(),
                    'surname'    : $('input[name=surname]').val(),
                    'email'    : $('input[name=email]').val(),
                    'phone'    : $('input[name=phone]').val(),
                    'zonal'    : memb_final,
                    'partner'    : $( "#mypartner" ).val(),
                    'member'    : $( "#mymember" ).val(),
                    'country'    : $( "#mycountry" ).val(),
                    'amount'  : $('input[name=amount]').val(),
                    'type'  : "KingsChat",


                };


                //alert("I got here");

                $.ajax({
                    type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url         : 'insert2.php', // the url where we want to POST
                    data        : formData,
                    // dataType    : 'json', // what type of data do we expect back from the server
                    encode          : true
                })

                //  NProgress.start()
                // using the done promise callback
                    .done(function(data) {

                        // alert("I dididid")
                        // log data to the console so we can see
                        // console.log("I got here too just now");
//
//                    //if number is on kingschat then process
                        if(data){
                            NProgress.done();
                            $.notify("Your registration was successful", {className: 'success',autoHide: false,
                            } );
                            $('#forme')[0].reset();
                            $('#KingschatModal').modal('hide');
                            $("#payee2").show(500);


                        }else{
                            NProgress.done();
                            $.notify("There was an issue with your payment, please contact IMM support to rectify this error", {className: 'error',autoHide: false,
                            } );
                            $('#KingschatModal').modal('hide');
                            $("#payee2").show(500);

                        }

                        // here we will handle errors and validation messages
                    });
            }
        }
        
        
        
        
        
        
        function payWithPaystack(){


            var title =  $( "#mytitle" ).val();
            var first = $('input[name=first]').val();
            var surname = $('input[name=surname]').val();
            var email = $('input[name=email]').val();
            var phone = $('input[name=phone]').val();
            var partner = $( "#mypartner" ).val();
            var zonal = $( "#myzonal" ).val();
            var member = $( "#mymember" ).val();
            var amount = $('input[name=amount]').val();
            var country = $( "#mycountry" ).val();


            if(title != "" && first != "" && surname != "" && email != "" && phone != "" && partner != "" && member !=
                ""  && amount != "" && country != ""){
                NProgress.start();
                event.preventDefault();

                $.notify("Connecting to gateway... Please wait ...", {className: 'warning',autoHide: true,} );
                //$.notify("Connecting to gateway... Please wait ...", "warn");
                $("#payee").hide(500);

                            var handler = PaystackPop.setup({
                                key: 'pk_test_150c834486ba274657c0bb15d188d6eafd6cdd9a',
                                email: email,
                                amount: amount * 100,
                                currency: "NGN",
                                //ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                                metadata: {
                                    custom_fields: [
                                        {
                                            display_name: "Mobile Number",
                                            variable_name: "mobile_number",
                                            value: "+2348012345678"
                                        }
                                    ]
                                },
                                callback: function(response){
                                    $.notify("... Verifying Payment ... Please wait ...", {className: 'warning',
                                        autoHide: false,} );
                                    submit_form(response.reference)
                                    //alert('success. transaction ref is ' + response.reference);
                                },
                                onClose: function(){
                                    $.notify("...Payment window closed", {className: 'warning',
                                        autoHide: true,} );
                                }
                            });

                            handler.openIframe();

                        // here we will handle errors and validation messages
                    }

                // stop the form from submitting the normal way and refreshing the page

            else{
                $.notify("All fields are compulsory", {className: 'error',
                    autoHide: true,} );

            }



        }


        function submit_form(response) {

            var mymeme = $( "#myzonal" ).val();
            var memb_final = ""

            if(mymeme != "" && mymeme !=null){
                memb_final = mymeme
            }

            var formData = {
                'title'              : $( "#mytitle" ).val(),
                'first'             : $('input[name=first]').val(),
                'surname'    : $('input[name=surname]').val(),
                'email'    : $('input[name=email]').val(),
                'phone'    : $('input[name=phone]').val(),
                'zonal'    : memb_final,
                'partner'    : $( "#mypartner" ).val(),
                'member'    : $( "#mymember" ).val(),
                'country'    : $( "#mycountry" ).val(),
                'amount'  : $('input[name=amount]').val(),
                'type'  : "Card",


            };

            //alert("I got here");

            $.ajax({
                type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url         : 'insert.php?reference='+response, // the url where we want to POST
                data        : formData,
               // dataType    : 'json', // what type of data do we expect back from the server
                encode          : true
            })

          //  NProgress.start()
            // using the done promise callback
                .done(function(data) {

                   // alert("I dididid")
                    // log data to the console so we can see
                   // console.log("I got here too just now");
//
//                    //if number is on kingschat then process
                    if(data){
                        NProgress.done();
                        $.notify("Your registration was successful", {className: 'success',autoHide: false,
                        } );
                        $('#forme')[0].reset();
                        $("#payee").show(500);

                    }else{
                        NProgress.done();
                        $.notify("There was an issue with your payment, please contact IMM support to rectify this error", {className: 'error',autoHide: false,
                        } );
                        $("#payee").show(500);
                    }

                    // here we will handle errors and validation messages
                });



        }
    </script>

</body>


</html>