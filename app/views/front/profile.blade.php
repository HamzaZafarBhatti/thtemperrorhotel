@extends('front.layouts.front')
@section('content')
<!-- Slider -->
@if($companyProfile->backgroundImages_active)
{{ HTML::image('public/uploads/'.$companyProfile->backgroundImages,'banner-subpage') }}
@endif
<!-- #camera_wrap -->
<!-- Slider / End -->

<!-- BEGIN PAGE TITLE -->
<div id="page-title" class="page-title">
    <div class="container">
        <div class="clearfix">
            <div class="grid_12">
                <div class="page-title-holder" id='dynamic'>
                    <h1>{{$companyProfile->title}}</h1>
                </div>
                <!-- Breadcrumbs -->

                <ul class="breadcrumbs">
                    <li><a href="{{url().'/'}}">Home</a></li>
                    <li>About CPI</li>
                    <li>Our Profile</li>
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


                <h3>{{$companyProfile->subHeading1}}</h3>
                <!-- Horizontal Rule (double) -->
                <div class="hr hr__double">
                    <div class="hr-first"></div>
                    <div class="hr-second"></div>
                </div>
                <!-- Horizontal Rule (double) / End -->

                <div class="clearfix">
                    <div class="grid_12 alpha omega">
                        <!-- Project Thumbnail -->
                        <div class="flexslider project-thumbs project-thumbs__fullw flexslider__nav-on">
                            <ul class="slides">
                                @foreach($sliderImages as $sliderImage)
                                <li>{{ HTML::image('public/uploads/'.$sliderImage->bannerimage_file_name) }}</li>
                                @endforeach
                                <!--<li>{{ HTML::image('assets/front/images/our_profile/img_about_cpi2.jpg') }}</li>-->
                            </ul>
                        </div>
                        <!-- Project Thumbnail / End -->
                    </div>
                </div>                          

                <div class="clearfix">


                    <!--<figure class="thumb thumb-fullw-mobile">
                    {{ HTML::image('assets/front/images/our_profile/img.jpg') }}
                    </figure>-->
<!--                    <p>CPI is a high technology, high precision plastics injection molding company and a fully integrated EMS provider.</p>
                    <p>We offer a broad array of innovative plastics injection molding and EMS solutions for diverse markets from automotive to electronics; and medical to information industries.</p>
                    <p>We put our best talents and technologies together to meet our customers' expectations on high precision products in the best, the fastest and the most cost-effective way.</p>
                    <p>CPI's vision is to be a world-class plastics injection molder providing a one-stop solutions centre up to box build level to help our customers succeed in their markets.</p>-->
{{$companyProfile->text1}}

                    <!-- Horizontal Rule (double) -->
                    <div class="hr hr__double">
                        <div class="hr-first"></div>
                        <div class="hr-second"></div>
                    </div>
                    <!-- Horizontal Rule (double) / End -->
                    <h3>{{$companyProfile->subHeading2}}</h3>
                    <figure class="thumb thumb-fullw-mobile alignright">
                        @if($companyProfile->bodyImages_active)
                        {{ HTML::image('public/uploads/'.$companyProfile->bodyImages) }}
                        @endif
                    </figure>

<!--                    <p>CPI leadership bench strength is deep and broad - totaling 70 man-years of experience in plastics injection molding, tool fabrication, secondary processes, sub-assembly processes and EMS box build processes.</p>
                    <p>CPI's proven track record and vast experience across a range of engineering plastic materials and their applications in diverse industries enable us to be the customers' premier partner of choice for all their plastics injection molding and EMS needs and solutions.</p>-->
                    {{$companyProfile->text2}}
                </div>

                <!-- end clearfix -->






                <div class="hr"></div>
                <div class="margin-bottom-100px"></div>

            </div><!-- end grid 12 -->
        </div>
    </div>
</div>
<!-- END CONTENT WRAPPER -->
@stop