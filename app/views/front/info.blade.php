@extends('front.layouts.front')
@section('content')
			<!-- Slider -->
			@if($data["backgroundImages_active"])
		  	{{ HTML::image('public/uploads/'.$data->backgroundImages,'banner-subpage') }}
            @endif
            
			<!-- #camera_wrap -->
			<!-- Slider / End -->
            
            <!-- BEGIN PAGE TITLE -->
            <div id="page-title" class="page-title">
				<div class="container">
					<div class="clearfix">
						<div class="grid_12">
							<div class="page-title-holder" id='dynamic'>
								<!--<h1>About CPI</h1>-->
								<h1>{{$data->title}}</h1>
							</div>
							<!-- Breadcrumbs -->
							
						  <ul class="breadcrumbs">
                            <li><a href="{{url().'/'}}">Home</a></li>
						    <li>About CPI</li>
                            <li>Customer Experience</li>
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
									@if($data["bodyImages_active"])
								
									{{ HTML::image('public/uploads/'.$data->bodyImages) }}
                                @endif
									<!--<img src="assets/front/images/our_profile/img.jpg" alt="Our profile">--></figure>
                                {{$data->text}}
<!--                                <p>CPI makes significant investments to ensure we're delivering extraordinary experience to our customers. From early engineering collaboration to in-depth process knowledge and manufacturing know-how at the factory floor to dedicated customer focused teams. Our mission is to help our customers achieve their business goals -- time-to-market, time-to-volume, high-mix-low-volume, flexibility, technology, cost and quality.</p>
                                <p>We harness our wealth of experience innovating across industries and disciplines and take your products right to you or your customer's door-step.</p>
                                
                                <h5>Here's some of what our customers value most in their partnership with CPI:</h5> 
                                <div class="list list-style__check">
                                        <ul>
                                            <li>CPI's one-stop solutions from plastic injection molding right up to EMS and box-build assembly helps customers achieve their cost, quality and delivery objectives.</li>
                                            <li>Capability to support for our customers' varied manufacturing needs from high-mix, low volume to very high volume business.</li>
                                            <li>Proactively help to achieve customers' expectations including time-to-market through Early Concept Involvement (ECI) and Early Supplier Involvement (ESI) during the initial product development stage.</li>
                                            <li>Improvement in customer's supplier management cost through turnkey management and strong supplier networks.</li>
                                            <li>Ability to support customer delivery planning through global drop ship capability.</li>
                                            
                                       
                                        </ul>
                                        </div>     -->

                            </div><!-- end clearfix -->
                            
                            
        
                            <div class="hr"></div>
							<div class="margin-bottom-100px"></div>
                            <!-- end clearfix -->

							
						</div><!-- end grid 12 -->
                        
  
					</div>
				</div>
			</div>
      <!-- END CONTENT WRAPPER -->
@stop