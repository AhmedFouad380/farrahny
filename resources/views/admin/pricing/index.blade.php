@extends('layout.layout')

@section('title')
    {{__('lang.subscription_pricing')}}
@endsection
@section('css')
    <link href="{{asset('dashboard//plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <style>
        .bootstrap-datetimepicker-widget {
            display: contents !important;
        }


    </style>
@endsection

@section('header')
    <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
         data-kt-sticky-offset="{default: '200px', lg: '300px'}">
        <!--begin::Container-->
        <div class="container-xxl d-flex align-items-center justify-content-between" id="kt_header_container">
            <!--begin::Page title-->
            <div
                class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0"
                data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                <!--begin::Heading-->
                <h1 class="text-dark fw-bolder my-0 fs-2">{{__('lang.subscription_pricing')}} </h1>
                <!--end::Heading-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{url('/Dashboard')}}" class="text-muted">{{__('lang.Dashboard')}}</a>
                    </li>
                    <li class="breadcrumb-item text-muted">{{__('lang.subscription_pricing')}}</li>

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title=-->
            <!--begin::Wrapper-->
            <div class="d-flex d-lg-none align-items-center ms-n2 me-2">
                <!--begin::Aside mobile toggle-->
                <div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                    <span class="svg-icon svg-icon-2x">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
											<path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="black"/>
											<path opacity="0.3"
                                                  d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                  fill="black"/>
										</svg>
									</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Aside mobile toggle-->
                <!--begin::Logo-->
                <a href="../../demo7/dist/index.html" class="d-flex align-items-center">
                    <img alt="Logo" src="{{asset('assets/media/logos/logo-demo7.svg')}}" class="h-30px"/>
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Toolbar wrapper-->
            <div class="d-flex flex-shrink-0">
                <!--begin::Invite user-->
                @if(auth('provider')->user()->current_subscription)
                    @if(auth('provider')->user()->current_subscription->status == 'finished')
                        <a href="{{route('provider.subscription.renew')}}">
                            <div class="notice d-flex bg-light-warning rounded border-primary border border-dashed p-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: svg/files/upload.svg-->
                                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\Warning-2.svg--><svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path
                                    d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z"
                                    fill="#000000" opacity="0.3"/>
                                <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                            </g>
                        </svg><!--end::Svg Icon-->
                        </span>
                    </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1">
                                    <!--begin::Content-->
                                    <div class="fw-bold">
                                        <h4 class="text-gray-900 fw-bolder">{{trans('lang.end_subscription_date')}}
                                            : {{auth('provider')->user()->current_subscription->to_date}}</h4>
                                        <div class="fs-6 text-gray-700">{{trans('lang.your_subscription_ended')}}</div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                        </a>
                    @else
                        <div class="notice d-flex bg-light-success rounded border-primary border border-dashed p-6">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: svg/files/upload.svg-->
                            <span class="svg-icon svg-icon-2tx svg-icon-success me-4">
                        <span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Alarm-clock.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M7.14319965,19.3575259 C7.67122143,19.7615175 8.25104409,20.1012165 8.87097532,20.3649307 L7.89205065,22.0604779 C7.61590828,22.5387706 7.00431787,22.7026457 6.52602525,22.4265033 C6.04773263,22.150361 5.88385747,21.5387706 6.15999985,21.0604779 L7.14319965,19.3575259 Z M15.1367085,20.3616573 C15.756345,20.0972995 16.3358198,19.7569961 16.8634386,19.3524415 L17.8320512,21.0301278 C18.1081936,21.5084204 17.9443184,22.1200108 17.4660258,22.3961532 C16.9877332,22.6722956 16.3761428,22.5084204 16.1000004,22.0301278 L15.1367085,20.3616573 Z"
            fill="#000000"/>
        <path
            d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z M19.068812,3.25407593 L20.8181344,5.00339833 C21.4039208,5.58918477 21.4039208,6.53893224 20.8181344,7.12471868 C20.2323479,7.71050512 19.2826005,7.71050512 18.696814,7.12471868 L16.9474916,5.37539627 C16.3617052,4.78960984 16.3617052,3.83986237 16.9474916,3.25407593 C17.5332781,2.66828949 18.4830255,2.66828949 19.068812,3.25407593 Z M5.29862906,2.88207799 C5.8844155,2.29629155 6.83416297,2.29629155 7.41994941,2.88207799 C8.00573585,3.46786443 8.00573585,4.4176119 7.41994941,5.00339833 L5.29862906,7.12471868 C4.71284263,7.71050512 3.76309516,7.71050512 3.17730872,7.12471868 C2.59152228,6.53893224 2.59152228,5.58918477 3.17730872,5.00339833 L5.29862906,2.88207799 Z"
            fill="#000000" opacity="0.3"/>
        <path
            d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z"
            fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>
                    </span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-bold">
                                    <h4 class="text-gray-900 fw-bolder">{{trans('lang.end_subscription_date')}}
                                        : {{auth('provider')->user()->current_subscription->to_date}}</h4>
                                    {{--                                <div class="fs-6 text-gray-700">{{trans('lang.service_count')}}</div>--}}
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                    @endif
                @else
                    <a href="{{route('provider.subscription.renew')}}">
                        <div class="notice d-flex bg-light-warning rounded border-primary border border-dashed p-6">
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: svg/files/upload.svg-->
                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\Warning-2.svg--><svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path
                                    d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z"
                                    fill="#000000" opacity="0.3"/>
                                <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1"/>
                                <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1"/>
                            </g>
                        </svg><!--end::Svg Icon-->
                        </span>
                    </span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-bold">
                                    <div class="fs-6 text-gray-700">{{trans('lang.your_subscription_ended')}}</div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                    </a>
            @endif
            <!--end::Chat-->
            </div>
            <!--end::Toolbar wrapper-->
            <!--end::Toolbar wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Breadcrumb-->
