@extends('front.layout')
@section('title',__('lang.Home'))
@section('content')

    <!--<<<<<< this is slider >>>>>> -->
    <div class="carousel-line"></div>

    <div class="slider">
        @foreach(\App\Models\Slider::where('is_active','active')->get()  as $key  => $Slider)
            <input type="radio" name="slider" @if($key ==  0) checked class="m-left-radio" @endif/>
            <div class="slider__content">
                <img src="{{$Slider->image}}"/>
                <div class="slider__description">
                    <div class="move-slide-text">
                        <div class="heading over-xx" data-aos="fade-left">
                            <h1 class="text-uppercase text-break">{{$Slider->title}}</h1>
                            <h1 class="text-break">{{$Slider->description}}</h1>
                            <h1></h1>
                            @if($Slider->link)
                                <div class="d-flex mt-5">
                                    <div class="btn-jobs">
                                        <form action="{{$Slider->link}}">
                                            <button type="submit" class="apply-btn-slide">
                                                <span>{{__('lang.more')}}</span>
                                                <div class="btn-layer222"></div>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    <!-- <<<<<< end slider >>>>>>>>-->

    <!-- <<<<<< this is events >>>>>> -->
    <section class="container over-xx">
        <div class="row mt-5">
            <div class="col-12 col-md-12 col-lg-12 mb-5 over-xx" data-aos="fade-down">
                <div class="m-auto w-50 text-center">
                    <h2 class="events text-capitalize position-relative">{{__('lang.our events')}}</h2>
                    <div class="events-line m-auto">
                        <div class="dott"></div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="owl-carousel owl-carousel-p">
                    @foreach(\App\Models\Event::where('is_active','active')->get() as $event)
                        <div class="carsouel-content over-xx" data-aos="fade-right">
                            <a href="{{url('event',$event->title)}}">
                                <div class="content-container">
                                    <div class="layer"></div>
                                    <div class="content-img">
                                        <img src="{{$event->image}}" alt="{{$event->title}}">
                                    </div>
                                    <div class="content">
                                        <p class="size-p">{{$event->title}}</p>
                                        <span
                                            class="d-block size-span">({{$event->Category->count()}}) {{__('lang.Category')}}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <!-- <<<<<< end events >>>>>> -->

    <!-- <<<<<<< this is  recomended for you >>>>>-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 mb-5 over-xx" data-aos="fade-down">
                <div class="m-auto w-50 text-center mt-4">
                    <h2 class="events text-capitalize position-relative">{{__('lang.recommended for you')}}</h2>
                    <div class="events-line m-auto">
                        <div class="dott"></div>
                    </div>
                </div>
            </div>
            @foreach(\App\Models\Service::where('is_active','active')->Orderby('id','desc')->where('is_recommend','active')->inRandomOrder()->limit(2)->get() as $key => $recommend)

                <div class="col-md-6 col-lg-6 col-12 over-xx" @if($key == 0) data-aos="fade-left"
                     @else data-aos="fade-right" @endif>
                    <div class="reco-for">
                        <div class="basic-layer-reco"></div>
                        <div class="reco-layer">
                            <div class="layer1-reco"></div>
                            <div class="d-flex justify-content-between lines">
                                <div class="layer2-reco"></div>
                                <div class="layer3-reco"></div>
                            </div>
                            <div class="layer4-reco"></div>
                        </div>
                        <div class="reco-img">
                            <img src="{{$recommend->image}}" alt="">
                        </div>
                        <div class="reco-content">
                            <p class="fs-p">{{$recommend->title}}</p>
                            <span>{{$recommend->Category->title}}</span>
                        </div>
                    </div>
                    <div class="text-center order">

                        <a class="link" href="{{url('service',$recommend->id)}}">{{__('lang.order now')}}</a>

{{--                        <a class="link"id="btn_add_cart"--}}
{{--                           data-id="{{$recommend->id}}">{{__('lang.order now')}}</a>--}}

                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="container-fluied reco-over over-xx" data-aos="fade-up-left">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12 mb-2">
                <div class="owl-carousel owl-carousel-p ">
                    @foreach(\App\Models\Service::where('is_active','active')->where('is_recommend','active')->inRandomOrder()->limit(10)->get() as $key => $recommend)
                        <div class="carsouel-content">
                            <div class="bg-content">
                                <div class="img-box-owl">
                                    <a href="{{url('service',$recommend->id)}}">
                                        <img src="{{$recommend->image}}" alt="{{$recommend->title}}">
                                    </a>

                                </div>
                                <div class="padding-p d-flex justify-content-between">
                                    <div>
                                        <a href="{{url('service',$recommend->id)}}">
                                            <h6 style="color: #000000;">{{$recommend->title}}</h6>
                                        </a>
                                        <span class="gray-text">{{$recommend->Provider->name}}</span>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid fa-heart addtowishlist @if($recommend->is_favorite==1) orang @endif" data-id="{{$recommend->id}}"></i>
                                        <i class="fa-sharp fa-solid fa-cart-shopping grayy" id="btn_add_cart"
                                           data-id="{{$recommend->id}}"></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-bettwen mb-3">
                                    <div style="width: 80%;" class="d-flex">
                                        @if($recommend->rate == 1)
                                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                        @elseif($recommend->rate == 2)
                                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                        @elseif($recommend->rate == 3)
                                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                        @elseif($recommend->rate == 4)
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
                                        @elseif($recommend->rate == 5)
                                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="false"></i>
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
                                        @endif
                                    </div>
                                    <p class="price" style="width: 20%">
                                    <div class="d-flex">
                                        <span class="d-block egp-price"> {{$recommend->price}} </span>
                                        <span class="egp-price d-block">{{trans('lang.currency')}}</span>
                                    </div>

                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-12 trans " data-aos="fade-left" style="margin-top: 61px;">
                <div class="bg-mosqu">
                    <div class="img-layer">
                        <div class="text-mosqu">
                            <span class="num-size">35%</span>
                            <span class="text-size text-uppercase">off</span>
                            <span class="d-block"></span>
                            <span class="orang-text text-capitalize">all</span>
                            <span class="text2-size text-uppercase ">skincer</span>
                            <span class="orang-text text-capitalize">items</span>
                        </div>
                        <div class="btn-link">
                            <a href="" class=" btn link-a">book now</a>
                        </div>
                    </div>
                    <div class="bg-mosqu2">
                        <img src="{{asset('website/assets/img/mosque-g1eeee6fa8_1920.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <<<<<<<<<<<<<<<< end recomended for you >>>>>>>>>>>>>>>>>>>>>>-->
    <!-- <<<<<<<<<<<<<<<< start top provider >>>>>>>>>>>>>>>>>>>>>>-->
    <div class="top over-xx" data-aos="fade-left">
        <div class="child2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 mb-5">
                        <div class="m-auto w-50 text-center mt-4">
                            <h2 class="events text-capitalize position-relative">{{__('lang.top provider')}}</h2>
                            <div class="events-line m-auto">
                                <div class="dott"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-1 d-mobile-none">

                    </div>
                    <div class="col-md-10 col-lg-7 col-12 tab-m">
                        <div class="row">
                            @foreach(\App\Models\Provider::where('is_active','active')->where('is_top','active')->limit(9)->inRandomOrder()->get() as  $Provider)

                                <div class="col-md-6 col-lg-4 col-12 mb-4">
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
                </div>
                <div class="d-flex align-items-end justify-content-end trans-topp">
                    <div class="btn-jobs">
                        <a href="{{url('Providers')}}" class="apply-btn">
                            <span>{{__('lang.see more')}}</span>
                            <div class="btn-layer"></div>
                        </a>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
