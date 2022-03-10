<!-- ======= Header ======= -->
<header id="header" class="fixed-tops d-flex align-items-center header-transparent header-element">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <!-- Uncomment below if you prefer to use an image logo
           <h1 class="text-light"><a href="index.html"><span>Teltik</span></a></h1>
          -->
            <a href="{{ url('/') }}">
                <img src="{{ asset('theme/onePlus/new_logo.png') }}"
                     alt="" class="img-fluid"></a>
        </div>

        <!-- Small button group -->
        <div class="btn-group">
            <button class="btn-sm dropdown-toggle mobile-dropdown-toggle d-sm-none" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                <span class="bar bar-1 display-block"></span>
                <span class="bar bar-2 display-block"></span>
                <span class="bar bar-3 display-block"></span>
            </button>


            <ul class="dropdown-menu mob-dropdown-menu d-sm-none">
                <li class="{{ setActiveNav('', 'active-nav-menu') }}" onclick="location.href='/';">
                    <span>HOME</span>
                </li>
                <li class="{{ setActiveNav('plans', 'active-nav-menu') }}"  onclick="location.href='/plans';">
                    <span>PLANS</span>
                </li>
                <li class="{{ setActive('support', 'active-nav-menu') }}" onclick="location.href='/one-touch-support';">
                    SUPPORT
                </li>
{{--                <li class="{{ setActive('coverage', 'active') }}">COVERAGE</li>--}}
{{--                <li class="{{ setActive('faq', 'active') }}">FAQ</li>--}}
                @if (session('id'))
                    <div class="loggedin">
                        <li onclick="location.href='/account';"
                            class="button button-gradient button-big-rounded mb-4 mb-sm-0 w-75 ml-3">
                            ACCOUNT
                        </li>
                        <span> &nbsp;&nbsp;</span>
                        <li onclick="location.href='/sign-out';"
                            class="button button-gradient button-big-rounded w-75 ml-3 mb-4">
                            LOG OUT
                        </li>
                    </div>
                @else
                    <li href="#" class="button button-gradient button-big-rounded mobile-login-button mb-3"
                        onclick="loginClicked()">
                        LOGIN
                    </li>
                @endif
            </ul>
        </div>