@endsection

@section('content')

    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->


        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Container-->
            <div class="container-xxl" id="kt_content_container">
                <!--begin::Pricing card-->
                <div class="card" id="kt_pricing">
                    <!--begin::Card body-->
                    <div class="card-body p-lg-17">
                        <!--begin::Plans-->
                        <div class="d-flex flex-column">
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <h1 class="fs-2hx fw-bolder mb-5">{{trans('lang.c_y_p')}}</h1>

                            </div>
                            <!--end::Heading-->
                            <!--begin::Nav group-->

                            <!--end::Nav group-->
                            <!--begin::Row-->
                            <div class="row g-10">
                                @foreach($subscriptions as $row)
                                    <div class="col-xl-4">
                                        <div class="d-flex h-100 align-items-center">
                                            <!--begin::Option-->
                                            <div
                                                class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                                <!--begin::Heading-->
                                                <div class="mb-7 text-center">
                                                    <!--begin::Title-->
                                                    <h1 class="text-dark mb-5 fw-boldest">{{$row->name}}</h1>


                                                    <div class="text-center">
                                                        <span
                                                            class="mb-2 text-primary">{{trans('lang.currency')}}</span>
                                                        <span class="fs-3x fw-bolder text-primary"
                                                              data-kt-plan-price-month="39"
                                                              data-kt-plan-price-annual="399">{{$row->price}}</span>

                                                    </div>
                                                    <!--end::Price-->
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Features-->
                                                <div class="w-100 mb-10">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <span
                                                            class="fw-bold fs-6 text-gray-800 flex-grow-1 pe-3">{{trans('lang.days_count')}} {{$row->days_count}}</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20"
                                                                              height="20" rx="10" fill="black"></rect>
																		<path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="black"></path>
																	</svg>
																</span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <span
                                                            class="fw-bold fs-6 text-gray-800 flex-grow-1 pe-3">{{trans('lang.service_count')}} {{$row->service_count}}</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20"
                                                                              height="20" rx="10" fill="black"></rect>
																		<path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="black"></path>
																	</svg>
																</span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <span
                                                            class="fw-bold fs-6 text-gray-800 flex-grow-1 pe-3">{{trans('lang.service_image_count')}} {{$row->service_image_count}}</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20"
                                                                              height="20" rx="10" fill="black"></rect>
																		<path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="black"></path>
																	</svg>
																</span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-5">
                                                        <span
                                                            class="fw-bold fs-6 text-gray-800 flex-grow-1 pe-3">{{trans('lang.is_video')}}</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        @if($row->is_video)
                                                            <span class="svg-icon svg-icon-1 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20"
                                                                              height="20" rx="10" fill="black"></rect>
																		<path
                                                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                            fill="black"></path>
																	</svg>
																</span>
                                                        @else
                                                            <span class="svg-icon svg-icon-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                         height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.3" x="2" y="2" width="20"
                                                                              height="20" rx="10" fill="black"></rect>
																		<rect x="7" y="15.3137" width="12" height="2"
                                                                              rx="1" transform="rotate(-45 7 15.3137)"
                                                                              fill="black"></rect>
																		<rect x="8.41422" y="7" width="12" height="2"
                                                                              rx="1" transform="rotate(45 8.41422 7)"
                                                                              fill="black"></rect>
																	</svg>
																</span>
                                                    @endif
                                                    <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Features-->
                                                <!--begin::Select-->
                                                <a href="{{route('provider.subscription.renew.now',$row->id)}}"
                                                   class="btn btn-sm btn-primary">{{trans('lang.subscribe')}}</a>
                                                <!--end::Select-->
                                            </div>
                                            <!--end::Option-->
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Plans-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Pricing card-->
            </div>
            <!--end::Container-->
        </div>
    </div>


@endsection
@section('js')
    <?php
    $message = session()->get("message");
    ?>

    @if( session()->has("message"))
        @if( $message == "Success")
            <script>
                Swal.fire({
                    icon: 'success',
                    title: "{{__('lang.Success')}}",
                    text: "{{__('lang.Success_text')}}",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                });

            </script>
        @endif
    @endif
@endsection
