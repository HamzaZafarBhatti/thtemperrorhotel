@extends('front.layouts.front')
@section('content')

<!-- Slider -->
{{ HTML::image('assets/front/images/banner_subpage/banner4.jpg','banner-subpage') }}
		  	<!--<img src="images/banner_subpage/banner1.jpg" class="banner-subpage">-->
			<!-- #camera_wrap -->
			<!-- Slider / End -->
            
            <!-- BEGIN PAGE TITLE -->
            <div id="page-title" class="page-title">
				<div class="container">
					<div class="clearfix">
						<div class="grid_12">
							<div class="page-title-holder">
								<h1>Quality Assurance</h1>
							</div>
	
							
						  <ul class="breadcrumbs">
                            <li><a href="{{url().'/'}}">Home</a></li>
						    <li>About CPI</li>
                            <li>Quality Assurance</li>
                            <li>Environmental Policy</li>
					      </ul>

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

							
							<header class="entry-header clearfix">
								<div class="entry-header-inner">
									<h3 class="entry-title">Environmental Policy</h3>
								</div>
							</header>
                            
                            
							<div class="clearfix">
                            	<div class="center">
                            	{{ HTML::image('assets/front/images/quality_assurance/img_environmental_policy.jpg','Environmental Policy') }}
                            	</div>
                            </div>    
                            <!-- end clearfix -->
                            
						</div>
					</div>
				</div>
			</div>
      <!-- END CONTENT WRAPPER -->
@stop