<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GJDPCU:: Home</title>
	
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('')}}frontend/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('')}}frontend/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('')}}frontend/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('')}}frontend/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('')}}frontend/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('')}}frontend/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('')}}frontend/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('')}}frontend/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('')}}frontend/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('')}}frontend/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('')}}frontend/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('')}}frontend/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('')}}frontend/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{asset('')}}frontend/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- All CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}frontend/css/bootstrap.min.css">
    <!-- dropify -->
    <link rel="stylesheet" href="{{asset('')}}frontend/dropify/dist/css/dropify.min.css">
    <!-- Font awesome icon -->
    <!-- <script src="https://use.fontawesome.com/c228001e6d.js"></script> -->
    <link rel="stylesheet" href="{{asset('')}}frontend/lib/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}frontend/css/style.css">
    
</head>

<body>
    <section class="nav-head">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">

                        <!-- navbar section -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <nav class="navbar navbar-expand-lg custom-nav">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('')}}frontend/img/lg-1.png" class="logo-nav" alt="..."> </a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <!-- <div  class="nav collapse navbar-collapse  justify-content-center" id="navbarSupportedContent"> -->
                                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                            <!--<ul class="navbar-nav me-auto mb-2 mb-lg-0 ">-->
                                            <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('schedule')}}">Program Schedule</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('instruction')}}">Instruction</a>
                                                </li>
                                               
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                   Conference
                                                    </a>
                                                    <ul class="dropdown-menu drop-custom">
                                                        <li><a class="dropdown-item" href="{{route('paper')}}">Call for Papers</a></li>
                                                        <li><a class="dropdown-item" href="{{route('themes')}}">Conference Themes and Areas of Philosophy</a></li>
                                                        <li><a class="dropdown-item" href="{{route('submission')}}">Submission Guidelines and Important Dates</a> </li>
                                                        <li><a class="dropdown-item" href="{{route('register_con')}}">Registration Fee</a></li>
                                                        <li><a class="dropdown-item" href="{{route('contact')}}">Contact</a></li>
                                                        <li><a class="dropdown-item" href="{{route('borchure')}}">Brochure</a> </li>
                                                        
                                                    </ul>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('connect')}}">Contact Us</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" aria-current="page" href="{{route('about')}}">About Us</a>
                                                </li>
                                                @if(session('user')!=null)
                                                <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <img src="{{table('registration','id',session('user'),'image')}}" class="rounded-circle"alt="User" style="width:40px; height:30px">
                                                        </a>
                                                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                                                <li><a class="dropdown-item" href="{{route('event',session('user'))}}">Add Participant</a></li>
                                                                <li><a class="dropdown-item" href="{{route('invoice')}}">Invoice</a></li>
                                                                <li><a class="dropdown-item" href="{{route('profile',session('user'))}}">Payment Summary</a></li>
                                                                <li><a class="dropdown-item" href="{{route('admin.register.edit',session('user'))}}">Profile Update</a></li>
                                                                <li><a class="dropdown-item" href="{{route('password')}}">Password Change</a></li>
                                                               
                                                                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                                                            </ul>
                                                        </li>
                                                        <!-- <li class="nav-item">
                                                            <a class="nav-link" href="{{route('profile',session('user'))}}">Profile</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{route('password')}}">Password Change</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{route('admin.register.edit',session('user'))}}">Profile Update</a>
                                                        </li> -->
                                                @else
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('registration')}}">Registration</a> 
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" >/</a> 
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{route('login')}}">Login</a> 
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </nav> 
                            </div>
                        </div>
                        @yield('content')  
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="footer-body">
                                    <div class="row">
                                    	<div class="col-12">
                                    		<p class="copyright-text text-center">&copy; All right reserved Department of Philosophy.</p>
                                    		<hr>
                                    	</div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-12 col-md-6">
                                    	    <div class="footer-link text-start ms-2">
                                    	        <div class="hstack gap-1">
                                                    <div class=""><a class="" href="{{route('cancel')}}">Cancellation policy</a></div>
                                                    <div class="vr"></div>
                                                    <div class=""><a class="" href="{{route('refund')}}">Refund policy</a></div>
                                                    <div class="vr"></div>
                                                    <div class=""><a class="" href="{{route('privacy')}}">Privacy policy</a></div>
                                                    <div class="vr"></div>
                                                    <div class=""><a class="" href="{{route('tren')}}">Terms & conditions</a></div>
                                                </div>
                                    	    </div>
                                    		
                                    	</div>
                                    	<div class="col-12 col-md-6">
                                    		<div class="text-end me-2 mb-1 aamarpay-footer-logo">
                                    			<img src="{{asset('')}}frontend/img/payment.jpeg" class="img-fluid" style="height:40px" alt="">
                                    		</div>
                                    	</div>
                                    </div>
                                    
                                    <!--
                                    
                                    <div class="row">
                                    	<div class="col-12 col-md-6">
                                    		<nav class="navbar navbar-expand-lg custom-nav">
                                                <div class="container-fluid">
                                                    <div class="nav justify-content-center">
                                                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                                                            
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{route('cancel')}}">Cancellation policy</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{route('refund')}}">Refund policy</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{route('privacy')}}">Privacy policy</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{route('tren')}}">Terms & conditions</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </nav> 
                                    	</div>
                                    	<div class="col-12 col-md-6">
                                    		<div>
                                    			<img src="{{asset('')}}frontend/img/payment.jpeg" class="img-fluid" style="height:40px" alt="">
                                    		</div>
                                    	</div>
                                    </div>
                                    -->
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
            
    </section>
	<script src="{{asset('')}}frontend/js/jquery-3.6.4.min.js" type="text/javascript"></script>
    <script src="{{asset('')}}frontend/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="{{asset('')}}frontend/dropify/dist/js/dropify.min.js"></script>
     <!-- <script src="js/parallax.min.js" type="text/javascript"></script> -->
    <!-- <script src="js/smooth-scroll.min.js" type="text/javascript"></script> -->
    <!-- <script src="js/aos.js" type="text/javascript"></script> -->

    <!-- owl.carousel.min js --> 
    <script src="{{asset('')}}frontend/js/jquery.min.js" type="text/javascript"></script> 
    <!-- <script src="js/owl.carousel.min.js" type="text/javascript"></script>  -->

    <!-- <script src="js/main.js" type="text/javascript"></script> -->
    <script type="text/javascript" src="{{asset('')}}frontend/js/main.js"></script>
    <script>
        $(document).ready(function () {

            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });
        });
    </script>
    @yield('js')  
</body>
</html>