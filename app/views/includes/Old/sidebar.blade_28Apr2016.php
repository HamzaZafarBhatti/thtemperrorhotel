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
                  <li @if(Request::segment(2) == '')class="active" @endif ><a href="{{ url() }}/admin/dashboard"><i class="fa fa-laptop fa-fw"></i><span class="menu-title">Dashboard</span></a></li>
                 @if(in_array('index',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li @if(Request::segment(2) == 'index')class="active" @endif><a href="{{ url() }}/admin/index"><i class="fa fa-home fa-fw"></i><span class="menu-title">Index Page</span></a> </li>
                 @endif
                  @if(in_array('career',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
		  <li @if(Request::segment(2) == 'vaccancies' || Request::segment(2) == 'applicants')class="active" @endif><a href="#"><i class="fa fa-briefcase fa-fw"></i><span class="menu-title">Careers</span><span class="fa arrow"></span></a>	
                      <ul class="nav nav-second-level">
					    
                        <li @if(Request::segment(2) == 'vaccancies')class="active" @endif><a href="{{ url() }}/admin/vaccancies">Vacancies Listing</a></li>
                        <li @if(Request::segment(2) == 'applicants')class="active" @endif><a href="{{ url() }}/admin/applicants">Online Applicants Listing</a></li>
                      </ul>
                  </li>
                  @endif
                  
                   @if(in_array('contact',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li class="sidebar-heading"><h4>Contacts</h4></li>
                  <li @if(Request::segment(2) == 'contacts')class="active" @endif><a href="#"><i class="fa fa-map-marker fa-fw"></i><span class="menu-title">Contact Us</span><span class="fa arrow"></span></a>
					  <ul class="nav nav-second-level">
					  
                          <li @if(Request::segment(3) == 'contactus')class="active" @endif><a href="{{ url() }}/admin/contacts/contactus">Contact Us</a></li>
                          <li @if(Request::segment(3) == 'feedbacks')class="active" @endif><a href="{{ url() }}/admin/contacts/feedbacks">Feedback Listing</a></li>
                    </ul>
                  </li>
                  
                  @endif
                    @if(in_array('pkcanpac',Session::get('accesslist')) || in_array('pksoutheast',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li class="sidebar-heading"><h4>Manufacturing</h4></li>
                  @endif
            	   @if(in_array('pkcanpac',Session::get('accesslist')) || in_array('pksoutheast',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li @if(Request::segment(3) == 'packaging')class="active" @endif><a href="#"><i class="fa fa-archive fa-fw"></i><span class="menu-title">Packaging Division</span><span class="fa arrow"></span></a>
                  	 <ul class="nav nav-second-level">
			 @if(in_array('pkcanpac',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))		   
                       <li @if(Request::segment(4) == 'canpac')class="active" @endif><a href="{{ url() }}/admin/manufacturing/packaging/canpac">Canpac Sdn Bhd</a></li>
                       @endif
                        @if(in_array('pksoutheast',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                       <li @if(Request::segment(4) == 'southeast')class="active" @endif><a href="{{ url() }}/admin/manufacturing/packaging/southeast">South East Asia Paper Products Sdn Bhd</a></li>
                       @endif
                     </ul>
                  </li>
                  @endif
		 @if(in_array('pmoil',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li @if(Request::segment(4) == 'refinery')class="active" @endif><a href="#"><i class="fa fa-fire fa-fw"></i><span class="menu-title">Palm Oil Refinery Division</span><span class="fa arrow"></span></a>
                  	  <ul class="nav nav-second-level"> 	
					   
                        <li @if(Request::segment(4) == 'refinery')class="active" @endif><a href="{{ url() }}/admin/manufacturing/palmoil/refinery">Yee Lee Edible Oils Sdn Bhd</a></li>
                        
                      </ul>
                  </li>
                  @endif
                   @if(in_array('pmmill',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li @if(Request::segment(4) == 'mill')class="active" @endif><a href="#"><i class="fa fa-tint fa-fw"></i><span class="menu-title">Palm Oil Mill Division</span><span class="fa arrow"></span></a>
                  	<ul class="nav nav-second-level">
				  
                      <li @if(Request::segment(4) == 'mill')class="active" @endif><a href="{{ url() }}/admin/manufacturing/palmoil/mill">Yee Lee Palm Oil Industries Sdn Bhd</a></li>
                    </ul>
                  </li>
                  @endif
                  
                   @if(in_array('trading',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li class="sidebar-heading"><h4>Trading</h4></li>
                  <li @if(Request::segment(2) == 'trading')class="active" @endif><a href="#"><i class="fa fa-truck fa-fw"></i><span class="menu-title">Trading Division</span><span class="fa arrow"></span></a>
					  <ul class="nav nav-second-level">
					  
                          <li @if(Request::segment(3) == 'yeelee')class="active" @endif><a href="{{ url() }}/admin/trading/yeelee">Yee Lee Trading Co. Sdn Bhd</a></li>
                    </ul>
                  </li>
                  @endif
                  
                   @if(in_array('sementra',Session::get('accesslist')) || in_array('desa',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li class="sidebar-heading"><h4>Plantation</h4></li>
                  @endif
                  @if(in_array('sementra',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li @if(Request::segment(2) == 'plantation')class="active" @endif><a href="#"><i class="fa fa-lemon-o fa-fw"></i><span class="menu-title">Oil Palm Estate</span><span class="fa arrow"></span></a>
                  	 <ul class="nav nav-second-level">
					   
                       <li @if(Request::segment(3) == 'sementra')class="active" @endif><a href="{{ url() }}/admin/plantation/sementra">Sementra Plantations Sdn Bhd</a></li>
                     </ul>
                  </li>
                  @endif
                   @if(in_array('desa',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
				   <li @if(Request::segment(2) == 'teaplantation')class="active" @endif><a href="#"><i class="fa fa-leaf fa-fw"></i><span class="menu-title">Tea Plantation</span><span class="fa arrow"></span></a>
                   	<ul class="nav nav-second-level">
					   
                      <li @if(Request::segment(3) == 'teaplantation')class="active" @endif><a href="{{ url() }}/admin/teaplantation/teaplantation">Desa Tea Sdn Bhd</a></li>
                    </ul>
                  </li>  
                  @endif
                   @if(in_array('sabah',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li class="sidebar-heading"><h4>Hospitality</h4></li>
                  <li @if(Request::segment(2) == 'hospitality')class="active" @endif><a href="#"><i class="fa fa-home fa-fw"></i><span class="menu-title">Hospitality Division</span><span class="fa arrow"></span></a>
                  	<ul class="nav nav-second-level">
					  
                      <li @if(Request::segment(3) == 'hospitality')class="active" @endif><a href="{{ url() }}/admin/hospitality/hospitality">Sabah Tea Resort Sdn Bhd</a></li>
                    </ul>
                  </li>
                  @endif
                   @if(in_array('announcements',Session::get('accesslist')) || in_array('annualreports',Session::get('accesslist')) || in_array('pressreleases',Session::get('accesslist'))|| in_array('all',Session::get('accesslist')))
                  <li class="sidebar-heading"><h4>Investor Relations</h4></li>
                  @endif
                   @if(in_array('announcements',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li @if(Request::segment(3) == 'announcements')class="active" @endif><a href="{{ url() }}/admin/company/announcements"><i class="fa fa-bullhorn fa-fw"></i><span class="menu-title">Announcements</span></a></li>
                  @endif
                   @if(in_array('annualreports',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li @if(Request::segment(3) == 'reports')class="active" @endif><a href="{{ url() }}/admin/annual/reports"><i class="fa fa-book fa-fw"></i><span class="menu-title">Annual Reports</span></a></li>
                  @endif
                    @if(in_array('boardcharter',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li @if(Request::segment(3) == 'charter')class="active" @endif><a href="{{ url() }}/admin/board/charter"><i class="fa fa-book fa-fw"></i><span class="menu-title">Corporate Governance</span></a></li>
                  @endif
                   @if(in_array('pressreleases',Session::get('accesslist')) || in_array('all',Session::get('accesslist')))
                  <li @if(Request::segment(3) == 'pressrelease')class="active" @endif><a href="{{ url() }}/admin/investor/pressrelease"><i class="fa fa-file fa-fw"></i><span class="menu-title">Press Release</span></a></li>
                  @endif
                  
                  @if(Auth::user()->role == 1 )
                  <li class="sidebar-heading"><h4>User Management</h4></li>
                  <li @if(Request::segment(2) == 'userlist')class="active" @endif><a href="{{ url() }}/admin/userslist"><i class="fa fa-users fa-fw"></i><span class="menu-title">Users Listing</span></a></li
                  @endif
              ></ul>
          </div>
    </nav>