@extends('front.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 mb-5 over-xx" data-aos="fade-down">
                <div class="m-auto w-50 text-center mt-4">
                    <h2 class="events text-capitalize position-relative">Cart</h2>
                    <div class="events-line m-auto">
                        <div class="dott"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr class="text-capitalize">
                            <th>index</th>
                            <th scope="col">image</th>
                            <th scope="col">
                                Product
                                <i class=" orang fa-solid fa-circle-info p-1"></i>
                            </th>
                            <th scope="col">deposit price </th>
                            <th scope="col">total price </th>
                            <th scope="col">delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $total=[];
                        @endphp
                        @foreach($Carts as $cart)
                        <tr class="">
                            <td scope="row">
                                <span class="index-color">{{$cart->id}}</span>
                            </td>
                            <td>
                                <div class="cart-img">
                                    <img src="{{$cart->Service->image}}" alt="">
                                </div>
                            </td>
                            <td>
                                {{$cart->Service->title}}
                            </td>
                            <td class="sub-total">
                                <span class="fw-bolder">{{$cart->Service->deposit}}</span>
                                <span class="text-uppercase fw-bolder orang">egp</span>
                            </td>
                            <td>
                                <span class="fw-bolder">{{$cart->Service->price}}</span>
                                <span class="text-uppercase fw-bolder orang">egp</span>
                            </td>
                            <td>
                                <i class="fa-solid fa-trash-can trash"></i>
                            </td>
                        </tr>
                            @php
                            $total[]=$cart->Service->deposit;
                            @endphp
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-12 bg-caartt">
                <div class="row mt-3">
                    <div class="col-md-6 col-lg-6 col-6">
                        <span class="d-block color-g fw-bolder">Subtotal</span>
                    </div>
                    <div class="col-md-6 col-lg-6 col-6 d-flex justify-content-end">
                        <span class="d-block color-g text-uppercase">{{array_sum($total)}} <span class="orang fw-bolder">egp</span></span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6 col-lg-6 col-6">
                        <span class="d-block color-g fw-bolder">Taxes 0%</span>
                    </div>
                    <div class="col-md-6 col-lg-6 col-6 d-flex justify-content-end">
                        <span class="d-block color-g text-uppercase">0 <span class="orang fw-bolder">egp</span></span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6 col-lg-6 col-6">
                        <span class="d-block color-g fw-bolder">Total (including tax)</span>
                    </div>
                    <div class="col-md-6 col-lg-6 col-6 d-flex justify-content-end">
                        <span class="d-block color-g text-uppercase">{{array_sum($total)}}      <span class="orang fw-bolder">egp</span></span>
                    </div>
                </div>
                <div class="cart-input1 mt-3">
                    <input type="text" placeholder="add copon" class="d-bolck">
                    <button class="d-block">apply</button>
                </div>
                <div class="col-md-12 col-lg-12 col-12 text-center mt-3">
                    <button class="btn conf-btn">confirm order</button>
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