{{--        <div--}}
{{--            class="collapse navbar-collapse align-items-center"--}}
{{--            id="navbarNav"--}}
{{--        >--}}
{{--            <!-- Menu Links -->--}}
{{--            <ul class="navbar-nav m-auto">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link active" aria-current="page" href="/">HOME</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">PLANS</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="/one-touch-support">SUPPORT</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">COVERAGE</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="pages/page-5.html">FAQ</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <!-- Login and Cart -->--}}
{{--            <div class="login-and-cart-box d-flex align-items-center">--}}
{{--                <div class="header_cart_se d-none"--}}
{{--                     id="header-cart-element">@include('cart.one-touch-header-cart-items')</div>--}}

{{--                <div class="cart position-relative me-4 d-none d-sm-block">--}}
{{--                        <span class="btn-cart" role="button" onclick="hamburgerClicked()">--}}
{{--                            <i class="fas fa-shopping-cart"></i>--}}
{{--                        </span>--}}
{{--                    <div class="badge position-absolute">--}}
{{--                        @if(session('cart') && count(session('cart')))--}}
{{--                            {{ session('cart') ? count(session('cart')['order_groups']) : '' }}--}}
{{--                        @else--}}
{{--                            0--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                @if (session('id'))--}}
{{--                    <div class="loggedin">--}}
{{--                        <a href="{{ route('account') }}" class="button button-gradient button-big-rounded">--}}
{{--                            My Account--}}
{{--                        </a>--}}
{{--                        <span> &nbsp;&nbsp;</span>--}}
{{--                        <a href="{{ route('sign-out') }}" class="button button-gradient button-big-rounded">--}}
{{--                            Log off--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                @else--}}
{{--                    <a href="#" class="button button-gradient button-big-rounded" onclick="loginClicked()">--}}
{{--                        Login--}}
{{--                    </a>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}


        <nav class="nav-menu d-none d-lg-block">
            <ul class="text-uppercase">
                <li class="mobile-logo">
                    <a href="{{ url('/') }}">
                        <img src={{ asset('theme/newstyle/img/f-logo.png') }} alt="" class="img-fluid">
                    </a>
                    <button type="button" class="mobile-nav-toggle d-lg-none">
                        <i class="icofont-navigation-menu"></i>
                    </button>
                </li>
                {{--                     <li class = "{{ setActive('features', 'active') }}" ><a href="{{ url('/features') }}">Features</a></li>--}}
                <li class="{{ setActiveNav('', 'active-nav-menu') }}">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="{{ setActiveNav('plans', 'active-nav-menu') }}"><a href="{{ route('plans.index') }}">Plans</a></li>
                {{--                     <li class = "{{ setActive('devices', 'active') }}" ><a href="{{ route('devices.index') }}">Devices</a></li>--}}
                <li class="{{ setActive('support', 'active-nav-menu') }}"><a href="{{ url('/one-touch-support')}}">Support</a>
                </li>
                {{--                     <li class = "" ><a href='https://legacy.teltik.com/resources/'>Resources</a></li>--}}
{{--                <li class="{{ setActive('coverage', 'active') }}"><a href="#">Coverage</a></li>--}}
{{--                <li class="{{ setActive('coverage', 'active') }}"><a href="#">FAQ</a></li>--}}
                <li class="login_pop">
                    @if (session('id'))
                        <div class="loggedin text-capitalize px-4" style="float: right;">
                            <a href="{{ route('account') }}">Account <i>U</i></a>
                            <span> &nbsp;&nbsp;</span>
                            <a href="{{ route('sign-out') }}"> Log off</a>
                        </div>
                    @else
                        <div class="dropdown" style="">
                            <a type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false" style=""><span>Login</span>
                                <img src="{{ asset('theme/newstyle/img/user.png') }}" alt="" class="img-fluid"></a>

                            <a type="button" class='text-white'
                               href='https://legacy.teltik.com'><span>Legacy Login</span>
                                <img src="{{ asset('theme/newstyle/img/user.png') }}" alt="" class="img-fluid"></a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="loginPre showing">
                                    <h3>Sign into your account</h3>
                                    {!! Form::open(['route' => 'signOn', 'class' => 'login-form']) !!}
                                    {!! Form::text('identifier',null,['placeholder' => 'Email or Customer ID', 'id' => 'identifier']) !!}

                                    {!! $errors->first('identifier') !!}
                                    <br><br>

                                    <div class="password-field">
                                        {{ Form::password('password', ['placeholder' => 'Password', 'id' => 'password_login']) }}
                                        <a class="forgot-btn" href="{{ route('forgot-password') }}">Forgot?</a>
                                        {!! $errors->first('password') !!}
                                        <br><br>
                                    </div>
                                    @if (session('login-status'))
                                        {{ session('login-status') }}
                                        <br><br>
                                    @endif
                                    {!! Form::button('SIGN IN',[
                                    'class' => 'signin-btn', 'type' => 'submit', 'id' => 'sign-in-button'
                                    ]) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    @endif
                </li>
                <li class="header_cart_se">@include('cart.header-cart-items')</li>
                <li class="ml-5">
                    @if (session('id'))
                        <div class="loggedin d-flex text-capitalize">
                            <a href="{{ route('account') }}"
                               class="button button-gradient button-big-rounded px-5">
                                My Account
                            </a>
                            <span> &nbsp;&nbsp;</span>
                            <a href="{{ route('sign-out') }}"
                               class="button button-gradient button-big-rounded px-5">
                                Log off
                            </a>
                        </div>

                        {{--                             <div class="loggedin d-flex" style="float: right;">--}}
                        {{--                                 <a href="{{ route('account') }}">My Account</a>--}}
                        {{--                                 <span> &nbsp;&nbsp;</span>--}}
                        {{--                                 <a href="{{ route('sign-out') }}"> Log off</a>--}}
                        {{--                             </div>--}}
                    @else
                        <div class="loggedin d-flex text-capitalize">
                            <a href="{{ route('account') }}"
                               class="button button-gradient button-big-rounded login-button">
                                Login
                            </a>
                        </div>
                        {{--                             <div class="dropdown" style="float: right;">--}}
                        {{--                                 <a type="button"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"--}}
                        {{--                                    aria-expanded="false" class="login-link"><span>Login</span>--}}

                        {{--                                     <img src="{{ asset('theme/newstyle/img/user.png') }}" alt="" class="img-fluid"></a>--}}

                        {{--                                 <a type="button" class='text-white' href='https://legacy.teltik.com'><span>&nbsp;Legacy Login</span>--}}
                        {{--                                     <img src="{{ asset('theme/newstyle/img/user.png') }}" alt="" class="img-fluid"></a>--}}

                        {{--                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
                        {{--                                     <div class="loginPre showing">--}}
                        {{--                                         <h3>Sign into your account 33</h3>--}}
                        {{--                                         {!! Form::open(['route' => 'signOn', 'class' => 'login-form']) !!}--}}
                        {{--                                         {!! Form::text('identifier',null,['placeholder' => 'Email or Customer ID', 'id' => 'identifier']) !!}--}}

                        {{--                                         {!! $errors->first('identifier') !!}--}}
                        {{--                                         <br><br>--}}

                        {{--                                         <div class="password-field">--}}
                        {{--                                             {{ Form::password('password', ['placeholder' => 'Password', 'id' => 'password_login']) }}--}}
                        {{--                                             <a class="forgot-btn" href="{{ route('forgot-password') }}">Forgot?</a>--}}
                        {{--                                             {!! $errors->first('password') !!}--}}
                        {{--                                             <br><br>--}}
                        {{--                                         </div>--}}
                        {{--                                         @if (session('login-status'))--}}
                        {{--                                             {{ session('login-status') }}--}}
                        {{--                                             <br><br>--}}
                        {{--                                         @endif--}}
                        {{--                                         {!! Form::button('SIGN IN',['class' => 'signin-btn', 'type' => 'submit', 'id' => 'sign-in-button']) !!}--}}
                        {{--                                         {!! Form::close() !!}--}}
                        {{--                                     </div>--}}
                        {{--                                 </div>--}}
                        {{--                             </div>--}}
                    @endif
                </li>
                <!-- <li class="header_cart_se"><a href="#"><i class="icofont-shopping-cart"></i>My Cart</a></li>--->
            </ul>

        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
@push('js')
    <script>
        const sideBar = $('#mySidebar'),
            menuButton = $('#menu-button');

        function openNav() {
            sideBar.css('width', '250px');
            sideBar.css('z-index', '99');
            sideBar.addClass('active');
        }

        function closeNav() {
            sideBar.css('width', '0px');
            sideBar.css('z-index', '0');
            sideBar.removeClass('active');
        }

        menuButton.click(function (e) {
            e.stopPropagation();
            openNav();
        });
        $('body,html').click(function (e) {
            if (!sideBar.is(e.target)) {
                closeNav();
            }
        });

        function loginClicked() {
            window.location.href = '/sign-on'
        }
    </script>
@endpush
<!-- end header -->
<style>
    #header {
        z-index: 1200;
    }

    .login-button {
        padding: 1rem 4rem 1rem 4rem !important;
    }

    .mob-dropdown-menu {
        width: 24rem;
        right: 131rem;
        left: -5rem;
        box-shadow: 16px 13px 23px #0000001a;
    }

    .mobile-dropdown-toggle {
        border: none;
        background: transparent linear-gradient(180deg, #46d546 0%, #46d5a4 100%);
    }

    .mobile-dropdown-toggle::after {
        display: none;
    }

    .mobile-dropdown-toggle .bar {
        width: 30px;
        height: 3px;
        background-color: #ffffff;
        margin: 6px 0;
        -webkit-transition: 0.4s;
        transition: 0.4s;
        border-radius: 24px;
    }

    .dropdown-menu li {
        padding: 20px 30px;
        font-size: 1.5rem;
    }

    .mobile-login-button {
        max-width: 50%;
        margin-left: 2rem;
        text-transform: uppercase;
        text-align: center;
    }

    .btn-group.open .mobile-dropdown-toggle .bar-1 {
        transform: rotateY(32deg) rotate(39deg) translate(5px, 6px);
    }

    .btn-group.open .mobile-dropdown-toggle .bar-3 {
        transform: rotateY(180deg) rotate(45deg) translate(-7px, -8px);
    }

    .btn-group.open .mobile-dropdown-toggle .bar-2 {
        opacity: 0;
    }

    .nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
        color: #303846;
        font-weight: 600 !important;
    }

    .active-nav-menu a, .active-nav-menu span {
        font-weight: 600 !important;
        text-decoration: none;
    }
</style>
