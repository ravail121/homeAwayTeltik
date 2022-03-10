@extends('layouts/one-plus-app')
@section('content')
    <!-- ============================= Start Hero Section Here ============================= -->
    <section id="hero-section" class="pb-0">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Left Side -->
                <div class="col-lg-6 text-center text-lg-start mt-0">
                    <div class="left-side">
                        <a
                            href="javascript:void(0)"
                            class="stay-connected px-3 px-sm-5 py-2"
                        >Stay connected + Stay safe</a
                        >
                        <div class="heading my-4" style="font-weight: bold; font-family: poligon-bold !important;">
                            <div><span style="color: green !important;">Tap</span> the App or Dot</div>
                            <div><span style="color: purple;">Connect</span> With an Agent</div>
                            <div><span style="color: #1a75cf;">Help</span> is on the Way</div>
                        </div>
{{--                        <p class="parat-text">--}}
{{--                            Let OneTouch GPS accompany you wherever you go. With the touch--}}
{{--                            of a button, our trained agents will dispatch help based on your--}}
{{--                            GPS location.--}}
{{--                        </p>--}}
                        <div class="row justify-content-center col-lg-6" >
                            <div class="col text-center">
                                <div><img src="{{ asset('theme/onePlus/gps-icon.png') }}" alt="image" class="img-fluid banner-icon" />
                                </div>
                                <span > GPS </span>
                            </div>

                            <div class="col text-center">
                                <div><img src="{{ asset('theme/onePlus/video-icon.png') }}" alt="image" class="img-fluid banner-icon" />
                                </div>
                                <span > Video </span>
                            </div>

                            <div class="col text-center">
                                <div><img src="{{ asset('theme/onePlus/voice-icon.png') }}" alt="image" class="img-fluid banner-icon" />
                                </div>
                                <span > Voice </span>
                            </div>

                        </div>
                        <div class="button-box mt-5">
                            <a
                                onclick="scrollIntoDevicesSection()"
                                href="javascript:void(0)"
                                class="button button-gradient button-big-rounded"
                            >Choose a Package Below</a
                            >
                        </div>
                    </div>
                </div>
                <!-- Right Side -->
                <div class="col-lg-6 align-self-center d-none d-lg-block">
                    <div class="right-side">
                        <div class="hero-img">
                            <img src="{{ asset('theme/onePlus/one_touch_banner_image.png') }}" alt="image" class="img-fluid" style="
    transform: scale(1.4, 1.4);
