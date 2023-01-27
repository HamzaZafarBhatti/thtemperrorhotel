@extends('front.layouts.front')
@section('content')
<!-- Slider -->
		  	<!--<img src="images/banner_subpage/banner1.jpg" class="banner-subpage">-->
			<!-- #camera_wrap -->
			<!-- Slider / End -->
            
            <!-- BEGIN PAGE TITLE -->
            <div id="page-title" class="page-title">
				<div class="container">
					<div class="clearfix">
						<div class="grid_12">
							{{ $page->right_block3_content }}
							<!-- Breadcrumbs -->
							
						  <ul class="breadcrumbs">
                            <li><a href="{{url().'/'}}">Home</a></li>
						    <li>Corporate Governance</li>
                            <li>Board Charter</li>
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
                            	{{ $page->left_block1_content}}
                                {{ $page->left_block2_title }}
                                {{ $page->left_block2_content }}
                                {{ $page->left_block3_title }}
                                {{ $page->left_block3_content }}


                                {{ $page->right_block1_title }}
                                {{ $page->right_block1_content }}
                                 {{ $page->right_block2_title }}
                                {{ $page->right_block2_content }}
                                 {{ $page->right_block3_title }}
                           

								
							</div>
                            <!-- end clearfix -->

							
						</div>
					</div>
				</div>
			</div>
      <!-- END CONTENT WRAPPER -->
@stop