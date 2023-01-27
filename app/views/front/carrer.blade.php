@extends('front.layouts.front')
@section('content')
<!-- Slider -->
		  	{{ HTML::image('assets/front/images/banner_subpage/banner5.jpg','banner-subpage') }}
			<!-- #camera_wrap -->
			<!-- Slider / End -->
            
            <!-- BEGIN PAGE TITLE -->
<div id="page-title" class="page-title">
				<div class="container">
					<div class="clearfix">
						<div class="grid_12" style="display: flex;
    justify-content: space-between;">
							{{ $page->right_block3_content }}
							<!-- Breadcrumbs -->
							
						  <ul class="breadcrumbs">
                            <li><a href="{{url().'/'}}">Home</a></li>
						    <li>Careers</li>
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
							<!--<header class="entry-header clearfix">
								<div class="entry-header-inner">
									<h3 class="entry-title">Career Opportunities</h3>
								</div>
							</header>
							<p>Please provide the description for careers.</p>
							
                            <div class="hr"></div>-->
        
                            <!-- Vacancies Listing start -->
                            <header class="entry-header clearfix">
								<div class="entry-header-inner">
									{{ $page->page_title }}
								</div>
							</header>
                            
                            <div class="hero-unit-box2 clearfix">
                              <div class="grid_3">	
                               
                                {{ Form::open(array('url' => 'company/searchcareers','id' => 'sort-vacency','class'=> 'contact-form input-blocks','method' => 'post')) }}
										<label for="name"><strong><span class="text-white">Job Vacancy:</span></strong> </label>
										{{ Form::select('job_title', $vaccTitles, $selectedJob)}}
                              
                              </div>
                              
                              <div class="grid_2">	
                                
										<label for="name"><strong><span class="text-white">Job Location:</span></strong> </label>
										{{ Form::select('job_location', $vaccLocs, $selectedLoc)}}
                               
                              </div>
                              <div class="grid_2"><label></label><button type="submit" class="button" style="margin-top: 23px; padding: 2px 0 3px 0;"><span class="button-inner">Search&nbsp;<i class="fa fa-search-plus"></i></span></button></div>
                            {{Form::close()}} 
                            </div>

                            <br/>
                            
							 @if(count($vaccancies) > 0)                         
                            
<div class="accordion-wrapper">
@foreach($vaccancies as $k => $vaccancy)
<div class="acc-head">
                                    <a href="#">{{ $vaccancy->job_title}}</a> 								
                                </div>
                                
								<div class="acc-body">
                                    <p class="post-meta">
										<span class="post-meta-date"><i class="fa fa-calendar-o"></i>Date Posted: <strong>{{ $vaccancy->post_date }}</strong></span>
                                        <span class="post-meta-cats"><i class="fa fa-map-marker"></i>Job Location: <strong>{{ $vaccancy->job_location }}</strong></span>				</p>
									<h4 class="clearfix">Job Description:</h4>
                                    <div class="list list-style__arrow3">
										<ul>
                                            {{ $vaccancy->responsibilities_content }}
										</ul>
						  			</div>
                                   
                                    <h4 class="clearfix">Requirements:</h4>
                                    <div class="list list-style__arrow3">
										<ul>
                                            {{ $vaccancy->requirements_content }}
										</ul>
                                        
                                        <div class="line"></div>
                                        
                                        {{ $vaccancy->footer_content }}
						  			</div>



                                    <a href="{{ url().'/company/careers/apply/'.$vaccancy->id }}" class="button"><span class="button-inner">Apply Now &nbsp;<i class="fa fa-hand-o-up"></i></span></a>
                                    
                                </div><!-- //.acc-body -->
@endforeach                         
                                
                            </div>
                            
 @else
 
 <strong>Sorry, there is no vacancy at this chosen location. Please check again later.</strong>
 
 @endif



								
								
						

							<!-- Vacancies Listing End -->
                          
                            <div class="clearfix"></div>
                            
                           
						</div>
						<div class="grid_4">
							<!-- Extra Contact Box -->
							<div class="cta1">
								{{ $page->left_block1_title }}
								{{ $page->left_block1_content }}
                                
   
                                <div class="bg-grey">
                                    <div class="center">
                                    	{{ $page->left_block2_title }}
                                        {{ $page->left_block2_content }}
                                        {{ $page->left_block3_title }}
                                        <div class="clearfix"></div>
                                        {{ $page->left_block3_content }}
                                    </div>
                                </div>
							</div>
							<!-- Extra Contact Box / End -->
						</div>
					</div>
				</div>
			</div>
      <!-- END CONTENT WRAPPER -->
@stop