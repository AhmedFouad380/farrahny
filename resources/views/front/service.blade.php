@extends('front.layout')
@section('title',$data->title)
<!-- <<<<<<<<< start weding header >>>>>>>>>>>>-->

<!-- <<<<<<<<< start weding header >>>>>>>>>>>>-->
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/CDNSFree2/Plyr/plyr.css"/>
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">

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
                    <div style="width: 80%;" class="d-flex">
                        @if($data->rate == 1)
                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                        @elseif($data->rate == 2)
                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                        @elseif($data->rate == 3)
                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                        @elseif($data->rate == 4)
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
                        @elseif($data->rate == 5)
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
                </div>

            </div>
            <div class="m-auto text-center mt-3">
                <a href="javascript:void($this);" class="now-booking" id="btn_add_cart"
                   data-id="{{$data->id}}">{{__('lang.add_to_cart')}}</a>
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
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                     class="swiper roomsSwiper">
                    <div class="swiper-wrapper">
                        @foreach($data->images as $key => $Image)
                            <div class="swiper-slide @if($key<2)  parent-swiper-slide  @endif"
                                 @if($key== 0)  class="h-100" @endif>
                                <a class="test-popup-link" href="{{$Image->image}}">
                                <img  src="{{$Image->image}}"/>
                                </a>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper myRoomsSwiper">
                    <div class="swiper-wrapper ">
                        @foreach($data->images as $key => $Image)
                            <div class="swiper-slide  @if($key<2)  child-swiper-slide  @endif">
                                <img src="{{$Image->image}}" class="swiper-height"/>
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


        <iframe width="100%" height="315" @if($data->video_type == 'url') src="{{$data->video}}" @else
        src="{{$data->video_file}}"
                @endif title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
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
    @if(count($data->Reviews) > 0)
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
                <article class="review">
                    <div class="img-container">
                        <img alt=""
                             id="person-img"/>
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
                    <i class="fa fa-star gold" aria-hidden="false"></i>
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
    @endif

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
                                    <a href="{{url('service',$Service->id)}}">
                                    <img src="{{$Service->image}}" alt="">
                                    </a>
                                </div>
                                <div class="padding-p d-flex justify-content-between">
                                    <div>
                                        <h6>    {{ Str::limit($Service->title, 15) }}
                                            </h6>
                                        <span class="gray-text">
                                              {{ Str::limit($Service->Provider->name, 20) }}
                                  </span>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid fa-heart  addtowishlist " data-id="{{$Service->id}}"></i>
                                        <i class="fa-sharp fa-solid fa-cart-shopping grayy  add "
                                           data-id="{{$Service->id}}"></i>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script src="magnific-popup/jquery.magnific-popup.js"></script>
<script>
    $('.test-popup-link').magnificPopup({
        type: 'image'
        // other options
    });

</script>
    <script>
        var swiper = new Swiper(".myAllSwiper", {
            speed: 2500,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
            },
        });


        var swiper = new Swiper(".myRoomsSwiper", {
            speed: 1500,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
            autoplay: {
                delay: 2000,

            },
        });
        var swiper2 = new Swiper(".roomsSwiper", {
            speed: 1500,
            spaceBetween: 10,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>
    <script>
        // owlCarousel
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        });
        //   nav bar menu mobile


        $('.navbar-toggler').click(function () {
            $('.nav-bar-2').addClass('nav-bar-mobile');

        });

        // animation laibirary

        //   AOS.init();


        // this is login


        $('.login-form').click(function () {
            $(".span-form").css({
                "display": "block",
                "background-color": "var(--color-o)",
                "width": "0.8rem",
                "height": "3.6rem"
            });
            $(".span-form2").css("display", "none");
        });

        $('.login-form2').click(function () {
            $(".span-form2").css({
                "display": "block",
                "background-color": "var(--color-o)",
                "width": "0.8rem",
                "height": "3.6rem",
                "position": "absolute"
            });
            $(".span-form").css("display", "none");
        });


        // reviews

        // local reviews data
        const reviews = {!! $reviews !!};

        const img = document.getElementById("person-img");
        const author = document.getElementById("author");
        const job = document.getElementById("job");
        const info = document.getElementById("info");

        const prevBtn = document.querySelector(".prev-btn");
        const nextBtn = document.querySelector(".next-btn");

        let currentItem = 0;

        // load initial item
        window.addEventListener("DOMContentLoaded", () => {
            const item = reviews[currentItem];
            img.src = item.img;
            author.textContent = item.name;
            job.textContent = item.job;
            info.textContent = item.text;
        });

        // show person based on item
        function showPerson(person) {
            const item = reviews[person];
            img.src = item.img;
            author.textContent = item.name;
            job.textContent = item.job;
            info.textContent = item.text;
        }

        // show next person
        nextBtn.addEventListener("click", () => {
            currentItem++;
            if (currentItem > reviews.length - 1) {
                currentItem = 0;
            }
            showPerson(currentItem);
        });

        // show prev person
        prevBtn.addEventListener("click", () => {
            currentItem--;
            if (currentItem < 0) {
                currentItem = reviews.length - 1;
            }
            showPerson(currentItem);
        });


        //   wall paper gallary


    </script>
@endsection
