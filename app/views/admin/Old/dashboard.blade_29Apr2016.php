@extends('admin.layouts.admin')
@section('content')
  <div id="tab-shopping">
    <div class="row">
        <div class="col-lg-12">
            <h2>Dashboard</h2>
            <div class="clearfix"></div>
        </div>
        <!-- end col-lg-12 -->
        <div class="col-lg-8">
            <!-- last 5 job applicants listing start -->
            <div class="panel panel-primary">
                <div class="panel-heading">Last 5 Job Applicants</div>
                <div class="panel-body">
                    <table class="table table-border-dashed table-hover mbn">
                        <thead>
                            <tr>
                                <th>Applicant Name</th>
                                <th>Position Applied</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                                             @foreach ($applicants as $k => $applicant) 
                                           <tr>
                                                <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-view-details{{ $applicant->id }}" data-toggle="modal" title="View Details">{{ $applicant->name }}</a><div id="modal-view-details{{ $applicant->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label2" class="modal-title">View Applicant Details</h4>
                                  </div>
                                  <div class="modal-body">
                                      <form action="#" class="form-horizontal">
                                                    <div class="form-body pal">
                                                        <h3 class="block-heading">Personal</h3>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="inputFirstName" class="col-md-4 control-label">Name:</label>

                                                                    <div class="col-md-8"><p class="form-control-static">{{ $applicant->name }}</p></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="inputLastName" class="col-md-4 control-label">Gender:</label>

                                                                    <div class="col-md-8"><p class="form-control-static">@if( $applicant->gender == 'm' ) Male @else Female @endif</p></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="inputBirthday" class="col-md-4 control-label">Date of Birth:</label>

                                                                    <div class="col-md-8"><p class="form-control-static">{{ $applicant->dob }}</p></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="inputEmail" class="col-md-4 control-label">Email:</label>

                                                                    <div class="col-md-8"><p class="form-control-static">{{ $applicant->email }}</p></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="inputPhone" class="col-md-4 control-label">Mobile Number:</label>

                                                                    <div class="col-md-8"><p class="form-control-static">{{ $applicant->contactno }}</p></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        
                                                        
                                                        <!-- education background start -->
                                                        <h3 class="block-heading">Education Background</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="inputPostCode" class="col-md-4 control-label">Education Level:</label>

                                                                    <div class="col-md-8"><p class="form-control-static">{{ $applicant->education }}</p></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end education background-->
                                                        <!-- CV start -->
                                                        <h3 class="block-heading">Attached CV</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="inputPostCode" class="col-md-4 control-label">Applicant CV:</label>

                                                                    <div class="col-md-8">
                                                                        <p class="form-control-static"><a href="{{ url().$applicant->resume->url() }}" target="_blank">{{ $applicant->resume_file_name }}</a></p></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end CV-->
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-5 col-md-8"> 
                                                            <a href="#" data-dismiss="modal" class="btn btn-green">Close &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                      </div>
                                                </form>
                                  </div>
                                </div>
                              </div>
                          </div></td>
                                                <td>{{ $applicant->job_title }}</td>
                                                <td>{{ date("d F, Y",strtotime($applicant->created_at)) }}</td>
                                                
                                            </tr>
                                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End last 5 job applicants listing -->
            <!-- last 5 press releases listing start -->
            <div class="panel panel-primary">
                <div class="panel-heading">Last 5 Feedback Listings</div>
                <div class="panel-body">
                    <table class="table table-border-dashed table-hover mbn">
                        <thead>
                            <tr>
                                <th>Message</th>
                                <th>Name</th>
                                <th width="20%">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($pressreleases as $k => $pressrelease)
                            <tr>
                                <td>{{ $pressrelease->questions_comments}}</td>
                                <td>{{ $pressrelease->name}}</td>
                                <td>{{ date("d F, Y",strtotime($pressrelease->created_at)) }}</td>
                            </tr>
                          @endforeach  
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End last 5 press releases listing -->
        </div>
        <!-- End col-lg-8 -->
        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-body">
                    <div class="lifetime-sales">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <i class="fa fa-suitcase fa-4x"></i> </div>
                            <div class="col-md-8 mts">
                                <div class="ls-total">{{ $vaccancies_count }}</span>
                                </div>
                                <div class="ls-title">Jobs Posted</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end # of job posted -->
        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-body">
                    <div class="average-orders">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <i class="fa fa-users fa-4x"></i> </div>
                            <div class="col-md-8 mts">
                                <div class="ao-total">{{ $applicants_count }}</div>
                                <div class="ao-title">Job Applicants</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end # of job applicants -->
        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-body">
                    <div class="average-orders">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <i class="fa fa-file fa-4x"></i> </div>
                            <div class="col-md-8 mts">
                                <div class="ao-total">{{ $pressreleases_count }}</div>
                                <div class="ao-title">Feedback Listings</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end # of Event photos Posted-->
    </div>
    <!-- end row -->
</div>
<!-- end tab-shopping-->

@stop