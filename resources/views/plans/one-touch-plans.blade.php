@extends('layouts/one-plus-app')
@section('content')
    <section id="hero-section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start mt-0">
                    <div class="left-side">
                        <a
                            href="javascript:void(0)"
                            class="stay-connected px-3 px-sm-5 py-2"
                        >360° TOTAL SAFETY PACKAGE</a
                        >
                        <h2 class="heading my-4">Get immediate help wherever you are!</h2>
                        <p class="parat-text">
                            Let OneTouch GPS accompany you wherever you go. With the touch
                            of a button, our trained agents will dispatch help based on your
                            GPS location.
                        </p>
                        <div class="button-box mt-5">
                            <a
                                href="javascript:void(0)"
                                class="button button-gradient button-big-rounded"
                            >Start Saving Today</a
                            >
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center d-none d-lg-block">
                    <div class="right-side">
                        <div class="hero-img">
                            <img src="{{ asset('theme/onePlus/hero-img.png') }}" alt="image" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="devices-section">
        <div class="container">
            <div class="row g-5 mt-4 mt-sm-5">
                @foreach($plans->take(3) as $plan)
                    <div class="col-md-6 col-xl-4">
                        <div class="card device-card device-card-1 border-0 h-100">
                            <div class="card-body p-4">
                                <!-- Product Title -->
                                <div class="product-title">
                                    <h3 class="poligon-bold d-flex justify-content-center">
                                        <a class="system-text" href="libris-2">{{ $plan['name'] }}</a>
                                    </h3>
                                    <p class="parat-text">{{ $plan['description'] }}</p>
                                </div>
                                <!-- Button Box -->
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
                @endforeach
            </div>
        </div>
    </section>
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
                            src="{{ asset('theme/onePlus/how-it-works-img-2.png') }}"
                            alt="image"
                            class="img-fluid"
                        />
                        <h3 class="card-heading poligon-bold d-block mt-4 mt-sm-5 mb-3">
                            Connect
                        </h3>
                        <p>
                            Your Agent will confirm your location and stay on the line until your situation is resolved.
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
                                        <source src="{{ asset('theme/onePlus/video/real-estate.mp4') }}" type="video/mp4" />
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
</script>
