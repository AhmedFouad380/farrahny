@extends('front.layout')
@section('title',$data->title)
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
                                  <span class="egp-price d-block" style="color: #000000">{{trans('lang.currency')}}</span>
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
                      <h2 class="events text-capitalize position-relative">{{$data->title}}</h2>
                      <div class="events-line m-auto">
                         <div class="dott"></div>
                      </div>
                  </div>
                </div>
            </div>
          </div>


          <div class="bg-rings">
            <div class="container-width">
                <div class="row py-5">
                    @foreach($services as $service)
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
                                $paginator =$services->appends(request()->input())->links()->paginator;
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




@endsection
