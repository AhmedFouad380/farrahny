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
                <img src="{{$data->image}}" alt="{{$data->name}}">
            </div>
            <h4>{{$data->name}}</h4>
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
            {{$data->title}}
            </div>

        </div>

    </header>

    <div class="bg-rings">
        <div class="container-width">
            <div class="row py-5">
                @foreach($Services as $service)
                    <div class="col-md-6 col-lg-3 col-12 mb-4">
                        <div class="carsouel-content">
                            <div class="bg-content">
                                <div class="img-box-owl">
                                    <a href="{{url('service',$service->id)}}">
                                        <img src="{{$service->image}}" alt="">
                                    </a>
                                </div>
                                <div class="padding-p d-flex justify-content-between">
                                    <div>
                                        <a href="{{url('service',$service->id)}}">
                                            <h6 style="color: #000000">{{$service->title}}</h6>
                                        </a>
                                        <span class="gray-text">{{$service->Provider->name}}</span>
                                    </div>
                                    <div class="">
                                        <i class="fa-solid fa-heart addtowishlist @if($service->is_favorite==1) orang @endif" data-id="{{$service->id}}"></i>
                                        <i class="fa-sharp fa-solid fa-cart-shopping grayy" id="btn_add_cart"
                                           data-id="{{$service->id}}"></i>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-bettwen mb-3">
                                    <div style="width: 80%;" class="d-flex">
                                        @if($service->rate == 1)
                                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                        @elseif($service->rate == 2)
                                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                        @elseif($service->rate == 3)
                                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                            <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                        @elseif($service->rate == 4)
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
                                        @elseif($service->rate == 5)
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
                                        <span class="d-block egp-price" style="color: #000000">  {{$service->price}}</span>
                                        <span class="egp-price d-block" style="color: #000000">egp</span>
                                    </div>

                                    </p>
                                </div>


                            </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                <nav style="background: none!important;" aria-label=" navigation example">
                    @php
                        $paginator =$Services->appends(request()->input())->links()->paginator;
                            if ($paginator->currentPage() < 2 ){
                                $link = $paginator->currentPage();
                            }else{
                                 $link = $paginator->currentPage() -1;
                            }
                            if($paginator->currentPage() == $paginator->lastPage()){
                                       $last_links = $paginator->currentPage();
                            }else{
                                       $last_links = $paginator->currentPage() +1;

                            }
                    @endphp
                    @if ($paginator->lastPage() > 1)
                        <ul class="pagination">
                            <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }} page-item">
                                <a class="page-link" href="{{ $paginator->url(1) }}">{{__('lang.first')}} </a>
                            </li>
                            @for ($i = $link; $i <= $last_links; $i++)
                                <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }} page-item">
                                    <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }} page-item">
                                <a class="page-link"
                                   href="{{ $paginator->url($paginator->lastPage()) }}">{{__('lang.Last')}} </a>
                            </li>
                        </ul>
                    @endif

                </nav>

            </div>
        </div>
    </div>

    <!-- wall paper gallary -->
@endsection
