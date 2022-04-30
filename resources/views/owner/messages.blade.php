@extends('layouts.owner.master')
@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                        No Aside	                	            </h5>
                    <!--end::Page Title-->

                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">
                                General	                        	</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="" class="text-muted">
                                No Aside	                        	</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->
                <a href="#" class="btn btn-light-primary font-weight-bolder btn-sm">
                    Actions
                </a>
                <!--end::Actions-->

                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                    <a href="#" class="btn btn-icon"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-success svg-icon-2x"><!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>                </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 m-0">
                        <!--begin::Navigation-->
                        <ul class="navi navi-hover">
                            <li class="navi-header font-weight-bold py-4">
                                <span class="font-size-lg">Choose Label:</span>
                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                            </li>
                            <li class="navi-separator mb-3 opacity-70"></li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-success">Customer</span>
            </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-danger">Partner</span>
            </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-warning">Suplier</span>
            </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-primary">Member</span>
            </span>
                                </a>
                            </li>
                            <li class="navi-item">
                                <a href="#" class="navi-link">
            <span class="navi-text">
                <span class="label label-xl label-inline label-light-dark">Staff</span>
            </span>
                                </a>
                            </li>
                            <li class="navi-separator mt-3 opacity-70"></li>
                            <li class="navi-footer py-4">
                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                    <i class="ki ki-plus icon-sm"></i>
                                    Add new
                                </a>
                            </li>
                        </ul>
                        <!--end::Navigation-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->


    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        @include('layouts.owner.Sidebar')
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <!--begin::Aside-->
                            <div class="flex-row-auto offcanvas-mobile col-12 col-md-4" id="kt_chat_aside">
                                <!--begin::Card-->
                                <div class="card card-custom">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin:Search-->
                                        <div class="input-group input-group-solid">
                                            <div class="input-group-prepend">
                        <span class="input-group-text" >
                             <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>                        </span>
                                            </div>
                                            <input type="text" class="form-control py-4 h-auto" placeholder="Email" />
                                        </div>
                                        <!--end:Search-->

                                        <!--begin:Users-->
                                        <div class="mt-7 scroll scroll-pull">
                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_12.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Matt Pears</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Head of Development</span>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">35 mins</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_11.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Charlie Stone</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Art Director</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">7 hrs</span>
                                                    <span class="label label-sm label-success">4</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_10.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Teresa Fox</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Web Designer</span>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">3 hrs</span>
                                                    <span class="label label-sm label-danger">5</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_13.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Giannis Nelson</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">IT Consultant</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">2 days</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_15.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Carles Puyol</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Operator</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">5 mins</span>
                                                    <span class="label label-sm label-success">9</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_16.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Ana Torn</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Head Of Finance</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">2 days</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_18.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Lisa Pears</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Web Designer</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">6 mins</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_20.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Amanda Bold</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Art Director</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">3 hrs</span>
                                                    <span class="label label-sm label-warning">7</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_21.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Nick Jhonson</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">IT Consultant</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">10 mins</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_19.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Sarah Larson</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Web Designer</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">4 hrs</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_22.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Matt Pears</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Head of Development</span>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">35 mins</span>
                                                    <span class="label label-sm label-success">5</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_23.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Tim Stone</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Web Developer</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">5 hrs</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_17.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Jhon Richardson</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Head of Development</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">1 week</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_18.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Ana Kiskia</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Web Master</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">35 mins</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_14.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Nick Stone</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Art Director</span>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">3 hrs</span>
                                                </div>
                                            </div>
                                            <!--end:User-->

                                            <!--begin:User-->
                                            <div class="d-flex align-items-center justify-content-between mb-5">
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-circle symbol-50 mr-3">
                                                        <img alt="Pic" src="assets/media/users/300_13.jpg"/>
                                                    </div>
                                                    <div class="d-flex flex-column">
                                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg">Nick Nilson</a>
                                                        <span class="text-muted font-weight-bold font-size-sm">Software Arcitect</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column align-items-end">
                                                    <span class="text-muted font-weight-bold font-size-sm">3 days</span>
                                                </div>
                                            </div>
                                            <!--end:User-->
                                        </div>
                                        <!--end:Users-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Aside-->

                            <!--begin::Content-->
                            <div class="flex-row-fluid col-12 col-md-8"  id="kt_chat_content">
                                <!--begin::Card-->
                                <div class="card card-custom">
                                    <!--begin::Header-->
                                    <div class="card-header align-items-center px-4 py-3">
                                        <div class="text-left flex-grow-1">
                                            <!--begin::Aside Mobile Toggle-->
                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md d-lg-none" id="kt_app_chat_toggle">
                        <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Adress-book2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3"/>
        <path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>                    </button>
                                            <!--end::Aside Mobile Toggle-->

                                            <!--begin::Dropdown Menu-->
                                            <div class="dropdown dropdown-inline">
                                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ki ki-bold-more-hor icon-md"></i>
                                                </button>
                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-left dropdown-menu-md">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover py-5">
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                                                <span class="navi-text">New Group</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                                                <span class="navi-text">Contacts</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                                                <span class="navi-text">Groups</span>
                                                                <span class="navi-link-badge">
                <span class="label label-light-primary label-inline font-weight-bold">new</span>
            </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                                <span class="navi-text">Calls</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                                                <span class="navi-text">Settings</span>
                                                            </a>
                                                        </li>

                                                        <li class="navi-separator my-3"></li>

                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                                                <span class="navi-text">Help</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                                <span class="navi-text">Privacy</span>
                                                                <span class="navi-link-badge">
                <span class="label label-light-danger label-rounded font-weight-bold">5</span>
            </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                            <!--end::Dropdown Menu-->
                                        </div>
                                        <div class="text-center flex-grow-1">
                                            <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                                            <div>
                                                <span class="label label-sm label-dot label-success"></span>
                                                <span class="font-weight-bold text-muted font-size-sm">Active</span>
                                            </div>
                                        </div>
                                        <div class="text-right flex-grow-1">
                                            <!--begin::Dropdown Menu-->
                                            <div class="dropdown dropdown-inline">
                                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>                        </button>
                                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover py-5">
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-drop"></i></span>
                                                                <span class="navi-text">New Group</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-list-3"></i></span>
                                                                <span class="navi-text">Contacts</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-rocket-1"></i></span>
                                                                <span class="navi-text">Groups</span>
                                                                <span class="navi-link-badge">
                <span class="label label-light-primary label-inline font-weight-bold">new</span>
            </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                                <span class="navi-text">Calls</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-gear"></i></span>
                                                                <span class="navi-text">Settings</span>
                                                            </a>
                                                        </li>

                                                        <li class="navi-separator my-3"></li>

                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-magnifier-tool"></i></span>
                                                                <span class="navi-text">Help</span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-icon"><i class="flaticon2-bell-2"></i></span>
                                                                <span class="navi-text">Privacy</span>
                                                                <span class="navi-link-badge">
                <span class="label label-light-danger label-rounded font-weight-bold">5</span>
            </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                            <!--end::Dropdown Menu-->
                                        </div>
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Scroll-->
                                        <div class="scroll scroll-pull" data-mobile-height="350">
                                            <!--begin::Messages-->
                                            <div class="messages">
                                                <!--begin::Message In-->
                                                <div class="d-flex flex-column mb-5 align-items-start">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                                            <img alt="Pic" src="assets/media/users/300_12.jpg"/>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                            <span class="text-muted font-size-sm">2 Hours</span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                        How likely are you to recommend our company
                                                        to your friends and family?
                                                    </div>
                                                </div>
                                                <!--end::Message In-->

                                                <!--begin::Message Out-->
                                                <div class="d-flex flex-column mb-5 align-items-end">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <span class="text-muted font-size-sm">3 minutes</span>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                        </div>
                                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                                            <img alt="Pic" src="assets/media/users/300_21.jpg"/>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                        Hey there, we’re just writing to let you know
                                                        that you’ve been subscribed to a repository on GitHub.
                                                    </div>
                                                </div>
                                                <!--end::Message Out-->

                                                <!--begin::Message In-->
                                                <div class="d-flex flex-column mb-5 align-items-start">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                                            <img alt="Pic" src="assets/media/users/300_21.jpg"/>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                            <span class="text-muted font-size-sm">40 seconds</span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                        Ok, Understood!
                                                    </div>
                                                </div>
                                                <!--end::Message In-->

                                                <!--begin::Message Out-->
                                                <div class="d-flex flex-column mb-5 align-items-end">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <span class="text-muted font-size-sm">Just now</span>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                        </div>
                                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                                            <img alt="Pic" src="assets/media/users/300_21.jpg"/>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                        You’ll receive notifications for all issues, pull requests!
                                                    </div>
                                                </div>
                                                <!--end::Message Out-->

                                                <!--begin::Message In-->
                                                <div class="d-flex flex-column mb-5 align-items-start">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                                            <img alt="Pic" src="assets/media/users/300_12.jpg"/>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                            <span class="text-muted font-size-sm">40 seconds</span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                        You can unwatch this repository immediately by clicking here: <a href="#">https://github.com</a>
                                                    </div>
                                                </div>
                                                <!--end::Message In-->

                                                <!--begin::Message Out-->
                                                <div class="d-flex flex-column mb-5 align-items-end">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <span class="text-muted font-size-sm">Just now</span>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                        </div>
                                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                                            <img alt="Pic" src="assets/media/users/300_21.jpg"/>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                        Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed
                                                    </div>
                                                </div>
                                                <!--end::Message Out-->

                                                <!--begin::Message In-->
                                                <div class="d-flex flex-column mb-5 align-items-start">
                                                    <div class="d-flex align-items-center">
                                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                                            <img alt="Pic" src="assets/media/users/300_12.jpg"/>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                            <span class="text-muted font-size-sm">40 seconds</span>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                        Most purchased Business courses during this sale!
                                                    </div>
                                                </div>
                                                <!--end::Message In-->

                                                <!--begin::Message Out-->
                                                <div class="d-flex flex-column mb-5 align-items-end">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <span class="text-muted font-size-sm">Just now</span>
                                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                        </div>
                                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                                            <img alt="Pic" src="assets/media/users/300_21.jpg"/>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                        Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided
                                                    </div>
                                                </div>
                                                <!--end::Message Out-->
                                            </div>
                                            <!--end::Messages-->
                                        </div>
                                        <!--end::Scroll-->
                                    </div>
                                    <!--end::Body-->

                                    <!--begin::Footer-->
                                    <div class="card-footer align-items-center">
                                        <!--begin::Compose-->
                                        <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                                        <div class="d-flex align-items-center justify-content-between mt-5">
                                            <div class="mr-3">
                                                <a href="#" class="btn btn-clean btn-icon btn-md mr-1"><i class="flaticon2-photograph icon-lg"></i></a>
                                                <a href="#" class="btn btn-clean btn-icon btn-md"><i class="flaticon2-photo-camera  icon-lg"></i></a>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                                            </div>
                                        </div>
                                        <!--begin::Compose-->
                                    </div>
                                    <!--end::Footer-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <!--end::Content-->
                        </div>
                    </div>


                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->

        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">


                <!--begin::Row-->
                <div class="row">

