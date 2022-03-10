@extends('layouts.one-plus-app')

@section('content')

    <section id="hero-section-2"
             style="margin-bottom: 50px;">
        <div class="container">
            <div class="row g-5 align-items-center justify-content-center justify-content-lg-between">
                <!-- Left Side -->
                <div class="col-xl-5 col-xxl-5 text-center text-xl-start mt-0">
                    <div class="left-side">
                        <h2 class="heading my-4">Hello! <br>
                            How can we help?</h2>
{{--                        <form class="search_btn d-flex">--}}
{{--                            <button class="btn" type="submit"><img src="{{ asset('theme/onePlus/page-5/search.svg') }}"--}}
{{--                                                                   alt="search"></button>--}}

{{--                            <input class="search_inside" type="search" placeholder="Search Help articles"--}}
{{--                                   aria-label="search">--}}

{{--                        </form>--}}

                    </div>
                </div>

    </section>

    <!-- ============================= Start FAQ Section Here ============================= -->
    <section id="faq_part">
        <div class="container faq_container">
            <div class="row">
                <div class="col-lg-7 form_col form_col2">
                    <div class="faq-head">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <ul class="nav nav-tabs main_ul" id="myTab" role="tablist" style="border-bottom: 0px;">
                        @foreach($data['categories'] as $category)
                            <li class="nav-item" role="presentation"
                                onclick="categorySelected({!! $category['id'] !!})">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">
                                    {{ $category['name'] }}
                                </button>
                            </li>
                        @endforeach
{{--                        <li class="nav-item" role="presentation">--}}
{{--                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"--}}
{{--                                    type="button" role="tab" aria-controls="home" aria-selected="true">PRE-SALE--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                            <li class="nav-item" role="presentation">--}}
{{--                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"--}}
{{--                                        type="button" role="tab" aria-controls="home" aria-selected="true">PRE-SALE--}}
{{--                                </button>--}}
{{--                            </li>--}}
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <ul uk-accordion id="support-ul">
{{--                                @foreach($data['support'] as $support)--}}
{{--                                    <li class="dropdown">--}}
{{--                                        <a class="uk-accordion-title" href="#">{{ $support['question'] }}</a>--}}
{{--                                        <div class="uk-accordion-content">--}}
{{--                                            <p>--}}
{{--                                                {!! $support['description'] !!}--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}

{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                            </ul>
                        </div>
{{--                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">--}}
{{--                            <ul uk-accordion>--}}
{{--                                <li class="uk-open dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">Sed ut perspiciatis unde omnis iste natus--}}
{{--                                        error sit voluptatem</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
{{--                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore--}}
{{--                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim--}}
{{--                                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia--}}
{{--                                            consequuntur--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">--}}
{{--                            <ul uk-accordion>--}}
{{--                                <li class="uk-open dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">Sed ut perspiciatis unde omnis iste natus--}}
{{--                                        error sit voluptatem</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
{{--                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore--}}
{{--                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim--}}
{{--                                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia--}}
{{--                                            consequuntur--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">--}}
{{--                            <ul uk-accordion>--}}
{{--                                <li class="uk-open dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">Sed ut perspiciatis unde omnis iste natus--}}
{{--                                        error sit voluptatem</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
{{--                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore--}}
{{--                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim--}}
{{--                                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia--}}
{{--                                            consequuntur--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">--}}
{{--                            <ul uk-accordion>--}}
{{--                                <li class="uk-open dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">Sed ut perspiciatis unde omnis iste natus--}}
{{--                                        error sit voluptatem</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium--}}
{{--                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore--}}
{{--                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim--}}
{{--                                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia--}}
{{--                                            consequuntur--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="dropdown">--}}
{{--                                    <a class="uk-accordion-title" href="#">What is OneTouch GPS personal safety--}}
{{--                                        service?</a>--}}
{{--                                    <div class="uk-accordion-content">--}}
{{--                                        <p>--}}
{{--                                            OneTouch GPS turns your phone into a personal safety--}}
{{--                                            service. No need for any other devices, OneTouch does it--}}
{{--                                            all. In the event of an emergency, simply tap the app and--}}
{{--                                            you are connected to a 24x7 UL monitor central station who--}}
{{--                                            can hear, see and locate you. Help is always just a tap--}}
{{--                                            away. We will also contact your loved ones and advise them--}}
{{--                                            of the emergency.--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="support-email" method="post">
                        {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-lg-12 form_col">
                            <div class="faq-head">
                                <h2>Let's Talk !</h2>
                                <p>If you have a question or a testimonial for us, feel free to contact us using the
                                    form on
                                    the right.</p>
                            </div>
                            <div class="row form_row">
                                <div class="col-lg-12">
                                    <input type="text" class="first_name" placeholder="Name" name="name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="email" class="email" placeholder="Email" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" name="email" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" class="first_name" placeholder="Email" id="exampleInputEmail1"
                                           name="subject" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                <textarea name="message" id="message" placeholder="Message" cols="30" class="first_name"
                                          rows="10" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="form_submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-12 form_col form_col3">--}}
{{--                            <div class="faq-head">--}}
{{--                                <h2>Contact Here</h2>--}}
{{--                            </div>--}}
{{--                            <div class="faq-contact-text">--}}
{{--                                <a href="#"><p>Toll Free: (888) ­406-2838</p></a>--}}
{{--                                <a href="#"><p>Local: (732) ­399-0021</p></a>--}}
{{--                                <a href="#"><p>731 Route 18 South <br>--}}
{{--                                        East Brunswick, NJ 08816</p></a>--}}
{{--                            </div>--}}


{{--                        </div>--}}
{{--                    </div>--}}
                </div>

            </div>
        </div>
    </section>

    <!-- ============================= End FAQ Section Here ============================= -->

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    {{--<script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit-icons.min.js"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/js/uikit.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

@endsection

@push('js')
<script>
    let selectedCategoryId = null;

    categorySelected = (categoryId = null) => {
        let supportData = {!! isset($data) ? $data : null !!};
        if (!categoryId) {
            selectedCategoryId = (supportData.formatted && supportData.formatted.length) ?
                supportData.formatted[0].id : null;
        } else {
            selectedCategoryId = categoryId;
        }
        if (selectedCategoryId) {
            $('#support-ul').empty();
            const selectedCategory = supportData.formatted
                .find(singleCategory => singleCategory.id === selectedCategoryId);
            selectedCategory.supports.forEach(singleSupport => {
                $('#support-ul').append('' +
                    '<li class="dropdown"><a class="uk-accordion-title" href="#">' + singleSupport.question +
                    '</a><div class="uk-accordion-content"><p>' + singleSupport.description +'</p></div></li>');
            })
        }
    }

    setTimeout(() => categorySelected(), 3000)
</script>
@endpush
