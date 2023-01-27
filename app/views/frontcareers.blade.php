@extends('layouts.front')
@section('content')
                 
                  <div id="content-wrapper" class="content-wrapper">
		  <div class="container">
                  <div class="clearfix">
                  <div class="grid_8">
			<header class="entry-header clearfix">
				<div class="format-icon">
				<div class="format-icon-inner">
				<i class="icon-group"></i>
				</div>
				</div>
				<div class="entry-header-inner">
				{{ $page->left_block1_title }}
				</div>
							</header>
                            <div class="line"></div>
				
                            {{ $page->left_block1_content }}
                            <!-- Vacancies Listing start -->
                            <header class="entry-header clearfix">
								<div class="format-icon">
									<div class="format-icon-inner">
										<i class="icon-file-alt"></i>
									</div>
								</div>
								<div class="entry-header-inner">
		             {{ $page->left_block2_title }}
								</div>
							</header>
                            <div class="line"></div>
                            
                          @include('includes.vaccancylistings')
                          
                            <div class="clearfix"></div>
                            
                            <div class="hr hr__double">
                                <div class="hr-first"></div>
                                <div class="hr-second"></div>
                            </div>
                            
                            
							
						</div>
						<div class="grid_4">
							<!-- Extra Contact Box -->
							<div class="cta">
			<h3>{{ $page->right_block1_title }}</h3>
				{{ $page->right_block1_content }}

                                
                                <div class="bg-black">
                                    <div class="center">
                                      {{ $page->right_block2_content }}
                                        <div class="clearfix"></div>
                                        <div class="hr"></div>
                                       {{ $page->right_block3_content }}
                                    </div>
                                    
                                </div>
                                
								
							</div>
							<!-- Extra Contact Box / End -->
						</div>
                  </div>
                  </div>
                  </div>
                  
		
@stop