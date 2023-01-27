@extends('admin.layouts.admin')
@section('content')
<div class="row">
            <div class="col-lg-12">
              <h2>Board Charter <i class="fa fa-angle-right"></i> Edit</h2>
              <div class="clearfix"></div>
              
              {{ Session::get('message') }}
              <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue">{{ date("d F Y",strtotime($page->updated_at)) }} @ {{ date("g:i A",strtotime($page->updated_at)) }}</span> </div>
              <div class="clearfix"></div>
              <p></p>
              {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'announcementsave','id' => 'announcementsave')) }} 
       {{Form::hidden('preview','')}}
           {{Form::hidden('pageid',$page->id)}}
           {{Form::hidden('type',$page->type)}}
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Info</div>
                  <div class="clearfix"></div>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <div class="portlet-body">
                 
                  <div contenteditable="true" id="right-block3-content">
                    
                      {{ $page->right_block3_content }}
                   
                    
                  </div>
                  <div class="clearfix"></div>
                    {{ Form::textarea('right_block3_content',$page->right_block3_content,array("id" => "textarea-right-block3-content","class" => "hideThisField")) }}




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
                            <div contenteditable="true" id="left-block1-title">
                              {{ $page->left_block1_title }}
                            </div>
                   {{ Form::textarea('left_block1_title',$page->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}

                          </div>
                        </header>
                        <div class="clearfix">
                          <div contenteditable="true" id="left-block1-content">
                          {{ $page->left_block1_content}}
                          </div>
                      {{ Form::textarea('left_block1_content',$page->left_block1_content,array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}



                          <div contenteditable="true" id="left-block2-title">
                          {{ $page->left_block2_title }}
                            </div>
                                                  {{ Form::textarea('left_block2_title',$page->left_block2_title,array("id" => "textarea-left-block2-title","class" => "hideThisField")) }}

                          <div contenteditable="true" id="left-block2-content">
                            {{ $page->left_block2_content }}
                          </div>
                                                {{ Form::textarea('left_block2_content',$page->left_block2_content,array("id" => "textarea-left-block2-content","class" => "hideThisField")) }}

                          <div contenteditable="true" id="left-block3-title">
                          {{ $page->left_block3_title }}
                             </div>
                                                   {{ Form::textarea('left_block3_title',$page->left_block3_title,array("id" => "textarea-left-block3-title","class" => "hideThisField")) }}

                          <div contenteditable="true" id="left-block3-content">
                          {{ $page->left_block3_content }}
                          </div>
                                                {{ Form::textarea('left_block3_content',$page->left_block3_content,array("id" => "textarea-left-block3-content","class" => "hideThisField")) }}

                          <div contenteditable="true" id="right-block1-title">
                          {{ $page->right_block1_title }}
                            </div>
                                                  {{ Form::textarea('right_block1_title',$page->right_block1_title,array("id" => "textarea-right-block1-title","class" => "hideThisField")) }}

                          <div contenteditable="true" id="right-block1-content">
                          {{ $page->right_block1_content }}
                           </div>
                                                 {{ Form::textarea('right_block1_content',$page->right_block1_content,array("id" => "textarea-right-block1-content","class" => "hideThisField")) }}

                          <div contenteditable="true" id="right-block2-title">
                          {{ $page->right_block2_title }}
                             </div>
                                                   {{ Form::textarea('right_block2_title',$page->right_block2_title,array("id" => "textarea-right-block2-title","class" => "hideThisField")) }}

                          <div contenteditable="true" id="right-block2-content">
                          {{ $page->right_block2_content }}
                            </div>
                                                  {{ Form::textarea('right_block2_content',$page->right_block2_content,array("id" => "textarea-right-block2-content","class" => "hideThisField")) }}

                          <div contenteditable="true" id="right-block3-title">
                           {{ $page->right_block3_title }}
                             </div>
                                                   {{ Form::textarea('right_block3_title',$page->right_block3_title,array("id" => "textarea-right-block3-title","class" => "hideThisField")) }}

                        </div>
                        <!-- end clearfix -->
                      </div>
</div>
                    <!-- end clearfix -->
                  </div>
                </div>
                <!-- save button start -->
<div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('announcementsave','/company/boardcharter');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
                {{ Form::close() }}
              <!-- End portlet-->
            </div>
          </div>

@stop