
<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head><base href="../../">
    <meta charset="utf-8"/>
    <title>Ivan</title>
    <meta name="description" content="No aside layout examples"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->

    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles-->


    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->

    <link href="{{asset('css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/themes/layout/brand/light.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css"/>        <!--end::Layout Themes-->

    <link rel="shortcut icon" href="{{asset('media/logos/logo.jpg')}}"/>

</head>
<!--end::Head-->

<!--begin::Body-->
<body  id="kt_body"  class="header-fixed header-mobile-fixed page-loading"  >

<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed " >
    <!--begin::Logo-->
    <a href="index.html">
        <img alt="Logo" src="{{asset('media/logos/logo.jpg')}}"/>
    </a>
    <!--end::Logo-->

    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">

        <!--begin::Header Menu Mobile Toggle-->
        <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
            <span></span>
        </button>
        <!--end::Header Menu Mobile Toggle-->

        <!--begin::Topbar Mobile Toggle-->
        <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
			<span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>		</button>
        <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header  header-fixed py-5 px-20" >
                <!--begin::Container-->
                <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Header Logo-->
                        <div class="header-logo mr-10">
                            <a href="index.html">
                                <img alt="Logo" src="{{asset('media/logos/logo.jpg')}}"/>
                            </a>
                        </div>
                        <!--end::Header Logo-->
                        <!--begin::Header Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default " >
                            <!--begin::Header Nav-->
                            <ul class="menu-nav ">
                                <li class="menu-item  menu-item-submenu menu-item-rel menu-item-active ml-20"  data-menu-toggle="click" aria-haspopup="true">
                                    <a href="#" class="btn btn-link-dark font-weight-bold mt-2">
                                        <h6>Home</h6>
                                    </a>
                                </li>
                                <li class="menu-item  menu-item-submenu menu-item-rel menu-item-active ml-10"  data-menu-toggle="click" aria-haspopup="true">
                                    <a href="#" class="btn btn-link-dark font-weight-bold mt-2">
                                        <h6>Blog</h6>
                                    </a>
                                </li>
                                <li class="menu-item  menu-item-submenu menu-item-rel menu-item-active ml-10"  data-menu-toggle="click" aria-haspopup="true">
                                    <a href="#" class="btn btn-link-dark font-weight-bold mt-2">
                                        <h6>News</h6>
                                    </a>
                                </li>
                                <li class="menu-item  menu-item-submenu menu-item-rel menu-item-active ml-10"  data-menu-toggle="click" aria-haspopup="true">
                                    <a href="#" class="btn btn-link-dark font-weight-bold mt-2">
                                        <h6>Contct us</h6>
                                    </a>
                                </li>
        					</ul>
                            <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                    </div>
                    <!--end::Header Menu Wrapper-->

                    <!--begin::Topbar-->
                    <div class="topbar">

                        @if(isset($user) && $user != null)
                        <!--begin::User-->
                        <div class="topbar-item">
                            <a href="#" class="btn btn-hover-bg-success btn-text-success btn-hover-text-white border-0 font-weight-bold mr-2">Dashboard</a>
                            <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{$user->name ?? ''}}</span>
                                <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                    @if($user->profile_picture == null)
                                        <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                                    @else
                                        <img style="width: 45px" src="{{$user->profile_picture}}" alt="">
                                    @endif
                                </span>
                            </div>
                        </div>
                        <!--end::User-->
                            @endif
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content  pt-0  d-flex flex-column flex-column-fluid" id="kt_content">

                <!--begin::Entry-->
                <!--begin::Hero-->
                <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url({{asset($solution->main_image->media_path)}})">
                    <div class=" container ">
{{--                        <!--begin::Topbar-->--}}
                        <div class="d-flex justify-content-between align-items-center py-10">
{{--                            <h3 class="h4 text-white mb-0">--}}
{{--                                Help Center--}}
{{--                            </h3>--}}
{{--                            <div class="d-flex">--}}
{{--                                <a href="#" class="font-size-h6 font-weight-bold">Community</a>--}}
{{--                                <a href="#" class="font-size-h6 font-weight-bold ml-8">Visit Blog</a>--}}
{{--                            </div>--}}
                        </div>
                        <!--end::Topbar-->
                        <div class="d-flex align-items-stretch text-center flex-column py-40">
                            <!--begin::Heading-->
                            <h1 class="text-white font-weight-bolder mb-12 display-3">
                                How can we help?
                            </h1>
                            <!--end::Heading-->

                        </div>
                    </div>
                </div>
                <!--end::Hero-->
                <!--begin::Hero-->
                <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-top" style="background-color: #282828;">
                    <div class=" container ">
                        <div class="d-flex justify-content-between align-items-center pt-10 pb-10">
                            <div class="col-auto">
                                <button type="button" class="btn btn-success py-5 px-20 " style="border-radius: 0px">
                                    <h6 class="pt-2">
                                        GOAL Cause {{$solution->goal_amount ?? 0}} $
                                    </h6>
                                </button>
                                <button type="button" class="btn btn-dark py-5 px-20 " style="border-radius: 0px">
                                    <h6 class="pt-2">
                                        Achieved {{$solution->achieved_amount ?? 0}} $
                                    </h6>
                                </button>
                            </div>
                            <div class="col-auto pt-5 text-center">
                                <h1 class="font-weight-bolder text-light mb-0 display-3">
                                    {{$solution->progress ?? 0}}%
                                </h1>
                                <p class="text-white">
                                    OF OUR GOAL
                                </p>
                            </div>
                            <div class="col-auto pt-5 text-center">
                                <h1 class="font-weight-bolder text-light mb-0 display-3">
                                    4
                                </h1>
                                <p class="text-white">
                                    SUPPORTED
                                </p>
                            </div>
                            <div class="col-auto">
                                <a href="" data-toggle="modal" data-target="#donate" class="btn btn-white my-3" style="border-radius: 0px">
                                    <p class="m-0">
                                        SUPPORT NOW
                                    </p>
                                </a>
                                <div class="modal fade" id="donate" role="dialog"  aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Support Now</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body p-0">
                                                <!--begin::Body-->
                                                <div class="card-body py-6 px-10 min-h-200px" >
                                                    <h6 class="text-center mt-10">Choose your amount</h6>

                                                    <div class="row justify-content-center mt-5">
                                                        <form action="{{url("customer/solutions/donate/store")}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="number" name="solution_id" value="{{$solution->id ?? ''}}" class="d-none">
                                                            <input type="number" name="solution_provider_id" value="{{$solution->user_id ?? ''}}" class="d-none">
                                                            <input type="number" name="amount" value="20" class="d-none">
                                                            <button type="submit" class="btn btn-success my-3 mx-4 px-5" style="border-radius: 0px">
                                                                20 USD
                                                            </button>
                                                        </form>

                                                        <form action="{{url("customer/solutions/donate/store")}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="number" name="solution_id" value="{{$solution->id ?? ''}}" class="d-none">
                                                            <input type="number" name="solution_provider_id" value="{{$solution->user_id ?? ''}}" class="d-none">
                                                            <input type="number" name="amount" value="50" class="d-none">
                                                            <button type="submit" class="btn btn-success my-3 mx-4 px-5" style="border-radius: 0px">
                                                                50 USD
                                                            </button>
                                                        </form>

                                                        <form action="{{url("customer/solutions/donate/store")}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="number" name="solution_id" value="{{$solution->id ?? ''}}" class="d-none">
                                                            <input type="number" name="solution_provider_id" value="{{$solution->user_id ?? ''}}" class="d-none">
                                                            <input type="number" name="amount" value="75" class="d-none">
                                                            <button type="submit" class="btn btn-success my-3 mx-4 px-5" style="border-radius: 0px">
                                                                75 USD
                                                            </button>
                                                        </form>

                                                        <form action="{{url("customer/solutions/donate/store")}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="number" name="solution_id" value="{{$solution->id ?? ''}}" class="d-none">
                                                            <input type="number" name="solution_provider_id" value="{{$solution->user_id ?? ''}}" class="d-none">
                                                            <input type="number" name="amount" value="100" class="d-none">
                                                            <button type="submit" class="btn btn-success my-3 mx-2 px-5" style="border-radius: 0px">
                                                                100 USD
                                                            </button>
                                                        </form>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Hero-->
                <!--begin::Section-->
                <div class=" container  py-8">
                    <div class="row">
                        <!--begin::Product-->
                        <div class="col-12">
                            <!--begin::Card-->
                            <div class="card card-custom card-shadowless">
                                <div class="card-body p-0">
                                    <div class="row" style="background-color: #2a7d2f">
                                        <!--begin::Image-->
                                        <div class="overlay col-12 col-md-8 m-0 p-0">
                                            <div class="overlay-wrapper rounded bg-light text-center" >
                                                <div class=" d-flex flex-row-fluid bgi-size-cover bgi-position-center" style="background-image: url({{asset($solution->main_image->media_path)}}); min-height: 300px">

                                                </div>
                                                {{--                                            <img src="" alt="" class="mw-100 w-200px" />--}}
                                            </div>
                                            @if($solution->images->count() != 0)
                                            <div class="overlay-layer">
                                                <a href="" data-toggle="modal" data-target="#new_report" class="btn font-weight-bolder btn-sm btn-success mr-2 py-2 px-5" style="border-radius: 0px">More media</a>
{{--                                                <a href="#" class="btn font-weight-bolder btn-sm btn-light-primary">Purchase</a>--}}
                                            </div>
                                            @endif
                                            <div class="modal fade" id="new_report" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog modal-xl" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Media</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i aria-hidden="true" class="ki ki-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body row">
                                                                @foreach($solution->images as $image_key=>$image)
                                                                    <div class="col-12 col-md-4">
                                                                        <div class="d-flex flex-column flex-center">
                                                                            @if($image->media_type == "video")
                                                                                <iframe width="320" height="180" src="https://www.youtube.com/embed/Jzh4PYXUiKI" class="rounded" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                                @else
                                                                            <a href="{{url($image->media_path)}}" target="_blank" class="bgi-no-repeat bgi-size-cover rounded min-h-180px w-100" style="background-image: url({{asset($image->media_path)}})">
                                                                            </a>
                                                                            @endif
                                                                            <!--begin::Title-->
                                                                            <a href="{{url($image->media_path)}}" target="_blank" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">{{$image->title ?? ''}}</a>
                                                                            <!--end::Title-->

                                                                            <!--begin::Text-->
                                                                            <div class="font-weight-bold text-dark-50 font-size-sm pb-7">
                                                                                {{$image->caption ?? ''}}
                                                                            </div>
                                                                            <!--end::Text-->
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!--end::Image-->
                                        <div class="col-12 col-md-4 m-0 px-10 pt-10 text-center text-white">
                                            <h3>
                                                {{$solution->title ?? ''}}
                                            </h3>
                                            <p>
                                                {{$solution->brief_description ?? ''}}
                                            </p>
                                            <a href="{{url("customer/messages/$solution->user_id/create")}}" class="btn btn-white my-3" style="border-radius: 0px">
                                                <p class="m-0">
                                                    Contact Solution Provider
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Product-->
                    </div>
                    <div class="row mt-5">
                        <!--begin::Product-->
                        <div class="col-12 m-0 p-0">
                            <!--begin::Card-->
                            <div class="card card-custom card-shadowless" style="border-radius: 0px">
                                <div class="card-body ">
{{--                                    <div class="row">--}}
                                        <ul class="nav nav-tabs nav-tabs-line">
                                            <li class="nav-item mx-2">
                                                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1">
                                                    <h5>Description</h5>
                                                </a>
                                            </li>
                                            <li class="nav-item mx-2">
                                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2">
                                                    <h5>Document</h5>
                                                </a>
                                            </li>
{{--                                            <li class="nav-item mx-2">--}}
{{--                                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3">--}}
{{--                                                    <h5>Location</h5>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
                                            <li class="nav-item mx-2">
                                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4">
                                                    <h5>Supports</h5>
                                                </a>
                                            </li>
                                            <li class="nav-item mx-2">
                                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_5">
                                                    <h5>Comments</h5>
                                                </a>
                                            </li>
                                            @if(isset($user) && $user != null)
                                            <li class="nav-item mx-2">
                                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_6">
                                                    <h5>Reports</h5>
                                                </a>
                                            </li>
                                                @endif

                                        </ul>
                                        <div class="tab-content mt-5" id="myTabContent">
                                            <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                                <p>
                                                    {{$solution->description ?? ''}}
                                                </p>
                                                <h6 class="mt-5">
                                                    What is the problem that we would like to solve?
                                                </h6>
                                                <p>
                                                    {{$solution->issue ?? ''}}
                                                </p>
                                                <h6 class="mt-5">
                                                    What is our solution?
                                                </h6>
                                                <p>
                                                    {{$solution->solution ?? ''}}
                                                </p>
                                                <h6 class="mt-5">
                                                    What is our action?
                                                </h6>
                                                <p>
                                                    {{$solution->our_function ?? ''}}
                                                </p>
                                                <h6 class="mt-5">
                                                    Why do we choose the above solutions?
                                                </h6>
                                                <p>
                                                    {{$solution->reason ?? ''}}
                                                </p>
                                                <h6 class="mt-5">
                                                    What kind of impacts do you want to see?
                                                </h6>
                                                <p>
                                                    {{$solution->effect ?? ''}}
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                                <div class="overflow-auto">
                                                    <!--begin: Datatable-->
                                                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                                        <thead>
                                                        <tr>
                                                            <th class="text-center">#</th>
                                                            <th class="text-left">Type</th>
                                                            <th class="text-center">Title</th>
                                                            <th class="text-center">Caption</th>
                                                            <th class="text-center">Action</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        @foreach($solution->medias as $media_key=>$media)
                                                            <tr>
                                                                <td class="text-center">{{$media_key +1 ?? ''}}</td>
                                                                <td class="text-left">
                                                                    <a href="{{asset($media->media_path)}}" download="{{$media->title ?? ''}}">
                                                                        <i class="flaticon2-file text-success mr-5"></i>
                                                                    </a>
                                                                    {{$media->media_type ?? ''}}
                                                                </td>
                                                                <td class="text-center">{{$media->title ?? ''}}</td>
                                                                <td class="text-center">{{$media->caption ?? ''}}</td>

                                                                <td class="text-center">
                                                                    <a href="{{asset($media->media_path)}}" download="{{$media->title ?? ''}}">
                                                                        <i class="flaticon-download text-success mr-5"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    <!--end: Datatable-->
                                                </div>
                                            </div>
{{--                                            <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel" aria-labelledby="kt_tab_pane_3">Tab content 3</div>--}}
                                            <div class="tab-pane fade" id="kt_tab_pane_4" role="tabpanel" aria-labelledby="kt_tab_pane_4">
                                                <h6>
                                                    List of supports :
                                                </h6>
                                                <div class="overflow-auto">
                                                    <!--begin: Datatable-->
                                                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Solution</th>
                                                            <th>Customer</th>
                                                            <th>Solution_provider</th>
                                                            <th>Amount</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($solution->donations as $donation_key=>$donation)
                                                            <tr>
                                                                <td>{{$donation_key +1  ?? ''}}</td>
                                                                <td>{{$donation->solution->title ?? ''}} {{$donation->lname ?? ''}}</td>
                                                                <td>{{$donation->customer->name ?? ''}}</td>
                                                                <td>{{$donation->solution_provider->name ?? ''}}</td>
                                                                <td>{{$donation->amount ?? ''}}</td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>

                                                    </table>
                                                    <!--end: Datatable-->
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="kt_tab_pane_5" role="tabpanel" aria-labelledby="kt_tab_pane_5">
                                            @foreach($solution->comments as $comment)
                                                <!--begin::Bottom-->
                                                    <div class="">
                                                        <!--begin::Item-->
                                                        <div class="d-flex pt-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-40 symbol-light-success mr-5 mt-1">
                                                                <span class="symbol-label">
                                                                    <img src="{{asset($comment->user->profile_picture)}}" class="h-100 w-100 align-self-end" alt=""/>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-column flex-row-fluid">
                                                                <!--begin::Info-->
                                                                <div class="d-flex align-items-center flex-wrap">
                                                                    <div class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder pr-6">{{$comment->user->name ?? ''}}</div>
                                                                </div>

                                                                <span class="text-dark-75 font-size-sm font-weight-normal pt-1">
                                                                    {{$comment->body ?? ''}}
                                                                </span>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Bottom-->
                                                @endforeach
                                                @if(isset($user) && $user != null)
                                                    <div class="separator separator-solid mt-9 mb-4"></div>
                                                    <!--end::Separator-->

                                                    <!--begin::Editor-->
                                                    <form class="position-relative" action="{{url("customer/solutions/comments/store")}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <textarea id="kt_forms_widget_11_input" name="body" class="form-control border-0 p-0 pr-10 resize-none" rows="2" placeholder="Comment" required></textarea>
                                                        <input type="number" name="owner_id" value="{{$solution->id}}" class="d-none">
                                                        <input type="text" name="type" value="solution_comment" class="d-none">
                                                        <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
                                                            <button type="submit" class="btn btn-icon btn-sm btn-hover-icon-primary mr-5">
                                                                <i class="flaticon2-send-1 icon-lg"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                    <!--edit::Editor-->
                                                    @endif
                                            </div>
                                            @if(isset($user) && $user != null)
                                            <div class="tab-pane fade" id="kt_tab_pane_6" role="tabpanel" aria-labelledby="kt_tab_pane_6">
                                                <div class="overflow-auto">
                                                    <!--begin: Datatable-->
                                                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
                                                        <thead>
                                                        <tr>
                                                            <th class="text-center">#</th>
                                                            <th class="text-center">Title</th>
                                                            <th class="text-center">Report</th>
                                                            <th class="text-center">Date</th>
                                                            <th class="text-center">File</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        @foreach($solution->reports as $report_key=>$report)
                                                            <tr>
                                                                <td class="text-center">{{$report_key +1 ?? ''}}</td>
                                                                <td class="text-center">{{$report->title ?? ''}}</td>
                                                                <td class="text-center">{{$report->body ?? ''}}</td>
                                                                <td class="text-center">{{$report->created_at ?? ''}}</td>
                                                                <td class="text-center">
                                                                    <a href="{{asset($report->media_report->media_path)}}" download="{{$report->title ?? ''}}">
                                                                        <i class="flaticon-download text-success mr-5"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    <!--end: Datatable-->
                                                </div>
                                            </div>

                                                @endif
                                        </div>


{{--                                    </div>--}}
                                </div>
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Product-->
                    </div>
                </div>
                <!--end::Section-->
            </div>
            <!--end::Content-->

            <!--begin::Footer-->
            <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
                <!--begin::Container-->
                <div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">2022&copy;</span>
                        <a href="{{url('/')}}" target="_blank" class="text-dark-75 text-hover-primary">Ivan</a>
                    </div>
                    <!--end::Copyright-->

                    <!--begin::Nav-->
                    <div class="nav nav-dark">
{{--                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">About</a>--}}
{{--                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-5">Team</a>--}}
{{--                        <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>--}}
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
@if(isset($user) && $user != null)
    @include('layouts.customer.rightSidebar')
@endif





<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
	<span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
        <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span></div>
<!--end::Scrolltop-->


<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--end::Global Config-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset('plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<script src="{{asset('js/scripts.bundle.js')}}"></script>
<!--end::Global Theme Bundle-->

<!--begin::Page Vendors(used by this page)-->
<script src="{{asset('plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM"></script>
<script src="{{asset('plugins/custom/gmaps/gmaps.js')}}"></script>
<!--end::Page Vendors-->

<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('js/pages/widgets.js')}}"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
