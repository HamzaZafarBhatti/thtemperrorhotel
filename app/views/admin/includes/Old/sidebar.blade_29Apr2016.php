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

                  <li @if(Request::segment(2) == 'index')class="active" @endif><a href="{{ url() }}/admin/index"><i class="fa fa-home fa-fw"></i><span class="menu-title">Index Page</span></a> </li>
          <li @if(Request::segment(2) == 'vaccancies' || Request::segment(2) == 'applicants')class="active" @endif><a href="#"><i class="fa fa-briefcase fa-fw"></i><span class="menu-title">Careers</span><span class="fa arrow"></span></a> 
                      <ul class="nav nav-second-level">
              
                        <li @if(Request::segment(2) == 'vaccancies')class="active" @endif><a href="{{ url() }}/admin/vaccancies">Vacancies Listing</a></li>
                        <li @if(Request::segment(2) == 'applicants')class="active" @endif><a href="{{ url() }}/admin/applicants">Online Applicants Listing</a></li>
                      </ul>
                  </li>

                  
                  <li class="sidebar-heading"><h4>Contacts</h4></li>
                  <li @if(Request::segment(3) == 'feedbacks')class="active" @endif><a href="{{ url() }}/admin/contacts/feedbacks"><i class="fa fa-coffee fa-fw"></i><span class="menu-title">Feedback Listing</span></a></li>
                  
                  <li class="sidebar-heading"><h4>Business</h4></li>
             <li @if(Request::segment(3) == 'paperbags')class="active" @endif><a href="{{ url() }}/admin/business/paperbags"><i class="fa fa-archive fa-fw"></i><span class="menu-title">Multiwall Industrial Paper Bags</span></a></li>      
             <li @if(Request::segment(3) == 'corrugated')class="active" @endif><a href="{{ url() }}/admin/business/corrugated"><i class="fa fa-dropbox fa-fw"></i><span class="menu-title">Corrugated Carton Boxes</span></a></li>      

                  <li class="sidebar-heading"><h4>Investor Relations</h4></li>
                  <li @if(Request::segment(3) == 'charter' || Request::segment(3) == 'audit' || Request::segment(3) == 'nomination')class="active" @endif><a href="#"><i class="fa fa-list-alt fa-fw"></i><span class="menu-title">Corporate Governance</span><span class="fa arrow"></span></a>  
                      <ul class="nav nav-second-level">
              
                        <li @if(Request::segment(3) == 'charter')class="active" @endif><a href="{{ url() }}/admin/governance/charter">Board Charter</a></li>
                        <li @if(Request::segment(3) == 'audit')class="active" @endif><a href="{{ url() }}/admin/governance/audit">Terms of Reference of Audit Committee</a></li>
                        <li @if(Request::segment(3) == 'nomination')class="active" @endif><a href="{{ url() }}/admin/governance/nomination">Terms of Reference of Nomination &amp; Remuneration Committee</a></li>
                      </ul>
                  </li>
                  <li @if(Request::segment(3) == 'reports')class="active" @endif><a href="{{ url() }}/admin/annual/reports"><i class="fa fa-line-chart fa-fw"></i><span class="menu-title">Financial Information</span></a></li>
                  <li @if(Request::segment(3) == 'announcements')class="active" @endif><a href="{{ url() }}/admin/company/announcements"><i class="fa fa-bullhorn fa-fw"></i><span class="menu-title">Announcements</span></a></li>
              </ul>
          </div>
    </nav>