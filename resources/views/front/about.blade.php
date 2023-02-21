@extends('front.layout')
@section('title',$data->title)
@section('content')
        <!--<<<<<< this is slider >>>>>> -->
          <div class="carousel-line"></div>


         <!-- about us -->
         <section class= "section1 ss">
          <div class= "container">
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
            <div class= "content-wrapper row">
              <div class=" col-12 col-md-6 col-lg-6 pb-2 ">

                  <div class= "imgi p-2">
                     <img src="{{$data->image}}" alt="">
                  </div>

              </div>
              <div class=" col-12 col-md-6 col-lg-6">
                  <p class= "texte">{!! $data->description !!}</p>
              </div>


           </div>
          </div>
        </section>
        <section class= "section2 ss"></section>
           <!-- <<<<<<<<<<<<<<<< end top provider >>>>>>>>>>>>>>>>>>>>>>-->
            <!-- <<<<<<<<<<<<<<<< start footer >>>>>>>>>>>>>>>>>>>>>>-->
@endsection
