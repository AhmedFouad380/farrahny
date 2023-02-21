@extends('front.layout')

@section('title',__('lang.Register'))

@section('content')
        <div class="carousel-line"></div>
        <!-- <<<<<< end nav bar >>>>>> -->

        <!-- <<<<<<<<< start login page >>>>>>>>>>>>-->

        <div class="bg-login"   >
           <div class="container">
              <div class="row">
                  <div class="col-md-6 col-lg-6 col-12">
                      <div class="login-box">
                           <div class="logo-login mb-5">
                               <img src="{{asset('website/assets/img/Farrahny logo English type.png')}}" alt="">
                               <span class="com">.com</span>
                           </div>
                           <form action="{{url('registerUser')}}" method="post" class="form-register">
                               @csrf
                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input type="text" placeholder="{{__('lang.name')}}"  name="name" class="form-control mb-3 login-form text-capitalize">
                            </div>
                               <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                   <input type="tel" placeholder="{{__('lang.phone')}}" name="phone" class="form-control mb-3 login-form text-capitalize">
                               </div>

                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                                <input type="email" placeholder="{{__('lang.email')}}" name="email" class="form-control mb-3 login-form text-capitalize">
                            </div>
                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                <input type="password" placeholder="{{__('lang.password')}}" name="password" class="form-control mb-3 login-form text-capitalize">
                            </div>
                            <div class="d-flex position-relative">
                                <span class="sign-form d-block position-absolute">
                                    <i class="fa-solid fa-lock-open"></i>
                                </span>
                                <input type="password" placeholder="{{__('lang.password_confirmation')}}" name="password_confirmation" class="form-control mb-3 login-form text-capitalize">
                            </div>

                            <div class="d-sm-block d-md-flex justify-content-between">
                                <div>
                                    <input type="checkbox" class="text-capitalize">
                                    <span class="text-capitalize form-login-color">{{__('lang.remember me')}}</span>
                                </div>
                                <div>
                                     <a href="{{url('login')}}" class="text-capitalize form-login-color"> {{__('lang.Already have account ')}}?
                                        <span class="login-signuppp">{{__('lang.login')}}</span>
                                    </a>
                                </div>

                            </div>
                            <button class="btn my-4 text-uppercase d-block m-auto register-btttn">{{__('lang.Register')}}</button>
                            <div class="another-way-to-login">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="or-line or-line2"></span>
                                    <span class="text-uppercase span2 text-center d-block">{{__('lang.or sign up with')}}</span>
                                    <span class="or-line or-line2 "></span>
                                </div>
                                <div class="d-flex flex-coulmn justify-content-center">
                                     <a href="#" class="border-link text-center me-3 mt-3">
                                        <img src="{{asset('website/assets/img/Group 17800.png')}}" alt="" class="w-75">
                                     </a>
                                     <a href="#" class="border-link2 mt-3">
                                        <img src="{{asset('website/assets/img/google-logo-png-webinar-optimizing-for-success-google-business-webinar-13.png')}}" alt="" class="w-100">
                                     </a>
                                </div>
                            </div>

                        </form>
                      </div>
                  </div>
              </div>
           </div>
        </div>

@endsection




