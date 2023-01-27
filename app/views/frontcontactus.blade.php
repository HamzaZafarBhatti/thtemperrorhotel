@extends('layouts.front')
@section('content')
                 
             
                <div class="clearfix">
                  <div class="grid_12">
                    <header class="entry-header clearfix">
                      <div class="format-icon">
                        <div class="format-icon-inner"> <i class="icon-pushpin"></i> </div>
                      </div>
                      <div class="entry-header-inner">
                      {{ $pageTitle }}
                      </div>
                    </header>
                    <div class="hr"></div>
                  </div>
                </div>
			    <div class="clearfix">
                  <div class="grid_12">
                    <!-- Contact Information -->
                  {{ $page->left_block2_title }}
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
                       {{ $page->left_block3_title }}
                      </div>
                    </header>
                    <div class="line"></div>
                  </div>
                </div>
			    <div class="grid_6">
                  <!-- Google Map -->
                  <div class="map-wrapper map-wrapper__small">
                    <div class="map-canvas map-canvas__small">
                      <iframe id="map_load_dynamic1" src="https://www.google.{{ $page->right_block1_content }}"
   width="100%" height="150" frameborder="0" style="border:0;"></iframe>
                      
                    </div>
                  </div>
			      <!-- Google Map / End -->
                  <!-- Contact Information -->
               {{ $page->left_inner_block_title1 }}
			   {{ $page->left_inner_block_content1 }}
			      <!-- Contact Information / End -->
                </div>
                <div class="grid_6">
                  <!-- Google Map -->
                  <div class="map-wrapper map-wrapper__small">
                    <div id="map_canvas" class="map-canvas map-canvas__small">
                      <iframe id="map_load_dynamic1" src="https://www.google.{{ $page->left_inner_block_title2 }}"
   width="100%" height="150" frameborder="0" style="border:0;"></iframe>
                    </div>
                  </div>
                  <!-- Google Map / End -->
                  <!-- Contact Information -->
               {{ $page->left_inner_block_title3 }}
                {{ $page->left_inner_block_content3 }}
                  <!-- Contact Information / End -->
                </div>
                <div class="clearfix"></div>
			    <br/>
                <div class="grid_6">
                  <!-- Google Map -->
                  <div class="map-wrapper map-wrapper__small">
                    <div class="map-canvas map-canvas__small">
                      <iframe id="map_load_dynamic1" src="https://www.google.{{ $page->left_inner_block_title4 }}"
   width="100%" height="150" frameborder="0" style="border:0;"></iframe>
                    </div>
                  </div>
                  <!-- Google Map / End -->
                  <!-- Contact Information -->
                 {{ $page->left_inner_block_title5 }}
                  {{ $page->left_inner_block_content5 }}
                  <!-- Contact Information / End -->
                </div>
                <div class="grid_6">
                  <!-- Google Map -->
                  <div class="map-wrapper map-wrapper__small">
                    <div id="map_canvas" class="map-canvas map-canvas__small">
                      <iframe id="map_load_dynamic1" src="https://www.google.{{ $page->left_inner_block_title6 }}"
   width="100%" height="150" frameborder="0" style="border:0;"></iframe>
                    </div>
                  </div>
                  <!-- Google Map / End -->
                  <!-- Contact Information -->
               {{ $page->left_inner_block_title7 }}
                  {{ $page->left_inner_block_content7 }}
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
                     {{ $page->left_inner_block_title8 }}
                      </div>
                    </header>
                    <div class="line"></div>
                  </div>
                </div>
			    <div class="grid_6">
                  <!-- Google Map -->
                  <div class="map-wrapper map-wrapper__small">
                    <div class="map-canvas map-canvas__small">
                      <iframe id="map_load_dynamic1" src="https://www.google.{{ $page->left_inner_block_title9 }}"
   width="100%" height="150" frameborder="0" style="border:0;"></iframe>
                    </div>
                  </div>
			      <!-- Google Map / End -->
                  <!-- Contact Information -->
                  {{ $page->left_inner_block_title10 }}
			      {{ $page->left_inner_block_content10 }}
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
                   {{ $page->left_inner_block_title11 }}
                      </div>
                    </header>
                    <div class="line"></div>
                  </div>
                </div>
			    <div class="grid_6">
                  <!-- Google Map -->
                  <div class="map-wrapper map-wrapper__small">
                    <div class="map-canvas map-canvas__small">
                      <iframe id="map_load_dynamic1" src="https://www.google.{{ $page->left_inner_block_title12 }}"
   width="100%" height="150" frameborder="0" style="border:0;"></iframe>
                    </div>
                  </div>
			      <!-- Google Map / End -->
                  <!-- Contact Information -->
                 {{ $page->left_inner_block_title13 }}
			     {{ $page->left_inner_block_content13 }}
			      <!-- Contact Information / End -->
                </div>
                <div class="grid_6">
                  <!-- Google Map -->
                  <div class="map-wrapper map-wrapper__small">
                    <div class="map-canvas map-canvas__small">
                      <iframe id="map_load_dynamic1" src="https://www.google.{{ $page->left_inner_block_title14 }}"
   width="100%" height="150" frameborder="0" style="border:0;"></iframe>
                    </div>
                  </div>
                  <!-- Google Map / End -->
                  <!-- Contact Information -->
                  {{ $page->left_inner_block_title15 }}
                  {{ $page->left_inner_block_content15 }}
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
                    {{ $page->left_inner_block_title16 }}
                      </div>
                    </header>
                    <div class="line"></div>
                  </div>
                </div>
			    <div class="grid_6">
                  <!-- Google Map -->
                  <div class="map-wrapper map-wrapper__small">
                    <div class="map-canvas map-canvas__small">
                      <iframe id="map_load_dynamic1" src="https://www.google.{{ $page->left_inner_block_title17 }}"
   width="100%" height="150" frameborder="0" style="border:0;"></iframe>
                    </div>
                  </div>
			      <!-- Google Map / End -->
                  <!-- Contact Information -->
                  {{ $page->left_inner_block_title18 }}
			      {{ $page->left_inner_block_content18 }}
			      <!-- Contact Information / End -->
                </div>
                <div class="clearfix"></div>
			    <div class="hr hr__double">
                  <div class="hr-first"></div>
			      <div class="hr-second"></div>
		        </div>
			    <!-- hospitality contact end -->
        
                
                  
		
@stop