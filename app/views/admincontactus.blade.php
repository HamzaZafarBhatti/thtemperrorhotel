@extends('layouts.admin')
@section('content')
      <div class="row">
            <div class="col-lg-12">
              <h2>CONTACT US  <i class="fa fa-angle-right"></i> EDIT</h2>
              <div class="clearfix"></div>
              <div class=" msuccess alert alert-success alert-dismissable hide">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>The information has been saved/updated successfully.</p>
              </div>
              <div class="mfail alert alert-danger alert-dismissable hide">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                <p>The information has not been saved/updated. Please correct the errors.</p>
              </div>
              
              <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue"> {{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}
</span> </div>
              <div class="clearfix"></div>
              <p></p>
              
           {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'contactsave','id' => 'contactsave')) }} 
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
                  <div class="caption">Page Content
</div>
                  <div class="clearfix"></div>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                
                <div class="portlet-body">
                  <div class="container">
                    <div class="clearfix">
                      <div class="grid_12">
                        <header class="entry-header clearfix">
                          <div class="format-icon">
                            <div class="format-icon-inner"> <i class="icon-pushpin"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                            <div contenteditable="true" id="left-block1-title">
          {{ $page[0]->left_block1_title }} 
     
                            </div>
  {{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}

                          </div>
                        </header>
                        <div class="hr"></div>
                      </div>
                    </div>
                     
                    <div class="clearfix">
                      <div class="grid_12">
                      
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
                         <iframe id="map_left_inner_block_title20" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title20 }}"                       
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>
         <input type="hidden" name="left_inner_block_title20" id="left_inner_block_title20" value="{{ $page[0]->left_inner_block_title20 }}">
                        </div>
                      </div>
                      <!-- Google Map / End -->
                        <div class="clearfix"></div>

                        <a href="#" data-target="#modal-edit-map-block9" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      
                      
                      
                      	<!-- Contact Information -->
                        <div contenteditable="true" id="left-block2-title">
     {{ $page[0]->left_block2_title }}
                        </div>
 {{ Form::textarea('left_block2_title',$page[0]->left_block2_title,array("id" => "textarea-left-block2-title","class" => "hideThisField")) }}

                        <div contenteditable="true" id="left-block2-content">
   {{ $page[0]->left_block2_content }}
                        </div>
 {{ Form::textarea('left_block2_content',$page[0]->left_block2_content,array("id" => "textarea-left-block2-content","class" => "hideThisField")) }}

                        <!-- Contact Information / End -->

                      </div>    
					</div>
                    <div class="clearfix"></div>
                    <div class="hr hr__double">
                      <div class="hr-first"></div>
                      <div class="hr-second"></div>
                    </div>
                    
                    <!-- manufacturing contact start -->
                    <div class="clearfix">
                      <div class="grid_12">
                        <header class="entry-header clearfix">
                          <div class="format-icon">
                            <div class="format-icon-inner"> <i class="icon-pushpin"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                            <div contenteditable="true" id="left-block3-title">
          {{ $page[0]->left_block3_title }}

                            </div>
    {{ Form::textarea('left_block3_title',$page[0]->left_block3_title,array("id" => "textarea-left-block3-title","class" => "hideThisField")) }}

                          </div>
                        </header>
                        <div class="line"></div>
                      </div>
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
  <iframe id="map_right_block1_content" 
                         src="https://www.google.{{ $page[0]->right_block1_content }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>                      
                         
   <input type="hidden" name="right_block1_content" id="right_block1_content" value="{{ $page[0]->right_block1_content }}">                      
                           </div>
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block1" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title1">
             {{ $page[0]->left_inner_block_title1 }} 
                      </div>
 {{ Form::textarea('left_inner_block_title1', $page[0]->left_inner_block_title1,array("id" => "textarea-left-inner-block-title1","class" => "hideThisField")) }}

					  <div contenteditable="true" id="left-inner-block-content1">
    {{ $page[0]->left_inner_block_content1 }} 
                      </div>
 {{ Form::textarea('left_inner_block_content1', $page[0]->left_inner_block_content1,array("id" => "textarea-left-inner-block-content1","class" => "hideThisField")) }}

                      <!-- Contact Information / End -->
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div id="map_canvas" class="map-canvas map-canvas__small">
 <iframe id="map_left_inner_block_title2" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title2 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>    
      <input type="hidden" name="left_inner_block_title2" id="left_inner_block_title2" value="{{ $page[0]->left_inner_block_title2 }}">                   
                         
                                                </div>
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block2" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title3">
    {{ $page[0]->left_inner_block_title3 }} 
                      </div>
     {{ Form::textarea('left_inner_block_title3', $page[0]->left_inner_block_title3,array("id" => "textarea-left-inner-block-title3","class" => "hideThisField")) }}

                      <div contenteditable="true" id="left-inner-block-content3">	
    {{ $page[0]->left_inner_block_content3 }} 
                      </div>  
     {{ Form::textarea('left_inner_block_content3', $page[0]->left_inner_block_content3,array("id" => "textarea-left-inner-block-content3","class" => "hideThisField")) }}

                      <!-- Contact Information / End -->
                    </div>
                    <div class="clearfix"></div>
                    <br/>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
