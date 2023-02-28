<!DOCTYPE html>
<html lang="en" @if(Session('lang') == 'ar')  dir="rtl" @endif>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Itim&family=Poppins:wght@300&family=Source+Sans+Pro&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('website/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/owl.carousel.min.css')}}">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    @if(Session('lang') == 'ar')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
              integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N"
              crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('website/assets/css/styleAR.css')}}">

    @else
        <link rel="stylesheet" href="{{asset('website/assets/css/style En.css')}}">

    @endif
    @yield('css')
    <title>{{\App\Models\Setting::find(1)->name}} || @yield('title')</title>
</head>
<body>
<!-- <<<<<< this is nav bar >>>>>> -->
<nav class="navbar-light pt-3 px-3">
    <div class="basic-drop-shadow">
        <div class="container">
            <div class=" row nav-logo">
                <div class="col-md-12 col-lg-6 col-12 d-flex align-items-center">
                    <a class="navbar-brand d-block">
                        <img src="{{asset('website/assets/img/Farrahny logo English type.png')}}" alt="">
                    </a>
                    <div class="d-flex ms-auto">
                        <form class="d-flex mobile-none" method="get" action="{{url('search')}}">
                            <input class="form-control nav-search" name="search" type="search"
                                   placeholder="{{__('lang.search')}}" aria-label="Search">
                            <button class="btn nav-icon-search" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                        <div class="dropdown pc-none">
                            <button class="btn btn-lang dropdown-toggle text-uppercase btn-place" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                egypt
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item text-capitalize" href="{{url('lang/ar')}}">egypt</a></li>
                                <li><a class="dropdown-item text-capitalize" href="#">paris</a></li>
                            </ul>
                        </div>
                        <div class="dropdown pc-none">
                            <button class="btn btn-lang dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-earth-europe"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item text-capitalize" href="{{url('lang/ar')}}">Arabic</a></li>
                                <li><a class="dropdown-item text-capitalize" href="{{url('lang/en')}}">English</a></li>
                            </ul>
                        </div>
                        <button class="navbar-toggler pc-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <i class="fa-solid fa-bars-staggered"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-12 nav-box d-flex align-items-center">
                    <div class="dropdown mobile-none">
                        <button class="btn btn-lang dropdown-toggle text-uppercase btn-place" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            egypt
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item text-capitalize" href="#">egypt</a></li>
                            <li><a class="dropdown-item text-capitalize" href="#">paris</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mobile-none">
                        <button class="btn btn-lang dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-earth-europe"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item text-capitalize" href="{{url('lang/ar')}}">Arabic</a></li>
                            <li><a class="dropdown-item text-capitalize" href="{{url('lang/en')}}">English</a></li>
                        </ul>
                    </div>
                    @if(Auth::guard('web')->check())
                        <div class="dropdown mobile-none">
                            <button class="btn btn-lang dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                               <span class="user-img">
                                  <img src="{{asset('website/assets/img/Max-R_Headshot (1).jpg')}}" class="user">
                               </span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item text-capitalize"
                                       href="{{route('my_orders')}}">{{__('lang.my_orders')}}</a></li>
                                <li><a class="dropdown-item text-capitalize"
                                       href="{{url('logout')}}">{{__('lang.Logout')}}</a></li>
                            </ul>
                        </div>
                        <div class="nav-iconss d-flex justify-content-between mobile-none">
                            <div class="shopping position-relative">
                                <a href="{{url('cart')}}">
                                    <i class="fa-solid fa-cart-shopping icon-first-nav"></i>
                                    @if(\App\Models\Cart::where('user_id',Auth::guard('web')->id())->count() > 0)
                                        <span class="counter"
                                              id="CountCart">{{\App\Models\Cart::where('user_id',Auth::guard('web')->id())->count()}}</span>
                                    @endif
                                </a>
                            </div>
                            <!--  <div class="bell position-relative">
                                  <i class="fa-solid fa-bell icon-first-nav"></i>
                                  <span class="counter">10</span>
                              </div>-->
                            <div class=" heart position-relative">
                                <a href="{{url('wishlist')}}">
                                    <i class="fa-solid fa-heart icon-first-nav"></i>
                                    @if(\App\Models\Favorite::where('user_id',Auth::guard('web')->id())->count() > 0)
                                        <span
                                            class="counter">{{\App\Models\Favorite::where('user_id',Auth::guard('web')->id())->count()}}</span>
                                    @endif
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @if(Auth::guard('web')->check())
        <div class="container-fluied pc-none pt-3">
            <div class="d-flex align-items-center justify-content-center">
                <div class="nav-iconss d-flex justify-content-between">
                    <div class="shopping position-relative">
                        <a href="{{url('cart')}}">
                            <i class="fa-solid fa-cart-shopping icon-first-nav"></i>
                            <span class="counter"
                                  id="CountCart">{{\App\Models\Cart::where('user_id',Auth::guard('web')->id())->count()}}</span>
                        </a>
                    </div>
                    <div class="bell position-relative">
                        <i class="fa-solid fa-bell icon-first-nav"></i>
                        <span class="counter">10</span>
                    </div>
                    <div class=" heart position-relative">
                        <i class="fa-solid fa-heart icon-first-nav"></i>
                        <span class="counter">300</span>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="btn btn-lang dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                       <span class="user-img">
                          <img src="{{asset('website/assets/img/Max-R_Headshot (1).jpg')}}  " class="user">
                       </span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item text-capitalize" href="#">logOut</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endif
    <div class="navbar nav-bar-2 navbar-expand-lg">
        <div class="container-fluid ">
            <!-- <button class="navbar-toggler mobile-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-lg-center">
                    <li class="nav-item pc-none">
                        <form class="d-flex">
                            <input class="form-control nav-search" type="search" placeholder="Search"
                                   aria-label="Search">
                            <button class="btn nav-icon-search" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </li>
                    @if(Auth::guest())
                        <li class="nav-item become-provider">
                            <a class="nav-link provider"
                               href="{{route('provider.register')}}">{{__('lang.become a provider')}}</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">{{__('lang.Home')}}</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown nav-drop-down">
                            <button class="btn drop-nav dropdown-toggle ps-0 pe-0" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                {{__('lang.Events')}}
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @foreach(\App\Models\Event::where('is_active','active')->get() as $event)
                                    <li><a class="dropdown-item"
                                           href="{{url('event',$event->title)}}">{{$event->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                    @foreach(\App\Models\Page::where('is_active','active')->where('place','!=','footer')->get() as $event)
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('Page',$event->title)}}">{{$event->title}}</a>
                        </li>
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact')}}">{{__('lang.Contact')}}</a>
                    </li>

                    @if(Auth::guest())
                        <li class="nav-item d-flex register">
                            <a class="nav-link border-none btn-login-line" href="{{url('login')}}" tabindex="-1"
                               aria-disabled="true">
                                <button class="btn btn-login">{{__('lang.Login')}}</button>
                            </a>
                            <a class="nav-link btn-sign-line border-none" href="{{url('register')}}" tabindex="-1"
                               aria-disabled="true">
                                <button class="btn btn-sign">{{__('lang.Register')}}</button>
                            </a>
                        </li>
                    @endif

                </ul>
            </div>

        </div>
    </div>
