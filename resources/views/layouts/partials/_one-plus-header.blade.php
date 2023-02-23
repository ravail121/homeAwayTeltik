<div class="modal fade" id="navigatingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 7rem;">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center mt-2 mb-5 system-font-family">How would you like to proceed?</h4>
                <div class="button-box d-flex justify-content-center">
                    <a
                        href="javascript:void(0)" onclick="checkOutClicked()"
                        class="button button-gradient button-big-rounded d-block text-center px-5 py-2"
                    >Check Out</a
                    >
                </div>

                <div class="text-center my-3">Or</div>

                <div class="button-box d-flex justify-content-center mb-4">
                    <a
                        href="javascript:void(0)" onclick="goToDevices()"
                        class="button button-gradient button-big-rounded d-block px-3 py-2 text-center"
                    >+ Add New Device</a
                    >
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin-top: 7rem;">
        <div class="modal-content default-background-image">
            <div class="modal-body">
                <div class="loginPre showing" id="sign-in-form">
                    <h3 class="text-center mt-5 heading">Sign into your account</h3>
                    <div class="d-flex justify-content-center">
                        {!! Form::open(['route' => 'signOn', 'class' => 'login-form p-5']) !!}
                        {!! Form::text(
                            'identifier',null,[
                                'placeholder' => 'Email or Customer ID',
                                 'id' => 'identifier-2',
                                  'class' => 'form-control high-border-radius',
                                   'required' => 'required'
                                ]
                            ) !!}

                        {!! $errors->first('identifier') !!}
                        <br><br>

                        <div class="password-field">
                            {{ Form::password('password', [
                                'placeholder' => 'Password',
                                 'id' => 'password_login',
                                  'class' => 'form-control high-border-radius',
                                   'required' => 'required'
                                ]) }}
                            {!! $errors->first('password') !!}
                            <br><br>
                        </div>
                        @if (session('login-status'))
                            {{ session('login-status') }}
                            <br><br>
                        @endif
                        <div class="d-flex justify-content-around flex-wrap">
                            {!! Form::button('SIGN IN',[
                                'class' => 'signin-btn px-3 py-1', 'type' => 'submit', 'id' => 'sign-in-button'
                                ]) !!}
                            <a class="forgot-btn pt-2" onclick="forgotPasswordClicked()">Forgot Password</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="loginPre showing d-none" id="forget-form">
                    <h3 class="text-center mt-5 heading">Forgot password</h3>
                    <div class="d-flex justify-content-center">
                        {!! Form::open(['route' => 'forgotPassword', 'class' => 'login-form p-5']) !!}
                        {!! Form::text(
                            'identifier',null,[
                                'placeholder' => 'Email or Customer ID',
                                 'id' => 'identifier',
                                  'class' => 'form-control high-border-radius',
                                   'required' => 'required'
                                ]
                            ) !!}

                        {!! $errors->first('identifier') !!}
                        <br><br>
                        <div class="d-flex justify-content-around">
                            {!! Form::button('SUBMIT',[
                                'class' => 'signin-btn px-3 py-1', 'type' => 'submit'
                                ]) !!}
                            <button class="signin-btn px-3 py-1" onclick="backToSignIn()">Sign In</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="header-section">
    <!-- Navigation Bar -->
    <nav
        class="navbar navbar-expand-lg py-4 align-items-center position-fixed w-100"
        style="-webkit-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
        z-index: 9999999999999999999999999 !important;"
    >
        <div class="container navbar-container">
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img src="{{ asset('theme/onePlus/new_logo.svg') }}"
                     style="width: 14rem;"
                     alt="logo" class="img-fluid"/>
            </a>
            <!-- Mobile Menu Icon -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="bar-1 d-block"></span>
                <span class="bar-2 d-block"></span>
                <span class="bar-3 d-block"></span>
            </button>
            <div
                class="collapse navbar-collapse align-items-center"
                id="navbarNav"
            >
                <!-- Menu Links -->
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="{{ setActiveNav('', 'nav-link active', 'nav-link') }}"
                           aria-current="page" href="/">HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/#devices-section" class="{{ setActive('plans', 'nav-link active', 'nav-link') }}"
                           aria-current="page" >PACKAGES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/one-touch-support">SUPPORT</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">COVERAGE</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="pages/page-5.html">FAQ</a>--}}
{{--                    </li>--}}
                </ul>
                <!-- Login and Cart -->
                <div class="login-and-cart-box d-flex align-items-center">
                    <div class="header_cart_se d-none" id="header-cart-element">@include('cart.one-touch-header-cart-items')</div>

                    <div class="cart position-relative me-4 d-none d-md-block">
                        <span class="btn-cart" role="button" onclick="hamburgerClicked()">
                            <i class="fas fa-shopping-cart"></i>
                        </span>
                        <div class="badge position-absolute">
                            @if(session('cart') && count(session('cart')))
                                {{ session('cart') ? count(session('cart')['order_groups']) : '' }}
                            @else
                                0
                            @endif
                        </div>
                    </div>

                    @if (session('id'))
                        <div class="loggedin">
                            <a href="{{ route('account') }}" class="button button-gradient button-big-rounded">
                                My Account
                            </a>
                            <span> &nbsp;&nbsp;</span>
                            <a href="{{ route('sign-out') }}" class="button button-gradient button-big-rounded">
                                Log off
                            </a>
                        </div>
                    @else
                        <a href="#" class="button button-gradient button-big-rounded" onclick="loginClicked()">
                            Login
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</div>