<iframe id="map_left_inner_block_title4" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title4 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>                           </div>
                          <input type="hidden" name="left_inner_block_title4" id="left_inner_block_title4" value="{{ $page[0]->left_inner_block_title4 }}">
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block3" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title5">
                {{ $page[0]->left_inner_block_title5 }}
                      </div>
          {{ Form::textarea('left_inner_block_title5', $page[0]->left_inner_block_title5,array("id" => "textarea-left-inner-block-title5","class" => "hideThisField")) }}

                      <div contenteditable="true" id="left-inner-block-content5">
         {{ $page[0]->left_inner_block_content5 }} 
                      </div>
              {{ Form::textarea('left_inner_block_content5', $page[0]->left_inner_block_content5,array("id" => "textarea-left-inner-block-content5","class" => "hideThisField")) }}

                      <!-- Contact Information / End -->
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div id="map_canvas" class="map-canvas map-canvas__small">
<iframe id="map_left_inner_block_title6" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title6 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe> 
 <input type="hidden" name="left_inner_block_title6" id="left_inner_block_title6" value="{{ $page[0]->left_inner_block_title6 }}">

                        </div>
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block4" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title7">
          {{ $page[0]->left_inner_block_title7 }}
                      </div>
                {{ Form::textarea('left_inner_block_title7', $page[0]->left_inner_block_title7,array("id" => "textarea-left-inner-block-title7","class" => "hideThisField")) }}

                      <div contenteditable="true" id="left-inner-block-content7">	
              {{ $page[0]->left_inner_block_content7 }} 
    				  </div>
    {{ Form::textarea('left_inner_block_content7', $page[0]->left_inner_block_content7,array("id" => "textarea-left-inner-block-content7","class" => "hideThisField")) }}

                      <!-- Contact Information / End -->
                    </div>
                    <div class="clearfix"></div>
                    <div class="hr hr__double">
                      <div class="hr-first"></div>
                      <div class="hr-second"></div>
                    </div>
                    <!-- manufacturing contact end -->
                    
                    <!-- trading contact start -->
                    <div class="clearfix">
                      <div class="grid_12">
                        <header class="entry-header clearfix">
                          <div class="format-icon">
                            <div class="format-icon-inner"> <i class="icon-pushpin"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                            <div contenteditable="true" id="left-inner-block-title8">
        {{ $page[0]->left_inner_block_title8 }}
                            </div>
     {{ Form::textarea('left_inner_block_title8', $page[0]->left_inner_block_title8,array("id" => "textarea-left-inner-block-title8","class" => "hideThisField")) }}

                          </div>
                        </header>
                        <div class="line"></div>
                      </div>
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
<iframe id="map_left_inner_block_title9" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title9 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>                         </div>
  <input type="hidden" name="left_inner_block_title9" id="left_inner_block_title9" value="{{ $page[0]->left_inner_block_title9 }}">

                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block5" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title10">
                       {{ $page[0]->left_inner_block_title10 }}
                      </div>
                        {{ Form::textarea('left_inner_block_title10', $page[0]->left_inner_block_title10,array("id" => "textarea-left-inner-block-title10","class" => "hideThisField")) }}

					    <div contenteditable="true" id="left-inner-block-content10">
                      {{ $page[0]->left_inner_block_content10 }} 
    				  </div>
    {{ Form::textarea('left_inner_block_content10', $page[0]->left_inner_block_content10,array("id" => "textarea-left-inner-block-content10","class" => "hideThisField")) }}
                      <!-- Contact Information / End -->
                    </div>
                    
                    <div class="clearfix"></div>
                    <div class="hr hr__double">
                      <div class="hr-first"></div>
                      <div class="hr-second"></div>
                    </div>
                    <!-- trading contact end -->
                    
                    <!-- plantation contact start -->
                    <div class="clearfix">
                      <div class="grid_12">
                        <header class="entry-header clearfix">
                          <div class="format-icon">
                            <div class="format-icon-inner"> <i class="icon-pushpin"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                            <div contenteditable="true" id="left-inner-block-title11">
                            	 {{ $page[0]->left_inner_block_title11 }}
                      </div>
                        {{ Form::textarea('left_inner_block_title11', $page[0]->left_inner_block_title11,array("id" => "textarea-left-inner-block-title11","class" => "hideThisField")) }}
                          </div>
                        </header>
                        <div class="line"></div>
                      </div>
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
                          <iframe id="map_left_inner_block_title12" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title12 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>
      <input type="hidden" name="left_inner_block_title12" id="left_inner_block_title12" value="{{ $page[0]->left_inner_block_title12 }}">
                        </div>
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block6" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title13">
                      	 {{ $page[0]->left_inner_block_title13 }}
                      </div>
                        {{ Form::textarea('left_inner_block_title13', $page[0]->left_inner_block_title13,array("id" => "textarea-left-inner-block-title13","class" => "hideThisField")) }}
					  <div contenteditable="true" id="left-inner-block-content13">
                          {{ $page[0]->left_inner_block_content13 }} 
    				  </div>
    {{ Form::textarea('left_inner_block_content13', $page[0]->left_inner_block_content13,array("id" => "textarea-left-inner-block-content13","class" => "hideThisField")) }}
                      <!-- Contact Information / End -->
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
                          <iframe id="map_left_inner_block_title14" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title14 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>
         <input type="hidden" name="left_inner_block_title14" id="left_inner_block_title14" value="{{ $page[0]->left_inner_block_title14 }}">

                        </div>
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block7" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title15">
                      		 {{ $page[0]->left_inner_block_title15 }}
                      </div>
                        {{ Form::textarea('left_inner_block_title15', $page[0]->left_inner_block_title15,array("id" => "textarea-left-inner-block-title15","class" => "hideThisField")) }}
                      <div contenteditable="true" id="left-inner-block-content15">
                        {{ $page[0]->left_inner_block_content15 }} 
    				  </div>
    {{ Form::textarea('left_inner_block_content15', $page[0]->left_inner_block_content15,array("id" => "textarea-left-inner-block-content15","class" => "hideThisField")) }}
                      <!-- Contact Information / End -->
                    </div>
                    <div class="clearfix"></div>
                    <div class="hr hr__double">
                      <div class="hr-first"></div>
                      <div class="hr-second"></div>
                    </div>
                    <!-- plantation contact end -->
                    
                    <!-- hospitality contact start -->
                    <div class="clearfix">
                      <div class="grid_12">
                        <header class="entry-header clearfix">
                          <div class="format-icon">
                            <div class="format-icon-inner"> <i class="icon-pushpin"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                            <div contenteditable="true" id="left-inner-block-title16">
                            	 {{ $page[0]->left_inner_block_title16 }}
                      </div>
                        {{ Form::textarea('left_inner_block_title16', $page[0]->left_inner_block_title16,array("id" => "textarea-left-inner-block-title16","class" => "hideThisField")) }}
                          </div>
                        </header>
                        <div class="line"></div>
                      </div>
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
                         <iframe id="map_left_inner_block_title17" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title17 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>
         <input type="hidden" name="left_inner_block_title17" id="left_inner_block_title17" value="{{ $page[0]->left_inner_block_title17 }}">
                        </div>
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block8" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title18">
                       {{ $page[0]->left_inner_block_title18 }}
                      </div>
                        {{ Form::textarea('left_inner_block_title18', $page[0]->left_inner_block_title18,array("id" => "textarea-left-inner-block-title18","class" => "hideThisField")) }}
                      <div contenteditable="true" id="left-inner-block-content18">
                      	 {{ $page[0]->left_inner_block_content18 }} 
    				  </div>
    {{ Form::textarea('left_inner_block_content18', $page[0]->left_inner_block_content18,array("id" => "textarea-left-inner-block-content18","class" => "hideThisField")) }}
                      <!-- Contact Information / End -->
                    </div>
                    <div class="clearfix"></div>
                    <div class="hr hr__double">
                      <div class="hr-first"></div>
                      <div class="hr-second"></div>
                    </div>
                    <!-- hospitality contact end -->
                    
                  </div>
                </div>
                <!-- save button start -->
                <div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('contactsave','contacts/contactus');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
              
              <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block1" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                                                      	<div class="radio">
                            
                              <label class="col-md-3" >
						      <input  type="radio" name="optionsRadios" id="optionsRadios3" 
						         value="option1" checked> Search Google Map
						   </label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address1" class=" form-control" placeholder="Enter Address" 
                              value=" <?php if (strpos($page[0]->right_block1_content ,'&q=') !== false) {
