<title>
@if(Request::segment(2) == 'dashboard')
Dashboard
@endif
@if(Request::segment(2) == 'index')
Index:: Edit
@endif
@if(Request::segment(2) == 'vaccancies')
Job Vacancies:: Listing
@endif
@if(Request::segment(2) == 'applicants')
Online Job Applicants:: Listing
@endif
@if(Request::segment(3) == 'corrugated')
Technology:: Edit
@endif
@if(Request::segment(3) == 'feedbacks')
Feedback:: Listing
@endif
@if(Request::segment(3) == 'paperbags')
What We Do:: Edit
@endif

@if(Request::segment(3) == 'charter')
Board Charter:: Edit


@endif
@if(Request::segment(3) == 'audit')
Terms of Reference of Audit Committee:: Edit
@endif
@if(Request::segment(3) == 'nomination')
Industries:: Edit
@endif
@if(Request::segment(3) == 'reports')
Financial Information:: Edit
@endif
@if(Request::segment(3) == 'announcements')
Bursa Announcements:: Edit
@endif




@if(Request::segment(3) == 'teaplantation')
Desa Tea Sdn Bhd:: Edit
@endif
@if(Request::segment(3) == 'hospitality')
Sabah Tea Resort Sdn Bhd:: Edit
@endif
@if(Request::segment(3) == 'announcements')
Company Announcements:: Edit
@endif
@if(Request::segment(3) == 'reports')
Annual Reports:: Edit
@endif
@if(Request::segment(3) == 'pressrelease')
Press Releases:: Edit
@endif
@if(Request::segment(2) == 'userslist')
Users:: Listing
@endif
</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link href="{{asset('assets/images/favicon.ico')}}" rel="shortcut icon">


{{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic') }}
{{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700') }}
{{ HTML::style('http://fonts.googleapis.com/css?family=Merriweather:400,300,400italic,700,700italic,300italic') }}



{{ HTML::style('assets/admin/vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css') }}
{{ HTML::style('assets/admin/vendors/font-awesome/css/font-awesome.min.css') }}
{{ HTML::style('assets/admin/vendors/bootstrap/css/bootstrap.min.css') }}
{{ HTML::style('assets/admin/vendors/bootstrap-datepicker/css/datepicker.css') }}
{{ HTML::style('assets/admin/vendors/bootstrap-switch/css/bootstrap-switch.css') }}
{{ HTML::style('assets/admin/vendors/animate.css/animate.css') }}
{{ HTML::style('assets/admin/vendors/jquery-pace/pace.css') }}
{{ HTML::style('assets/admin/css/style.css') }}
{{ HTML::style('assets/admin/css/style-mango.css') }}
{{ HTML::style('assets/admin/css/vendors.css') }}
{{ HTML::style('assets/admin/css/themes/grey.css') }}
{{ HTML::style('assets/admin/css/style_kym_front.css') }}
{{ HTML::style('assets/admin/css/skeleton_kym_front.css') }}

{{ HTML::style('assets/admin/js/jQueryValidation/css/validationEngine.jquery.css') }}

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



     
<style type="text/css">
 textarea.hideThisField {
  visibility:hidden !important;
  height: 0px;
  width: 0px;
}
</style>