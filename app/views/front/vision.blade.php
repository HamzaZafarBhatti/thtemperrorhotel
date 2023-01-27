@extends('front.layouts.front')
@section('content')
<!-- Slider -->
{{ HTML::image('public/uploads/'.$data->backgroundImages,'Quality Assurance',array('class' => 'banner-subpage')) }}

			<!-- #camera_wrap -->
			<!-- Slider / End -->
            
            <!-- BEGIN PAGE TITLE -->
            <div id="page-title" class="page-title">
				<div class="container">
					<div class="clearfix">
						<div class="grid_12">
							<div class="page-title-holder" id='dynamic'>
								<h1>{{$data->title}}</h1>

							</div>
							<!-- Breadcrumbs -->
							
						  <ul class="breadcrumbs">
                            <li><a href="{{url().'/'}}">Home</a></li>
						    <li>About CPI</li>
                            <li>Quality Assurance</li>
					      </ul>
							<!-- Breadcrumbs / End -->
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE TITLE -->
			
			
			<!-- BEGIN CONTENT WRAPPER -->
			<div id="content-wrapper" class="content-wrapper">
				<div class="container">
					<div class="clearfix">
						
                        <div class="grid_12">
                        
                        	<div class="clearfix">
							    <h3 class="entry-title">{{$data->subtitle}}</h3>
                                <!-- Horizontal Rule (double) -->
                                <div class="hr hr__double">
                                  <div class="hr-first"></div>
                                  <div class="hr-second"></div>
                                </div>
                                <!-- Horizontal Rule (double) / End -->
                    
                                <figure class="thumb thumb-fullw-mobile" style="background: transparent;">
                                {{ HTML::image('public/uploads/'.$data->bodyImages) }}
                                <!--<img src="assets/front/images/our_profile/img.jpg" alt="Our profile">--></figure>
<!--                                <p>Maintaining effective Quality Management System through improvement &amp; achieving regulatory compliance by meeting customer requirement &amp; provide quality products for total customer satisfaction.</p>
                               
                                <h5>Our quality philosophy is supported by our core values:</h5> 
                                <div class="list list-style__star">
                                        <ul>
                                            <li>Commit to Fulfill Total Customer Satisfaction.</li>
                                            <li>Value Our People as the Most Important Asset of the Company.</li>
                                            <li>Believe in Personal Commitment to Professionalism and Excellence.</li>
                                            <li>Promote Teamwork, Personal Leadership and a Passion for Quality.</li>
                                            <li>Encourage Innovation and Continual Improvement in everything we do.</li>
                                       
                                        </ul>
                                 </div> 
                                 
                                 <p>CPI is registered with Underwriter Laboratory UL. All manufacturing materials are RoHS &amp; REACH compliance.</p>    

                            </div>
                        
                        </div>
                        
                        
                        <div class="clearfix"></div>
                        
                        
                         Horizontal Rule (double) 
                        <div class="hr hr__double">
                          <div class="hr-first"></div>
                          <div class="hr-second"></div>
                        </div>
                         Horizontal Rule (double) / End 
                        
                        
                        
                        <div class="grid_12">
                        	<h3>Process Validation Capability</h3>

                                <div class="list list-style__check">
                                    <ul>
                                        <li>Protocol development and Validation Master Plan.</li>
                                        <li>Resources (Machine, Man) are allocated to perform DOE &amp; GRR for worst case study and optimization during OQ stage.</li>
                                        <li>Achieve Statistical Process Capability of >1.67 for critical parameters at PQ before mass production.</li>
                                      
                                        <li>Use Statistical tools (Minitab Ver.16.2) for data analysis.</li>
                                        <li>Process Equipment Validation during IQ and OQ are performed to ensure equipment is operated as desired.</li> 
                                        <li>Use advance test equipment for Validation.</li>  
                                    </ul>
                                </div>
                             
                            
                        	
                        </div>
                        
                        
                        
                        <div class="grid_12">
                        
                        	<div class="clearfix">
							    <h3 class="entry-title">International Certification</h3>
                                 Horizontal Rule (double) 
                                <div class="hr hr__double">
                                  <div class="hr-first"></div>
                                  <div class="hr-second"></div>
                                </div>
                                 Horizontal Rule (double) / End 
                    

                                	<div class="list list-style__star">
                                        <ul>
                                            <li><h4>AS 9100: Aerospace Quality System <span class="normal">(Plan in 2016)</span></h4></li> 
                                            <li><h4>ISO 13485:2003 <span class="normal">(Certified in Jun 2012)</span></h4> </li>
                                            <li><h4>ISO 14001:2004 <span class="normal">(Certified in Jan 2010)</span></h4></li>
                                            <li><h4>ISO/TS16949:2009 200 <span class="normal">(Certified in Oct 2005)</span></h4></li>
                                            <li><h4>ISO 9001:2008 <span class="normal">(Certified in 1995 Upgraded in 2000)</span></h4></li>
  
                                        </ul>-->
                        {{$data->text}}
                                 	</div> 

                                      

                            </div>
                        
                        </div>
                        
                        <div class="clearfix"></div>
                        
                        
  
					</div>
				</div>
			</div>
      <!-- END CONTENT WRAPPER -->
	</div>
@stop
