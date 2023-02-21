@extends('front.layout')
@section('title',$data->title)
        <!-- <<<<<<<<< start weding header >>>>>>>>>>>>-->

        <!-- <<<<<<<<< start weding header >>>>>>>>>>>>-->
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/CDNSFree2/Plyr/plyr.css" />

@endsection
@section('content')

    <div class="carousel-line"></div>


    <header class="ser">
        <div class="box-prov">
            <div class="provider-imgg">
                <img src="{{$data->image}}" alt="{{$data->title}}">
            </div>
            <h4>{{$data->title}}</h4>
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
            <div class="m-auto text-center mt-3">
                <a href="#" class="now-booking">{{__('lang.booking now')}}</a>
            </div>

        </div>

    </header>

    <!-- wall paper gallary -->

    <!-- Container for the image gallery -->



    <!-- end wall paper gallery -->
    <section>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 mb-5 over-xx" data-aos="fade-down">
                    <div class="m-auto w-50 text-center mt-4">
                        <h2 class="events text-capitalize position-relative">{{__('lang.Images')}}</h2>
                        <div class="events-line m-auto">
                            <div class="dott"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row m-0 p-0">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper allSwiper">
                <div class="swiper-wrapper">
                    @foreach($data->images as $Image)
                        <div class="swiper-slide parent-swiper-slide">
                            <img src="{{$Image->image}}" />
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper myAllSwiper">
                <div class="swiper-wrapper">
                    @foreach($data->images as $Image)

                        <div class="swiper-slide child-swiper-slide">
                            <img src="{{$Image->image}}" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="container">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 mb-5 over-xx" data-aos="fade-down">
                    <div class="m-auto w-50 text-center mt-4">
                        <h2 class="events text-capitalize position-relative">{{__('lang.video')}}</h2>
                        <div class="events-line m-auto">
                            <div class="dott"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <iframe width="100%" height="315" src="https://www.youtube.com/embed/5oH9Nr3bKfw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 mb-5 over-xx" data-aos="fade-down">
                    <div class="m-auto w-50 text-center mt-4">
                        <h2 class="events text-capitalize position-relative">{{__('lang.description')}}</h2>
                        <div class="events-line m-auto">
                            <div class="dott"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="gray mt-5"></p>
    </section>

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
                    @foreach(\App\Models\Service::where('category_id',$data->category_id)->limit(6)->get()  as $Service)
                    <div class="carsouel-content">
                        <div class="bg-content">
                            <div class="img-box-owl">
                                <img src="{{$Service->image}}" alt="">
                            </div>
                            <div class="padding-p d-flex justify-content-between">
                                <div>
                                    <h6>{{$Service->title}}</h6>
                                    <span class="gray-text">{{$Service->Provider->name}}</span>
                                </div>
                                <div class="">
                                    <i class="fa-solid fa-heart  addtowishlist " data-id="{{$Service->id}}"></i>
                                    <i class="fa-sharp fa-solid fa-cart-shopping grayy  add "data-id="{{$Service->id}}"></i>
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
                                    <span class="d-block egp-price">{{$Service->price}}</span>
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

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/CDNSFree2/Plyr/plyr.js"></script>
    <script>
        var swiper = new Swiper(".myAllSwiper", {
            speed: 1500,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
            },
        });
    </script>
@endsection
