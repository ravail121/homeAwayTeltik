<!-- ============================= Start Footer Section Here ============================= -->
<footer id="footer-section">
    <div class="container">
        <!-- Footer Widget -->
        <div class="footer-widget">
            <div
                class="row g-5 text-center text-sm-start justify-content-between"
            >
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
                                <div class="d-sm-flex justify-content-between">
                                    <input
                                        class="form-control w-75"
                                        type="text"
                                        placeholder="Email"
                                        required
                                    />
                                    <button
                                        type="submit"
                                        class="button button-gradient button-big-rounded border-0 ms-sm-3 mt-3 mt-sm-0 ml-2"
                                    >
                                        Subscribe
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Social Links -->
                    <div class="social-links mt-4 pt-3">
                        <a href="javascript:void(0)"
                        ><i class="fab fa-facebook-f"></i
                            ></a>
                        <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                        <a href="javascript:void(0)"
                        ><i class="fab fa-instagram"></i
                            ></a>


                    </div>
                    <div class="mt-4 pt-3">
                        <a href="tel:+18773314255"
                           class="footer-sub-heading text-white" >Call Us : 1 (877) 331-4255</a>
                    </div>
                </div>


                <!-- Right Side -->
                <div class="col-lg-7 col-xxl-6">
                    <div class="row g-5 justify-content-lg-end">
                        <!-- Footer Links -->
                        <div class="col-sm-6 col-lg-3">
                            <h3 class="footer-sub-heading text-white">Get Started</h3>
                            <div class="footer-link">
                                <p><a href="/sign-on">Sign In</a></p>
{{--                                <p>--}}
{{--                                    <a href="javascript:void(0)">Coverage</a>--}}
{{--                                </p>--}}
                            </div>
                        </div>
                        <!-- Footer Links -->
{{--                        <div class="col-sm-6 col-lg-3">--}}
{{--                            <h3 class="footer-sub-heading text-white">Support</h3>--}}
{{--                            <div class="footer-link">--}}
{{--                                <p><a href="javascript:void(0)">Contact Us</a></p>--}}
{{--                                <p>--}}
{{--                                    <a href="javascript:void(0)">FAQ</a>--}}
{{--                                </p>--}}
{{--                                <p>--}}
{{--                                    <a href="javascript:void(0)">Company</a>--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!-- Footer Links -->
                        <div class="col-sm-6 col-lg-3">
                            <h3 class="footer-sub-heading text-white">Products</h3>
                            <div class="footer-link">
                                <p><a href="/libris-2">Libris 2.0</a></p>
                                <p>
                                    <a href="/studio-mini">Senior Phone</a>
                                </p>
                                <p>
                                    <a href="/wearable">DOT Wearable</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Copyright -->
        <div
            class="footer-copyright text-white text-start py-3 border-top mt-5"
        >
            <div class="row py-2 align-items-center">
                <div
                    class="col-sm-6 col-md-7 align-self-center copy-right-element d-flex"
                >
                    <div class="mb-3 mb-sm-0">Copyright © 2021 Home & Away Secure</div>
                    &nbsp; &nbsp; &nbsp;
                    <div class="mb-3 mb-sm-0">Mobile plans powered by Teltik</div>
                </div>
                <div class="col-sm-6 col-md-5 d-flex justify-content-end term-and-policy">
                    <a href="terms" class="text-white">Terms of use</a>
{{--                    <span class="mx-4"> | </span>--}}
{{--                    <a href="javascript:void(0)" class="text-white">Privacy Policy</a>--}}
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ============================= End Footer Section Here ============================= -->

<style>
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
        height: 50px;
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

    .one-touch-form-input-group {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        width: 100%;
    }

    .button.button-gradient {
        background: transparent linear-gradient(
            106deg
            , #46d546 0%, #46d5a4 100%);
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        color: #ffffff;
    }

    .button {
        font-size: 18px;
        padding: 12px 30px;
    }

    footer:after, footer:before {
        background-image: none !important;
    }

    @media (max-width: 600px) {
        .copy-right-element {
            text-align: center;
        }

        .term-and-policy {
            justify-content: center !important;
        }
    }
</style>