</nav>
<!-- <<<<<< end nav bar >>>>>> -->

@yield('content')
<footer>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5">
            <div class="col">
                <div class="m-top-sm">
                    <h5 class=" border-h text-break text-uppercase">FARRAHNY Partner</h5>
                    <a href="#" class=" footer-text d-block text-break">JOIN US THE JOURNEY</a>
                    <a href="#" class=" footer-text d-block text-break">About Us</a>
                    <a href="#" class=" footer-text d-block text-break">Contact Us</a>
                    <a href="#" class=" footer-text d-block text-break">Promos</a>
                    <a href="#" class=" footer-text d-block text-break">Become an AmbassadorEY</a>
                </div>
            </div>
            <div class="col">
                <div class="m-top-sm">
                    <h5 class=" border-h text-uppercase">FARRAHNY</h5>
                    <a href="#" class=" footer-text d-block text-break">About Us</a>
                    <a href="#" class=" footer-text d-block text-break">Contact Us</a>
                    <a href="#" class=" footer-text d-block text-break">Promos</a>
                    <a href="#" class=" footer-text d-block text-break">Become an AmbassadorEY</a>
                </div>
            </div>
            <div class="col">
                <div class="m-top-sm">
                    <h5 class=" border-h text-break text-uppercase">POLICY</h5>
                    <a href="#" class=" footer-text d-block text-break">Terms of Usage</a>
                    <a href="#" class=" footer-text d-block text-break">Privacy Policy</a>
                    <a href="#" class=" footer-text d-block text-break">Cancelation Policy</a>
                </div>
            </div>
            <div class="col">
                <div class="m-top-sm">
                    <h5 class=" border-h text-break text-uppercase">EVENTS</h5>
                    <a href="#" class=" footer-text d-block text-break">Wedding</a>
                    <a href="#" class=" footer-text d-block text-break">Engagement</a>
                    <a href="#" class=" footer-text d-block text-break">Birthday</a>
                    <a href="#" class=" footer-text d-block text-break">Babyshower</a>
                    <a href="#" class=" footer-text d-block text-break">Graduation</a>

                </div>
            </div>
            <div class="col">
                <div class="m-top-sm">
                    <h5 class=" border-h text-break text-uppercase">SUBSCRIBE</h5>
                    <p class="footer-text">Subscribe to our newsletter, so that you can be the first to know about new
                        offers and promotions.</p>
                    <form class="d-flex">
                        <input class="form-control footer-search nav-search" type="search"
                               placeholder="enter email adrees" aria-label="Search">
                        <button class="btn nav-icon-search footer-icon-search" type="submit">subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 col-sm-6 col-lg-6">
                <p class="text-capitalize fw-bolder">&copy; 2023 <span class="text-uppercase">farahny</span>. all rights
                    reserved</p>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6">
                <div class="pay d-flex justify-content-end">
                    <img src="{{asset('website/assets/img/1aMastercard.png')}}" alt="">
                    <img src="{{asset('website/assets/img/paymob-whmcs.png')}}" alt="">
                    <img src="{{asset('website/assets/img/visa.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- <<<<<<<<<<<<<<<< end footer >>>>>>>>>>>>>>>>>>>>>>-->
