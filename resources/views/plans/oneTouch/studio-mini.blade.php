@extends('layouts.one-plus-app')

@section('content')
<!-- ============================= End Header Section Here ============================= -->

<!-- ============================= Start Hero Section Here ============================= -->
<section id="hero-section">
    <div class="container">
        <div
            class="row g-5 align-items-center justify-content-center justify-content-lg-between"
        >
            <!-- Left Side -->
            <div class="col-xl-6 col-xxl-5 text-center text-xl-start mt-0">
                <div class="left-side">
                    <h3 class="after-heading">Samsung A11</h3>
                    <h2 class="heading my-4">
                        Your Personal Companion with a Smart Phone Made Easy</h2>
                    <div class="button-box mt-5">
                        <a
                            href="javascript:void(0)" id="firstOrderStudioMini"
                            class="button button-gradient button-big-rounded d-block w-75 text-center"
                        >Order Now</a
                        >
                    </div>
                    <!-- Free Shipping & Call to Order -->
                    <div class="free-shipping-and-call-to-order-box mt-5">
                        <div
                            class="d-sm-flex align-items-center justify-content-center justify-content-xl-start"
                        >
                            <!-- Free Shipping -->
                            <a
                                href="javascript:void(0)"
                                class="free-shipping d-flex align-items-center me-sm-4 justify-content-start"
                            >
                                <img
                                    src="{{ asset('theme/onePlus/page-2/shipping-icon.svg') }}"
                                    alt="shipping"
                                    class="img-fluid"
                                />
                                <p class="mb-0 ms-3" style="
    margin-top: 0px;
">Free Shipping</p>
                            </a>
                            <!-- Call to Order -->
                            <a
                                href="javascript:void(0)"
                                class="call-to-order d-flex align-items-center justify-content-start mt-4 mt-sm-0"
                            >
                                <img
                                    src="{{ asset('theme/onePlus/page-2/call-to-order-icon.svg') }}"
                                    alt="shipping"
                                    class="img-fluid"
                                />
                                <div class="ms-3">
                      <span class="mb-0 text-start d-block w-100"
                      >Call to order</span
                      >
                                    <p class="mb-0" style="margin-top: 0px;">+1 877 331-4255</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Side -->
            <div class="col-xl-6 align-self-center d-none d-xl-block">
                <div class="right-side">
                    <div class="hero-img">
                        <img
{{--                            src="{{ asset('theme/onePlus/page-3/hero-img.png') }}"--}}
                            src="{{ asset('theme/onePlus/page-3/product-angel-1.png') }}"
                            alt="image"
                            class="img-fluid"
                            style="height: 34rem;"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================= End Hero Section Here ============================= -->

