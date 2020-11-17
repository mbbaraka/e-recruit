<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Mirrored from grandetest.com/theme/jobhunt-html/index8.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 18:53:50 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Online Recruitment System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="CreativeLayers">

        <!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-grid.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/colors/colors.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/../../../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') }}" />

    </head>
    <body>

    {{-- <div class="page-loading">
        <img src="images/loader.gif" alt="" />
        <span>Skip Loader</span>
    </div> --}}

    <div class="theme-layout" id="scrollup">

        <div class="responsive-header five">
            <div class="responsive-menubar">
                <div class="res-logo"><a href="{{ url('/') }}" title=""><img src="{{ asset('logo.png') }}" alt="" /></a></div>
                <div class="menu-resaction">
                    <div class="res-openmenu">
                        <img src="{{ asset('assets/images/icon.png') }}" alt="" /> Menu
                    </div>
                    <div class="res-closemenu">
                        <img src="{{ asset('assets/images/icon2.png') }}" alt="" /> Close
                    </div>
                </div>
            </div>
            <div class="responsive-opensec">
                <div class="btn-extars">
                    <ul class="account-btns">
                        @auth
                        <a href="{{ url('/home') }}">Hi, {{ Auth::user()->first_name }}</a>
                        @else
                            <li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>

                            @if (Route::has('register'))
                            <li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
                            @endif
                        @endauth
                    </ul>
                </div><!-- Btn Extras -->
                <form class="res-search">
                    <input type="text" placeholder="Job title, keywords or company name" />
                    <button type="submit"><i class="la la-search"></i></button>
                </form>
                <div class="responsivemenu">
                    <ul>
                            <li class="menu-item-has-children">
                                <a href="#" title="">Home</a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>

        <header class="style5">
            <div class="menu-sec">
                <div class="container fluid">
                    <nav>
                        <ul>
                            <li class="menu-item">
                                <a href="#" title="">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" title="">Opportunity Listings</a>
                            </li><li class="menu-item">
                                <a href="#" title="">About us</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" title="">Contact us</a>
                            </li>
                        </ul>
                    </nav><!-- Menus -->
                    <div class="logo">
                        <a href="index.html" title=""><img src="{{ asset('logo.png') }}" alt="" /></a>
                    </div><!-- Logo -->
                    <div class="btn-extars">
                        <ul class="account-btns">
                            @auth
                            <li><a href="#"><i class="la la-home"></i> My Account</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="la la-power-off"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            @else
                                <li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>

                                @if (Route::has('register'))
                                <li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
                                @endif
                            @endauth
                        </ul>
                    </div><!-- Btn Extras -->
                </div>
            </div>
        </header>

        <section>
            <div class="block double-gap-top double-gap-bottom">
                <div data-velocity="-.1" style="background: url(images/resource/bg3.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer blackish"></div><!-- PARALLAX BACKGROUND IMAGE -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-location-sec">
                                <h3><strong>Great Job</strong> Greater Talent</h3>
                                <form>
                                    <div class="field-lct">
                                        <input type="text" placeholder="Search Keywords" />
                                    </div>
                                    <div class="field-lct sl">
                                        <input type="text" placeholder="Location" />
                                        <i class="la la-location-arrow"></i>
                                    </div>
                                    <button type="submit"><i class="la la-search"></i></button>
                                    <a href="#" title="">+ Advance Search</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading">
                                <h2>Popular Categories</h2>
                            </div><!-- Heading -->
                            <div class="cat-sec style2">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="p-category style2 gray">
                                            <a href="#" title="">
                                                <i class="la la-bullhorn"></i>
                                                <span>Design, Art & Multimedia</span>
                                                <p>(22 open positions)</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="p-category style2 gray">
                                            <a href="#" title="">
                                                <i class="la la-graduation-cap"></i>
                                                <span>Education Training</span>
                                                <p>(6 open positions)</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="p-category style2 gray">
                                            <a href="#" title="">
                                                <i class="la la-line-chart "></i>
                                                <span>Accounting / Finance</span>
                                                <p>(3 open positions)</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="p-category style2 gray">
                                            <a href="#" title="">
                                                <i class="la la-users"></i>
                                                <span>Human Resource</span>
                                                <p>(3 open positions)</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block remove-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 column">
                            <div class="heading left">
                                <h2>Featured Jobs</h2>
                            </div><!-- Heading -->
                            <div class="job-listings-sec style2">
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                        <span>Massimo Artemisis</span>
                                        <span class="job-lctn">California</span>
                                    </div>
                                    <a href="#" title="" class="aply-btn">Appy Now</a>
                                    <span class="job-is ft">FULL TIME</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                </div><!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="images/resource/l2.png" alt="" /> </div>
                                        <h3><a href="#" title="">Marketing Director</a></h3>
                                        <span>Tix Dog</span>
                                        <span class="job-lctn">Rennes, France</span>
                                    </div>
                                    <a href="#" title="" class="aply-btn">Appy Now</a>
                                    <span class="job-is pt">PART TIME</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                </div><!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="images/resource/l3.png" alt="" /> </div>
                                        <h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
                                        <span>StarHealth</span>
                                        <span class="job-lctn">United Kingdom</span>
                                    </div>
                                    <a href="#" title="" class="aply-btn">Appy Now</a>
                                    <span class="job-is ft">FULL TIME</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                </div><!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="images/resource/l4.png" alt="" /> </div>
                                        <h3><a href="#" title="">Application Developer</a></h3>
                                        <span>Altes Bank</span>
                                        <span class="job-lctn">Turkey</span>
                                    </div>
                                    <a href="#" title="" class="aply-btn">Appy Now</a>
                                    <span class="job-is fl">FREELANCE</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                </div><!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="images/resource/l5.png" alt="" /> </div>
                                        <h3><a href="#" title="">Regional Sales Manager</a></h3>
                                        <span class="job-lctn">Ontario</span>
                                    </div>
                                    <a href="#" title="" class="aply-btn">Appy Now</a>
                                    <span class="job-is tp">TEMPORARY</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                </div><!-- Job -->
                                <div class="job-listing">
                                    <div class="job-title-sec">
                                        <div class="c-logo"> <img src="images/resource/l6.png" alt="" /> </div>
                                        <h3><a href="#" title="">Social Media and Public</a></h3>
                                        <span>MediaLab</span>
                                        <span class="job-lctn">Turkey</span>
                                    </div>
                                    <a href="#" title="" class="aply-btn">Appy Now</a>
                                    <span class="job-is ft">FULL TIME</span>
                                    <span class="fav-job"><i class="la la-heart-o"></i></span>
                                </div><!-- Job -->
                            </div>
                        </div>
                        <div class="col-lg-3 column">
                            <div class="heading left">
                                <h2>Recent Jobs</h2>
                            </div><!-- Heading -->
                            <div class="job-grid-sec">
                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                        <div class="job-grid style2">
                                            <div class="job-title-sec">
                                                <div class="c-logo"> <img src="images/resource/jg1.png" alt="" /> </div>
                                                <h3><a href="#" title="">Web Designer / Developer</a></h3>
                                                <span>Massimo Artemisis</span>
                                            </div>
                                            <span class="job-lctn">Sacramento, California</span>
                                            <p>Offer strategic and technical health and nutrition advice to headquarters and field staff, as well as training</p>
                                            <div class="grid-info-box">
                                                <span class="job-is">Full Time</span>
                                                <a  href="#" title="">APPLY NOW</a>
                                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                            </div>
                                        </div><!-- JOB Grid -->
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                        <div class="job-grid style2">
                                            <div class="job-title-sec">
                                                <div class="c-logo"> <img src="images/resource/jg2.png" alt="" /> </div>
                                                <h3><a href="#" title="">Marketing Director</a></h3>
                                                <span>MediaLab</span>
                                            </div>
                                            <span class="job-lctn">Sacramento, California</span>
                                            <p>Offer strategic and technical health and nutrition advice to headquarters and field staff, as well as training</p>
                                            <div class="grid-info-box">
                                                <span class="job-is">Full Time</span>
                                                <a  href="#" title="">APPLY NOW</a>
                                                <span class="fav-job"><i class="la la-heart-o"></i></span>
                                            </div>
                                        </div><!-- JOB Grid -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block no-padding">
                <div data-velocity="-.1" style="background: url(images/resource/parallax1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color green2"></div><!-- PARALLAX BACKGROUND IMAGE -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 column">
                            <div class="detailbar">
                                <h3>Are You Hiring?</h3>
                                <p>Find everything you need to post a job and receive the best candidates by visiting our Empl oyer website. We offer small business and enterprise options.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 column">
                            <div class="detalbr-mkp">
                                <img src="{{ asset('assets/images/resource/mockup4.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="style3">
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 column">
                            <div class="widget">
                                <div class="about_widget">
                                    <div class="logo">
                                        <a href="#" title=""><img src="{{ asset('assets/images/resource/logo9.png') }}" alt="" /></a>
                                    </div>
                                    <span>Collin Street West, Victor 8007, Australia.</span>
                                    <span>+1 246-345-0695</span>
                                    <span><a href="mailto('hello@gmail.com')" class="__cf_email__" data-cfemail="5d34333b321d37323f35283329733e3230">[email&#160;protected]</a></span>
                                    <div class="social">
                                        <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                        <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                        <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                                        <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                        <a href="#" title=""><i class="fa fa-behance"></i></a>
                                    </div>
                                </div><!-- About Widget -->
                            </div>
                        </div>
                        <div class="col-lg-4 column">
                            <div class="widget">
                                <h3 class="footer-title">Frequently Asked Questions</h3>
                                <div class="link_widgets2">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="#" title="">Privacy & Seurty </a>
                                            <a href="#" title="">Terms of Serice</a>
                                            <a href="#" title="">Communications </a>
                                            <a href="#" title="">Referral Terms </a>
                                            <a href="#" title="">Lending Licnses </a>
                                            <a href="#" title="">Disclaimers </a>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="#" title="">Support </a>
                                            <a href="#" title="">How It Works </a>
                                            <a href="#" title="">For Employers </a>
                                            <a href="#" title="">Underwriting </a>
                                            <a href="#" title="">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 column">
                            <div class="widget">
                                <h3 class="footer-title">Find Jobs</h3>
                                <div class="link_widgets2">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="#" title="">US Jobs</a>
                                            <a href="#" title="">Canada Jobs</a>
                                            <a href="#" title="">UK Jobs</a>
                                            <a href="#" title="">Emplois en Fnce</a>
                                            <a href="#" title="">Jobs in Deuts</a>
                                            <a href="#" title="">Vacatures China</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 column">
                            <div class="widget">
                                <div class="download_widget">
                                    <a href="#" title=""><img src="{{ asset('assets/images/resource/di.png') }}" alt="" /></a>
                                    <a href="#" title=""><img src="{{ asset('assets/images/resource/di2.png') }}" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-line style3">
                <div class="container">
                    <span>© Online Recruitment System</span>
                    <a class="back-top" href="#scrollup" title=""><i class="la la-long-arrow-up"></i></a>
                </div>
            </div>
        </footer>

    </div>

    <div class="account-popup-area signin-popup-box">
        <div class="account-popup">
            <span class="close-popup"><i class="la la-close"></i></span>
            <h3>User Login</h3>
            <form>
                <div class="cfield">
                    <input type="text" placeholder="Email" />
                    <i class="la la-envelope-o"></i>
                </div>
                <div class="cfield">
                    <input type="password" placeholder="********" />
                    <i class="la la-key"></i>
                </div>
                <p class="remember-label">
                    <input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
                </p>
                <a href="#" title="">Forgot Password?</a>
                <button type="submit">Login</button>
            </form>
        </div>
    </div><!-- LOGIN POPUP -->

    <div class="account-popup-area signup-popup-box">
        <div class="account-popup">
            <span class="close-popup"><i class="la la-close"></i></span>
            <h3>Sign Up</h3>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="cfield">
                    <input type="text" name="email" class="@error('email') is-invalid @enderror" placeholder="Email" />
                    <i class="la la-envelope-o"></i>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="cfield">
                    <input type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Password" />
                    <i class="la la-key"></i>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="cfield">
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" />
                    <i class="la la-key"></i>
                </div>
                <button type="submit">Signup</button>
            </form>
        </div>
    </div><!-- SIGNUP POPUP -->
    <script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/modernizr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('asset/js/parallax.js') }}" type="text/javascript"></script>
    <script src="{{ asset('asset/js/select-chosen.js') }}" type="text/javascript"></script>
    <script src="{{ asset('asset/js/counter.js') }}" type="text/javascript"></script>

    </body>

    <!-- Mirrored from grandetest.com/theme/jobhunt-html/index8.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 18:53:52 GMT -->
    </html>