{{--                    @foreach($projects as $key=>$project)--}}
{{--                        @if($project->status == 2)--}}
{{--                            <div class="col-md-4">--}}
{{--                                <!--begin::Nav Panel Widget 4-->--}}
{{--                                <div class="card card-custom card-stretch gutter-b">--}}
{{--                                    <!--begin::Body-->--}}
{{--                                    <div class="card-body px-6">--}}
{{--                                        <!--begin::Wrapper-->--}}
{{--                                        <div class="d-flex justify-content-between flex-column h-100">--}}
{{--                                            <!--begin::Container-->--}}
{{--                                            <div class="h-100">--}}
{{--                                                <!--begin::Header-->--}}
{{--                                                <div class="d-flex flex-column flex-center" >--}}
{{--                                                    <!--begin::Image-->--}}
{{--                                                    <div class="bgi-no-repeat bgi-size-cover rounded min-h-180px w-100" style="background-image: url({{asset($project->project_image[0]->media_path)}})"></div>--}}
{{--                                                    <!--end::Image-->--}}
{{--                                                    <!--begin::Title-->--}}
{{--                                                    <a href="{{url("owner/project/$project->id/view")}}" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">--}}
{{--                                                        <h3>{{$project->title ?? ''}}</h3>--}}
{{--                                                    </a>--}}
{{--                                                    <!--end::Title-->--}}

{{--                                                    <!--begin::Text-->--}}
{{--                                                    --}}{{--                                            <div class="font-weight-bold text-dark-50 font-size-sm pb-7"></div>--}}
{{--                                                    <input type="text" class="d-none" id="deadline-{{$key}}" value="{{$project->deadline}}">--}}
{{--                                                    <!--end::Text-->--}}
{{--                                                    <p class="pcounter p-0 m-0" id="demo-{{$key}}"></p>--}}

{{--                                                    <script>--}}
{{--                                                        var deadline{{$key}} = document.getElementById('deadline-{{$key}}').value;--}}
{{--                                                        var countDownDate{{$key}} = new Date(deadline{{$key}}).getTime();--}}

{{--                                                        // Update the count down every 1 second--}}
{{--                                                        var x{{$key}} = setInterval(function() {--}}

{{--                                                            // Get today's date and time--}}
{{--                                                            var now{{$key}} = new Date().getTime();--}}
{{--                                                            // Find the distance between now and the count down date--}}
{{--                                                            var distance{{$key}} = countDownDate{{$key}} - now{{$key}};--}}

{{--                                                            // Time calculations for days, hours, minutes and seconds--}}
{{--                                                            var days{{$key}} = Math.floor(distance{{$key}} / (1000 * 60 * 60 * 24));--}}
{{--                                                            var hours{{$key}} = Math.floor((distance{{$key}} % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));--}}
{{--                                                            var minutes{{$key}} = Math.floor((distance{{$key}} % (1000 * 60 * 60)) / (1000 * 60));--}}
{{--                                                            var seconds{{$key}} = Math.floor((distance{{$key}} % (1000 * 60)) / 1000);--}}
{{--                                                            // Output the result in an element with id="demo"--}}


{{--                                                            // If the count down is over, write some text--}}
{{--                                                            if (distance{{$key}} < 0) {--}}
{{--                                                                document.getElementById('demo-{{$key}}').innerHTML = "EXPIRED";--}}
{{--                                                                document.getElementById('demo-{{$key}}').style.color = "red";--}}
{{--                                                                clearInterval(x);--}}
{{--                                                            }else{--}}
{{--                                                                document.getElementById('demo-{{$key}}').innerHTML = days{{$key}} + "d " + hours{{$key}} + "h "--}}
{{--                                                                    + minutes{{$key}} + "m " + seconds{{$key}} + "s ";--}}
{{--                                                            }--}}
{{--                                                        }, 1000);--}}
{{--                                                    </script>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Header-->--}}
{{--                                            </div>--}}
{{--                                            <!--eng::Container-->--}}

{{--                                            <!--begin::Footer-->--}}
{{--                                            <div class="d-flex flex-center mt-md-2" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="" data-placement="right" data-original-title="">--}}
{{--                                                <h6 class="col-6 px-0">Price : {{$project->net_price ?? ''}} $</h6>--}}

{{--                                                <a href="{{url("owner/project/$project->id/view")}}" class="btn btn-outline-primary font-weight-bolder font-size-sm py-3 px-14">View</a>--}}
{{--                                            </div>--}}
{{--                                            <!--end::Footer-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Wrapper-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Body-->--}}
{{--                                </div>--}}
{{--                                <!--end::Nav Panel Widget 4-->--}}
{{--                            </div>--}}
{{--                        @else--}}
{{--                            <div class="col-md-4">--}}
{{--                                <!--begin::Nav Panel Widget 4-->--}}
{{--                                <div class="card card-custom card-stretch gutter-b">--}}
{{--                                    <!--begin::Body-->--}}
{{--                                    <div class="card-body">--}}
{{--                                        <!--begin::Wrapper-->--}}
{{--                                        <div class="d-flex justify-content-between flex-column h-100">--}}
{{--                                            <!--begin::Container-->--}}
{{--                                            <div class="h-100">--}}
{{--                                                <!--begin::Header-->--}}
{{--                                                <div class="d-flex flex-column flex-center">--}}
{{--                                                    <!--begin::Image-->--}}
{{--                                                    <div class="bgi-no-repeat bgi-size-cover rounded min-h-180px w-100" style="background-image: url({{asset($project->project_image[0]->media_path)}})"></div>--}}
{{--                                                    <!--end::Image-->--}}

{{--                                                    <!--begin::Title-->--}}
{{--                                                    <a href="{{url("owner/project/$project->id/view")}}" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">{{$project->title ?? ''}}</a>--}}
{{--                                                    <!--end::Title-->--}}

{{--                                                    <!--begin::Text-->--}}
{{--                                                    <div class="font-weight-bold text-dark-50 font-size-sm ">--}}
{{--                                                        <h6 class="mt-3">Finished at : {{date('Y-M-d', strtotime($project->deadline))}}</h6>--}}
{{--                                                    </div>--}}
{{--                                                    <!--end::Text-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Header-->--}}
{{--                                            </div>--}}
{{--                                            <!--eng::Container-->--}}

{{--                                            <!--begin::Footer-->--}}
{{--                                            <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="" data-placement="right" data-original-title="">--}}
{{--                                                <h6 class="col-6 m-0 p-0">Price : {{$project->net_price ?? ''}} $</h6>--}}

{{--                                                <a href="{{url("owner/project/$project->id/view")}}" class="btn btn-outline-primary font-weight-bolder font-size-sm py-3 px-14">View</a>--}}
{{--                                            </div>--}}
{{--                                            <!--end::Footer-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Wrapper-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Body-->--}}
{{--                                </div>--}}
{{--                                <!--end::Nav Panel Widget 4-->--}}
{{--                            </div>--}}

{{--                        @endif--}}
{{--                    @endforeach--}}
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
    </div>
    <!--end::Content-->
@endsection