$r = explode("&q=",$page[0]->right_block1_content);
 echo $r[1];
}else{echo "";} ?>" />
 
							</div>
							</div> <!-- end radio -->
                          </div>
                          <!-- new field -->
                            <div class="form-group">
                            	<div class="radio">
                     
                            						   <label class="col-md-3">
						      <input type="radio" name="optionsRadios" id="optionsRadios4" 
						         value="option2">  Embed Google Map URL						   </label>
                            <div class="col-md-9">
                            	<textarea id="embed_url1" class=" form-control" disabled >
{{ "https://www.google.". $page[0]->right_block1_content }}
							</textarea>
                              
                          </div>
                           </div> <!-- end radio -->
                          </div>
                              <!-- end new field -->
                                  <div style="margin-left: 15px;">
                                <input type="button" id="gmap_geocoding_btn"  class="search_map2 btn btn-dark" value="Search" />
         </div>

                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="mapmodal-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                  <iframe id="mapmodal_right_block1_content" 
                         src="https://www.google.{{ $page[0]->right_block1_content }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>  
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" id="save_map2"  class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                            
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
        
        
          <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block2" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                                                  	<div class="radio">
                            
                              <label class="col-md-3" >
						      <input  type="radio" name="optionsRadios" id="optionsRadios5" 
						         value="option1" checked> Search Google Map
						   </label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address2" class=" form-control" placeholder="Enter Address" 
                              value="<?php if (strpos($page[0]->left_inner_block_title2 ,'&q=') !== false) {
