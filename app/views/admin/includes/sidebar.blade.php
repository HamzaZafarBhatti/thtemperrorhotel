<nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
    <div class="sidebar-collapse menu-scroll">
        <ul id="side-menu" class="nav">
            <li class="clock"><strong id="get-date"></strong>

                <div class="digital-clock">
                    <div id="getHours" class="get-time"></div>
                    <span>:</span>

                    <div id="getMinutes" class="get-time"></div>
                    <span>:</span>

                    <div id="getSeconds" class="get-time"></div>
                </div>
            </li>
            <li class="sidebar-heading"><h4>Main Menu</h4></li>
            <li @if(Request::segment(2) == '')class="active" @endif ><a href="{{ url() }}/admin/dashboard"><i
                            class="fa fa-laptop fa-fw"></i><span class="menu-title">Dashboard</span></a></li>
            @if(in_array('index',unserialize(Auth::user()->accesslist)) || in_array('all',unserialize(Auth::user()->accesslist)))
                <li @if(Request::segment(2) == 'index')class="active" @endif><a href="{{ url() }}/admin/index"><i
                                class="fa fa-home fa-fw"></i><span class="menu-title">Index Page</span></a></li>
            @endif
            @if(in_array('career',unserialize(Auth::user()->accesslist)) || in_array('all',unserialize(Auth::user()->accesslist)))
                <li @if(Request::segment(2) == 'vaccancies' || Request::segment(2) == 'applicants')class="active" @endif>
                    <a href="#"><i class="fa fa-briefcase fa-fw"></i><span class="menu-title">Careers</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li @if(Request::segment(2) == 'vaccancies')class="active" @endif><a
                                    href="{{ url() }}/admin/vaccancies">Vacancies Listing</a></li>
                        <li @if(Request::segment(2) == 'applicants')class="active" @endif><a
                                    href="{{ url() }}/admin/applicants">Online Applicants Listing</a></li>
                    </ul>
                </li>
            @endif
            @if(in_array('pmoil',unserialize(Auth::user()->accesslist)) || in_array('all',unserialize(Auth::user()->accesslist)))
                <li @if(Request::segment(3) == 'company-profile')class="active" @endif><a
                            href="{{ url() }}/admin/company-profile"><i class="fa fa-building fa-fw"></i><span
                                class="menu-title">Company Profile</span></a>
                </li>
            @endif
            @if(in_array('pksoutheast',unserialize(Auth::user()->accesslist)) || in_array('all',unserialize(Auth::user()->accesslist)))
                <li @if(Request::segment(3) == 'company-experiences')class="active" @endif><a
                            href="{{ url() }}/admin/customer-experiences"><i class="fa fa-users fa-fw"></i><span
                                class="menu-title">Customer Experience</span></a>
                </li>
            @endif
            @if(in_array('pkcanpac',unserialize(Auth::user()->accesslist)) || in_array('all',unserialize(Auth::user()->accesslist)))
                <li @if(Request::segment(2) == 'oshpolicy' || Request::segment(2) == 'qualitypolicy' || Request::segment(2) == 'environmentalpolicy' || Request::segment(2) == 'commandment' )class="active" @endif>
                    {{-- <a
                            href="{{ url() }}/admin/quality-assurance"><i class="fa fa-check-square fa-fw"></i><span
                                class="menu-title">Quality Assurance</span></a> --}}

                                <a href="{{ url() }}/admin/quality-assurance"><i class="fa fa-briefcase fa-fw"></i><span class="menu-title">Quality Assurance</span><span
                                    class="fa arrow"></span></a>

                        <ul class="nav nav-second-level">
    
                            <li @if(Request::segment(2) == 'oshpolicy')class="active" @endif><a
                                        href="{{ url() }}/admin/oshpolicy">OSH Policy</a></li>
                            <li @if(Request::segment(2) == 'qualitypolicy')class="active" @endif><a
                                        href="{{ url() }}/admin/qualitypolicy">Quality Policy</a></li>
                            <li @if(Request::segment(2) == 'environmentalpolicy')class="active" @endif><a
                                        href="{{ url() }}/admin/environmentalpolicy">Environmental Policy</a></li>
                            <li @if(Request::segment(2) == 'commandment')class="active" @endif><a
                                        href="{{ url() }}/admin/commandment">Commandment</a></li>
                        </ul>
                </li>
            @endif
            <li class="sidebar-heading"><h4>Global Setup</h4></li>
            @if(in_array('settings',unserialize(Auth::user()->accesslist)) || in_array('all',unserialize(Auth::user()->accesslist)))
                <li @if(Request::segment(2) == 'footer_setup')class="active" @endif><a
                            href="{{ url() }}/admin/footer_setup"><i class="fa fa-check-square fa-fw"></i><span
                                class="menu-title">Footer Setup</span></a>
                </li>
            @endif
           
 @if(in_array('contact',unserialize(Auth::user()->accesslist)) || in_array('all',unserialize(Auth::user()->accesslist)))
                <li class="sidebar-heading"><h4>Contacts</h4></li>
                <li @if(Request::segment(2) == 'contacts')class="active" @endif ><a href="{{ url() }}/admin/contacts/feedbacks"><i
                                class="fa fa-coffee fa-fw"></i><span class="menu-title">Feedback Listing</span></a></li>
                <li @if(Request::segment(2) == 'enquiry_category')class="active" @endif ><a href="{{ url() }}/admin/enquiry_category"><i
                                class="fa fa-bars fa-fw"></i><span class="menu-title">Enquiry category setup</span></a></li>
                <li @if(Request::segment(2) == 'enquiry_email')class="active" @endif ><a href="{{ url() }}/admin/enquiry_email"><i
                                class="fa fa-envelope fa-fw"></i><span class="menu-title">Enquiry Email Setup</span></a></li>
            @endif

            @if(in_array('whatwedo',unserialize(Auth::user()->accesslist)) || in_array('technology',unserialize(Auth::user()->accesslist)) || in_array('all',unserialize(Auth::user()->accesslist)))
                <li class="sidebar-heading"><h4>Services</h4></li>
                @if(in_array('whatwedo',unserialize(Auth::user()->accesslist)) || in_array('all',unserialize(Auth::user()->accesslist)))
                    <li @if(Request::segment(3) == 'paperbags')class="active" @endif><a
                                href="{{ url() }}/admin/business/whatwedo"><i class="fa fa-trash fa-fw"></i><span
                                    class="menu-title">What We Do</span></a>
                    </li>
                @endif
                @if(in_array('technology',unserialize(Auth::user()->accesslist)) || in_array('all',unserialize(Auth::user()->accesslist)))
                    <li @if(Request::segment(3) == 'corrugated')class="active" @endif><a
                                href="{{ url() }}/admin/business/technology"><i class="fa fa-dropbox fa-fw"></i><span
                                    class="menu-title">Technology</span></a>
                    </li>
                @endif
            @endif
            @if(in_array('industries',unserialize(Auth::user()->accesslist)) || in_array('all',unserialize(Auth::user()->accesslist)))
                <li class="sidebar-heading"><h4>Industries</h4></li>
                <li @if(Request::segment(2) == 'industries')class="active" @endif><a
                            href="{{ url() }}/admin/governance/industries"><i
                                class="fa fa-users fa-fw"></i><span
                                class="menu-title">Industries</span></a>
                </li>
            @endif

            @if(Auth::user()->role == 1 || in_array('all',unserialize(Auth::user()->accesslist)))
                <li class="sidebar-heading"><h4>User Management</h4></li>
                <li @if(Request::segment(2) == 'userlist')class="active" @endif><a href="{{ url() }}/admin/userslist"><i
                                class="fa fa-users fa-fw"></i><span class="menu-title">Users Listing</span></a></li>
            @endif
        </ul>
    </div>
</nav>