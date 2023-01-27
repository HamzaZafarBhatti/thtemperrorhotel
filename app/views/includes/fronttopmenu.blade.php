<nav class="primary clearfix">
							<!-- Menu -->
							<ul class="sf-menu">
								<li @if(Request::segment(1) == '')class="current-menu-item" @endif><a href="{{ url()}}">Home</a></li>
								<li @if(Request::segment(1) == 'company')class="current-menu-item" @endif><a href="#">Company</a>
									<ul>
										<li><a href="{{ url()}}/company/companyhistory">Company History</a></li>
                                        <li><a href="{{ url()}}/company/corporateinformation">Corporate Information</a></li>
                                        <li><a href="{{ url()}}/company/corporatestructure">Corporate Structure</a></li>
										<li><a href="{{ url()}}/company/corporatephilosophy">Corporate Philosophy</a></li>
										<li><a href="{{ url()}}/company/corporatevision">Corporate Vision</a></li>
                                        <li><a href="{{ url()}}/company/corporatesocialresponsibility">Corporate Social Responsibility</a></li>
                                        <li><a href="{{ url()}}/company/careers">Careers</a></li>
									</ul>
							  	 </li>
                                 <li @if(Request::segment(1) == 'manufacturing')class="current-menu-item" @endif><a href="#">Manufacturing</a>
									<ul>
										<li><a href="#">Packaging Division</a>
                                        	<ul>
                                            	<li><a href="{{ url()}}/manufacturing/packaging/canpac">Canpac Sdn Bhd</a></li>
                                                <li><a href="{{ url()}}/manufacturing/packaging/southeast">South East Asia Paper Products Sdn Bhd</a></li>
                                            </ul>
                                        </li>
										<li><a href="#">Palm Oil Refinery Division</a>
                                        	<ul>
                                            	<li><a href="{{ url()}}/manufacturing/palmoil/refinery">Yee Lee Edible Oils Sdn Bhd</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Palm Oil Mill Division</a>
                                        	<ul>
                                            	<li><a href="{{ url()}}/manufacturing/palmoil/mill">Yee Lee Palm Oil Industries Sdn Bhd</a></li>
                                            </ul>
                                        </li>
									</ul>
								</li>
                                <li @if(Request::segment(1) == 'trading')class="current-menu-item" @endif><a href="#">Trading</a>
                                	<ul>
                                        <li><a href="#">Trading Division</a>
                                            <ul>
                                                <li><a href="{{ url() }}/trading/tradingdivision/yelee">Yee Lee Trading Co. Sdn Bhd</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
								<li @if(Request::segment(1) == 'plantation')class="current-menu-item" @endif><a href="#">Plantation</a>
                                	<ul>
										<li><a href="#">Oil Palm Estate</a>
                                        	<ul>
                                            	<li><a href="{{ url() }}/plantation/oilpalmestate">Sementra Plantations Sdn Bhd</a></li>
                                            </ul>
                                        </li>
										<li><a href="#">Tea Plantation</a>
                                        	<ul>
                                            	<li><a href="{{ url() }}/plantation/teaplantation">Desa Tea Sdn Bhd</a></li>
                                            </ul>
                                        </li>
									</ul>
                                </li>
                                <li @if(Request::segment(1) == 'hospitality')class="current-menu-item" @endif><a href="#">Hospitality</a>
									<ul>
										<li><a href="#">Hospitality Division</a>
                                        	<ul>
                                            	<li><a href="{{ url() }}/hospitality/hospitalitydivision">Sabah Tea Resort Sdn Bhd</a></li>
                                            </ul>
                                        </li>
									</ul>
								</li>
                                
								<li @if(Request::segment(1) == 'investorrelations')class="current-menu-item" @endif><a href="#">Investor Relations</a>
                                  <ul>
										<li><a href="{{ url()}}/investorrelations/announcements">Announcements</a></li>
                                        <li><a href="{{ url()}}/investorrelations/annualreports">Annual Reports</a></li>
									  	<li><a href="{{ url()}}/investorrelations/board_charter">Corporate Governance</a></li>
									  	<li><a href="{{ url()}}/investorrelations/pressrelease">Press Release</a></li>
									</ul>
                                </li>
                                <li @if(Request::segment(1) == 'contacts')class="current-menu-item" @endif><a href="#">Contacts</a>
									<ul>
										<li><a href="{{ url()}}/contacts/contactus">Contact Us</a></li>
										<li><a href="{{ url()}}/contacts/feedback">Feedback</a></li>
									</ul>
								</li>
							</ul>
							<!-- Menu / End -->
						</nav>