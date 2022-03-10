<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"/>
    <!-- Font Awesome -->
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"--}}
{{--          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="--}}
{{--          crossorigin="anonymous" />--}}
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"/>
    <!-- Title & Favicon -->
    <title>One Touch</title>
    <!-- Swiper CSS -->
    {{--    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css"/>
    <!-- Main CSS -->
    <style>
        /* ======= Basic ======= */
        body {
            font-family: 'poligon-regular';
            overflow-x: hidden !important;
        }

        a,
        button {
            text-decoration: none !important;
        }

        button:focus {
            outline: none !important;
        }

        .container {
            padding: 0 30px !important;
        }

        ul, ol {
            list-style: none;
        }

        .media-body {
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
        }

        @media (max-width: 575px) {
            .container {
                padding: 0 30px !important;
            }
        }

        /* ======= Fonts ======= */
        @font-face {
            font-family: 'poligon-regular';
            src: url("../fonts/Poligon-Regular.woff") format("woff");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        .poligon-regular {
            font-family: 'poligon-regular';
        }

        @font-face {
            font-family: 'poligon-bold';
            src: url("../fonts/Poligon-Bold.woff") format("woff");
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        .poligon-bold {
            font-family: 'poligon-bold';
        }

        @font-face {
            font-family: 'poligon-semi-bold';
            src: url("../fonts/Poligon-SemiBold.woff") format("woff");
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        .poligon-semi-bold {
            font-family: 'poligon-semi-bold';
        }

        @font-face {
            font-family: 'poligon-light';
            src: url("../fonts/Poligon-Light.woff") format("woff");
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        .poligon-light {
            font-family: 'poligon-light';
        }

        @font-face {
            font-family: 'euclid-circular-bold';
            src: url("../fonts/EuclidCircularA-Bold.woff") format("woff");
            font-weight: bold;
            font-style: normal;
            font-display: swap;
        }

        .euclid-circular-bold {
            font-family: 'euclid-circular-bold';
        }

        @font-face {
            font-family: 'euclid-circular-regular';
            src: url("../fonts/EuclidCircularA-Regular.woff") format("woff");
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        .euclid-circular-regular {
            font-family: 'euclid-circular-regular';
        }

        /* ======= Reuseable ======= */
        .after-heading {
            font-family: "poligon-bold";
            color: #46d5a4;
            font-size: 22px;
        }

        .heading {
            font-size: 40px;
            font-family: "poligon-bold";
            color: #29354a;
        }

        .safety_heading {
            font-size: 40px;
            font-family: "poligon-bold";
            color: #29354a;
            margin-bottom: 30px;
        }

        .safety_p {
            font-size: 18px;
            color: #29354a;
            margin-bottom: 30px;
            font-family: 'poligon-regular';
        }

        .safety_feature {
            font-size: 14px;
            font-family: "poligon-bold";
        }

        .safety_feature_heading {
            font-size: 22px;
            font-family: "poligon-bold";
        }

        .safety_media {
            margin-top: 15px !important;
            color: #FF0088;
            font-family: 'euclid-circular-regular';
        }

        .safety_img {
            width: 430px !important;
        }


        @media only screen and (max-width: 575px) {
            .heading {
                font-size: 30px;
            }

            .safety_p {
                font-size: 16px;
            }

            .safety_heading {
                font-size: 30px;
            }


            #safety_part {
                padding-bottom: 0;
            }
        }

        .big-heading {
            font-size: 50px;
            font-family: "poligon-bold";
            color: #29354a;
        }

        @media only screen and (max-width: 575px) {
            .big-heading {
                font-size: 30px;
            }
        }

        .para-text {
            font-size: 18px;
            color: #29354a;
        }

        @media only screen and (max-width: 575px) {
            .para-text {
                font-size: 16px;
            }
        }

        .big-para-text {
            font-size: 22px;
        }

        @media only screen and (max-width: 575px) {
            .big-para-text {
                font-size: 18px;
            }
        }

        .button {
            font-size: 18px;
            padding: 12px 30px;
        }

        @media only screen and (max-width: 575px) {
            .button {
                font-size: 16px;
            }
        }

        .button.button-rounded {
            border-radius: 8px;
        }

        .button.button-big-rounded {
            border-radius: 35px;
        }

        .button.button-gradient {
            background: transparent linear-gradient(106deg, #46d546 0%, #46d5a4 100%);
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            color: #ffffff;
        }

        .card-heading {
            font-size: 22px;
            font-family: "poligon-bold";
            color: #46d5a4;
        }

        @media only screen and (max-width: 575px) {
            .card-heading {
                font-size: 20px;
            }
        }

        /* ======= Header Section ======= */


        #header-section .navbar {
            top: 0;
            left: 0;
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        #header-section .navbar.sticky-nav {
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            background-color: #ffffff;
            padding: 10px 0 !important;
            z-index: 9999999999999999999999999 !important;
            -webkit-box-shadow: 8px 13px 23px #0000001a;
            box-shadow: 8px 13px 23px #0000001a;
        }

        @media (max-width: 575px) {
            #header-section .navbar .navbar-brand {
                width: 150px;
            }
        }

        @media (max-width: 991px) {
            #header-section .navbar .navbar-toggler {
                background: transparent-webkit-gradient(linear, left top, left bottom, from(#46d546), to(#46d5a4));
                background: transparent linear-gradient(180deg, #46d546 0%, #46d5a4 100%);
                padding: 3px 7px !important;
                border-radius: 5px;
            }

            #header-section .navbar .navbar-toggler:focus {
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            #header-section .navbar .navbar-toggler span {
                width: 30px;
                height: 3px;
                background-color: #ffffff;
                margin: 6px 0;
                -webkit-transition: 0.4s;
                transition: 0.4s;
                border-radius: 24px;
            }

            #header-section .navbar .navbar-toggler.toggle .bar-1 {
                -webkit-transform: rotate(-45deg) translate(-6px, 5px);
                transform: rotate(-45deg) translate(-6px, 5px);
            }

            #header-section .navbar .navbar-toggler.toggle .bar-2 {
                opacity: 0;
            }

            #header-section .navbar .navbar-toggler.toggle .bar-3 {
                -webkit-transform: rotate(45deg) translate(-7px, -7px);
                transform: rotate(45deg) translate(-7px, -7px);
            }
        }

        #header-section .navbar .navbar-collapse .navbar-nav .nav-item {
            margin: 0 10px;
        }

        #header-section .navbar .navbar-collapse .navbar-nav .nav-item .nav-link {
            color: #303846;
        }

        #header-section .navbar .navbar-collapse .navbar-nav .nav-item .nav-link.active {
            font-family: "poligon-bold";
        }

        #header-section .navbar .navbar-collapse .login-and-cart-box .cart i {
            color: #303846;
        }

        #header-section .navbar .navbar-collapse .login-and-cart-box .cart .badge {
            background-color: #46d5a4;
            width: 20px;
            height: 20px;
            line-height: 12px;
            text-align: center;
            border-radius: 50%;
            top: -10px;
            right: -12px;
        }

        @media (max-width: 991px) {
            #header-section .navbar .navbar-collapse {
                background-color: #ffffff;
                -webkit-box-shadow: 8px 13px 23px #0000001a;
                box-shadow: 8px 13px 23px #0000001a;
                -webkit-transform: translateY(20px);
                transform: translateY(20px);
                border-radius: 8px;
            }

            #header-section .navbar .navbar-collapse .navbar-nav {
                padding: 30px 30px 0 30px;
            }

            #header-section .navbar .navbar-collapse .navbar-nav .nav-item {
                margin: 5px 0 !important;
            }

            #header-section .navbar .navbar-collapse .login-and-cart-box {
                padding: 15px 30px 30px 30px;
            }
        }

        /* ======= Hero Section ======= */
        #hero-section {
            padding: 170px 0 50px 0;
            background-image: url("../img/hero-bg.png");
            background-position: center;
            background-color: 0;
            background-size: cover;
        }

        #hero-section-2 {
            background-position: center !important;
            background-size: cover !important;
            background-repeat: no-repeat;
            width: 100%;
        }

        #hero-section .left-side .stay-connected {
            color: #46d5a4;
            background-color: #e0f8f0;
            border: 1px solid #84e3c2;
            border-radius: 30px;
        }

        #hero-section-2 .left-side p {
            color: #626e84;
        }

        @media (max-width: 991px) {
            #hero-section {
                background-position: right;
            }
        }

        #header-section-2 .navbar {
            top: 0;
            left: 0;
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        #header-section-2 .navbar.sticky-nav {
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
            background-color: #ffffff;
            padding: 10px 0 !important;
            z-index: 9999999999999999999999999 !important;
            -webkit-box-shadow: 8px 13px 23px #0000001a;
            box-shadow: 8px 13px 23px #0000001a;
        }

        @media (max-width: 575px) {
            #header-section-2 .navbar .navbar-brand {
                width: 150px;
            }
        }

        @media (max-width: 991px) {
            #header-section-2 .navbar .navbar-toggler {
                background: transparent-webkit-gradient(linear, left top, left bottom, from(#46d546), to(#46d5a4));
                background: transparent linear-gradient(180deg, #46d546 0%, #46d5a4 100%);
                padding: 3px 7px !important;
                border-radius: 5px;
            }

            #header-section-2 .navbar .navbar-toggler:focus {
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
            }

            #header-section-2 .navbar .navbar-toggler span {
                width: 30px;
                height: 3px;
                background-color: #ffffff;
                margin: 6px 0;
                -webkit-transition: 0.4s;
                transition: 0.4s;
                border-radius: 24px;
            }

            #header-section-2 .navbar .navbar-toggler.toggle .bar-1 {
                -webkit-transform: rotate(-45deg) translate(-6px, 5px);
                transform: rotate(-45deg) translate(-6px, 5px);
            }

            #header-section-2 .navbar .navbar-toggler.toggle .bar-2 {
                opacity: 0;
            }

            #header-section-2 .navbar .navbar-toggler.toggle .bar-3 {
                -webkit-transform: rotate(45deg) translate(-7px, -7px);
                transform: rotate(45deg) translate(-7px, -7px);
            }

            .form_col {
                padding: 20px 0 !important;
                margin-bottom: 20px;
            }

            .main_ul {
                justify-content: center !important;
            }

            .main_ul .nav-item .nav-link {
                margin: 0 15px 15px 0;
                font-size: 14px !important;

            }

            .faq-head h2 {
                font-size: 29px !important;
            }

            .dropdown a {
                font-size: 18px !important;
            }

            .faq-head p {
                font-size: 14px !important;
            }

            .dropdown p {
                font-size: 14px !important;
            }

            .faq_container {
                padding: 0 !important;
            }
        }

        #header-section-2 .navbar .navbar-collapse .navbar-nav .nav-item {
            margin: 0 10px;
        }

        #header-section-2 .navbar .navbar-collapse .navbar-nav .nav-item .nav-link {
            color: #303846;
        }

        #header-section-2 .navbar .navbar-collapse .navbar-nav .nav-item .nav-link.active {
            font-family: "poligon-bold";
        }

        #header-section-2 .navbar .navbar-collapse .login-and-cart-box .cart i {
            color: #303846;
        }

        #header-section-2 .navbar .navbar-collapse .login-and-cart-box .cart .badge {
            background-color: #46d5a4;
            width: 20px;
            height: 20px;
            line-height: 12px;
            text-align: center;
            border-radius: 50%;
            top: -10px;
            right: -12px;
        }

        @media (max-width: 991px) {
            #header-section-2 .navbar .navbar-collapse {
                background-color: #ffffff;
                -webkit-box-shadow: 8px 13px 23px #0000001a;
                box-shadow: 8px 13px 23px #0000001a;
                -webkit-transform: translateY(20px);
                transform: translateY(20px);
                border-radius: 8px;
            }

            #header-section-2 .navbar .navbar-collapse .navbar-nav {
                padding: 30px 30px 0 30px;
            }

            #header-section-2 .navbar .navbar-collapse .navbar-nav .nav-item {
                margin: 5px 0 !important;
            }

            #header-section-2 .navbar .navbar-collapse .login-and-cart-box {
                padding: 15px 30px 30px 30px;
            }
        }

        /* ======= Hero Section ======= */
        #hero-section-2 {
            padding: 170px 0 50px 0;
            background-position: center;
            background-color: 0;
            background-size: cover;
        }

        #hero-section-2 .left-side .stay-connected {
            color: #46d5a4;
            background-color: #e0f8f0;
            border: 1px solid #84e3c2;
            border-radius: 30px;
        }

        #hero-section-2 .left-side p {
            color: #626e84;
        }

        @media (max-width: 991px) {
            #hero-section-2 {
                padding: 250px 0 50px 0;
                background-position: right;
            }
        }

        .search_btn {
            border: 2px solid #46D5A4;
            border-radius: 25px;
            width: 100%;
            background: #fff;
        }

        .search_btn input {
            border: none;
            outline: none;
            width: 70%;
            border-radius: 25px;
        }

        .btn img {
            width: 20px;
        }

        /* ======= Devices Section ======= */
        #devices-section {
            padding: 100px 0;
        }

        #devices-section .device-card {
            background: #fbfcfe 0% 0% no-repeat padding-box;
            -webkit-box-shadow: 0px 13px 12px #00000014;
            box-shadow: 0px 13px 12px #00000014;
            border-radius: 22px;
        }

        #devices-section .device-card .swiper-container {
            border-radius: 14px;
            cursor: -webkit-grab;
            cursor: grab;
        }

        #devices-section .device-card .swiper-container .swiper-slide .w-53 {
            width: 53% !important;
        }

        #devices-section .device-card .swiper-container .swiper-next-button,
        #devices-section .device-card .swiper-container .swiper-prev-button {
            position: absolute;
            top: 50%;
            z-index: 10;
            cursor: pointer;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            color: #bbbbbb;
            border: 1px solid #bbbbbb;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            border-radius: 50%;
            outline: none !important;
        }

        #devices-section .device-card .swiper-container .swiper-next-button {
            right: 20px;
        }

        #devices-section .device-card .swiper-container .swiper-prev-button {
            left: 20px;
        }

        #devices-section .device-card .product-title h3 {
            color: #3ab289;
            min-height: 40px;
        }

        #devices-section .device-card .product-title p {
            color: #29354a;
            min-height: 60px;
        }

        @media (max-width: 575px) {
            #devices-section {
                padding: 50px 0;
            }
        }

        /* ======= Info Section ======= */
        #info-section {
            padding: 100px 0;
        }

        #info-section .bg {
            background-image: url("../img/gradient-bg.png");
            background-position: center;
            background-color: 0;
            background-size: cover;
            border-radius: 24px;
            padding: 50px;
        }

        @media (max-width: 1199px) {
            #info-section .bg {
                padding: 50px 50px 0 50px;
            }
        }

        @media (max-width: 575px) {
            #info-section .bg {
                padding: 30px 30px 0 30px;
            }
        }

        #info-section .bg .left-side .heading,
        #info-section .bg .left-side .para-text {
            color: #313b44;
        }

        #info-section .bg .right-side {
            top: -241px;
            width: 100%;
        }

        @media (min-width: 1400px) {
            #info-section .bg .right-side {
                top: -251px;
            }
        }

        @media (max-width: 1199px) {
            #info-section .bg .right-side {
                position: static !important;
            }
        }

        @media (max-width: 575px) {
            #info-section {
                padding: 50px 0;
            }
        }

        /* ======= How It Works Section ======= */
        #how-it-works-section .how-it-works-path-box {
            top: 10%;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        #how-it-works-section .how-it-works-path-box img {
            -webkit-transform: rotate(-3deg);
            transform: rotate(-3deg);
        }

        #how-it-works-section .how-it-works-box-parent {
            z-index: 99999;
        }

        #how-it-works-section .how-it-works-box-parent .how-it-works-box p {
            color: #5d6e88;
        }

        @media (max-width: 575px) {
            #how-it-works-section .how-it-works-box-parent .how-it-works-box img {
                width: 60%;
            }
        }

        /* ======= Video Section ======= */
        #video-section {
            padding: 50px 0 100px 0;
            position: relative;
        }

        #video-section .laptop-main-box .laptop-box {
            position: relative;
        }

        #video-section .laptop-main-box .laptop-box .video-img {
            position: absolute;
            top: 42%;
            left: 50%;
            width: 78% !important;
            -webkit-transform: translate(-50%, -40%);
            transform: translate(-50%, -40%);
        }

        #video-section .laptop-main-box .laptop-box .cover-video-box .cover-video video {
            opacity: 0;
            -webkit-transition: 1s;
            transition: 1s;
            position: absolute;
            top: 20%;
            left: 50%;
            width: 78% !important;
            height: 90% !important;
            -webkit-transform: translate(-50%, -20%);
            transform: translate(-50%, -20%);
            z-index: -1;
        }

        #video-section .laptop-main-box .laptop-box .cover-video-box .cover-video video:focus {
            outline: none !important;
        }

        #video-section .laptop-main-box .laptop-box .play-icon {
            cursor: pointer;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            z-index: 99999999;
        }

        #video-section .laptop-main-box .laptop-box .play-icon i {
            padding: 15px 30px;
            color: #ffffff;
            background: transparent-webkit-gradient(linear, left top, left bottom, from(#46d546), to(#46d5a4));
            background: transparent linear-gradient(180deg, #46d546 0%, #46d5a4 100%);
            border-radius: 10px;
        }

        @media (max-width: 575px) {
            #video-section {
                padding: 50px 0 70px 0;
            }
        }

        /* ======= Testimonial Section ======= */
        #testimonial-section {
            padding-bottom: 100px;
        }

        #testimonial-section .swiper-slide {
            cursor: -webkit-grab;
            cursor: grab;
        }

        #testimonial-section .swiper-slide .testimonial-card {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 10px;
        }

        #testimonial-section .swiper-slide .testimonial-card .quote img {
            width: 50px !important;
        }

        #testimonial-section .swiper-slide .testimonial-card p {
            color: #5a6084;
        }

        #testimonial-section .swiper-slide .testimonial-card .client-info .client-img {
            width: 50px;
        }

        #testimonial-section .swiper-slide .testimonial-card .client-info .client-name {
            font-family: 'poligon-semi-bold';
        }

        #testimonial-section .swiper-slide .testimonial-card .client-info p {
            margin-bottom: 0 !important;
        }

        #testimonial-section .swiper-prev img,
        #testimonial-section .swiper-next img {
            width: 70px;
        }

        #testimonial-section .swiper-prev:focus,
        #testimonial-section .swiper-next:focus {
            outline: none !important;
        }

        #testimonial-section .swiper-pagination {
            position: static !important;
        }

        #testimonial-section .swiper-pagination .swiper-pagination-bullet-active {
            background-color: #3ab289 !important;
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
        }

        #testimonial-section .swiper-pagination .swiper-pagination-bullet-active:focus {
            outline: none !important;
        }

        #testimonial-section .other-review h5 {
            font-family: 'poligon-semi-bold';
            color: #5a6084;
        }

        #testimonial-section .other-review .review .fa-star,
        #testimonial-section .other-review .review .fa-star-half-alt {
            color: #febb11;
        }

        #testimonial-section .other-review .review span {
            color: #5a6084;
        }

        #testimonial-section .other-review .see-all-review-btn {
            display: inline-block;
            padding: 5px 20px;
            background: #ffffff 0% 0% no-repeat padding-box;
            border: 1px solid #d2d2d2;
            border-radius: 2px;
        }

        #testimonial-section .other-review .see-all-review-btn span {
            font-family: 'poligon-semi-bold';
            font-size: 16px;
            color: #000000;
        }

        @media (max-width: 575px) {
            #testimonial-section {
                padding-bottom: 70px;
            }
        }

        /* ======= Footer Section ======= */
        #footer-section {
            background-color: #0c241b;
            padding-top: 70px;
        }

        #footer-section .footer-widget .newsletter-box .newsletter .newsletter-form input {
            border-radius: 35px 35px !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none !important;
            padding: 12px 30px;
        }

        @media (max-width: 575px) {
            #footer-section .footer-widget .newsletter-box .newsletter .newsletter-form input {
                display: block !important;
                width: 100% !important;
            }
        }

        #footer-section .footer-widget .newsletter-box .newsletter .newsletter-form button {
            border-radius: 35px !important;
        }

        @media (max-width: 575px) {
            #footer-section .footer-widget .newsletter-box .newsletter .newsletter-form button {
                display: block !important;
                width: 100% !important;
            }
        }

        #footer-section .footer-widget .social-links a {
            margin: 0 5px;
            display: inline-block;
        }

        #footer-section .footer-widget .social-links a:first-child {
            margin-left: 0;
        }

        #footer-section .footer-widget .social-links a:last-child {
            margin-right: 0;
        }

        #footer-section .footer-widget .social-links a i {
            font-size: 17px;
            color: #0c241b;
            width: 35px;
            height: 35px;
            line-height: 35px;
            text-align: center;
            border-radius: 50%;
            background: transparent-webkit-gradient(linear, left top, left bottom, from(#46d546), to(#46d5a4));
            background: transparent linear-gradient(180deg, #46d546 0%, #46d5a4 100%);
        }

        #footer-section .footer-widget .footer-sub-heading {
            font-family: "poligon-bold";
            font-size: 20px;
            min-height: 50px;
        }

        #footer-section .footer-widget .footer-link p a {
            color: #ffffff;
            font-size: 18px;
        }

        #footer-section .footer-copyright p,
        #footer-section .footer-copyright a {
            color: #ffffff;
            font-size: 18px;
        }

        #footer-section .footer-copyright .footer-border-end-default {
            position: relative;
        }

        #footer-section .footer-copyright .footer-border-end-default::after {
            position: absolute;
            content: '';
            height: 80%;
            width: 1px;
            background-color: #ffffff;
            right: -25%;
            top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        /* ======= Page 2 ======= */
        .page-2 {
            /* ======= hero Section ======= */
            /* ======= Product Info Section ======= */
            /* ======= Features Section ======= */
            /* ======= How It Works Section ======= */
            /* ======= Info Section ======= */
        }

        .page-2 #hero-section .left-side .after-heading {
            font-size: 30px;
            color: #303846;
        }

        .page-2 #hero-section .left-side .heading {
            font-family: "poligon-light" !important;
            font-size: 39px;
        }

        .page-2 #hero-section .left-side .free-shipping-and-call-to-order-box img {
            width: 50px;
        }

        .page-2 #hero-section .left-side .free-shipping-and-call-to-order-box p {
            font-family: "poligon-semi-bold";
        }

        .page-2 #hero-section .left-side .free-shipping-and-call-to-order-box .free-shipping {
            background-color: #ffe9f5;
            border-radius: 45px;
            padding: 10px 20px 10px 10px;
        }

        .page-2 #hero-section .left-side .free-shipping-and-call-to-order-box .free-shipping p {
            color: #ff0088;
        }

        .page-2 #hero-section .left-side .free-shipping-and-call-to-order-box .call-to-order {
            background-color: #ebf5ff;
            border-radius: 45px;
            padding: 10px 20px 10px 10px;
        }

        .page-2 #hero-section .left-side .free-shipping-and-call-to-order-box .call-to-order span {
            color: #0482ff;
        }

        .page-2 #hero-section .left-side .free-shipping-and-call-to-order-box .call-to-order p {
            color: #0482ff;
        }

        @media (max-width: 1199px) {
            .page-2 #hero-section {
                padding: 250px 0 50px 0;
                background-position: right;
            }

            .page-2 #hero-section .left-side .button-box .button {
                margin: auto !important;
            }
        }

        @media (max-width: 575px) {
            .page-2 #hero-section .left-side .button-box .button {
                width: 100% !important;
            }
        }

        .page-2 #product-info-section {
            padding: 100px 0;
        }

        @media (max-width: 575px) {
            .page-2 #product-info-section {
                padding: 60px 0;
            }
        }

        .page-2 #product-info-section .left-side .product-img-tab nav .nav-tabs .nav-link {
            cursor: pointer;
            width: 74px;
            background: #ffffff;
            border: 1px solid #e1e1e1;
            border-radius: 11px;
            margin: 10px 0;
        }

        @media (min-width: 1400px) {
            .page-2 #product-info-section .left-side .product-img-tab nav .nav-tabs .nav-link {
                width: 92px;
            }
        }

        @media (max-width: 1199px) {
            .page-2 #product-info-section .left-side .product-img-tab nav .nav-tabs .nav-link {
                width: 100px;
            }
        }

        @media (max-width: 767px) {
            .page-2 #product-info-section .left-side .product-img-tab nav .nav-tabs .nav-link {
                width: 23%;
                margin: 10px 1%;
            }

            .page-2 #product-info-section .left-side .product-img-tab nav .nav-tabs .nav-link:first-child {
                margin-left: 0;
            }

            .page-2 #product-info-section .left-side .product-img-tab nav .nav-tabs .nav-link:last-child {
                margin-right: 0;
            }
        }

        .page-2 #product-info-section .left-side .product-img-tab nav .nav-tabs .nav-link:first-child {
            margin-top: 0;
        }

        @media (max-width: 767px) {
            .page-2 #product-info-section .left-side .product-img-tab nav .nav-tabs .nav-link:first-child {
                margin-top: 10px;
            }
        }

        .page-2 #product-info-section .left-side .product-img-tab nav .nav-tabs .nav-link:last-child {
            margin-bottom: 0;
        }

        @media (max-width: 767px) {
            .page-2 #product-info-section .left-side .product-img-tab nav .nav-tabs .nav-link:last-child {
                margin-bottom: 10px;
            }
        }

        .page-2 #product-info-section .left-side .product-img-tab nav .nav-tabs .nav-link.active {
            background: #ffffff;
            border: 3px solid #3ab289;
            border-radius: 11px;
        }

        .page-2 #product-info-section .left-side .product-img-tab .tab-content {
            height: 100%;
            background: #fcfcfc 0% 0% no-repeat padding-box;
            -webkit-box-shadow: 0px 3px 28px #0000000f;
            box-shadow: 0px 3px 28px #0000000f;
            border-radius: 11px;
            padding: 50px 100px;
        }

        .page-2 #product-info-section .right-side .product-card .product-short-details .price p {
            color: #a2adbf;
        }

        .page-2 #product-info-section .right-side .product-card .product-short-details .price .amount {
            color: #3ab289;
            font-size: 50px;
            font-family: 'Bebas Neue', cursive;
        }

        .page-2 #product-info-section .right-side .product-card .monthly-plan {
            background: #f9fafc 0% 0% no-repeat padding-box;
            border-radius: 8px;
            padding: 10px;
        }

        .page-2 #product-info-section .right-side .product-card .monthly-plan p:first-child {
            font-family: "poligon-bold";
        }

        .page-2 #product-info-section .right-side .product-card .monthly-plan p:last-child {
            color: #5d6e88;
        }

        .page-2 #product-info-section .right-side .product-card .monthly-plan .price {
            color: #ff0088;
            font-size: 40px;
            font-family: 'Bebas Neue', cursive;
        }


        .page-2 #product-info-section .right-side .product-card .facilities .media img {
            width: 20px;
            height: 20px;
        }

        .page-2 #product-info-section .right-side .product-card .facilities .media .media-body .para-text {
            color: #ff0088;
            font-family: "poligon-semi-bold";
        }

        .page-2 #features-section {
            padding-bottom: 100px;
        }

        @media (max-width: 575px) {
            .page-2 #features-section {
                padding-bottom: 60px;
            }
        }

        @media (min-width: 1200px) and (max-width: 1399px) {
            .page-2 #features-section .features .features-top-item {
                -webkit-transform: translateY(20px);
                transform: translateY(20px);
            }
        }

        .page-2 #features-section .features .features-middle-image {
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .page-2 #features-section .features .features-icon {
            width: 120px;
            margin-left: -25px;
        }

        .page-2 #how-it-works-section {
            padding: 70px 0 50px 0;
            background-color: #f2fff7;
        }

        .page-2 #info-section {
            padding: 150px 0 100px 0;
        }

        @media (max-width: 575px) {
            .page-2 #info-section {
                padding: 80px 0;
            }
        }

        /*# sourceMappingURL=style.css.map */


        /* start faq part */

        #faq_part {
            padding: 20px;
            border-radius: 15px;
        }


        .main_ul .nav-item .nav-link {
            border: 2px solid #C9C9C9;
            border-radius: 25px;
            color: #C9C9C9;
            background: #fff;


        }

        .main_ul {
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .main_ul .nav-item .active {
            border-color: #46d5a4;
            color: #46D5A4;
        }

        .dropdown {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            border: 1px solid #EEEEEE;
            color: #162F3D !important;
        }

        .uk-open a {
            color: #162F3D !important;
            font-family: 'poligon-bold';
            font-size: 20px;
        }

        .dropdown p {
            font-size: 18px;
        }

        .dropdown a {
            font-size: 22px;
        }

        .form_col {
            padding: 20px 40px;
            border-radius: 16px;
            background: #F9FAFC;
        }

        .form_col3 {
            margin-top: 20px;
        }

        .form_col2 {
            margin-right: 20px;
        }

        .first_name {
            font-size: 18px;
            color: #000;
            padding: 15px 10px;
            font-family: 'poligon-regular';
            border: 0;
            width: 100%;
            margin-bottom: 20px;
            box-shadow: 0px 3px 10px #00000017;
            border-radius: 10px;
        }

        .last_name {
            font-size: 18px;
            color: #000;
            padding: 15px 10px;
            font-family: 'poligon-regular';
            border: 0;
            width: 100%;
            margin-bottom: 20px;
            box-shadow: 0px 3px 10px #00000017;
            border-radius: 10px;
        }

        #form_message {
            height: 50px;
            width: 100%;
            border: 0;
            font-size: 18px;
            color: #000;
            font-family: 'poligon-regular';
            padding: 10px 0 0 10px;
            box-shadow: 0px 3px 10px #00000017;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .form_submit {
            padding: 10px 44.5%;
            color: #fff;
            font-family: 'poligon-regular';
            font-size: 14px;
            border-radius: 7px;
            background: transparent linear-gradient(96deg, #46D546 0%, #46D5A4 100%) 0% 0% no-repeat padding-box;
        }

        .form-select {
            box-shadow: none !important;
        }

        .form_submit:hover {
            color: #fff;
        }

        .email {
            width: 100%;
            border: 0;
            font-size: 18px;
            color: #000;
            font-family: 'poligon-regular';
            padding: 15px 10px;
            margin-bottom: 20px;
            box-shadow: 0px 3px 10px #00000017;
            border-radius: 10px;
        }

        .form-select {
            width: 100%;
            border: 0;
            border-bottom: 1px solid #e5e5e5;
            font-size: 12px;
            color: #000;
            font-family: 'poligon-regular';
            padding: 10px 10px;
            margin-bottom: 20px;
        }

        .faq-head h2 {
            font-family: 'poligon-bold';
            font-size: 40px;
            color: #2C303B;
        }

        .faq-head p {
            font-family: 'poligon-regular';
            font-size: 18px;
            color: #6D7C84;
        }

        .faq-contact-text a {
            font-size: 18px;
            font-family: 'poligon-bold';
            color: #46D5A4;
            text-decoration: underline !important;

        }

        .faq-contact-text a p {
            width: 100%;
        }
    </style>
</head>

<body class="page-2">
@include('layouts.partials._one-plus-header')

<!-- ============================= Start Hero Section Here ============================= -->
<section id="hero-section-2" style="background: url(../img/page-5/hero-bg.png); margin-bottom: 50px;">
    <div class="container">
        <div class="row g-5 align-items-center justify-content-center justify-content-lg-between">
            <!-- Left Side -->
            <div class="col-xl-5 col-xxl-5 text-center text-xl-start mt-0">
                <div class="left-side">
                    <h2 class="heading my-4">Hello! <br>
                        How can we help?</h2>
                    <form class="search_btn d-flex">
                        <button class="btn" type="submit"><img src="{{ asset('theme/onePlus/page-5/search.svg') }}"
                                                               alt="search"></button>

                        <input class="search_inside" type="search" placeholder="Search Help articles"
                               aria-label="search">

                    </form>

                </div>
            </div>

</section>

<!-- ============================= Start FAQ Section Here ============================= -->
<section id="faq_part">
    <div class="container faq_container">
        <div class="row">
            <div class="col-lg-7 form_col form_col2">
                <div class="faq-head">
                    <h2>Find your Relevant categories</h2>
                </div>
                <ul class="nav nav-tabs main_ul" id="myTab" role="tablist" style="border-bottom: 0px;">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">PRE-SALE
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">FEATURES
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">ROAMING
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact" aria-selected="false"> DATA
                        </button>
                    </li>
                    <li class="nav-item text-align-center" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">MY ACCOUNT
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <ul uk-accordion>
                            <li class="uk-open dropdown">
                                <a class="uk-accordion-title" href="#">Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                        ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <ul uk-accordion>
                            <li class="uk-open dropdown">
                                <a class="uk-accordion-title" href="#">Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                        ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <ul uk-accordion>
                            <li class="uk-open dropdown">
                                <a class="uk-accordion-title" href="#">Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                        ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <ul uk-accordion>
                            <li class="uk-open dropdown">
                                <a class="uk-accordion-title" href="#">Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                        ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <ul uk-accordion>
                            <li class="uk-open dropdown">
                                <a class="uk-accordion-title" href="#">Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                        ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                        consequuntur
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety
                                    service?</a>
                                <div class="uk-accordion-content">
                                    <p>
                                        OneTouch GPS turns your phone into a personal safety
                                        service. No need for any other devices, OneTouch does it
                                        all. In the event of an emergency, simply tap the app and
                                        you are connected to a 24x7 UL monitor central station who
                                        can hear, see and locate you. Help is always just a tap
                                        away. We will also contact your loved ones and advise them
                                        of the emergency.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 form_col">
                        <div class="faq-head">
                            <h2>Let's Talk</h2>
                            <p>If you have a question or a testimonial for us, feel free to contact us using the form on
                                the right.</p>
                        </div>
                        <div class="row form_row">
                            <div class="col-lg-12">
                                <input type="text" class="first_name" placeholder="First name">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" class="last_name" placeholder="Last name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="email" class="email" placeholder="Email" id="exampleInputEmail1"
                                       aria-describedby="emailHelp">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <textarea name="Message" id="form_message" placeholder="Message" cols="30"
                                          rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <a href="#" class="form_submit">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 form_col form_col3">
                        <div class="faq-head">
                            <h2>Contact Here</h2>
                        </div>
                        <div class="faq-contact-text">
                            <a href="#"><p>Toll Free: (888) ­406-2838</p></a>
                            <a href="#"><p>Local: (732) ­399-0021</p></a>
                            <a href="#"><p>731 Route 18 South <br>
                                    East Brunswick, NJ 08816</p></a>
                        </div>


                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- ============================= Start Footer Section Here ============================= -->
<footer id="footer-section">
    <div class="container">
        <!-- Footer Widget -->
        <div class="footer-widget">
            <div class="row g-5 text-center text-sm-start justify-content-between">
                <!-- Left Side -->
                <div class="col-sm-12 col-lg-5 col-xxl-5 mb-4">
                    <!-- Newsletter -->
                    <div class="newsletter-box">
                        <h3 class="footer-sub-heading text-white mb-0">
                            We will email you sometimes
                        </h3>
                        <p class="para-text text-white">
                            Pop your email here and we will prove it
                        </p>
                        <div class="newsletter my-4 pt-3">
                            <form action="javascript:void(0)" class="newsletter-form">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Email" required/>
                                    <button type="submit"
                                            class="button button-gradient button-big-rounded border-0 ms-sm-3 mt-3 mt-sm-0">
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Social Links -->
                    <div class="social-links mt-4 pt-3">
                        <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                        <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                        <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <!-- Right Side -->
                <div class="col-lg-7 col-xxl-6">
                    <div class="row g-5 justify-content-lg-end">
                        <!-- Footer Links -->
                        <div class="col-sm-6 col-lg-3">
                            <h3 class="footer-sub-heading text-white">Get Started</h3>
                            <div class="footer-link">
                                <p><a href="javascript:void(0)">Sign In</a></p>
                                <p>
                                    <a href="javascript:void(0)">Coverage</a>
                                </p>
                            </div>
                        </div>
                        <!-- Footer Links -->
                        <div class="col-sm-6 col-lg-3">
                            <h3 class="footer-sub-heading text-white">Support</h3>
                            <div class="footer-link">
                                <p><a href="javascript:void(0)">Contact Us</a></p>
                                <p>
                                    <a href="javascript:void(0)">FAQ</a>
                                </p>
                                <p>
                                    <a href="javascript:void(0)">Company</a>
                                </p>
                            </div>
                        </div>
                        <!-- Footer Links -->
                        <div class="col-sm-6 col-lg-3">
                            <h3 class="footer-sub-heading text-white">Products</h3>
                            <div class="footer-link">
                                <p><a href="javascript:void(0)">Libris 2.0</a></p>
                                <p>
                                    <a href="javascript:void(0)">Studio Mini</a>
                                </p>
                                <p>
                                    <a href="javascript:void(0)">OneTouch Wearable</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyright -->
        <div class="footer-copyright text-white text-start py-3 border-top mt-5">
            <div class="row py-2 align-items-center">
                <div class="col-sm-6 col-md-7 text-center text-sm-start align-self-center">
                    <p class="mb-3 mb-sm-0">Copyright © 2021 Faysal</p>
                </div>
                <div class="col-sm-6 col-md-5 text-center text-sm-end align-self-center">
                    <a href="javascript:void(0)" class="me-5 text-white footer-border-end-default">Terms of use
                    </a>
                    <a href="javascript:void(0)" class="text-white">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- ============================= End FAQ Section Here ============================= -->

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>

{{--<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit-icons.min.js"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit.min.js"></script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Main JS -->
</body>

</html>
