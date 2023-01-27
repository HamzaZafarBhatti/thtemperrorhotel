@extends('admin.layouts.admin')
@section('content')
<style>
  .datepicker {
z-index:2000 !important;
}
</style>
<div class="row">
            <div class="col-lg-12">
              <h2>Job Vacancies <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
              
                  {{ Session::get('message') }}
              <div class="pull-left"> Last updated: <span class="text-blue">{{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}</span> </div>
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
                 
                  <div contenteditable="true" id="right-block3-content">
                    
                      {{ $page[0]->right_block3_content }}
                    </div>
                    
                 
                    {{ Form::textarea('right_block3_content',$page[0]->right_block3_content,array("id" => "textarea-right-block3-content","class" => "hideThisField")) }}

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
                            <div class="entry-header-inner">
                                <div contenteditable="true" id="page-title">
                                    {{ $page[0]->page_title }}
                                </div>
                             {{ Form::textarea('page_title',$page[0]->page_title,array("id" => "textarea-page-title","class" => "hideThisField")) }}

                            </div>
                        </header>
                        
                        <div class="clearfix"></div>
              
                      </div>
                      
                     <div class="grid_4">
                            <!-- Extra Contact Box -->
                            <div class="cta1">
                                <div contenteditable="true" id="left-block1-title">
                                    {{ $page[0]->left_block1_title }}
                                </div>      
                                {{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}

                                <div contenteditable="true" id="left-block1-content">
                              {{ $page[0]->left_block1_content }}
                              </div>      
                              {{ Form::textarea('left_block1_content',$page[0]->left_block1_content,array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}


                                <div class="bg-grey">
                                    <div class="center">
                                        <div contenteditable="true" id="left-block2-title">
                                            {{ $page[0]->left_block2_title }}
                                        </div>      
                                        {{ Form::textarea('left_block2_title',$page[0]->left_block2_title,array("id" => "textarea-left-block2-title","class" => "hideThisField")) }}

                                        <div contenteditable="true" id="left-block2-content">
                                           {{ $page[0]->left_block2_content }}
                                        </div>      
                                        {{ Form::textarea('left_block2_content',$page[0]->left_block2_content,array("id" => "textarea-left-block2-content","class" => "hideThisField")) }}

                                        <div contenteditable="true" id="left-block3-title">
                                            {{ $page[0]->left_block3_title }}
                                            
                                        </div>
                                        <div class="clearfix" id="page_title"></div>      
                                        {{ Form::textarea('left_block3_title',$page[0]->left_block3_title,array("id" => "textarea-left-block3-title","class" => "hideThisField")) }}

                                        <div contenteditable="true" id="left-block3-content">
                                         {{ $page[0]->left_block3_content }}  
                                         </div>  
                                         {{ Form::textarea('left_block3_content',$page[0]->left_block3_content,array("id" => "textarea-left-block3-content","class" => "hideThisField")) }}
                                      
                                    </div>
                                </div>
                            </div>
                            <!-- Extra Contact Box / End -->
                        </div>
                        
                        
                    </div>
                  </div>
                </div>
              
                <!-- save button start -->
<div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('announcementsave','/carrers');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
                {{ Form::close() }}
              </div>
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Job Vacancies Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-vacancy" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selectednot" data-toggle="modal" class="deleteid" rel="{{url();}}/admin/page/deletemultiplevaccancies" rev="modal-delete-selected">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
          <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New start-->
                  <div id="modal-add-vacancy" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Add New Vacancy</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
  {{ Form::open(array('url' => 'admin/vaccancy/addvaccancy', 'name' => 'addvaccancy', 'id' => 'addvaccancy', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}      
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                          
 {{Form::checkbox('active', 1,1,array('id'=>'active','class' => 'form-control'))}}                                 
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Job Title <span class='require'>*</span></label>
                                <div class="col-md-9">
             {{Form::textarea('job_title','',array('id'=>'job_title','class' => 'validate[required] form-control','rows' => '2'))}}     
             
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label">Job Location <span class='require'>*</span></label>
                                <div class="col-md-9">
            {{Form::textarea('job_location','',array('id'=>'job_location','class' => 'validate[required] form-control','rows' => '2'))}}   
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Post Date</label>
                                <div class="col-md-5">
                                  <div class="input-group">
            {{Form::text('post_date','',array('id'=>'post_date','data-provide' => 'datepicker','class' => 'datepicker form-control','data-date-format' => 'dd M, yyyy'))}}   

            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                          
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Job Description <span class='require'>*</span></label>
                                <div class="col-md-9"> 
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                  <div class="acc-body">
                                      <div class="list list-style__arrow3">
                    <div contenteditable="true" id="vacc-resp">
                                            <ul>
                                                <li>Sample text. Sample text. Sample text.</li>
                                                <li>Sample text. Sample text. Sample text.</li>
                                                <li>Sample text. Sample text. Sample text.</li>
                                                <li>Sample text. Sample text. Sample text.</li>
                                                <li>Sample text. Sample text. Sample text.</li>
                                                
                                            </ul>
                                        </div>
                                        {{ Form::textarea('responsibilities_content','',array("id" => "textarea-vacc-resp","class" => "hideThisField validate[required]")) }}

                    </div>
                                  </div>
                                  <!-- end acc body -->
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Requirements <span class='require'>*</span></label>
                                <div class="col-md-9"> 
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                  <div class="acc-body">
                                      <div class="list list-style__arrow3" >
                    <div contenteditable="true" id="vacc-req">
                                            <ul>
                                                <li>Sample text. Sample text. Sample text.</li>
                                                <li>Sample text. Sample text. Sample text.</li>
                                                <li>Sample text. Sample text. Sample text.</li>
                                                <li>Sample text. Sample text. Sample text.</li>
                                                <li>Sample text. Sample text. Sample text.</li>
                                                
                                            </ul>
                                        </div>
                                        {{ Form::textarea('requirements_content','',array("id" => "textarea-vacc-req","class" => "hideThisField validate[required]")) }}
                                        
                                        <div class="line"></div>
                                        
                                        
                    </div>
                                  </div>
                                  <!-- end acc body -->
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Footer Content</label>
                                <div class="col-md-9">
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                  <div class="acc-body">
                                    <div class="list list-style__arrow1">
                                       <div contenteditable="true" id="vacc-footer">
                                          <p>If you possess the requirements as stated above, you are invited to submit a comprehensive resume stating your current and expected remuneration with a recent passport sized photograph (non-returnable) to the following address or e-mail to <a href="mailto:careers@kym.com.my">careers@kym.com.my</a> before <strong>22nd April, 2016</strong>. Only short listed candidates will be notified.</p>
                                       </div>
                                       {{ Form::textarea('footer_content','',array("id" => "textarea-vacc-footer","class" => "hideThisField validate[required]")) }}
                                    </div>
                                  </div>
                                  <!-- end acc body -->
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
                  <!--END MODAL Add New-->
                  <!--Modal delete selected items start-->
                  <div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
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
                        <th width="1%"><input class="wholecheck" type="checkbox"/></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Post Date</th>
                        <th>Job Title</th>
                        
                        <th>Job Location</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($vaccancies as $k => $vaccancy)
                        <tr>
                        <td><input type="checkbox" class="chkNumber" value="{{$vaccancy->id}}"/></td>
                        <td>{{ $k+1 }}</td>
                        <td>
                            @if($vaccancy->active == 1)
                            <span class="label label-sm label-success">Active</span>
                            @else
                            <span class="label label-sm label-red">In Active</span>
                            @endif
                        </td>
                        <td>{{ $vaccancy->post_date }}</td>
                        <td>{{ $vaccancy->job_title }}</td>
                       
                        <td>{{ $vaccancy->job_location }}</td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-vacancy{{ $vaccancy->id }}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-vaccanciedelete{{ $vaccancy->id }}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal Edit vacancy start-->
                            <div id="modal-edit-vacancy{{ $vaccancy->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title">Edit Vacancy</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
  {{ Form::open(array('url' => 'admin/vaccancy/editvaccancy', 'name' => "editvaccancy$vaccancy->id", 'id' => "editvaccancy$vaccancy->id" , 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }} 
                                          <div class="form-group">
                                          <label class="col-md-3 control-label">Status</label>
                                          <div class="col-md-9">
                                            <div data-on="success" data-off="primary" class="make-switch" >
                                            {{Form::hidden('active',0)}}
   {{ Form::checkbox('active',1,$vaccancy->active,array('id' => 'active','class' => 'check-switch')) }}
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Job Title <span class='require'>*</span></label>
                                          <div class="col-md-9">
   {{ Form::textarea('job_title',$vaccancy->job_title,array('id' => 'job_title','class' => 'form-control' ,'rows' => '2')) }}
  
                                          </div>
                                        </div>
                                       
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Job Location <span class='require'>*</span></label>
                                          <div class="col-md-9">
 {{ Form::textarea('job_location',$vaccancy->job_location ,array('id' => 'job_location','class' => 'form-control' ,'rows' => '2')) }}
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Post Date</label>
                                          <div class="col-md-5">
                                            <div class="input-group">
  {{ Form::text('post_date',$vaccancy->post_date ,array('id' => 'post_date','data-provide' => 'datepicker','data-date-format' => 'dd M, yyyy','class' => 'datepicker form-control' ,'rows' => '2')) }}
 
 
                                              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Job Description <span class='require'>*</span></label>
                                <div class="col-md-9"> 
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                  <div class="acc-body">
                                      <div class="list list-style__arrow3">
                    <div onblur="div_val(this.id)" contenteditable="true" id="vacc-resp{{ $vaccancy->id }}">
                                            {{ $vaccancy->responsibilities_content }}
                                        </div>
          {{ Form::textarea('responsibilities_content',$vaccancy->responsibilities_content ,array("id" => "textarea-vacc-resp$vaccancy->id","class" => "hideThisField")) }}

                    </div>
                                  </div>
                                  <!-- end acc body -->
                                </div>
                              </div>
                                        <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Requirements <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                  <div class="acc-body">
                                      <div class="list list-style__arrow3">
                    <div onblur="div_val(this.id)" contenteditable="true" id="vacc-req{{ $vaccancy->id }}">
                                            {{ $vaccancy->requirements_content }}
                                        </div>
                                        {{ Form::textarea('requirements_content',$vaccancy->requirements_content,array("id" => "textarea-vacc-req$vaccancy->id","class" => "hideThisField validate[required]")) }}
                                        
                                        <div class="line"></div>
                                        
                                        
                    </div>
                                  </div>
                                  <!-- end acc body -->
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Footer Content</label>
                                <div class="col-md-9">
                                  <p class="text-blue text-12px margin-top-15px border-bottom">You can edit the content by clicking the text section below.</p>
                                  <div class="acc-body">
                                    <div class="list list-style__arrow1">
                                       <div onblur="div_val(this.id)" contenteditable="true" id="vacc-footer{{ $vaccancy->id }}">
{{ $vaccancy->footer_content }}                                      
 </div>{{ Form::textarea('footer_content',$vaccancy->footer_content,array("id" => "textarea-vacc-footer$vaccancy->id","class" => "hideThisField validate[required]")) }}
                                    </div>
                                  </div>
                                  <!-- end acc body -->
                                </div>
                              </div>
                                     
        {{ Form::hidden('vaccancyid',$vaccancy->id,array('id' => 'vaccancyid')) }}                                
        <div class="form-actions">
                                          <div class="col-md-offset-5 col-md-8"> 
                                              <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                        </div>
        {{ Form::close() }}
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                            </div>
                          <!--END MODAL Edit vacancy-->
                            <!--Modal delete start-->
                            <div id="modal-vaccanciedelete{{ $vaccancy->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this vacancy? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{ $vaccancy->id }}:</strong> {{ $vaccancy->job_title }}</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8">
                                      {{ Form::open(array('url' => 'admin/vaccancy/deletevaccancy', 'method' => 'post', 'name' => 'deletvaccancy'.$vaccancy->id, 'id' => 'deletvaccancy'.$vaccancy->id, 'class' => 'form-horizontal validate[required]','files' => true)) }}{{ Form::hidden('vaccancyid',$vaccancy->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                        <td colspan="8"></td>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{ $vaccancies->getFrom() }} to {{ $vaccancies->getTo() }} of {{ $vaccancies->getTotal() }} entries</p>
                    {{ $vaccancies->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end portlet -->
            </div>
          </div>
@stop