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
        <h2>Company Profile <i class="fa fa-angle-right"></i> Edit</h2>
        <div class="clearfix"></div>

        {{ Session::get('message') }}
        <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue">{{ date("d F Y",strtotime($data->updated_at)) }} @ {{ date("g:i A",strtotime($data->updated_at)) }}</span> </div>
        <div class="clearfix"></div>
        <p></p>
        {{ Form::open(array('url' => 'admin/upadteCompanyProfile','class'=> 'form-horizontal','method' => 'post','name' => 'announcementsave','id' => 'announcementsave', 'enctype' =>"multipart/form-data")) }} 
        {{Form::hidden('preview','')}}
        <div class="portlet">
            <div class="portlet-header">
                <div class="caption">Page Info</div>
                <div class="clearfix"></div>
                <span class="text-blue text-12px">You can edit the title by clicking the text section below.</span>
                <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
            </div>
            <div class="portlet-body">


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


                                    <!--{{ Form::textarea('subHeading1',$data->subHeading1,array("id" => "textarea-left-block1-title","class" => "ckeditor")) }}-->


                                    <div contenteditable="true" id="left-block1-title" style="padding-bottom:36px">
                                        {{ $data->subHeading1 }}

                                    </div>
                                    <div class="clearfix"></div>
                                    {{ Form::textarea('subHeading1',$data->subHeading1,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}



                                </div>
                            </header>
                            <div class="clearfix">

                                <!--{{ Form::textarea('text1',$data->text1,array("id" => "textarea-left-block1-content","class" => "ckeditor")) }}-->


                                <div contenteditable="true" id="left-block1-content" style="padding-bottom:36px">
                                    {{ $data->text1 }}

                                </div>
                                <div class="clearfix"></div>
                                {{ Form::textarea('text1',$data->text1,array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}  




                            </div>
                            <div class="clearfix margin-top-15px">

                                <!--{{ Form::textarea('subHeading2',$data->subHeading2,array("id" => "textarea-left-block2-content","class" => "ckeditor")) }}-->




                                <div contenteditable="true" id="left-block2-title" style="padding-bottom:36px">
                                    {{ $data->subHeading2 }}

                                </div>
                                <div class="clearfix"></div>
                                {{ Form::textarea('subHeading2',$data->subHeading2,array("id" => "textarea-left-block2-title","class" => "hideThisField")) }} 

                            </div>
                            <div class="clearfix margin-top-15px">

                                <!--{{ Form::textarea('text2',$data->text2,array("id" => "textarea-left-block2-content","class" => "ckeditor")) }}-->



                                <div contenteditable="true" id="left-block2-content" style="padding-bottom:36px">
                                    {{ $data->text2 }}

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
                
                                 <div class="portlet">
                                            <div class="portlet-header">
                                                <div class="caption">Sliding Banner Images Listing</div>
                                                <br>
                                                <p class="margin-top-10px"></p>
                                                <a href="#" data-target="#modal-add-new-banner" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>
                                                <div class="btn-group">
                                                    <button class="btn btn-primary" type="button">Delete</button>
                                                    <button class="btn btn-red dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a data-toggle="modal" data-target="#modal-delete-selected-process" href="#" class="deleteid" id="dleteid" rel="{{url('/admin/page/deletemultiplebanner')}}" rev="modal-delete-selected-process">Delete selected item(s)</a></li>
                                                        <li class="divider"></li>
                                                        <li><a data-toggle="modal" data-target="#modal-delete-all" href="#">Delete all</a></li>
                                                    </ul>
                                                </div>
                                                &nbsp;
                                                <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                                                <!--Modal Add New Banner start-->
                                                <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-add-new-banner">
                                                    <div class="modal-dialog modal-wide-width">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                                                                <h4 class="modal-title" id="modal-login-label3">Add New Banner Image</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form">
                                                                    {{ Form::open(array('url' => 'admin/manufacturing/addslidingbanner','class'=> 'form-horizontal','method' => 'post','files' => true)) }}
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label">Status</label>
                                                                        <div class="col-md-8">
                                                                            <div data-on="success" data-off="primary" class="make-switch">
                                                                                {{Form::checkbox('active', 1 ,array('id'=>'active','class' => 'form-control'))}}
                                
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label">Title <span class="require">*</span></label>
                                                                        <div class="col-md-8">
                                                                            {{ Form::textarea('title','',array('id' => 'title','class' => 'form-control', 'rows' => '2' )) }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label">Display Order <span class="require">*</span></label>
                                                                        <div class="col-md-2">
                                                                            {{ Form::text('display_order','',array('id' => 'display_order','class' => 'form-control', 'placeholder' => '1' )) }} 
                                
                                                                        </div>
                                                                        <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label">Upload Image <span class="require">*</span></label>
                                                                        <div class="col-md-8">
                                                                            <div class="text-15px margin-top-10px">
	
                                                                                {{ Form::file('bannerimage','',array('id' => 'bannerimage','class' => 'form-control' )) }} 
                                                                                <br>
                                                                                <span class="help-block">(Image dimension: 920 x 300 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-actions">
                                                                        {{ Form::hidden('type','company-profile',array('id' => 'type')) }}
                                                                        <div class="col-md-offset-5 col-md-8"> 
                                                                            <button type="submit" class="btn btn-red" >Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a class="btn btn-green" data-dismiss="modal" href="#">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                                    </div>
                                                                    {{ Form::close() }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--END MODAL Add New Banner-->
                                                <!--Modal delete selected items start-->
                                                <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-delete-selected-process">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                                                                <h4 class="modal-title" id="modal-login-label4"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                                                            </div>
                                                            <div class="modal-body">
                                
                                                                <div class="form-actions">
                                                                    <div class="col-md-offset-4 col-md-8"> <a class="btn btn-red" href="#">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a class="btn btn-green" data-dismiss="modal" href="#">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- modal delete selected items end -->
                                                <!--Modal delete all items start-->
                                                <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-delete-all">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                                                                <h4 class="modal-title" id="modal-login-label4"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-actions">
                                                                    <div class="col-md-offset-4 col-md-8"> 
                                                                        {{ Form::open(array('url' => '/admin/page/deleteallbanner', 'method' => 'post', 'name' => 'deletallbanner', 'class' => 'form-horizontal','files' => true)) }}
                                                                        {{ Form::hidden('type','company-profile') }} 
                                                                        <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; 
                                                                        <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                                                <div class="pull-right"> <a class="btn btn-danger updateOrder" href="#" >Update Display Order &nbsp;<i class="fa fa-refresh"></i></a> </div>
                                                <div class="clearfix"></div>
                                                <br>
                                                <br>
                                                <table class="table table-hover table-striped updateOrder-table">
                                                    <thead>
                                                        <tr>
                                                            <th width="1%"><input type="checkbox"></th>
                                                            <th>#</th>
                                                            <th>Status</th>
                                                            <th>Image</th>
                                                            <th width="12%">Display Order</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        @foreach ($slidingbanners as $k => $slidingbanner) 
	
                                                        <tr>
                                                            <td><input type="checkbox" class="chkNumber" value="{{$slidingbanner->id}}"></td>
                                                            <td>{{ $k+1 }}</td>
                                                            <td>
                                                                @if ( $slidingbanner->active == 1)
                                                                <span class="label label-sm label-success">Active</span>
                                                                @else
                                                                <span class="label label-sm label-red">In Active</span>
                                                                @endif
                                                            </td>
	                                                        <td>
	
                                                                {{HTML::image(url('public/uploads/'.$slidingbanner->bannerimage_file_name),'No Body Image',array( 'class' => 'img-responsive img-h-100','id' => 'sliderBackgroundImage' ));}}</td>
                                                            <td>
                                                                <input type="hidden" id="updateOrdermname" value="slidingbanner" />
                                                                {{ Form::text('display_order$slidingbanner->id',$slidingbanner->display_order,array('id' => $slidingbanner->id, 'class' => 'display_order form-control')) }}   
                                                            </td>
                                                            <td><a title="" data-toggle="modal" data-target="#modal-edit-banner{{$slidingbanner->id}}" data-placement="top" data-hover="tooltip" href="#" data-original-title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a data-toggle="modal" data-target="#modal-delete-bnner-{{$slidingbanner->id}}" title="" data-placement="top" data-hover="tooltip" href="#" data-original-title="Delete"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                                                <!--Modal Edit Banner start-->
                                                                <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-edit-banner{{ $slidingbanner->id }}">
                                                                    <div class="modal-dialog modal-wide-width">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                                                                                <h4 class="modal-title" id="modal-login-label3">Edit Banner Image</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="form">
                                                                                    {{ Form::open(array('url' => 'admin/manufacturing/editslidingbanner','class'=> 'form-horizontal','method' => 'post','files' => true)) }}
                                
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-4 control-label">Status</label>
                                                                                        <div class="col-md-8">
                                                                                            <div data-on="success" data-off="primary" class="make-switch">
                                
                                                                                                {{Form::checkbox('active', $slidingbanner->active, $slidingbanner->active ,array('id'=>'active','class' => 'form-control'))}}
                                
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-4 control-label">Title <span class="require">*</span></label>
                                                                                        <div class="col-md-8">
                                
                                                                                            {{ Form::textarea('title',$slidingbanner->title, array('id' => 'title','class' => 'form-control', 'rows' => '2')) }}                                      
                                
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-4 control-label">Display Order <span class="require">*</span></label>
                                                                                        <div class="col-md-2">
                                                                                            {{ Form::text('display_order',$slidingbanner->display_order, array('id' => 'display_order','class' => 'form-control')) }}                                      
                                
                                                                                        </div>
                                                                                        <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-4 control-label">Upload Image <span class="require">*</span></label>
                                                                                        <div class="col-md-8">
                                                                                            <div class="text-15px margin-top-10px"> 

                                                                                                
                                          {{HTML::image(url('public/uploads/'.$slidingbanner->bannerimage_file_name),'No Banner Image',array( 'class' => 'img-responsive img-h-100'))}}

                                                                                                <br>
                                                                                                {{ Form::file('bannerimage',array('id' => 'bannerimage')) }}        
                                                                                                <br>
                                                                                                <span class="help-block">(Image dimension: 920 x 300 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-actions">
                                                                                        {{ Form::hidden('type','company-profile',array('id' => 'type')) }}
                                                                                        {{ Form::hidden('bannerid',$slidingbanner->id,array('id' => 'bannerid')) }}
                                                                                        <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red" >Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a class="btn btn-green" data-dismiss="modal" href="#">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                                                    </div>
                                                                                    {{ Form::close() }}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--END MODAL Edit Processes-->
                                                                <!--Modal delete start-->
                                                                <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-delete-bnner-{{$slidingbanner->id}}">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                                                                                <h4 class="modal-title" id="modal-login-label4"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this item? </h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p><strong>#{{$slidingbanner->id}}:</strong> {{$slidingbanner->title}}</p>
                                                                                <div class="form-actions">
                                                                                    <div class="col-md-offset-4 col-md-8"> 
                                                                                        {{ Form::open(array('url' => 'admin/manufacturing/deleteslidingbanner', 'method' => 'post', 'name' => 'deletslidingbanner'.$slidingbanner->id, 'id' => 'deletslidingbanner'.$slidingbanner->id, 'class' => 'form-horizontal','files' => true)) }}
                                                                                        {{ Form::hidden('slidingbannerid',$slidingbanner->id) }} 
                                                                                        <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; 
                                                                                        <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                                                                        {{ Form::close() }}  </div>
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
                                                            <td colspan="6"></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
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
                  {{ Form::open(array('url' => 'admin/company-profile/editImage', 'method' => 'post', 'name' => 'editImage', 'id'=>'imageEdit', 'class' => 'form-horizontal','files' => true)) }}      
                  {{ Form::hidden('pagename',"company-profile") }}
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
                            {{ Form::open(array('url' => 'admin/company-profile/editImage', 'method' => 'post', 'name' => 'editImage', 'id'=>'imageEdit', 'class' => 'form-horizontal','files' => true)) }}      
                            {{ Form::hidden('pagename',"company-profile") }}
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
                                          {{ Form::open(array('url' => 'admin/company-profile/deleteImage', 'method' => 'post', 'name' => 'deleteImage', 'id'=>'imageDelete', 'class' => 'form-horizontal')) }}      
                                          {{ Form::hidden('pagename',"company-profile") }}
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
                                                    {{ Form::close() }}  </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <!-- modal delete background image end --> 
                                        <!--Modal delete body image start-->
                                        <div id="modal-delete-bodyImage" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                          {{ Form::open(array('url' => 'admin/company-profile/deleteImage', 'method' => 'post', 'name' => 'deleteImage', 'id'=>'imageDelete', 'class' => 'form-horizontal')) }}      
                                          {{ Form::hidden('pagename',"company-profile") }}
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
                                                    {{ Form::close() }}  </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                            
                                                <div class="tool-footer text-right">
                                                </div>
                                                <div class="clearfix"></div>

</div>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    $(document).ready(function () {
        $('.updateOrder').on('click', function (e) {
            var updateOrderArr = [];
            $('.updateOrder-table .display_order').each(function () {
                var $this = $(this);
                updateOrderArr.push({
                        'order' : $this.val(),
                        'slider_id' : $this.parent().parent().find('.chkNumber').val()
                    });
            });
            $.ajax({
                type: 'post',
                url: "{{ url('admin/change_order') }}",
                data: {data:updateOrderArr},
                dataType: 'json',
                success: function (resp) {
                    toastr.success('Order Updated Sucessfully!');
                },
                error: function (err) {
                    toastr.error('There has been a error. Please try again!');
                }
            });
            e.preventDefault();
        });
    });
</script>
@stop