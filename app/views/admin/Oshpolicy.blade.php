@extends('admin.layouts.admin')
@section('content')
<div class="row">
    <style>
        .img-h-100{
            max-height:80px;
            max-width:120px;
        }
        </style>
    <div class="col-lg-12">
        <h2>OSH policy <i class="fa fa-angle-right"></i> Edit</h2>
        <div class="clearfix"></div>

        {{ Session::get('message') }}
        <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue">{{ date("d F Y",strtotime($data->updated_at)) }} @ {{ date("g:i A",strtotime($data->updated_at)) }}</span> </div>
        <div class="clearfix"></div>
        <p></p>
        {{ Form::open(array('url' => 'admin/upadteOshPolicy','class'=> 'form-horizontal','method' => 'post','name' => 'announcementsave','id' => 'announcementsave', 'enctype' =>"multipart/form-data")) }} 
{{Form::hidden('preview','')}}
        <div class="portlet">
            <div class="portlet-header">
                <div class="caption">Page Info</div>
                <div class="clearfix"></div>
                <span class="text-blue text-12px">You can edit the title by clicking the text section below.</span>
                <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
            </div>
            <div class="portlet-body">

                <!--{{ Form::textarea('title',$data->title,array("id" => "textarea-left-block3-title","class" => "ckeditor")) }}-->
                <div contenteditable="true" id="left-block3-title" style="padding-bottom:36px">
                    {{ $data->title }}

                </div>
                <div class="clearfix"></div>
                {{ Form::textarea('title',$data->title,array("id" => "textarea-left-block3-title","class" => "hideThisField")) }}

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
                        <div class="grid_12">
                            <header class="entry-header clearfix">
                                <div class="entry-header-inner">

                                    <!--{{ Form::textarea('subtitle',$data->subtitle,array("id" => "textarea-left-block1-title","class" => "ckeditor")) }}-->
                                    
                                    
                                    <div contenteditable="true" id="left-block1-title" style="padding-bottom:36px">
                    {{ $data->subtitle }}

                </div>
                <div class="clearfix"></div>
                {{ Form::textarea('subtitle',$data->subtitle,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}

                                </div>
                            </header>
                            <div class="clearfix">

                                <!--{{ Form::textarea('text',$data->text,array("id" => "textarea-left-block1-content","class" => "ckeditor")) }}-->
                                
                                
                                <div contenteditable="true" id="left-block1-content" style="padding-bottom:36px">
                    {{ $data->text }}

                </div>
                <div class="clearfix"></div>
                {{ Form::textarea('text',$data->text,array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}

                            </div>
                            {{-- <div class="clearfix margin-top-15px pageImages" hidden>
                                <p>Main Image <br><span class="imagePage"> (1920x400)</span></p>
                                <input type="file" class="form-control" name="mainImage" id="mainImage">
                                <input type="checkbox" id="deleteBackgroundImage"
                                name="deleteBackgroundImage"
                                />                            </div>
                            
                            </div>
                            <div class="clearfix margin-top-15px pageImages" hidden>
                                <p>Body Image <br><span class="imagePage">(440x280)</span></p>
                                <input type="file" class="form-control" name="bodyImage" id="bodyImage">
                                <input type="checkbox" id="deleteBodyImage"
                                name="deleteBodyImage"
                                />  
                            </div> --}}
                            <div class="hr"></div>
                            <!-- end clearfix -->
                            
                        </div>
                        
                    </div>
                    <!-- end clearfix -->
                    
                </div>
                
            </div>
    </div>
            {{-- table for backgound images listing --}}
            <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Sub-Page Banner Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                </div>
            <div class="portlet-body">
            <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td> @if($data->backgroundImages_active == 1)
                      <span class="label label-sm label-success">Active</span>
                      @else
                       <span class="label label-sm label-red">In Active</span>
                      @endif</td>
                    <td>{{HTML::image(url('public/uploads/'.$data->backgroundImages),'No Background Image',array( 'class' => 'img-responsive img-h-100','id' => 'backgroundImage' ));}}</td>
                    <td>{{$data->backgroundImages_title}}</td>
                    <td style="display:flex;"><a href="#" 
                        style="cursor: pointer;"
                        data-hover="tooltip" data-placement="top" data-target="#modal-edit-backgroundImage" data-toggle="modal" 
                        id="backgroundimageEdit" ><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#"  style="margin: 0px 4px" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-backgroundImage" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                       </td>
                  </tr>
                </tbody>
            </table>
            </div>
            </div>
            {{-- table for body images listing --}}
                <div class="portlet">
                    <div class="portlet-header">
                        
                      <div class="caption">Body Image Listing</div>
                      <br/>
                      <p class="margin-top-10px"></p>
                    </div>
                    <div class="portlet-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td> @if($data->bodyImages_active == 1)
                          <span class="label label-sm label-success">Active</span>
                          @else
                           <span class="label label-sm label-red">In Active</span>
                          @endif</td>
                        <td>{{HTML::image(url('public/uploads/'.$data->bodyImages),'No Body Image',array( 'class' => 'img-responsive img-h-100','id' => 'bodyBackgroundImage' ));}}</td>
                        <td>{{$data->bodyImages_title}}</td>
                        <td style="display: flex;">
                            <div href="#" id="bodyImageEdit"  href="#" 
                            style="cursor: pointer;"
                            data-hover="tooltip" data-placement="top" data-target="#modal-edit-bodyImage" data-toggle="modal" 
                             title="Edit" 
                            style="cursor: pointer;" ><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></div> 
                            <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-bodyImage" data-toggle="modal" style="margin: 0px 4px"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                     </td>
                      </tr>
                    </tbody>
                </table>
                </div>
                </div>
        </div>




            <!-- save button start -->
            <div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('announcementsave', '/company/healthpolicy');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
            <!-- save button end -->
        </div>
        <!-- End portlet-->
        {{ Form::close() }}

          <!--Modal Edit background image start-->
          <div id="modal-edit-backgroundImage" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
            <div class="modal-dialog modal-wide-width">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                  <h4 id="modal-login-label2" class="modal-title">Edit BackgroundImage</h4>
                </div>
                <div class="modal-body">
                  <div class="form">
  {{ Form::open(array('url' => 'admin/oshpolicy/editImage', 'method' => 'post', 'name' => 'editImage', 'id'=>'imageEdit', 'class' => 'form-horizontal','files' => true)) }}      
  {{ Form::hidden('pagename',"oshpolicy") }}
  {{ Form::hidden('type',"background") }}

                      <div class="form-group">
                        <label class="col-md-3 control-label">Status</label>
                        <div class="col-md-6">
                          <div data-on="success" data-off="primary" class="make-switch">
      {{Form::hidden('active',0)}}
      {{Form::checkbox('active', 1,$data->backgroundImages_active==1?true:false,array('id'=>'active','class' => 'form-control'))}}
     
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Title </label>
                        <div class="col-md-6">
                  {{Form::text('title', $data->backgroundImages_title ,array('id'=>'title','class' => 'form-control validate[required]'))}}
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-3 control-label">Upload Banner <span class='require'>*</span></label>
                        <div class="col-md-9">
                          <div class="text-15px margin-top-10px">
                          {{HTML::image(url('public/uploads/'.$data->backgroundImages),'No Background Image',array( 'class' => 'img-responsive img-h-100'))}}
                              <br/>
                         {{Form::file('mainImage', null,array('id'=>'mainImageInput'))}}
                            <br/>
                            <span class="help-block">(Image dimension: min. 1800 x 430 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                        </div>
                      </div>
                      
                      <div class="form-actions">
                        <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button> <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                      </div>
                    
                    {{ Form::close() }}                                </div>
                </div>
              </div>
            </div>
          </div>
          <!--END MODAL Edit background image-->


                    <!--Modal Edit body image start-->
                    <div id="modal-edit-bodyImage" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                      <div class="modal-dialog modal-wide-width">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                            <h4 id="modal-login-label2" class="modal-title">Edit BackgroundImage</h4>
                          </div>
                          <div class="modal-body">
                            <div class="form">
            {{ Form::open(array('url' => 'admin/oshpolicy/editImage', 'method' => 'post', 'name' => 'editImage', 'id'=>'imageEdit', 'class' => 'form-horizontal','files' => true)) }}      
            {{ Form::hidden('pagename',"oshpolicy") }}
            {{ Form::hidden('type',"body") }}
          
                                <div class="form-group">
                                  <label class="col-md-3 control-label">Status</label>
                                  <div class="col-md-6">
                                    <div data-on="success" data-off="primary" class="make-switch">
                {{Form::hidden('active',0)}}
                {{Form::checkbox('active', 1,$data->bodyImages_active==1?true:false,array('id'=>'active','class' => 'form-control'))}}
               
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 control-label">Title </label>
                                  <div class="col-md-6">
                            {{Form::text('title', $data->bodyImages_title ,array('id'=>'title','class' => 'form-control validate[required]'))}}
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-md-3 control-label">Upload Banner <span class='require'>*</span></label>
                                  <div class="col-md-9">
                                    <div class="text-15px margin-top-10px">
                                    {{HTML::image(url('public/uploads/'.$data->bodyImages),'No Background Image',array( 'class' => 'img-responsive img-h-100'))}}
                                        <br/>
                                   {{Form::file('mainImage', null,array('id'=>'mainImageInput'))}}
                                      <br/>
                                      <span class="help-block">(Image dimension: min. 1800 x 430 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                  </div>
                                </div>
                                
                                <div class="form-actions">
                                  <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button> <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                </div>
                              
                              {{ Form::close() }}                                </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--END MODAL Edit body image-->
                        <!--Modal delete background image start-->
                        <div id="modal-delete-backgroundImage" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                          {{ Form::open(array('url' => 'admin/oshpolicy/deleteImage', 'method' => 'post', 'name' => 'deleteImage', 'id'=>'imageDelete', 'class' => 'form-horizontal')) }}      
                          {{ Form::hidden('pagename',"oshpolicy") }}
                          {{ Form::hidden('type',"background") }}
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this image? </h4>
                              </div>
                              <div class="modal-body">
                                <p><strong>#Sub-Page Banner Listing:</strong> Background Image</p>
                                <div class="form-actions">
                                  <div class="col-md-offset-4 col-md-8"> <button 
                                    type="submit"
                                    class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" 
                                    id="closeModal"
                                    data-dismiss="modal" class="btn btn-green" style="margin: 0px 4px;">No &nbsp;<i class="fa fa-times-circle"></i></a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <!-- modal delete background image end --> 
                        <!--Modal delete body image start-->
                        <div id="modal-delete-bodyImage" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                          {{ Form::open(array('url' => 'admin/oshpolicy/deleteImage', 'method' => 'post', 'name' => 'deleteImage', 'id'=>'imageDelete', 'class' => 'form-horizontal')) }}      
                          {{ Form::hidden('pagename',"oshpolicy") }}
                          {{ Form::hidden('type',"body") }}
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this image? </h4>
                              </div>
                              <div class="modal-body">
                                <p><strong>#Sub-Page Banner Listing:</strong> Body Image</p>
                                <div class="form-actions">
                                  <div class="col-md-offset-4 col-md-8"> <button 
                                    type="submit"
                                    class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" 
                                    id="closeModal"
                                    data-dismiss="modal" class="btn btn-green" style="margin: 0px 4px;">No &nbsp;<i class="fa fa-times-circle"></i></a></div>
                                </div>
                              </div>
                            </div>
                      <!-- modal delete body image end --> 

    </div>
</div>
@stop