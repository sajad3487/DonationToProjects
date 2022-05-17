@extends('layouts.customer.master')
@section('content')

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <div class="row">
                    <div class="col-xl-12 mb-6">

                        <!--begin::Engage Widget 15-->
                        <div class="card card-custom ">
                            <div class="card-body rounded p-0 d-flex bg-light justify-content-between">
                                <div
                                    class="d-flex flex-column flex-lg-row-auto w-auto w-lg-350px w-xl-450px w-xxl-650px py-10 py-md-6 px-6 px-md-20 pr-lg-0">
                                    <h1 class="font-weight-bolder text-dark mb-3">Search Solution</h1>
                                {{--                                    <div class="font-size-h4 mb-8">Get Amazing Gadgets</div>--}}
                                <!--begin::Form-->
                                    <form action="{{url('designer/project/search')}}" method="get" class="d-flex flex-center py-2 px-6 bg-white rounded">
                                        @csrf
                                                        <span class="svg-icon svg-icon-lg svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"/>
                                                                        <path
                                                                            d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                                            fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                                        <path
                                                                            d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                                            fill="#000000" fill-rule="nonzero"/>
                                                                    </g>
                                                                </svg>
                                                         </span>
                                        <input type="text" name="search" class="form-control border-0 font-weight-bold pl-2" placeholder="Search Goods"/>
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <div class="d-none d-md-flex flex-row-fluid bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-cover"
                                     style="background-image: url({{asset('/media/bg/search.png')}});"
                                         >
{{--                                    <img src="{{asset('media/bg/search.png')}}" style="width: 100%" alt="">--}}

                                </div>
                            </div>
                        </div>
                        <!--end::Engage Widget 15-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 mb-6">

                        <!--begin::Engage Widget 15-->
                        <div class="card card-custom ">
                            <div class="card-body rounded px-6 py-4 bg-light">
                                <div class="row justify-content-between">
                                    <div class="col-auto font-size-h4  mt-4 ml-4">
                                        @if($category_id == 0)
                                            All Solutions
                                            @else
                                            {{$category_name ?? ''}}
                                        @endif
                                    </div>
                                    <div class=" mt-2 mr-4 col-auto">Categories:
                                        @if($category_id == 0)
                                            <a href="{{url("customer/solutions")}}" class="btn btn-primary mx-2">All</a>
                                        @else
                                            <a href="{{url("customer/solutions")}}" class="btn btn-outline-primary mx-2">All</a>
                                        @endif

                                        @if(isset($categories))
                                            @foreach($categories as $category)
                                                @if($category->activeSubCat->count() != 0)
                                                    <div class="btn-group">
                                                        @if($category->id == $category_id)
                                                            <a href="{{url("customer/solutions/categories/$category->id/index")}}" class="btn btn-primary">{{$category->title ?? ''}}</a>
                                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                        @else
                                                            <a href="{{url("customer/solutions/categories/$category->id/index")}}" class="btn btn-outline-primary">{{$category->title ?? ''}}</a>
                                                            <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="sr-only">Toggle Dropdown</span>
                                                            </button>
                                                        @endif

                                                        <div class="dropdown-menu">
                                                            @foreach($category->activeSubCat as $subCat)
                                                                <a class="dropdown-item" href="{{url("customer/solutions/categories/$subCat->id/index")}}">{{$subCat->title}}</a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @else
                                                    @if($category->id == $category_id)
                                                        <a href="{{url("customer/solutions/categories/$category->id/index")}}" class="btn btn-primary">{{$subCat->title ?? ''}}</a>
                                                    @else
                                                        <a href="{{url("customer/solutions/categories/$category->id/index")}}" class="btn btn-outline-primary">{{$subCat->title ?? ''}}</a>
                                                    @endif
                                                @endif
                                                {{--                                            <a href="" class="btn btn-outline-primary mr-2"></a>--}}
                                            @endforeach
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end::Engage Widget 15-->
                    </div>
                </div>
                <!--begin::Row-->
                <div class="row">

                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->

        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">


                <!--begin::Row-->
                <div class="row">

                    @foreach($solutions as $key=>$solution)
                            <div class="col-md-4">
                                <!--begin::Nav Panel Widget 4-->
                                <div class="card card-custom card-stretch gutter-b">
                                    <!--begin::Body-->
                                    <div class="card-body px-6">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex justify-content-between flex-column h-100">
                                            <!--begin::Container-->
                                            <div class="h-100">
                                                <!--begin::Header-->
                                                <div class="d-flex flex-column flex-center" >
                                                    <!--begin::Image-->
                                                    <div class="bgi-no-repeat bgi-size-cover rounded min-h-180px w-100" style="background-image: url({{asset($solution->main_image->media_path)}})"></div>
                                                    <!--end::Image-->
                                                    <!--begin::Title-->
                                                    <a href="{{url("customer/solutions/$solution->id/show")}}" target="_blank" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">
                                                        <h3>{{$solution->title ?? ''}}</h3>
                                                    </a>
                                                    <p>Category : {{$solution->category->title ?? ''}}</p>
                                                    <!--end::Title-->

                                                    <!--begin::Text-->
                                                    <div class="font-weight-bold text-dark-50 font-size-sm pb-7">Date : {{$solution->created_at ?? ''}}</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Header-->
                                                <div class="d-flex mb-5 align-items-cente">
                                                    <span class="d-block font-weight-bold mr-5">Progress</span>
                                                    <div class="d-flex flex-row-fluid align-items-center">
                                                        <div class="progress progress-xs mt-2 mb-2 w-100">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: {{$solution->progress ?? 0}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <span class="ml-3 font-weight-bolder">{{$solution->progress ?? ''}}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--eng::Container-->

                                            <!--begin::Footer-->
                                            <div class="d-flex flex-center mt-md-2" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="" data-placement="right" data-original-title="">
                                                <a href="{{url("customer/solutions/$solution->id/show")}}" target="_blank" class="btn btn-light-success font-weight-bolder font-size-sm py-3 px-14">View</a>
                                            </div>
                                            <!--end::Footer-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Nav Panel Widget 4-->
                            </div>

                    @endforeach
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
    </div>
    <!--end::Content-->
@endsection
