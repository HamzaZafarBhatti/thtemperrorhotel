@extends('front.layouts.front')
@section('content')
<!-- Slider -->
  <!--<img src="images/banner_subpage/banner2.jpg" class="banner-subpage">-->
<!-- #camera_wrap -->
<!-- Slider / End -->

<!-- BEGIN PAGE TITLE -->
<div id="page-title" class="page-title">
    <div class="container">
        <div class="clearfix">
            <div class="grid_12">
                <div class="page-title-holder">
                    {{ $page->left_block1_title}}
                </div>
                <!-- Breadcrumbs -->

                <ul class="breadcrumbs">
                    <li><a href="{{url().'/'}}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
                <!-- Breadcrumbs / End -->
            </div>
        </div> {{ Session::get('message') }}
    </div>
</div>
<!-- END PAGE TITLE -->


<!-- BEGIN CONTENT WRAPPER -->
<div id="content-wrapper" class="content-wrapper">
    <div class="container">
        <!-- Google Map -->
        <div class="clearfix">
            <div class="grid_12">
                {{ $page->left_block1_content}}
                <!-- Google Map Canvas -->
                <div class="map-wrapper">
                    <div class="map-canvas">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCuGRp7Cn9FrtJXeZ2Kp_WqqieB7P18K88&q={{ $page->right_block1_content }}" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- Google Map Canvas / End -->
            </div>
        </div>
        <!-- Google Map / End -->

        <div class="clearfix">
            <div class="grid_9">
                <!-- Contact Form -->
                {{ $page->left_block2_title }}
                <span class="text-red pull-right">* Mandatory field</span>
                <div class="clearfix"></div>
                {{ Form::open(array('url' => 'contacts/feedback/submitfeedback', 'id' => 'contact-form', 'method' => 'post', 'class' => 'contact-form input-blocks')) }}                      

                <div class="clearfix">
                    <div class="grid_3 alpha">
                        <div class="field">
                            <label for="name"><strong>Your Name</strong> <span class="text-red">*</span></label>
                            {{ Form::text('name','',array('id' => 'name','class' => 'validate[required]'))}}
                        </div>
                    </div>
                    <div class="grid_3">
                        <div class="field">
                            <label for="email"><strong>E-mail</strong> <span class="text-red">*</span></label>
                            {{ Form::text('email','',array('id' => 'email','class' => 'validate[required,custom[email]]'))}}
                        </div>
                    </div>
                    <div class="grid_3 omega">
                        <div class="field">
                            <label for="email"><strong>Contact Number</strong> <span class="text-red">*</span></label>

                            {{ Form::text('contact_number','',array('id' => 'contact_number','class' => 'validate[required]'))}}
                        </div>
                    </div>
                    
                    
                    
                    <div class="grid_3 alpha">
                        <div class="field">
                            <label for="name"><strong>Company Name</strong> </label>
                            {{ Form::text('company_name','',array('id' => 'company_name','class' => 'validate[required]'))}}
                        </div>
                    </div>
                    <div class="grid_3">
                        <div class="field">
                            <label for="contact-message"><strong>Company Address</strong> </label>
                            {{ Form::text('company_address','',array('id' => 'company_address','class' => 'validate[required]'))}}
                        </div>
                    </div>
                    <div class="grid_3 omega">
                        <div class="field">
                            <label for="name"><strong>City</strong> </label>
                            {{ Form::text('city','',array('id' => 'city'))}}
                        </div>
                    </div>
                    
                   
                    

                    <div class="grid_3 alpha">
                        <div class="field">
                            <label for="name"><strong>State</strong> </label>
                            {{ Form::text('state','',array('id' => 'state'))}}
                        </div>
                    </div>
                    <div class="grid_3">
                        <div class="field">
                            <label for="contact-message"><strong>Post Code</strong> </label>
                            {{ Form::text('post_code','',array('id' => 'post_code'))}}
                        </div>
                    </div>
                    <div class="grid_3 omega">
                        <div class="field">
                            <label for="name"><strong>Country</strong> </label>
                            <select name="country" id="country">

                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
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
                                <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
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
                                <option value="Cote DIvoire">Cote D'Ivoire</option>
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
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
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
                                <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                <option value="Saipan">Saipan</option>
                                <option value="Samoa">Samoa</option>
                                <option value="Samoa American">Samoa American</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
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
                                <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Erimates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
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
                                <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zaire">Zaire</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="clearfix"></div>
                     <div class="grid_3 alpha">
                        <div class="field">
                            <label for="enquiry_related_to"><strong>Enquiry Related To</strong> </label>
                            {{Form::select('cat_id', $categories_arr,'',['id'=>'cat_id','class'=>"validate[required]"])}}
                        </div>
                    </div>
                    <div class="grid_3">
                        <div class="field">
                            <label for="sub_category"><strong>Sub Category</strong> </label>
                            {{Form::select('subcat_id', $subcategories_arr,'',['id'=>'subcat_id','class'=>"form-control"])}}
                        </div>
                    </div>
                    

                </div>
                
                <div class="clearfix">
                    <div class="grid_9 alpha omega">
                        <div class="field">
                            <label for="subject"><strong>Subject</strong> <span class="text-red">*</span></label>
                            {{ Form::text('subject','',array('id' => 'subject','class' => 'validate[required]'))}}
                        </div>
                    </div>
                </div>
                
                <div class="clearfix">
                    <div class="grid_9 alpha omega">
                        <div class="field">
                            <label for="contact-message"><strong>Your Message</strong> <span class="text-red">*</span></label>
                            {{ Form::textarea('questions_comments','',array('id' => 'questions_comments','class' => 'validate[required]','cols' => '30','rows' => '10'))}}
                        </div>
                    </div>
                </div>
                
                <div class="clearfix">
                    <div class="grid_9 alpha omega">
                        <div class="field">
                            <input type="hidden" value="javascript::grecaptcha.getResponse()" class="hiddenRecaptcha validate[required,funcCall[checkHELLO]]" jqtop="500" name="hiddenRecaptcha" id="hiddenRecaptcha">
                            <label for="contact-message"><strong>Please enter security code below</strong> <span class="text-red">*</span></label>
							<div class="g-recaptcha" data-sitekey="6Le7PyETAAAAALswZzTHjK8VfZIg7gCIAYZc3Sk9"></div>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix">
                    <div class="grid_9 alpha omega">
                        <button class="button" type="submit" name="submit" id="submit" ><span class="button-inner">Send Message &nbsp;<i class="fa fa-send-o"></i></span></button>
                        <div id="response"></div>
                    </div>
                </div>
                
                
                {{ Form::close() }}
                <!-- Contact Form / End -->
            </div>
            <div class="grid_3">
                <!-- Contact Information -->
                {{ $page->left_block2_content }}
                <!-- Contact Information / End -->
            </div>
        </div>
    </div>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</div>
<!-- END CONTENT WRAPPER -->
@stop