<!-- ============================= Start Product Info Section Here ============================= -->
<section id="product-info-section">
    <div class="container">
        <div class="row g-5">
            <!-- Left Side -->
            <div class="col-xl-6">
                <div class="left-side">
                    <div class="product-img-tab">
                        <div class="row">
                            <!-- Tab Button Image For Desktop View -->
                            <div class="col-md-3 d-none d-md-block">
                                <nav>
                                    <div
                                        class="nav flex-md-column nav-tabs border-0"
                                        id="nav-tab"
                                        role="tablist"
                                    >
                                        <!-- Product Angel 1 -->
                                        <img
                                            class="nav-link active img-fluid"
                                            id="product-angel-1-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#product-angel-1"
                                            role="tab"
                                            aria-controls="product-angel-1"
                                            aria-selected="true"
                                            src="{{ asset('theme/onePlus/page-3/product-angel-1.png') }}"
                                            alt="image"
                                        />
                                        <!-- Product Angel 2 -->
                                        <img
                                            class="nav-link img-fluid"
                                            id="product-angel-2-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#product-angel-2"
                                            role="tab"
                                            aria-controls="product-angel-2"
                                            aria-selected="false"
                                            src="{{ asset('theme/onePlus/product-2.png') }}"
                                            alt="image"
                                        />
                                        <!-- Product Angel 3 -->
                                        <img
                                            class="nav-link img-fluid"
                                            id="product-angel-3-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#product-angel-3"
                                            role="tab"
                                            aria-controls="product-angel-3"
                                            aria-selected="false"
                                            src="{{ asset('theme/onePlus/page-3/samsung-galaxy-a11.jpg') }}"
                                            alt="image"
                                        />
                                        <!-- Product Angel 4 -->
                                        <img
                                            class="nav-link img-fluid"
                                            id="product-angel-4-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#product-angel-4"
                                            role="tab"
                                            aria-controls="product-angel-4"
                                            aria-selected="false"
                                            src="{{ asset('theme/onePlus/page-3/samsung-galaxy-a11-features.webp') }}"
                                            alt="image"
                                        />
                                    </div>
                                </nav>
                            </div>
                            <!-- Tab Content -->
                            <div class="col-md-9">
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- Product Angel 1 -->
                                    <div
                                        class="tab-pane fade show active text-center"
                                        id="product-angel-1"
                                        role="tabpanel"
                                        aria-labelledby="product-angel-1-tab"
                                    >
                                        <img
                                            src="{{ asset('theme/onePlus/page-3/product-angel-1.png') }}"
                                            alt="image"
                                            class="img-fluid"
                                        />
                                    </div>
                                    <!-- Product Angel 2 -->
                                    <div
                                        class="tab-pane fade text-center"
                                        id="product-angel-2"
                                        role="tabpanel"
                                        aria-labelledby="product-angel-2-tab"
                                    >
                                        <img
                                            src="{{ asset('theme/onePlus/product-2.png') }}"
                                            alt="image"
                                            class="img-fluid"
                                        />
                                    </div>
                                    <!-- Product Angel 3 -->
                                    <div
                                        class="tab-pane fade text-center"
                                        id="product-angel-3"
                                        role="tabpanel"
                                        aria-labelledby="product-angel-3-tab"
                                    >
                                        <img
                                            src="{{ asset('theme/onePlus/page-3/samsung-galaxy-a11.jpg') }}"
                                            alt="image"
                                            class="img-fluid"
                                        />
                                    </div>
                                    <!-- Product Angel 4 -->
                                    <div
                                        class="tab-pane fade text-center"
                                        id="product-angel-4"
                                        role="tabpanel"
                                        aria-labelledby="product-angel-4-tab"
                                    >
                                        <img
                                            src="{{ asset('theme/onePlus/page-3/samsung-galaxy-a11-features.webp') }}"
                                            alt="image"
                                            class="img-fluid"
                                        />
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Button Image For Mobile View -->
                            <div class="col-md-3 d-md-none">
                                <nav>
                                    <div
                                        class="nav flex-md-column nav-tabs border-0"
                                        id="nav-tab"
                                        role="tablist"
                                    >
                                        <!-- Product Angel 1 -->
                                        <img
                                            class="nav-link active img-fluid"
                                            id="product-angel-1-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#product-angel-1"
                                            role="tab"
                                            aria-controls="product-angel-1"
                                            aria-selected="true"
                                            src="{{ asset('theme/onePlus/page-3/product-angel-1.png') }}"
                                            alt="image"
                                        />
                                        <!-- Product Angel 2 -->
                                        <img
                                            class="nav-link img-fluid"
                                            id="product-angel-2-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#product-angel-2"
                                            role="tab"
                                            aria-controls="product-angel-2"
                                            aria-selected="false"
                                            src="{{ asset('theme/onePlus/product-2.png') }}"
                                            alt="image"
                                        />
                                        <!-- Product Angel 3 -->
                                        <img
                                            class="nav-link img-fluid"
                                            id="product-angel-3-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#product-angel-3"
                                            role="tab"
                                            aria-controls="product-angel-3"
                                            aria-selected="false"
                                            src="{{ asset('theme/onePlus/page-3/samsung-galaxy-a11.jpg') }}"
                                            alt="image"
                                        />
                                        <!-- Product Angel 4 -->
                                        <img
                                            class="nav-link img-fluid"
                                            id="product-angel-4-tab"
                                            data-bs-toggle="tab"
                                            data-bs-target="#product-angel-4"
                                            role="tab"
                                            aria-controls="product-angel-4"
                                            aria-selected="false"
                                            src="{{ asset('theme/onePlus/page-3/samsung-galaxy-a11-features.webp') }}"
                                            alt="image"
                                        />
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Side -->
            <div class="col-xl-6">
                <div class="right-side">
                    <!-- Product Card -->
                    <div class="product-card card border-0 p-3">
                        <!-- Product Short Details -->
                        <div
                            class="product-short-details d-sm-flex justify-content-between align-items-center border-bottom pb-3"
                        >
                            <!-- About -->
                            <div class="about">
                                <h2 class="heading" id="device_name">Samsung A11</h2>
                                <p class="para-text mt-4" id="device_description">
                                    Personal security smartphone
                                </p>
                            </div>
                            <!-- Price -->
                            <div class="price">
                                <p class="para-text mb-0">Device Price</p>
                                <h2 class="amount">$ <span id="deviceOneTimeAmount">0</span></h2>
                            </div>
                        </div>
                        <!-- Monthly Plan -->
                        <div
                            class="monthly-plan d-flex justify-content-between align-items-center mt-4"
                        >
                            <div>
                                <p class="para-text mb-0">Monthly Plan:</p>
                                <p class="para-text mb-0">Unlimited Talk, Text, 2GB Data + Emergency Monitoring</p>
                            </div>
                            <div>
                                <h2 class="price mb-0">
                                    <span id="deviceMonthlyAmount">0</span>/<span style="font-size: 20px">mo</span>
                                </h2>
                            </div>
                        </div>
                        <!-- Facilities -->
                        <div class="facilities my-4">
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="media d-flex">
                                        <img
                                            src="{{ asset('theme/onePlus/page-3/Icon_right.png') }}"
                                            alt="icon" class="img-fluidn" style="margin-top: 5px;">
                                        <div class="media-body ms-2">
                                            <p class="para-text mb-0">No long-term contracts</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="media d-flex">
                                        <img
                                            src="{{ asset('theme/onePlus/page-3/Icon_right.png') }}"
                                            alt="icon" class="img-fluidn" style="margin-top: 5px;">
                                        <div class="media-body ms-2">
                                            <p class="para-text mb-0">Keep your existing phone number</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="media d-flex">
                                        <img
                                            src="{{ asset('theme/onePlus/page-3/Icon_right.png') }}"
                                            alt="icon" class="img-fluidn" style="margin-top: 5px;">
                                        <div class="media-body ms-2">
                                            <p class="para-text mb-0">
                                                Get Help anytime, anywhere
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="media d-flex">
                                        <img src="{{ asset('theme/onePlus/page-3/Icon_right.png') }}"
                                             alt="icon" class="img-fluidn" style="margin-top: 5px;">
                                        <div class="media-body ms-2">
                                            <p class="para-text mb-0">Simple menu & Large screen</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="media d-flex">
                                        <img src="{{ asset('theme/onePlus/page-3/Icon_right.png') }}" alt="icon" class="img-fluidn"
                                             style="margin-top: 5px;">
                                        <div class="media-body ms-2">
                                            <p class="para-text mb-0">
                                                Smartphone Fall Detection
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Button Box -->
                        <div class="button-box mt-3">
                            <a
                                href="javascript:void(0)" id="secondOrderStudioMini"
                                class="button button-gradient button-big-rounded d-block w-100 text-center"
                            >Order Now</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================= End Product Info Section Here ============================= -->

