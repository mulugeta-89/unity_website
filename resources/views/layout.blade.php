<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="Unity University" />
	
	<!-- OG -->
	<meta property="og:title" content="Unity University" />
	<meta property="og:description" content="Unity University" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{asset("/images/tab-logo.png")}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset("/images/tab-logo.png")}}" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Unity University</title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset("assets.css")}}">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset("typography.css")}}">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset("/shortcodes/shortcodes.css")}}">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset("style.css")}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset("/color/color-1.css")}}">

    {{-- for counter --}}
    
	<!-- REVOLUTION SLIDER CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset("vendors/revolution/css/layers.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("/vendors/revolution/css/settings.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("/vendors/revolution/css/navigation.css")}}">
	<!-- REVOLUTION SLIDER END -->	
	<link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <style>
            body {
                background-color: #343a40;
            }
            .header-transparent .is-fixed .menu-bar{
                    position:fixed;
                    background-color:rgba(6, 45, 151, 0.9);
            }
            .header-transparent .menu-bar{
                height: 110px;
                background-color: inherit;
                border: none;
                background: linear-gradient(180deg, rgb(64, 241, 241) 0%, rgba(1, 2, 2, 0) 100%);
            
            }
            @media only screen and (min-width: 991px) {
                .nav > li{
                    height: 50px;
                }
                
                .items {
                    font-size: 8px
                }
            }
            
            /* This CSS might not be necessary if Bootstrap already includes these classes */
         
        </style>
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
    {{-- <div class="fixed-top"> --}}
        <header class="header rs-nav header-transparent fixed-top" >
            {{-- <div class="top-bar" style="background-color: rgba(6, 45, 151, 0.1); color: rgb(250, 246, 246);">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="topbar-left">
                            <ul>
                                <li><a href="#" style="color: rgb(253, 251, 251);"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
                                <li><a href="#" style="color: rgb(252, 249, 249);" ><i class="fa fa-envelope-o"></i>uuinfo@uu.edu.et</a></li>
                            </ul>
                        </div>
                        <div class="topbar-right">
                            <ul>
                                <li>
                                    <span class="ethiopian-flag"></span><span style="color: rgb(252, 249, 249)"> Ethiopia</span>
                                </li>
                                <li><a href="/"  style="color: red"><b>Announcements</b></a></li>
                                <li><a href="#" style="color: rgb(253, 248, 248)">Students Login</a></li>
                                <li><a href="#" style="color: rgb(252, 248, 248)">Register</a></li>
                                <li><a href="#" style="color: rgb(252, 248, 248)">E-learning</a></li>
                                <li><a href="/contact_us" style="color: rgb(248, 243, 243)">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="sticky-header navbar-expand-lg fixed-top">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">
                        <!-- Header Logo ==== -->
                        {{-- <div class="menu-logo">
                            <a href="/"><img src="{{asset("/unity_photos/logo4.png")}}" alt=""></a>
                        </div> --}}
                        <!-- Mobile Nav Button ==== -->
                        <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Author Nav ==== -->
                        {{-- <div class="secondary-menu">
                            <div class="secondary-inner">
                                <ul>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="javascript:;" class="btn-link"><i class="fa-brands fa-youtube"></i></a></li>
                                    <!-- Search Button ==== -->
                                </ul>
                            </div>
                        </div> --}}
                        <!-- Search Box ==== -->
                        {{-- <div class="nav-search-bar">
                            <form action="#">
                                <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                                <span><i class="ti-search"></i></span>
                            </form>
                            <span id="search-remove"><i class="ti-close"></i></span>
                        </div> --}}
                        <!-- Navigation Menu ==== -->
                        <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                            <div class="menu-logo">
                                <a href="/">
                                    
                                </a>
                            </div>
                            <ul class="nav navbar-nav" >	
                                <li class="nav-dashboard"><a href="javascript:;" style="font-size: 12px;
                                "><b>Home</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu" style="margin-top: 3px">
                                        <li><a href="/news">News</a></li>
                                        <li><a href="/events">Events</a></li>
                                        <li><a href="#">Links</a></li>
                                        <li><a href="#">Advertisments</a></li>                                        
                                    </ul>
                                </li>
                                <li class="add-mega-menu"><a href="javascript:;" style="font-size: 12px"><b>About Us</b> <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu add-menu">
                                        <li class="add-menu-left">
                                            <ul>
                                                <li><a href="#">Chairman Message</a></li>
                                                <li><a href="#">President and Ceo Message</a></li>
                                                <li><a href="#">Unity University History</a></li>
                                                <li><a href="#">University Vision, Mission, Values and Goals</a></li>
                                                <li><a href="#">Unity University Governance</a></li>
                                                <li><a href="#">Office of the President and CEO</a></li>
                                                <li><a href="#">University Resource Administration</a></li>
                                                <li><a href="#">University Academic Support</a></li>
                                            </ul>
                                        </li>
                                        <li class="add-menu-right">
                                            <ul style="list-style: none">
                                                <li><a href="#">University Academic Programs</a></li>
                                                <li><a href="#">University Student Services</a></li>
                                                <li><a href="#">Unity University Accreditation</a></li>
                                                <li><a href="#">Alumni Association</a></li>
                                                <li><a href="#">University Campuses</a></li>
                                                <li><a href="#">The Colleges/Faculties</a></li>
                                                <li><a href="#">Univesity Auxiliary Faculties</a></li>
                                                <li><a href="#">University Policies and Procedures</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-dashboard" ><a href="javascript:;" style="font-size: 12px"><b>Contact Us</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="/campus/alamoudi">Main Office(Gerji)</a></li>
                                        <li><a href="#">Campuses</a></li>
                                                                               
                                    </ul>
                                </li>
                                
                                <li class="add-mega-menu" ><a href="javascript:;" style="font-size: 12px"><b>Admission and Records</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu add-menu">
                                        <li class="add-menu-left">
                                            <ul>
                                                <li><a href="#">Academic Calendar</a></li>
                                                <li><a href="/campuses">University Campuses</a></li>
                                                <li><a href="#">Enrollment Regulations</a></li>
                                                <li><a href="#">Admission Procedures and Policies</a></li>
                                                <li><a href="#">Privacy Rights of Students in Education Records</a></li>
                                                <li><a href="#">Policies on Fairness and Student Conduct</a></li>
                                                <li><a href="#">Institutional and Financial Assitance</a></li>
                                                <li><a href="#">Attendance Policies</a></li>
                                            </ul>
                                        </li>
                                        <li class="add-menu-right">
                                            <ul style="list-style: none">
                                                <li><a href="#">Prerequisites</a></li>
                                                <li><a href="#">Withdrawal</a></li>
                                                <li><a href="#">Grade Reporting</a></li>
                                                <li><a href="#">Transcript</a></li>
                                                <li><a href="#">Fees</a></li>
                                                <li><a href="#">Appeals</a></li>
                                                <li><a href="#">Course Offerings</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="add-mega-menu"><a href="javascript:;" style="font-size: 12px" style="height: 50px;"><b>Academic Services</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu add-menu">
                                        <li class="add-menu-left">
                                            <ul>
                                                <li><a href="#">Library Service</a></li>
                                                <li><a href="#">Laboratory, Computer</a></li>
                                                <li><a href="#">Laboratory, Mechare</a></li>
                                                <li><a href="#">Laboratory, Medical</a></li>
                                                <li><a href="#">Workshops</a></li>
                                                <li><a href="#">Bookstores</a></li>
                                                <li><a href="#">Printing Services</a></li>
                                                <li><a href="#">Library Services</a></li>
                                                <li><a href="#">Circulation</a></li>
                                                <li><a href="#">Computer Workstation</a></li>
                                                <li><a href="#">Copy Service</a></li>
                                            </ul>
                                        </li>
                                        <li class="add-menu-right">
                                            <ul style="list-style: none">
                                                <li><a href="#">Government Documents</a></li>
                                                <li><a href="#">Inter-library Loan</a></li>
                                                <li><a href="#">Music and Media</a></li>
                                                <li><a href="#">Online Catalogue</a></li>
                                                <li><a href="#">Reserves</a></li>
                                                <li><a href="#">Precede</a></li>
                                                <li><a href="#">Reading and Study</a></li>
                                                <li><a href="#">Reference Source</a></li>
                                                <li><a href="#">Students with Disabilities</a></li>
                                                <li><a href="#">Teacher Center</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-dashboard" ><a href="javascript:;" style="font-size: 12px"><b>Resource Administration Services</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Human Resource Service</a></li>
                                        <li><a href="#">Materials Management Services</a></li>
                                        <li><a href="#">Transportation Services</a></li>
                                        <li><a href="#">Protection Services</a></li>
                                        <li><a href="#">Facility Maintains</a></li>
                                        <li><a href="#">Technical Services</a></li>
                                                                               
                                    </ul>
                                </li>
                                
                                <li class="nav-dashboard" ><a href="javascript:;" style="font-size: 12px"><b>Academics Higher Education</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Undergraduate Studies</a></li>
                                        <li><a href="#">Postgraduate Studies</a></li>
                                        <li><a href="#">Distance Education</a></li>
                                        <li><a href="#">Degree Requirements</a></li>
                                        <li><a href="#">University Policies and Procedures</a></li>
                                        <li><a href="#">Facility</a></li>
                                        <li><a href="#">Mission Statement</a></li>
                                        <li><a href="#">Course List</a></li>
                                        <li><a href="#">Grading</a></li>                                     
                                    </ul>
                                </li>
                                <li class="nav-dashboard" ><a href="javascript:;" style="font-size: 12px"><b>Academics General Education</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Kindergarten Education</a></li>
                                        <li><a href="#">Elementaty Education</a></li>
                                        <li><a href="#">High School Education</a></li>
                                        <li><a href="#">Requirements</a></li>
                                        <li><a href="#">University Policies and Procedures</a></li>
                                        <li><a href="#">Staff</a></li>
                                        <li><a href="#">Mission Statement</a></li>
                                        <li><a href="#">Course List</a></li>
                                        <li><a href="#">Grading</a></li>                                     
                                    </ul>
                                </li>
                                <li class="nav-dashboard"><a href="javascript:;" style="font-size: 12px"><b>Academics Specialized Training</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Executive Training</a></li>
                                        <li><a href="#">Testing Services</a></li>
                                        <li><a href="#">Consulting Services</a></li>
                                        <li><a href="#">Credential reg</a></li>
                                        <li><a href="#">Policies and Procedures</a></li>
                                        <li><a href="#">Staff</a></li>
                                        <li><a href="#">Mission Statement</a></li>
                                        <li><a href="#">Course List</a></li>
                                        <li><a href="#">Assessment</a></li>                                     
                                    </ul>
                                </li>
                                <li class="nav-dashboard"><a href="javascript:;" style="font-size: 12px"><b>Online Education</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="#">Undergraduate</a></li>
                                        <li><a href="#">Postgraduate</a></li>                                        
                                    </ul>
                                </li>
                                <li class="nav-dashboard"><a href="javascript:;" style="font-size: 12px"><b>Research and Community</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="#">Links</a></li>
                                        <li><a href="#">Advertisments</a></li> 
                                        <li><a href="#">Community Engagement</a></li>
                                        <li><a href="#">Public Relations</a></li> 
                                        <li><a href="#">Publications</a></li>
                                        <li><a href="#">Voice of Unity</a></li>                                       
                                    </ul>
                                </li>
                                <li class="nav-dashboard"><a href="javascript:;" style="font-size: 12px"><b>University Enterprises</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Printing Press</a></li>
                                        <li><a href="#">Clinical/Hospital</a></li>
                                        <li><a href="#">Studio</a></li>
                                        <li><a href="#">Cafeteria</a></li>
                                        <li><a href="#">Stationary/Bookshops</a></li>
                                    </ul>
                                </li>
                             
                            </ul>
                         
                        </div>
                        <!-- Navigation Menu END ==== -->
                    </div>
                </div>
            </div>
        </header>
    {{-- </div> --}}
    @yield("content")
    {{-- Footer starts here --}}
    {{-- <footer style="background: rgb(29, 28, 28)">
		<div class="footer-top">
			<div class="pt-exebar">
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
							<a href="/"><img src="{{asset("/unity_photos/logo4.png")}}" style="height: 130px; width: 400px" alt=""/></a>
						</div>
						<div class="pt-social-link">
							<ul class="list-inline m-a0">
								<li><a href="javascript:;" class="btn-link"><i class="fa-brands fa-facebook-f"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa-brands fa-twitter"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="javascript:;" class="btn-link"><i class="fa-brands fa-youtube"></i></a></li>
							</ul>
						</div>
						<div class="pt-btn-join">
							<a href="/contact_us" class="btn ">Join Now</a>
						</div>
					</div>
				</div>
			</div>
			{{-- <div class="container" style="text-align: left">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
						<div class="widget">
                            <div class="container">
                                <h3 style="color: white">Contact Us</h3>
                                <form>
                                    <div class="mb-3">
                                        <label for="email" class="form-label" style="color: white">Your Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message" class="form-label" style="color: white">Message</label>
                                        <textarea class="form-control" id="message" rows="3" placeholder="Type your message here"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
						</div>
					</div>
					<div class="col-12 col-lg-5 col-md-7 col-sm-12">
						<div class="row">
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Company</h5>
									<ul>
										<li><a href="/">Home</a></li>
										<li><a href="/campuses">About</a></li>
										<li><a href="#">FAQs</a></li>
										<li><a href="/contact_us">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Get In Touch</h5>
									<ul>
										<li><a href="#">News</a></li>
										<li><a href="/events">Events</a></li>
										<li><a href="/campuses">Campuses</a></li>
										<li><a href="#">Testimonials</li>
                                        <li><a href="/news/create">Post News</li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Programs</h5>
									<ul>
										<li><a href="/undergraduate">Undergraduate</li>
										<li><a href="/postgraduate">Postgraduate</a></li>
										<li><a href="/distance_education">Distance Education</a></li>
                                        <li><a href="/event/create">Post event</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
						<div class="widget widget_gallery gallery-grid-4">
							<h5 class="footer-title">Our Gallery</h5>
							<ul class="magnific-image">
								<li><a href="{{asset("/images/pic1.jpg")}}" class="magnific-anchor"><img src="{{asset("/images/pic1.jpg")}}" alt=""></a></li>
								<li><a href="{{asset("/images/pic2.jpg")}}" class="magnific-anchor"><img src="{{asset("/images/pic2.jpg")}}" alt=""></a></li>
								<li><a href="{{asset("/images/pic3.jpg")}}" class="magnific-anchor"><img src="{{asset("/images/pic3.jpg")}}" alt=""></a></li>
								<li><a href="{{asset("/images/pic4.jpg")}}" class="magnific-anchor"><img src="{{asset("/images/pic4.jpg")}}" alt=""></a></li>
								<li><a href="{{asset("/images/pic5.jpg")}}" class="magnific-anchor"><img src="{{asset("/images/pic5.jpg")}}" alt=""></a></li>
								<li><a href="{{asset("/images/pic6.jpg")}}" class="magnific-anchor"><img src="{{asset("/images/pic6.jpg")}}" alt=""></a></li>
								<li><a href="{{asset("/images/pic7.jpg")}}" class="magnific-anchor"><img src="{{asset("/images/pic7.jpg")}}" alt=""></a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	{{-- </footer> --}}
    <footer class="footer bg-dark text-light py-4 text-center" style="height: 230px">
        <div class="container text-center">
          <div class="row text-center" >
            <h1 class="text-center" style="margin: 40px auto; color: wheat">&copy; 2023 Unity University</h1>
          </div>
        </div>
      </footer>
      
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>

<!-- External JavaScripts -->

<script src="{{asset("/js/header.js")}}"></script>
<script src="{{asset("/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/vendors/bootstrap/js/popper.min.js")}}"></script>
<script src="{{asset("/vendors/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{asset("/vendors/bootstrap-select/bootstrap-select.min.js")}}"></script>
<script src="{{asset("/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js")}}"></script>
<script src="{{asset("/vendors/magnific-popup/magnific-popup.js")}}"></script>
<script src="{{asset("/vendors/counter/waypoints-min.js")}}"></script>
<script src="{{asset("/vendors/counter/counterup.min.js")}}"></script>
<script src="{{asset("/vendors/imagesloaded/imagesloaded.js")}}"></script>
<script src="{{asset("/vendors/masonry/masonry.js")}}"></script>
<script src="{{asset("/vendors/masonry/filter.js")}}"></script>
<script src="{{asset("/vendors/owl-carousel/owl.carousel.js")}}"></script>
<script src="{{asset("/js/functions.js")}}"></script>
<script src="{{asset("/js/contact.js")}}"></script>



<!-- the setting and also the color skin -->
<!-- <script src='assets/vendors/switcher/switcher.js'></script> -->
<!-- Revolution JavaScripts Files -->
<script src="{{asset("/vendors/revolution/js/jquery.themepunch.tools.min.js")}}"></script>
<script src="{{asset("/vendors/revolution/js/jquery.themepunch.revolution.min.js")}}"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset("/vendors/revolution/js/extensions/revolution.extension.actions.min.js")}}"></script>
<script src="{{asset("/vendors/revolution/js/extensions/revolution.extension.carousel.min.js")}}"></script>
<script src="{{asset("/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js")}}"></script>
<script src="{{asset("/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js")}}"></script>
<script src="{{asset("/vendors/revolution/js/extensions/revolution.extension.migration.min.js")}}"></script>
<script src="{{asset("/vendors/revolution/js/extensions/revolution.extension.navigation.min.js")}}"></script>
<script src="{{asset("/vendors/revolution/js/extensions/revolution.extension.parallax.min.js")}}"></script>
<script src="{{asset("/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js")}}"></script>
<script src="{{asset("/vendors/revolution/js/extensions/revolution.extension.video.min.js")}}"></script>
<script src="{{asset("/js/bottom.js")}}"></script>

</body>

</html>