<script>
    // Sticky Nav
    const navbar = document.querySelector('#header-section .navbar');
    window.onscroll = function () {
        stickyNav();
    };
    function stickyNav() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            navbar.classList.add('sticky-nav');
        } else {
            navbar.classList.remove('sticky-nav');
        }
    }

    // Mobile Menu Icon Animation
    const navbarToggler = document.querySelector('.navbar-toggler');
    navbarToggler.addEventListener('click', () => {
        navbarToggler.classList.toggle('toggle');
    });

    // Video Play OnClick
    const videoPlayIcon = document.querySelector('.play-icon');
    if (videoPlayIcon) {
        videoPlayIcon.addEventListener('click', () => {
            const video = document.querySelector('.video');
            video.style.zIndex = 1;
            video.style.opacity = 1;
            video.play();
            const videoImage = document.querySelector('.video-img');
            videoImage.style.display = 'none';
            videoPlayIcon.style.display = 'none';
        });
    }

    function hamburgerClicked() {
        const cartDropClassList = document.getElementById('header-cart-element').classList;
        if (cartDropClassList.contains('d-none')) {
            cartDropClassList.remove('d-none');
        } else {
            cartDropClassList.add('d-none');
        }
    }

    loginClicked = () => {
        $('#loginModal').modal('show');
        // if ($('.modal-backdrop.fade.show')) {
            // $('.modal-backdrop.fade.show').remove()
        // }
    }

    forgotPasswordClicked = () => {
        document.getElementById('sign-in-form').classList.add('d-none');
        document.getElementById('forget-form').classList.remove('d-none');
    }

    backToSignIn = () => {
        document.getElementById('sign-in-form').classList.remove('d-none');
        document.getElementById('forget-form').classList.add('d-none');
    }
</script>

<style>
    .header_cart_se #cart-drop {
        position: absolute;
        top: 6rem;
        right: 13rem;
        z-index: 5;
        background: #FFF;
        width: 360px;
        box-shadow: 0 2px 5px #ddd;
        padding: 25px 0;
        text-align: left;
        display: block;
    }

    .selected-item-text {
        font-size: 16px;
        display: block;
        margin-bottom: 10px;
        padding: 0 25px;
        margin-left: 25px;
    }

    .drop-con .cart-list li .img-wrap, #cart-drop .drop-con .cart-list {
        padding-left: 0;
    }

    .drop-con .cart-list li .img-wrap, #cart-drop .drop-con .cart-list li .img-wrap {
        width: 47px;
        height: 77px;
        overflow: hidden;
        background: #e4e5e5;
        border-radius: 4px;
        float: left;
        margin-right: 20px;
        margin-left: 25px;
    }

    .drop-con .cart-list li .info, #cart-drop .drop-con .cart-list li .info {
        width: 238px;
        float: right;
        margin-right: 25px;
    }

    .drop-con .cart-list li .info, #cart-drop .drop-con .summary {
        padding: 25px;
    }

    #cart-drop .drop-con .summary {
        padding: 25px;
        border-bottom: 2px solid #d4dbde;
    }

    .drop-con .cart-list li .btn-set-action > div:first-child {
        border-right: 1px solid #d4dbde;
    }

    .drop-con .cart-list li, #cart-drop .drop-con .cart-list li {
        border-bottom: 2px solid #d4dbde;
    }

    #cart-drop-mobile .drop-con .total, #cart-drop .drop-con .total {
        padding: 25px 25px 0 25px;
    }

    .sim-number {
        font-size: 9px;
    }

    .drop-con .btn, #cart-drop .drop-con .btn {
        width: 100%;
        max-width: 190px;
        height: 35px;
        background: #aab8bd;
        border-radius: 100px;
        color: #fff;
        font-weight: 700;
        margin-left: auto;
        margin-right: auto;
        margin-top: 30px;
        display: block;
    }
    /*.header_cart_se #cart-drop table {*/
    /*    width: 100%;*/
    /*    border-bottom: 1px solid #d4dbde;*/
    /*}*/
</style>

@if (session('login-status'))
    <script>
        setTimeout(() => loginClicked(), 1500);
    </script>
@endif