$r = explode("&q=",$page[0]->left_inner_block_title2);
 echo $r[1];
}else{echo "";} ?>" />

							</div>
							</div> <!-- end radio -->
                          </div>
                          <!-- new field -->
                            <div class="form-group">
                            	<div class="radio">
                     
                            						   <label class="col-md-3">
						      <input type="radio" name="optionsRadios" id="optionsRadios6" 
						         value="option2">  Embed Google Map URL						   </label>
                            <div class="col-md-9">
                            	<textarea id="embed_url2" class=" form-control" disabled >
{{ "https://www.google.". $page[0]->left_inner_block_title2 }}
</textarea>
                              
                          </div>
                           </div> <!-- end radio -->
                          </div>
                              <!-- end new field -->
                                                            <div style="margin-left: 15px;">
                                   <input type="button" id="gmap_geocoding_btn" class="search_map3 btn btn-dark" value="Search" />
         </div>

                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                    <iframe id="mapmodal_left_inner_block_title2" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title2 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" id="save_map3" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
              
              
                <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block3" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                                                      	<div class="radio">
                            
                              <label class="col-md-3" >
						      <input  type="radio" name="optionsRadios" id="optionsRadios7" 
						         value="option1" checked> Search Google Map
						   </label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address3" class=" form-control" placeholder="Enter Address" 
                              value="<?php if (strpos($page[0]->left_inner_block_title4 ,'&q=') !== false) {
$r = explode("&q=",$page[0]->left_inner_block_title4);
 echo $r[1];
}else{echo "";} ?>" />


							</div>
							</div> <!-- end radio -->
                          </div>
                          <!-- new field -->
                            <div class="form-group">
                            	<div class="radio">
                     
                            						   <label class="col-md-3">
						      <input type="radio" name="optionsRadios" id="optionsRadios8" 
						         value="option2">  Embed Google Map URL						   </label>
                            <div class="col-md-9">
                            	<textarea id="embed_url3" class=" form-control" disabled >
{{ "https://www.google.". $page[0]->left_inner_block_title4 }}
                            	</textarea>
                              
                          </div>
                           </div> <!-- end radio -->
                          </div>
                              <!-- end new field -->
                                                            <div style="margin-left: 15px;">
                                   <input type="button" id="gmap_geocoding_btn"  class="search_map4 btn btn-dark" value="Search" />
         </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                    <iframe id="mapmodal_left_inner_block_title4" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title4 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" id="save_map4" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
        
        
          <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block4" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                                                     	<div class="radio">
                            
                              <label class="col-md-3" >
						      <input  type="radio" name="optionsRadios" id="optionsRadios9" 
						         value="option1" checked> Search Google Map
						   </label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address4" class=" form-control" placeholder="Enter Address" 
                              value="<?php if (strpos($page[0]->left_inner_block_title6 ,'&q=') !== false) {
