<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>

        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">

        @include('front.includes.head')
        <meta name="description" content="">
        <meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon-16x16.png')}}">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
        ================================================== -->
        <!-- Normalize default styles -->
        {{ HTML::style('assets/front/css/normalize.css') }}

        {{ HTML::style('assets/admin/vendors/bootstrap/css/bootstrap.min.css'); }}
        <!-- Skeleton grid system -->
        {{ HTML::style('assets/front/css/skeleton.css') }}
        <!-- FontAwesome (Icon Fonts) -->
        {{ HTML::style('assets/front/css/font-awesome.min.css') }}

        {{ HTML::style('assets/admin/vendors/bootstrap-datepicker/css/datepicker.css');}}
        <!-- Base Template Styles-->
        {{ HTML::style('assets/front/css/base.css') }}
        <!-- Template Styles-->
        {{ HTML::style('assets/front/css/style.css') }}
        <!-- Superfish -->
        {{ HTML::style('assets/front/css/superfish.css') }}
        <!-- Flexslider -->
        {{ HTML::style('assets/front/css/flexslider.css') }}
        <!-- Magnific popup -->
        {{ HTML::style('assets/front/css/magnific-popup.css') }}
        <!-- Styles for Mobile devices -->
        {{ HTML::style('assets/front/css/responsive.css') }}

        <!--[if lt IE 9]>
                <link rel="stylesheet" href="css/ie/ie8.css" media="screen" />
        <![endif]-->

        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        {{ HTML::style('http://fonts.googleapis.com/css?family=Merriweather:400,300,400italic,700,700italic,300italic' ) }}

        {{ HTML::style('assets/admin/js/jQueryValidation/css/validationEngine.jquery.css') }}



        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">


    </head>

    <body>

        <!-- BEGIN WRAPPER -->
        <div id="wrapper">

            <!--<div id="top-bar" class="top-bar">
                    <div class="container clearfix">
                            
                    </div>
            </div>-->


            <div class="main-box">
                <!-- BEGIN HEADER -->
                <header id="header" class="header">

                    <div class="container clearfix">
                        <div class="grid_3 mobile-nomargin">
                            <!-- BEGIN LOGO -->
                            <div id="logo" class="logo">
                                <!-- Image based Logo -->
                                <a href="{{ url() }}/">

                                    {{ HTML::image('assets/front/images/index/logo.jpg','KYM Holdings Bhd') }}
                                </a> 
                                <div class="tagline">KYM HOLDINGS BHD</div>
                            </div>
                            <!-- END LOGO -->
                        </div>

                        <div class="grid_9 mobile-nomargin omega">
                            <!-- Main Navigation -->
                            <nav class="primary clearfix">
                                <!-- Menu -->
                                <ul class="sf-menu">
                                    <li @if(Request::segment(1) == '')class="current-menu-item" @endif><a href="{{ url() }}/">Home</a></li>
                                    <li @if(Request::segment(2) == 'profile' || Request::segment(2) == 'info' || Request::segment(2) == 'vision' || Request::segment(2) == 'boardofdirectors' || Request::segment(2) == 'structure')class="current-menu-item" @endif><a href="#">About Us</a>
                                        <ul>
                                            <li><a href="{{ url() }}/company/profile">Our Profile</a></li>
                                            <li><a href="{{ url() }}/company/info">Company Information</a></li>
                                            <li><a href="{{ url() }}/company/vision">Vision &amp; Mission</a></li>
                                            <li><a href="{{ url() }}/company/boardofdirectors">Board of Directors</a></li>
                                            <li><a href="{{ url() }}/company/structure">Corporate Structure</a></li>
                                        </ul>
                                    </li>
                                    <li @if(Request::segment(2) == 'paperbags' || Request::segment(2) == 'cartonbox')class="current-menu-item" @endif><a href="#">Business</a>
                                        <ul>
                                            <li><a href="{{ url() }}/company/paperbags">Multiwall Industrial Paper Bags</a></li>
                                            <li><a href="{{ url() }}/company/cartonbox">Corrugated Carton Boxes</a></li>
                                        </ul>
                                    </li>

                                    <li @if(Request::segment(2) == 'boardcharter' || Request::segment(2) == 'auditcommitte' || Request::segment(2) == 'nomination' || Request::segment(2) == 'financial' || Request::segment(2) == 'announcements')class="current-menu-item" @endif><a href="#">Investor Relations</a>
                                        <ul>
                                            <li><a href="#">Corporate Governance</a>
                                                <ul>
                                                    <li><a href="{{ url() }}/company/boardcharter">Board Charter</a></li>
                                                    <li><a href="{{ url() }}/company/auditcommitte">Terms of Reference of Audit Committee</a></li>
                                                    <li><a href="{{ url() }}/company/nomination">Terms of Reference of Nomination and Remuneration Committee</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url() }}/company/financial">Financial Information</a></li>
                                            <li><a href="{{ url() }}/company/announcements">Announcements</a></li>
                                        </ul>
                                    </li>
                                    <li @if(Request::segment(1) == 'carrers' || Request::segment(3) == 'apply')class="current-menu-item" @endif><a href="#">Careers</a>
                                        <ul>
                                            <li ><a href="{{ url() }}/carrers">Opportunities &amp; Internship</a></li>
                                        </ul>
                                    </li>
                                    <li @if(Request::segment(1) == 'contactus')class="current-menu-item" @endif><a href="{{ url() }}/contactus">Contacts</a></li>
                                </ul>
                                <!-- Menu / End -->
                            </nav>
                            <!-- Main Navigation / End -->
                        </div>
                    </div>

                </header>
                <!-- END HEADER -->


                @yield('content')



                <!-- BEGIN FOOTER -->
                <footer id="footer" class="footer">

                    <!-- Copyright -->
                    <div class="copyright">
                        <div class="container clearfix">
                            <div class="grid_12 mobile-nomargin">
                                <div class="clearfix">
                                    <div class="copyright-primary">
                                        &copy; 2016 KYM HOLDINGS BHD (Co. No.: 84303-A)<span class="separator">| Powered by:</span><a href="http://www.webqom.com" target="_blank">Webqom Technologies Sdn Bhd</a><br/>
                                        This website is best viewed in Internet Explorer 11 / Firefox 39.0 / Chrome 44.0 with 1280x800 screen resolution.

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- /Copyright -->

                </footer>
                <!-- END FOOTER -->
            </div>


        </div>
        <!-- END WRAPPER -->


        <!-- Javascript Files
        ================================================== -->

        <!-- initialize jQuery Library -->
        {{ HTML::script('assets/front/js/jquery-1.9.1.min.js');}}

        {{ HTML::script('assets/admin/vendors/bootstrap/js/bootstrap.min.js');}}
        <!-- jQuery migrate plugin -->
        {{ HTML::script('assets/front/js/jquery-migrate-1.1.1.min.js');}}
        <!-- Modernizr -->
        {{ HTML::script('assets/front/js/modernizr.custom.14583.js');}}
        <!-- easing plugin -->
        {{ HTML::script('assets/front/js/jquery.easing.min.js');}}
        <!-- Mobile Navigation -->
        {{ HTML::script('assets/front/js/jquery.mobilemenu.js');}}
        <!-- Navigation -->
        {{ HTML::script('assets/front/js/jquery.superfish.js');}}
        <!-- Slider -->
        {{ HTML::script('assets/front/js/jquery.flexslider-min.js');}}
        <!-- FitVideo -->
        {{ HTML::script('assets/front/js/jquery.fitvids.js');}}
        <!-- Flickr -->
        {{ HTML::script('assets/front/js/jflickrfeed.js');}}
        <!-- Twitter -->
        {{ HTML::script('assets/front/js/jquery.twitter.js');}}
        <!-- Carousel -->
        {{ HTML::script('assets/front/js/jquery.carouFredSel-6.2.1-packed.js');}}
        {{ HTML::script('assets/front/js/jquery.touchSwipe.min.js');}}
        <!-- Isotope -->
        {{ HTML::script('assets/front/js/jquery.isotope.min.js');}}
        {{ HTML::script('assets/front/js/jquery.imagesloaded.min.js');}}
        <!-- Magnific Popup -->
        {{ HTML::script('assets/front/js/jquery.magnific-popup.min.js');}}

        {{ HTML::script('assets/admin/js/jQueryValidation/js/languages/jquery.validationEngine-en.js') }}
        {{ HTML::script('assets/admin/js/jQueryValidation/js/jquery.validationEngine.js') }}

        {{ HTML::script('assets/admin/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js');}}
        {{ HTML::script('assets/admin/vendors/moment/moment.js');}}

        <!-- Custom -->
        {{ HTML::script('assets/front/js/custom.js');}}


        <!-- Flex Slider Thumbs Init -->
        <script type="text/javascript">
            jQuery(function($) {
                $('#flexslider').flexslider({
                    animation: "fade",
                    directionNav: true,
                    prevText: "<i class='fa fa-arrow-left'></i>",
                    nextText: "<i class='fa fa-arrow-right'></i>",
                    controlNav: true,
                    animationLoop: true,
                    slideshow: true,
                    slideshowSpeed: 6000,
                    start: function(slider) {
                        $('#flexslider').removeClass('loading');
                    }
                });
            });</script>
        <script>
            $(document).ready(function() {



                $("#career-apply-form").validationEngine({validateNonVisibleFields: true,
                    updatePromptsPosition: true});
                $("#contact-form").validationEngine({validateNonVisibleFields: true,
                    updatePromptsPosition: true});


//                $("#contact-form").validationEngine({'custom_error_messages': {
//                        '#name': {
//                            'required': {
//                                'message': "please inpuut name"
//                            }
//                        },
//                    }
//                });
                /* For Bootstrap Switch */

                $("#cat_id").change(function() {
                    var cat_id = $("#cat_id").val();
                    $.ajax({
                        method: "GET",
                        url: '<?php echo url('contactus/getsubcategory/'); ?>/' + cat_id,
                        success: function(data) {
                            $("#subcat_id").html(data);
                        }
                    });
                });
            });


            function checkHELLO(field, rules, i, options) {
                if (grecaptcha.getResponse() == '') {
                    return "Captcha Needed";
                } else {
                    return false;
                }
            }

        </script>




    </body>
</html>