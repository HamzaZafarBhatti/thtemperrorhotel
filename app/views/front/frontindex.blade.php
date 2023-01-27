@extends('front.layouts.front')
@section('content')
<!-- Slider -->
			<section id="slider" class="slider">
				<div id="flexslider" class="flexslider loading">
					<ul class="slides">
						<!--<li>
							<img src="images/index/banner1.jpg" height="430" width="1260" alt="ISO 9002 Certification">
							<div class="flexslider-desc">
								<h2>
									<span class="first">ISO 9002 Certification</span>
									<span class="second">We specialize in all types of corrugated cartons, pasted end valve paper bags and sewn bags.</span>
								</h2>
							</div>
						</li>
						<li>
							<img src="images/index/banner2.jpg" height="430" width="1260" alt="Total Commitment">
							<div class="flexslider-desc">
								<h2>
									<span class="first">Total Commitment</span><br>
									<span class="second">We strive to have continuous improvement in providing customer value.</span>
								</h2>
							</div>
						</li>
						<li>
							<img src="images/index/banner3.jpg" height="430" width="1260" alt="High Integrity &amp; Ethics">
							<div class="flexslider-desc">
								<h2>
									<span class="first">High Integrity &amp; Ethics</span><br>
									<span class="second">We are committed to progress to contribute to the development of our employees, environment, community and market place in sustainable and responsible manner.</span>
								</h2>
							</div>
						</li>
						<li>
							<img src="images/index/banner4.jpg" height="430" width="1260" alt="Creativity &amp; Innovation">
							<div class="flexslider-desc">
								<h2>
									<span class="first">Creativity &amp; Innovation</span><br>
									<span class="second">We introduce innovative products solutions and to assist customers in maintaining their competitive advantage with highperformance products and in cost-effective way.</span>
								</h2>
							</div>
						</li>-->
                       @if(!empty($banners))
						@foreach($banners as $k => $banner)
                        <li>

                        {{HTML::image('public'.$banner->bannerimage->url('large'),'bannerimage',array( 'class' => 'img-responsive' ));}}
							
						</li>
						@endforeach
						@endif
					</ul>
				</div>
				
			</section>
			<!-- Slider / End -->

			
			<!-- BEGIN CONTENT WRAPPER -->
			<div id="content-wrapper" class="content-wrapper">
              
				<div class="container">
      				
                    <!-- Welcome Section -->
					<div class="clearfix">
						<div class="grid_12 mobile-nomargin">
							<section class="intro">
								{{ $page->left_block1_title }}
							</section>
						</div>
					</div>
					<!-- Welcome Section / End -->

					<div class="hr"></div>
                    
                    
                    <div class="clearfix">
                    	<div class="clearfix margin-top-15px">
                        	<section class="intro">
								{{ $page->left_block1_content}}
							</section>
                        </div><!-- services 3 boxes row 1 --> 
                        
                        <div class="clearfix margin-top-15px">
                        	<section class="intro">
								{{ $page->left_block2_title }}
							</section>
                        </div><!-- services 3 boxes row 2 -->
                        
                        <div class="hr"></div>
                        
                        <div class="grid_12">
                        	<section class="intro">
								 {{ $page->left_block2_content}}
							</section>
                        </div>
                    </div>
                    <!-- end 3 boxes -->
                    
                    <div class="margin-top-15px"></div>
                    
                    <!-- Horizontal Rule (double) -->
                    <div class="hr hr__double">
                      <div class="hr-first"></div>
                      <div class="hr-second"></div>
                    </div>
                    <!-- Horizontal Rule (double) / End -->
                  
                  	<!-- about us start -->
              	    <div class="clearfix">
						
                            
						<div class="grid_12 mobile-nomargin">
							{{ $page->left_block3_title }}
							<div class="list list-style__arrow3">
								<ul>

								@if(!empty($corebusinesses))

								@foreach($corebusinesses as $cor)
									<li>
										<span class="text-14px italic"><strong><a href="{{$cor->url}}" target="_blank">{{$cor->title}}</a></strong></span>
										<span class="date">{{$cor->date}}</span>
										<p>{{$cor->short_description}}</p>
									</li>

								@endforeach

								@endif
									<!-- <li>
										<span class="text-14px italic"><strong><a href="http://www.bursamalaysia.com/market/listed-companies/company-announcements/subscribe/8362/option2/GA" target="_blank">Transactions (Chapter 10 of listing requirements): Related party transactions</a></strong></span>
										<span class="date">October 02, 2015</span>
										<p>KYM HOLDINGS BHD ("KYM" OR "COMPANY") ACQUISITION OF PROPERTIES FROM A RELATED PARTY, TZEL DEVELOPMENTS SDN BHD...</p>
									</li> -->
                                   <!--  <div class="margin-top-15px"></div>
									<li>
										<span class="text-14px italic"><strong><a href="http://www.bursamalaysia.com/market/listed-companies/company-announcements/subscribe/8362/option2/FA" target="_blank">Quarterly rpt on consolidated results for the financial period ended 31/07/2015</a></strong></span>
										<span class="date">September 21, 2015</span>
										<p>Please download the latest report here...</p>
									</li>
                                    <div class="margin-top-15px"></div>
									<li>
										<span class="text-14px italic"><strong><a href="http://www.bursamalaysia.com/market/listed-companies/company-announcements/subscribe/8362/option2/GM" target="_blank">General Meetings: Outcome of Meeting</a></strong></span>
										<span class="date">July 21, 2015</span>
										<p>The Board of Directors of KYM Holdings Bhd ("KYM") is pleased to announce that at the 33rd Annual General Meeting ("AGM") duly held on 21 July 2015, the shareholders of KYM have approved all the resolutions as set out in the Notice of AGM dated 26 June 2015...</p>
									</li> -->
								</ul>
								<!--<a href="{{url().'/company/announcements'}}" class="button"><span class="button-inner">VIEW ALL &nbsp;<i class="fa fa-plus-circle"></i></span></a>-->
							</div>
	

						</div>
                        <!-- end grid 4 -->
					</div>
                    <!-- about us end -->
                    
                    <!--<div class="hr"></div>-->
                    
                    

					
					<!-- Secondary Content -->
					<div class="clearfix"></div>
					<!-- Secondary Content / End -->
					
			

			  </div> 
                

		  </div>
			<!-- END CONTENT WRAPPER -->
@stop