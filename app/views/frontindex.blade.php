@extends('layouts.front')
@section('content')

                 
                    <div class="clearfix">
						<div class="grid_6">
							{{ $page->left_block1_title }}
							{{ $page->left_block1_content }}
                           
                            <div class="clearfix"></div>
					  {{ $page->left_block2_title }}					
                         </div>
                         
                         
                         <div class="grid_6">
							<!-- Horizontal Tabs -->
							<div class="tabs">
								<div class="tab-menu clearfix">
									<ul>
										<!--<li><a href="#tab1">Corporate Social Responsibility</a></li>
										<li><a href="#tab2">Annual Report</a></li>-->
									</ul>
								</div>
								<div class="tab-wrapper">
									<!--<div id="tab1" class="tab">
										<figure class="thumb"><img src="images/index/img_csr_130px.jpg" height="130" width="130" alt=""></figure>
										<p>At Yee Lee Corporation Bhd, we take Corporate Social Responsibility (CSR) seriously. For years, we have advocated the practice of CSR with commitment to not only result in significant improvements for our business, but more importantly to serve a larger purpose to include the environment, our consumers, employees, communities, stakeholders, and all other members of the public sphere.</p> 
                                        <a href="corporate_social_responsibility.html" class="button"><span class="button-inner">Read More</span></a>
										
									</div>-->
									<div id="tab2" class="tab">
									  {{ $page->right_block1_content }}			
                                        
                                       {{ $page->right_block2_title }}	
									
									</div>
									
								</div>
							</div>
							<!-- Horizontal Tabs / End -->
						</div>
					</div>
                    <!-- about us end -->
                    
                    <div class="hr"></div>
					
					<!-- Secondary Content -->
					<div class="clearfix">					</div>
					<!-- Secondary Content / End -->
					
			
					<!-- Our Products start -->
					<div class="clearfix">
						<div class="clients">
							<div class="grid_12 mobile-nomargin">
								 {{ $page->left_inner_block_title1 }}	
                                                            @include('includes.frontcarosel')
								
							</div>
						</div>
					</div>
					<!-- Our Products / End -->
		
@stop