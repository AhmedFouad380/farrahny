@extends('front.layout')
@section('title','Wishlist')

@section('content')
        <div class="carousel-line"></div>
        <!-- <<<<<< end nav bar >>>>>> -->


          <div class="container">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12 mb-5 over-xx" data-aos="fade-down">
                  <div class="m-auto w-50 text-center mt-4">
                      <h2 class="events text-capitalize position-relative">Wishlist</h2>
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
                    @foreach(\App\Models\Favorite::where('user_id',Auth::guard('web')->id())->get()  as $data)
                    <div class="col-md-6 col-lg-3 col-12 mb-4">
                        <div class="carsouel-content">
                            <div class="bg-content">
                              <div class="img-box-owl">
                                  <a href="{{url('service',$data->Service->id)}}">
                                     <img src="{{$data->Service->image}}" alt="">
                                  </a>
                              </div>
                              <div class="padding-p d-flex justify-content-between">
                                <div>
                                    <a href="{{url('service',$data->Service->id)}}">
                                       <h6 style="color: #000000">{{$data->Service->title}}</h6>
                                    </a>
                                  <span class="gray-text">{{$data->Service->Provider->name}}</span>
                              </div>
                                  <div class="">
                                      <i class="fa-solid fa-heart addtowishlist @if($data->Service->is_favorite==1) orang @endif" data-id="{{$data->Service->id}}"></i>
                                      <i class="fa-sharp fa-solid fa-cart-shopping grayy" id="btn_add_cart"
                                         data-id="{{$data->Service->id}}"></i>
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
                                        <span class="d-block egp-price" style="color: #000000">  {{$data->Service->price}}</span>
                                        <span class="egp-price d-block" style="color: #000000">egp</span>
                                    </div>

                                    </p>
                                </div>


                            </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
          </div>




@endsection