$r = explode("&q=",$page[0]->left_inner_block_title6);
 echo $r[1];
}else{echo "";} ?>" />

							</div>
							</div> <!-- end radio -->
                          </div>
                          <!-- new field -->
                            <div class="form-group">
                            	<div class="radio">
                     
                            						   <label class="col-md-3">
						      <input type="radio" name="optionsRadios" id="optionsRadios10" 
						         value="option2">  Embed Google Map URL						   </label>
                            <div class="col-md-9">
                            	<textarea id="embed_url4" class=" form-control" disabled >
{{ "https://www.google.". $page[0]->left_inner_block_title6 }}
</textarea>
                              
                          </div>
                           </div> <!-- end radio -->
                          </div>
                              <!-- end new field -->
                                                            <div style="margin-left: 15px;">
                                   <input type="button" id="gmap_geocoding_btn" class="search_map5 btn btn-dark" value="Search" />
         </div>

                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                                             <iframe id="mapmodal_left_inner_block_title6" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title6 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                         
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" id="save_map5" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
        
      
        <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block5" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                                                      	<div class="radio">
                            
                              <label class="col-md-3" >
						      <input  type="radio" name="optionsRadios" id="optionsRadios11" 
						         value="option1" checked> Search Google Map
						   </label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address5" class=" form-control" placeholder="Enter Address" 
                              value="<?php if (strpos($page[0]->left_inner_block_title9 ,'&q=') !== false) {
$r = explode("&q=",$page[0]->left_inner_block_title9);
 echo $r[1];
}else{echo "";} ?>" />


							</div>
							</div> <!-- end radio -->
                          </div>
                          <!-- new field -->
                            <div class="form-group">
                            	<div class="radio">
                     
                            						   <label class="col-md-3">
						      <input type="radio" name="optionsRadios" id="optionsRadios12" 
						         value="option2">  Embed Google Map URL						   </label>
                            <div class="col-md-9">
                            	<textarea id="embed_url5" class=" form-control" disabled >
{{ "https://www.google.". $page[0]->left_inner_block_title9 }}
                            	</textarea>
                              
                          </div>
                           </div> <!-- end radio -->
                          </div>
                              <!-- end new field -->
                                                            <div style="margin-left: 15px;">
                                   <input type="button" id="gmap_geocoding_btn"  class="search_map6 btn btn-dark" value="Search" />
         </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                           <iframe id="mapmodal_left_inner_block_title9" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title9 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" id="save_map6" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
      
      
      
        <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block6" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                                                      	<div class="radio">
                            
                              <label class="col-md-3" >
						      <input  type="radio" name="optionsRadios" id="optionsRadios13" 
						         value="option1" checked> Search Google Map
						   </label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address6" class=" form-control" placeholder="Enter Address" 
                              value=" <?php if (strpos($page[0]->left_inner_block_title12 ,'&q=') !== false) {
$r = explode("&q=",$page[0]->left_inner_block_title12);
 echo $r[1];
}else{echo "";} ?>" />

							</div>
							</div> <!-- end radio -->
                          </div>
                          <!-- new field -->
                            <div class="form-group">
                            	<div class="radio">
                     
                            						   <label class="col-md-3">
						      <input type="radio" name="optionsRadios" id="optionsRadios14" 
						         value="option2">  Embed Google Map URL						   </label>
                            <div class="col-md-9">
                            	<textarea id="embed_url6" class=" form-control" disabled >
{{ "https://www.google.". $page[0]->left_inner_block_title12 }}
                            	</textarea>
                              
                          </div>
                           </div> <!-- end radio -->
                          </div>
                              <!-- end new field -->
                                                            <div style="margin-left: 15px;">
                                   <input type="button" id="gmap_geocoding_btn" class="search_map7 btn btn-dark" value="Search" />
         </div>

                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                                             <iframe id="mapmodal_left_inner_block_title12" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title12 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" id="save_map7" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
      
      
        <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block7" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                                                     	<div class="radio">
                            
                              <label class="col-md-3" >
						      <input  type="radio" name="optionsRadios" id="optionsRadios15" 
						         value="option1" checked> Search Google Map
						   </label>
						   
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address7" class=" form-control" placeholder="Enter Address" 
                              value="<?php if (strpos($page[0]->left_inner_block_title14 ,'&q=') !== false) {
