<!DOCTYPE html>
<html lang="en">
<head>

@include('admin.includes.head')
</head>
<body>
<div>
<!--BEGIN TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->
  <div id="wrapper"><!--BEGIN TOPBAR-->
        <nav id="topbar" role="navigation" style="margin-bottom: 0;" class="navbar navbar-default navbar-static-top">
          <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a id="logo" href="http://www.webqom.com/web88.html" target="_blank" class="navbar-brand">
          
         
          {{ HTML::image('assets/admin/images/logo_web88.png','web88') }}
          </a>          
          </div>
            
              <div class="topbar-main">
                  <a id="logo" href="http://www.cpipenang.com" class="navbar-brand" target="_blank">

                  
                  {{ HTML::image('assets/admin/images/logo.jpg') }}

                  </a>
                    <a id="menu-toggle" href="#" class="btn hidden-xs"><i class="fa fa-bars"></i></a>
                    
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control"/></div>
                </form>
                <ul class="nav navbar-top-links navbar-right">
                
                    <li class="dropdown"><a data-toggle="dropdown" href="#" class="dropdown-toggle">
                    
                    @if( Auth::user()->avatar->url('thumb') == '' || Auth::user()->avatar->url('thumb') == "/avatars/thumb/missing.png")       
         {{HTML::image('assets/admin/images/profile/image_hock.jpg','Avatar',array( 'class' => 'img-responsive img-circle' )) }}
         @else
         {{HTML::image('public'.Auth::user()->avatar->url('thumb'),'Avatar',array( 'class' => 'img-responsive img-circle' )) }}
         @endif

                    &nbsp;
                        {{Auth::user()->name}}
                        &nbsp;<span class="caret"></span></a>
<ul class="dropdown-menu dropdown-user pull-right animated bounceInLeft">
                            <li>
                                <div class="navbar-content">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5">
                                         @if( Auth::user()->avatar->url('thumb') == '' || Auth::user()->avatar->url('thumb') == "/avatars/thumb/missing.png")       
         {{HTML::image('assets/admin/images/profile/image_hock.jpg','Avatar',array( 'class' => 'img-responsive img-circle' )) }}
         @else
         {{HTML::image('public'.Auth::user()->avatar->url('thumb'),'Avatar',array( 'class' => 'img-responsive img-circle' )) }}
         @endif

                                            <p class="text-center mtm">
                                              <a href="#" data-target="#modal-change-avatar" data-toggle="modal" class="change-avatar">
                                                <small>Change Avatar</small>                                                </a></p>
                                      </div>
                                        <div class="col-md-7 col-xs-5"><span>{{ Auth::user()->name }}</span>

                                            <p class="text-muted small">{{ Auth::user()->username }}</p>

                                            <div class="divider"></div>
                                            <!--<a href="#" class="btn btn-primary btn-sm">View Profile</a>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-footer">
                                    <div class="navbar-footer-content">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6"><a href="#" class="btn btn-default btn-sm" data-target="#modal-change-password" data-toggle="modal">Change Password</a></div>
                                            <div class="col-md-6 col-xs-6"><a href="{{ url() }}/admin/logout" class="btn btn-default btn-sm pull-right">Sign Out</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                      </ul>
                  </li>
                </ul>
          </div>
