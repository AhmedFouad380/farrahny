@extends('front.layout')

@section('title',__('lang.profile'))

@section('css')
    <style>
        .profile-pic {
            color: transparent;
            transition: all 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            transition: all 0.3s ease;
        }

        .profile-pic input {
            display: none;
        }

        .profile-pic img {
            position: absolute;
            object-fit: cover;
            width: 165px;
            height: 165px;
            box-shadow: 0 0 10px 0 rgba(255, 255, 255, .35);
            border-radius: 100px;
            z-index: 0;
        }

        .profile-pic .-label {
            cursor: pointer;
            height: 165px;
            width: 165px;
        }

        .profile-pic:hover .-label {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, .8);
            z-index: 10000;
            color: #fafafa;
            transition: background-color 0.2s ease-in-out;
            border-radius: 100px;
            margin-bottom: 0;
        }

        .profile-pic span {
            display: inline-flex;
            padding: 0.2em;
            height: 2em;
        }
    </style>
    @endsection
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
                        <form action="{{route('profile.update')}}" method="post" class="form-register" enctype="multipart/form-data">
                            @csrf
                            <div class="profile-pic">
                                <label class="-label" for="file">
                                    <span class="glyphicon glyphicon-camera"></span>
                                    <span>{{trans('lang.change_image')}}</span>
                                </label>
                                <input id="file" name="image" type="file" onchange="loadFile(event)"/>
                                <img class="profile-user-img img-fluid img-circle"
                                     src="{{old('image',$data->image )}}"
                                     id="output" width="200"/>
                            </div>
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
@section('js')
    <script>
        var loadFile = function (event) {
            var image = document.getElementById("output");
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endsection




