<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
    <html lang="en" @if(Session('lang') =='ar')dir="rtl" @endif>
<!--begin::Head-->
<head><base href="../">
    <title>  {{App\Models\Setting::findOrfail(1)->title }} ||     @yield('title')
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="  {{App\Models\Setting::findOrfail(1)->title }} " />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{asset('assets/media/logos/favicon.png')}}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    @if(Session('lang')  ==  'ar')
        <link href="{{asset('assets/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css"/>
    @else
        <link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

@endif
@yield('css')
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" style="background-image: url()" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside aside-extended" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
            <!--begin::Primary-->
            <div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
                <!--begin::Logo-->
                <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-10" id="kt_aside_logo">
                    <a href="{{url('/')}}">
                        <img alt="Logo" src="{{asset('assets/media/logos/logo-demo7.svg')}}" class="h-35px" />
                    </a>
                </div>
                <!--end::Logo-->
                <!--begin::Nav-->
                <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
                    <!--begin::Wrapper-->
                    <div class="hover-scroll-y mb-10" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_nav" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="0px">
                        <!--begin::Nav-->
                        <ul class="nav flex-column">
                            <!--begin::Nav item-->
                            <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Projects">
                                <!--begin::Nav link-->
                                <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-bs-toggle="tab" href="#kt_aside_nav_tab_projects">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                    <span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Nav link-->
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right" data-bs-dismiss="click" title="Menu">
                                <!--begin::Nav link-->
                                <a class="nav-link btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light active" data-bs-toggle="tab" href="#kt_aside_nav_tab_menu">
                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                    <span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
													<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Nav link-->
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                                                    <!--end::Nav item-->
                        </ul>
                        <!--end::Tabs-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Nav-->
                <!--begin::Footer-->
                <div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">
                    <!--begin::Quick links-->
                    <!--end::Quick links-->
                    <!--begin::Activities-->
                    <div class="d-flex align-items-center mb-3">
                        <!--begin::Drawer toggle-->
                        <a @if(Session('lang') == 'en') href="{{url('lang/ar')}}" @else href="{{url('lang/en')}}" @endif class="btn btn-icon btn-active-color-primary btn-color-gray-400 btn-active-light" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="{{__('lang.language')}}" id="kt_activities_toggle">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-lg-1">
                                <i class="bi bi-translate"></i>
									</span>
                            <!--end::Svg Icon-->
                        </a>
                        <!--end::drawer toggle-->
                    </div>
                    <!--end::Activities-->
                    <!--begin::Notifications-->
                    <!--end::Notifications-->
                    <!--begin::User-->
                    <div class="d-flex align-items-center mb-10" id="kt_header_user_menu_toggle">
                        <!--begin::Menu wrapper-->
                        <div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="User profile">
                            <img src="assets/media/avatars/150-26.jpg" alt="image" />
                        </div>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="assets/media/avatars/150-26.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">
                                            @if(Auth::guard('admin')->check())
                                                {{Auth::guard('admin')->user()->name}}
                                            @elseif(Auth::guard('provider')->check())
                                                {{Auth::guard('provider')->user()->name}}
                                            @endif

                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->

                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="{{url('Setting')}}" class="menu-link px-5">
                                        <span class="menu-text">{{__('Setting')}}</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->

                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="{{url('logout')}}" class="menu-link px-5">Sign Out</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <div class="menu-content px-5">
                                        <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo7/dist/index.html" />
                                            <span class="pulse-ring ms-n1"></span>
                                            <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                                        </label>
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Menu-->
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Primary-->
            <!--begin::Secondary-->
            <div class="aside-secondary d-flex flex-row-fluid">
                <!--begin::Workspace-->
                <div class="aside-workspace my-5 p-5" id="kt_aside_wordspace">
                    <div class="d-flex h-100 flex-column">
                        <!--begin::Wrapper-->
                        <div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace" data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px">
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_aside_nav_tab_projects" role="tabpanel">
                                    <!--begin::Wrapper-->
                                    <div class="m-0">
                                        <!--begin::Toolbar-->
                                        <div class="d-flex mb-10">
                                            <!--begin::Search-->
                                            <div id="kt_header_search" class="d-flex align-items-center w-lg-400px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
                                                <!--begin::Form-->
                                                <form data-kt-search-element="form" class="w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                                    <input type="hidden" />
                                                    <!--end::Hidden input-->
                                                    <!--begin::Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-5">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
																	<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                    <!--end::Icon-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid ps-15" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                                                    <!--end::Input-->
                                                    <!--begin::Spinner-->
                                                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
																<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
															</span>
                                                    <!--end::Spinner-->
                                                    <!--begin::Reset-->
                                                    <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																		<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
																	</svg>
																</span>
                                                        <!--end::Svg Icon-->
															</span>
                                                    <!--end::Reset-->
                                                </form>
                                                <!--end::Form-->
                                                <!--begin::Menu-->
                                                <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 px-7 overflow-hidden">
                                                    <!--begin::Wrapper-->
                                                    <div data-kt-search-element="wrapper">
                                                        <!--begin::Recently viewed-->
                                                        <div data-kt-search-element="results" class="d-none">
                                                            <!--begin::Items-->
                                                            <div class="scroll-y mh-200px mh-lg-350px">
                                                                <!--begin::Category title-->
                                                                <h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
                                                                <!--end::Category title-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
                                                                        <img src="assets/media/avatars/150-1.jpg" alt="" />
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column justify-content-start fw-bold">
                                                                        <span class="fs-6 fw-bold">Karina Clark</span>
                                                                        <span class="fs-7 fw-bold text-muted">Marketing Manager</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
                                                                        <img src="assets/media/avatars/150-3.jpg" alt="" />
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column justify-content-start fw-bold">
                                                                        <span class="fs-6 fw-bold">Olivia Bold</span>
                                                                        <span class="fs-7 fw-bold text-muted">Software Engineer</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
                                                                        <img src="assets/media/avatars/150-8.jpg" alt="" />
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column justify-content-start fw-bold">
                                                                        <span class="fs-6 fw-bold">Ana Clark</span>
                                                                        <span class="fs-7 fw-bold text-muted">UI/UX Designer</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
                                                                        <img src="assets/media/avatars/150-11.jpg" alt="" />
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column justify-content-start fw-bold">
                                                                        <span class="fs-6 fw-bold">Nick Pitola</span>
                                                                        <span class="fs-7 fw-bold text-muted">Art Director</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
                                                                        <img src="assets/media/avatars/150-12.jpg" alt="" />
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column justify-content-start fw-bold">
                                                                        <span class="fs-6 fw-bold">Edward Kulnic</span>
                                                                        <span class="fs-7 fw-bold text-muted">System Administrator</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                                <!--begin::Category title-->
                                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
                                                                <!--end::Category title-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column justify-content-start fw-bold">
                                                                        <span class="fs-6 fw-bold">Company Rbranding</span>
                                                                        <span class="fs-7 fw-bold text-muted">UI Design</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column justify-content-start fw-bold">
                                                                        <span class="fs-6 fw-bold">Company Re-branding</span>
                                                                        <span class="fs-7 fw-bold text-muted">Web Development</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column justify-content-start fw-bold">
                                                                        <span class="fs-6 fw-bold">Business Analytics App</span>
                                                                        <span class="fs-7 fw-bold text-muted">Administration</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column justify-content-start fw-bold">
                                                                        <span class="fs-6 fw-bold">EcoLeaf App Launch</span>
                                                                        <span class="fs-7 fw-bold text-muted">Marketing</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column justify-content-start fw-bold">
                                                                        <span class="fs-6 fw-bold">Tower Group Website</span>
                                                                        <span class="fs-7 fw-bold text-muted">Google Adwords</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                                <!--begin::Category title-->
                                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
                                                                <!--end::Category title-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
																					<span class="svg-icon svg-icon-2 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="black" />
																							<rect x="7" y="17" width="6" height="2" rx="1" fill="black" />
																							<rect x="7" y="12" width="10" height="2" rx="1" fill="black" />
																							<rect x="7" y="7" width="6" height="2" rx="1" fill="black" />
																							<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
																						</svg>
																					</span>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column">
                                                                        <span class="fs-6 fw-bold">Si-Fi Project by AU Themes</span>
                                                                        <span class="fs-7 fw-bold text-muted">#45670</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
																					<span class="svg-icon svg-icon-2 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
																							<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
																							<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
																							<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
																						</svg>
																					</span>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column">
                                                                        <span class="fs-6 fw-bold">Shopix Mobile App Planning</span>
                                                                        <span class="fs-7 fw-bold text-muted">#45690</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																					<span class="svg-icon svg-icon-2 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
																							<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
																							<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
																						</svg>
																					</span>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column">
                                                                        <span class="fs-6 fw-bold">Finance Monitoring SAAS Discussion</span>
                                                                        <span class="fs-7 fw-bold text-muted">#21090</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																					<span class="svg-icon svg-icon-2 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
																							<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
																						</svg>
																					</span>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column">
                                                                        <span class="fs-6 fw-bold">Dashboard Analitics Launch</span>
                                                                        <span class="fs-7 fw-bold text-muted">#34560</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </a>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Recently viewed-->
                                                        <!--begin::Recently viewed-->
                                                        <div class="mb-4" data-kt-search-element="main">
                                                            <!--begin::Heading-->
                                                            <div class="d-flex flex-stack fw-bold mb-5">
                                                                <!--begin::Label-->
                                                                <span class="text-muted fs-6 me-2">Recently Searched</span>
                                                                <!--end::Label-->
                                                                <!--begin::Toolbar-->
                                                                <div class="d-flex" data-kt-search-element="toolbar">
                                                                    <!--begin::Preferences toggle-->
                                                                    <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
                                                                        <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                                                        <span class="svg-icon svg-icon-1">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
																						<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
																					</svg>
																				</span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Preferences toggle-->
                                                                    <!--begin::Advanced search toggle-->
                                                                    <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                                        <span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																					</svg>
																				</span>
                                                                        <!--end::Svg Icon-->
                                                                    </div>
                                                                    <!--end::Advanced search toggle-->
                                                                </div>
                                                                <!--end::Toolbar-->
                                                            </div>
                                                            <!--end::Heading-->
                                                            <!--begin::Items-->
                                                            <div class="scroll-y mh-200px mh-lg-325px">
                                                                <!--begin::Item-->
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg-->
																					<span class="svg-icon svg-icon-2 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<path d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z" fill="black" />
																							<path opacity="0.3" d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z" fill="black" />
																							<path opacity="0.3" d="M15 17H9V20H15V17Z" fill="black" />
																						</svg>
																					</span>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column">
                                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">BoomApp by Keenthemes</a>
                                                                        <span class="fs-7 text-muted fw-bold">#45789</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
																					<span class="svg-icon svg-icon-2 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="black" />
																							<path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="black" />
																						</svg>
																					</span>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column">
                                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"Kept API Project Meeting</a>
                                                                        <span class="fs-7 text-muted fw-bold">#84050</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
																					<span class="svg-icon svg-icon-2 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="black" />
																							<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="black" />
																						</svg>
																					</span>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column">
                                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"KPI Monitoring App Launch</a>
                                                                        <span class="fs-7 text-muted fw-bold">#84250</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
																					<span class="svg-icon svg-icon-2 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="black" />
																							<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="black" />
																						</svg>
																					</span>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column">
                                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Reference FAQ</a>
                                                                        <span class="fs-7 text-muted fw-bold">#67945</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
																					<span class="svg-icon svg-icon-2 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black" />
																							<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black" />
																						</svg>
																					</span>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column">
                                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"FitPro App Development</a>
                                                                        <span class="fs-7 text-muted fw-bold">#84250</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
																					<span class="svg-icon svg-icon-2 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="black" />
																							<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="black" />
																						</svg>
																					</span>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column">
                                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Shopix Mobile App</a>
                                                                        <span class="fs-7 text-muted fw-bold">#45690</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                                <!--end::Item-->
                                                                <!--begin::Item-->
                                                                <div class="d-flex align-items-center mb-5">
                                                                    <!--begin::Symbol-->
                                                                    <div class="symbol symbol-40px me-4">
																				<span class="symbol-label bg-light">
																					<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
																					<span class="svg-icon svg-icon-2 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																							<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="black" />
																							<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="black" />
																						</svg>
																					</span>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                                    </div>
                                                                    <!--end::Symbol-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column">
                                                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"Landing UI Design" Launch</a>
                                                                        <span class="fs-7 text-muted fw-bold">#24005</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Recently viewed-->
                                                        <!--begin::Empty-->
                                                        <div data-kt-search-element="empty" class="text-center d-none">
                                                            <!--begin::Icon-->
                                                            <div class="pt-10 pb-10">
                                                                <!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
                                                                <span class="svg-icon svg-icon-4x opacity-50">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black" />
																				<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black" />
																				<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="black" />
																				<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="black" />
																			</svg>
																		</span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Message-->
                                                            <div class="pb-15 fw-bold">
                                                                <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                                                <div class="text-muted fs-7">Please try again with a different query</div>
                                                            </div>
                                                            <!--end::Message-->
                                                        </div>
                                                        <!--end::Empty-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Preferences-->
                                                    <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                                        <!--begin::Heading-->
                                                        <h3 class="fw-bold text-dark mb-7">Advanced Search</h3>
                                                        <!--end::Heading-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <!--begin::Radio group-->
                                                            <div class="nav-group nav-group-fluid">
                                                                <!--begin::Option-->
                                                                <label>
                                                                    <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                                                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                                                </label>
                                                                <!--end::Option-->
                                                                <!--begin::Option-->
                                                                <label>
                                                                    <input type="radio" class="btn-check" name="type" value="users" />
                                                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                                                </label>
                                                                <!--end::Option-->
                                                                <!--begin::Option-->
                                                                <label>
                                                                    <input type="radio" class="btn-check" name="type" value="orders" />
                                                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                                                </label>
                                                                <!--end::Option-->
                                                                <!--begin::Option-->
                                                                <label>
                                                                    <input type="radio" class="btn-check" name="type" value="projects" />
                                                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end::Radio group-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <!--begin::Radio group-->
                                                            <div class="nav-group nav-group-fluid">
                                                                <!--begin::Option-->
                                                                <label>
                                                                    <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                                                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
                                                                </label>
                                                                <!--end::Option-->
                                                                <!--begin::Option-->
                                                                <label>
                                                                    <input type="radio" class="btn-check" name="attachment" value="any" />
                                                                    <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                                                </label>
                                                                <!--end::Option-->
                                                            </div>
                                                            <!--end::Radio group-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-5">
                                                            <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                                                <option value="next">Within the next</option>
                                                                <option value="last">Within the last</option>
                                                                <option value="between">Between</option>
                                                                <option value="on">On</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="row mb-8">
                                                            <!--begin::Col-->
                                                            <div class="col-6">
                                                                <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col-6">
                                                                <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                                                                    <option value="days">Days</option>
                                                                    <option value="weeks">Weeks</option>
                                                                    <option value="months">Months</option>
                                                                    <option value="years">Years</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <div class="d-flex justify-content-end">
                                                            <button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                                                            <a href="../../demo7/dist/pages/search/horizontal.html" class="btn btn-sm fw-bolder btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </form>
                                                    <!--end::Preferences-->
                                                    <!--begin::Preferences-->
                                                    <form data-kt-search-element="preferences" class="pt-1 d-none">
                                                        <!--begin::Heading-->
                                                        <h3 class="fw-bold text-dark mb-7">Search Preferences</h3>
                                                        <!--end::Heading-->
                                                        <!--begin::Input group-->
                                                        <div class="pb-4 border-bottom">
                                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                                <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Projects</span>
                                                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                                            </label>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="py-4 border-bottom">
                                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                                <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Targets</span>
                                                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                                            </label>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="py-4 border-bottom">
                                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                                <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Affiliate Programs</span>
                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                            </label>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="py-4 border-bottom">
                                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                                <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Referrals</span>
                                                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                                            </label>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="py-4 border-bottom">
                                                            <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                                <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Users</span>
                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                            </label>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <div class="d-flex justify-content-end pt-7">
                                                            <button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
                                                            <button type="submit" class="btn btn-sm fw-bolder btn-primary">Save Changes</button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </form>
                                                    <!--end::Preferences-->
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Search-->
                                            <!--begin::Filter-->
                                            <div class="flex-shrink-0 ms-2">
                                                <!--begin::Menu toggle-->
                                                <button type="button" class="btn btn-icon btn-bg-light btn-active-icon-primary btn-color-gray-400" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                                                    <span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                                <!--end::Menu toggle-->
                                                <!--begin::Menu-->
                                                <!--begin::Menu 1-->
                                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61bc5232062c0">
                                                    <!--begin::Header-->
                                                    <div class="px-7 py-5">
                                                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator border-gray-200"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Form-->
                                                    <div class="px-7 py-5">
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-bold">Status:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <div>
                                                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61bc5232062c0" data-allow-clear="true">
                                                                    <option></option>
                                                                    <option value="1">Approved</option>
                                                                    <option value="2">Pending</option>
                                                                    <option value="2">In Process</option>
                                                                    <option value="2">Rejected</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-bold">Member Type:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Options-->
                                                            <div class="d-flex">
                                                                <!--begin::Options-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                                    <span class="form-check-label">Author</span>
                                                                </label>
                                                                <!--end::Options-->
                                                                <!--begin::Options-->
                                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                    <span class="form-check-label">Customer</span>
                                                                </label>
                                                                <!--end::Options-->
                                                            </div>
                                                            <!--end::Options-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="mb-10">
                                                            <!--begin::Label-->
                                                            <label class="form-label fw-bold">Notifications:</label>
                                                            <!--end::Label-->
                                                            <!--begin::Switch-->
                                                            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                                <label class="form-check-label">Enabled</label>
                                                            </div>
                                                            <!--end::Switch-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Actions-->
                                                        <div class="d-flex justify-content-end">
                                                            <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                            <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                        </div>
                                                        <!--end::Actions-->
                                                    </div>
                                                    <!--end::Form-->
                                                </div>
                                                <!--end::Menu 1-->
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Filter-->
                                        </div>
                                        <!--end::Toolbar-->
                                        <!--begin::Projects-->
                                        <div class="m-0">
                                            <!--begin::Heading-->
                                            <h1 class="text-gray-800 fw-bold mb-6 mx-5">Projects</h1>
                                            <!--end::Heading-->
                                            <!--begin::Items-->
                                            <div class="mb-10">
                                                <!--begin::Item-->
                                                <a href="../../demo7/dist/apps/projects/project.html" class="custom-list d-flex align-items-center px-5 py-4">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-5">
																<span class="symbol-label">
																	<img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <!--begin::Title-->
                                                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Briviba SaaS</h5>
                                                        <!--end::Title-->
                                                        <!--begin::Link-->
                                                        <span class="text-gray-400 fw-bold">By James</span>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--begin::Description-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="../../demo7/dist/apps/projects/project.html" class="custom-list d-flex align-items-center px-5 py-4">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-5">
																<span class="symbol-label">
																	<img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <!--begin::Title-->
                                                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Vine Quick Reports</h5>
                                                        <!--end::Title-->
                                                        <!--begin::Link-->
                                                        <span class="text-gray-400 fw-bold">By Andres</span>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--begin::Description-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="../../demo7/dist/apps/projects/project.html" class="custom-list d-flex align-items-center px-5 py-4">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-5">
																<span class="symbol-label">
																	<img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <!--begin::Title-->
                                                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">KC Account CRM</h5>
                                                        <!--end::Title-->
                                                        <!--begin::Link-->
                                                        <span class="text-gray-400 fw-bold">By Keenthemes</span>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--begin::Description-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="../../demo7/dist/apps/projects/project.html" class="custom-list d-flex align-items-center px-5 py-4">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-5">
																<span class="symbol-label">
																	<img src="assets/media/svg/brand-logos/balloon.svg" class="h-50 align-self-center" alt="" />
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <!--begin::Title-->
                                                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Baloon SaaS</h5>
                                                        <!--end::Title-->
                                                        <!--begin::Link-->
                                                        <span class="text-gray-400 fw-bold">By SIA Team</span>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--begin::Description-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="../../demo7/dist/apps/projects/project.html" class="custom-list d-flex align-items-center px-5 py-4">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-5">
																<span class="symbol-label">
																	<img src="assets/media/svg/brand-logos/infography.svg" class="h-50 align-self-center" alt="" />
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <!--begin::Title-->
                                                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Most Cloudy UMC</h5>
                                                        <!--end::Title-->
                                                        <!--begin::Link-->
                                                        <span class="text-gray-400 fw-bold">By Andrei</span>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--begin::Description-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="../../demo7/dist/apps/projects/project.html" class="custom-list d-flex align-items-center px-5 py-4">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-5">
																<span class="symbol-label">
																	<img src="assets/media/svg/brand-logos/disqus.svg" class="h-50 align-self-center" alt="" />
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <!--begin::Title-->
                                                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Disqus Forum</h5>
                                                        <!--end::Title-->
                                                        <!--begin::Link-->
                                                        <span class="text-gray-400 fw-bold">By Disqus Inc.</span>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--begin::Description-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <a href="../../demo7/dist/apps/projects/project.html" class="custom-list d-flex align-items-center px-5 py-4">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-5">
																<span class="symbol-label">
																	<img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
																</span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <!--begin::Title-->
                                                        <h5 class="custom-list-title fw-bold text-gray-800 mb-1">Proove Quick CRM</h5>
                                                        <!--end::Title-->
                                                        <!--begin::Link-->
                                                        <span class="text-gray-400 fw-bold">By Proove Limited</span>
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--begin::Description-->
                                                </a>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Projects-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade active show" id="kt_aside_nav_tab_menu" role="tabpanel">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
                                        <div id="kt_aside_menu_wrapper" class="menu-fit">
                                            @if(Auth::guard('provider')->check())
                                                <div class="menu-item">
                                                    <div class="menu-content pb-2">
                                                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{__('lang.Dashboard')}}</span>
                                                    </div>
                                                </div>

                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{url('/ProviderDashboard')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                        <span class="menu-title">{{__('lang.Dashboard')}}</span>
                                                    </a>
                                                </div>


                                                <div class="menu-item">
                                                    <div class="menu-content pt-8 pb-2">
                                                        <span class="menu-section text-muted text-uppercase fs-8 ls-1">Pages</span>
                                                    </div>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{url('Services_setting')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                        <span class="menu-title">{{__('lang.Services')}}</span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{url('')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                        <span class="menu-title">{{__('lang.Orders')}}</span>
                                                    </a>
                                                </div>
                                            @elseif(Auth::guard('admin')->check())
                                            <div class="menu-item">
                                                <div class="menu-content pb-2">
                                                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">{{__('lang.Dashboard')}}</span>
                                                </div>
                                            </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="{{url('/Dashboard')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                        <span class="menu-title">{{__('lang.Dashboard')}}</span>
                                                    </a>
                                                </div>


                                            <div class="menu-item">
                                                <div class="menu-content pt-8 pb-2">
                                                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Pages</span>
                                                </div>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{url('/Admin_setting')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                    <span class="menu-title">{{__('lang.Admins')}}</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{url('/User_setting')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                    <span class="menu-title">{{__('lang.Users')}}</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{url('/Providers_setting')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                    <span class="menu-title">{{__('lang.Providers')}}</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{url('/Slider_setting')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                    <span class="menu-title">{{__('lang.Slider')}}</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{url('Events_setting')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                    <span class="menu-title">{{__('lang.Events')}}</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{url('Categories_setting')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                    <span class="menu-title">{{__('lang.Categories')}}</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{url('Services_setting')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                    <span class="menu-title">{{__('lang.Services')}}</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{url('Pages_setting')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                    <span class="menu-title">{{__('lang.Pages')}}</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{url('ClientImages_setting')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                    <span class="menu-title">{{__('lang.ClientImages')}}</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="{{url('General_Setting')}}">
															<span class="menu-icon">
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                    <span class="menu-title">{{__('lang.General_Setting')}}</span>
                                                </a>
                                            </div>
                                                @endif


                                        </div>
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_aside_nav_tab_subscription" role="tabpanel">
                                    <!--begin::Subscription-->
                                    <div class="mx-5">
                                        <!--begin::Container-->
                                        <div class="text-center pt-10 mb-20">
                                            <!--begin::Title-->
                                            <h2 class="fs-2 fw-bolder mb-7">My Subscription</h2>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <p class="text-gray-400 fs-4 fw-bold mb-10">There are no customers added yet.
                                                <br />Kickstart your CRM by adding a your first customer</p>
                                            <!--end::Description-->
                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Container-->
                                        <!--begin::Illustration-->
                                        <div class="text-center px-4">
                                            <img src="assets/media/illustrations/sigma-1/18.png" alt="" class="mw-100 mh-300px" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Subscription-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_aside_nav_tab_tasks" role="tabpanel">
                                    <!--begin::Tasks-->
                                    <div class="mx-5">
                                        <!--begin::Header-->
                                        <h3 class="fw-bolder text-dark mb-10 mx-0">Tasks Overview</h3>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="mb-12">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50px me-5">
															<span class="symbol-label bg-light-success">
																<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
																<span class="svg-icon svg-icon-2x svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																		<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column">
                                                    <a href="../../demo7/dist/pages/profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Project Briefing</a>
                                                    <span class="text-muted fw-bold">Project Manager</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50px me-5">
															<span class="symbol-label bg-light-warning">
																<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																<span class="svg-icon svg-icon-2x svg-icon-warning">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
																		<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column">
                                                    <a href="../../demo7/dist/pages/profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Concept Design</a>
                                                    <span class="text-muted fw-bold">Art Director</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50px me-5">
															<span class="symbol-label bg-light-primary">
																<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																<span class="svg-icon svg-icon-2x svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
																		<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
																		<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column">
                                                    <a href="../../demo7/dist/pages/profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Functional Logics</a>
                                                    <span class="text-muted fw-bold">Lead Developer</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50px me-5">
															<span class="symbol-label bg-light-danger">
																<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
																<span class="svg-icon svg-icon-2x svg-icon-danger">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="black" />
																		<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column">
                                                    <a href="../../demo7/dist/pages/profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Development</a>
                                                    <span class="text-muted fw-bold">DevOps</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50px me-5">
															<span class="symbol-label bg-light-info">
																<!--begin::Svg Icon | path: icons/duotune/general/gen049.svg-->
																<span class="svg-icon svg-icon-2x svg-icon-info">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black" />
																		<path d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z" fill="black" />
																		<path d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column">
                                                    <a href="../../demo7/dist/pages/profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Testing</a>
                                                    <span class="text-muted fw-bold">QA Managers</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50px me-5">
															<span class="symbol-label bg-light-success">
																<!--SVG file not found: icons/duotune/finance/fin006.svgFile-Upload.svg-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column">
                                                    <a href="../../demo7/dist/pages/profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">HTML, CSS Coding</a>
                                                    <span class="text-muted fw-bold">Art Director</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-50px me-5">
															<span class="symbol-label bg-light-danger">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra008.svg-->
																<span class="svg-icon svg-icon-2x svg-icon-danger">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M13 10.9128V3.01281C13 2.41281 13.5 1.91281 14.1 2.01281C16.1 2.21281 17.9 3.11284 19.3 4.61284C20.7 6.01284 21.6 7.91285 21.9 9.81285C22 10.4129 21.5 10.9128 20.9 10.9128H13Z" fill="black" />
																		<path opacity="0.3" d="M13 12.9128V20.8129C13 21.4129 13.5 21.9129 14.1 21.8129C16.1 21.6129 17.9 20.7128 19.3 19.2128C20.7 17.8128 21.6 15.9128 21.9 14.0128C22 13.4128 21.5 12.9128 20.9 12.9128H13Z" fill="black" />
																		<path opacity="0.3" d="M11 19.8129C11 20.4129 10.5 20.9129 9.89999 20.8129C5.49999 20.2129 2 16.5128 2 11.9128C2 7.31283 5.39999 3.51281 9.89999 3.01281C10.5 2.91281 11 3.41281 11 4.01281V19.8129Z" fill="black" />
																	</svg>
																</span>
                                                                <!--end::Svg Icon-->
															</span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column">
                                                    <a href="../../demo7/dist/pages/profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">ReactJS Developer</a>
                                                    <span class="text-muted fw-bold">Web, UI/UX Design</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tasks-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_aside_nav_tab_notifications" role="tabpanel">
                                    <!--begin::Notifications-->
                                    <div class="mx-5">
                                        <!--begin::Header-->
                                        <h3 class="fw-bolder text-dark mb-10 mx-0">Notifications</h3>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="mb-12">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
                                                <!--begin::Icon-->
                                                <span class="svg-icon svg-icon-warning me-5">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-warning">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																	<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <div class="flex-grow-1 me-2">
                                                    <a href="../../demo7/dist/widgets/lists.html" class="fw-bolder text-gray-800 text-hover-primary fs-6">Group lunch celebration</a>
                                                    <span class="text-muted fw-bold d-block">Due in 29 Days</span>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Lable-->
                                                <span class="fw-bolder text-warning py-1">+28%</span>
                                                <!--end::Lable-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
                                                <!--begin::Icon-->
                                                <span class="svg-icon svg-icon-success me-5">
															<!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-success">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16 14C16.4 13.6 16.4 12.9 16 12.5C15.6 12.1 15.4 12.6 15 13L11 16L9 15C8.6 14.6 8.4 14.1 8 14.5C7.6 14.9 8.1 15.6 8.5 16L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="black" />
																	<path d="M10.4343 15.4343L9.25 14.25C8.83579 13.8358 8.16421 13.8358 7.75 14.25C7.33579 14.6642 7.33579 15.3358 7.75 15.75L10.2929 18.2929C10.6834 18.6834 11.3166 18.6834 11.7071 18.2929L16.25 13.75C16.6642 13.3358 16.6642 12.6642 16.25 12.25C15.8358 11.8358 15.1642 11.8358 14.75 12.25L11.5657 15.4343C11.2533 15.7467 10.7467 15.7467 10.4343 15.4343Z" fill="black" />
																	<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <div class="flex-grow-1 me-2">
                                                    <a href="../../demo7/dist/widgets/lists.html" class="fw-bolder text-gray-800 text-hover-primary fs-6">Navigation optimization</a>
                                                    <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Lable-->
                                                <span class="fw-bolder text-success py-1">+50%</span>
                                                <!--end::Lable-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
                                                <!--begin::Icon-->
                                                <span class="svg-icon svg-icon-danger me-5">
															<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-danger">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
																	<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
																	<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <div class="flex-grow-1 me-2">
                                                    <a href="../../demo7/dist/widgets/lists.html" class="fw-bolder text-gray-800 text-hover-primary fs-6">Humbert Bresnen</a>
                                                    <span class="text-muted fw-bold d-block">Due in 5 Days</span>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Lable-->
                                                <span class="fw-bolder text-danger py-1">-27%</span>
                                                <!--end::Lable-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center bg-light-info rounded p-5 mb-7">
                                                <!--begin::Icon-->
                                                <span class="svg-icon svg-icon-info me-5">
															<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-info">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
																	<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <div class="flex-grow-1 me-2">
                                                    <a href="../../demo7/dist/widgets/lists.html" class="fw-bolder text-gray-800 text-hover-primary fs-6">Air B &amp; B - Real Estate</a>
                                                    <span class="text-muted fw-bold d-block">Due in 8 Days</span>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Lable-->
                                                <span class="fw-bolder text-info py-1">+21%</span>
                                                <!--end::Lable-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center bg-light-primary rounded p-5 mb-7">
                                                <!--begin::Icon-->
                                                <span class="svg-icon svg-icon-primary me-5">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr031.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" viewBox="0 0 23 24" fill="none">
																	<path d="M21 13V13.5C21 16 19 18 16.5 18H5.6V16H16.5C17.9 16 19 14.9 19 13.5V13C19 12.4 19.4 12 20 12C20.6 12 21 12.4 21 13ZM18.4 6H7.5C5 6 3 8 3 10.5V11C3 11.6 3.4 12 4 12C4.6 12 5 11.6 5 11V10.5C5 9.1 6.1 8 7.5 8H18.4V6Z" fill="black" />
																	<path opacity="0.3" d="M21.7 6.29999C22.1 6.69999 22.1 7.30001 21.7 7.70001L18.4 11V3L21.7 6.29999ZM2.3 16.3C1.9 16.7 1.9 17.3 2.3 17.7L5.6 21V13L2.3 16.3Z" fill="black" />
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <div class="flex-grow-1 me-2">
                                                    <a href="../../demo7/dist/widgets/lists.html" class="fw-bolder text-gray-800 text-hover-primary fs-6">B &amp; Q - Food Company</a>
                                                    <span class="text-muted fw-bold d-block">Due in 6 Days</span>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Lable-->
                                                <span class="fw-bolder text-primary py-1">+12%</span>
                                                <!--end::Lable-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center bg-light-danger rounded p-5">
                                                <!--begin::Icon-->
                                                <span class="svg-icon svg-icon-danger me-5">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-danger">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <div class="flex-grow-1 me-2">
                                                    <a href="../../demo7/dist/widgets/lists.html" class="fw-bolder text-gray-800 text-hover-primary fs-6">Nexa - Next generation</a>
                                                    <span class="text-muted fw-bold d-block">Due in 4 Days</span>
                                                </div>
                                                <!--end::Title-->
                                                <!--begin::Lable-->
                                                <span class="fw-bolder text-danger py-1">+34%</span>
                                                <!--end::Lable-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Notifications-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_aside_nav_tab_authors" role="tabpanel">
                                    <!--begin::Authors-->
                                    <div class="mx-5">
                                        <!--begin::Header-->
                                        <h3 class="fw-bolder text-dark mx-0 mb-10">Authors</h3>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="mb-12">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img src="assets/media/avatars/150-1.jpg" class="" alt="" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="flex-grow-1">
                                                    <a href="../../demo7/dist/apps/projects/users.html" class="text-dark fw-bolder text-hover-primary fs-6">Emma Smith</a>
                                                    <span class="text-muted d-block fw-bold">Project Manager</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img src="assets/media/avatars/150-4.jpg" class="" alt="" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="flex-grow-1">
                                                    <a href="../../demo7/dist/apps/projects/users.html" class="text-dark fw-bolder text-hover-primary fs-6">Sean Bean</a>
                                                    <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img src="assets/media/avatars/150-12.jpg" class="" alt="" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="flex-grow-1">
                                                    <a href="../../demo7/dist/apps/projects/users.html" class="text-dark fw-bolder text-hover-primary fs-6">Brian Cox</a>
                                                    <span class="text-muted d-block fw-bold">HTML5, jQuery, CSS3</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img src="assets/media/avatars/150-6.jpg" class="" alt="" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="flex-grow-1">
                                                    <a href="../../demo7/dist/apps/projects/users.html" class="text-dark fw-bolder text-hover-primary fs-6">Dan Wilson</a>
                                                    <span class="text-muted d-block fw-bold">MangoDB, Java</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img src="assets/media/avatars/150-9.jpg" class="" alt="" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="flex-grow-1">
                                                    <a href="../../demo7/dist/apps/projects/users.html" class="text-dark fw-bolder text-hover-primary fs-6">Natali Trump</a>
                                                    <span class="text-muted d-block fw-bold">NET, Oracle, MySQL</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img src="assets/media/avatars/150-8.jpg" class="" alt="" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="flex-grow-1">
                                                    <a href="../../demo7/dist/apps/projects/users.html" class="text-dark fw-bolder text-hover-primary fs-6">Francis Mitcham</a>
                                                    <span class="text-muted d-block fw-bold">React, Vue</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img src="assets/media/avatars/150-7.jpg" class="" alt="" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Text-->
                                                <div class="flex-grow-1">
                                                    <a href="../../demo7/dist/apps/projects/users.html" class="text-dark fw-bolder text-hover-primary fs-6">Jessie Clarcson</a>
                                                    <span class="text-muted d-block fw-bold">Angular, React</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Authors-->
                                </div>
                                <!--end::Tab pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                </div>
                <!--end::Workspace-->
            </div>
            <!--end::Secondary-->
            <!--begin::Aside Toggle-->
            <button class="btn btn-sm btn-icon bg-body btn-color-gray-700 btn-active-primary position-absolute translate-middle start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize" style="margin-bottom: 1.35rem">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                <span class="svg-icon svg-icon-2 rotate-180">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
								<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
							</svg>
						</span>
                <!--end::Svg Icon-->
            </button>
            <!--end::Aside Toggle-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <!--begin::Header-->
            @yield('header')
            <!--end::Header-->
            <!--begin::Content-->
            @yield('content')
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container-xxl d-flex flex-column flex-md-row flex-stack">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-gray-400 fw-bold me-1">Created by</span>
                        <a href="https://corebugs.com" target="_blank" class="text-muted text-hover-primary fw-bold me-2 fs-6">Corebugs</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Menu-->
                    <!--end::Menu-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->
<!--end::Activities drawer-->
<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
    <!--begin::Messenger-->
    <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-bold text-muted">Active</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="bi bi-three-dots fs-3"></i>
                    </button>
                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation"></i></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Groups</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Create Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Invite Members</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">Settings</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                </div>
                <!--end::Menu-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Messages-->
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer" data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">2 mins</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">How likely are you to recommend our company to your friends and family ?</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">5 mins</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">1 Hour</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Ok, Understood!</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">2 Hours</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">You’ll receive notifications for all issues, pull requests!</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">3 Hours</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">You can unwatch this repository immediately by clicking here:
                            <a href="https://keenthemes.com">Keenthemes.com</a></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(out)-->
                <div class="d-flex justify-content-end mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">4 Hours</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Most purchased Business courses during this sale!</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(out)-->
                <!--begin::Message(in)-->
                <div class="d-flex justify-content-start mb-10">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">5 Hours</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(in)-->
                <!--begin::Message(template for out)-->
                <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-end">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Details-->
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">Just now</span>
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <!--end::Details-->
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                            </div>
                            <!--end::Avatar-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text"></div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for out)-->
                <!--begin::Message(template for in)-->
                <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start">
                        <!--begin::User-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Details-->
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                <span class="text-muted fs-7 mb-1">Just now</span>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Text-->
                        <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
                        <!--end::Text-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Message(template for in)-->
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Card body-->
        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message"></textarea>
            <!--end::Input-->
            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="bi bi-paperclip fs-3"></i>
                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="bi bi-upload fs-3"></i>
                    </button>
                </div>
                <!--end::Actions-->
                <!--begin::Send-->
                <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                <!--end::Send-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->
<!--end::Drawers-->
<!--end::Main-->
<!--begin::Engage drawers-->
<!--begin::Demos drawer-->
<div id="kt_engage_demos" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_engage_demos_toggle" data-kt-drawer-close="#kt_engage_demos_close">
    <!--begin::Card-->
    <div class="card shadow-none rounded-0 w-100">
        <!--begin::Header-->
        <div class="card-header" id="kt_engage_demos_header">
            <h3 class="card-title fw-bolder text-gray-700">Explore</h3>
            <div class="card-toolbar">
                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6" id="kt_engage_demos_close">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body" id="kt_engage_demos_body">
            <!--begin::Content-->
            <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_engage_demos_body" data-kt-scroll-dependencies="#kt_engage_demos_header" data-kt-scroll-offset="5px">
                <!--begin::Wrapper-->
                <div class="mb-0">
                    <!--begin::Heading-->
                    <div class="mb-7">
                        <div class="d-flex flex-stack">
                            <h3 class="mb-0">Metronic Licenses</h3>
                            <a href="https://themeforest.net/licenses/standard" class="fw-bold" target="_blank">License FAQs</a>
                        </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::License-->
                    <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                        <div class="d-flex flex-stack">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Regular License</div>
                                    <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-dark" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client in a single end product which end users are not charged for"></i>
                                </div>
                                <div class="fs-7 text-muted">For single end product used by you or one client</div>
                            </div>
                            <div class="text-nowrap">
                                <span class="text-muted fs-7 fw-bold me-n1">$</span>
                                <span class="text-dark fs-1 fw-bolder">39</span>
                            </div>
                        </div>
                    </div>
                    <!--end::License-->
                    <!--begin::License-->
                    <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                        <div class="d-flex flex-stack">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Extended License</div>
                                    <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="popover" data-bs-custom-class="popover-dark" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."></i>
                                </div>
                                <div class="fs-7 text-muted">For single SaaS app with paying users</div>
                            </div>
                            <div class="text-nowrap">
                                <span class="text-muted fs-7 fw-bold me-n1">$</span>
                                <span class="text-dark fs-1 fw-bolder">939</span>
                            </div>
                        </div>
                    </div>
                    <!--end::License-->
                    <!--begin::License-->
                    <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                        <div class="d-flex flex-stack">
                            <div class="d-flex flex-column">
                                <div class="d-flex align-items-center mb-1">
                                    <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Custom License</div>
                                </div>
                                <div class="fs-7 text-muted">Reach us for custom license offers.</div>
                            </div>
                            <div class="text-nowrap">
                                <a href="https://keenthemes.com/contact/" class="btn btn-sm btn-success" target="_blank">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <!--end::License-->
                    <!--begin::Purchase-->
                    <a href="https://1.envato.market/EA4JP" class="btn btn-primary mb-15 w-100">Buy Now</a>
                    <!--end::Purchase-->
                    <!--begin::Demos-->
                    <div class="mb-0">
                        <h3 class="fw-bolder text-center mb-6">Metronic Demos</h3>
                        <!--begin::Row-->
                        <div class="row g-5">
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo1.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo1" class="btn btn-sm btn-success shadow">Demo 1</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo2.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo2" class="btn btn-sm btn-success shadow">Demo 2</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo3.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo3" class="btn btn-sm btn-success shadow">Demo 3</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo4.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo4" class="btn btn-sm btn-success shadow">Demo 4</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo5.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo5" class="btn btn-sm btn-success shadow">Demo 5</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo6.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo6" class="btn btn-sm btn-success shadow">Demo 6</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo7.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo7" class="btn btn-sm btn-success shadow">Demo 7</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo8.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo8" class="btn btn-sm btn-success shadow">Demo 8</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo9.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo9" class="btn btn-sm btn-success shadow">Demo 9</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo10.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo10" class="btn btn-sm btn-success shadow">Demo 10</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo11.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo11" class="btn btn-sm btn-success shadow">Demo 11</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo12.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo12" class="btn btn-sm btn-success shadow">Demo 12</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo13.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo13" class="btn btn-sm btn-success shadow">Demo 13</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo14.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo14" class="btn btn-sm btn-success shadow">Demo 14</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo15.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo15" class="btn btn-sm btn-success shadow">Demo 15</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo16.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo16" class="btn btn-sm btn-success shadow">Demo 16</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo17.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo17" class="btn btn-sm btn-success shadow">Demo 17</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo18.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo18" class="btn btn-sm btn-success shadow">Demo 18</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo19.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo19" class="btn btn-sm btn-success shadow">Demo 19</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo20.png" alt="demo" class="w-100" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <a href="https://preview.keenthemes.com/metronic8/demo20" class="btn btn-sm btn-success shadow">Demo 20</a>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo21.png" alt="demo" class="w-100 opacity-25" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo22.png" alt="demo" class="w-100 opacity-25" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo23.png" alt="demo" class="w-100 opacity-25" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-6">
                                <!--begin::Demo-->
                                <div class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                    <div class="overlay-wrapper">
                                        <img src="assets/media/demos/demo24.png" alt="demo" class="w-100 opacity-25" />
                                    </div>
                                    <div class="overlay-layer bg-dark bg-opacity-10">
                                        <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming soon</div>
                                    </div>
                                </div>
                                <!--end::Demo-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Demos-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Card-->
</div>
<!--end::Demos drawer-->
<!--end::Engage drawers-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
    <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
    <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
    <!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="mb-3">Upgrade a Plan</h1>
                    <div class="text-muted fw-bold fs-5">If you need more info, please check
                        <a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.</div>
                </div>
                <!--end::Heading-->
                <!--begin::Plans-->
                <div class="d-flex flex-column">
                    <!--begin::Nav group-->
                    <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                        <a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</a>
                        <a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</a>
                    </div>
                    <!--end::Nav group-->
                    <!--begin::Row-->
                    <div class="row mt-10">
                        <!--begin::Col-->
                        <div class="col-lg-6 mb-10 mb-lg-0">
                            <!--begin::Tabs-->
                            <div class="nav flex-column">
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Startup</h2>
                                            <div class="fw-bold opacity-50">Best for startups</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="advanced" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Advanced</h2>
                                            <div class="fw-bold opacity-50">Best for 100+ team size</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="enterprise" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Enterprise
                                                <span class="badge badge-light-success ms-2 fs-7">Most popular</span></h2>
                                            <div class="fw-bold opacity-50">Best value for 1000+ team</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-3x fw-bolder" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
                                        <span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                                <!--begin::Tab link-->
                                <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
                                    <!--end::Description-->
                                    <div class="d-flex align-items-center me-2">
                                        <!--begin::Radio-->
                                        <div class="form-check form-check-custom form-check-solid form-check-success me-6">
                                            <input class="form-check-input" type="radio" name="plan" value="custom" />
                                        </div>
                                        <!--end::Radio-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Custom</h2>
                                            <div class="fw-bold opacity-50">Requet a custom license</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Description-->
                                    <!--begin::Price-->
                                    <div class="ms-5">
                                        <a href="#" class="btn btn-sm btn-primary">Contact Us</a>
                                    </div>
                                    <!--end::Price-->
                                </div>
                                <!--end::Tab link-->
                            </div>
                            <!--end::Tabs-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Tab content-->
                            <div class="tab-content rounded h-100 bg-light p-10">
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                        <div class="text-muted fw-bold">Optimal for 10+ team size and new startup</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Finance Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Accounting Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Network Platform</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                        <div class="text-muted fw-bold">Optimal for 100+ team size and grown company</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Network Platform</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud Space</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                            <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black" />
															<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                                <!--begin::Tab Pane-->
                                <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                    <!--begin::Heading-->
                                    <div class="pb-5">
                                        <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                        <div class="text-muted fw-bold">Optimal for 1000+ team and enterpise</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="pt-1">
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-7">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
															<path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="black" />
														</svg>
													</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tab Pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Plans-->
                <!--begin::Actions-->
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Upgrade Plan</button>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Invite a Friend</h1>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="text-muted fw-bold fs-5">If you need more info, please check out
                        <a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Google Contacts Invite-->
                <div class="btn btn-light-primary fw-bolder w-100 mb-8">
                    <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
                <!--end::Google Contacts Invite-->
                <!--begin::Separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">or</span>
                </div>
                <!--end::Separator-->
                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
                <!--end::Textarea-->
                <!--begin::Users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-bold mb-2">Your Invitations</div>
                    <!--end::Heading-->
                    <!--begin::List-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                    <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                    <div class="fw-bold text-muted">melody@altbox.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                    <div class="fw-bold text-muted">max@kt.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                    <div class="fw-bold text-muted">sean@dellito.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                    <div class="fw-bold text-muted">brian@exchange.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                    <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-8.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                    <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                    <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                    <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-6.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                    <div class="fw-bold text-muted">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                    <div class="fw-bold text-muted">emma@intenso.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                    <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                    <div class="fw-bold text-muted">robert@benko.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-17.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
                                    <div class="fw-bold text-muted">miller@mapple.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                    <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2" selected="selected">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-10.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                    <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1" selected="selected">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="assets/media/avatars/150-17.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-5">
                                    <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
                                    <div class="fw-bold text-muted">miller@mapple.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                            <!--begin::Access menu-->
                            <div class="ms-2 w-100px">
                                <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                    <option value="1">Guest</option>
                                    <option value="2">Owner</option>
                                    <option value="3" selected="selected">Can Edit</option>
                                </select>
                            </div>
                            <!--end::Access menu-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->
                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Label-->
                    <div class="me-5 fw-bold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->
                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                        <span class="form-check-label fw-bold text-muted">Allowed</span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend-->
<!--begin::Modal - Create App-->
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create App</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
                    <!--begin::Aside-->
                    <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                        <!--begin::Nav-->
                        <div class="stepper-nav ps-lg-10">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Details</h3>
                                    <div class="stepper-desc">Name your App</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <!--begin::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Frameworks</h3>
                                    <div class="stepper-desc">Define your app framework</div>
                                </div>
                                <!--begin::Label-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">3</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Database</h3>
                                    <div class="stepper-desc">Select the app database type</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">4</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Billing</h3>
                                    <div class="stepper-desc">Provide payment details</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">5</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Completed</h3>
                                    <div class="stepper-desc">Review and Submit</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 5-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--begin::Aside-->
                    <!--begin::Content-->
                    <div class="flex-row-fluid py-lg-5 px-lg-15">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                            <span class="required">App Name</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                            <span class="required">Category</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app category"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin:Options-->
                                        <div class="fv-row">
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-primary">
																	<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-primary">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="black" />
																			<path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="black" />
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
															</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bolder fs-6">Quick Online Courses</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
															</span>
                                                    <!--end:Info-->
														</span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="1" />
														</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-danger">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-danger">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																			<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																			<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																			<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
															</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bolder fs-6">Face to Face Discussions</span>
																<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
															</span>
                                                    <!--end:Info-->
														</span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="2" />
														</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
															<!--begin:Icon-->
															<span class="symbol symbol-50px me-6">
																<span class="symbol-label bg-light-success">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
																	<span class="svg-icon svg-icon-1 svg-icon-success">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="black" />
																			<path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="black" />
																		</svg>
																	</span>
                                                                    <!--end::Svg Icon-->
																</span>
															</span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
															<span class="d-flex flex-column">
																<span class="fw-bolder fs-6">Full Intro Training</span>
																<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
															</span>
                                                    <!--end:Info-->
														</span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
															<input class="form-check-input" type="radio" name="category" value="3" />
														</span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end:Options-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                            <span class="required">Select Framework</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your apps framework"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="fab fa-html5 text-warning fs-2x"></i>
															</span>
														</span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">HTML5</span>
															<span class="fs-7 text-muted">Base Web Projec</span>
														</span>
                                                <!--end:Info-->
													</span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
													</span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="fab fa-react text-success fs-2x"></i>
															</span>
														</span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">ReactJS</span>
															<span class="fs-7 text-muted">Robust and flexible app framework</span>
														</span>
                                                <!--end:Info-->
													</span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="2" />
													</span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="fab fa-angular text-danger fs-2x"></i>
															</span>
														</span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Angular</span>
															<span class="fs-7 text-muted">Powerful data mangement</span>
														</span>
                                                <!--end:Info-->
													</span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="3" />
													</span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-primary">
																<i class="fab fa-vuejs text-primary fs-2x"></i>
															</span>
														</span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Vue</span>
															<span class="fs-7 text-muted">Lightweight and responsive framework</span>
														</span>
                                                <!--end:Info-->
													</span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="framework" value="4" />
													</span>
                                            <!--end:Input-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="required fs-5 fw-bold mb-2">Database Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                            <span class="required">Select Database Engine</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app database engine"></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin::Label-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<i class="fas fa-database text-success fs-2x"></i>
															</span>
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">MySQL</span>
															<span class="fs-7 text-muted">Basic MySQL database</span>
														</span>
                                                <!--end::Info-->
													</span>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
													</span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer mb-5">
                                            <!--begin::Label-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<i class="fab fa-google text-danger fs-2x"></i>
															</span>
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Firebase</span>
															<span class="fs-7 text-muted">Google based app data management</span>
														</span>
                                                <!--end::Info-->
													</span>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="2" />
													</span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->
                                        <!--begin:Option-->
                                        <label class="d-flex flex-stack cursor-pointer">
                                            <!--begin::Label-->
                                            <span class="d-flex align-items-center me-2">
														<!--begin::Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-warning">
																<i class="fab fa-amazon text-warning fs-2x"></i>
															</span>
														</span>
                                                <!--end::Icon-->
                                                <!--begin::Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">DynamoDB</span>
															<span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
														</span>
                                                <!--end::Info-->
													</span>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="dbengine" value="3" />
													</span>
                                            <!--end::Input-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">Name On Card</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                                <img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
                                                <img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
                                            </div>
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-md-8 fv-row">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
                                            <!--end::Label-->
                                            <!--begin::Row-->
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                                                        <option></option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                <span class="required">CVV</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                                <!--end::Input-->
                                                <!--begin::CVV icon-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                    <span class="svg-icon svg-icon-2hx">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M22 7H2V11H22V7Z" fill="black" />
																	<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black" />
																</svg>
															</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::CVV icon-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <div class="me-5">
                                            <label class="fs-6 fw-bold form-label">Save Card for further billing?</label>
                                            <div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                            <span class="form-check-label fw-bold text-muted">Save Card</span>
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div data-kt-stepper-element="content">
                                <div class="w-100 text-center">
                                    <!--begin::Heading-->
                                    <h1 class="fw-bolder text-dark mb-3">Release!</h1>
                                    <!--end::Heading-->
                                    <!--begin::Description-->
                                    <div class="text-muted fw-bold fs-3">Submit your app to kickstart your project.</div>
                                    <!--end::Description-->
                                    <!--begin::Illustration-->
                                    <div class="text-center px-4 py-15">
                                        <img src="assets/media/illustrations/sigma-1/9.png" alt="" class="mw-100 mh-300px" />
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-10">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                        <span class="svg-icon svg-icon-3 me-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
													<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
												</svg>
											</span>
                                        <!--end::Svg Icon-->Back</button>
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Wrapper-->
                                <div>
                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
												<span class="indicator-label">Submit
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
														<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
													</svg>
												</span>
                                                    <!--end::Svg Icon--></span>
                                        <span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
												</svg>
											</span>
                                        <!--end::Svg Icon--></button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Create App-->
<!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">Search Users</h1>
                    <div class="text-muted fw-bold fs-5">Invite Collaborators To Your Project</div>
                </div>
                <!--end::Content-->
                <!--begin::Search-->
                <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden" />
                        <!--end::Hidden input-->
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
									</svg>
								</span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
                        <!--end::Input-->
                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
                        <!--end::Spinner-->
                        <!--begin::Reset-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
											<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
										</svg>
									</span>
                            <!--end::Svg Icon-->
								</span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Wrapper-->
                    <div class="py-5">
                        <!--begin::Suggestions-->
                        <div data-kt-search-element="suggestions">
                            <!--begin::Heading-->
                            <h3 class="fw-bold mb-5">Recently searched:</h3>
                            <!--end::Heading-->
                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                        <span class="badge badge-light">Art Director</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                        <span class="badge badge-light">Marketing Analytic</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                        <span class="badge badge-light">Software Enginer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                        <span class="badge badge-light">Web Developer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                                <!--begin::User-->
                                <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle me-5">
                                        <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Info-->
                                    <div class="fw-bold">
                                        <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                        <span class="badge badge-light">UI/UX Designer</span>
                                    </div>
                                    <!--end::Info-->
                                </a>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                        </div>
                        <!--end::Suggestions-->
                        <!--begin::Results(add d-none to below element to hide the users list by default)-->
                        <div data-kt-search-element="results" class="d-none">
                            <!--begin::Users-->
                            <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                            <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                            <div class="fw-bold text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                            <div class="fw-bold text-muted">max@kt.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                            <div class="fw-bold text-muted">sean@dellito.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                            <div class="fw-bold text-muted">brian@exchange.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                            <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-8.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                            <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                            <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                            <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                            <div class="fw-bold text-muted">dam@consilting.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                            <div class="fw-bold text-muted">emma@intenso.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                            <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                            <div class="fw-bold text-muted">robert@benko.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-17.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
                                            <div class="fw-bold text-muted">miller@mapple.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                            <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2" selected="selected">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-10.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                            <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1" selected="selected">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                                <!--begin::Separator-->
                                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                <!--end::Separator-->
                                <!--begin::User-->
                                <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                    <!--begin::Details-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-5">
                                            <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                            <div class="fw-bold text-muted">melody@altbox.com</div>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Details-->
                                    <!--begin::Access menu-->
                                    <div class="ms-2 w-100px">
                                        <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                            <option value="1">Guest</option>
                                            <option value="2">Owner</option>
                                            <option value="3" selected="selected">Can Edit</option>
                                        </select>
                                    </div>
                                    <!--end::Access menu-->
                                </div>
                                <!--end::User-->
                            </div>
                            <!--end::Users-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-center mt-15">
                                <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
                                <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Results-->
                        <!--begin::Empty-->
                        <div data-kt-search-element="empty" class="text-center d-none">
                            <!--begin::Message-->
                            <div class="fw-bold py-10">
                                <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                            </div>
                            <!--end::Message-->
                            <!--begin::Illustration-->
                            <div class="text-center px-5">
                                <img src="assets/media/illustrations/sigma-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
                            </div>
                            <!--end::Illustration-->
                        </div>
                        <!--end::Empty-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->
<!--end::Modals-->
<!--begin::Javascript-->
<script>var hostUrl = "{{asset('assets/')}}";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
@yield('topscript')
<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/create-app.js')}}"></script>
<script src="{{asset('assets/js/custom/modals/users-search.js')}}"></script>
<!--end::Page Custom Javascript-->
@yield('script')

<?php
$errors = session()->get("errors");
?>

@if( session()->has("errors"))
    <?php
    $e = implode(' - ', $errors->all());
    ?>

    <script>
        Swal.fire({
            icon: 'warning',
            title: "برجاء التأكد من البيانات.",
            text: "{{$e}} ",
            type: "error",
            timer: 5000,
            showConfirmButton: false
        });
    </script>

@endif


@if( session()->has("error"))
    <?php
    $e = session()->get("error");
    ?>

    <script>
        Swal.fire({
            icon: 'warning',
            title: "برجاء التأكد من البيانات.",
            text: "كلمة المرور غير صحيحه  ",
            type: "error",
            timer: 5000,
            showConfirmButton: false
        });
    </script>

@endif
<?php
$error_message = session()->get("error_message");
?>

@if( session()->has("error_message"))
    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr.error("{{$error_message}}" , "عفوا !" );
    </script>

@endif
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
