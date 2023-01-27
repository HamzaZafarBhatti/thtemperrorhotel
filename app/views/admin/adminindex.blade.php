@extends('admin.layouts.admin')
@section('content')
<style>
  .datepicker {
z-index:2000 !important;
}
</style>
 <div class="row">
                        <div class="col-lg-12">
                            <h2>Index <i class="fa fa-angle-right"></i> Edit</h2>
                            <div class="clearfix"></div>
                           {{ Session::get('message') }}
                            <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue">{{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("h:i A",strtotime($page[0]->updated_at)) }}</span> </div>
                            <div class="clearfix"></div>
                            <p></p>
                            {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'indexsave','id' => 'indexsave')) }} 
       {{Form::hidden('preview','')}}
           {{Form::hidden('pageid',$page[0]->id)}}
           {{Form::hidden('type',$page[0]->type)}} 
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
                                            <div class="grid_12 mobile-nomargin">
                                                <section class="intro">
                                                    <div contenteditable="true" id="left-block1-title">
                                                        {{ $page[0]->left_block1_title }}
                                                    </div>
              {{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}

                                                </section>
                                            </div>
                                        </div>
                                        <!-- Welcome Section / End -->
                                        <div class="hr"></div>
                                        <div class="clearfix">
                                            <div class="grid_4">
                                                <section class="intro">
                                                    <div contenteditable="true" id="left-block1-content">
                                                        {{ $page[0]->left_block1_content}}
                                                    </div>
              {{ Form::textarea('left_block1_content',$page[0]->left_block1_content,array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}

                                                </section>
                                            </div>
                                            <div class="grid_4">
                                                <section class="intro">
                                                    <div contenteditable="true" id="left-block2-title">
                                                        {{ $page[0]->left_block2_title }}
                                                    </div>
              {{ Form::textarea('left_block2_title',$page[0]->left_block2_title,array("id" => "textarea-left-block2-title","class" => "hideThisField")) }}

                                                </section>
                                            </div>
                                            <div class="grid_4">
                                                <section class="intro">
                                                    <div contenteditable="true" id="left-block2-content">
                                                        {{ $page[0]->left_block2_content}}
                                                    </div>
              {{ Form::textarea('left_block2_content',$page[0]->left_block2_content,array("id" => "textarea-left-block2-content","class" => "hideThisField")) }}


                                                </section>
                                            </div>
                                        </div>
                                        <!-- end 3 boxes -->
                                        <div class="margin-top-15px"></div>
                                        <!-- Horizontal Rule (double) -->
                                        <div class="hr hr__double">
                                            <div class="hr-first"></div>
                                            <div class="hr-second"></div>
                                        </div>
                                        <!-- Horizontal Rule (double) / End -->

                                        <!-- about us start -->
                    <div class="clearfix">
            
                            
            <div class="grid_12 mobile-nomargin">
              
                            <div contenteditable="true" id="left-block3-title">
                              
                              {{ $page[0]->left_block3_title}}
                            </div>
                            {{ Form::textarea('left_block3_title',$page[0]->left_block3_title,array("id" => "textarea-left-block3-title","class" => "hideThisField")) }}
              

            </div>
                        <!-- end grid 4 -->
          </div>
                    <!-- about us end -->
                                    </div>
                                </div>
                                <!-- save button start -->
                <div class="form-actions none-bg">  <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('indexsave','/');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
                {{ Form::close() }}
                            </div>
                            <!-- End portlet-->
                                          <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Montage Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-montage" data-toggle="modal" class="btn btn-success">Add New Montage &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selectednot" data-toggle="modal"  class="deleteid" rel="{{url();}}/admin/page/deletemultipleindexbanner" rev="modal-delete-selected">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
                  <div class="tools"> 
                    <i class="fa fa-chevron-up"></i>                  </div>
                  <!--Modal Add New Montage start-->
                  <div id="modal-add-montage" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label2" class="modal-title">Add New Montage</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
  {{ Form::open(array('url' => 'admin/index/addbanner', 'method' => 'post', 'id' => 'montage','class' => 'form-horizontal','files' => true)) }}      

                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-6">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                
                     {{Form::checkbox('active', 1,array('id'=>'active','class' => 'form-control'))}}
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Title </label>
                                <div class="col-md-6">
  {{Form::text('title', null,array('id'=>'title','class' => 'form-control validate[required]','placeholder' => 'Banner 1'))}}
          
                                </div>
                                <!--<div class="col-md-3">
                                      <div class="popover popover-validator right">
                                        <div class="arrow"></div>
                                        <div class="popover-content">
                                          <p class="mbn">Title is empty!</p>
                                        </div>
                                      </div>
                                </div>-->
                              </div>
                              
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label">Upload Banner <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px">
                               {{Form::file('bannerimage',array('id'=>'bannerimageInput', 'class' => 'validate[required]'))}}   
                                    <br/>
                                    <span class="help-block">(Image dimension: min. 1800 x 430 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                </div>
                              </div>
 
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                    {{ Form::close() }}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New Montage-->
                  <!--Modal delete selected items start-->
                  <div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                          
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                            <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/index/deletecorebusinessall', 'method' => 'post', 'name' => 'deleteallsementra', 'id' => 'deleteallsementra', 'class' => 'form-horizontal','files' => true)) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                        <th width="1%"><input class="wholecheck" type="checkbox" name="checkid[]" id="checkid" /></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($banners as $k => $banner)
                      <tr>
                        <td><input type="checkbox" class="chkNumber"  value="{{ $banner->id}}"/></td>
                        <td>{{ $k + 1 }}</td>
                        <td>  @if($banner->active == 1)
                            <span class="label label-sm label-success">Active</span>
                            @else
                             <span class="label label-sm label-red">In Active</span>
                            @endif</td>
                            <td>{{HTML::image('public'.$banner->bannerimage->url('thumb'),'bannerimage',array( 'class' => 'img-responsive' ));}}</td>
                        <td>{{ $banner->title }}</td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-montage{{$banner->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete{{$banner->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                          <!--Modal Edit Montage start-->
                          <div id="modal-edit-montage{{$banner->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                            <div class="modal-dialog modal-wide-width">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                  <h4 id="modal-login-label2" class="modal-title">Edit Montage</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="form">
                  {{ Form::open(array('url' => 'admin/index/editbanner', 'method' => 'post', 'name' => 'editbanner'.$banner->id, 'id' => 'montageedit', 'class' => 'form-horizontal','files' => true)) }}      

                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Status</label>
                                        <div class="col-md-6">
                                          <div data-on="success" data-off="primary" class="make-switch">
                      {{Form::hidden('active',0)}}
                      {{Form::checkbox('active', 1,$banner->active==1?true:false,array('id'=>'active','class' => 'form-control'))}}
                     
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Title </label>
                                        <div class="col-md-6">
                                  {{Form::text('title', $banner->title ,array('id'=>'title','class' => 'form-control validate[required]'))}}
                                        </div>
                                      </div>
                                      
                                     
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Upload Banner <span class='require'>*</span></label>
                                        <div class="col-md-9">
                                          <div class="text-15px margin-top-10px">
                                          {{HTML::image('public'.$banner->bannerimage->url('large'),'bannerimage',array( 'class' => 'img-responsive' ));}}
                                              <br/>
                                         {{Form::file('bannerimage', null,array('id'=>'bannerimageInput'))}}
                                            <br/>
                                            <span class="help-block">(Image dimension: min. 1800 x 430 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                        </div>
                                      </div>
                                      {{ Form::hidden('bannerid',$banner->id) }}
                                      <div class="form-actions">
                                        <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button> <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                      </div>
                                    
                                    {{ Form::close() }}                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--END MODAL Edit Montage-->
                            <!--Modal delete start-->
                            <div id="modal-delete{{$banner->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this banner? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{$banner->id}}:</strong> {{$banner->title}}</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/index/deletebanner', 'method' => 'post', 'name' => 'deletbanner'.$banner->id, 'id' => 'deletbanner'.$banner->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('bannerid',$banner->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }}  </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!-- modal delete end -->                        </td>
                      </tr>
                       @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="5"></td>
                      </tr>
                     
                    </tfoot>
                  </table>
                  <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{ $banners->getFrom() }} to {{ $banners->getTo() }} of {{ $banners->getTotal() }} entries</p>
                    {{ $banners->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
<!--news section starts here-->
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Latest News &amp; Events Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-new-process" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selected-processdue" data-toggle="modal" class="deleteidnews" rel="{{url();}}/admin/page/deletemultiplecorebusinesses" rev="modal-delete-selected-process">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
<div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New Process start-->
                  <div id="modal-add-new-process" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label2" class="modal-title">Add New News &amp; Events</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                          {{ Form::open(array('url' => 'admin/index/addcorebusiness', 'method' => 'post', 'class' => 'form-horizontal','files' => true,'id'=>'news')) }} 
                           
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    {{Form::checkbox('active', 1,array('id'=>'active','class' => 'form-control'))}}
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  
                                  {{Form::textarea('title', '',array('id'=>'title','class' => 'form-control validate[required]','rows' => '2'))}}
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Date <span class='require'>*</span></label>
                                <div class="col-md-4">
                                  <div class="input-group">
                                    {{Form::text('date','',array('id'=>'date','data-provide' => 'datepicker','class' => 'datepicker form-control validate[required]','data-date-format' => 'dd M, yyyy'))}} 
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Short Description</label>
                                <div class="col-md-9">
                                 
                                  {{Form::textarea('short_description', '',array('id'=>'short_description','class' => 'form-control validate[required]','rows' => '4'))}}
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label">Website URL</label>
                                <div class="col-md-9">
                                  <div class="input-icon"><i class="fa fa-link"></i>
                                      
                                      {{Form::text('url', '',array('id'=>'url','class' => 'form-control validate[required]','placeholder' => 'http://'))}}
                                      <span class="help-block">Please enter the page link to link it to the sub page.</span> </div>
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
                  <!--END MODAL Add New Process-->
                  <!--Modal delete selected items start-->
                  <div id="modal-delete-selected-process" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                  @if($cntarray2 != 0 )
                        {{ Form::open(array('url' => Request::url(),'class'=> 'form-horizontal','method' => 'get')) }}
  {{ Form::select('noperpage2', $cntarray2, Input::get('noperpage2'),array('class' => 'form-control','onchange' => 'this.form.submit();')) }}
   {{ Form::close() }}
                      &nbsp;
                      <label class="control-label">Records per page</label>
                      @endif
                    </div>
                  </div>
                 
                  <div class="clearfix"></div>
                  <br/>
                  <br/>
                  <div>
                  <table class="table table-hover table-striped" id="tblupdateOrder">
                    <thead>
                      <tr>
                        <th width="1%"><input class="newscheck" type="checkbox"/></th>
                        <th>#</th>
                        <th>Status</th>
                        <th width="10%">Date</th>
                        <th>Title</th>
                        <th width="45%">Short Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($corebusinesses as $k => $corebusiness)
                      <tr>
                        <td><input type="checkbox" class="chkNews"  value="{{ $corebusiness->id}}"/></td>
                        <td>{{ $k + 1 }}</td>
                        <td>  @if($corebusiness->active == 1)
                            <span class="label label-sm label-success">Active</span>
                            @else
                             <span class="label label-sm label-red">In Active</span>
                            @endif</td>
                            <td>{{$corebusiness->date}}</td>
                        <td>{{ $corebusiness->title }}</td>
                        <td>
                          {{$corebusiness->short_description}}
                        </td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-processes{{ $corebusiness->id }}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-deletecore-process{{ $corebusiness->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal Edit Processes start-->
                            <div id="modal-edit-processes{{ $corebusiness->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label2" class="modal-title">Edit News &amp; Events</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
                                      {{ Form::open(array('url' => 'admin/index/editcorebusiness', 'name' => 'editcorebusiness', 'id' => 'editcorebusiness', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }} 
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Status</label>
                                          <div class="col-md-9">
                                            <div data-on="success" data-off="primary" class="make-switch">
                                            {{Form::hidden('active',0)}}
                                             

                                              {{Form::checkbox('active', 1,$corebusiness->active==1?true:false,array('id'=>'active','class' => 'form-control'))}}
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                          <div class="col-md-9">
                                           {{Form::textarea('title', $corebusiness->title ,array('id'=>'title','class' => 'form-control','rows' => '2'))}}
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Date <span class='require'>*</span></label>
                                          <div class="col-md-5">
                                            <div class="input-group">
                                              {{Form::text('date',$corebusiness->date,array('id'=>'date','data-provide' => 'datepicker','class' => 'datepicker form-control validate[required]','data-date-format' => 'dd M, yyyy'))}} 
                                              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            </div>
                                          </div>
                                        </div>
                    
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Short Description</label>
                                          <div class="col-md-9">
                                          {{Form::textarea('short_description', $corebusiness->short_description ,array('id'=>'short_description','class' => 'form-control','rows' => '4'))}}
                                          </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Website URL</label>
                                            <div class="col-md-9">
                                              <div class="input-icon"><i class="fa fa-link"></i>
                                                    {{Form::text('url', $corebusiness->url ,array('id'=>'url','class' => 'form-control'))}} 
                                                  <span class="help-block">Please enter the page link to link it to the sub page.</span> </div>
                                            </div>
                                          </div>
                                        
                                        
                                        {{ Form::hidden('corebusinessid',$corebusiness->id) }}
                                        <div class="form-actions">
                                        <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button> <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                      </div>
                                     {{ Form::close() }}  
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!--END MODAL Edit Processes-->
                            <!--Modal delete start-->
                            <div id="modal-deletecore-process{{ $corebusiness->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this news? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{ $corebusiness->id }}</strong> {{ $corebusiness->title }}</p>
                                    <div class="form-actions">
                                    
                                      <div class="col-md-offset-4 col-md-8">
                                      {{ Form::open(array('url' => 'admin/index/deletecorebusiness', 'method' => 'post', 'name' => 'deletcorebusiness'.$corebusiness->id, 'id' => 'deletcorebusiness'.$corebusiness->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('corebusinessid',$corebusiness->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }} 
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <!-- modal delete end -->                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="6"></td>
                      </tr>
                    </tfoot>
                  </table>
                  </div>
                    <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{ $corebusinesses->getFrom() }} to {{ $corebusinesses->getTo() }} of {{ $corebusinesses->getTotal() }} entries</p>
                    {{ $corebusinesses->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end portlet -->
                            <!-- end portlet -->
                        </div>
                    </div>

@stop