$r = explode("&q=",$page[0]->left_inner_block_title14);
 echo $r[1];
}else{echo "";} ?>" />

							</div>
							</div> <!-- end radio -->
                          </div>
                          <!-- new field -->
                            <div class="form-group">
                            	<div class="radio">
                     
                            						   <label class="col-md-3">
						      <input type="radio" name="optionsRadios" id="optionsRadios16" 
						         value="option2">  Embed Google Map URL						   </label>
                            <div class="col-md-9">
                            	<textarea id="embed_url7" class=" form-control" disabled >
{{ "https://www.google.". $page[0]->left_inner_block_title14 }}
</textarea>
                              
                          </div>
                           </div> <!-- end radio -->
                          </div>
                              <!-- end new field -->
                                                            <div style="margin-left: 15px;">
                                   <input type="button" id="gmap_geocoding_btn" class="search_map8 btn btn-dark" value="Search" />
         </div>

                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                    <iframe id="mapmodal_left_inner_block_title14" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title14 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" id="save_map8" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
      
      
      
        <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block8" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                                                      	<div class="radio">
                            
                              <label class="col-md-3" >
						      <input  type="radio" name="optionsRadios" id="optionsRadios17" 
						         value="option1" checked> Search Google Map
						   </label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address8" class=" form-control" placeholder="Enter Address" 
                              value="<?php if (strpos($page[0]->left_inner_block_title17 ,'&q=') !== false) {
$r = explode("&q=",$page[0]->left_inner_block_title17);
 echo $r[1];
}else{echo "";} ?>" />

							</div>
							</div> <!-- end radio -->
                          </div>
                          <!-- new field -->
                            <div class="form-group">
                            	<div class="radio">
                     
                            						   <label class="col-md-3">
						      <input type="radio" name="optionsRadios" id="optionsRadios18" 
						         value="option2">  Embed Google Map URL						   </label>
                            <div class="col-md-9">
                            	<textarea id="embed_url8" class=" form-control" disabled >
{{ "https://www.google.". $page[0]->left_inner_block_title17 }}
                            	</textarea>
                              
                          </div>
                           </div> <!-- end radio -->
                          </div>
                              <!-- end new field -->
                                                            <div style="margin-left: 15px;">
                                   <input type="button" id="gmap_geocoding_btn"  class="search_map9 btn btn-dark" value="Search" />
                              </div>

                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                    <iframe id="mapmodal_left_inner_block_title17" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title17 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" id="save_map9" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
      
      
      
       <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block9" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">


                      <div class="form">
                      	
                          <div class="form-group">
                          	<div class="radio">
                            
                              <label class="col-md-3" >
						      <input  type="radio" name="optionsRadios" id="optionsRadios1" 
						         value="option1" checked> Search Google Map
						   </label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address9" class=" form-control" placeholder="Enter Address" 
                              value="<?php if (strpos($page[0]->left_inner_block_title20 ,'&q=') !== false) {