"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================= End Hero Section Here ============================= -->

    <!-- ============================= Start Devices Section Here ============================= -->
    <section id="devices-section" class="py-0">
        <div class="container">
            <!-- Section Title -->
                <div class="section-title text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h4 class="heading mt-5 mb-0" style="font-size: 1.8rem">
                                Choose the Home & Away product
                                that's right for you
                            </h4>
                        </div>
                    </div>
                </div>
        <!-- Device Cards -->
            <div class="row g-5 mt-2 mt-sm-3">
                <!-- Device Card Start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card device-card device-card-1 border-0 h-100">
                        <div class="card-body p-4">
                            <!-- Slider Card Image -->
                            <div class="swiper-container w-100 bg-white mb-4 device-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide text-center p-5">
                                        <a href="libris-2">
                                            <img src="{{ asset('theme/onePlus/product-1.png') }}" alt="image" class="w-50" />
                                        </a >
                                    </div>
                                    <div class="swiper-slide text-center p-5">
                                        <a href="libris-2">
                                            <img src="{{ asset('theme/onePlus/product-1.png') }}" alt="image" class="w-50" />
                                        </a >
                                    </div>
                                </div>
                                <!-- Start Arrows -->
                                <div class="swiper-next-button">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                                <div class="swiper-prev-button">
                                    <i class="fas fa-angle-left"></i>
                                </div>
                                <!-- End Arrows -->
                            </div>
                            <!-- Product Title -->
                            <div class="product-title">
                                <h3 class="poligon-bold">
                                    <a class="system-text" href="libris-2" id="first_device_name">...</a>
                                </h3>
                                <p class="parat-text text-capitalize" id="first_device_description">...</p>
                            </div>
                            <!-- Button Box -->
                            <div class="row justify-content-around">
                                <div class="col-4 align-self-center text-center">
                                 <span class="product-price" id="first_device_price">...</span>
                                </div>
                                <div class="col-8">
                                    <div class="button-box">
                                        <a
                                            href="libris-2"
                                            class="button button-gradient button-rounded d-block w-100 text-center"
                                        >More details</a
                                        >
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Device Card End -->
                <!-- Device Card Start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card device-card device-card-1 border-0 h-100">
                        <div class="card-body p-4">
                            <!-- Slider Card Image -->
                            <div class="swiper-container w-100 bg-white mb-4 device-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide text-center p-5">
                                        <a href="wearable">
                                        <img src="{{ asset('theme/onePlus/product-2.png') }}" alt="image" class="w-75" />
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center p-5">
                                        <a href="wearable">
                                        <img src="{{ asset('theme/onePlus/product-2.png') }}" alt="image" class="w-75" />
                                        </a>
                                    </div>
                                </div>
                                <!-- Start Arrows -->
                                <div class="swiper-next-button">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                                <div class="swiper-prev-button">
                                    <i class="fas fa-angle-left"></i>
                                </div>
                                <!-- End Arrows -->
                            </div>
                            <!-- Product Title -->
                            <div class="product-title">
                                <h3 class="poligon-bold">
                                    <a class="system-text" href="wearable" id="second_device_name">...</a>
                                </h3>
                                <p class="parat-text" id="second_device_description">...</p>
                            </div>
                            <!-- Button Box -->

                            <div class="row justify-content-around">
                                <div class="col-4 align-self-center text-center">
                                    <span class="product-price" id="second_device_price">...</span>
                                </div>
                                <div class="col-8">
                                    <div class="button-box">
                                        <a
                                            href="wearable"
                                            class="button button-gradient button-rounded d-block w-100 text-center"
                                        >More details</a
                                        >
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <!-- Device Card End -->
                <!-- Device Card Start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card device-card device-card-1 border-0 h-100">
                        <div class="card-body p-4">
                            <!-- Slider Card Image -->
                            <div class="swiper-container w-100 bg-white mb-4 device-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide text-center p-5">
                                        <a href="studio-mini">
                                        <img src="{{ asset('theme/onePlus/page-3/product-angel-1.png') }}" alt="image" class="w-53" />
                                        </a>
                                    </div>
                                    <div class="swiper-slide text-center p-5">
                                        <a href="studio-mini">
                                        <img src="{{ asset('theme/onePlus/page-3/product-angel-1.png') }}" alt="image" class="w-53" />
                                        </a>
                                    </div>
                                </div>
                                <!-- Start Arrows -->
                                <div class="swiper-next-button">
                                    <i class="fas fa-angle-right"></i>
                                </div>
                                <div class="swiper-prev-button">
                                    <i class="fas fa-angle-left"></i>
                                </div>
                                <!-- End Arrows -->
                            </div>
                            <!-- Product Title -->
                            <div class="product-title">
                                <h3 class="poligon-bold">
                                    <a class="system-text" href="studio-mini" id="third_device_name">...</a>
                                </h3>
                                <p class="parat-text" id="third_device_description">...</p>
                            </div>
                            <!-- Button Box -->
                            <div class="row justify-content-around">
                                <div class="col-4 align-self-center text-center">
                                    <span class="product-price" id="third_device_price">...</span>
                                </div>
                                <div class="col-8">
                                    <div class="button-box">
                                        <a
                                            href="studio-mini"
                                            class="button button-gradient button-rounded d-block w-100 text-center"
                                        >More details</a
                                        >
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <!-- Device Card End -->
            </div>
        </div>
    </section>
    <!-- ============================= End Devices Section Here ============================= -->

    <!-- ============================= Start Info Section Here ============================= -->
    <section id="info-section">
        <div class="container">
            <div class="bg">
                <div class="row g-5 align-items-center">
                    <!-- Left Side -->
                    <div class="col-xl-6 col-xxl-7">
                        <div class="left-side">
                            <h2 class="heading">
                                We make it SIMPLE to stay active, mobile and independent.
                            </h2>
                            <p class="para-text my-4">
                                Our exclusive safety services are available and accessible
                                right from your phone or device keeping you secure anywhere at
                                anytime.
                            </p>
                            <div class="button-box mt-4">
                                <a
                                    href="https://play.google.com/store/apps/details?id=com.globotrac.homeaway"
                                    class="button button-gradient button-big-rounded"
                                    target="_blank"
                                >
                                    <img src="{{ asset('theme/onePlus/play-store-icon.png') }}" style="max-width: 20px;"/> Download Now</a
                                >
                            </div>
                        </div>
                    </div>
                    <!-- Right Side -->
                    <div class="col-xl-5 col-xxl-4 position-relative">
                        <div class="right-side position-absolute text-center">
                            <img src="{{ asset('theme/onePlus/women.png') }}" alt="women" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================= End Info Section Here ============================= -->

    <!-- ============================= Start How It Works Section Here ============================= -->
    <section id="how-it-works-section">
        <div class="container">
            <!-- Section Title -->
            <div class="secction-title text-center">
                <h4 class="after-heading">How it works</h4>
                <h2 class="mt-2 heading">Get any kind of help, 24/7.</h2>
            </div>
            <div class="row g-3 mt-5 position-relative">
                <!-- How It Works Path -->
                <div
                    class="col-7 m-auto how-it-works-path-box position-absolute d-none d-xl-block"
                >
                    <img src="{{ asset('theme/onePlus/how-it-works-path.png') }}" alt="path" class="w-100" />

                </div>
                <!-- How It Works Box -->
                <div
                    class="col-md-6 col-xl-4 px-3 px-lg-5 py-3 how-it-works-box-parent"
                >
                    <div class="how-it-works-box text-center">
                        <img
                            src="{{ asset('theme/onePlus/how-it-works-img-1.png') }}"
                            alt="image"
                            class="img-fluid"
                        />
                        <h3 class="card-heading poligon-bold d-block mt-4 mt-sm-5 mb-3">
                            Press
                        </h3>
                        <p>
                            Press the Wearable pendant to call an Emergency Response Agent through the app on your smartphone.

                        </p>
                    </div>
                </div>
                <!-- How It Works Box -->
                <div
                    class="col-md-6 col-xl-4 px-3 px-lg-5 py-3 how-it-works-box-parent"
                >
                    <div class="how-it-works-box text-center">
                        <img
                            src="{{ asset('theme/onePlus/how-it-works-img-3.png') }}"
                            alt="image"
                            class="img-fluid"
                        />
                        <h3 class="card-heading poligon-bold d-block mt-4 mt-sm-5 mb-3">
                            Connect
                        </h3>
                        <p>
                            Your Agent will confirm your location and stay on the line until we get you help.
                        </p>
                    </div>
                </div>
                <!-- How It Works Box -->
                <div
                    class="col-md-6 col-xl-4 px-3 px-lg-5 py-3 how-it-works-box-parent"
                >
                    <div class="how-it-works-box text-center">
                        <img
                            src="{{ asset('theme/onePlus/how-it-works-ambulance.png') }}"
                            alt="image"
                            class="img-fluid"
                        />
                        <h3 class="card-heading poligon-bold d-block mt-4 mt-sm-5 mb-3">
                            Get Help
                        </h3>
                        <p>
                            Use it for any emergency. Agents call emergency services, contact family or health care providers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================= End How It Works Section Here ============================= -->

    <!-- ====================================== Start Video Section Here ====================================== -->
    <section id="video-section">
        <div class="container">
            <div class="row justify-content-center row__mt">
                <div class="col-md-10 col-lg-8">
                    <!-- Laptop Main Box -->
                    <div class="laptop-main-box">
                        <!-- Laptop Box -->
                        <div class="laptop-box">
                            <!-- Laptop Image -->
                            <img src="{{ asset('theme/onePlus/laptop.png') }}" alt="laptop" class="w-100" />
                            <!-- Screen Image -->
                            <img src="{{ asset('theme/onePlus/screen.png') }}" class="w-100 video-img" alt="img" />
                            <!-- Cover Video Box -->
                            <div class="cover-video-box">
                                <!-- Cover Video -->
                                <div class="cover-video">
                                    <video controls class="video w-100">
                                        <source src="{{ asset('theme/onePlus/video/OneTouch GPS Medical Alert.mp4') }}" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                            <!-- Play Icon -->
                            <div class="play-icon">
                                <i class="fas fa-play"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================================== End Video Section Here ====================================== -->

    @include('layouts.partials._one-plus-testimonials')
