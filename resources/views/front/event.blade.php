@extends('front.layout')

@section('title',$data->title)
        <!-- <<<<<< end nav bar >>>>>> -->

        <!-- <<<<<<<<< start weding header >>>>>>>>>>>>-->

        <!-- <<<<<<<<< start weding header >>>>>>>>>>>>-->
@section('content')
        <div class="carousel-line"></div>
        <header class="wedding">
               <div>
                  <h4>{{$data->title}}</h4>
                  <p class="color-gray">409 providers</p>
               </div>
        </header>
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


        <div class="container wedding-bg mb-5">
            <div class="row">
                @foreach($data->Category as $cat)
                    <div class="col-md-4 col-lg-6 col-12 mb-5">
                        <a href="{{url('category',$cat->title)}}">
                        <div class="weding-box">
                            <div class="weding-box-img">
                                <img src="{{$cat->image}}" alt="{{$cat->title}}">
                            </div>
                            <div class="position-box">
                                <div class="d-flex justify-content-center align-items-end rring" style="height: 100%;">
                                    <span class="d-block text-ring">{{$cat->title}}</span>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach

           </div>
        </div>




        @endsection