$r = explode("&q=",$page[0]->left_inner_block_title20);
 echo $r[1];
}else{echo "";} ?>" />


							</div>
							</div> <!-- end radio -->
                          </div>
                          <!-- new field -->
                            <div class="form-group">
                            	<div class="radio">
                     
                            						   <label class="col-md-3">
						      <input type="radio" name="optionsRadios" id="optionsRadios2" 
						         value="option2">  Embed Google Map URL						   </label>
                            <div class="col-md-9">
                            	<textarea id="embed_url" class=" form-control" disabled >
{{ "https://www.google.". $page[0]->left_inner_block_title17 }}
                            	</textarea>
                              
                          </div>
                           </div> <!-- end radio -->
                          </div>
                              <!-- end new field -->
                                                            <div style="margin-left: 15px;">
                                   <input type="button" id="gmap_geocoding_btn"  class="search_map btn btn-dark" value="Search" />
                              </div>
                              
                         
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                    <iframe id="mapmodal_left_inner_block_title20" 
                         src="https://www.google.{{ $page[0]->left_inner_block_title17 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a id="save_map" href="javascript:void(0);"  class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                     
                    </div>
                  </div>
                </div>
              </div>
              
              <!--END MODAL Edit Map-->
      
           
              {{ Form::close() }}
           
              <!-- end portlet -->
            </div>
          </div>
        </div>
         	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
       
        	<script type='text/javascript'>

			    $(document).ready(function() {
			    	///////////////////// search fn
			    	
			    	//1    	
			    	$('.search_map').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address9','left_inner_block_title20','search');
			    		}else{
			    			var url = $('#embed_url').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address9','left_inner_block_title20','search',url);
			    			
			    		}

					});
					
								//2    	

					
							    	$('.search_map2').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url1').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address1','right_block1_content','search');
			    		}else{
			    			var url = $('#embed_url1').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address1','right_block1_content','search',url);
			    			
			    		}

					});
					
					
								//3    	
			    	$('.search_map3').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url2').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address2','left_inner_block_title2','search');
			    		}else{
			    			var url = $('#embed_url2').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address2','left_inner_block_title2','search',url);
			    			
			    		}

					});
					
								//4   	
			    	$('.search_map4').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url3').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address3','left_inner_block_title4','search');
			    		}else{
			    			var url = $('#embed_url3').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address3','left_inner_block_title4','search',url);
			    			
			    		}

					});
			    	
			    	
			    				//5    	
			    	$('.search_map5').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url4').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address4','left_inner_block_title6','search');
			    		}else{
			    			var url = $('#embed_url4').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address4','left_inner_block_title6','search',url);
			    			
			    		}

					});
					
								//6    	
			    	$('.search_map6').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url5').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address5','left_inner_block_title9','search');
			    		}else{
			    			var url = $('#embed_url5').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address5','left_inner_block_title9','search',url);
			    			
			    		}

					});
					
								//7   	
			    	$('.search_map7').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url6').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address6','left_inner_block_title12','search');
			    		}else{
			    			var url = $('#embed_url6').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address6','left_inner_block_title12','search',url);
			    			
			    		}

					});
					
								//8    	
			    	$('.search_map8').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url7').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address7','left_inner_block_title14','search');
			    		}else{
			    			var url = $('#embed_url7').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address7','left_inner_block_title14','search',url);
			    			
			    		}

					});
					
					
								//9   	
			    	$('.search_map9').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url8').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address8','left_inner_block_title17','search');
			    		}else{
			    			var url = $('#embed_url8').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address8','left_inner_block_title17','search',url);
			    			
			    		}

					});
					
			    	
			    	
	/////////////////////////////////////////////
	///  save fn		    	
			//1    	
			    	$('#save_map').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address9','left_inner_block_title20','save');
			    		}else{
			    			var url = $('#embed_url').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address9','left_inner_block_title20','save',url);
			    			
			    		}

					});
					
								//2    	

					
							    	$('#save_map2').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url1').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address1','right_block1_content','save');
			    		}else{
			    			var url = $('#embed_url1').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address1','right_block1_content','save',url);
			    			
			    		}

					});
					
					
								//3    	
			    	$('#save_map3').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url2').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address2','left_inner_block_title2','save');
			    		}else{
			    			var url = $('#embed_url2').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address2','left_inner_block_title2','save',url);
			    			
			    		}

					});
					
								//4   	
			    	$('#save_map4').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url3').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address3','left_inner_block_title4','save');
			    		}else{
			    			var url = $('#embed_url3').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address3','left_inner_block_title4','save',url);
			    			
			    		}

					});
			    	
			    	
			    				//5    	
			    	$('#save_map5').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url4').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address4','left_inner_block_title6','save');
			    		}else{
			    			var url = $('#embed_url4').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address4','left_inner_block_title6','save',url);
			    			
			    		}

					});
					
								//6    	
			    	$('#save_map6').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url5').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address5','left_inner_block_title9','save');
			    		}else{
			    			var url = $('#embed_url5').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address5','left_inner_block_title9','save',url);
			    			
			    		}

					});
					
								//7   	
			    	$('#save_map7').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url6').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address6','left_inner_block_title12','save');
			    		}else{
			    			var url = $('#embed_url6').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address6','left_inner_block_title12','save',url);
			    			
			    		}

					});
					
								//8    	
			    	$('#save_map8').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url7').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address7','left_inner_block_title14','save');
			    		}else{
			    			var url = $('#embed_url7').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address7','left_inner_block_title14','save',url);
			    			
			    		}

					});
					
					
								//9   	
			    	$('#save_map9').click(function() {
			    		$('.msuccess').addClass('hide');
			    		$('.mfail').addClass('hide');
			    		
			    		if($('#embed_url8').attr('disabled')=='disabled'){
			    			// url not enterd
			    			
			    			updateMapAddContact('gmap_geocoding_address8','left_inner_block_title17','save');
			    		}else{
			    			var url = $('#embed_url8').val();
			    			// url is enterd
			    			updateMapAddContact('gmap_geocoding_address8','left_inner_block_title17','save',url);
			    			
			    		}

					});
					
	//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////				
					///
			    	$('#optionsRadios2').click(function() {
			    		
			    		$('#embed_url').removeAttr('disabled');
			    	
						$('#gmap_geocoding_address9').attr('disabled','disabled');
						

						});
						
					$('#optionsRadios1').click(function() {
						
						$('#gmap_geocoding_address9').removeAttr('disabled');
			    	
						$('#embed_url').attr('disabled','disabled');
						

						});
						
						///1
									    	$('#optionsRadios4').click(function() {
			    		
			    		$('#embed_url1').removeAttr('disabled');
			    	
						$('#gmap_geocoding_address1').attr('disabled','disabled');
						

						});
						
					$('#optionsRadios3').click(function() {
						
						$('#gmap_geocoding_address1').removeAttr('disabled');
			    	
						$('#embed_url1').attr('disabled','disabled');
						

						});
						
						//2
									    	$('#optionsRadios6').click(function() {
			    		
			    		$('#embed_url2').removeAttr('disabled');
			    	
						$('#gmap_geocoding_address2').attr('disabled','disabled');
						

						});
						
					$('#optionsRadios5').click(function() {
						
						$('#gmap_geocoding_address2').removeAttr('disabled');
			    	
						$('#embed_url2').attr('disabled','disabled');
						

						});
						
						//3
									    	$('#optionsRadios8').click(function() {
			    		
			    		$('#embed_url3').removeAttr('disabled');
			    	
						$('#gmap_geocoding_address3').attr('disabled','disabled');
						

						});
						
					$('#optionsRadios7').click(function() {
						
						$('#gmap_geocoding_address3').removeAttr('disabled');
			    	
						$('#embed_url3').attr('disabled','disabled');
						

						});
						
						//4
									    	$('#optionsRadios10').click(function() {
			    		
			    		$('#embed_url4').removeAttr('disabled');
			    	
						$('#gmap_geocoding_address4').attr('disabled','disabled');
						

						});
						
					$('#optionsRadios9').click(function() {
						
						$('#gmap_geocoding_address4').removeAttr('disabled');
			    	
						$('#embed_url4').attr('disabled','disabled');
						

						});
						
						
						//5
									    	$('#optionsRadios12').click(function() {
			    		
			    		$('#embed_url5').removeAttr('disabled');
			    	
						$('#gmap_geocoding_address5').attr('disabled','disabled');
						

						});
						
					$('#optionsRadios11').click(function() {
						
						$('#gmap_geocoding_address5').removeAttr('disabled');
			    	
						$('#embed_url5').attr('disabled','disabled');
						

						});
						
						//6
									    	$('#optionsRadios14').click(function() {
			    		
			    		$('#embed_url6').removeAttr('disabled');
			    	
						$('#gmap_geocoding_address6').attr('disabled','disabled');
						

						});
						
					$('#optionsRadios13').click(function() {
						
						$('#gmap_geocoding_address6').removeAttr('disabled');
			    	
						$('#embed_url6').attr('disabled','disabled');
						

						});
						
						//7
						
					$('#optionsRadios16').click(function() {
			    		
			    		$('#embed_url7').removeAttr('disabled');
			    	
						$('#gmap_geocoding_address7').attr('disabled','disabled');
						

						});
						
					$('#optionsRadios15').click(function() {
						
						$('#gmap_geocoding_address7').removeAttr('disabled');
			    	
						$('#embed_url7').attr('disabled','disabled');
						

						});
						
						//8
						
					$('#optionsRadios18').click(function() {
			    		
			    		$('#embed_url8').removeAttr('disabled');
			    	
						$('#gmap_geocoding_address8').attr('disabled','disabled');
						

						});
						
					$('#optionsRadios17').click(function() {
						
						$('#gmap_geocoding_address8').removeAttr('disabled');
			    	
						$('#embed_url8').attr('disabled','disabled');
						

						});
						
					
						
			
			});
			</script>
   
        
        @stop