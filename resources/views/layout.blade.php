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
                background-color: #e1e2e3;
            }
            .header-transparent .is-fixed .menu-bar{
                    position:fixed;
                    background-color:rgba(6, 45, 151, 0.9);
            }
            .header-transparent .menu-bar{
                height: 110px;
                background-color: inherit;
                border: none;
                background: linear-gradient(0deg, rgb(255, 255, 255) 100%, rgba(1, 2, 2, 0) 100%);
            
            }
            @media only screen and (min-width: 991px) {
                .nav > li{
                    height: 50px;
                }
                
                .items {
                    font-size: 8px
                }
            }         
        </style>
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
        <header class="header rs-nav header-transparent fixed-top" >
            <div class="sticky-header navbar-expand-lg fixed-top">
                <div class="menu-bar clearfix">
                    <div class="container clearfix">
                        <!-- Header Logo ==== -->
                        <!-- Mobile Nav Button ==== -->
                        <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <!-- Navigation Menu ==== -->
                        <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                            <div class="menu-logo">
                                <a href="/">
                                    
                                </a>
                            </div>
                            <ul class="nav navbar-nav" >	
                                <li class="nav-dashboard"><a href="javascript:;" style="font-size: 12px;color: black
                                "><b>Home</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu" style="margin-top: 3px">
                                        <li><a href="/news">News</a></li>
                                        <li><a href="/events">Events</a></li>
                                        <li><a href="#">Links</a></li>
                                        <li><a href="/advertisments">Advertisments</a></li>                                        
                                    </ul>
                                </li>
                                <li class="add-mega-menu"><a href="javascript:;" style="font-size: 12px;color: black"><b>About Us</b> <i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu add-menu">
                                        <li class="add-menu-left">
                                            <ul>
                                                <li><a href="/chairman">Chairman Message</a></li>
                                                <li><a href="/president_message">President and Ceo Message</a></li>
                                                <li><a href="/history">Unity University History</a></li>
                                                <li><a href="/vision">University Vision, Mission, Values and Goals</a></li>
                                                <li><a href="#">Unity University Governance</a></li>
                                                <li><a href="#">Office of the President and CEO</a></li>
                                                <li><a href="#">University Resource Administration</a></li>
                                                <li><a href="#">University Academic Support</a></li>
                                            </ul>
                                        </li>
                                        <li class="add-menu-right">
                                            <ul style="list-style: none">
                                                <li><a href="/programs">University Academic Programs</a></li>
                                                <li><a href="/student_services">University Student Services</a></li>
                                                <li><a href="#">Unity University Accreditation</a></li>
                                                <li><a href="#">Alumni Association</a></li>
                                                <li><a href="/campuses">University Campuses</a></li>
                                                <li><a href="#">The Colleges/Faculties</a></li>
                                                <li><a href="#">Univesity Auxiliary Faculties</a></li>
                                                <li><a href="#">University Policies and Procedures</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-dashboard" ><a href="javascript:;" style="font-size: 12px;color: black"><b>Contact Us</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="/campus/alamoudi">Main Office(Gerji)</a></li>
                                        <li><a href="/campuses">Campuses</a></li>
                                        <li><a href="/contact_us">Contact Us</a></li>

                                                                               
                                    </ul>
                                </li>
                                
                                <li class="add-mega-menu" ><a href="javascript:;" style="font-size: 12px;color: black"><b>Admission and Records</b><i class="fa fa-chevron-down"></i></a>
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
                                <li class="add-mega-menu"><a href="javascript:;" style="font-size: 12px;color: black" style="height: 50px;"><b>Academic Services</b><i class="fa fa-chevron-down"></i></a>
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
                                                <li><a href="/library_resource">Library Services</a></li>
                                                <li><a href="/circulation">Circulation</a></li>
                                                <li><a href="#">Computer Workstation</a></li>
                                                <li><a href="#">Copy Service</a></li>
                                            </ul>
                                        </li>
                                        <li class="add-menu-right">
                                            <ul style="list-style: none">
                                                <li><a href="#">Government Documents</a></li>
                                                <li><a href="#">Inter-library Loan</a></li>
                                                <li><a href="#">Music and Media</a></li>
                                                <li><a href="/online_catalogue">Online Catalogue</a></li>
                                                <li><a href="/reserves">Reserves</a></li>
                                                <li><a href="#">Precede</a></li>
                                                <li><a href="#">Reading and Study</a></li>
                                                <li><a href="#">Reference Source</a></li>
                                                <li><a href="#">Students with Disabilities</a></li>
                                                <li><a href="#">Teacher Center</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-dashboard" ><a href="javascript:;" style="font-size: 12px;color: black"><b>Resource Administration Services</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Human Resource Service</a></li>
                                        <li><a href="#">Materials Management Services</a></li>
                                        <li><a href="#">Transportation Services</a></li>
                                        <li><a href="#">Protection Services</a></li>
                                        <li><a href="#">Facility Maintains</a></li>
                                        <li><a href="#">Technical Services</a></li>
                                                                               
                                    </ul>
                                </li>
                                
                                <li class="nav-dashboard" ><a href="javascript:;" style="font-size: 12px;color: black"><b>Academics Higher Education</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="/undergraduate">Undergraduate Studies</a></li>
                                        <li><a href="/postgraduate">Postgraduate Studies</a></li>
                                        <li><a href="/distance_education">Distance Education</a></li>
                                        <li><a href="#">Degree Requirements</a></li>
                                        <li><a href="#">University Policies and Procedures</a></li>
                                        <li><a href="#">Facility</a></li>
                                        <li><a href="#">Mission Statement</a></li>
                                        <li><a href="#">Course List</a></li>
                                        <li><a href="#">Grading</a></li>                                     
                                    </ul>
                                </li>
                                <li class="nav-dashboard" ><a href="javascript:;" style="font-size: 12px;color: black"><b>Academics General Education</b><i class="fa fa-chevron-down"></i></a>
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
                                <li class="nav-dashboard"><a href="javascript:;" style="font-size: 12px;color: black"><b>Academics Specialized Training</b><i class="fa fa-chevron-down"></i></a>
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
                                <li class="nav-dashboard"><a href="javascript:;" style="font-size: 12px;color: black"><b>Online Education</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="#">Undergraduate</a></li>
                                        <li><a href="#">Postgraduate</a></li>                                        
                                    </ul>
                                </li>
                                <li class="nav-dashboard"><a href="javascript:;" style="font-size: 12px;color: black"><b>Research and Community</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        
                                        <li><a href="#">Linkages</a></li>
                                        <li><a href="#">Researches</a></li> 
                                        <li><a href="#">Community Engagement</a></li>
                                        <li><a href="#">Public Relations</a></li> 
                                        <li><a href="#">Publications</a></li>
                                        <li><a href="/voice_of_unity">Voice of Unity</a></li>                                       
                                    </ul>
                                </li>
                                <li class="nav-dashboard"><a href="javascript:;" style="font-size: 12px;color: black"><b>University Enterprises</b><i class="fa fa-chevron-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="/printing_press">Printing Press</a></li>
                                        <li><a href="/clinic">Clinical/Hospital</a></li>
                                        <li><a href="#">Studio</a></li>
                                        <li><a href="/cafeteria">Cafeteria</a></li>
                                        <li><a href="#">Stationary/Bookshops</a></li>
                                        <li><a href="/news/create">Create News</a></li>
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
		</div>
	{{-- </footer> --}}
    
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