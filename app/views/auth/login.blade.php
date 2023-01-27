<!DOCTYPE html>
<html lang="en">
<head>

<title>CMS Login: Welcome to Web88 Administration Panel</title>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">

    <!--Loading bootstrap css-->
    {{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'); }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700'); }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700,400italic,700italic'); }}

{{ HTML::style('assets/admin/vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css'); }}

    
{{ HTML::style('assets/admin/vendors/font-awesome/css/font-awesome.min.css'); }}
{{ HTML::style('assets/admin/vendors/bootstrap/css/bootstrap.min.css'); }}
    <!--LOADING SCRIPTS FOR PAGE-->
    <!--LOADING SCRIPTS FOR PAGE-->
{{ HTML::style('assets/admin/vendors/bootstrap-datepicker/css/datepicker.css'); }}
{{ HTML::style('assets/admin/vendors/bootstrap-switch/css/bootstrap-switch.css'); }}
    
    <!--Loading style vendors-->
{{ HTML::style('assets/admin/vendors/animate.css/animate.css'); }}
{{ HTML::style('assets/admin/vendors/jquery-pace/pace.css'); }}
    <!--Loading style-->
{{ HTML::style('assets/admin/css/style.css'); }}
{{ HTML::style('assets/admin/css/style-mango.css'); }}
{{ HTML::style('assets/admin/css/vendors.css'); }}
{{ HTML::style('assets/admin/css/themes/grey.css'); }}
{{ HTML::style('assets/admin/css/style-responsive.css'); }}


    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body id="signin-page" class="animated bounceInDown">
<div id="signin-page-content">
{{ Form::open(array('url' => 'admin/login', 'method' => 'post')) }}
          <div class="text-center"><a href="http://www.webqom.com/web88.html" target="_blank">{{ HTML::image('assets/admin/images/login/logo_web88.jpg','web88'); }}</a></div>

        <h1 class="block-heading">Web88 CMS Admin Login</h1>

        <p>Please enter your login details to access.</p>

        @if (Session::has('error'))
        <div class="alert-box danger">
           <h3>{{ trans(Session::get('error')) }}</h3>
         </div>
        @elseif (Session::has('status'))
        <div class="alert-box success">
           <h3>{{ trans(Session::get('status')) }}</h3>
         </div>
@endif

        <div class="form-group">

            <div class="input-icon"><i class="fa fa-user"></i>
             {{Form::text('username', null,array('class' => 'form-control','placeholder' => 'Username'))}}


            </div>
      </div>
        <div class="form-group">
            <div class="input-icon"><i class="fa fa-key"></i>
            {{Form::password('password',array('class' => 'form-control','placeholder' => 'Password'))}}    

            </div>
      </div>
        <div class="form-group">
            <div class="checkbox"><label><input type="checkbox">&nbsp;
                Remember me</label></div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login
                &nbsp;<i class="fa fa-chevron-circle-right"></i></button>

                <a id="btn-forgot-pwd" href="{{ url() }}/password/reset" class="mlm">Forgot your password?</a></div>
        <hr>
        <a href="mailto:hock@webqom.com"><i class="fa fa-envelope"></i> hock@webqom.com</a>

        <a href="http://www.facebook.com/webqomtechnologies" class="pull-right" target="_blank"><i class="fa fa-facebook-square"></i> /webqomtechnologies</a><br/>
        <i class="fa fa-phone"></i>+(603) 2630 5562
        <span class="margin-top-5px text-12px pull-right">&copy; 2016 <a href="http://www.webqom.com" target="_blank">Webqom Technologies Sdn. Bhd.</a></span>
        
     {{ Form::close() }}
</div>
{{ HTML::script('assets/admin/js/jquery-1.9.1.js');}}
{{ HTML::script('assets/admin/js/jquery-migrate-1.2.1.min.js');}}
{{ HTML::script('assets/admin/js/jquery-ui.js');}}
<!--loading bootstrap js-->
{{ HTML::script('assets/admin/vendors/bootstrap/js/bootstrap.min.js');}}
{{ HTML::script('assets/admin/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js');}}
{{ HTML::script('assets/admin/js/html5shiv.js')}}
{{ HTML::script('assets/admin/js/respond.min.js')}}
{{ HTML::script('assets/admin/vendors/jquery-cookie/jquery.cookie.js')}}
</body>
</html>