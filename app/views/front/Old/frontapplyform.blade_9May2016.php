@extends('front.layouts.front')
@section('content')
            <!-- BEGIN PAGE TITLE -->
<div id="page-title" class="page-title">
				<div class="container">
					<div class="clearfix">
						<div class="grid_12">
							<div class="page-title-holder">
								{{$mainMenuTitle}}
							</div>
							<!-- Breadcrumbs -->
							
						  <ul class="breadcrumbs">
                            <li><a href="{{url().'/'}}">Home</a></li>
						    <li><a href="{{url().'/carrers'}}">Careers</a></li>
                            <li>Job Application</li>
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
						<div class="grid_8">
							
        
                            <!-- Vacancies Listing start -->
                            <header class="entry-header clearfix">
								<div class="entry-header-inner">
									<h3 class="entry-title">You are applying the job position of: </h3>
								</div>
							</header>
                            
                            <ul class="contact-info">
								<li><i class="fa fa-suitcase"></i> Job Position: <strong>{{ $vaccancy->job_title }}</strong></li>
                                <li><i class="fa fa-map-marker"></i> Job Location: <strong>{{ $vaccancy->job_location }}</strong></li>
								
							</ul>
                            
                            <div class="hr"></div>
                            
                            
                            {{ Session::get('message') }}
                            <br/>
                            
							<!-- Contact Form -->
							<h3>Please complete the application form below: </h3>
                            <span class="text-red pull-right">* Mandatory field</span>
                            <div class="clearfix"></div>
								
								  {{ Form::open(array('url' => 'company/careers/submitapp', 'id' => 'career-apply-form', 'method' => 'post', 'class' => 'contact-form input-blocks','files' => true)) }}      				

									<div class="field">
										<label for="name"><strong>Your Name</strong> <span class="text-red">*</span></label>
										{{ Form::text('name','',array('id' => 'name','class' => 'validate[required]'))}}	
									</div>
                                    <div class="field">
										<label for="name"><strong>Date of Birth</strong> <span class="text-red">*</span></label>
										{{ Form::text('dob',null,array('placeholder' => 'DD / MM / YYYY','id' => 'dob','class' => 'datepicker validate[required]','data-provide' => 'datepicker', "data-date-format" => "dd/mm/yyyy"))}}
									</div>
                                    <div class="field">
										<label for="name"><strong>Gender</strong> </label><br/>
										{{ Form::radio('gender', 'm') }} Male
      									{{ Form::radio('gender', 'f') }} Female
									</div>
                                   
                                    <div class="field">
										<label for="name"><strong>Education Level</strong> <span class="text-red">*</span></label>
										{{ Form::select('education', array('no' => '-- Please select --', 
                                                       'Higher secondary / STPM / &quot;A&quot; Level / Pre-U' => 'Higher secondary / STPM / &quot;A&quot; Level / Pre-U',
                                                       'Diploma / Advanced Higher / Graduate Diploma' => 'Diploma / Advanced Higher / Graduate Diploma',
                                                       'Professional Certificated / Degree / Master' => 'Professional Certificated / Degree / Master'       
                                                       ), 'no',array('class' => 'validate[required]')) }}
									</div>
                                    <div class="field">
										<label for="email"><strong>Contact No.</strong> <span class="text-red">*</span></label>
										{{ Form::text('contactno','',array('id' => 'contactno','class' => 'validate[required]'))}}
									</div>
									<div class="field">
										<label for="email"><strong>E-mail</strong> <span class="text-red">*</span></label>
										 {{ Form::text('email','',array('id' => 'email','class' => 'validate[required,custom[email]]'))}}  
									</div>
                                    <div class="field">
										<label for="email"><strong>Attach Your CV</strong> <span class="text-red">*</span></label><br/>
                                        Click "Browse" button to attach your CV (PDF, RTF, MS Word or JPEG file). Max file size: 2MB<br/>
									   
                                        {{ Form::file('resume',array('id' => 'resume','class' => 'validate[required,checkFileType[pdf|PDF|rtf|RTF|doc|DOC|docx|DOCX|jpg|JPG|jpeg|JPEG]]'))}}
									</div>
                                    <div class="field bg-black">
                                        {{ Form::checkbox('agree','',array('id' => 'agree','class' => 'validate[required]'))}} By clicking the "Submit" button,below, I agree to the terms stipulated in the service agreement & privacy policy. 
                                    </div>
                                    
                                    <!-- Horizontal Rule (double) -->
                                    <div class="hr hr__double">
                                      <div class="hr-first"></div>
                                      <div class="hr-second"></div>
                                    </div>
                                    <!-- Horizontal Rule (double) / End -->
                                    <br/> {{ Form::hidden('vaccancyid',$vaccancy->id,array('id' => 'vaccancyid'))}} 
									
									<div class="center">
									<button type="submit" name="submit" id="submit" class="button"><span class="button-inner">Submit CV &nbsp;<i class="fa fa-cloud-upload"></i></span></button>
                                    </div>
									<div id="response"></div>
									{{ Form::close() }}
							<!-- Contact Form / End -->

							<!-- Vacancies Listing End -->
                          
                            <div class="clearfix"></div>
                            
                           
						</div>
						<div class="grid_4">
							<!-- Extra Contact Box -->
							<div class="cta1">
								{{ $page->left_block1_content}}
                                
   
                                <div class="bg-grey">
                                    <div class="center">
                                    {{ $page->left_block2_title}}
                                    	 </div>
                                </div>
							</div>
							<!-- Extra Contact Box / End -->
						</div>
					</div>
				</div>
			</div>
      <!-- END CONTENT WRAPPER -->
@stop