@extends('front.layout')
@section('css')

    <style type="text/css">.asd {
            background: rgba(0, 0, 0, 0);
            border: none;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .qty {
            width: 20%;
            border: none;
            text-align: center;
        }

        .qty-style {
            padding: 0px 8%;
            margin: 0px 7%;
            border-right: 2px solid #1bc5c9;
            border-left: 2px solid #1bc5c9;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        /*-------------------------------------- fo rate ---------------------------------------*/

        /*-------------------------------------------------- second stars --------------------------------------------------------*/
        * {
            font-family: "Lato";
        }

        .product-review-stars {
            /*background: #2C3E50;*/
            /* padding: 20px 50px 20px 20px; */
        }

        .product-review-stars label {
            text-shadow: 0px 0px 10px black;
        }

        /*end decoration*/

        .visuallyhidden {
            position: absolute !important;
            clip: rect(1px 1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px);
        }

        .product-review-stars label:after {
            content: "★";
            color: inherit;
            -webkit-transform: scale(4);
            position: absolute;
            z-index: 4;
            left: 0px;
            transition: all .4s;
            opacity: 0;
            color: inherit;
            visibility: hidden;

        }

        .product-review-stars input:checked + label:after {
            visibility: visible;
            -webkit-transform: scale(1);
            opacity: 1;
        }

        .product-review-stars {
            unicode-bidi: bidi-override;
            direction: rtl;
            width: 200px;
        }

        .product-review-stars label {
            font-family: "icomoon";
            font-size: 2em;
            position: relative;
            cursor: pointer;
            color: #DFE3E4;
        }

        .product-review-stars input:checked ~ label:before {
            opacity: 1;
        }

        .product-review-stars:hover input ~ label:before {
            opacity: 0;
        }

        .product-review-stars input + label:before {
            content: "\2605";
            position: absolute;
            right: 0;
            opacity: 0;
            transition: opacity .3s ease-in-out, color .3s ease-in-out;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden; /* Chrome and Safari */
            -moz-backface-visibility: hidden; /* Firefox */
            -ms-backface-visibility: hidden; /* Internet Explorer */
        }

        .product-review-stars input + label:hover:before,
        .product-review-stars input + label:hover ~ label:before {
            opacity: 1;
        }

        .product-review-stars input + label:nth-of-type(1):after,
        .product-review-stars input + label:nth-of-type(1):before,
        .product-review-stars input + label:nth-of-type(1):hover:before,
        .product-review-stars input + label:nth-of-type(1):hover ~ label:before,
        .product-review-stars input:nth-of-type(1):checked ~ label:before {
            color: #2ecc71;
        }

        .product-review-stars input + label:nth-of-type(2):after,
        .product-review-stars input + label:nth-of-type(2):before,
        .product-review-stars input + label:nth-of-type(2):hover:before,
        .product-review-stars input + label:nth-of-type(2):hover ~ label:before,
        .product-review-stars input:nth-of-type(2):checked ~ label:before {
            color: #f1c40f;
        }

        .product-review-stars input + label:nth-of-type(3):after,
        .product-review-stars input + label:nth-of-type(3):before,
        .product-review-stars input + label:nth-of-type(3):hover:before,
        .product-review-stars input + label:nth-of-type(3):hover ~ label:before,
        .product-review-stars input:nth-of-type(3):checked ~ label:before {
            color: #F39C12;
        }

        .product-review-stars input + label:nth-of-type(4):after,
        .product-review-stars input + label:nth-of-type(4):before,
        .product-review-stars input + label:nth-of-type(4):hover:before,
        .product-review-stars input + label:nth-of-type(4):hover ~ label:before,
        .product-review-stars input:nth-of-type(4):checked ~ label:before {
            color: #e74c3c;
        }

        .product-review-stars input + label:nth-of-type(5):after,
        .product-review-stars input + label:nth-of-type(5):before,
        .product-review-stars label:nth-of-type(5):hover:before,
        .product-review-stars input:nth-of-type(5):checked ~ label:before {
            color: #d35400;
        }

        .product-review-stars label:nth-of-type(5):hover:before {
            color: #d35400 !important;
        }

    </style>
    <style>
        /* Style the button that is used to open and close the collapsible content */
        .collapsible {
            cursor: pointer;
            text-align: left;
            outline: none;
        }

        /* Style the collapsible content. Note: hidden by default */
        .content {
            display: none;
            overflow: hidden;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 mb-5 over-xx" data-aos="fade-down">
                <div class="m-auto w-50 text-center mt-4">
                    <h2 class="events text-capitalize position-relative">{{trans('lang.order_details')}}</h2>
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
                            <th scope="col">{{trans('lang.product_image')}} </th>
                            <th scope="col">{{trans('lang.product')}}</th>
                            <th scope="col">{{trans('lang.deposit_price')}} </th>
                            <th scope="col">{{trans('lang.total_price')}} </th>
                            @if($order->status == 'completed')
                                <th scope="col">{{trans('lang.rate_service')}} </th>
                            @endif
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
                                        <img style="width: 70px" src="{{$cart->Service->image}}" alt="">
                                    </div>
                                </td>
                                <td>
                                    {{$cart->service_name}}
                                </td>
                                <td class="sub-total">
                                    <span class="fw-bolder">{{$cart->deposit}}</span>
                                    <span class="text-uppercase fw-bolder orang">{{trans('lang.currency')}}</span>
                                </td>
                                <td>
                                    <span class="fw-bolder">{{$cart->price}}</span>
                                    <span class="text-uppercase fw-bolder orang">{{trans('lang.currency')}}</span>
                                </td>
                                @if($order->status == 'completed')
                                    @if($cart->is_rated == 0)
                                        <td>
                                            <a data-id="{{$cart->id}}" id="btn_rate"
                                               class="btn btn-success">{{trans('lang.rate')}}</a>
                                        </td
                                    @else
                                        <td>
                                            <div style="width: 80%;justify-content: center;" class="d-flex">
                                                @if($cart->is_rated == 1)
                                                    <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                                @elseif($cart->is_rated == 2)
                                                    <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                                    <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                                @elseif($cart->is_rated == 3)
                                                    <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                                    <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                                    <span class="rating-item d-block">
                                                <i class="fa fa-star gold" aria-hidden="true"></i>
                                            </span>
                                                @elseif($cart->is_rated == 4)
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
                                                @elseif($cart->is_rated == 5)
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
                                        </td
                                    @endif
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="rate-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{trans('lang.rate_service')}}</h4>
                </div>
                <form action="{{route('rates.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="order_details_id" id="txt_order_details_id" required>
                    <div class="modal-body">
                        <div class="form-group">
                            <label
                                style="font-weight: 600;">{{trans('lang.choose_rate')}}</label>
                            <div class="radio-list">
                                <div class="product-review-stars"
                                     @if(app()->getLocale() == 'ar') style="direction: initial;" @endif>
                                    <input type="radio" id="star_5"
                                           name="rate"
                                           value="5" class="visuallyhidden"/>
                                    <label for="star_5"
                                    >★</label>

                                    <input type="radio" id="star_4"
                                           name="rate"
                                           value="4" class="visuallyhidden"/>
                                    <label for="star_4"
                                    >★</label>

                                    <input type="radio" id="star_3"
                                           name="rate"
                                           value="3" class="visuallyhidden"/>
                                    <label for="star_3"
                                    >★</label>

                                    <input type="radio" id="star_2"
                                           name="rate"
                                           value="2" class="visuallyhidden"/>
                                    <label for="star_2"
                                    >★</label>

                                    <input type="radio" id="star_1"
                                           name="rate"
                                           value="1" class="visuallyhidden"/>
                                    <label for="star_1"
                                    >★</label>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        {{--                <button type="button" class="btn btn-default"--}}
                        {{--                        data-dismiss="modal">{{trans('lang.close')}}</button>--}}
                        <button type="submit" id="btn_phone_check"
                                class="btn btn-primary">{{trans('lang.save')}}</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


@endsection
@section('js')
    <script>

        $(document).on('click', '#btn_rate', function () {

            var id = $(this).data('id')
                @if(Auth::guard('web')->check())
            var check = true;
                @else
            var check = false;
            @endif
            if (check) {
                id = $(this).data('id');
                $('#txt_order_details_id').val(id);

                $('#rate-modal').modal('toggle');
            } else {
                Swal.fire({
                    icon: 'error',
                    title: "{{__('lang.error')}}",
                    text: "{{ __('lang.PleaseLogin') }}",
                    type: "error",
                    timer: 5000,
                    confirmButtonText: '{{__('lang.Login')}}',
                }).then(function (result) {
                    window.location.href = "{{url('login')}}";
                });


            }

        });
    </script>
@endsection
