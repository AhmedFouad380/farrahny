@extends('front.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 mb-5 over-xx" data-aos="fade-down">
                <div class="m-auto w-50 text-center mt-4">
                    <h2 class="events text-capitalize position-relative">{{trans('lang.my_orders')}}</h2>
                    <div class="events-line m-auto">
                        <div class="dott"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr class="text-capitalize">
                            <th scope="col">{{trans('lang.provider')}} </th>
                            <th scope="col">{{trans('lang.total')}} </th>
                            <th scope="col">{{trans('lang.deposit')}} </th>
                            <th scope="col">{{trans('lang.remain')}} </th>
                            <th scope="col">{{trans('lang.order_time')}} </th>
                            <th scope="col">{{trans('lang.order_details')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $total=[];
                        @endphp
                        @foreach($orders as $row)
                            <tr class="" id="row_id_{{$row->id}}">
                                <td>
                                    {{$row->provider ? $row->provider->name : ''}}
                                </td>
                                <td class="sub-total">
                                    <span class="fw-bolder">{{$row->total}}</span>
                                    <span class="text-uppercase fw-bolder orang">{{trans('lang.currency')}}</span>
                                </td>
                                <td>
                                    <span class="fw-bolder">{{$row->total_deposit}}</span>
                                    <span class="text-uppercase fw-bolder orang">{{trans('lang.currency')}}</span>
                                </td>
                                <td>
                                    <span class="fw-bolder">{{$row->remain}}</span>
                                    <span class="text-uppercase fw-bolder orang">{{trans('lang.currency')}}</span>
                                </td>
                                <td>
                                    <span class="fw-bolder">{{$row->created_at->format('Y-m-d g:i a')}}</span>

                                </td>
                                <td>
                                    <a href="{{route('orders.details',$row->id)}}" style="color: black;">
                                        <i class="fa-solid fa-eye eye"></i>
                                    </a>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>


        <!-- <div class="row">
             <div class="col-md-6 col-6 col-6 mb-5">
                <h6 class="text-capitalize">
                   <span class="cart-icon"><i class="fa-solid fa-cart-shopping"></i></span>
                   Cart summary
                </h6>
             </div>
             <div class="col-md-6 col-lg-6 col-6 d-flex justify-content-end mb-5">
                <a href="#" class="d-block remove-cart" >remove all</a>
             </div>
             <div class="col-md-6 col-lg-6 col-12 mb-4">
               <div class="row d-flex align-items-center">
                   <div class="col-md-3 col-lg-2 col-4">
                     <div class="cart-img">
                         <img src="assets/img/09f9892e44942b16f02964cd113786ef.png" alt="">
                     </div>
                   </div>
                   <div class="col-md-4 col-lg-4 col-8">
                       <p class="text-break cart-name">villa elshams</p>
                       <span class="text-break gray-cart">sub information</span>
                   </div>
                   <div class="col-md-5 col-lg-5 col-12 d-flex mobile-cartt">
                       <p class="text-uppercase">
                         <span class="fw-bolder orang">7000</span>
                         egp
                     </p>
                       <span class="cart-icon2 d-block"><i class="fa-solid fa-trash-can"></i></span>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-lg-6 col-12 mb-4">
               <div class="row d-flex align-items-center">
                   <div class="col-md-3 col-lg-2 col-4">
                     <div class="cart-img">
                         <img src="assets/img/09f9892e44942b16f02964cd113786ef.png" alt="">
                     </div>
                   </div>
                   <div class="col-md-4 col-lg-4 col-8">
                       <p class="text-break cart-name">villa elshams</p>
                       <span class="text-break gray-cart">sub information</span>
                   </div>
                   <div class="col-md-5 col-lg-5 col-12 d-flex mobile-cartt">
                       <p class="text-uppercase">
                         <span class="fw-bolder orang">7000</span>
                         egp
                     </p>
                       <span class="cart-icon2 d-block"><i class="fa-solid fa-trash-can"></i></span>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-lg-6 col-12 mb-4">
               <div class="row d-flex align-items-center">
                   <div class="col-md-3 col-lg-2 col-4">
                     <div class="cart-img">
                         <img src="assets/img/09f9892e44942b16f02964cd113786ef.png" alt="">
                     </div>
                   </div>
                   <div class="col-md-4 col-lg-4 col-8">
                       <p class="text-break cart-name">villa elshams</p>
                       <span class="text-break gray-cart">sub information</span>
                   </div>
                   <div class="col-md-5 col-lg-5 col-12 d-flex mobile-cartt">
                       <p class="text-uppercase">
                         <span class="fw-bolder orang">7000</span>
                         egp
                     </p>
                       <span class="cart-icon2 d-block"><i class="fa-solid fa-trash-can"></i></span>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-lg-6 col-12 mb-4">
               <div class="row d-flex align-items-center">
                   <div class="col-md-3 col-lg-2 col-4">
                     <div class="cart-img">
                         <img src="assets/img/09f9892e44942b16f02964cd113786ef.png" alt="">
                     </div>
                   </div>
                   <div class="col-md-4 col-lg-4 col-8">
                       <p class="text-break cart-name">villa elshams</p>
                       <span class="text-break gray-cart">sub information</span>
                   </div>
                   <div class="col-md-5 col-lg-5 col-12 d-flex mobile-cartt">
                       <p class="text-uppercase">
                         <span class="fw-bolder orang">7000</span>
                         egp
                     </p>
                       <span class="cart-icon2 d-block"><i class="fa-solid fa-trash-can"></i></span>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-lg-6 col-12 mb-4">
               <div class="row d-flex align-items-center">
                   <div class="col-md-3 col-lg-2 col-4">
                     <div class="cart-img">
                         <img src="assets/img/09f9892e44942b16f02964cd113786ef.png" alt="">
                     </div>
                   </div>
                   <div class="col-md-4 col-lg-4 col-8">
                       <p class="text-break cart-name">villa elshams</p>
                       <span class="text-break gray-cart">sub information</span>
                   </div>
                   <div class="col-md-5 col-lg-5 col-12 d-flex mobile-cartt">
                       <p class="text-uppercase">
                         <span class="fw-bolder orang">7000</span>
                         egp
                     </p>
                       <span class="cart-icon2 d-block"><i class="fa-solid fa-trash-can"></i></span>
                   </div>
                </div>
             </div>
             <div class="col-md-6 col-lg-6 col-12 mb-4">
               <div class="row d-flex align-items-center">
                   <div class="col-md-3 col-lg-2 col-4">
                     <div class="cart-img">
                         <img src="assets/img/09f9892e44942b16f02964cd113786ef.png" alt="">
                     </div>
                   </div>
                   <div class="col-md-4 col-lg-4 col-8">
                       <p class="text-break cart-name">villa elshams</p>
                       <span class="text-break gray-cart">sub information</span>
                   </div>
                   <div class="col-md-5 col-lg-5 col-12 d-flex mobile-cartt">
                       <p class="text-uppercase">
                         <span class="fw-bolder orang">7000</span>
                         egp
                     </p>
                       <span class="cart-icon2 d-block"><i class="fa-solid fa-trash-can"></i></span>
                   </div>
                </div>
             </div>
        </div> -->

    </div>


@endsection
