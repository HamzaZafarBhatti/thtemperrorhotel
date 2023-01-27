@extends('admin.layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2>Quality Assurance <i class="fa fa-angle-right"></i> Edit</h2>
        <div class="clearfix"></div>

        {{ Session::get('message') }}
        <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue">{{ date("d F Y",strtotime($data->updated_at)) }} @ {{ date("g:i A",strtotime($data->updated_at)) }}</span> </div>
        <div class="clearfix"></div>
        <p></p>
        {{ Form::open(array('url' => 'admin/upadteQualityAssurance','class'=> 'form-horizontal','method' => 'post','name' => 'announcementsave','id' => 'announcementsave', 'enctype' =>"multipart/form-data")) }} 
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
                            <div class="clearfix margin-top-15px pageImages">
                                <p>Main Image <br><span class="imagePage"> (1920x400)</span></p>
                                <input type="file" class="form-control" name="mainImage">

                            </div>
                            <div class="clearfix margin-top-15px pageImages">
                                <p>Body Image <br><span class="imagePage">(440x280)</span></p>
                                <input type="file" class="form-control" name="bodyImage">

                            </div>
                            <div class="hr"></div>
                            <!-- end clearfix -->
                        </div>
                    </div>
                    <!-- end clearfix -->
                </div>
            </div>
            <!-- save button start -->
            <div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('announcementsave', '/company/qualityassurance');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
            <!-- save button end -->
        </div>
        <!-- End portlet-->
        {{ Form::close() }}
    </div>
</div>
@stop