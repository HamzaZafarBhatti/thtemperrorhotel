
            
            <!-- BEGIN PAGE TITLE -->
	  <div id="page-title" class="page-title">
				<div class="container">
					<div class="clearfix">
						<div class="grid_12">
							<div class="page-title-holder">
								<h1>{{ $mainMenuTitle }}</h1>
							</div>
							<!-- Breadcrumbs -->
							<!-- InstanceBeginEditable name="EditRegion2" -->
							<ul class="breadcrumbs">
                                                        @foreach ($breadcrumbs as $k => $breadcrumb)
                                                        <!-- $breadcrumb['url'] -->
                                                          <li><a href="@if($k == 0){{ url() }} @else {{'#'}} @endif">{{ $breadcrumb['title'] }}</a></li>
						        @endforeach
						    </ul>
							<!-- InstanceEndEditable -->
							<!-- Breadcrumbs / End -->
						</div>
					</div>
				</div>
	</div>
	<!-- END PAGE TITLE -->
			