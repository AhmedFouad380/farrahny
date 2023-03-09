<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>

<div class="dt-buttons flex-wrap">

    <!--end::Filter-->
    <!--begin::Add user-->
    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
            data-bs-target="#kt_modal_add_user">
        <i class="bi bi-plus-circle-fill fs-2x"></i>
    </button>

    <!--end::Add user-->
    <button id="delete" class="btn btn-light-danger me-3 font-weight-bolder">
        <i class="bi bi-trash-fill fs-2x"></i>
    </button>

    <!--begin::Modal - Add task-->
    <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_add_user_header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">{{__('lang.add')}}</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary"
                         data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                         viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                              transform="rotate(-45 6 17.3137)" fill="black"/>
                        <rect x="7.41422" y="6" width="16" height="2" rx="1"
                              transform="rotate(45 7.41422 6)" fill="black"/>
                    </svg>
                </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="" enctype="multipart/form-data" class="form" method="post"
                          action="{{url('store-Service')}}">
                    @csrf
                    <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7"
                             id="kt_modal_add_user_scroll" data-kt-scroll="true"
                             data-kt-scroll-activate="{default: false, lg: true}"
                             data-kt-scroll-max-height="auto"
                             data-kt-scroll-dependencies="#kt_modal_add_user_header"
                             data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                             data-kt-scroll-offset="300px">

                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.image')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="file" name="image" required
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
                                       placeholder="" value="" required/>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.en_title')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="en_title"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="" required/>
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
                                            class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 active"
                                            data-kt-button="true">
                                            <!--begin::Radio-->
                                            <span
                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                <input class="form-check-input" type="radio" name="video_type" id="video_type_url"
                                                       checked="checked"
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
                                            " style="width: 229px;"
                                               data-kt-button="true">
                                            <!--begin::Radio-->
                                            <span
                                                class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                <input class="form-check-input" type="radio" name="video_type" id="video_type_file"

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
                            <div class="fv-row mb-7" id="video_url_container">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.video_url')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="url" name="video"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="{{old('video')}}"/>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7" id="video_file_container" style="display: none;">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.video_file')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="file" name="video_file" required
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
                                       placeholder="" value="" required/>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.price')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="price"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="" required/>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.event')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="event_id" id="event_id" class="form-control select2" required>
                                    <option>{{__('lang.choose_event')}}</option>

                                    @foreach(\App\Models\Event::all()  as $event)
                                        <option value="{{$event->id}}">{{$event->title}}</option>
                                    @endforeach
                                </select>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7" id="category_cont" style="display: none;">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.category')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <select name="category_id" id="category_id" class="form-control select2" required>
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
                                            <option value="{{$event->id}}">{{$event->name}}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Input-->
                                </div>
                            @else
                                <input type="hidden" value="{{auth('provider')->user()->id}}" name="provider_id">
                            @endif
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.ar_description')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="ar_description" required class="form-control" rows="5"></textarea>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.en_description')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea name="en_description" required class="form-control" rows="5"></textarea>
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
                                        value="active" id="flexSwitchDefault" checked/>
                                </div>
                            </div>
                            <!--end::Input group-->
                            @if(Auth::guard('admin')->check())

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
                                            value="active" id="flexSwitchDefault" checked/>
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
                                            value="active" id="flexSwitchDefault" checked/>
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
                                            value="1" id="flexSwitchDefault" checked/>
                                    </div>
                                </div>
                        @endif
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3"
                                    data-bs-dismiss="modal">{{__('lang.close')}}
                            </button>
                            <button type="submit" class="btn btn-primary"
                                    data-kt-users-modal-action="submit">
                                <span class="indicator-label">{{__('lang.save')}}</span>
                                <span class="indicator-progress">برجاء الانتظار
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add task-->
</div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.dropify').dropify();
</script>
<script type="text/javascript">

    $("#delete").on("click", function () {
        var dataList = [];
        $("input:checkbox:checked").each(function (index) {
            dataList.push($(this).val())
        })

        if (dataList.length > 0) {
            Swal.fire({
                title: "{{__('lang.warrning')}} !",
                text: "",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f64e60",
                confirmButtonText: "{{__('lang.btn_yes')}}",
                cancelButtonText: "{{__('lang.btn_no')}}",
                closeOnConfirm: false,
                closeOnCancel: false
            }).then(function (result) {
                if (result.value) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '{{url("delete-Service")}}',
                        type: "get",
                        data: {'id': dataList, _token: CSRF_TOKEN},
                        dataType: "JSON",
                        success: function (data) {
                            if (data.message == "Success") {
                                $("input:checkbox:checked").parents("tr").remove();
                                Swal.fire("{{__('lang.Success')}}", "{{__('lang.Success_text')}}", "success");
                                // location.reload();
                            } else {
                                Swal.fire("{{__('lang.Sorry')}}", "{{__('lang.operation_failed')}}", "error");
                            }
                        },
                        fail: function (xhrerrorThrown) {
                            Swal.fire("{{__('lang.Sorry')}}", "{{__('lang.operation_failed')}}", "error");
                        }
                    });
                    // result.dismiss can be 'cancel', 'overlay',
                    // 'close', and 'timer'
                } else if (result.dismiss === 'cancel') {
                    Swal.fire("{{__('lang.Success')}}", "{{__('lang.Cancelled')}}", "error");
                }
            });
        }
    });
</script>

<script>
    $('input[id="video_type_file"]').click(function(){
        if($(this).prop("checked") == true){
            $('#video_url_container').hide();
            $('#video_file_container').show();
        }else if($(this).prop("checked") == false){
            $('#video_url_container').show();
            $('#video_file_container').hide();
        }
    });

    $('input[id="video_type_url"]').click(function(){
        if($(this).prop("checked") == true){
            $('#video_url_container').show();
            $('#video_file_container').hide();
        }else if($(this).prop("checked") == false){
            $('#video_url_container').hide();
            $('#video_file_container').show();
        }
    });
    $('#phone').change(function () {
        var val = $(this).val();

        $.ajax({
            type: "GET",
            url: "{{url('checkPhoneValidationUser')}}",
            data: {'phone': val},
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
    $('#event_id').change(function () {
        var event = $(this).val();
        $.ajax({
            url: "{{url('/')}}/get-Category/" + event,
            dataType: 'html',
            type: 'get',
            success: function (data) {
                $('#category_cont').show();
                // $('#lbl_subject_cont').show();
                $('#category_id').html(data);
            }
        });
    });
    {{--$("#event_id").on('click ,change', function () {--}}
    {{--    var wahda = $(this).val();--}}

    {{--    if (wahda != '') {--}}
    {{--        $.get("{{ URL::to('/get-Category')}}" + '/' + wahda, function ($data) {--}}
    {{--            var outs = "";--}}
    {{--            $.each($data, function (title, id) {--}}
    {{--                console.log(title)--}}
    {{--                outs += '<option value="' + id + '">' + title + '</option>'--}}
    {{--            });--}}
    {{--            $('#category_id').html(outs);--}}
    {{--        });--}}
    {{--    }--}}
    {{--});--}}
</script>
