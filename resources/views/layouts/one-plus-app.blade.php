<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Fonts -->
    <link href="{{ asset('theme/onePlus/logo.svg') }}" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"/>
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
    <!-- Bootstrap CSS -->
{{--    <link--}}
{{--        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"--}}
{{--        rel="stylesheet"--}}
{{--        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"--}}
{{--        crossorigin="anonymous"--}}
{{--    />--}}

{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"--}}
{{--          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}

{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"--}}
{{--          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">--}}
    <!-- Title & Favicon -->
    <title>Home & Away Secure</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css" />
    <!-- Swiper CSS -->
{{--    {!! Html::style('theme/css/bootstrap.min.css') !!}--}}

    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.css" />
{{--    {!! Html::style('theme/onePlus/style.scss') !!}--}}
    {!! Html::style('theme/onePlus/min.css' . '?v=' . time()) !!}

    <script src="https://unpkg.com/swiper@6.8.4/swiper-bundle.min.js"></script>

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.0/swiper-bundle.min.js"--}}
{{--            integrity="sha512-VfcksjYXPZW36rsAGxeRGdB0Kp/htJF9jY5nlofHtRtswIB+scY9sbCJ5FdpdqceRRkpFfHZ3a9AHuoL4zjG5Q==" crossorigin="anonymous"></script>--}}
<!-- Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-220419513-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-220419513-1');
    </script>

    <!-- End Google Tag Manager -->

</head>

<body>
<!-- Google Tag Manager (noscript) -->

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PM2597L"

                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<!-- End Google Tag Manager (noscript) -->
<div class="myOverlay d-none"></div>
<div class="loadingGIF d-none">
    <div class="spinner-border" role="status" style="color: var(--system-color);">
        <span class="sr-only">Loading...</span>
    </div>
</div>

@include('layouts.partials._one-plus-header')

{{--<div class="system-loader"--}}
{{--     style="background: blue; width: 100vw; height: 100vh; opacity: 1; pointer-events: none;z-index: 99999999999999"--}}
{{-->--}}
</div>
@include('layouts.partials._javascript')
@include('layouts.partials._notifications')

<div class="main-wrapper">
    @yield('content')
</div>

<script src="{!! mix('js/app.js') !!}"></script>

<script>
    Dropzone.autoDiscover = false;

    $(function(){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('.alert').find('button.close').on('click', function() {
            $(this).parent('div').parent('div').remove();

        });

        $('#cart-drop').find('.active-order-group').on('click', function(){
            var sessionCart = @json(session('cart'));
            var activeId = sessionCart.active_group_id;
            var orderGroups = sessionCart.order_groups;

            for (var i = 0; i < orderGroups.length; i++) {
                if (activeId == orderGroups[i].id) {
                    if (orderGroups[i].plan != null) {
                        var replaceHtml = '<div class="modal-body"><h5 class="add-bottom-4 text-center">Please choose Device for your active Plan <span class="t-violet-2 system-text" style="font-weight: 500;">'+orderGroups[i].plan.name+'</span></h5><ul class="text-center"><li class="add-bottom-4"><a href="{{ route('devices.index') }}" class="btn style2">Add Device</a></li></ul></div>'

                    } else if (orderGroups[i].device != null) {

                        var replaceHtml = '<div class="modal-body"><h5 class="add-bottom-4 text-center">Please choose Plan for your active Device <span class="t-violet-2 system-text" style="font-weight: 500;">'+orderGroups[i].device.name+'</span></h5><ul class="text-center"><li class="add-bottom-4"><a href="{{ route('plans.index') }}" class="btn style2">Add Plan</a></li></ul></div>'

                    }
                    $('#cart-popup').find('.modal-body').html(replaceHtml);
                    $('#cart-popup ul li').toggleClass('special');

                }
            }

        });
        let couponData = @json(session('couponAmount'));
        $('.tooltip-coupon').append("<span style='width: max-content; text-align: justify;'></span>");
        $('.tooltip-coupon:not([tooltip-position])').attr('tooltip-position','top');
        $(".tooltip-coupon").mouseenter(function(){
            setInterval(()=>{
                $(this).find('span').empty().append($(this).attr('tooltip'));
            },100);

            let couponCode    = $('#coupon').val(),
                cart          = @json(session('cart')),
                hash          = @json(session('customer_hash'));

            if (!couponData) {
                if (couponCode && cart['order_groups'].length > 0) {
                    $.ajax({
                        url: '{{ route("coupon.store") }}',
                        method: 'POST',
                        data: {'code':couponCode, 'order_id':cart['id'], 'hash':hash, 'only_details': true},
                    }).done(function (response) {
                        $('.tooltip-coupon').attr('tooltip', response.coupon_amount_details.details);
                    });
                }
            } else {
                $(this).attr('tooltip', couponData.coupon_amount_details.details);
            }
        });

        function showLoader() {
            $('.myOverlay').removeClass('d-none');
            $('.loadingGIF').removeClass('d-none');
        }

        function hideLoader() {
            $('.myOverlay').addClass('d-none');
            $('.loadingGIF').addClass('d-none');
        }

        @stack('jQuery')
    });

    // $(function(){
    //     $('.login-form').validate({
    //         rules: {
    //             password:          "required",
    //             identifier:{
    //                 required: true,
    //             },
    //         },
    //         messages: {
    //             password:         "Please provide your password",
    //             identifier: {
    //                 required: "Please enter your Email ID or Customer ID",
    //             },
    //         },
    //
    //         errorElement: "em",
    //
    //         errorPlacement: function( error, element ){
    //
    //             $(element).addClass('is-invalid');
    //             error.addClass('form-text text-muted error-msg');
    //             error.insertAfter(element);
    //         },
    //         success: function( label, element ){
    //             $(element).removeClass("is-invalid");
    //         },
    //     });
    // });

    //Logic for prorated tooltip in carts
    var startDate = '{{ isset(session("cart")["customer"]["billing_start"]) ? session("cart")["customer"]["billing_start"] : null }}';
    var endDate   = '{{ isset(session("cart")["customer"]["billing_end"]) ? session("cart")["customer"]["billing_end"] : null }}';

    $('.tooltip-prorated').append("<span style='width: max-content; text-align: justify;' class='prorated-tooltip'></span>");
    $('.tooltip-prorated:not([tooltip-position])').attr('tooltip-position','bottom');
    $(".tooltip-prorated").mouseenter(function(){
        setInterval(()=>{
            $(this).find('span').empty().append($(this).attr('tooltip'));
        },100);

        if (startDate && endDate) {
            $.ajax({
                url: '{{ route("prorated.days") }}',
                method: 'post',
                data: {'start_date': startDate, 'end_date':endDate}
            }).done((response)=>{
                $(this).attr(
                    'tooltip',
                    'Prorated Days Left: '+response['remaining_days']+'<br>'+
                    'Total Days: '+response['total_days']+'<br>'+
                    'Prorated Amount: $'+$(this).attr('data-prorated')+'<br>'+
                    'After Prorated Period: $'+$(this).attr('data-amount_recurring')+'/Month'
                );

            });
        }
    });
    $('.agreement-tip').append("<span></span>");
    $('.agreement-tip:not([tooltip-position])').attr('tooltip-position','bottom');
    $(".agreement-tip").mouseenter(function(){
        setInterval(()=>{
            $(this).find('span').empty().append($(this).attr('tooltip'));
        },100);
        $(this).attr(
            'tooltip','Please agree to our terms of service.'
        );
    });

    let simNewNumber    = $('#sim-number-modal'),
        simNumber,
        orderGroupId;
    $formSim = $('.sim-edit-input');

    $('.edit-sim').on('click', function () {

        simNewNumber.val('');
        orderGroupId   = $(this).attr('data-id');

        let simData    = $(this)
        carrier    = simData.attr('data-carrier-id-'+orderGroupId);
        simNewNumber.val(simData.attr('data-internalid-'+orderGroupId));
        dynamicLength();
        function dynamicLength()
        {
            if (carrier == '1') {
                simNewNumber.attr('maxlength', 19);
                return 19;
            } else {
                simNewNumber.attr('maxlength', 20);
                return 20;
            }
        }

        $('#save-sim-details').on('click',function(){

            $('.sim-text').html('');

            $formSim.validate({
                rules: {
                    sim_number_modal:{
                        required : true,
                        number   : true,
                        minlength: dynamicLength,
                        maxlength: dynamicLength
                    }
                },
                messages: {
                    sim_number_modal: {
                        required : 'Please enter your sim number',
                        number   : 'Please enter a valid sim number',
                    }
                },
                errorElement: "em",

                errorPlacement: function( error, element ){
                    $('.sim-text').html(error);
                },
                success: function( label, element ){
                    $(element).removeClass("is-invalid");
                }

            });

            if($formSim.valid()) {

                if (orderGroupId && simNewNumber) {

                    $.ajax({
                        url: '{{ route("edit.sim") }}',
                        method: 'get',
                        data: {
                            'simNewNumber' : simNewNumber.val(),
                            'orderGroupId' : orderGroupId
                        },
                        beforeSend: ()=> {
                            $('.myOverlay').removeClass('d-none');
                            $('.loadingGIF').removeClass('d-none');
                            simData.attr('data-internalid-'+orderGroupId, simNewNumber.val());
                            $('.sim_num_'+orderGroupId).html('SIM: '+simNewNumber.val());
                        },
                        complete: ()=>{
                            $('.myOverlay').addClass('d-none');
                            $('.loadingGIF').addClass('d-none');
                            orderGroupId = null;
                            $('#simEditModal').modal('hide');
                        },

                    });

                }

            }

        });

        $('#close-sim-modal').on('click', ()=>{
            orderGroupId = null;
        });

        $('#simEditModal').on('hidden.bs.modal', function () {
            orderGroupId = null;
        });

    });

    let verificationHash = window.location.href.includes('verification_hash'),
        sessionId        = @json(session('id'));
    if (verificationHash && !sessionId) {
        $('.remove-cartItem').css('display', 'none');
        $('.remove-dummy').css('display', 'inline');
    } else {
        $('.remove-cartItem').css('display', 'inline');
        $('.remove-dummy').css('display', 'none');
    }


    window['_fs_debug'] = false;
    window['_fs_host'] = 'fullstory.com';
    window['_fs_org'] = 'P2WH6';
    window['_fs_namespace'] = 'FS';
    (function(m,n,e,t,l,o,g,y){
        if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
        g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s);};g.q=[];
        o=n.createElement(t);o.async=1;o.crossOrigin='anonymous';o.src='https://'+_fs_host+'/s/fs.js';
        y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
        g.identify=function(i,v,s){g(l,{uid:i},s);if(v)g(l,v,s)};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};
        g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};
        g.log = function(a,b) { g("log", [a,b]) };
        g.consent=function(a){g("consent",!arguments.length||a)};
        g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
        g.clearUserCookie=function(){};
    })(window,document,window['_fs_namespace'],'script','user');

    setTimeout(() => {
        // Device Card Slider
        new Swiper('.device-card .swiper-container', {
            loop: true,
            navigation: {
                nextEl: '.swiper-next-button',
                prevEl: '.swiper-prev-button',
            },
        });

        // Swiper JS Testimonial Carousel
        new Swiper('.testimonial-slider', {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-next',
                prevEl: '.swiper-prev',
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetweenSlides: 50,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetweenSlides: 50,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetweenSlides: 30,
                },
            },
        });
    }, 1000);

    function showLoader() {
        $('.myOverlay').removeClass('d-none');
        $('.loadingGIF').removeClass('d-none');
    }

    function hideLoader() {
        $('.myOverlay').addClass('d-none');
        $('.loadingGIF').addClass('d-none');
    }

    getDeviceDetail = (deviceId) => {
        const url = ("{{ route('devices.show', ['INSERT_1_ID_HERE']) }}").replace('INSERT_1_ID_HERE', deviceId);

        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'json',
            beforeSend: showLoader,
            success: function (data) {
                document.getElementById('device_name').innerHTML = data.name;
                document.getElementById('device_description').innerHTML = data.description;
                document.getElementById('deviceOneTimeAmount').innerHTML = data.amount_w_plan;

            },
            complete: hideLoader,
            error: function (data) {
                console.log('Error: ', data);
            }
        });
    }

    function getPlanDetail(planId) {
        const url = ("{{ route('plans.show', ['INSERT_1_ID_HERE']) }}").replace('INSERT_1_ID_HERE', planId);

        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'json',
            beforeSend: showLoader,
            success: function (data) {
                document.getElementById('deviceMonthlyAmount').innerHTML = '$' + data.amount_recurring;

            },
            complete: hideLoader,
            error: function (data) {
                console.log('Error: ', data);
            }
        });
    }

</script>


{{--@yield('one-touch-content')--}}

@include('layouts.partials._one-touch-footer')

<!-- Bootstrap JS Bundle with Popper -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"
></script>
{{--<!-- Swiper JS -->--}}
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Main JS -->
{{--<script src="js/index.js"></script>--}}
@stack('js')

</body>
</html>