</nav>
        <!--Modal Change Avatar start-->
                            <div id="modal-change-avatar" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label2" class="modal-title">Change Avatar</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
                                    {{ Form::open(array('url' => 'user/update', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }} 
                                     
                                        
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Avatar Image </label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px"> 
                                              @if( Auth::user()->avatar->url('thumb') == '')       
         {{HTML::image('assets/admin/images/profile/image_hock.jpg','Avatar',array( 'class' => 'img-responsive img-circle' )) }}
         @else
         {{HTML::image('public'.Auth::user()->avatar->url('thumb'),'Avatar',array( 'class' => 'img-responsive img-circle' )) }}
         @endif

                                             <br/>
                                                {{Form::file('avatar', null,array('id'=>'exampleInputFile1'))}}  
                                              <br/>
                                                <span class="help-block">(Image dimension: 100 x 100 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                          </div>
                                        </div>
                                        
                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> 
                                          
                                          <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>
                                          &nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                        </div>
                                      {{ Form::close() }}
                                    </div>
                                  </div>
                                </div>
                              </div>
    </div>
                          <!--END MODAL Change Avatar-->
        <!--Modal Change Password start-->
                <div id="modal-change-password" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-login-label" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Change Password</h4></div>
                            <div class="modal-body">
                                <div class="form">
                                     {{ Form::open(array('url' => 'admin/users/changepassword','name' => 'changepass','id' => 'changepass', 'class'=> 'form-horizontal','method' => 'post')) }}
                                        
                                        <div class="form-group">
                                          <label for="password" class="control-label col-md-4">New Password</label>

                                            <div class="col-md-8">
                                              <div class="input-icon"><i class="fa fa-key"></i> 
                                             
                                               {{Form::password('password', array('id'=>'password1', 'class' => 'validate[required,minSize[6],maxSize[12]] form-control'))}} 
                                              <span class="text-10px">(Password length should be between 6-12 characters)</span>                                                </div>
                                          </div>
                                        </div>
                                        
                                        <div class="form-group">
                                          <label for="password" class="control-label col-md-4">Confirm New Password</label>

                                            <div class="col-md-8">
                                              <div class="input-icon"><i class="fa fa-key"></i> 
                                              
                                               {{Form::password('confirmpassword', array('id'=>'confirmpassword','class' => 'validate[required,equals[password1]] form-control', 'placeholder' => 'Confirm New Password'))}} 

                                              <span class="text-10px">(Password length should be between 6-12 characters)</span>                                                </div>
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="col-md-offset-4 col-md-8">
                                               <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp;

                                              <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a>                                            </div>
                                        </div>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
        <!--END MODAL CHANGE PASSWORD-->
        <!--END TOPBAR-->
        
        <!--BEGIN SIDEBAR MENU-->
       @include('admin.includes.sidebar')
        <!--END SIDEBAR MENU--><!--BEGIN PAGE WRAPPER-->
      <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->

      <?php
               if(Request::segment(2) == 'dashboard') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp;</li>';
               $title = "Dashboard";
               }
               
               else if(Request::segment(2) == 'index') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">Index - Edit</li>';
               $title  = "Index";
               
               }
               
               else if(Request::segment(2) == 'vaccancies') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">
Job Vacancies - Listing</li>';
               $title = "Careers";
               
               }
               
               else if(Request::segment(2) == 'applicants') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">

Online Job Applicants - Listing</li>';
               $title = "Careers";
               
               } 
               else if(Request::segment(3) == 'feedbacks') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li>Contacts &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">

Feedback - Listing</li>';
               $title = "Contacts";
               
               }

               else if(Request::segment(3) == 'paperbags') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li>Services &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">

What We Do - Edit</li>';
               $title = "Services";
               
               }

               else if(Request::segment(3) == 'corrugated') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li>Services &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">

Technology - Edit</li>';
               $title = "Services";
               
               }

                else if(Request::segment(3) == 'charter') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li>Investor Relations &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">

Board Charter - Edit</li>';
               $title = "Investor Relations";
               
               }

                else if(Request::segment(3) == 'audit') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li>Investor Relations &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">

Terms of Reference of Audit Committee - Edit</li>';
               $title = "Investor Relations";
               
               }
                else if(Request::segment(3) == 'nomination') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li>Industries &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">

Industries - Edit</li>';
               $title = "Industries";
               
               }

               else if(Request::segment(3) == 'reports') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li>Investor Relations &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">

 Financial Information - Edit</li>';
               $title = "Investor Relations";
               
               }
                else if(Request::segment(3) == 'announcements') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li>Investor Relations &nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">

Bursa Announcements - Edit</li>';
               $title = "Investor Relations";
               
               }
               else if(Request::segment(2) == 'enquiry_category') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">Enquiry Category - Listing &nbsp;&nbsp;</li>';
               $title = "Enquiry Category";
               
               }
                else if(Request::segment(2) == 'enquiry_email') {
               $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">Enquiry Email - Listing &nbsp;&nbsp;</li>';
               $title = "Enquiry Email";
               
               }
                else if(isset($pageTitle)) {
                  $title =  $pageTitle;
                  $bread = '<li><i class="fa fa-home"></i>&nbsp;<a href="'.url().'/admin/dashboard">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li><li class="active">'.$pageTitle.' - Listing &nbsp;&nbsp;</li>';
                }
               
               ?>



      <div class="page-header-breadcrumb">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">
             <?php if(!isset($title)){$title = ' ';} ?>
             {{ $title }}</h1>
          </div>
          
           <ol class="breadcrumb page-breadcrumb">
              <?php if(!isset($bread)){$bread = ' ';} ?>
           {{ $bread }}

          </ol>
        </div>
        
        
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        
        <div class="page-content">
          @yield('content')
        </div>
        <!--END CONTENT-->
            
 <!--BEGIN FOOTER-->
       @include('admin.includes.footer')
        <!--END FOOTER-->
        </div>
  <!--END PAGE WRAPPER--></div>
</div>
 @include('admin.includes.scripts')
 
</body>
</html>