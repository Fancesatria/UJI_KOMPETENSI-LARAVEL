    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/logo2.png') }}">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css" integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @livewireStyles
    </head>
    <body class="home-page home-01 ">

        <!-- mobile menu -->
        <div class="mercado-clone-wrap">
            <div class="mercado-panels-actions-wrap">
                <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
            </div>
            <div class="mercado-panels"></div>
        </div>

        <!--header-->
        <header id="header" class="header header-style-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="topbar-menu-area">
                        <div class="container">
                            <div class="topbar-menu left-menu">
                                <ul>
                                    <li class="menu-item" >
                                        <a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topbar-menu right-menu">
                                <ul>
                                    <li class="menu-item"><a href="{{ route('privacy')}}" class="link-term">Privacy Policy</a></li>
                                    <li class="menu-item"><a href="{{ route('term')}}" class="link-term">Terms & Conditions</a></li>
                                    <li class="menu-item"><a href="{{ route('return')}}" class="link-term">Return Policy</a></li>

                                    @if (Route::has('login'))
                                        @auth
                                            @if (Auth::user()->utype === 'ADM')
                                            <li class="menu-item menu-item-has-children parent" >
                                                <a title="My Account" href="#">My Account ( {{Auth::user()->name}} )<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency" >
                                                    <li class="menu-item" >
                                                        <a title="Dashboard" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.categories') }}" title="Categories">Categories</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.attributes') }}" title="Attributes">Attributes</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.products') }}" title="Products">Products</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.homeslider') }}" title="Manage Home Slider">Manage Home Slider</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.homecategories') }}" title="Manage Home Categories">Manage Home Categories</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.sale') }}" title="Sale Setting">Sale Settings</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.coupons') }}" title="Coupons Setting">Coupons Settings</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.orders') }}" title="All Orders">All Orders</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.contacts') }}" title="Contact Message">Contact Message</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.settings') }}" title="Settings  ">Settings</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                                                        @csrf

                                                    </form>
                                                </ul>
                                            </li>
                                            @elseif (Auth::user()->utype === 'EMP')
                                            <li class="menu-item menu-item-has-children parent" >
                                                <a title="My Account" href="#">My Account ( {{Auth::user()->name}} )<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency" >
                                                    <li class="menu-item" >
                                                        <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.orders') }}" title="All Orders">All Orders</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.sale') }}" title="Sale Setting">Sale Settings</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('admin.contacts') }}" title="Contact Message">Contact Message</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                                                        @csrf

                                                    </form>
                                                </ul>
                                            </li>
                                            @else
                                            <li class="menu-item menu-item-has-children parent" >
                                                <a title="My Account" href="#">My Account ( {{Auth::user()->name}} )<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency" >
                                                    <li class="menu-item" >
                                                        <a title="Dashboard" href="{{ route('user.dashboard') }}">Dashboard</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('user.orders') }}" title="My Orders">My Orders</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('user.changepassword') }}" title="Change Password">Change Password</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('user.profile') }}" title="My Profile">My Profile</a>
                                                    </li>

                                                    <li class="menu-item">
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                    </li>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                                                        @csrf

                                                    </form>
                                                </ul>
                                            </li>
                                            @endif
                                        @else
                                        <li class="menu-item" ><a title="Register or Login" href="{{ route('login') }}">Login</a></li>
                                        <li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="mid-section main-info-area" style="margin-bottom: 4px">

                            <div class="wrap-logo-top left-section" >
                                <a href="/" class="link-to-home"><img src="{{ asset('assets/images/logo2.png') }}" alt="mercado" width="100px"></a>
                            </div>

                            @livewire('header-search-component')

                            <div class="wrap-icon right-section">
                                {{-- Calling wishlist component --}}
                                @livewire('wishlist-count-component')
                                {{-- calling cart count component --}}
                                @livewire('cart-count-component')

                                <div class="wrap-icon-section show-up-after-1024">
                                    <a href="#" class="mobile-navigation">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="nav-section header-sticky">

                        <div class="primary-nav-section">
                            <div class="container">
                                <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                                    <li class="menu-item home-icon">
                                        <a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('aboutus')}}" class="link-term mercado-item-title">About Us</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('/shop') }}" class="link-term mercado-item-title">Shop</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('/cart') }}" class="link-term mercado-item-title">Cart</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('/checkout') }}" class="link-term mercado-item-title">Checkout</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ url('/contact-us') }}" class="link-term mercado-item-title">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{$slot}}

        @livewire('footer-component')

        <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
        <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('assets/js/functions.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        {{-- timer --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/ 2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- nouislider --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js" integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- tinymce = texteditor for textarea --}}
        <script src="https://cdn.tiny.cloud/1/un6uebn6ylqt681bw5klrzgkmp39yiq2qj9o3q0em7fza3ly/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        {{-- Chat --}}
        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="9d4f1908-6f1d-4671-bb1f-1b4c879042c2";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
        @livewireScripts
        @stack('scripts')
    </body>
    </html>
