@extends('front.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 mb-5 over-xx" data-aos="fade-down">
                <div class="m-auto w-50 text-center mt-4">
                    <h2 class="events text-capitalize position-relative">{{trans('lang.cart')}}</h2>
                    <div class="events-line m-auto">
                        <div class="dott"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
        $total[] = 0;
        $total_deposit[] = 0;
    @endphp
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr class="text-capitalize">
                            <th scope="col">{{trans('lang.product_image')}} </th>
                            <th scope="col">{{trans('lang.product')}}</th>
                            <th scope="col">{{trans('lang.provider')}}</th>
                            <th scope="col">{{trans('lang.deposit_price')}} </th>
                            <th scope="col">{{trans('lang.total_price')}} </th>
                            <th scope="col" style="width: 15%;">{{trans('lang.time')}} </th>
                            <th scope="col" style="width: 15%;">{{trans('lang.date')}} </th>
                            <th scope="col">{{trans('lang.delete')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $total=[];
                        @endphp
                        @foreach($Carts as $cart)
                            <tr class="" id="row_id_{{$cart->id}}">
                                <td>
                                    <div class="cart-img">
                                        <img src="{{$cart->Service->image}}" alt="">
                                    </div>
                                </td>
                                <td>
                                    {{$cart->Service->title}}
                                </td>
                                <td>
                                    {{$cart->Service->provider->name}}
                                </td>
                                <td class="sub-total">
                                    <span class="fw-bolder">{{$cart->Service->deposit}}</span>
                                    <span class="text-uppercase fw-bolder orang">{{trans('lang.currency')}}</span>
                                </td>
                                <td>
                                    <span class="fw-bolder">{{$cart->Service->price}}</span>
                                    <span class="text-uppercase fw-bolder orang">{{trans('lang.currency')}}</span>
                                </td>
                                <td>

                                    {{\Carbon\Carbon::createFromFormat('H:i:s', $cart->time)->format('g:i a')}}
                                </td>
                                <td>
                                    {{$cart->date}}
                                </td>
                                <td>
                                    <a onclick="delete_alert({{$cart->id}},'{{route('cart.remove',$cart->id)}}');">
                                        <i class="fa-solid fa-trash-can trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @php
                                $total[]=$cart->Service->price;
                                $total_deposit[]=$cart->Service->deposit;
                            @endphp
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 col-12 bg-caartt">
                <div class="row mt-3">
                    <div class="col-md-6 col-lg-6 col-6">
                        <span class="d-block color-g fw-bolder">{{trans('lang.total_price')}}</span>
                    </div>
                    <div class="col-md-6 col-lg-6 col-6 d-flex justify-content-end">
                        <span class="d-block color-g text-uppercase">{{array_sum($total)}} <span
                                class="orang fw-bolder">{{trans('lang.currency')}}</span></span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6 col-lg-6 col-6">
                        <span class="d-block color-g fw-bolder">{{trans('lang.sub_total')}}</span>
                    </div>
                    <div class="col-md-6 col-lg-6 col-6 d-flex justify-content-end">
                        <span class="d-block color-g text-uppercase">{{array_sum($total_deposit)}} <span
                                class="orang fw-bolder">{{trans('lang.currency')}}</span></span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6 col-lg-6 col-6">
                        <span class="d-block color-g fw-bolder">{{trans('lang.taxes')}} 0%</span>
                    </div>
                    <div class="col-md-6 col-lg-6 col-6 d-flex justify-content-end">
                        <span class="d-block color-g text-uppercase">0 <span
                                class="orang fw-bolder">{{trans('lang.currency')}}</span></span>
                    </div>
                </div>
                @php
                   $remain = array_sum($total) - array_sum($total_deposit);
                @endphp

                <div class="row mt-3">
                    <div class="col-md-6 col-lg-6 col-6">
                        <span class="d-block color-g fw-bolder">{{trans('lang.total')}} ({{trans('lang.including_tax')}} )</span>
                    </div>
                    <div class="col-md-6 col-lg-6 col-6 d-flex justify-content-end">
                        <span class="d-block color-g text-uppercase">  {{$remain}}   <span
                                class="orang fw-bolder">{{trans('lang.currency')}}</span></span>
                    </div>
                </div>
                    <form action="{{url('ApplyCoupon')}}" method="post" >
                <div class="cart-input1 mt-3">

                        <input type="text" required name="coupon" placeholder="{{trans('lang.add_coupon')}}" class="d-bolck">
                    <button class="d-block">{{trans('lang.Apply')}}</button>
                </div>
                    </form>

                    <form action="{{route('order.checkout')}}" method="post">
                    @csrf
                    <div class="col-md-12 col-lg-12 col-12 text-center mt-3">
                        <button type="submit" class="btn conf-btn">{{trans('lang.confirm_order')}}</button>
                    </div>
                </form>
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
@section('js')
    @if(Session('CouponMessage') && Session('CouponMessage') == 'success')
        <script>

            Swal.fire({
                icon: 'success',
                title: "{{__('lang.Success')}}",
                text: "{{__('lang.Success_text')}}",
                type: "success",
                timer: 1000,
                showConfirmButton: false

            });
        </script
    @endif


    @if(Session('CouponMessage') && Session('CouponMessage') == 'failed')
        <script>

            Swal.fire({
                icon: 'error',
                title: "{{__('lang.worning')}}",
                text: "{{__('lang.coupon is wrong')}}",
                type: "error",
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif
    @if(Session('CouponMessage') && Session('CouponMessage') == 'AlreadyAdd')
        <script>

            Swal.fire({
                icon: 'error',
                title: "{{__('lang.worning')}}",
                text: "{{__('lang.coupon is already add')}}",
                type: "error",
                timer: 3000,
                showConfirmButton: false
            });
        </script>

    @endif
@endsection
