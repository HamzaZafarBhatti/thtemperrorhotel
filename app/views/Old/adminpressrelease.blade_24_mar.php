@extends('layouts.admin')
@section('content')

      <div class="row">
            <div class="col-lg-12">
              <h2>Press Release <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
              <!--<div class="alert alert-success alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>The information has been saved/updated successfully.</p>
              </div>-->
              <!--<div class="alert alert-danger alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                <p>The information has not been saved/updated. Please correct the errors.</p>
              </div>-->
              
              <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue"> {{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}
</span> </div>
              <div class="clearfix"></div>
              <p></p>
              
           {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'millsave','id' => 'millsave')) }} 
		   {{Form::hidden('preview','')}}
           {{Form::hidden('pageid',$page[0]->id)}}
           {{Form::hidden('type',$page[0]->type)}}
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Info</div>
                  <div class="clearfix"></div>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <div class="portlet-body">
                    <div contenteditable="true" id="page-title">
                  {{ $page[0]->page_title }}
                  </div>
                  {{ Form::textarea('page_title',$page[0]->page_title,array("id" => "textarea-page-title","class" => "hideThisField")) }}
                </div>
              </div>
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Content</div>
                  <div class="clearfix"></div>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <div class="portlet-body">
                  <div class="container">
                    <div class="clearfix">
                      <div class="grid_8">
                        <header class="entry-header clearfix">
                          <div class="format-icon">
                            <div class="format-icon-inner"> <i class="icon-group"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                              <div contenteditable="true" id="left-block1-title">
                          {{ $page[0]->left_block1_title }}
                            </div>
               {{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}
                          </div>
                        </header>
                        <div class="line"></div>
                        <div contenteditable="true" id="left-block1-content">
                  {{ $page[0]->left_block1_content }}
                        </div>
                {{ Form::textarea('left_block1_content',$page[0]->left_block1_content,array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}
                        <div class="clearfix"></div>
                        
                        <!-- Vacancies Listing start -->
                        
                        
                      </div>
<div class="grid_3 pull-right">
                            <!-- Recent Posts Widget -->
                            <div class="latest-posts widget widget__sidebar">
                                <div contenteditable="true" id="right-block1-title">
                            {{ $page[0]->right_block1_title }} 
                               </div>
  {{ Form::textarea('right_block1_title', $page[0]->right_block1_title,array("id" => "textarea-right-block1-title","class" => "hideThisField")) }}

                                 <div class="widget-content">
                                <ul class="thumbs-list thumbs-list__clean">
                                        <li class="list-item clearfix">
                                            <figure class="thumb-simple thumb__hovered">
                                                <div contenteditable="true" id="left-inner-block-title14">
                                                    {{ $page[0]->left_inner_block_title14 }} 
                                                </div>
                                                    
                                            </figure>
                                              {{ Form::textarea('left_inner_block_title14', $page[0]->left_inner_block_title14,array("id" => "textarea-left-inner-block-title14","class" => "hideThisField")) }}

                                            <h5 class="item-heading">
                                            	<div contenteditable="true" id="left-inner-block-content14">
                                                    {{ $page[0]->left_inner_block_content14 }} 
                                                </div>
                                            </h5>
            {{ Form::textarea('left_inner_block_content14', $page[0]->left_inner_block_content14,array("id" => "textarea-left-inner-block-content14","class" => "hideThisField")) }}

                                            <div contenteditable="true" id="left-inner-block-title15">
                                                {{ $page[0]->left_inner_block_title15 }} 
                                            </div>
         {{ Form::textarea('left_inner_block_title15', $page[0]->left_inner_block_title15,array("id" => "textarea-left-inner-block-title15","class" => "hideThisField")) }}

                                      </li>
                                      <div class="hr"></div>
                                        <li class="list-item clearfix">
                                            <figure class="thumb-simple thumb__hovered">
                                                <div contenteditable="true" id="left-inner-block-title16">
                                                   {{ $page[0]->left_inner_block_title16 }} 
                                                </div>
     {{ Form::textarea('left_inner_block_title16', $page[0]->left_inner_block_title16,array("id" => "textarea-left-inner-block-title16","class" => "hideThisField")) }}

                                            </figure>
                                            <h5 class="item-heading">
                                            	<div contenteditable="true" id="left-inner-block-content16">
                                               {{ $page[0]->left_inner_block_content16 }} 
                                                </div>
                 {{ Form::textarea('left_inner_block_content16', $page[0]->left_inner_block_content16,array("id" => "textarea-left-inner-block-content16","class" => "hideThisField")) }}

                                            </h5>
                                          	<div contenteditable="true" id="left-inner-block-title17">
                                                {{ $page[0]->left_inner_block_title17 }} 
                                            </div>
             {{ Form::textarea('left_inner_block_title17', $page[0]->left_inner_block_title17,array("id" => "textarea-left-inner-block-title17","class" => "hideThisField")) }}

                                      </li>
                                      <div class="hr"></div>
                                        <li class="list-item clearfix">
                                            <figure class="thumb-simple thumb__hovered">
                                                <div contenteditable="true" id="left-inner-block-title18">
                                                {{ $page[0]->left_inner_block_title18 }} 
                                                </div>
          {{ Form::textarea('left_inner_block_title18', $page[0]->left_inner_block_title18,array("id" => "textarea-left-inner-block-title18","class" => "hideThisField")) }}

                                            </figure>
                                            <h5 class="item-heading">
                                                <div contenteditable="true" id="left-inner-block-content18">
                                            	{{ $page[0]->left_inner_block_content18 }} 
                                                </div>
 {{ Form::textarea('left_inner_block_content18', $page[0]->left_inner_block_content18,array("id" => "textarea-left-inner-block-content18","class" => "hideThisField")) }}

                                            </h5>
                                          	<div contenteditable="true" id="left-inner-block-title19">
                                                {{ $page[0]->left_inner_block_title19 }} 
                                            </div>
               {{ Form::textarea('left_inner_block_title19', $page[0]->left_inner_block_title19,array("id" => "textarea-left-inner-block-title19","class" => "hideThisField")) }}

                                      </li>
                                      <div class="hr"></div>
                                    </ul>
                                </div>
                                
                            </div>
                            <!-- /Recent Posts Widget -->
						</div>
</div>
                  </div>
                </div>
              
              	<!-- save button start -->
                <div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('millsave','investorrelations/pressrelease');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
                
              </div>
              {{ Form::close() }}
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Press Releases Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-pdf" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#confirmDelete" data-toggle="modal" class="deleteid" rel="{{url();}}/admin/page/deletemultiplepressrelease" rev="confirmDelete">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                  ??
				  <div class="tools"> 
                    <i class="fa fa-chevron-up"></i> 
                  </div>
                  <!--Modal Add New PDF start-->
                  <div id="modal-add-pdf" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label2" class="modal-title">Add New Press Release</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                         {{ Form::open(array('url' => 'admin/investor/addpressrelease', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}   
                              <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-8">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                     {{Form::checkbox('active', 1,array('id'=>'active','class' => 'form-control'))}}
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Title <span class='require'>*</span></label>
                                <div class="col-md-8">
                                {{Form::text('title', null,array('id'=>'title','class' => 'form-control','placeholder' => 'Title'))}}
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Date <span class='require'>*</span></label>
                                <div class="col-md-5">
                                  <div class="input-group">
                                   {{Form::text('date','',array('id'=>'date','class' => 'datepicker-default form-control','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy'))}}  
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Citation <span class='require'>*</span></label>
                                <div class="col-md-8">
                                 {{Form::text('citation', null,array('id'=>'citation','class' => 'form-control','placeholder' => 'NA'))}}
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Content</label>
                                <div class="col-md-8">
                              
                                    <!-- begin post content -->
                                    <div class="entry-content">
                                        <div contenteditable="true" id="content-edit">
                                        	Please place your press release content here.
                                            
                                        </div>
                                         {{Form::textarea('content', '',array('id'=>'textarea-content-edit','class' => 'hideThisField'))}}
                                    </div>
                                    <!-- end post content -->
                                  
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Upload Press Thumbnail <span class='require'>*</span></label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
                                     {{Form::file('image', null,array('id'=>'imageInput'))}}
                                    <br/>
                                    <span class="help-block">(Image dimension: 600 x 624 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Enable "Read More" Button </label>
                                <div class="col-md-8">
                                  <span class="help-block">If you have additional information for this press release, please tick the "Yes" button and upload PDF document below.</span>
                                  <div class="text-15px margin-top-10px">
                                     <div class="radio-list">
                                     	<label class="radio-inline"><input id="yes" type="radio" name="read_more" value="1"/>&nbsp; Yes</label>
                                        <label class="radio-inline"><input id="no" type="radio" name="read_more" value="0" checked="checked"/>&nbsp; No</label>
                                     </div>
                                     
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Upload PDF </label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
                                  {{Form::file('pdf', null,array('id'=>'pdfInput'))}}
                                  </div>
                                </div>
                              </div>
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"><button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                            {{Form::close()}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New PDF-->
                  <!--Modal delete selected items start-->
                  <div id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"><button type="button" class="btn btn-danger" id="confirm">Delete &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete selected items end -->
                  <!--Modal delete all items start-->
                  <div id="modal-delete-all" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/investor/deleteallpressrelease', 'method' => 'post', 'name' => 'deleteallpressrelease', 'id' => 'deleteallpressrelease', 'class' => 'form-horizontal','files' => true)) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }} </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete all items end -->
                </div>
                <div class="portlet-body">
                  <div class="form-inline pull-left">
                    <div class="form-group">
                      @if($cntarray1 != 0 )
                   
                    {{ Form::open(array('url' => Request::url(),'class'=> 'form-horizontal','method' => 'get')) }}
	{{ Form::select('noperpage1', $cntarray1, Input::get('noperpage1'),array('class' => 'form-control','onchange' => 'this.form.submit();')) }}
	 {{ Form::close() }}
         
        
                      &nbsp;
                      <label class="control-label">Records per page</label>
                       @endif
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <br/>
                  <br/>
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th width="1%"><input type="checkbox" name="pressreleasedelete[]"/></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($pressreleases as $k => $pressrelease)
                      <tr>
                        <td><input type="checkbox"  class="chkNumber" value="{{$pressrelease->id}}"/></td>
                        <td>{{$k+1}}</td>
                        <td> @if($pressrelease->active == 1)
                            <span class="label label-sm label-success">Active</span>
                            @else
                             <span class="label label-sm label-red">In Active</span>
                            @endif</td>
                        <td>{{$pressrelease->date}}</td>
                        <td>{{$pressrelease->title}}</td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-pdf{{$pressrelease->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-press{{$pressrelease->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal Edit PDF start-->
                            <div id="modal-edit-pdf{{$pressrelease->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label2" class="modal-title">Edit Press Release</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
                                      {{ Form::open(array('url' => 'admin/investor/editpressrelease', 'method' => 'post', 'name' => 'editpressrelease'.$pressrelease->id, 'id' => 'editpressrelease'.$pressrelease->id, 'class' => 'form-horizontal','files' => true)) }}      
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Status</label>
                                          <div class="col-md-8">
                                            <div data-on="success" data-off="primary" class="make-switch">
                                       
                      {{Form::checkbox('active', $pressrelease->active, $pressrelease->active,array('id'=>'active','class' => 'form-control'))}}
                      
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Title <span class='require'>*</span></label>
                                          <div class="col-md-8">
{{Form::text('title', $pressrelease->title ,array('id'=>'title','class' => 'form-control'))}}
                                          </div>
                                        </div>  
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Date <span class='require'>*</span></label>
                                          <div class="col-md-5">
                                            <div class="input-group">
                                               {{Form::text('date',$pressrelease->date,array('id'=>'date','class' => 'datepicker-default form-control','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy'))}} 
                                              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Citation <span class='require'>*</span></label>
                                            <div class="col-md-8">
                                             {{Form::text('citation', $pressrelease->citation ,array('id'=>'citation','class' => 'form-control'))}}
                                            </div>
                                          </div>
										   
                                          <div class="form-group">
                                            <label class="col-md-4 control-label">Content</label>
                                            <div class="col-md-8">
            
                                                <!-- begin post content -->
                                                <div class="entry-content">
										  
                                      <div contenteditable="true" id="content{{ $pressrelease->id }}">
                              <!-- {{ $pressrelease->content }} {{ $pressrelease->id }} $pressrelease->id-->    
                                </div>
                {{ Form::textarea('content',$pressrelease->content,array("id" => "textarea-content$pressrelease->id","class" => "",'style'=>'height:200px;')) }}
                                                </div>
                                                <!-- end post content hideThisField -->
                                              
                                            </div>
                                          </div>
										
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Press Thumbnail <span class='require'>*</span></label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px"> 
                                            	 {{HTML::image($pressrelease->image->url('large'),'image',array( 'class' => 'img-responsive' ));}}
                                              <br/>
                                         {{Form::file('image', null,array('id'=>'imageInput'))}}
                                              <br/>
                                                <span class="help-block">(Image dimension: 600 x 624 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Enable "Read More" Button </label>
                                            <div class="col-md-8">
                                              <span class="help-block">If you have additional information for this press release, please tick the "Yes" button and upload PDF document below.</span>
                                              <div class="text-15px margin-top-10px">
                                                 <div class="radio-list">
                                                   
                                                    <label class="radio-inline"><input id="yes" type="radio" name="read_more" value="1" @if($pressrelease->read_more == 1) checked="checked" @endif/>&nbsp; Yes</label>
                                                    <label class="radio-inline"><input id="no" type="radio" name="read_more" value="0" @if($pressrelease->read_more == 0)checked="checked" @endif/>&nbsp; No</label>
                                                 </div>
                                                 
                                              </div>
                                            </div>
                                          </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload PDF </label>
                                          <div class="col-md-8"> 
                                              @if($pressrelease->pdf_file_name != '')
                                              <div id="pdfCont">
                                              <a href="{{ url() }}{{ $pressrelease->pdf->url() }}" target="_blank">{{ $pressrelease->pdf_file_name }}</a>
                                                <a href="javascript:void(0);" class="deletePDF" id="{{ $pressrelease->id }}" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-1-1" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                              </div>
                                              @endif
                                                <div class="text-15px margin-top-10px">
                                                  <input type="hidden" name="deletePDFMname" id="deletePDFMname" value="Pressrelease">
                                               {{Form::file('pdf', null,array('id'=>'pdf'))}}
                                              </div>
                                          </div>
                                        </div>
                                        {{ Form::hidden('pressreleaseid',$pressrelease->id) }}
                                        <div class="form-actions">
                                          <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                        </div>
                                      {{ Form::close()}}
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!--END MODAL Edit PDF-->
                            <!--Modal delete start-->
                            <div id="modal-delete-press{{ $pressrelease->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this report? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{$pressrelease->id}}:</strong> {{$pressrelease->title}}</p>
                                    <div class="form-actions">
                                     {{ Form::open(array('url' => 'admin/investor/deletepressrelease', 'method' => 'post', 'name' => 'deletepressrelease'.$pressrelease->id, 'id' => 'deletepressrelease'.$pressrelease->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('pressreleaseid',$pressrelease->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }}
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!-- modal delete end -->
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="7"></td>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{ $pressreleases->getFrom() }} to {{ $pressreleases->getTo() }} of {{ $pressreleases->getTotal() }} entries</p>
                    {{ $pressreleases->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end portlet -->
            </div>
          </div>
        </div>
        
        @stop