@stop
@push('js')
<script>
    (() => {
        const toScrollElement = window.location.href.split('#');
        if (toScrollElement[1]) {
            setTimeout(() => {
                const myElement = document.getElementById(toScrollElement[1]);
                myElement.scrollIntoView({
                    behavior: "smooth",
                    block: "start",
                    inline: "nearest"
                });
            }, 2500);
        }

        setTimeout(() => {
            const url = ("{{ route('get-all-plans') }}");
            $.ajax({
                type: 'GET',
                url: url,
                dataType: 'json',
                success: function (devices) {
                    $('#first_device_name').html(devices.find(device => device.id === 130).name);
                    $('#first_device_description').html(devices.find(device => device.id === 130).description);
                    $('#first_device_price').html('$' + devices.find(device => device.id === 130).amount_recurring +'/mo');

                    $('#second_device_name').html(devices.find(device => device.id === 131).name);
                    $('#second_device_description').html(devices.find(device => device.id === 131).description);
                    $('#second_device_price').html('$' + devices.find(device => device.id === 131).amount_recurring+'/mo');


                    $('#third_device_name').html(devices.find(device => device.id === 132).name);
                    $('#third_device_description').html(devices.find(device => device.id === 132).description);
                    $('#third_device_price').html('$' + devices.find(device => device.id === 132).amount_recurring+'/mo');

                },
                error: function (data) {
                    console.log('Error: ', data);
                }
            });
        }, 700);
    })();

    setTimeout(() => {
        const videoPlayIcon = document.querySelector('.play-icon');
        videoPlayIcon.addEventListener('click', () => {
            const video = document.querySelector('.video');
            video.style.zIndex = 1;
            video.style.opacity = 1;
            video.play();
            const videoImage = document.querySelector('.video-img');
            videoImage.style.display = 'none';
            videoPlayIcon.style.display = 'none';
        });
    }, 2500);

    scrollIntoDevicesSection = () => document.getElementById("devices-section").scrollIntoView();
</script>

@endpush
