@extends('layout.layout')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
          integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
@endsection

@section('style')
    <style>
        @media (min-width: 992px) {
            .aside-me .content {
                padding-right: 30px;
            }
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
                <h1 class="text-dark fw-bolder my-0 fs-2">{{__('lang.Users_Edit')}} </h1>
                <!--end::Heading-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb fw-bold fs-base my-1">
                    <li class="breadcrumb-item text-muted">
                        <a href="{{url('/Dashboard')}}" class="text-muted">{{__('lang.Dashboard')}}</a>
                    </li>
                    <li class="breadcrumb-item text-muted">{{__('lang.Services')}}</li>
                    <li class="breadcrumb-item text-muted">{{__('lang.Users_Edit')}}</li>

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
        </div>
        <!--end::Container-->
    </div>
    <!--end::Breadcrumb-->
@endsection


@section('content')
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
        <!--begin::Post-->

        <div class="content flex-row-fluid" id="kt_content">

            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                     data-bs-target="#kt_account_profile_details" aria-expanded="true"
                     aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">{{__('lang.Users_Edit')}}</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_settings_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <form enctype="multipart/form-data" id="kt_account_profile_details_form"
                          action="{{url('update-Service')}}" class="form"
                          method="post">
                    @csrf
                    <!--begin::Card body-->
                        <div class="card-body border-top p-9">
                            <!--begin::Input group-->


                            <!--end::Input group-->

                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.image')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="file" name="image" data-default-file="{{$employee->image}}"
                                       class="form-control dropify  form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value=""
                                />
                                <!--end::Input-->
                            </div>
                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.ar_title')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="ar_title"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="{{$employee->ar_title}}" required/>
                                <!--end::Input-->
                            </div>
                            <input type="hidden" name="id" value="{{$employee->id}}" required/>

                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.en_title')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="en_title"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="{{$employee->en_title}}" required/>
                                <!--end::Input-->
                            </div>
                            {{--                            //Begin video type--}}
                            <div class="fv-row mb-12">
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.video_type')}}</label>
                                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9"
                                     data-kt-buttons="true"
                                     data-kt-buttons-target="[data-kt-button='true']">

                                    <!--begin::Col-->
                                    <div class="col-md-6" style="width: 229px;">
                                        <!--begin::Option-->
                                        <label
                                            class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6
                                            @if($employee->video_type == 'url') active @endif "
                                            data-kt-button="true">
                                            <!--begin::Radio-->
                                            <span
                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                <input class="form-check-input" type="radio" name="video_type"
                                                       id="video_type_url"

                                                       @if($employee->video_type == 'url') checked="checked" @endif
                                                       value="url">
                                            </span>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <span class="ms-5">
                                                <span
                                                    class="fs-4 fw-bolder text-gray-800 d-block">{{__('lang.url')}}</span>
                                            </span>
                                            <!--end::Info-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6" style="width: 229px;">
                                        <!--begin::Option-->
                                        <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6
                                        @if($employee->video_type == 'file') active @endif
                                            " style="width: 229px;"
                                               data-kt-button="true">
                                            <!--begin::Radio-->
                                            <span
                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                <input class="form-check-input" type="radio" name="video_type"
                                                       id="video_type_file"
                                                       @if($employee->video_type == 'file') checked="checked" @endif
                                                       value="file">
                                            </span>
                                            <!--end::Radio-->
                                            <!--begin::Info-->
                                            <span class="ms-5">
                                                <span
                                                    class="fs-4 fw-bolder text-gray-800 d-block">{{__('lang.file')}}</span>
                                            </span>
                                            <!--end::Info-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                            </div>
                            <div class="fv-row mb-7" id="video_url_container"
                                 @if($employee->video_type != 'url') style="display: none;" @endif >
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.video_url')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="url" name="video"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="{{old('video',$employee->video)}}"/>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7" id="video_file_container"
                                 @if($employee->video_type != 'file') style="display: none;" @endif>
                                <!--begin::Label-->
                                @if($employee->video_file)
                                    <video width="400" height="400" controls>
                                        <source src="{{$employee->video_file}}" type="video/mp4">
                                        <source src="{{$employee->video_file}}" type="video/ogg">
                                        Your browser does not support HTML video.
                                    </video>
                                @endif
                                <br>
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.video_file')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="file" name="video_file"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="{{old('video_file')}}"/>
                                <!--end::Input-->
                            </div>
                            {{--                            //End video type--}}
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.deposit')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="deposit"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="{{$employee->deposit}}" required/>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.price')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="price"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="{{$employee->price}}" required/>
                                <!--end::Input-->
                            </div>

                            <div class="fv-row mb-7">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid">
                                    <label class="form-check-label"
                                           for="flexSwitchDefault">{{__('lang.is_discount')}}
                                        ؟</label>
                                    <input class="form-check-input" @if($employee->is_discount == 'inactive') checked @endif name="is_discount" type="hidden"
                                           value="inactive" id="flexSwitchDefault"/>
                                    <input
                                        class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                        name="is_discount" @if($employee->is_discount == 'active') checked @endif type="checkbox"
                                        value="active" id="flexSwitchDefault" checked/>
                                </div>
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">{{__('lang.offer')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="discount"
                                           class="form-control form-control-solid mb-3 mb-lg-0"
                                           placeholder="" value="{{$employee->discount}}" required/>
                                    <!--end::Input-->
                                </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.event')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="event_id" id="event_id" class="form-control select2" required>
                                    @foreach(\App\Models\Event::all()  as $event)
                                        <option @if($employee->event_id == $event->id)  selected
                                                @endif value="{{$event->id}}">{{$event->title}}</option>
                                    @endforeach
                                </select>
                                <!--end::Input-->
                            </div>

                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.category')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="category_id" id="category_id" class="form-control select2" required>
                                    @foreach(\App\Models\Category::where('event_id',$employee->event_id)->get()  as $event)
                                        <option @if($employee->category_id == $event->id)  selected
                                                @endif value="{{$event->id}}">{{$event->title}}</option>
                                    @endforeach
                                </select>
                                <!--end::Input-->
                            </div>
                            @if(Auth::guard('admin')->check())

                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">{{__('lang.provider')}}</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <select name="provider_id" class="form-control select2" required>
                                        @foreach(\App\Models\Provider::all()  as $event)
                                            <option @if($employee->provider_id  == $event->id)  selected
                                                    @endif  value="{{$event->id}}">{{$event->name}}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->
                                </div>

                            @endif
                        <!--end::Input group--> <!--begin::Input group-->


                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.ar_description')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="ar_description" class="form-control" rows="5"
                                          required>{{$employee->ar_description}}</textarea>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.en_description')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="en_description" class="form-control" rows="5"
                                          required>{{$employee->en_description}}</textarea>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid">
                                    <label class="form-check-label" for="flexSwitchDefault">{{__('lang.active')}}
                                        ؟</label>
                                    <input class="form-check-input" name="is_active" type="hidden"
                                           value="inactive" id="flexSwitchDefault"/>
                                    <input
                                        class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                        name="is_active" type="checkbox"
                                        value="active" id="flexSwitchDefault"
                                        @if($employee->is_active == 'active') checked @endif />
                                </div>
                            </div>
                            <!--end::Input group-->
                            @if(Auth::guard('admin')->check())
                                    <div
                                        class="form-check form-switch form-check-custom form-check-solid">
                                        <label class="form-check-label"
                                               for="flexSwitchDefault">{{__('lang.is_banner')}}
                                            ؟</label>
                                        <input class="form-check-input" @if($employee->is_banner == 'inactive') checked @endif name="is_banner" type="hidden"
                                               value="inactive" id="flexSwitchDefault"/>
                                        <input
                                            class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                            name="is_banner" @if($employee->is_banner == 'active') checked @endif type="checkbox"
                                            value="active" id="flexSwitchDefault" checked/>
                                    </div>
                                <div class="fv-row mb-7">
                                    <div
                                        class="form-check form-switch form-check-custom form-check-solid">
                                        <label class="form-check-label"
                                               for="flexSwitchDefault">{{__('lang.is_recommend')}}
                                            ؟</label>
                                        <input class="form-check-input" name="is_recommend" type="hidden"
                                               value="inactive" id="flexSwitchDefault"/>
                                        <input
                                            class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                            name="is_recommend" type="checkbox"
                                            value="active" id="flexSwitchDefault"
                                            @if($employee->is_recommend == 'active') checked @endif />
                                    </div>
                                </div>
                                <div class="fv-row mb-7">
                                    <div
                                        class="form-check form-switch form-check-custom form-check-solid">
                                        <label class="form-check-label"
                                               for="flexSwitchDefault">{{__('lang.is_sponsored')}}
                                            ؟</label>
                                        <input class="form-check-input" name="is_sponsored" type="hidden"
                                               value="inactive" id="flexSwitchDefault"/>
                                        <input
                                            class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                            name="is_sponsored" type="checkbox"
                                            value="active" id="flexSwitchDefault"
                                            @if($employee->is_sponsored == 'active') checked @endif />
                                    </div>
                                </div>
                                <div class="fv-row mb-7">
                                    <div
                                        class="form-check form-switch form-check-custom form-check-solid">
                                        <label class="form-check-label"
                                               for="flexSwitchDefault">{{__('lang.requires_location')}}
                                            ؟</label>
                                        <input class="form-check-input" name="requires_location" type="hidden"
                                               value="0" id="flexSwitchDefault"/>
                                        <input
                                            class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                            name="requires_location" type="checkbox"
                                            value="1" id="flexSwitchDefault"
                                            @if($employee->requires_location == 1) checked @endif />
                                    </div>
                                </div>
                        @endif
                        <!--end::Input group-->


                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->

                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-primary"
                                    id="kt_account_profile_details_submit">{{__('lang.save')}}
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Basic info-->

        </div>
        <!--end::Post-->
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
            integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify();

        $('input[id="video_type_file"]').click(function () {
            if ($(this).prop("checked") == true) {
                $('#video_url_container').hide();
                $('#video_file_container').show();
            } else if ($(this).prop("checked") == false) {
                $('#video_url_container').show();
                $('#video_file_container').hide();
            }
        });

        $('input[id="video_type_url"]').click(function () {
            if ($(this).prop("checked") == true) {
                $('#video_url_container').show();
                $('#video_file_container').hide();
            } else if ($(this).prop("checked") == false) {
                $('#video_url_container').hide();
                $('#video_file_container').show();
            }
        });
    </script>
    <script>
        $('#phone').change(function () {
            var val = $(this).val();
            var id = {{$employee->id}};

            $.ajax({
                type: "GET",
                url: "{{url('checkPhoneValidationUser')}}",
                data: {'phone': val, 'id': id},
                success: function (data) {
                    if (data == true) {

                        var text = 'عفوا رقم الهاتف موجود بالفعل';
                        $('#error-validation').html(text)
                    } else {
                        var text = '';
                        $('#error-validation').html(text)

                    }
                }
            })
        })


        $("#event_id").on('click ,change', function () {
            var wahda = $(this).val();

            if (wahda != '') {
                $.get("{{ URL::to('/get-Category')}}" + '/' + wahda, function ($data) {
                    var outs = "";
                    $.each($data, function (title, id) {
                        console.log(title)
                        outs += '<option value="' + id + '">' + title + '</option>'
                    });
                    $('#category_id').html(outs);
                });
            }
        });
    </script>



@endsection

