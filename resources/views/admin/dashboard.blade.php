@extends('layouts.admin.master')

@section('content')

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">


                <!--begin::Row-->
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin::Tiles Widget 8-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Header-->
                            <div class="card-header border-0 pt-5">
                                <div class="card-title">
                                    <div class="card-label">
                                        <div class="font-weight-bolder">Admin Panel</div>
{{--                                        <div class="font-size-sm text-muted mt-2">890,344 Sales</div>--}}
                                    </div>
                                </div>
                                <div class="card-toolbar">

                                </div>
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body d-flex flex-column p-0">
                                <!--begin::Items-->
                                <div class="flex-grow-1 card-spacer">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center justify-content-between mb-10">
                                        <div class="d-flex align-items-center mr-2">
                                            <div class="symbol symbol-40 symbol-light-primary mr-3 flex-shrink-0">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-lg svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"/>
                                                                        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"/>
                                                                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"/>
                                                                        <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"/>
                                                                    </g>
                                                                    </svg><!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="{{url('/admin/solution_provider')}}"
                                                   class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Solution Providers</a>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center justify-content-between mb-10">
                                        <div class="d-flex align-items-center mr-2">
                                            <div class="symbol symbol-40 symbol-light-warning mr-3 flex-shrink-0">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-lg svg-icon-warning"><!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Mic.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                            <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                                            <path d="M12,13 C10.8954305,13 10,12.1045695 10,11 C10,9.8954305 10.8954305,9 12,9 C13.1045695,9 14,9.8954305 14,11 C14,12.1045695 13.1045695,13 12,13 Z" fill="#000000" opacity="0.3"/>
                                                                            <path d="M7.00036205,18.4995035 C7.21569918,15.5165724 9.36772908,14 11.9907452,14 C14.6506758,14 16.8360465,15.4332455 16.9988413,18.5 C17.0053266,18.6221713 16.9988413,19 16.5815,19 C14.5228466,19 11.463736,19 7.4041679,19 C7.26484009,19 6.98863236,18.6619875 7.00036205,18.4995035 Z" fill="#000000" opacity="0.3"/>
                                                                        </g>
                                                                    </svg><!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="{{url('/admin/customers')}}"
                                                   class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Customer</a>

                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center justify-content-between mb-10">
                                        <div class="d-flex align-items-center mr-2">
                                            <div class="symbol symbol-40 symbol-light-success mr-3 flex-shrink-0">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-lg svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                            <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5"/>
                                                                            <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5"/>
                                                                            <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"/>
                                                                            <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5"/>
                                                                        </g>
                                                                    </svg><!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="{{url('/admin/levels')}}"
                                                   class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Levels</a>

                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center justify-content-between mb-10">
                                        <div class="d-flex align-items-center mr-2">
                                            <div class="symbol symbol-40 symbol-light-info mr-3 flex-shrink-0">
                                                <div class="symbol-label">
                                                    <span class="svg-icon svg-icon-lg svg-icon-info"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"/>
                                                                        <path d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L5,18 C3.34314575,18 2,16.6568542 2,15 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z M6.16794971,10.5547002 C7.67758127,12.8191475 9.64566871,14 12,14 C14.3543313,14 16.3224187,12.8191475 17.8320503,10.5547002 C18.1384028,10.0951715 18.0142289,9.47430216 17.5547002,9.16794971 C17.0951715,8.86159725 16.4743022,8.98577112 16.1679497,9.4452998 C15.0109146,11.1808525 13.6456687,12 12,12 C10.3543313,12 8.9890854,11.1808525 7.83205029,9.4452998 C7.52569784,8.98577112 6.90482849,8.86159725 6.4452998,9.16794971 C5.98577112,9.47430216 5.86159725,10.0951715 6.16794971,10.5547002 Z" fill="#000000"/>
                                                                    </g>
                                                                    </svg><!--end::Svg Icon-->
                                                    </span>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="{{url('/admin/messages')}}"
                                                   class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Messages</a>

                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Item-->

                                </div>
                                <!--end::Items-->

                                <!--begin::Chart-->
                                <div id="kt_tiles_widget_8_chart" class="card-rounded-bottom" data-color="danger"
                                     style="height: 150px"></div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Tiles Widget 8-->
                    </div>
                    <div class="col-xl-8">
                        <div class="row">
                            <div class="col-xl-3">
                                <!--begin::Tiles Widget 9-->
                                <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b"
                                     style="height: 150px; background-image: url({{asset('/media/stock-600x400/img-26.jpg')}})">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex flex-column">
                                        <!--begin::Title-->
                                        <a href="{{url('/admin/solutions')}}"
                                           class="text-white text-hover-primary font-weight-bolder font-size-h3">Solutions</a>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tiles Widget 9-->
                            </div>
                            <div class="col-xl-9">
                                <!--begin::Mixed Widget 10-->
                                <div class="card card-custom gutter-b" style="height: 150px">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                                        <div class="mr-2">
                                            <h3 class="font-weight-bolder">Create New Solution</h3>
                                            {{--                                            <div class="text-dark-50 font-size-lg mt-2">--}}
                                            {{--                                                Generate the latest CRM Report--}}
                                            {{--                                            </div>--}}
                                        </div>
                                        <a href="{{'/admin/solutions/create'}}"
                                           class="btn btn-primary font-weight-bold py-3 px-6">Create</a>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Mixed Widget 10-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Tiles Widget 11-->
                                        <div class="card card-custom bg-success gutter-b" style="height: 150px">
                                            <div class="card-body">
                                                <span class="svg-icon svg-icon-3x svg-icon-white ml-n2"><!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                        viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                                                <path
                                                                    d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                                    fill="#000000" opacity="0.3"/>
                                                            </g>
                                                        </svg><!--end::Svg Icon-->
                                                </span>
                                                <div
                                                    class="text-inverse-success font-weight-bolder font-size-h2 mt-3"></div>

                                                <a href="{{url('/admin/supports')}}"
                                                   class="text-inverse-success font-weight-bold font-size-lg mt-1">All Donations</a>
                                            </div>
                                        </div>
                                        <!--end::Tiles Widget 11-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Tiles Widget 12-->
                                        <div class="card card-custom gutter-b" style="height: 150px">
                                            <div class="card-body">
                                                <span class="svg-icon svg-icon-3x svg-icon-success"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg--><svg
                                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                        viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M7,11 L15,11 C16.1045695,11 17,10.1045695 17,9 L17,8 L19,8 L19,9 C19,11.209139 17.209139,13 15,13 L7,13 L7,15 C7,15.5522847 6.55228475,16 6,16 C5.44771525,16 5,15.5522847 5,15 L5,9 C5,8.44771525 5.44771525,8 6,8 C6.55228475,8 7,8.44771525 7,9 L7,11 Z" fill="#000000" opacity="0.3"/>
                                                                <path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero"/>
                                                                <path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero"/>
                                                                <path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero"/>
                                                            </g>
                                                        </svg><!--end::Svg Icon-->
                                                </span>
                                                <div
                                                    class="text-dark font-weight-bolder font-size-h2 mt-3"></div>

                                                <a href="{{url('/admin/users')}}"
                                                   class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">Categories</a>
                                            </div>
                                        </div>
                                        <!--end::Tiles Widget 12-->
                                    </div>
                                </div>
                                <!--begin::Tiles Widget 13-->
                                <div class="card card-custom bgi-no-repeat gutter-b"
                                     style="height: 225px; background-color: #663259; background-position: calc(100% + 0.5rem) 100%; background-size: 100% auto; background-image: url({{asset('/media/svg/patterns/taieri.svg')}})">

                                    <!--begin::Body-->
                                    <div class="card-body d-flex align-items-center">
                                        <div>
                                            <h3 class="text-white font-weight-bolder line-height-lg mb-5">Levels</h3>
                                            <a href='{{url('admin/levels')}}' class="btn btn-success font-weight-bold px-6 py-3">Show</a>
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Tiles Widget 13-->
                            </div>
                            <div class="col-xl-6">
                                <!--begin::Mixed Widget 14-->
                                <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b card-stretch"
                                     style="background-image: url({{asset('/media/stock-600x600/img-16.jpg')}})">
                                    <!--begin::Body-->
                                    <div class="card-body d-flex flex-column align-items-start justify-content-start">
                                        <div class="p-1 flex-grow-1">
                                            <h3 class="text-white font-weight-bolder line-height-lg mb-5">Messages</h3>
                                        </div>

                                        <a href='{{url('/admin/messages')}}' class="btn btn-link btn-link-warning font-weight-bold">
                                            View all messages
                                            <span class="svg-icon svg-icon-lg svg-icon-warning"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                                            <rect fill="#000000" opacity="0.3"
                                                                  transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11"
                                                                  y="5" width="2" height="14" rx="1"/>
                                                            <path
                                                                d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
                                                        </g>
                                                    </svg><!--end::Svg Icon--></span> </a>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Mixed Widget 14-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Row-->

            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->


@endsection


