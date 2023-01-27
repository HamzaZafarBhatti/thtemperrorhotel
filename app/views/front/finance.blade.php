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
							<div class="page-title-holder">
								{{ $page->left_block1_title }}
							</div>
							<!-- Breadcrumbs -->
							
						  <ul class="breadcrumbs">
                            <li><a href="{{url().'/'}}">Home</a></li>
						    <li>Investor Relations</li>
                            <li>Financial Information</li>
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
									{{ $page->left_block1_content}} 
								</div>
							</header>
                            
                            
                            <div class="clearfix">
								<!-- Project Feed Filter -->
								<ul class="project-feed-filter">
									<li><a href="#" class="current" data-filter="*">All</a></li>
									<li><a href="#" data-filter=".annualreport">Annual Reports</a></li>
									<li><a href="#" data-filter=".quarterlyreport">Quarterly Reports</a></li>
								</ul>
								<!-- Project Feed Filter / End -->
							</div>
                            
							<div class="clearfix">
								<!-- Project Feed -->
								<div class="project-feed">

								@foreach( $annualreports as $k => $annualreport)

									<div class="grid_3 project-item {{ $annualreport->category_id==1?'annualreport':'quarterlyreport'}}">
										<div class="project-item-inner">
											<figure class="project-img">
											{{HTML::image('public'.$annualreport->image->url('thumb'),'Annual Report 2013',array( 'class' => 'img-responsive', 'height' => '187', 'width' => '280' ));}}
												<div class="overlay">
													<a href="{{ url().'/public'.$annualreport->pdf->url() }}" class="dlink" target="_blank"><i class="fa fa-cloud-download"></i></a>
												</div>
											</figure>
											<div class="project-desc">
												<h3 class="title"><a href="{{ url().'/public'.$annualreport->pdf->url() }}" target="_blank">{{ $annualreport->title }}</a></h3>
                                                <span class="desc">{{ $annualreport->short_description }}</span>
											</div>
										</div>
								   </div>

								@endforeach
								  <!-- <div class="grid_3 project-item annualreport">
										<div class="project-item-inner">
											<figure class="project-img">
												<img src="images/financial_information/img_annual_report_2015.jpg" height="187" width="280" alt="Annual Report 2015" />
												<div class="overlay">
													<a href="images/financial_information/annual_report_2015.pdf" class="dlink" target="_blank"><i class="fa fa-cloud-download"></i></a>
												</div>
											</figure>
											<div class="project-desc">
												<h3 class="title"><a href="images/financial_information/annual_report_2015.pdf" target="_blank">Annual Report</a></h3>
                                                <span class="desc">2015</span>
											</div>
										</div>
								   </div>
								   <div class="grid_3 project-item quarterlyreport">
								      <div class="project-item-inner">
											<figure class="project-img">
												<img src="images/financial_information/img_qtr_report_30.04.15.jpg" height="187" width="280" alt="Quarterly rpt on consolidated results for the financial period ended 30/04/2015" />
												<div class="overlay">
													<a href="images/financial_information/Qtr_result_YE_30.04.15.pdf" class="dlink" target="_blank"><i class="fa fa-cloud-download"></i></a>
												</div>
											</figure>
											<div class="project-desc">
												<h3 class="title"><a href="images/financial_information/Qtr_result_YE_30.04.15.pdf" target="_blank">Quarterly Report</a></h3>
                                                <span class="desc">financial period ended 30/04/2015</span>
											</div>
										</div>
								   </div>
								   <div class="grid_3 project-item quarterlyreport">
								      <div class="project-item-inner">
											<figure class="project-img">
												<img src="images/financial_information/img_qtr_report_31.01.15.jpg" height="187" width="280" alt="Quarterly rpt on consolidated results for the financial period ended 31/01/2015" />
												<div class="overlay">
													<a href="images/financial_information/Qtr_result_YE_31.01.15.pdf" class="dlink" target="_blank"><i class="fa fa-cloud-download"></i></a>
												</div>
											</figure>
											<div class="project-desc">
												<h3 class="title"><a href="images/financial_information/Qtr_result_YE_31.01.15.pdf" target="_blank">Quarterly Report</a></h3>
                                                <span class="desc">financial period ended 31/01/2015</span>
											</div>
										</div>
								   </div>
								   <div class="grid_3 project-item quarterlyreport">
								      <div class="project-item-inner">
											<figure class="project-img">
												<img src="images/financial_information/img_qtr_report_31.10.14.jpg" height="187" width="280" alt="Quarterly rpt on consolidated results for the financial period ended 31/10/2014" />
												<div class="overlay">
													<a href="images/financial_information/Qtr_result_YE_31.10.14.pdf" class="dlink" target="_blank"><i class="fa fa-cloud-download"></i></a>
												</div>
											</figure>
											<div class="project-desc">
												<h3 class="title"><a href="images/financial_information/Qtr_result_YE_31.10.14.pdf" target="_blank">Quarterly Report</a></h3>
                                                <span class="desc">financial period ended 31/10/2014</span>
											</div>
										</div>
								   </div>
								   <div class="grid_3 project-item quarterlyreport">
								      <div class="project-item-inner">
											<figure class="project-img">
												<img src="images/financial_information/img_qtr_report_31.07.14.jpg" height="187" width="280" alt="Quarterly rpt on consolidated results for the financial period ended 31/07/2014" />
												<div class="overlay">
													<a href="images/financial_information/Qtr_result_YE_31.07.14.pdf" class="dlink" target="_blank"><i class="fa fa-cloud-download"></i></a>
												</div>
											</figure>
											<div class="project-desc">
												<h3 class="title"><a href="images/financial_information/Qtr_result_YE_31.07.14.pdf" target="_blank">Quarterly Report</a></h3>
                                                <span class="desc">financial period ended 31/07/2014</span>
											</div>
										</div>
								   </div>
								   <div class="grid_3 project-item quarterlyreport">
								      <div class="project-item-inner">
											<figure class="project-img">
												<img src="images/financial_information/img_qtr_report_30.04.14.jpg" height="187" width="280" alt="Quarterly rpt on consolidated results for the financial period ended 30/04/2014" />
												<div class="overlay">
													<a href="images/financial_information/Qtr_result_YE_30.04.14.pdf" class="dlink" target="_blank"><i class="fa fa-cloud-download"></i></a>
												</div>
											</figure>
											<div class="project-desc">
												<h3 class="title"><a href="images/financial_information/Qtr_result_YE_30.04.14.pdf" target="_blank">Quarterly Report</a></h3>
                                                <span class="desc">financial period ended 30/04/2014</span>
											</div>
										</div>
								   </div>
								   <div class="grid_3 project-item annualreport">
								      <div class="project-item-inner">
											<figure class="project-img">
												<img src="images/financial_information/img_annual_report_2014.jpg" height="187" width="280" alt="Annual Report 2014" />
												<div class="overlay">
													<a href="images/financial_information/annual_report_2014.pdf" class="dlink" target="_blank"><i class="fa fa-cloud-download"></i></a>
												</div>
											</figure>
											<div class="project-desc">
											<h3 class="title"><a href="images/financial_information/annual_report_2014.pdf" target="_blank">Annual Report</a></h3>
												<span class="desc">2014</span>
											</div>
										</div>
								   </div>
								   <div class="grid_3 project-item quarterlyreport">
								      <div class="project-item-inner">
											<figure class="project-img">
												<img src="images/financial_information/img_qtr_report_31.01.14.jpg" height="187" width="280" alt="Quarterly rpt on consolidated results for the financial period ended 31/01/2014" />
												<div class="overlay">
													<a href="images/financial_information/Qtr_result_YE_31.01.14.pdf" class="dlink" target="_blank"><i class="fa fa-cloud-download"></i></a>
												</div>
											</figure>
											<div class="project-desc">
												<h3 class="title"><a href="images/financial_information/Qtr_result_YE_31.01.14.pdf" target="_blank">Quarterly Report</a></h3>
                                                <span class="desc">financial period ended 31/01/2014</span>
											</div>
										</div>
								   </div>
								   <div class="grid_3 project-item quarterlyreport">
								      <div class="project-item-inner">
											<figure class="project-img">
												<img src="images/financial_information/img_qtr_report_31.10.13.jpg" height="187" width="280" alt="Quarterly rpt on consolidated results for the financial period ended 31/10/2013" />
												<div class="overlay">
													<a href="images/financial_information/Qtr_result_YE_31.10.13.pdf" class="dlink" target="_blank"><i class="fa fa-cloud-download"></i></a>
												</div>
											</figure>
											<div class="project-desc">
												<h3 class="title"><a href="images/financial_information/Qtr_result_YE_31.10.13.pdf" target="_blank">Quarterly Report</a></h3>
                                                <span class="desc">financial period ended 31/10/2013</span>
											</div>
										</div>
								   </div>
								   <div class="grid_3 project-item quarterlyreport">
								      <div class="project-item-inner">
											<figure class="project-img">
												<img src="images/financial_information/img_qtr_report_31.07.13.jpg" height="187" width="280" alt="Quarterly rpt on consolidated results for the financial period ended 31/07/2013" />
												<div class="overlay">
													<a href="images/financial_information/Qtr_result_YE_31.07.13.pdf" class="dlink" target="_blank"><i class="fa fa-cloud-download"></i></a>
												</div>
											</figure>
											<div class="project-desc">
												<h3 class="title"><a href="images/financial_information/Qtr_result_YE_31.07.13.pdf" target="_blank">Quarterly Report</a></h3>
                                                <span class="desc">financial period ended 31/07/2013</span>
											</div>
										</div>
								   </div>
								   <div class="grid_3 project-item quarterlyreport">
								      <div class="project-item-inner">
											<figure class="project-img">
												<img src="images/financial_information/img_qtr_report_30.04.13.jpg" height="187" width="280" alt="Quarterly rpt on consolidated results for the financial period ended 30/04/2013" />
												<div class="overlay">
													<a href="images/financial_information/Qtr_result_YE_30.04.13.pdf" class="dlink" target="_blank"><i class="fa fa-cloud-download"></i></a>
												</div>
											</figure>
											<div class="project-desc">
												<h3 class="title"><a href="images/financial_information/Qtr_result_YE_30.04.13.pdf" target="_blank">Quarterly Report</a></h3>
                                                <span class="desc">financial period ended 30/04/2013</span>
											</div>
										</div>
								   </div>
								   <div class="grid_3 project-item quarterlyreport">
								      <div class="project-item-inner">
											<figure class="project-img">
												<img src="images/financial_information/img_qtr_report_31.01.13.jpg" height="187" width="280" alt="Quarterly rpt on consolidated results for the financial period ended 31/01/2013" />
												<div class="overlay">
													<a href="images/financial_information/Qtr_result_YE_31.01.13.pdf" class="dlink" target="_blank"><i class="fa fa-cloud-download"></i></a>
												</div>
											</figure>
											<div class="project-desc">
												<h3 class="title"><a href="images/financial_information/Qtr_result_YE_31.01.13.pdf" target="_blank">Quarterly Report</a></h3>
                                                <span class="desc">financial period ended 31/01/2013</span>
											</div>
										</div>
								   </div>-->
								</div>
								<!-- Project Feed / End -->
							</div>

							
						</div>
					</div>
				</div>
			</div>
      <!-- END CONTENT WRAPPER -->
@stop