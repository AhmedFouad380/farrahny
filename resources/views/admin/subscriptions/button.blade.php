<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

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
                    <form id="" enctype="multipart/form-data" class="form" method="post" action="{{url('store-subscriptions')}}">
                    @csrf
                    <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7"
                             id="kt_modal_add_user_scroll" data-kt-scroll="true"
                             data-kt-scroll-activate="{default: false, lg: true}"
                             data-kt-scroll-max-height="auto"
                             data-kt-scroll-dependencies="#kt_modal_add_user_header"
                             data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                             data-kt-scroll-offset="300px">


                            <!--begin::Input group-->
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.ar_title')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name_ar"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="" required/>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.en_title')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" name="name_en"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="" required/>
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.subscription_price')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="price" min="0" step="any"
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="" />
                                <!--end::Input-->
                            </div>

                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.service_count')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="service_count" min="1" required
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="" />
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.service_image_count')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="service_image_count" min="1" required
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="" />
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-bold fs-6 mb-2">{{__('lang.days_count')}}</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" name="days_count" min="1" required
                                       class="form-control form-control-solid mb-3 mb-lg-0"
                                       placeholder="" value="" />
                                <!--end::Input-->
                            </div>
                            <div class="fv-row mb-7">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid">
                                    <label class="form-check-label" for="flexSwitchDefault2">{{__('lang.is_video')}}
                                        ??</label>
                                    <input class="form-check-input" name="is_video" type="hidden"
                                           value="0" id="flexSwitchDefault2"/>
                                    <input
                                        class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                        name="is_video" type="checkbox"
                                        value="1" id="flexSwitchDefault2" />
                                </div>
                            </div>
                            <div class="fv-row mb-7">
                                <div
                                    class="form-check form-switch form-check-custom form-check-solid">
                                    <label class="form-check-label" for="flexSwitchDefault">{{__('lang.active')}}
                                        ??</label>
                                    <input class="form-check-input" name="is_active" type="hidden"
                                           value="inactive" id="flexSwitchDefault"/>
                                    <input
                                        class="form-check-input form-control form-control-solid mb-3 mb-lg-0"
                                        name="is_active" type="checkbox"
                                        value="active" id="flexSwitchDefault" checked/>
                                </div>
                            </div>


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
                                <span class="indicator-progress">?????????? ????????????????
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


</script>
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
                        url: '{{url("delete-subscriptions")}}',
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
    $('#phone').change( function () {
        var val = $(this).val();

        $.ajax({
            type: "GET",
            url: "{{url('checkPhoneValidationUser')}}",
            data: {'phone': val },
            success: function (data) {
                if (data == true) {

                    var text = '???????? ?????? ???????????? ?????????? ????????????';
                    $('#error-validation').html(text)
                } else {
                    var text = '';
                    $('#error-validation').html(text)

                }
            }
        })
    })

    $("#event_id").on('click ,change',function () {
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
