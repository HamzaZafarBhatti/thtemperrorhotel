@extends('front.layouts.front')
@section('content')
			<!-- Slider -->
		  	{{ HTML::image('assets/front/images/banner_subpage/banner1.jpg','banner-subpage') }}

			<!-- #camera_wrap -->
			<!-- Slider / End -->
            
            <!-- BEGIN PAGE TITLE -->
            <div id="page-title" class="page-title">
				<div class="container">
					<div class="clearfix">
						<div class="grid_12">
							<div class="page-title-holder">
								<h1>Our Profile</h1>
							</div>
							<!-- Breadcrumbs -->
							
						  <ul class="breadcrumbs">
                            <li><a href="{{url().'/'}}">Home</a></li>
						    <li>About Us</li>
                            <li>Our Profile</li>
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
								
                                <!--<figure class="thumb thumb-fullw-mobile"><img src="images/our_profile/img.jpg" alt="Our profile"></figure>-->
                                <p>KYM is an investment holding company listed on the Main Market of Bursa Securities. KYM Group is one of the major industrial packaging manufacturers in the region, specialising in multi-wall paper bags and corrugated carton boxes.</p> 
        
                                    <p>With clear focus on state-of-the-art technology, product quality and customer service, KYM Group has grown into a globally recognised regional leader in the provision of multiwall paper sack packaging solutions.</p> 
                                    
                                    <p>KYM Group has more than 30 years of experience in producing standard and custom made corrugated fibreboards and carton boxes for various sectors. </p>
                                    
                                    <p>The Group today employs more than 300 employees in Malaysia. Our main manufacturing facilities are located in Beranang-Selangor, Kanthan-Chemor and Tapah, Perak.</p>
                                    

                            </div>
        
                            <div class="hr"></div>
							<div class="margin-bottom-100px"></div>
                            <!-- end clearfix -->

							
						</div>
					</div>
				</div>
			</div>
      <!-- END CONTENT WRAPPER -->
@stop