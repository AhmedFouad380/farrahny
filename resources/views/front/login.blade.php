@extends('front.layout')
@section('title',__('lang.Login'))

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
                            <!--    <span class="com">.com</span> -->
                        </div>
                        <form action="{{url('Login')}}" method="post">
                            @csrf
                            <div class="d-flex position-relative">
                                <span class="span-form"></span>
                                <input type="email" placeholder="{{__('lang.Enter your email')}}" name="email"
                                       class="form-control mb-3 p-3 login-form">
                            </div>
                            <div class="d-flex position-relative">
                                <span class="span-form2"></span>
                                <input type="password" placeholder="{{__('lang.Enter your password')}}" name="password"
                                       class="form-control mb-3 p-3 login-form2">
                            </div>
                            <div class="d-sm-block d-md-flex justify-content-between">
                                <div>
                                    <input type="checkbox" class="text-capitalize">
                                    <span class="text-capitalize form-login-color">{{__('lang.remember me')}}</span>
                                </div>
                                <a href="{{route('user.forget_password')}}"
                                   class="text-capitalize form-login-color">{{__('lang.forget password ?')}}</a>
                            </div>
                            <a class="btn login-btn my-3 text-uppercase me-1"
                               href="{{url('register')}}">{{__('lang.Register')}}</a>
                            <button type="submit"
                                    class="btn sign-btn my-3 text-uppercase me-1 ">{{__('lang.login')}}</button>
                            <div class="another-way-to-login">
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <span class="or-line mt-4"></span>--}}
{{--                                    <span class="text-uppercase span2 text-center d-block mt-4 px-2">or</span>--}}
{{--                                    <span class="or-line mt-4"></span>--}}
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
