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

                            <h3>{{__('lang.forget_password')}}</h3>

                        </div>
                        <form action="{{route('user.forget_password.post')}}" method="post">
                            @csrf
                            <div class="d-flex position-relative">
                                <span class="span-form"></span>
                                <input type="email" placeholder="{{__('lang.Enter your email')}}" name="email"
                                       class="form-control mb-3 p-3 login-form">
                            </div>
                            <button type="submit"
                                    class="btn sign-btn my-3 text-uppercase me-1 ">{{__('lang.request_change_password')}}</button>
                            <div class="d-sm-block d-md-flex justify-content-between">

                                <div>
                                    <span class="text-capitalize form-login-color">
                                        {{__('lang.Already have account')}}?
                                        <a href="{{url('login')}}"><span
                                                class="login-signuppp">{{__('lang.login')}}</span> </a>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
