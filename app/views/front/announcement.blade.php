@extends('front.layouts.front')
@section('content')
<!-- Slider -->
		  	<!--<img src="images/banner_subpage/banner3.jpg" class="banner-subpage">-->
			<!-- #camera_wrap -->
			<!-- Slider / End -->
            
            <!-- BEGIN PAGE TITLE -->
			<div id="page-title" class="page-title">
				<div class="container">
					<div class="clearfix">
						<div class="grid_12">
							{{ $page->right_block3_content}}
							<!-- Breadcrumbs -->
							
						  <ul class="breadcrumbs">
                            <li><a href="{{url().'/'}}">Home</a></li>
						    <li>Investor Relations</li>
                            <li>Announcements</li>
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
						<div class="grid_8">
						
                            <!-- Vacancies Listing start -->
                            <header class="entry-header clearfix">
								<div class="entry-header-inner">
									{{ $page->right_block1_title}}
								</div>
							</header>
                            
                            
                            <div class="hero-unit-box clearfix">
                                <div class="grid_3">
                                    {{ $page->right_block1_content}}
                                    <!-- Alert Boxes -->
                                    {{ $page->right_block2_title}}
                                </div>
                                
                                <div class="grid_3">
                                    {{ $page->right_block2_content}}
                                    <!-- Alert Boxes -->
                                    {{ $page->right_block3_title}}
                                </div>
                            </div>
                            
                            <div class="hr"></div>

							{{ $page->left_block2_content }}
                            
                            <div class="grid_4 alpha">
                            	<div class="list list-style__arrow3">
                                            {{ $page->left_block3_title }}
                             	</div>
                             </div>
                             
                             <div class="grid_4 omega">
                            	<div class="list list-style__arrow3">
                                            {{ $page->left_block3_content }}
                             	</div>
                             </div>
                            
                            
                            
                            	 
                            

                            <br/>
                            
							

							<!-- Vacancies Listing End -->
                          
                            <div class="clearfix"></div>
                            
                           
						</div>
						<div class="grid_4">
							<!-- Extra Contact Box -->
							<div class="cta1">
								{{ $page->left_block1_title }}
                                <div class="bg-grey">
                                    {{ $page->left_block1_content }}
                                   {{ $page->left_block2_title }}
                                </div>
							</div>
							<!-- Extra Contact Box / End -->
						</div>
					</div>
				</div>
			</div>
      <!-- END CONTENT WRAPPER -->
@stop