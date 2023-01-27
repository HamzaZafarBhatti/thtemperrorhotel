<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.fronthead')
</head>
<body>
<div id="wrapper">
	
		<div id="top-bar" class="top-bar">
			<div class="container clearfix">
				
			</div>
		</div>
			
			
		<div class="main-box">
			<!-- BEGIN HEADER -->
			<header id="header" class="header">
				
				<div class="container clearfix">
					<div class="grid_2 mobile-nomargin">
						<!-- BEGIN LOGO -->
						<div id="logo" class="logo">
							<!-- Image based Logo -->
							<a href="{{ url()}}"><img src="{{ url()}}/images/index/logo.png" alt="Yee Lee Corporation Bhd" border="0" class="margin-top-5px"/></a>
						</div>
						<!-- END LOGO -->
					</div>
					
					<div class="grid_10 mobile-nomargin omega">
						<!-- Main Navigation -->
						@include('includes.fronttopmenu')
						<!-- Main Navigation / End -->
					</div>
				</div>
				
			</header>
			<!-- END HEADER -->
			
			
			@if(isset($masthead) != '')
                        
	<!-- Slider -->
			<!-- InstanceBeginEditable name="EditRegion1" --> 
        {{HTML::image($masthead,'bannerimage',array( 'class' => 'banner-subpage' ))}}
        <!-- InstanceEndEditable -->
			<!-- #camera_wrap -->
			<!-- Slider / End -->
                        @endif
			
                        
                        @if(isset($contacthead) != '')
                        
	<!-- Slider -->
			<!-- InstanceBeginEditable name="EditRegion1" --> 
        {{ $contacthead }}
        <!-- InstanceEndEditable -->
			<!-- #camera_wrap -->
			<!-- Slider / End -->
                        @endif
			
                        @if(isset($mainMenuTitle) != '')
                        @include('includes.manutopsection')
                        @endif
                        
                        
                          <!-- Slider -->
                          @if(isset($front) != '')
			@include('includes.frontslider')
                        @endif
			<!-- Slider / End -->
                    <!-- about us start -->
			<!-- BEGIN CONTENT WRAPPER -->
			<div id="content-wrapper" class="content-wrapper">
              
                            <div class="container">
                                 @yield('content')
                            </div>
                

		  </div>
			<!-- END CONTENT WRAPPER -->
	   

			
			<!-- BEGIN FOOTER -->
			@include('includes.frontfooter')
			<!-- END FOOTER -->
		</div>
			
		
	</div>
   @include('includes.frontscripts')
 </body>
</html>