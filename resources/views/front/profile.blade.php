@extends('front.layout')

@section('title',__('lang.profile'))

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
                            <h3>{{__('lang.profile')}}</h3>

                        </div>
                        <form action="{{route('profile.update')}}" method="post" class="form-register">
                            @csrf
                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input type="text" placeholder="{{__('lang.name')}}" name="name" value="{{$data->name}}"
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

                            <button
                                class="btn my-4 text-uppercase d-block m-auto register-btttn">{{__('lang.update')}}</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