<!-- ============================= Start Features Section Here ============================= -->
<section id="features-section">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title text-center">
            <h3 class="after-heading">Features</h3>
            <h2 class="heading">Medical Alert Made Easy</h2>
        </div>
        <!-- Features -->
        <div class="features mt-5">
            <div class="row g-4 g-xl-0 justify-content-center position-relative">
                <!-- Features Middle Image Space 1 -->
                <div
                    class="col-lg-6 col-xxl-6 position-absolute features-middle-image d-none d-xl-block"
                >
                    <img
                        src="{{ asset('theme/onePlus/page-3/features-middle-image.png') }}"
                        alt="imafe"
                        class="w-100"
                    />
                </div>
                <!-- Features Top Item -->
                <div
                    class="col-md-6 col-xl-12 text-xl-center features-top-item mb-xxl-5"
                >
                    <div class="col-xl-3 m-auto">
                        <img
                            src="{{ asset('theme/onePlus/page-3/features-icon-1.svg') }}"
                            alt="icon"
                            class="img-fluid features-icon d-xl-none"
                        />
                        <h3 class="card-heading">Simple menu & Large
                            screen + Voice typing</h3>
                        <p class="para-text mt-3">
                            Easy to see buttons and navigation + Sending a text is simple. Just speak into the smartphone and message will appear.
                        </p>
                    </div>
                </div>
                <!-- Features Left Item 1 -->
                <div class="col-md-6 col-xl-3 text-xl-end mt-xl-5 pt-xl-5">
                    <img
                        src="{{ asset('theme/onePlus/page-3/features-icon-2.svg') }}"
                        alt="icon"
                        class="img-fluid features-icon d-xl-none"
                    />
                    <h3 class="card-heading">Long-lasting battery</h3>
                    <p class="para-text mt-3">
                        Battery will hold charge for days
                    </p>
                </div>
                <!-- Features Middle Image Space 1 -->
                <div class="col-xl-6 d-none d-xl-block"></div>
                <!-- Features Right Item 1 -->
                <div class="col-md-6 col-xl-3 mt-xl-5 pt-xl-5">
                    <img
                        src="{{ asset('theme/onePlus/page-3/features-icon-3.svg') }}"
                        alt="icon"
                        class="img-fluid features-icon d-xl-none"
                    />
                    <h3 class="card-heading">Peace of mind for
                        friends & family</h3>
                    <p class="para-text mt-3">
                        Our DOT keeps friends and family updated on your safety with location updates, battery and more - with your permission, all within our app.
                    </p>
                </div>
                <!-- Features Left Item 2 -->
                <div class="col-md-6 col-xl-3 text-xl-end mt-xl-5 pt-xl-5">
                    <img
                        src="{{ asset('theme/onePlus/page-3/features-icon-4.svg') }}"
                        alt="icon"
                        class="img-fluid features-icon d-xl-none"
                    />
                    <h3 class="card-heading">Mobile internet with
                        maps and directions</h3>
                    <p class="para-text mt-3">
                        Simplified web browsing with easy to use navigation
                    </p>
                </div>
                <!-- Features Middle Image Space 2 -->
                <div class="col-xl-6 d-none d-xl-block"></div>
                <!-- Features Right Item 2 -->
                <div class="col-md-6 col-xl-3 mt-xl-5 pt-xl-5">
                    <img
                        src="{{ asset('theme/onePlus/page-3/features-icon-5.svg') }}"
                        alt="icon"
                        class="img-fluid features-icon d-xl-none"
                    />
                    <h3 class="card-heading">DOT Wearable
                        Bluetooth Button</h3>
                    <p class="para-text mt-3">
                        Remote emergency button has up to a 40 foot range. Press. Connect. Get Help.
                    </p>
                </div>
                <!-- Features Bottom Item -->
                <div class="col-md-6 col-xl-12 text-xl-center mt-xxl-5">
                    <div class="col-xl-3 m-auto">
                        <img
                            src="{{ asset('theme/onePlus/page-3/features-icon-6.svg') }}"
                            alt="icon"
                            class="img-fluid features-icon d-xl-none"
                        />
                        <h3 class="card-heading">Video chat with family
                            and friends + Camera</h3>
                        <p class="para-text mt-3">
                            Device is shipped with pre-installed apps and front facing camera,
                            making this perfect for video chatting with friends and family.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============================= End Features Section Here ============================= -->

@include('layouts.partials._one-plus-safety-services')

@include('layouts.partials._one-plus-how-it-works')

@include('layouts.partials._one-plus-info-section')

@include('layouts.partials._one-plus-testimonials')

