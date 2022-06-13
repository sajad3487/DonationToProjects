@extends('layouts.owner.master')

@section('content')

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" >
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        @include('layouts.owner.Sidebar')
                    </div>
                    <div class="col-12 col-md-8">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="d-flex align-items-baseline flex-wrap mr-5 mt-5">
                                    <!--begin::Page Title-->
                                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                                        {{$solution->title ?? ''}}
                                    </h5>
                                    <!--end::Page Title-->

                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                        <li class="breadcrumb-item">
                                            <a href="{{url('owner/solutions')}}" class="text-muted">
                                                Solutions
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <div href="" class="text-muted">
                                                Edit solution
                                            </div>
                                        </li>
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <div class="card-toolbar">
                                    @if($solution->status == 1 )
                                        @if(isset($solution->main_image) && $solution->main_image != null)
                                        <a href=""  data-toggle="modal" data-target="#publish_solution_{{$solution->id ?? ''}}" class="btn btn-warning font-weight-bold mr-2">Publish the Solution</a>
                                            <div class="modal fade" id="publish_solution_{{$solution->id ?? ''}}" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Publish the solution</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i aria-hidden="true" class="ki ki-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!--begin::Form-->
                                                            <div class="card-body text-center">
                                                                <h3 class="mb-4">Are you sure you want to publish "{{$solution->title ?? ''}}" ?</h3>
                                                                <p class="my-4">You can't change the primary information after publishing the solution. You can change media, documents, and the location of the solution. </p>

                                                                    <input type="number" class="d-none" name="user_id" value="{{$solution->id ?? ''}}">
                                                                    <button data-dismiss="modal" aria-label="Close" class="btn btn-light font-weight-bolder mr-5">
                                                                        Cancel
                                                                    </button>
                                                                    <a href="{{url("owner/solutions/$solution->id/publish")}}" type="submit" class="btn btn-success font-weight-bolder">
                                                                        Publish
                                                                    </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <button type="button" class="btn btn-warning" data-toggle="popover" data-trigger="click" title="Requirement for publishing" data-content="You should upload a photo for your solution before publishing that">
                                                Publish the Solution
                                            </button>
                                        @endif
                                        @elseif ($solution->status == 2 )
                                        <span class="bg-light-danger btn-sm text-danger font-weight-bold btn-upper btn-text">Waiting to approval</span>
                                        @elseif ($solution->status == 3)
                                        <span class="bg-light-success btn-sm text-success font-weight-bold btn-upper btn-text">Published</span>
                                        @endif
                                </div>

                            </div>

                            <div class="card">
                                <div class="card-header card-header-tabs-line">
                                    <div class="card-toolbar">
                                        <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-bold nav-tabs-line-3x" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link mx-2 active" data-toggle="tab" href="#kt_apps_contacts_view_tab_1" >
                                                    <span class="nav-icon ">
                                                        <span class="svg-icon "><!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000"/>
                                                                    <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5"/>
                                                                </g>
                                                            </svg><!--end::Svg Icon--></span>
                                                    </span>
                                                    <span class="nav-text">
                                                        Solution Information
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link mx-2" data-toggle="tab" href="#kt_apps_contacts_view_tab_2" >
                                                    <span class="nav-icon ">
                                                        <span class="svg-icon "><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                                    <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000"/>
                                                                </g>
                                                            </svg><!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class="nav-text">
                                                        Documents
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link mx-2" data-toggle="tab" href="#kt_apps_contacts_view_tab_7" >
                                                    <span class="nav-icon">
                                                        <span class="svg-icon "><!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                                    <path d="M6,5 L18,5 C19.6568542,5 21,6.34314575 21,8 L21,17 C21,18.6568542 19.6568542,20 18,20 L6,20 C4.34314575,20 3,18.6568542 3,17 L3,8 C3,6.34314575 4.34314575,5 6,5 Z M5,17 L14,17 L9.5,11 L5,17 Z M16,14 C17.6568542,14 19,12.6568542 19,11 C19,9.34314575 17.6568542,8 16,8 C14.3431458,8 13,9.34314575 13,11 C13,12.6568542 14.3431458,14 16,14 Z" fill="#000000"/>
                                                                </g>
                                                            </svg><!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class="nav-text">
                                                        Location
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link mx-2" data-toggle="tab" href="#kt_apps_contacts_view_tab_3" >
                                                    <span class="nav-icon">
                                                        <span class="svg-icon "><!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                                    <path d="M6,5 L18,5 C19.6568542,5 21,6.34314575 21,8 L21,17 C21,18.6568542 19.6568542,20 18,20 L6,20 C4.34314575,20 3,18.6568542 3,17 L3,8 C3,6.34314575 4.34314575,5 6,5 Z M5,17 L14,17 L9.5,11 L5,17 Z M16,14 C17.6568542,14 19,12.6568542 19,11 C19,9.34314575 17.6568542,8 16,8 C14.3431458,8 13,9.34314575 13,11 C13,12.6568542 14.3431458,14 16,14 Z" fill="#000000"/>
                                                                </g>
                                                            </svg><!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class="nav-text">
                                                        Media
                                                    </span>
                                                </a>
                                            </li>
                                            @if($solution->status == 3)
                                            <li class="nav-item ">
                                                <a class="nav-link mx-2" data-toggle="tab" href="#kt_apps_contacts_view_tab_4" >
                                                    <span class="nav-icon ">
                                                        <span class="svg-icon "><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1"/>
                                                                    <rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1"/>
                                                                    <path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000"/>
                                                                </g>
                                                            </svg><!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class="nav-text">
                                                        Supports
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link mx-2" data-toggle="tab" href="#kt_apps_contacts_view_tab_5" >
                                                    <span class="nav-icon ">
                                                        <span class="svg-icon "><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5"/>
                                                                    <path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M9,8 C8.44771525,8 8,8.44771525 8,9 C8,9.55228475 8.44771525,10 9,10 L18,10 C18.5522847,10 19,9.55228475 19,9 C19,8.44771525 18.5522847,8 18,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 C8,13.5522847 8.44771525,14 9,14 L14,14 C14.5522847,14 15,13.5522847 15,13 C15,12.4477153 14.5522847,12 14,12 L9,12 Z" fill="#000000"/>
                                                                </g>
                                                            </svg><!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class="nav-text">
                                                        Comments
                                                    </span>
                                                </a>
                                            </li>

                                            <li class="nav-item ">
                                                <a class="nav-link mx-2" data-toggle="tab" href="#kt_apps_contacts_view_tab_6" >
                                                    <span class="nav-icon ">
                                                        <span class="svg-icon "><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <polygon fill="#000000" opacity="0.3" points="5 15 3 21.5 9.5 19.5"/>
                                                                    <path d="M13.5,21 C8.25329488,21 4,16.7467051 4,11.5 C4,6.25329488 8.25329488,2 13.5,2 C18.7467051,2 23,6.25329488 23,11.5 C23,16.7467051 18.7467051,21 13.5,21 Z M9,8 C8.44771525,8 8,8.44771525 8,9 C8,9.55228475 8.44771525,10 9,10 L18,10 C18.5522847,10 19,9.55228475 19,9 C19,8.44771525 18.5522847,8 18,8 L9,8 Z M9,12 C8.44771525,12 8,12.4477153 8,13 C8,13.5522847 8.44771525,14 9,14 L14,14 C14.5522847,14 15,13.5522847 15,13 C15,12.4477153 14.5522847,12 14,12 L9,12 Z" fill="#000000"/>
                                                                </g>
                                                            </svg><!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                    <span class="nav-text">
                                                        Report
                                                    </span>
                                                </a>
                                            </li>
                                                @endif
                                        </ul>
                                    </div>
                                </div>
                                <!--end::Header-->

                                <!--begin::Body-->
                                <div class="card-body p-0">
                                    <div class="tab-content">
                                        <!--begin::Tab Content-->
                                        <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                                            <div class="container">
                                                @if($solution->status == 3)
                                                    <div class="alert alert-custom alert-light-primary fade show py-2 px-6 mt-2 mb-0" role="alert">
                                                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                                        <div class="alert-text">The solution is published. You can't change the primary information about that. You can change media, documents, and the location of the solution.</div>
                                                        <div class="alert-close">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    @endif
                                                <form  action="{{url("/owner/solutions/$solution->id/update")}}" method="post" class="p-5" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="card-body p-3">
                                                        @include('fragment.error')
                                                        <div class="form-group mt-1">
                                                            <label>Title</label>
                                                            <input type="text" name="title" class="form-control" value="{{$solution->title ?? ''}}" @if($solution->status == 3) disabled @endif/>
                                                            <span class="form-text text-muted">Enter less than 250 character.</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group mt-1">
                                                                    <label for="exampleSelect1">Category</label>
                                                                    <select class="form-control" id="exampleSelect1" name="category_id" @if($solution->status == 3) disabled @endif required>
                                                                        <option>Select a category for the solution</option>
                                                                        @foreach($categories as $category)
                                                                            <option @if($solution->category_id == $category->id) selected @endif value="{{$category->id ?? ''}}">{{$category->title ?? ''}}</option>
                                                                            @foreach($category->activeSubCat as $subCategory)
                                                                                <option @if($solution->category_id == $subCategory->id) selected @endif value="{{$subCategory->id ?? ''}}"> ---- {{'  '.$subCategory->title ?? ''}}</option>
                                                                            @endforeach
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-6">
                                                                <div class="form-group mt-1">
                                                                    <label for="example-number-input" class="">Goal:</label>
                                                                    <div class="">
                                                                        <input class="form-control" type="number" name="goal_amount" id="example-number-input" value="{{$solution->goal_amount ?? ''}}" @if($solution->status == 3) disabled @endif/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <label for="exampleInputPassword1">Brief description:</label>
                                                            <input type="text" name="brief_description" class="form-control" value="{{$solution->brief_description ?? ''}}" placeholder="Enter the brief description of the solution" @if($solution->status == 3) disabled @endif/>
                                                            <span class="form-text text-muted">Enter less than 250 character.</span>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <label for="exampleTextarea">Description:</label>
                                                            <textarea class="form-control" name="description" rows="2" @if($solution->status == 3) disabled @endif>{{$solution->description ?? ''}}</textarea>
                                                            <span class="form-text text-muted">Enter less than 5000 character.</span>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <label for="exampleTextarea1">What is the problem that we would like to solve?</label>
                                                            <textarea class="form-control" name="issue" rows="2" @if($solution->status == 3) disabled @endif>{{$solution->issue ?? ''}}</textarea>
                                                            <span class="form-text text-muted">Enter less than 5000 character.</span>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <label for="exampleTextarea2">What is our solution (including goals)?</label>
                                                            <textarea class="form-control" name="solution" rows="2" @if($solution->status == 3) disabled @endif>{{$solution->solution ?? ''}}</textarea>
                                                            <span class="form-text text-muted">Enter less than 5000 character.</span>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <label for="exampleTextarea3">What is our action? </label>
                                                            <textarea class="form-control" name="our_function" rows="2" @if($solution->status == 3) disabled @endif>{{$solution->our_function ?? ''}}</textarea>
                                                            <span class="form-text text-muted">Enter less than 5000 character.</span>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <label for="exampleTextarea4">Why do we choose the above solution? </label>
                                                            <textarea class="form-control"  name="reason" rows="2" @if($solution->status == 3) disabled @endif>{{$solution->reason ?? ''}}</textarea>
                                                            <span class="form-text text-muted">Enter less than 5000 character.</span>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <label for="exampleTextarea5">What kind of impacts do we want to see? </label>
                                                            <textarea class="form-control" name="effect" rows="2" @if($solution->status == 3) disabled @endif>{{$solution->effect ?? ''}}</textarea>
                                                            <span class="form-text text-muted">Enter less than 5000 character.</span>
                                                        </div>
                                                        <div class="form-group mt-1">
                                                            <label for="exampleTextarea5">Other Note </label>
                                                            <textarea class="form-control" name="other_note" rows="2" @if($solution->status == 3) disabled @endif>{{$solution->other_note ?? ''}}</textarea>
                                                            <span class="form-text text-muted">Enter less than 5000 character.</span>
                                                        </div>
                                                        <div class="form-group mt-1 col-12 col-md-6 p-0">
                                                            <label>Responsible Person</label>
                                                            <input type="text" name="responsible_person" class="form-control"  value="{{$solution->responsible_person ?? ''}}" @if($solution->status == 3) disabled @endif/>
                                                            <span class="form-text text-muted">Enter less than 250 character.</span>
                                                        </div>
                                                    </div>
                                                    @if($solution->status != 3)
                                                    <div class="card-footer text-center">
                                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                    </div>
                                                        @endif
                                                </form>
                                            </div>
                                        </div>
                                        <!--end::Tab Content-->

                                        <!--begin::Tab Content-->
                                        <div class="tab-pane p-5" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                                            <div class="row">
                                                <a href="" data-toggle="modal" data-target="#files_{{$media->id ?? ''}}" class="btn btn-light-warning font-weight-bold ml-auto mr-5">Upload Document</a>
                                            </div>
                                            <div class="modal fade" id="files_{{$media->id ?? ''}}" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Upload new document</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i aria-hidden="true" class="ki ki-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body row">

                                                            <div class="col-md-12">
                                                                <form action="{{url('owner/solutions/media/store')}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="card-body p-0">
                                                                        <div class="form-group">
                                                                            <label>File title:</label>
                                                                            <input type="text" name="title" class="form-control"  placeholder="Enter file title"/>
                                                                        </div>
                                                                        <div class="form-group mb-1">
                                                                            <label for="exampleTextarea">Caption:</label>
                                                                            <textarea class="form-control" type="text" name="caption" id="exampleTextarea" rows="3"></textarea>
                                                                        </div>
                                                                        <div class="form-group mt-5">
                                                                            <label for="exampleSelect1">Type of file:</label>
                                                                            <select class="form-control" id="exampleSelect1" name="media_type">
                                                                                <option value="wordDocument">Word Document</option>
                                                                                <option value="PDF">PDF</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group mt-5">
                                                                            <label>File Browser:</label>
                                                                            <div></div>
                                                                            <div class="custom-file">
                                                                                <input type="file" class="custom-file-input" name="file" id="customFile" required/>
                                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                                            </div>
                                                                        </div>
                                                                        <input type="text" name="type" value="solution_media" class="d-none">
                                                                        <input type="number" name="owner_id" value="{{$solution->id ?? ''}}" class="d-none">
                                                                    </div>
                                                                    <div class="card-footer text-center">
                                                                        <button type="submit" class="btn btn-primary px-10">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Caption</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($solution->medias as $media_key=>$media)
                                                        <tr>
                                                            <th scope="row">{{$media_key +1 }}</th>
                                                            <td>{{$media->media_type ?? ''}}</td>
                                                            <td>{{$media->title ?? ''}}</td>
                                                            <td>{{$media->caption ?? ''}}</td>
                                                            <td>
                                                                <a href="{{url($media->media_path)}}" target="_blank">
                                                                    <i class="flaticon-download text-success mr-5"></i>
                                                                </a>
                                                                <a href="" data-toggle="modal" data-target="#delete_solution_{{$media->id ?? ''}}">
                                                                    <i class="fas fa-trash-alt text-danger mr-5"></i>
                                                                </a>
                                                                <div class="modal fade" id="delete_solution_{{$media->id ?? ''}}" role="dialog"  aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Remove the document</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <!--begin::Form-->
                                                                                <div class="card-body text-center">
                                                                                    <h3 class="mb-4">Are you sure you want to delete "{{$media->title ?? ''}}" ?</h3>
                                                                                    <p class="my-4">This solution will be remove immediately</p>

                                                                                    <form action="{{url("owner/solutions/media/$media->id/delete")}}" method="post">
                                                                                        @csrf
                                                                                        <input type="number" class="d-none" name="user_id" value="{{$solution->id ?? ''}}">
                                                                                        <button data-dismiss="modal" aria-label="Close" class="btn btn-light font-weight-bolder mr-5">
                                                                                            Cancel
                                                                                        </button>
                                                                                        <button type="submit" class="btn btn-danger font-weight-bolder">
                                                                                            Delete
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                </tbody>
                                            </table>


                                        </div>
                                        <!--end::Tab Content-->
                                        <!--begin::Tab Content-->
                                        <div class="tab-pane" id="kt_apps_contacts_view_tab_7" role="tabpanel">
                                            <!--begin::Forms Widget 11-->
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b">
                                                <div class="card-body">
                                                    <div class=" col-12 @if($solution->e_location == null || $solution->w_location == null) d-none @endif">
                                                        <div id="kt_leaflet_1" style="height:300px;"></div>
                                                        <a href="{{url("owner/solutions/location/$solution->id/edit")}}" class="btn btn-light-warning font-weight-bold mr-5 mt-5 col-auto ml-auto">Change location</a>

                                                    </div>
                                                    <div class=" col-12  @if($solution->e_location != null && $solution->w_location != null) d-none @endif">
                                                        <div id="kt_leaflet_5" style="height:300px;"></div>
                                                        <form action="{{url("owner/solutions/location/store")}}" method="post">
                                                            @csrf
                                                            <input type="text" class="d-none" name="e_location" id="e_location" required>
                                                            <input type="text" class="d-none" name="w_location" id="w_location" required>
                                                            <input type="number" class="d-none" name="solution_id" value="{{$solution->id ?? ''}}" required>
                                                            <div class="row">
                                                                <button type="submit" class="btn btn-light-success font-weight-bold mr-5 mt-5 col-auto ml-auto">Save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Tab Content-->

                                        <!--begin::Tab Content-->
                                        <div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
                                            <!--begin::Forms Widget 11-->
                                            <div class="card">
                                                <!--begin::Body-->
                                                <div class="card-body pt-0">
                                                    @if(isset($solution->main_image) && $solution->main_image != null)
                                                    <!--begin::Bottom-->
                                                    <div class="">
                                                        <!--begin::Image-->
                                                        <a href="{{url($solution->main_image->media_path)}}" target="_blank" class="mt-2">
                                                            <div class="bgi-no-repeat bgi-size-cover rounded min-h-295px mt-5" style="background-image: url({{asset($solution->main_image->media_path)}})"></div>
                                                        </a>

                                                        <!--end::Image-->

                                                        <!--begin::Action-->
                                                        <div class="pt-6">
                                                            <a href="" data-toggle="modal" data-target="#edit_main_image" class="btn btn-light-warning btn-sm rounded font-weight-bolder font-size-sm p-2">
                                                                <span class="svg-icon svg-icon-md pr-2"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                            <path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                                            <rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14" rx="1"/>
                                                                            <path d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z" fill="#000000" fill-rule="nonzero"/>
                                                                        </g>
                                                                    </svg><!--end::Svg Icon-->
                                                                </span>
                                                                Change main media
                                                            </a>
                                                            <span class="form-text text-muted">It's required to publish the solution and it can be just an image</span>

                                                        </div>
                                                        <!--end::Action-->
                                                        <div class="modal fade" id="edit_main_image" role="dialog"  aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Main media</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body row">
                                                                        <div class="col-md-12">
                                                                            <form action="{{url("owner/solutions/media/".$solution->main_image->id."/update")}}" method="post" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="card-body p-0">
                                                                                    <div class="form-group">
                                                                                        <label>File title:</label>
                                                                                        <input type="text" name="title" class="form-control"  placeholder="Enter file title" value="{{$solution->main_image->title ?? ''}}"/>
                                                                                    </div>
                                                                                    <div class="form-group mb-1">
                                                                                        <label for="exampleTextarea">Caption:</label>
                                                                                        <textarea class="form-control" type="text" name="caption" id="exampleTextarea" rows="3">{{$solution->main_image->caption ?? ''}}</textarea>
                                                                                    </div>
                                                                                    <input type="text" name="media_type" value="image" class="d-none">

                                                                                    <div class="form-group mt-5">
                                                                                        <label>File Browser:</label>
                                                                                        <div></div>
                                                                                        <div class="custom-file">
                                                                                            <input type="file" class="custom-file-input" name="file" id="customFile" required/>
                                                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                                                        </div>
                                                                                        <span class="form-text text-muted">Compatible file types: jpg, gif, png, bmp</span>
                                                                                    </div>
                                                                                    <input type="text" name="type" value="solution_main_image" class="d-none">
                                                                                    <input type="number" name="owner_id" value="{{$solution->id ?? ''}}" class="d-none">
                                                                                </div>
                                                                                <div class="card-footer text-center">
                                                                                    <button type="submit" class="btn btn-primary px-10">Save</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h6 class="mt-5">
                                                            {{$solution->main_image->title ?? ''}}
                                                        </h6>
                                                        <!--begin::Text-->
                                                        <p class="text-dark-75 font-size-lg font-weight-normal pt-2 mb-6">
                                                            {{$solution->main_image->caption ?? ''}}
                                                        </p>
                                                        <!--end::Text-->
                                                    </div>
                                                        <hr>
                                                    <div>
                                                        <div class="pt-6">
                                                            <a href="" data-toggle="modal" data-target="#more_image" class="btn btn-light-success btn-sm rounded font-weight-bolder font-size-sm p-2">
                                                                <span class="svg-icon svg-icon-md pr-2"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24"/>
                                                                            <path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                                            <rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14" rx="1"/>
                                                                            <path d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z" fill="#000000" fill-rule="nonzero"/>
                                                                        </g>
                                                                    </svg><!--end::Svg Icon-->
                                                                </span>
                                                                Upload more media
                                                            </a>
                                                            <div class="modal fade" id="more_image" role="dialog"  aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Upload more media</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <i aria-hidden="true" class="ki ki-close"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body row">

                                                                            <div class="col-md-12">
                                                                                <form action="{{url('owner/solutions/media/store')}}" method="post" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    <div class="card-body p-0">
                                                                                        <div class="form-group">
                                                                                            <label>File title:</label>
                                                                                            <input type="text" name="title" class="form-control"  placeholder="Enter file title"/>
                                                                                        </div>
                                                                                        <div class="form-group mb-1">
                                                                                            <label for="exampleTextarea">Caption:</label>
                                                                                            <textarea class="form-control" type="text" name="caption" id="exampleTextarea" rows="3"></textarea>
                                                                                        </div>
                                                                                        <div class="form-group mt-5">
                                                                                            <label for="media_type_selector">Type of file:</label>
                                                                                            <select class="form-control" id="media_type_selector" onchange="changeTypeOfMedia()" name="media_type">
                                                                                                <option value="image">Image</option>
                                                                                                <option value="video">Video</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="form-group mt-5" id="input_file">
                                                                                            <label>File Browser:</label>
                                                                                            <div></div>
                                                                                            <div class="custom-file col-6">
                                                                                                <input type="file" class="custom-file-input" name="file" id="customFile"/>
                                                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                                                            </div>
                                                                                            <span class="form-text text-muted">Compatible file types: jpg, gif, png, bmp</span>

                                                                                        </div>
                                                                                        <div class="form-group" id="input_video" style="display: none">
                                                                                            <label>Video link:</label>
                                                                                            <input type="text" name="video_link" class="form-control"  placeholder="Enter your video link"/>
                                                                                            <span class="form-text text-muted">you should enter the embed link of video from Youtube</span>

                                                                                        </div>

                                                                                        <input type="text" name="type" value="solution_image" class="d-none">
                                                                                        <input type="number" name="owner_id" value="{{$solution->id ?? ''}}" class="d-none">
                                                                                    </div>
                                                                                    <div class="card-footer text-center">
                                                                                        <button type="submit" class="btn btn-primary px-10">Save</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-5">
                                                                @foreach($solution->images as $images_key=>$image)
                                                                    @if($image->media_type == "video")
                                                                        <div class="col-4 mb-3">
                                                                            <iframe style="width: 100%" src="https://www.youtube.com/embed/{{$image->media_path}}" class="rounded my-2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                                                            <div class="card card-custom overlay border mt-8">
                                                                                <div class="card-body p-0">
                                                                                    <div class="overlay-wrapper">
                                                                                    </div>
                                                                                    <div class="overlay-layer align-items-end justify-content-end pb-5 pr-5">
                                                                                        <a href="https://www.youtube.com/watch?v={{$image->media_path}}" class="btn btn-clean btn-icon mr-2" target="_blank"><i class="flaticon-download icon-lg text-success"></i></a>
                                                                                        <a href="" data-toggle="modal" data-target="#delete_image{{$image->id ?? ''}}" class="btn btn-clean btn-icon"><i class="flaticon2-rubbish-bin-delete-button icon-lg text-danger"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h6 class="mt-3">{{$image->title ?? ''}}</h6>
                                                                            <span class="text-dark-50 font-weight-normal font-size-sm">
                                                                                {{$image->caption ?? ''}}
                                                                            </span>
                                                                        </div>
                                                                    @else
                                                                        <div class="col-4 mb-3">
                                                                            <div class="card card-custom overlay">
                                                                                <div class="card-body p-0">
                                                                                    <div class="overlay-wrapper">
                                                                                    </div>
                                                                                    <div class="overlay-layer align-items-end justify-content-end pb-5 pr-5">
                                                                                        <a href="{{url($image->media_path)}}" class="btn btn-clean btn-icon mr-2" target="_blank"><i class="flaticon-download icon-lg text-success"></i></a>
                                                                                        <a href="" data-toggle="modal" data-target="#delete_image{{$image->id ?? ''}}" class="btn btn-clean btn-icon"><i class="flaticon2-rubbish-bin-delete-button icon-lg text-danger"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h6 class="mt-3">{{$image->title ?? ''}}</h6>
                                                                            <span class="text-dark-50 font-weight-normal font-size-sm">
                                                                                {{$image->caption ?? ''}}
                                                                            </span>
                                                                        </div>
                                                                    @endif
                                                                        <div class="modal fade" id="delete_image{{$image->id ?? ''}}" role="dialog"  aria-hidden="true">
                                                                            <div class="modal-dialog modal-lg" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h5 class="modal-title">Remove the media</h5>
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <!--begin::Form-->
                                                                                        <div class="card-body text-center">
                                                                                            <h3 class="mb-4">Are you sure you want to delete "{{$image->title ?? ''}}" ?</h3>
                                                                                            <p class="my-4">This solution will be remove immediately</p>

                                                                                            <form action="{{url("owner/solutions/media/$image->id/delete")}}" method="post">
                                                                                                @csrf
                                                                                                <button data-dismiss="modal" aria-label="Close" class="btn btn-light font-weight-bolder mr-5">
                                                                                                    Cancel
                                                                                                </button>
                                                                                                <button type="submit" class="btn btn-danger font-weight-bolder">
                                                                                                    Delete
                                                                                                </button>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                @endforeach

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Bottom-->
                                                        @else
                                                        <!--begin::Bottom-->
                                                            <div class="">
                                                                <!--begin::Action-->
                                                                <div class="pt-6">
                                                                    <a href="" data-toggle="modal" data-target="#new_main_image" class="btn btn-light-success btn-sm rounded font-weight-bolder font-size-sm p-2">
                                                                        <span class="svg-icon svg-icon-md pr-2"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                                    <path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                                                    <rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14" rx="1"/>
                                                                                    <path d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z" fill="#000000" fill-rule="nonzero"/>
                                                                                </g>
                                                                            </svg><!--end::Svg Icon-->
                                                                        </span>
                                                                        Select main media
                                                                    </a>
                                                                    <span class="form-text text-muted">It's required to publish the solution and it can be just an image</span>

                                                                </div>
                                                                <div class="modal fade" id="new_main_image" role="dialog"  aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Upload main media</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body row">

                                                                                <div class="col-md-12">
                                                                                    <form action="{{url('owner/solutions/media/store')}}" method="post" enctype="multipart/form-data">
                                                                                        @csrf
                                                                                        <div class="card-body p-0">
                                                                                            <div class="form-group">
                                                                                                <label>File title:</label>
                                                                                                <input type="text" name="title" class="form-control"  placeholder="Enter file title"/>
                                                                                            </div>
                                                                                            <div class="form-group mb-1">
                                                                                                <label for="exampleTextarea">Caption:</label>
                                                                                                <textarea class="form-control" type="text" name="caption" id="exampleTextarea" rows="3"></textarea>
                                                                                            </div>
                                                                                            <input type="text" name="media_type" value="image" class="d-none">
                                                                                            <div class="form-group mt-5">
                                                                                                <label>File Browser:</label>
                                                                                                <div></div>
                                                                                                <div class="custom-file">
                                                                                                    <input type="file" class="custom-file-input" name="file" id="customFile" required/>
                                                                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <input type="text" name="type" value="solution_main_image" class="d-none">
                                                                                            <input type="number" name="owner_id" value="{{$solution->id ?? ''}}" class="d-none">
                                                                                        </div>
                                                                                        <div class="card-footer text-center">
                                                                                            <button type="submit" class="btn btn-primary px-10">Save</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!--end::Action-->
                                                                <!--begin::Text-->
                                                                <p class="text-dark-75 font-size-lg font-weight-normal pt-5 mb-6">
                                                                    You haven't upload any media yet
                                                                </p>
                                                                <!--end::Text-->
                                                            </div>
                                                            <!--end::Bottom-->

                                                    @endif
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Forms Widget 11-->
                                        </div>
                                        <!--end::Tab Content-->

                                        <!--begin::Tab Content---------------------Donations-->
                                        <div class="tab-pane" id="kt_apps_contacts_view_tab_4" role="tabpanel">
                                            <div class="overflow-auto px-20">
                                                <!--begin: Datatable-->
                                                <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Solution</th>
                                                        <th>Customer</th>
                                                        <th>Solution provider</th>
                                                        <th>Amount</th>
                                                        <th>Action</th>
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
                                                            <td>
                                                                <a href="{{url("customer/solutions/$donation->solution_id/show")}}" class="btn btn-light-info font-weight-bold mr-2" target="_blank">View the solution</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>

                                                </table>
                                                <!--end: Datatable-->
                                            </div>
                                        </div>
                                        <!--end::Tab Content-->
                                        <!--begin::Tab Content ------------------- Comment -->
                                        <div class="tab-pane" id="kt_apps_contacts_view_tab_5" role="tabpanel">
                                            <!--begin::Body-->
                                            <div class="card-body pt-0">
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
                                                                <div class="row justify-content-between">
                                                                    <div class="col-auto">
                                                                        <!--begin::Info-->
                                                                        <div class="d-flex align-items-center flex-wrap">
                                                                            <div class="text-dark-75 text-hover-primary mb-1 font-size-lg font-weight-bolder pr-6">{{$comment->user->name ?? ''}}</div>
                                                                        </div>

                                                                        <span class="text-dark-75 font-size-sm font-weight-normal pt-1">
                                                                        {{$comment->body ?? ''}}
                                                                    </span>
                                                                        <!--end::Info-->
                                                                    </div>
                                                                    <a href="" data-toggle="modal" data-target="#delete_comment_{{$comment->id ?? ''}}">
                                                                        <i class="fas fa-trash-alt text-danger mr-5 col-auto mt-5"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="modal fade" id="delete_comment_{{$comment->id ?? ''}}" role="dialog"  aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Remove the comment</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <!--begin::Form-->
                                                                                <div class="card-body text-center">
                                                                                    <h3 class="mb-4">Are you sure you want to delete the comment ?</h3>
                                                                                    <p class="my-4">This solution will be remove immediately</p>

                                                                                    <form action="{{url("owner/solutions/comments/$comment->id/delete")}}" method="post">
                                                                                        @csrf
                                                                                        <input type="number" class="d-none" name="user_id" value="{{$solution->id ?? ''}}">
                                                                                        <button data-dismiss="modal" aria-label="Close" class="btn btn-light font-weight-bolder mr-5">
                                                                                            Cancel
                                                                                        </button>
                                                                                        <button type="submit" class="btn btn-danger font-weight-bolder">
                                                                                            Delete
                                                                                        </button>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Bottom-->
                                            @endforeach

                                            <!--begin::Separator-->
                                                <div class="separator separator-solid mt-9 mb-4"></div>
                                                <!--end::Separator-->

                                                <!--begin::Editor-->
                                                <form class="position-relative" action="{{url("owner/solutions/comments/store")}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <textarea id="kt_forms_widget_11_input" name="body" class="form-control border-0 p-0 pr-10 resize-none" rows="1" placeholder="You can write your comments here…" required></textarea>
                                                    <input type="number" name="owner_id" value="{{$solution->id}}" class="d-none">
                                                    <input type="text" name="type" value="solution_comment" class="d-none">
                                                    <div class="position-absolute top-0 right-0 mt-n1 mr-n2">
                                                        <button type="submit" class="btn btn-icon btn-sm btn-hover-icon-primary mr-5">
                                                            <i class="flaticon2-send-1 icon-lg"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                <!--edit::Editor-->
                                            </div>
                                            <!--end::Body-->

                                        </div>
                                        <!--end::Tab Content-->


                                        <!--begin::Tab Content---------------------Report -->
                                        <div class="tab-pane p-5" id="kt_apps_contacts_view_tab_6" role="tabpanel">
                                            <div class="row">
                                                <a href="" data-toggle="modal" data-target="#new_report" class="btn btn-light-warning font-weight-bold ml-auto mr-5">New Report</a>
                                            </div>
                                            <div class="modal fade" id="new_report" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog modal-xl" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">New Report</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i aria-hidden="true" class="ki ki-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body row">

                                                            <div class="col-md-12">
                                                                <form action="{{url('owner/solutions/reports/store')}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="card-body p-0">
                                                                        <div class="form-group">
                                                                            <label>Report title:</label>
                                                                            <input type="text" name="title" class="form-control"  placeholder="Enter file title"/>
                                                                        </div>
                                                                        <div class="form-group mb-1">
                                                                            <label for="exampleTextarea">Report body:</label>
                                                                            <textarea class="form-control" type="text" name="body" id="exampleTextarea" rows="6"></textarea>
                                                                        </div>
                                                                        <div class="form-group mt-5 row">

                                                                            <div class="form-group col-md-4">
                                                                                <label for="report_media">Type of file:</label>
                                                                                <select class="form-control" id="report_media" onchange="changeMediaOfReport()" name="media_type">
                                                                                    <option value="image">Image</option>
                                                                                    <option value="video">Video</option>
                                                                                    <option value="wordDocument">Word Document</option>
                                                                                    <option value="PDF">PDF</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group" id="report_input_file">
                                                                                    <label>File Browser:</label>
                                                                                    <div></div>
                                                                                    <div class="custom-file">
                                                                                        <input type="file" class="custom-file-input" name="file" id="customFile"/>
                                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group" id="report_input_video" style="display: none">
                                                                                    <label>Video link:</label>
                                                                                    <input type="text" name="video_link" class="form-control"  placeholder="Enter your video link"/>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <input type="text" name="type" value="solution_report" class="d-none">
                                                                        <input type="text" name="media_of_report" value="report_media" class="d-none">
                                                                        <input type="number" name="owner_id" value="{{$solution->id ?? ''}}" class="d-none">
                                                                    </div>
                                                                    <div class="card-footer text-center">
                                                                        <button type="submit" class="btn btn-primary px-10">Save</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($solution->reports as $report_key=>$report)
                                                    <tr>
                                                        <th scope="row">{{$report_key +1 }}</th>
                                                        <td>{{$report->title ?? ''}}</td>
                                                        <td>{{$report->created_at ?? ''}}</td>
                                                        <td>
                                                            <a href="" data-toggle="modal" data-target="#edit_report_{{$report->id ?? ''}}">
                                                                <i class="flaticon-edit text-success mr-5"></i>
                                                            </a>
                                                            <div class="modal fade" id="edit_report_{{$report->id ?? ''}}" role="dialog"  aria-hidden="true">
                                                                <div class="modal-dialog modal-xl" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Edit Report</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <i aria-hidden="true" class="ki ki-close"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body row">

                                                                            <div class="col-md-12">
                                                                                <form action="{{url("owner/solutions/reports/$report->id/update")}}" method="post" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    @method('Put')
                                                                                    <div class="card-body p-0 row">
                                                                                        <div class="col-8">
                                                                                            <div class="form-group">
                                                                                                <label>Report title:</label>
                                                                                                <input type="text" name="title" class="form-control"  placeholder="Enter file title" value="{{$report->title ?? ''}}"/>
                                                                                            </div>
                                                                                            <div class="form-group mb-5">
                                                                                                <label for="exampleTextarea">Report body:</label>
                                                                                                <textarea class="form-control" type="text" name="body" id="exampleTextarea" rows="6">{{$report->body ?? ''}}</textarea>
                                                                                            </div>
                                                                                            <hr>
                                                                                            <h6>
                                                                                                Add more media
                                                                                            </h6>
                                                                                            <div class="form-group mt-5 row">
                                                                                                <div class="form-group col-md-6">
                                                                                                    <label for="report_add_media">Type of file:</label>
                                                                                                    <select class="form-control" id="report_add_media_{{$report->id}}" onchange="changeEditMediaOfReport({{$report->id}})" name="media_type">
                                                                                                        <option value="image">Image</option>
                                                                                                        <option value="video">Video</option>
                                                                                                        <option value="wordDocument">Word Document</option>
                                                                                                        <option value="PDF">PDF</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <div class="form-group" id="report_add_input_file_{{$report->id}}">
                                                                                                        <label>File Browser:</label>
                                                                                                        <div></div>
                                                                                                        <div class="custom-file">
                                                                                                            <input type="file" class="custom-file-input" name="file" id="customFile"/>
                                                                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group" id="report_add_input_video_{{$report->id}}" style="display: none">
                                                                                                        <label>Video link:</label>
                                                                                                        <input type="text" name="video_link" class="form-control"  placeholder="Enter your video link"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <input type="text" name="type" value="solution_report" class="d-none">
                                                                                            <input type="text" name="media_of_report" value="report_media" class="d-none">
                                                                                            <input type="number" name="owner_id" value="{{$solution->id ?? ''}}" class="d-none">
                                                                                            <div class="text-center">
                                                                                                <button type="submit" class="btn btn-primary px-10">Save</button>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="col-4">
                                                                                            <div class="row">
                                                                                                @foreach($report->media_report as $media_report)
                                                                                                    @if($media_report->media_type == "video")
                                                                                                        <div class="col-12 mb-3">
                                                                                                            <iframe style="width: 100%" src="https://www.youtube.com/embed/{{$media_report->media_path}}" class="rounded my-2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                                                                                            <div class="card card-custom overlay border mt-8">
                                                                                                                <div class="card-body p-0">
                                                                                                                    <div class="overlay-wrapper">
{{--                                                                                                                        <h6>--}}
{{--                                                                                                                            {{$media_report->title ?? ''}}--}}
{{--                                                                                                                        </h6>--}}
                                                                                                                    </div>
                                                                                                                    <div class="overlay-layer align-items-end justify-content-end pb-5 pr-5">
                                                                                                                        <a href="https://www.youtube.com/watch?v={{$media_report->media_path}}" class="btn btn-clean btn-icon mr-2" target="_blank"><i class="flaticon-download icon-lg text-success"></i></a>
                                                                                                                        <a href="" data-toggle="modal" data-target="#delete_report_media_{{$media_report->id ?? ''}}" class="btn btn-clean btn-icon"><i class="flaticon2-rubbish-bin-delete-button icon-lg text-danger"></i></a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <h6 class="mt-3">{{$media_report->title ?? ''}}</h6>
                                                                                                            <span class="text-dark-50 font-weight-normal font-size-sm">
                                                                                                            {{$media_report->caption ?? ''}}
                                                                                                        </span>
                                                                                                        </div>
                                                                                                    @elseif($media_report->media_type == "PDF")
                                                                                                        <div class="col-6 mb-3">
                                                                                                            <div class="card card-custom overlay border">
                                                                                                                <div class="card-body p-0">
                                                                                                                    <div class="overlay-wrapper">
                                                                                                                        <img src="{{asset('media/icon/pdf.jpg')}}" alt="" class="w-100 h-100px rounded"/>
                                                                                                                    </div>
                                                                                                                    <div class="overlay-layer align-items-end justify-content-end pb-5 pr-5">
                                                                                                                        <a href="{{$media_report->media_path}}" class="btn btn-clean btn-icon mr-2" target="_blank"><i class="flaticon-download icon-lg text-success"></i></a>
                                                                                                                        <a href="" data-toggle="modal" data-target="#delete_report_media_{{$media_report->id ?? ''}}" class="btn btn-clean btn-icon"><i class="flaticon2-rubbish-bin-delete-button icon-lg text-danger"></i></a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <h6 class="mt-3">{{$media_report->title ?? ''}}</h6>
                                                                                                            <span class="text-dark-50 font-weight-normal font-size-sm">
                                                                                                                {{$media_report->caption ?? ''}}
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    @elseif($media_report->media_type == "wordDocument")
                                                                                                        <div class="col-6 mb-3">
                                                                                                            <div class="card card-custom overlay border">
                                                                                                                <div class="card-body p-0">
                                                                                                                    <div class="overlay-wrapper">
                                                                                                                        <img src="{{asset('media/icon/word.jpg')}}" alt="" class="w-100 h-100px rounded"/>
                                                                                                                    </div>
                                                                                                                    <div class="overlay-layer align-items-end justify-content-end pb-5 pr-5">
                                                                                                                        <a href="{{$media_report->media_path}}" class="btn btn-clean btn-icon mr-2" target="_blank"><i class="flaticon-download icon-lg text-success"></i></a>
                                                                                                                        <a href="" data-toggle="modal" data-target="#delete_report_media_{{$media_report->id ?? ''}}" class="btn btn-clean btn-icon"><i class="flaticon2-rubbish-bin-delete-button icon-lg text-danger"></i></a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <h6 class="mt-3">{{$media_report->title ?? ''}}</h6>
                                                                                                            <span class="text-dark-50 font-weight-normal font-size-sm">
                                                                                                                {{$media_report->caption ?? ''}}
                                                                                                            </span>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div class="col-6 mb-3">
                                                                                                            <div class="card card-custom overlay">
                                                                                                                <div class="card-body p-0">
                                                                                                                    <div class="overlay-wrapper">
                                                                                                                        <img src="{{asset($media_report->media_path)}}" alt="" class="w-100 h-100px rounded"/>
                                                                                                                    </div>
                                                                                                                    <div class="overlay-layer align-items-end justify-content-end pb-5 pr-5">
                                                                                                                        <a href="{{url($media_report->media_path)}}" class="btn btn-clean btn-icon mr-2" target="_blank"><i class="flaticon-download icon-lg text-success"></i></a>
                                                                                                                        <a href="" data-toggle="modal" data-target="#delete_report_media_{{$media_report->id ?? ''}}" class="btn btn-clean btn-icon"><i class="flaticon2-rubbish-bin-delete-button icon-lg text-danger"></i></a>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <h6 class="mt-3">{{$media_report->title ?? ''}}</h6>
                                                                                                            <span class="text-dark-50 font-weight-normal font-size-sm">
                                                                                                            {{$media_report->caption ?? ''}}
                                                                                                        </span>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                        <div class="modal fade" id="delete_report_media_{{$media_report->id ?? ''}}" role="dialog"  aria-hidden="true">
                                                                                                            <div class="modal-dialog modal-lg" role="document">
                                                                                                                <div class="modal-content">
                                                                                                                    <div class="modal-header">
                                                                                                                        <h5 class="modal-title">Remove the media</h5>
                                                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                    <div class="modal-body">
                                                                                                                        <!--begin::Form-->
                                                                                                                        <div class="card-body text-center">
                                                                                                                            <h3 class="mb-4">Are you sure you want to delete the media ?</h3>
                                                                                                                            <p class="my-4">This solution will be remove immediately</p>
                                                                                                                                <button data-dismiss="modal" aria-label="Close" class="btn btn-light font-weight-bolder mr-5">
                                                                                                                                    Cancel
                                                                                                                                </button>
                                                                                                                                <a href="{{url("owner/solutions/media/$media_report->id/delete_media")}}" class="btn btn-danger font-weight-bolder">
                                                                                                                                    Delete
                                                                                                                                </a>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                @endforeach
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </form>
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <a href="" data-toggle="modal" data-target="#delete_report_{{$report->id ?? ''}}">
                                                                <i class="fas fa-trash-alt text-danger mr-5"></i>
                                                            </a>
                                                            <div class="modal fade" id="delete_report_{{$report->id ?? ''}}" role="dialog"  aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Remove the report</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <i aria-hidden="true" class="ki ki-close"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <!--begin::Form-->
                                                                            <div class="card-body text-center">
                                                                                <h3 class="mb-4">Are you sure you want to delete "{{$report->title ?? ''}}" ?</h3>
                                                                                <p class="my-4">This solution will be remove immediately</p>

                                                                                <form action="{{url("owner/solutions/reports/$report->id/delete")}}" method="post">
                                                                                    @csrf
                                                                                    <input type="number" class="d-none" name="user_id" value="{{$solution->id ?? ''}}">
                                                                                    <button data-dismiss="modal" aria-label="Close" class="btn btn-light font-weight-bolder mr-5">
                                                                                        Cancel
                                                                                    </button>
                                                                                    <button type="submit" class="btn btn-danger font-weight-bolder">
                                                                                        Delete
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>


                                        </div>
                                        <!--end::Tab Content-->

                                    </div>
                                </div>
                                <!--end::Body-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        });

        function changeTypeOfMedia() {
            var type = document.getElementById('media_type_selector').value ;
            if(type == "video"){
                document.getElementById('input_video').style.display = 'block';
                document.getElementById('input_file').style.display = 'none';
            }else{
                document.getElementById('input_file').style.display = 'block';
                document.getElementById('input_video').style.display = 'none';
            }
        }
        function changeMediaOfReport() {
            var type = document.getElementById('report_media').value ;
            if(type == "video"){
                document.getElementById('report_input_video').style.display = 'block';
                document.getElementById('report_input_file').style.display = 'none';
            }else{
                document.getElementById('report_input_file').style.display = 'block';
                document.getElementById('report_input_video').style.display = 'none';
            }
        }
        function changeEditMediaOfReport(id) {
            var type = document.getElementById('report_add_media_'+id).value ;
            if(type == "video"){
                document.getElementById('report_add_input_video_'+id).style.display = 'block';
                document.getElementById('report_add_input_file_'+id).style.display = 'none';
            }else{
                document.getElementById('report_add_input_file_'+id).style.display = 'block';
                document.getElementById('report_add_input_video_'+id).style.display = 'none';
            }
        }
    </script>


@endsection
