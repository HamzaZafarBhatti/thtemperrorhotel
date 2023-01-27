@extends('front.layouts.front')
@section('content')
<!-- Slider -->
		  	{{ HTML::image('assets/front/images/banner_subpage/banner4.jpg','banner-subpage') }}
			<!-- #camera_wrap -->
			<!-- Slider / End -->
            
            <!-- BEGIN PAGE TITLE -->
            <div id="page-title" class="page-title">
				<div class="container">
					<div class="clearfix">
						<div class="grid_12">
							{{ $page->left_block3_title }}
							<!-- Breadcrumbs -->
							
						  <ul class="breadcrumbs">
                            <li><a href="{{url().'/'}}">Home</a></li>
						    <li>Services</li>
                            <li>What We Do</li>
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

							
							<header class="entry-header clearfix">
								<div class="entry-header-inner">
									{{ $page->left_block1_title }}
                                    
								</div>
							</header>
           
                                       
                                       
							<div class="clearfix">
                            
                            		<div class="grid_6 alpha">
                                <!-- Project Thumbnail -->
                                <div class="flexslider project-thumbs project-thumbs__fullw flexslider__nav-on">
                                  <ul class="slides">
                                    <li>{{ HTML::image('assets/front/images/what_we_do/img_whatwedo1.jpg') }}</li>
                                    <li>{{ HTML::image('assets/front/images/what_we_do/img_whatwedo2.jpg') }}</li>
                                    <li>{{ HTML::image('assets/front/images/what_we_do/img_whatwedo3.jpg') }}</li>
                                    <li>{{ HTML::image('assets/front/images/what_we_do/img_whatwedo4.jpg') }}</li>
                                  </ul>
                                </div>
                                <!-- Project Thumbnail / End -->
                              </div>
                                    
                                    {{ $page->left_block1_content}} 
                            </div>
                            
                            
        
                            <div class="hr"></div>
                            <!-- end clearfix -->
                            
                            
                            

							
						</div><!-- end grid 12 -->
                        
                        <div class="clearfix margin-top-15px">
                            	{{ $page->left_block2_content}} 
                            
                            </div>
                        
                        
                        
                        
					</div>
                    
                    
                    
                    
				</div>
			</div>
      <!-- END CONTENT WRAPPER -->
@stop