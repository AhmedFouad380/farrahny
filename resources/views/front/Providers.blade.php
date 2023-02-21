@extends('front.layout')
@section('title',$data->name)
@section('content')
<!-- <<<<<<<<< start weding header >>>>>>>>>>>>-->
<div class="carousel-line"></div>

<header class="ser">
    <div class="box-prov">
        <div class="provider-imgg">
            <img src="{{$data->image}}" alt="">
        </div>
        <h4>ramy@frahny</h4>
        <div class="d-flex m-auto">
            <div class="text-center m-auto">
                    <span class="rating-item">
                        <i class="fa fa-star gold" aria-hidden="true"></i>
                    </span>
                <span class="rating-item">
                        <i class="fa fa-star gold" aria-hidden="true"></i>
                    </span>
                <span class="rating-item">
                        <i class="fa fa-star gold" aria-hidden="true"></i>
                    </span>
                <span class="rating-item">
                        <i class="fa fa-star gold" aria-hidden="true"></i>
                    </span>
                <span class="rating-item">
                    <i class="fa fa-star gold" aria-hidden="true"></i>
                    </span>
            </div>

        </div>
       <!-- <div class="m-auto text-center mt-3">
            <a href="#" class="now-booking">{{__('lang.booking now')}}</a>
        </div>-->

    </div>

</header>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 mb-5 over-xx" data-aos="fade-down">
            <div class="m-auto w-50 text-center mt-4">
                <h2 class="events text-capitalize position-relative">{{$data->name}}</h2>
                <div class="events-line m-auto">
                    <div class="dott"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <section class="container mb-5">
    <div class="row align-items-center">
        <div class="col-md-6 col-lg-6 col-12">
             <div class="provider-info d-flex align-items-center">
                  <div class="provider-imgg">
                       <img src="assets/img/excited-audience-watching-confetti-fireworks-having-fun-music-festival-night-copy-space.png" alt="">
                  </div>
                  <div class="prov-rate p-3">
                     <p class="p-name">
                        ramy@frahny
                     </p>
                     <div class="d-flex">
                        <div>
                            <span class="rating-item">
                                <i class="fa fa-star gold" aria-hidden="true"></i>
                            </span>
                            <span class="rating-item">
                                <i class="fa fa-star gold" aria-hidden="true"></i>
                            </span>
                            <span class="rating-item">
                                <i class="fa fa-star gold" aria-hidden="true"></i>
                            </span>
                            <span class="rating-item">
                                <i class="fa fa-star gold" aria-hidden="true"></i>
                            </span>
                            <span class="rating-item">
                            <i class="fa fa-star gold" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="heartt px-4">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                     </div>

                  </div>
             </div>
        </div>
        <div class="col-md-12 col-lg-6 col-12">
            <div class="book">
                 <a href="#">booking now</a>
            </div>
        </div>
    </div>
</section>  -->

<div class="container mb-5">
    <div class="row">
        @foreach($data->Services as $service)
        <div class="col-md-4 col-lg-6 col-12 mb-5">
            <div class="weding-box">
                <div class="weding-box-img">
                    <img src="{{$service->image}}" alt="{{$service->title}}">
                </div>
                <div class="position-box">
                    <div class="d-flex justify-content-center align-items-end rring" style="height: 100%;">
                        <span class="d-block text-ring">{{$service->title}}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>


<!-- reviews -->
<div class="container">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 mb-5 over-xx" data-aos="fade-down">
            <div class="m-auto w-50 text-center mt-4">
                <h2 class="events text-capitalize position-relative">{{__('lang.Reviews')}}</h2>
                <div class="events-line m-auto">
                    <div class="dott"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="main">

    <section class="containerr">

        <!-- <div class="title">
          <h2>reviews</h2>
          <div class="underline"></div>
        </div> -->

        <article class="review">
            <div class="img-container">
                <img src="https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883334/person-1_rfzshl.jpg" alt="" id="person-img" />
            </div>

            <h4 id="author">sara jones</h4>
            <p id="job">ux designer</p>
            <div>
                    <span class="rating-item">
                        <i class="fa fa-star gold" aria-hidden="true"></i>
                    </span>
                <span class="rating-item">
                        <i class="fa fa-star gold" aria-hidden="true"></i>
                    </span>
                <span class="rating-item">
                        <i class="fa fa-star gold" aria-hidden="true"></i>
                    </span>
                <span class="rating-item">
                        <i class="fa fa-star gold" aria-hidden="true"></i>
                    </span>
                <span class="rating-item">
                    <i class="fa fa-star gold" aria-hidden="true"></i>
                    </span>
            </div>
            <p id="info">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto
                asperiores debitis incidunt, eius earum ipsam cupiditate libero?
                Iste, doloremque nihil?
            </p>

            <!-- prev next buttons-->
            <div class="button-container">
                <button class="prev-btn btttn">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="next-btn btttn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

        </article>

    </section>
</main>


<div class="container-fluied reco-over over-xx bg-hhh" data-aos="fade-up-left">
    <div class="m-auto w-50 text-center mt-4">
        <h2 class="events text-capitalize position-relative">{{__('lang.recommended for you')}}</h2>
        <div class="events-line m-auto">
            <div class="dott"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-12 mb-2">
            <div class="owl-carousel owl-carousel-p ">
                @foreach(\App\Models\Service::inRandomOrder()->limit(6)->get() as $serv)
                <div class="carsouel-content">
                    <div class="bg-content">
                        <div class="img-box-owl">
                            <img src="{{$serv->image}}" alt="{{$serv->title}}">
                        </div>
                        <div class="padding-p d-flex justify-content-between">
                            <div>
                                <h6>{{$serv->title}}</h6>
                                <span class="gray-text">{{$serv->Provider->name}}</span>
                            </div>
                            <div class="">
                                <i class="fa-solid fa-heart addtowishlist " data-id="{{$serv->id}}"  ></i>
                                <i class="fa-sharp fa-solid fa-cart-shopping grayy add "data-id="{{$serv->id}}"></i>
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
                                <span class="d-block egp-price">{{$serv->deposit}}</span>
                                <span class="egp-price d-block">egp</span>
                            </div>

                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

    @endsection