{{--<!-- Bootstrap JS Bundle with Popper -->--}}
{{--<script--}}
{{--    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"--}}
{{--    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"--}}
{{--    crossorigin="anonymous"--}}
{{--></script>--}}
{{--<!-- Swiper JS -->--}}
{{--<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>--}}
{{--<!-- Main JS -->--}}
{{--<script src="../js/index.js"></script>--}}
{{--</body>--}}
{{--</html>--}}

@endsection


@push('js')
    <script>
        const currentPlanId = 132;
        const currentDeviceId = 88;
        let checkOutOrderHash = null;
        $("document").ready(function() {
            getPlanDetail(currentPlanId);
            getDeviceDetail(currentDeviceId);
            var str = window.location.href;
            var n = str.lastIndexOf('=');
            var selectedplan = str.substring(n + 1);
            setTimeout(function () {
                $('#plan-' + parseInt(selectedplan, 10)).trigger("click");
            }, 100);
        });

        $(function(){
            var defaultImei, clearAreaCode, sessionCart, deviceId, requireAreaCode, planCarrierId;

            sessionCart    = @json($sessionCart);
            deviceId       = {{ (!empty($deviceId) ? $deviceId : 'null') }};

            requireAreaCode;

            const $getStartedButton         = $('.d-block'),
                $addStepNumber            = $('.no-margin > ul'),
                $choosePlan               = $("#choosePlan"),
                $portingInputMask         = $(".porting-number"),
                $areaInputMask            = $(".area"),
                $addonSection             = $choosePlan.find('section.addon-section'),
                $formWithPlan             = $choosePlan.find('#form-with-plan'),
                $addToCart                = $choosePlan.find('.right-con-wrap').find('a'),
                $changeStyleOfDescription = $('.item-wrap.plan').find('.mobile-flex').find('ul > li');
            if (typeof $portingInputMask.inputmask === 'function') {
                $portingInputMask.inputmask("mask", {"mask": "999-999-9999", clearIncomplete: true});
                $areaInputMask.inputmask("mask", {"mask": "999", placeholder: "", clearIncomplete: true});
            }

            $('#imei-number').on('focus', function(){
                $(this).attr('type', 'number');

            });



            $('#modalProceed .modal-body').find('#additional-form-popup').find('a').on('click', function(e){

                e.preventDefault();

                const $this      = $(this),
                    $formPopup = $('#additional-form-popup');
                var inputField;

                $formPopup.find('input[name="select_plans"]').remove();
                $formPopup.find('input[name="select_devices"]').remove();
                $formPopup.find('input[name="checkout"]').remove();


                if ($this.hasClass('select-plans')) {
                    inputField = '<input type="hidden" name="select_plans" value="select_plans">';

                } else if ($this.hasClass('select-devices')) {
                    inputField = '<input type="hidden" name="select_devices" value="select_devices">';

                } else if ($this.hasClass('checkout')) {
                    inputField = '<input type="hidden" name="checkout" value="checkout">';
                }

                $formPopup.append(inputField);
                $formPopup.submit();

            });


            $('section.sim-section').find('.sim-selection').on('change', ':radio[name="sim_id"]', function(){
                if ($(this).is(':checked')) {
                    var simId   = $(this).val();
                    var simName = $('label[for="sim'+simId+'"]').text();
                    $formWithPlan.find('input[name="sim_name"]').val(simName);

                }
            });

            $('a.continue-without-plan').on('click', function(h) {
                h.preventDefault();
                if (sessionCart.length != 0) {
                    var activeGroupId = sessionCart.active_group_id;
                    var orderGroups   = sessionCart.order_groups;

                    if (orderGroups.length == 0) {

                        window.location.href = "{{ route('devices.index') }}";
                    }

                    for (var k = 0; k < orderGroups.length; k++) {
                        if(orderGroups[k].id === activeGroupId) {

                            var plan = orderGroups[k].plan;
                            var device = orderGroups[k].device;

                            if (activeGroupId == 0) {
                                window.location.href = "{{ route('devices.index') }}";

                            } else {
                                if (device.id != null) {
                                    $('#additional-form-popup').find('h6.product-type').text(device.name + ' added to cart without Plan');

                                    $.ajax({
                                        type: 'POST',
                                        url: '{{ route('devices.store') }}',
                                        dataType: 'json',
                                        data: {
                                            device_id: device.id,
                                            own_device: 'own_device',
                                        },
                                        success: function (data) {
                                            $('#modalProceed').modal('show');

                                        },
                                        error: function (data) {
                                            console.log('Error: ', data);
                                        }
                                    });


                                } else {
                                    window.location.href = "{{ route('devices.index') }}";
                                    return false;
                                }
                            }
                        }
                    }
                } else if (sessionCart.length == 0) {
                    window.location.href = "{{ route('devices.index') }}";
                    return false;
                }

                $('#modalProceed').modal('show');
            });


            $addStepNumber.addClass('step1');
            $changeStyleOfDescription.addClass('desc');


            $addToCart.on('click', submitForm);
            document.getElementById('firstOrderStudioMini').addEventListener('click', insertDevice.bind(null, {
                device_id: 88,
                plan_id: 132,
                buy_sim: 'yes',
                sim_id: 28,
            }));

            document.getElementById('secondOrderStudioMini').addEventListener('click', insertDevice.bind(null, {
                device_id: 88,
                plan_id: 132,
                buy_sim: 'yes',
                sim_id: 28,
            }));
            // $getStartedButton.on('click', sendDataToModal);
            //
            // $('#porting1').on('change', showPortingInput);
            // // $('#exampleRadios1').on('change', showSimInputs);
            // $('#exampleRadios1').on('change', showSimInput);
            //
            // $('#porting2').on('change', hidePortingInput);
            // // $('#exampleRadios2').on('change', hideSimInputs);
            // $('#exampleRadios2').on('change', hideSimInput);

            // $('.sim-selection').on('click','input[name="sim_id"]', function(){
            //     makeRadiosDeselectableByName();
            // });



            function submitForm(p) {
                p.preventDefault();

                const $this = $(this);
                var addons  = [];

                $formWithPlan.find('input[name="choose_device"]').remove();

                if ($this.hasClass('run-ajax')) {

                    if ($formWithPlan.valid()) {
                        $('#modalProceed').modal('show');


                        var formPlanId       = $formWithPlan.find('input[name="plan_id"]').val();
                        var formPlanType     = $formWithPlan.find('input[name="plan_type"]').val();
                        var formDeviceId     = $formWithPlan.find('input[name="device_id"]').val();
                        var formDeviceName   = $formWithPlan.find('input[name="device_name"]').val();
                        var formDeviceAmount = $formWithPlan.find('input[name="device_amount"]').val();
                        var formSimName      = $formWithPlan.find('input[name="sim_name"]').val();
                        var formBuySim       = $formWithPlan.find('input[name="buy_sim"]:checked').val();
                        var formSimId        = $formWithPlan.find('input[name="sim_id"]:checked').val();
                        var formSimNumber    = $formWithPlan.find('input[name="sim_number"]').val();
                        var formAreaCode     = $formWithPlan.find('input[name="area_code"]').val();
                        var formPorting      = $formWithPlan.find('input[name="porting"]:checked').val();
                        var formPortNumber   = $formWithPlan.find('input[name="port_number"]').val();
                        var bringOwnDevice   = $formWithPlan.find('input[name="bringing_own_device"]:checked').val();
                        var operatingSystem  = $formWithPlan.find('select#operating-system option:checked').val();
                        var imei             = $formWithPlan.find('input[name="imei"]').val();

                        $.each($('section.addon-section').find('input[type="checkbox"]:checked'), function() {
                            addons.push($(this).val());
                        });


                        $.ajax({
                            type: 'POST',
                            url: '{{ route('plans.store') }}',
                            dataType: 'json',
                            beforeSend: showLoader,
                            data:{
                                plan_id          : formPlanId,
                                plan_type        : formPlanType,
                                device_id        : formDeviceId,
                                device_name      : formDeviceName,
                                device_amount    : formDeviceAmount,
                                sim_name         : formSimName,
                                buy_sim          : formBuySim,
                                sim_id           : formSimId,
                                sim_number       : formSimNumber,
                                area_code        : formAreaCode,
                                porting          : formPorting,
                                bring_own_device : bringOwnDevice,
                                operating_system : operatingSystem,
                                imei             : imei,
                                port_number      : formPortNumber,
                                addon            : addons,
                                sim_required     : simRequired.value,
                            },
                            success: function (data) {
                                console.log(data);

                            },
                            complete: hideLoader,
                            error: function (data) {
                                console.log('Error: ', data);
                            }
                        });

                    }
                } else if ($this.hasClass('choose-device')) {
                    var hiddenField = '<input type="hidden" name="choose_device" value="choose_device">';
                    $formWithPlan.append(hiddenField);

                    $formWithPlan.submit();

                }
            };

            function insertDevice(deviceData, userInputEvent) {
                showLoader();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('plans.store') }}',
                    dataType: 'json',
                    beforeSend: showLoader,
                    data: deviceData,
                    success: function (data) {
                        hideLoader();
                        checkOutOrderHash = data.order_hash;
                        $('#navigatingModal').modal({backdrop: 'static', keyboard: false});
                        $('#navigatingModal').modal('show');
                    },
                    complete: hideLoader,
                    error: function (data) {
                        console.log('Error: ', data);
                    }
                });
                // $('#modalProceed').modal('show');
            }



            function submitLibreOrder () {
                const libreOrderForm = $('#libris-plan-form');
                const planId = libreOrderForm.find('input[name="plan_id"]').val();
                const deviceId = libreOrderForm.find('input[name="device_id"]').val();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('plans.store') }}',
                    dataType: 'json',
                    beforeSend: showLoader,
                    data:{
                        plan_id          : planId,
                        device_id        : deviceId,
                        device        : deviceId,
                        device_amount    : 149,
                        is_libre_order: true,
                    },
                    success: function (data) {
                        // window.location.href = 'checkout?order_hash=9381e14038f740451b3c022643c9530003561bab'
                        console.log('data', data);
                        window.location.href = `checkout?order_hash=${data.cart_order_hash}`
                    },
                    complete: hideLoader,
                    error: function (data) {
                        console.log('Error: ', data);
                    }
                });

                console.log('here again', planId, deviceId);
            }


            function sendDataToModal(event){
                event.preventDefault();

                $('#choosePlan').find('section.device-info-section').addClass('d-none');

                const $simSection        = $('#choosePlan').find('section.sim-section'),
                    $portSection       = $('section.port-section'),
                    $areaCodeSection   = $simSection.find('section.area-code-section'),
                    $simSelection      = $simSection.find('.sim-selection'),
                    $ownDeviceSection  = $choosePlan.find('section.own-device-section'),
                    $deviceInfoSection = $choosePlan.find('section.device-info-section');


                const $this        = $(this),
                    $modal       = $('#choosePlan'),
                    $planHeading = $modal.find('.t-black-1.f18'),
                    $planName    = $modal.find('.right-con-wrap > ul'),
                    $planAmount  = $modal.find('.right-con-wrap').find('.price-wrap').find('.price');

                var deviceID              = $this.data('device_id'),
                    planCarrierId         = $this.data('plan_carrier_id'),
                    planAreaCode          = $this.data('plan_area_code'),
                    planID                = $this.data('plan_id'),
                    deviceName            = $this.data('device_name'),
                    signupPorting         = $this.data('signup_porting'),
                    planName              = $this.data('plan_name'),
                    planAmount            = $this.data('amount'),
                    planDescription       = $this.data('plan_desc'),
                    planRequireDeviceInfo = $this.data('plan_require_device_info'),
                    planType              = $this.data('plan_type'),
                    areaCode              = $this.data('area_code'),
                    simRequired           = $this.data('sim_required'),
                    associateWithDevice   = $this.data('associate_with_device'),
                    simSection            = $('section.sim-section'),
                    chooseDeviceButton    = $('.choose-device'),
                    addWithoutDevice      = $('.add-without-device'),
                    ownSimCardOption      = $this.data('own_sim_card_option');

                if (associateWithDevice == 0) {
                    $('.mandatory-star').addClass('d-none');
                } else if (associateWithDevice == 1) {
                    $('.mandatory-star').addClass('d-none');
                } else if (associateWithDevice == 2) {
                    $('.mandatory-star').removeClass('d-none');
                } else if (associateWithDevice == 3) {
                    $('.mandatory-star').addClass('d-none');
                }

                if($this.data('imei_required')){
                    $('.imei-info').hide()
                }else{
                    $('.imei-info').show()
                }

                if(ownSimCardOption){
                    $('.own-sim-card-option').show()
                } else {
                    $('.own-sim-card-option').hide()
                }

                if (signupPorting && !planAreaCode) {
                    $portSection.find('.porting-yes').addClass('d-none');
                    $portSection.find('.porting-no').addClass('d-none');
                    $portSection.find('.port-message-1').removeClass('d-none');
                    $portSection.find('.port-message-2').removeClass('d-none');
                    $portSection.find('.port-message-3').removeClass('d-none');
                    $portSection.find('#porting1').prop('checked', true);
                    $portSection.find('.port-number-change').addClass('d-none');
                    $portSection.find('.port-number').removeClass('d-none');
                    $portSection.find('.area-code').addClass('d-none');
                    $portSection.find('.area-code-note').addClass('d-none');
                } else if (!signupPorting && planAreaCode) {
                    $portSection.find('.porting-yes').addClass('d-none');
                    $portSection.find('.porting-no').addClass('d-none');
                    $portSection.find('.port-message-1').addClass('d-none');
                    $portSection.find('.port-message-2').removeClass('d-none');
                    $portSection.find('.port-message-3').addClass('d-none');
                    $portSection.find('#porting2').prop('checked', true);
                    $portSection.find('.port-number-change').addClass('d-none');
                    $portSection.find('.area-code').removeClass('d-none');
                    $portSection.find('.port-number').addClass('d-none');
                    $portSection.find('.area-code-note').removeClass('d-none');
                } else if(signupPorting && planAreaCode) {
                    $portSection.find('.porting-yes').removeClass('d-none');
                    $portSection.find('.porting-no').removeClass('d-none');
                    $portSection.find('#porting2').prop('checked', true);
                    $portSection.find('.port-message-1').removeClass('d-none');
                    $portSection.find('.port-message-2').removeClass('d-none');
                    $portSection.find('.port-message-3').addClass('d-none');
                    $portSection.find('.area-code').removeClass('d-none');
                    $portSection.find('.port-number').addClass('d-none');
                    $portSection.find('.port-number-change').removeClass('d-none');
                    $portSection.find('.area-code-note').removeClass('d-none');
                } else if (!signupPorting && !planAreaCode) {
                    $portSection.find('.porting-yes').addClass('d-none');
                    $portSection.find('.porting-no').addClass('d-none');
                    $portSection.find('.port-number').addClass('d-none');
                    $portSection.find('.area-code').addClass('d-none');
                    $portSection.find('#porting1').prop('checked', false);
                    $portSection.find('#porting2').prop('checked', false);
                    $portSection.find('.port-message-1').addClass('d-none');
                    $portSection.find('.port-message-2').addClass('d-none');
                    $portSection.find('.port-message-3').addClass('d-none');
                    $portSection.find('.area-code-note').addClass('d-none');
                    $portSection.find('.port-number-change').addClass('d-none');
                }

                $('#choosePlan').find('section.own-device-section').find('input[name="bringing_own_device"]').prop("checked", false);
                $ownDeviceSection.find('#own-device').on('change', function(){
                    if ($(this).is(':checked')) {
                        $deviceInfoSection.removeClass('d-none');

                        $modal.find('.right-con-wrap').find('.add-to-cart').removeClass('d-none');
                        $modal.find('.right-con-wrap').find('.add-to-cart-with-options').addClass('d-none');


                    }
                });
                $ownDeviceSection.find('#select-device').on('change', function(){
                    if ($(this).is(':checked')) {
                        $deviceInfoSection.addClass('d-none');

                        $modal.find('.right-con-wrap').find('.add-to-cart').addClass('d-none');
                        $modal.find('.right-con-wrap').find('.add-to-cart-with-options').removeClass('d-none');
                        $modal.find('.right-con-wrap').find('.add-to-cart-with-options').find('.add-top-4').addClass('d-none');
                    }
                });

                $('select#operating-system').on('change', function(){
                    var osValue = $(this).val();

                    const $imeiInput = $(this).parent('div').parent('div').next('div').next('div').find('.form-group').find('input[name="imei"]');

                    if ($('#no-imei').is(':checked')) {

                        if (defaultImei.length) {

                            for (var w = 0; w < defaultImei.length; w++) {
                                if (defaultImei[w].os == osValue) {
                                    $imeiInput.val(defaultImei[w].imei_code);
                                }

                            }
                        }

                    } else {
                        $imeiInput.val('');

                    }


                });

                $deviceInfoSection.find('#no-imei').on('change', function(){
                    const $this              = $(this),
                        $paraTag           = $this.parent('div').find('p'),
                        $imeiLabelDiv      = $this.parent('div').parent('div').prev('div').prev('div'),
                        $imeiInputFieldDiv = $this.parent('div').parent('div').prev('div');

                    if ($this.is(':checked')) {

                        var osValue = $this.parent('div').parent('div').closest('section').find('select#operating-system option:checked').val();


                        $imeiLabelDiv.addClass('d-none');
                        $imeiInputFieldDiv.addClass('d-none');

                        if (defaultImei.length) {

                            for (var w = 0; w < defaultImei.length; w++) {

                                if (defaultImei[w].os == osValue) {
                                    $imeiInputFieldDiv.find('.form-group').find('input[name="imei"]').val(defaultImei[w].imei_code);
                                }

                            }

                        }

                        // $paraTag.removeClass('d-none');

                    } else {
                        $imeiLabelDiv.removeClass('d-none');
                        $imeiInputFieldDiv.removeClass('d-none');
                        $imeiInputFieldDiv.find('.form-group').find('input[name="imei"]').val('');
                        // $paraTag.addClass('d-none');

                    }
                });

                if (!deviceID) {
                    deviceID = null;
                }

                if (sessionCart.length != 0) {

                    var activeGroupId = sessionCart.active_group_id;
                    var orderGroups   = sessionCart.order_groups;


                    if (orderGroups.length == 0) {
                        if (planRequireDeviceInfo == 1) {
                            $('section.own-device-section').removeClass('d-none');

                        } else {
                            $('section.own-device-section').addClass('d-none');

                        }
                        $modal.find('.right-con-wrap').find('.add-to-cart').addClass('d-none');
                        $modal.find('.right-con-wrap').find('.add-to-cart-with-options').removeClass('d-none');
                        $modal.find('.right-con-wrap').find('.add-to-cart-with-options').find('.add-top-4').removeClass('d-none');

                    }

                    for (var k = 0; k < orderGroups.length; k++) {

                        if (orderGroups[k].id == activeGroupId) {
                            var plan   = orderGroups[k].plan;
                            var device = orderGroups[k].device;

                            if ((device === null || device == 0) && ((plan == null) || (plan != null))) {

                                if (planRequireDeviceInfo == 1) {
                                    $('section.own-device-section').removeClass('d-none');

                                } else {
                                    $('section.own-device-section').addClass('d-none');

                                }

                                $modal.find('.right-con-wrap').find('.add-to-cart').addClass('d-none');
                                $modal.find('.right-con-wrap').find('.add-to-cart-with-options').removeClass('d-none');
                                $modal.find('.right-con-wrap').find('.add-to-cart-with-options').find('.add-top-4').removeClass('d-none');

                            } else if (device != null && plan ==  null) {
                                $('section.own-device-section').addClass('d-none');

                            }
                        } else if (activeGroupId == 0) {
                            if (planRequireDeviceInfo == 1) {
                                $('section.own-device-section').removeClass('d-none');

                            } else {
                                $('section.own-device-section').addClass('d-none');

                            }
                            $modal.find('.right-con-wrap').find('.add-to-cart').addClass('d-none');
                            $modal.find('.right-con-wrap').find('.add-to-cart-with-options').removeClass('d-none');
                            $modal.find('.right-con-wrap').find('.add-to-cart-with-options').find('.add-top-4').removeClass('d-none');


                        }
                    }
                } else {
                    if (planRequireDeviceInfo == 1) {
                        $('section.own-device-section').removeClass('d-none');

                    } else {
                        $('section.own-device-section').addClass('d-none');

                    }
                    $modal.find('.right-con-wrap').find('.add-to-cart').addClass('d-none');
                    $modal.find('.right-con-wrap').find('.add-to-cart-with-options').removeClass('d-none');
                    $modal.find('.right-con-wrap').find('.add-to-cart-with-options').find('.add-top-4').removeClass('d-none');

                }



                $('#additional-form-popup').find('input[name="plan_id"]').val(planID);
                $('#additional-form-popup').find('h6.product-type').text(planName+' added to cart');


                const url = ("{{ route('get.sims', ['INSERT_1_ID_HERE', 'INSERT_2_ID_HERE']) }}").replace('INSERT_1_ID_HERE', deviceID).replace('INSERT_2_ID_HERE', planID);

                $.ajax({
                    type: 'GET',
                    url: url,
                    dataType: 'json',
                    data:{deviceId:deviceID,plan_type:planType},
                    beforeSend: showLoader,
                    success: function (data) {

                        var z, osOptions, osDefaultOption, simsData, addonsData;

                        defaultImei = data.default_imei;
                        deviceID    = data.device_id;
                        planID      = data.plan_id;
                        simsData    = data.sims;
                        addonsData  = data.addons;

                        const $selectTag = $('section.device-info-section').find('select#operating-system');

                        osDefaultOption = '<option value="">-- Select Your Operating System --</option>';


                        $selectTag.find('option').remove();
                        $selectTag.append(osDefaultOption);

                        if (defaultImei.length) {
                            for (z = 0; z < defaultImei.length; z++) {
                                osOptions = '<option value="'+defaultImei[z].os+'">'+defaultImei[z].os+'</option>';
                                $selectTag.append(osOptions);
                            }

                        }
                        const $colXs12 = $simSection.find('#exampleRadios2').parent('div').parent('div');
                        if (typeof simsData != 'undefined' && simsData.length) {
                            $simSelection.find(".form-check").remove();
                            $colXs12.find('.form-check').removeClass('d-none');
                            $colXs12.parent('div').parent('section').parent('form').find('.form-sim-label').html('');

                            if(simsData.length == "1"){
                                var simRadioButtons = "<div class='form-check add-bottom-15 d-inline add-right-3'>" +
                                    "<input type='radio' " +
                                    "class='form-check-input'" +
                                    " id='sim"+simsData[0].id+"' " +
                                    "name='sim_id' value='"+simsData[0].id+"' checked >" +
                                    "<label id='sim-label-"+simsData[0].id+"' class='form-check-label' for='sim"+simsData[0].id+"'>"+simsData[0].name.toUpperCase()+"</label></div>";

                                if ($simSelection.find('.form-check').length != simsData.length) {
                                    $simSelection.append(simRadioButtons);
                                }
                            } else {
                                for (var j = 0; j < simsData.length; j++) {
                                    var simRadioButtons = "<div class='form-check add-bottom-15 d-inline add-right-3'>" +
                                        "<input type='radio' class='form-check-input' " +
                                        "id='sim" + simsData[j].id + "' name='sim_id' value='" + simsData[j].id + "'>" +
                                        "<label id='sim-label-" + simsData[j].id + "' class='form-check-label'" +
                                        " for='sim" + simsData[j].id + "'>" + 'test'.toUpperCase() +
                                        "</label></div>";

                                    if ($simSelection.find('.form-check').length != simsData.length) {
                                        $simSelection.append(simRadioButtons);
                                    }
                                }
                            }
                        } else {

                            // var simRadioButtons = "<div class='form-check add-bottom-15 d-inline add-right-3'><input type='radio' class='form-check-input' id='sim1' selected name='sim_id' value='1'><label class='form-check-label' for='sim1'>T-mobile Sim</label></div>";

                            // if ($simSelection.find('.form-check').length == 0) {

                            //     $simSelection.removeClass('d-none').append(simRadioButtons);
                            // }

                            $colXs12.find('.form-check').addClass('d-none');
                            $colXs12.parent('div').parent('section').parent('form').prepend('<span class="form-sim-label" style="font-size: 12px;padding: 0;">Currently, No Sims are available for this plan</span>');

                            const $row = $colXs12.parent('div');

                            $row.find('#exampleRadios1').attr('checked', 'checked');
                            $row.find('.col-xs-4.d-none').removeClass('d-none');
                            $row.find('.col-xs-8.d-none').removeClass('d-none');

                        }

                        if (typeof addonsData != 'undefined' && addonsData.length) {

                            $addonSection.show();
                            $addonSection.find('.form-check').remove();

                            for (var j = 0, k = 0; j < addonsData.length; j++) {
                                if(addonsData[j].show == "0"){
                                    continue;
                                }
                                if(addonsData[j].show == "1"){
                                    var addonCheckboxes = "<div class='form-check add-bottom-2'><input type='checkbox' class='form-check-input addons' id='addon"+j+"' name='addon[]' value='"+addonsData[j].id+"'><label class='form-check-label' for='addon"+j+"'>"+addonsData[j].name.toUpperCase()+" - $ "+addonsData[j].amount_recurring+"</label><div class='addon-description'>"+addonsData[j].description+"</div></div>";
                                    k++;

                                }else{
                                    // var addonCheckboxes = "<div class='addon-label'><label class='form-check-label' for='addon"+j+"'>"+addonsData[j].name.toUpperCase()+" - $ "+addonsData[j].amount_recurring+" (coming soon)</label><div class='addon-description'>"+addonsData[j].description+"</div></div>";
                                    //
                                    var addonCheckboxes = "<div class='form-check add-bottom-2'><label class='form-check-label' for='addon"+j+"'>"+addonsData[j].name.toUpperCase()+" - $ "+addonsData[j].amount_recurring+" (coming soon)</label><div class='addon-description'>"+addonsData[j].description+"</div></div>";
                                    k++;
                                }

                                if ($addonSection.find('.form-check').length < addonsData.length) {
                                    $addonSection.append(addonCheckboxes);
                                }
                                if(k == 0){
                                    $addonSection.hide();
                                }
                            }
                        }

                    },
                    complete: hideLoader,
                    error: function (data) {
                        console.log('Error:', data);
                    }

                });

                $modal.find('#form-with-plan').find('input[name="plan_id"]').val(planID);
                $modal.find('#form-with-plan').find('input[name="device_id"]').val(deviceID);
                $modal.find('#form-with-plan').find('input[name="device_name"]').val(deviceName);
                $modal.find('#form-with-plan').find('input[name="plan_type"]').val(planType);
                $modal.find('#form-with-plan').find('input[name="plan_carrier_id"]').val(planCarrierId);
                $modal.find('#form-with-plan').find('input[name="sim_required"]').val(simRequired)
                $modal.find('#form-with-plan').find('input[name="associate_with_device"]').val(associateWithDevice)
                $modal.find('input[name="plan_area_code"]').val(areaCode);
                $modal.find('.area').removeClass('error is-invalid');
                $modal.find('#area-code-error').hide();
                checkCarrierId();
                // $modal.find('#form-with-plan').find('input[name="device_amount"]').val(deviceAmount);


                // $simSection.hide();
                // $portSection.hide();
                $addonSection.hide();


                $planHeading.text(planName);
                $planAmount.text(planAmount);
                $planName.html(planDescription);

            }

            function showLoader() {
                $('.myOverlay').removeClass('d-none');
                $('.loadingGIF').removeClass('d-none');
            }

            function hideLoader() {
                $('.myOverlay').addClass('d-none');
                $('.loadingGIF').addClass('d-none');
            }

            callValidation($formWithPlan);

            function checkCarrierId () {
                let carrierId = $('#form-with-plan').find('input[name="plan_carrier_id"]'),
                    simNumber = $('#form-with-plan').find('input[name="sim_number"]');
                if (carrierId.val() == 1) {
                    simNumber.attr('maxlength', 19);
                    return 19;

                } else if (carrierId.val() == 2) {
                    simNumber.attr('maxlength', 20);
                    return 20;

                }
            }

            function callValidation($formWithPlan) {
                return false;
                $formWithPlan.validate({
                    onkeyup: function(element) {$(element).valid()},
                    rules: {
                        buy_sim:             {
                            required: function() {
                                if ($('#simRequired').val() == 1) {
                                    return true;
                                }
                                return false;
                            }
                        },
                        sim_id:              {
                            required: function() {
                                if ($('#simRequired').val() == 1) {
                                    return true;
                                }
                                return false;
                            }
                        },
                        porting:             "required",
                        bringing_own_device: {
                            required: function() {
                                if (associateWithDevice == 2) {
                                    return true;
                                }
                                return false;
                            }
                        },
                        area_code: {
                            required:  function () {
                                if($('#porting2').is(':checked') && $('input[name="plan_area_code"]').val() == "2"){
                                    return true;
                                }else{
                                    return false;
                                }
                            }
                        },
                        // sim_type: {
                        //     required:  function () {
                        //         return $('#exampleRadios1').is(':checked');
                        //     }
                        // },
                        sim_number: {
                            required:  function () {
                                return $('#exampleRadios1').is(':checked');
                            },
                            digits: function () {
                                return $('#exampleRadios1').is(':checked');
                            },
                            maxlength: checkCarrierId,
                            minlength: checkCarrierId,
                        },
                        operating_system: {
                            required: function () {
                                return $('#own-device').is(':checked');
                            },

                        },
                        imei: {
                            required: function () {
                                return $('#own-device').is(':checked');
                            },
                            digits: function () {
                                return $('#own-device').is(':checked');
                            },
                            maxlength: 15,
                            minlength: 15,

                        },
                        port_number: {
                            required:  function () {
                                return $('#porting1').is(':checked');
                            }
                            // digits:  function () {
                            //     return $('#porting1').is(':checked');
                            // }
                        }
                    },
                    messages: {
                        buy_sim: "Please select one option",
                        sim_id:  "Please select one sim type",
                        porting: "Please tell whether you want to change your port-number or not",
                        bringing_own_device: "Please choose one option",

                        sim_number: {
                            required:  "Please specify the Sim Number of that Sim Type",
                            digits:    "Please only numbers are allowed"
                        },
                        area_code: {
                            required: "Please specify your area code"
                        },
                        port_number: {
                            required: "Please specify the port-number you want"
                        },
                        operating_system: {
                            required: "Please select your operating system",

                        },
                        imei: {
                            required:  "Please enter your IMEI number",
                            digits:     "Please enter only numbers",
                            maxlength: "Sorry, IMEI can only be 15 digits long",
                            minlength: "Sorry, IMEI can only be 15 digits long",

                        }
                    },

                    errorElement: "small",

                    errorPlacement: function( error, element ){

                        $(element).addClass('is-invalid');
                        error.addClass('form-text text-muted text-danger');


                        if (element.attr("name") == "buy_sim") {

                            error.css('font-size','13px');
                            error.insertAfter( $(element).parents('div').closest('section'));

                        } else if (element.attr("name") == "porting") {
                            error.css('font-size','13px');
                            error.insertAfter( $(element).parent('div').parent('div'));

                        } else if (element.attr("name") == "sim_id" || element.attr("name") == "bringing_own_device") {

                            error.css({'font-size':'13px', 'margin-bottom':'12px'});
                            error.addClass('col-xs-12 add-top-1');

                            error.insertAfter( $(element).parent('div').parent('div'));

                        } else {
                            error.insertAfter( element);
                        }
                    },
                    success: function( label, element ){

                        $(element).removeClass("is-invalid");
                    }
                });
            }
        });

        let totalDueCart    = $('.total-due-cart');

        let activeGroupId = @json(isset(session('cart')['active_group_id']) ? session('cart')['active_group_id'] : 'null'),
            orderGroups   = @json(session('cart')['order_groups']),
            dataPlans     = $('#data'),
            voicePlans    = $('#voice'),
            tabLinks      = $('#chooseDeviceTab');
        if (orderGroups) {
            for (let i = 0; i < orderGroups.length; i++) {
                let og = orderGroups[i];
                if (og['id'] == activeGroupId) {
                    if (og['device']) {
                        let type = og['device']['type'];
                        type == 2 ? dataPlans.addClass('active') && voicePlans.removeClass('active') : voicePlans.addClass('active') && dataPlans.removeClass('active');
                        type == 2 ? tabLinks.find('.data-button').addClass('active') && tabLinks.find('.voice-button').removeClass('active') : tabLinks.find('.data-button').removeClass('active') && tabLinks.find('.voice-button').addClass('active')
                    }
                }
            }
        }

        function checkOutClicked() {
            window.location.href = `one-checkout?order_hash=${checkOutOrderHash}`
        }

        function goToDevices() {
            window.location.href = 'one#devices-section';
        }
    </script>
@endpush
<script></script>


