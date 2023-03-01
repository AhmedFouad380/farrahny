@extends('front.layout')
@section('title',__('lang.Providers'))
@section('css')
    <style>
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #f15a22;
            border-color: #f15a22;
        }


    </style>
@endsection
@section('content')
    <div class="carousel-line"></div>
    <!-- <<<<<< end nav bar >>>>>> -->

    <!-- <<<<<<<<< start services >>>>>>>>>>>>-->
    <div class="container-fluied reco-over over-xx" data-aos="fade-up-left">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12 mb-2">
                <div class="owl-carousel owl-carousel-p ">
                    @foreach($sponsored  as $spo)
                        <div class="carsouel-content">
                            <div class="bg-content">
                                <p class="spons">{{__('lang.sponsored')}}</p>
                                <div class="img-box-owl">
                                    <a href="{{url('service',$spo->id)}}">
                                        <img src="{{$spo->image}}" alt="{{$spo->title}}">
                                    </a>
                                </div>
                                <div class="padding-p d-flex justify-content-between">
                                    <div>
                                        <a href="{{url('service',$spo->id)}}">
                                            <h6 style="color: #000000">{{$spo->title}}</h6>
                                        </a>
                                        <span class="gray-text">{{$spo->Provider->name}}</span>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid fa-heart addtowishlist @if($spo->is_favorite==1) orang @endif" data-id="{{$spo->id}}"></i>
                                        <i class="fa-sharp fa-solid fa-cart-shopping grayy" id="btn_add_cart"
                                           data-id="{{$spo->id}}"></i>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-bettwen mb-3">
                                    <div style="width: 80%;" class="d-flex">
                                <span class="rating-item d-block">
                                    <i class="fa fa-star gold" aria-hidden="true"></i>
                                </span>
                                        <span class="rating-item d-block">
                                    <i class="fa fa-star gold" aria-hidden="true"></i>
                                </span>
                                        <span class="rating-item d-block">
                                    <i class="fa fa-star gold" aria-hidden="true"></i>
                                </span>
                                        <span class="rating-item d-block">
                                    <i class="fa fa-star gold" aria-hidden="true"></i>
                                </span>
                                        <span class="rating-item d-block">
                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                </span>
                                    </div>
                                    <p class="price" style="width: 20%">
                                    <div class="d-flex">
                                        <span class="d-block egp-price" style="color: #000000">  {{$spo->price}}</span>
                                        <span class="egp-price d-block" style="color: #000000">egp</span>
                                    </div>

                                    </p>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 mb-5 over-xx" data-aos="fade-down">
                <div class="m-auto w-50 text-center mt-4">
                    <h2 class="events text-capitalize position-relative">{{__('lang.search')}}</h2>
                    <div class="events-line m-auto">
                        <div class="dott"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-rings">
        <div class="container-width container">

            <div class="row py-5">
                    @foreach($Providers as  $Provider)

                        <div class="col-md-3 col-lg-3 col-12 mb-4">
                            <div class="parent-box">
                                <div class="parent-box-img">
                                    <img src="{{$Provider->image}}" alt="{{$Provider->name}}">
                                </div>
                                <div class="parent-box-content text-center">
                                    <h5 class="text-capitalize text-break fw-bolder">{{$Provider->name}}</h5>
                                    <a class="btn user-link">ID : {{$Provider->id}}</a>

                                    <!-- <a class="link-a text-uppercase mt-3 d-block w-75 m-auto p-1">open account</a> -->

                                    <div class="btn-jobs mt-0">
                                        <a href="{{url('Provider',$Provider->id)}}">
                                            <button href="" class="apply-btn-slide apply-btn-slide2 link-aa">
                                                <span>{{__('lang.more')}}</span>
                                                <div class="btn-layer222"></div>
                                            </button>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    </div>



{{--<div class="container-fluied reco-over over-xx bg-hhh" data-aos="fade-up-left">--}}
{{--    <div class="m-auto w-50 text-center mt-4">--}}
{{--        <h2 class="events text-capitalize position-relative">{{__('lang.recommended for you')}}</h2>--}}
{{--        <div class="events-line m-auto">--}}
{{--            <div class="dott"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-12 col-lg-12 col-12 mb-2">--}}
{{--            <div class="owl-carousel owl-carousel-p ">--}}
{{--                @foreach(\App\Models\Service::inRandomOrder()->limit(6)->get() as $serv)--}}
{{--                <div class="carsouel-content">--}}
{{--                    <div class="bg-content">--}}
{{--                        <div class="img-box-owl">--}}
{{--                            <img src="{{$serv->image}}" alt="{{$serv->title}}">--}}
{{--                        </div>--}}
{{--                        <div class="padding-p d-flex justify-content-between">--}}
{{--                            <div>--}}
{{--                                <h6>{{$serv->title}}</h6>--}}
{{--                                <span class="gray-text">{{$serv->Provider->name}}</span>--}}
{{--                            </div>--}}
{{--                            <div class="">--}}
{{--                                <i class="fa-solid fa-heart addtowishlist " data-id="{{$serv->id}}"  ></i>--}}
{{--                                <i class="fa-sharp fa-solid fa-cart-shopping grayy add " id="btn_add_cart" data-id="{{$serv->id}}"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex justify-content-bettwen mb-3">--}}
{{--                            <div style="width: 80%;" class="d-flex">--}}
{{--                                <span class="rating-item d-block">--}}
{{--                                    <i class="fa fa-star gold" aria-hidden="true"></i>--}}
{{--                                </span>--}}
{{--                                <span class="rating-item d-block">--}}
{{--                                    <i class="fa fa-star gold" aria-hidden="true"></i>--}}
{{--                                </span>--}}
{{--                                <span class="rating-item d-block">--}}
{{--                                    <i class="fa fa-star gold" aria-hidden="true"></i>--}}
{{--                                </span>--}}
{{--                                <span class="rating-item d-block">--}}
{{--                                    <i class="fa fa-star gold" aria-hidden="true"></i>--}}
{{--                                </span>--}}
{{--                                <span class="rating-item d-block">--}}
{{--                                <i class="fa fa-star gold" aria-hidden="true"></i>--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                            <p class="price" style="width: 20%">--}}
{{--                            <div class="d-flex">--}}
{{--                                <span class="d-block egp-price">{{$serv->deposit}}</span>--}}
{{--                                <span class="egp-price d-block">egp</span>--}}
{{--                            </div>--}}



@endsection
