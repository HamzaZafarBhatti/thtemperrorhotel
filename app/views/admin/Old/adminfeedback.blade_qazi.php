@extends('admin.layouts.admin')
@section('content')
          <div class="row">
            <div class="col-lg-12">
              <h2>Feedback <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
              
               {{ Session::get('message') }}
              <div class="pull-left"> Last updated: <span class="text-blue">{{ date("d F Y",strtotime($feedbacks[0]->updated_at->toDateTimeString())) }} @ {{ date("g:i A",strtotime($feedbacks[0]->updated_at->toDateTimeString())) }}</span> </div>
              <div class="clearfix"></div>
              <p></p>
               {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'announcementsave','id' => 'announcementsave')) }} 
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
                  <div contenteditable="true" id="left-block1-title">
                    {{ $page[0]->left_block1_title}}
                  </div>
                    {{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}

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
                    <!-- Google Map -->
                    <div class="clearfix">
                      <div class="grid_12">
                        <div contenteditable="true" id="left-block1-content">
                          {{ $page[0]->left_block1_content}}
                        </div>
                           {{ Form::textarea('left_block1_content',$page[0]->left_block1_content,array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}

                        <!-- Google Map Canvas -->
                        <div class="map-wrapper">
                          <div class="map-canvas">
                            <iframe 
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCuGRp7Cn9FrtJXeZ2Kp_WqqieB7P18K88&q={{ $page[0]->right_block1_content }}" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                          </div>
                        </div>
                        <!-- Google Map Canvas / End -->
                      </div>
</div>
                    <!-- Google Map / End -->
                   
                    <div class="clearfix"></div>
                    <a href="#" data-target="#modal-edit-map" data-toggle="modal">
                      <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                    </a>
                    <div class="clearfix"></div>
                    <div class="clearfix">
                      <div class="grid_9">
                        <!-- Contact Form -->
                        <div contenteditable="true" id="left-block2-title">
                          {{ $page[0]->left_block2_title }}
                          
                        </div>
                        <div class="clearfix"></div>
                             {{ Form::textarea('left_block2_title',$page[0]->left_block2_title,array("id" => "textarea-left-block2-title","class" => "hideThisField")) }}

                        <!-- Contact Form / End -->
                      </div>
<div class="grid_3">
                        <!-- Contact Information -->
                        <div contenteditable="true" id="left-block2-content">
                          {{ $page[0]->left_block2_content }}
                        </div>
                           {{ Form::textarea('left_block2_content',$page[0]->left_block2_content,array("id" => "textarea-left-block2-content","class" => "hideThisField")) }}

                        <!-- Contact Information / End -->
                      </div>
</div>
                  </div>
                </div>
                <!-- save button start -->
                <div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('announcementsave','/contactus');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
 
                <!-- save button end -->
              </div>
              <!--Modal Edit Google Map start-->
              <div id="modal-edit-map" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                       
                          <div class="form-group">
                            <label class="col-md-3 control-label">Search Google Map <span class='require'>*</span></label>
                            <div class="col-md-9">
                                <input type="text" id="map_address" name="map_address" class="form-control" placeholder="" value="{{ $page[0]->right_block1_content }}" />
                              <div class="margin-top-10px">
                                  <input type="button" onclick="updateMapAdd('map_load_dynamic1','search');" id="gmap_geocoding_btn" class="btn btn-dark" value="Search" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas1" class="map-canvas">
                  <iframe id="map_load_dynamic1" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCuGRp7Cn9FrtJXeZ2Kp_WqqieB7P18K88&q={{ $page[0]->right_block1_content }}"
   width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                              <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" data-dismiss="modal" onclick="updateMapAdd('map_load_dynamic','save');" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
                            <input type="hidden" id="right-block1-content" name="right_block1_content" value="{{ $page[0]->right_block1_content }}">

              {{ Form::close() }}
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Online Feedback Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                 
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#confirmDeletenot" data-toggle="modal" class="deleteid" rel="{{url();}}/admin/page/deletemultiplefeedback" rev="confirmDelete">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
          <div class="tools"> 
                    <i class="fa fa-chevron-up"></i> 
                  </div>
                  <!--Modal Add New PDF start-->
                  
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
                            <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/contacts/deleteallfeedback', 'method' => 'post', 'name' => 'deleteallpressrelease', 'id' => 'deleteallpressrelease', 'class' => 'form-horizontal','files' => true)) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                        <th width="1%"><input type="checkbox" class="wholecheck" name="pressreleasedelete[]"/></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Enquiry Related To</th>
                        <th>Sub Category</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                     $i = $feedbacks->getFrom();
                     echo "<pre>";
                             print_r($i);
                             print_r($feedbacks);
                     echo "</pre>";
                     die();

                     ?>
                     @foreach($feedbacks as $k => $feedback)
                      <tr>
                        <td><input type="checkbox"  class="chkNumber"  value="{{$feedback->id}}"/></td>
                   