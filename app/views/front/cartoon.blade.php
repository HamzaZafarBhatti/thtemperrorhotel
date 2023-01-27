@extends('front.layouts.front')
@section('content')
<!-- Slider -->
		  	{{ HTML::image('assets/front/images/banner_subpage/banner3.jpg','banner-subpage') }}
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
                            <li>Technology</li>
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
                              <div class="grid_12 alpha omega">
                                <!-- Project Thumbnail -->
                                <div class="flexslider project-thumbs project-thumbs__fullw flexslider__nav-on">
                                  <ul class="slides">
                                    @foreach($sliderImages as $sliderImage)
                                     <li>{{ HTML::image('public/uploads/'.$sliderImage->bannerimage_file_name) }}</li>
                                    @endforeach
                                  </ul>
                                </div>
                                <!-- Project Thumbnail / End -->
                              </div>
                            </div> 
                            
                            
							
                                    
                                    {{ $page->left_block1_content}}

                           
        
                            <div class="hr"></div>
                            <!-- end clearfix -->

							
						</div>
					</div>
				</div>
			</div>
      <!-- END CONTENT WRAPPER -->
@stop