<?php

$lat = '24.65442475109588';
$lng = '46.709548950195305';
?>
<div class="modal fade" id="cart-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">{{trans('lang.add_to_cart')}}</h4>
                {{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                {{--                    <span aria-hidden="true">&times;</span>--}}
                {{--                </button>--}}
            </div>
            <form action="{{route('cart.store')}}" method="post">
                @csrf
                <input type="hidden" name="service_id" id="txt_service_id" required>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="txt_phone_code">{{trans('lang.time')}}</label>
                        <input type="time" required id="txt_time" name="time"
                               class="form-control center">
                    </div>
                    <div class="form-group">
                        <label for="txt_phone_code">{{trans('lang.date')}}</label>
                        <input type="date" required id="txt_date" name="date"
                               class="form-control center">
                    </div>
                    <div class="form-group">
                        <label for="txt_phone_code">{{trans('lang.location')}}</label>
                        <div id="" class="form-group row">
                            <div class="col-sm-12 ">
                                <div id="us1" style="width:100%;height:300px;"></div>
                            </div>
                            <input required type="hidden" name="lat" id="lat" value="{{old('lat', $lat )}}">
                            <input required type="hidden" name="lng" id="lng" value="{{old('lng', $lng )}}">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    {{--                <button type="button" class="btn btn-default"--}}
                    {{--                        data-dismiss="modal">{{trans('lang.close')}}</button>--}}
                    <button type="submit" id="btn_phone_check"
                            class="btn btn-primary">{{trans('lang.add')}}</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<script src="{{asset('website/assets/js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('website/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('website/assets/js/owl.carousel.min.js')}}"></script>
<!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
<script src="{{asset('website/assets/js/script.js')}}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function myMap() {
        var mapProp = {
            center: new google.maps.LatLng({{$lat}},{{$lng}}),
            zoom: 5,
        };
        var map = new google.maps.Map(document.getElementById("us1"), mapProp);
    }
</script>
<script
    src="http://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=myMap"></script>
<script src="{{ asset('website/assets/js/locationpicker.jquery.js')}}"></script>
<script>
    $('#us1').locationpicker({
        location: {
            latitude: {{$lat}},
            longitude: {{$lng}}
        },
        radius: 300,
        markerIcon: "{{url('/website/assets/img/map-marker.png')}}",
        inputBinding: {
            latitudeInput: $('#lat'),
            longitudeInput: $('#lng')
        }
    });
</script>
<script>

    $(document).on('click', '#btn_add_cart', function () {

        var id = $(this).data('id')

            @if(Auth::guard('web')->check())
        var check = true;
            @else
        var check = false;
        @endif
        if (check) {
            id = $(this).data('id');
            $('#txt_service_id').val(id);

            $('#cart-modal').modal('toggle');
        } else {
            Swal.fire({
                icon: 'error',
                title: "{{__('lang.error')}}",
                text: "{{ __('lang.PleaseLogin') }}",
                type: "error",
                timer: 5000,
                confirmButtonText: '{{__('lang.Login')}}',
            }).then(function (result) {
                window.location.href = "{{url('login')}}";
            });


        }

    });
</script>
<script>

    $('.addtowishlist').click(function () {
        var id = $(this).data('id');
            @if(Auth::guard('web')->check())
        var check = true;
            @else
        var check = false;
        @endif
        if (check) {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                url: "{{url('add-wishlist')}}",
                data: {"id": id},
                success: function (data) {
                    $(this).toggleClass('orang');
                    Swal.fire({
                        icon: 'success',
                        title: "{{__('lang.Success')}}",
                        text: "{{__('lang.Success_text')}}",
                        type: "success",
                        timer: 1000,
                        showConfirmButton: false
                    });

                }
            })
        } else {
            Swal.fire({
                icon: 'error',
                title: "{{__('lang.error')}}",
                text: "{{ __('lang.PleaseLogin') }}",
                type: "error",
                timer: 5000,
                confirmButtonText: '{{__('lang.login')}}',
            }).then(function (result) {
                window.location.href = "{{url('login')}}";
            });


        }
    })
    $(".add").click(function () {
        var id = $(this).data('id')

            @if(Auth::guard('web')->check())
        var check = true;
            @else
        var check = false;
        @endif
        if (check) {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                type: "GET",
                url: "{{url('add-cart')}}",
                data: {"id": id},
                success: function (data) {
                    $('#CountCart').html(data)

                    Swal.fire({
                        icon: 'success',
                        title: "{{__('lang.Success')}}",
                        text: "{{__('lang.Success_text')}}",
                        type: "success",
                        timer: 1000,
                        showConfirmButton: false
                    });

                }
            })
        } else {
            Swal.fire({
                icon: 'error',
                title: "{{__('lang.error')}}",
                text: "{{ __('lang.PleaseLogin') }}",
                type: "error",
                timer: 5000,
                confirmButtonText: '{{__('lang.Login')}}',
            }).then(function (result) {
                window.location.href = "{{url('login')}}";
            });


        }
    })

    function delete_alert(row_id, route) {
        Swal.fire({
            title: '{{__('lang.warrning')}} !',
            // type: 'warning',
            showDenyButton: true,
            // showCancelButton: true,
            confirmButton: 'btn btn-success',
            confirmButtonText: '{{__('lang.btn_yes')}}',
            denyButtonText: `{{__('lang.btn_no')}}`,
        }).then((result) => {
                if (result.isDenied) {
                    Swal.fire('{{trans('lang.not_deleted')}}', '', 'info')
                }
                if (result.value) {
                    $.get({
                        url: route,
                        beforeSend: function () {
                            $('#loading').show();
                        },
                        success: function (data) {
                            if (data.errors) {
                                for (var i = 0; i < data.errors.length; i++) {
                                    Swal.fire(data.errors[i].message, '', 'info')
                                }
                            } else {
                                {{--Swal.fire("{{__('lang.Success')}}", "{{__('lang.Success_text')}}", "success");--}}
                                {{--Toast.fire({--}}
                                {{--    icon: 'success',--}}
                                {{--    title: "{{trans('lang.item_deleted')}}"--}}
                                {{--})--}}
                                // $('#row_id_' + row_id).remove();
                                // $('#CountCart').html(data.count);
                                location.reload();

                            }
                        },
                        complete: function () {
                            $('#loading').hide();
                        },
                    });
                }
            }
        )
    };
</script>

<?php
$errors = session()->get("errors");
?>

@if( session()->has("errors"))
    <?php
    $e = implode(' - ', $errors->all());
    ?>

    <script>
        Swal.fire({
            icon: 'warning',
            title: "برجاء التأكد من البيانات.",
            text: "{{$e}} ",
            type: "error",
            timer: 5000,
            showConfirmButton: false
        });
    </script>

@endif


<?php
$message = session()->get("message");
?>

@if( session()->has("message"))


    <script>
        Swal.fire({
            icon: 'success',
            title: "{{__('lang.Success')}}.",
            text: "{{__('lang.Success_text')}} ",
            timer: 5000,
        });
    </script>

@endif
@yield('js')
</body>
</html>
