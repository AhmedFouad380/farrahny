@extends('front.layout')

@section('title',__('lang.provider_register'))

@section('content')
    <div class="carousel-line"></div>
    <!-- <<<<<< end nav bar >>>>>> -->

    <!-- <<<<<<<<< start login page >>>>>>>>>>>>-->

    <div class="bg-login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-12">
                    <div class="login-box">
                        <div class="logo-login mb-5">
                            <img src="{{asset('website/assets/img/Farrahny logo English type.png')}}" alt="">
                            <span class="com">.com</span>
                            <h3>{{__('lang.provider_register')}}</h3>

                        </div>
                        <form action="{{route('provider.register.store')}}" method="post" class="form-register">
                            @csrf
                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input type="text" placeholder="{{__('lang.ar_name')}}" maxlength="255" name="ar_name"
                                       value="{{old('ar_name')}}"
                                       class="form-control mb-3 login-form text-capitalize">
                            </div>
                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input type="text" placeholder="{{__('lang.en_name')}}" maxlength="255" name="en_name"
                                       value="{{old('en_name')}}"
                                       class="form-control mb-3 login-form text-capitalize">
                            </div>
                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input type="text" placeholder="{{__('lang.owner_name')}}" maxlength="255"
                                       name="owner_name"
                                       value="{{old('owner_name')}}"
                                       class="form-control mb-3 login-form text-capitalize">
                            </div>

                            <div class="d-flex position-relative">
                                  <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-airbnb"></i>
                                </span>
                                <select name="subscription_id" class="form-control mb-3 login-form text-capitalize"
                                        required>
                                    <option selected>{{__('lang.choose_subscription_type')}}</option>
                                    @foreach(\App\Models\Subscription::active()->get() as $row)
                                        <option value="{{$row->id}}"
                                                @if(old('subscription_id') == $row->id) selected @endif >{{$row->name}}
                                            ({{$row->service_count}} {{__('lang.services')}}) -
                                            ({{$row->days_count}} {{__('lang.days')}}) -
                                            ({{$row->price}} {{__('lang.price')}})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input type="text" placeholder="{{__('lang.UserName')}}" maxlength="255"
                                       name="username"
                                       value="{{old('username')}}"
                                       class="form-control mb-3 login-form text-capitalize">
                            </div>
                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <input type="tel" placeholder="{{__('lang.phone')}}" name="phone"
                                       value="{{old('phone')}}"
                                       class="form-control mb-3 login-form text-capitalize">
                            </div>
                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input type="email" placeholder="{{__('lang.email')}}" name="email"
                                       value="{{old('email')}}"
                                       class="form-control mb-3 login-form text-capitalize">
                            </div>
                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                <input type="password" placeholder="{{__('lang.password')}}" name="password"
                                       class="form-control mb-3 login-form text-capitalize">
                            </div>
                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-lock-open"></i>
                                </span>
                                <input type="password" placeholder="{{__('lang.password_confirmation')}}"
                                       name="password_confirmation"
                                       class="form-control mb-3 login-form text-capitalize">
                            </div>
                            <?php

                            $lat = '24.65442475109588';
                            $lng = '46.709548950195305';
                            ?>
                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-location"></i>
                                </span>
                                <input type="text" placeholder="{{__('lang.address')}}" maxlength="255" name="address"
                                       value="{{old('address')}}"
                                       class="form-control mb-3 login-form text-capitalize">
                            </div>
                            <div class="d-flex position-relative">
                                  <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-airbnb"></i>
                                </span>
                                <select name="city_id" id="city_id" class="form-control mb-3 login-form text-capitalize"
                                        required>
                                    <option selected>{{__('lang.choose_city')}}</option>
                                    @foreach(\App\Models\City::active()->get() as $row)
                                        <option value="{{$row->id}}"
                                                @if(old('city_id') == $row->id) selected @endif >{{$row->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex position-relative" id="region_container" style="display: none !important;">
                                  <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-airbnb"></i>
                                </span>
                                <select name="region_id" id="region_id"
                                        class="form-control mb-3 login-form text-capitalize"
                                        required>
                                </select>
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

                            <div class="d-sm-block d-md-flex justify-content-between">
                                <div>
                                    <input type="checkbox" class="text-capitalize">
                                    <span class="text-capitalize form-login-color">{{__('lang.remember me')}}</span>
                                </div>
                            </div>
                            <button
                                class="btn my-4 text-uppercase d-block m-auto register-btttn">{{__('lang.Register')}}</button>

                            <div class="d-sm-block d-md-flex justify-content-between">

                                <div>
                                    <span class="text-capitalize form-login-color">
                                        {{__('lang.Already have account')}}?
                                        <a href="{{url('login')}}"><span
                                                class="login-signuppp">{{__('lang.login')}}</span> </a>
                                    </span>
                                </div>
                            </div>
                            {{--                            <div class="another-way-to-login">--}}
                            {{--                                <div class="d-flex align-items-center justify-content-between">--}}
                            {{--                                    <span class="or-line or-line2"></span>--}}
                            {{--                                    <span--}}
                            {{--                                        class="text-uppercase span2 text-center d-block">{{__('lang.or sign up with')}}</span>--}}
                            {{--                                    <span class="or-line or-line2 "></span>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="d-flex flex-coulmn justify-content-center">--}}
                            {{--                                    <a href="#" class="border-link text-center me-3 mt-3">--}}
                            {{--                                        <img src="{{asset('website/assets/img/Group 17800.png')}}" alt="" class="w-75">--}}
                            {{--                                    </a>--}}
                            {{--                                    <a href="#" class="border-link2 mt-3">--}}
                            {{--                                        <img--}}
                            {{--                                            src="{{asset('website/assets/img/google-logo-png-webinar-optimizing-for-success-google-business-webinar-13.png')}}"--}}
                            {{--                                            alt="" class="w-100">--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $('#city_id').change(function () {
            var city_id = $(this).val();
            $.ajax({
                url: "{{url('/')}}/get-regions/" + city_id,
                dataType: 'html',
                type: 'get',
                success: function (data) {
                    $('#region_container').show();
                    // $('#lbl_subject_cont').show();
                    $('#region_id').html(data);
                }
            });
        });
    </script>
@endsection




