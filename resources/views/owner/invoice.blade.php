@extends('layouts.owner.master')
@section('content')

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Invoice-->
                <div class="card card-custom position-relative overflow-hidden">
                    <!--begin::Shape-->
                    <div class="position-absolute opacity-30"><span class="svg-icon svg-icon-10x svg-logo-white"><!--begin::Svg Icon | path:assets/media/svg/shapes/abstract-8.svg--><svg xmlns="http://www.w3.org/2000/svg" width="176" height="165" viewBox="0 0 176 165" fill="none">
                        <g clip-path="url(#clip0)">
                        <path d="M-10.001 135.168C-10.001 151.643 3.87924 165.001 20.9985 165.001C38.1196 165.001 51.998 151.643 51.998 135.168C51.998 118.691 38.1196 105.335 20.9985 105.335C3.87924 105.335 -10.001 118.691 -10.001 135.168Z" fill="#AD84FF"/>
                        <path d="M28.749 64.3117C28.749 78.7296 40.8927 90.4163 55.8745 90.4163C70.8563 90.4163 83 78.7296 83 64.3117C83 49.8954 70.8563 38.207 55.8745 38.207C40.8927 38.207 28.749 49.8954 28.749 64.3117Z" fill="#AD84FF"/>
                        <path d="M82.9996 120.249C82.9996 144.964 103.819 165 129.501 165C155.181 165 176 144.964 176 120.249C176 95.5342 155.181 75.5 129.501 75.5C103.819 75.5 82.9996 95.5342 82.9996 120.249Z" fill="#AD84FF"/>
                        <path d="M98.4976 23.2928C98.4976 43.8887 115.848 60.5856 137.249 60.5856C158.65 60.5856 176 43.8887 176 23.2928C176 2.69692 158.65 -14 137.249 -14C115.848 -14 98.4976 2.69692 98.4976 23.2928Z" fill="#AD84FF"/>
                        <path d="M-10.0011 8.37466C-10.0011 20.7322 0.409554 30.7493 13.2503 30.7493C26.0911 30.7493 36.5 20.7322 36.5 8.37466C36.5 -3.98287 26.0911 -14 13.2503 -14C0.409554 -14 -10.0011 -3.98287 -10.0011 8.37466Z" fill="#AD84FF"/>
                        <path d="M-2.24881 82.9565C-2.24881 87.0757 1.22081 90.4147 5.50108 90.4147C9.78135 90.4147 13.251 87.0757 13.251 82.9565C13.251 78.839 9.78135 75.5 5.50108 75.5C1.22081 75.5 -2.24881 78.839 -2.24881 82.9565Z" fill="#AD84FF"/>
                        <path d="M55.8744 12.1044C55.8744 18.2841 61.0788 23.2926 67.5001 23.2926C73.9196 23.2926 79.124 18.2841 79.124 12.1044C79.124 5.92653 73.9196 0.917969 67.5001 0.917969C61.0788 0.917969 55.8744 5.92653 55.8744 12.1044Z" fill="#AD84FF"/>
                        </g>
                        </svg><!--end::Svg Icon--></span></div>
                    <!--end::Shape-->

                    <!--begin::Invoice header-->
                    <div class="row justify-content-center py-8 px-8 py-md-36 px-md-0 bg-primary">
                        <div class="col-md-9">
                            <div class="d-flex justify-content-between align-items-md-center flex-column flex-md-row">
                                <div class="d-flex flex-column px-0 order-2 order-md-1">
                                    <!--begin::Logo-->
                                    <a href="#" class="mb-5 max-w-115px">
                                        <h1 class="text-white">
                                            {{$project->title ?? ''}}
                                        </h1>
                                    </a>
                                    <!--end::Logo-->
                                    <span class="d-flex flex-column font-size-h5 font-weight-bold text-white">
                                        <span>{{$project->subtitle ?? ''}}</span>
                                    </span>
                                </div>
                                <h1 class="display-3 font-weight-boldest text-white order-1 order-md-2">INVOICE</h1>
                            </div>
                        </div>
                    </div>
                    <!--end::Invoice header-->
                    <div class="row justify-content-center py-4 px-8 py-md-10 px-md-0">
                        <div class="col-md-9">
                            <!--begin::Invoice body-->
                            <div class="row pb-10">
                                <div class="col-md-3 border-right-md pr-md-10 py-md-10">
                                    <!--begin::Invoice To-->
                                    <div class="text-dark-50 font-size-lg font-weight-bold mb-3">INVOICE TO.</div>
                                    <div class="font-size-lg font-weight-bold mb-10">{{$user->name ?? ''}} {{$user->lname ?? ''}}<br />{{$user->address ?? ''}}<br />{{$user->tel ?? ''}} </div>
                                    <!--end::Invoice To-->

                                    <!--begin::Invoice No-->
                                    <div class="text-dark-50 font-size-lg font-weight-bold mb-3">INVOICE NO.</div>
                                    <div class="font-size-lg font-weight-bold mb-10">{{$project->id ?? ''}}</div>
                                    <!--end::Invoice No-->

                                    <!--begin::Invoice Date-->
                                    <div class="text-dark-50 font-size-lg font-weight-bold mb-3">DATE</div>
                                    <div class="font-size-lg font-weight-bold">{{\Carbon\Carbon::today()->format('Y-m-d')}}</div>
                                    <!--end::Invoice Date-->
                                </div>
                                <div class="col-md-9 py-10 pl-md-10">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="pt-1 pb-9 pl-0 pl-md-5 font-weight-bolder text-muted font-size-lg text-uppercase">Title</th>
                                                <th class="pt-1 pb-9 text-right font-weight-bolder text-muted font-size-lg text-uppercase">Deadline</th>
                                                <th class="pt-1 pb-9 text-right font-weight-bolder text-muted font-size-lg text-uppercase">Price</th>
                                                <th class="pt-1 pb-9 text-right font-weight-bolder text-muted font-size-lg text-uppercase">Commission</th>
                                                <th class="pt-1 pb-9 text-right pr-0 font-weight-bolder text-muted font-size-lg text-uppercase">Total Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="font-weight-bolder font-size-lg">
                                                <td class="border-top-0 pl-0 pl-md-5 pt-7 d-flex align-items-center">
                                        <span class="navi-icon mr-2">
                                            <i class="fa fa-genderless text-danger font-size-h2"></i>
                                        </span>
                                                    {{$project->title ?? ''}}
                                                </td>
                                                <td class="text-right pt-7">{{$project->deadline ?? ''}}</td>
                                                <td class="text-right pt-7">{{$project->net_price ?? ''}} $</td>
                                                <td class="pr-0 pt-7 font-size-h6 font-weight-boldest text-right">{{$project->total_price - $project->net_price ?? ''}} $</td>
                                                <td class="pr-0 pt-7 font-size-h6 font-weight-boldest text-right">{{$project->net_price ?? ''}} $</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--end::Invoice body-->

                        </div>
                    </div>

                    <!-- begin: Invoice action-->
                    <div class="row justify-content-center border-top py-4 px-8 py-md-8 px-md-0">
                        <div class="col-md-9">
                            <div class="d-flex font-size-sm flex-wrap">
                                <a href="{{url("owner/project/$project->id/edit")}}"  class="btn btn-warning w-110px font-weight-bolder py-4 mr-3 mr-sm-14 my-1">Back</a>
                                <button type="button" class="btn btn-primary w-110px font-weight-bolder py-4 mr-3 mr-sm-14 my-1" onclick="window.print();">Print</button>
                                <a href="{{url("owner/project/$project->id/pay")}}" class="btn btn-success w-110px font-weight-bolder ml-sm-auto my-1 pt-4">Pay</a>
                            </div>
                        </div>
                    </div>

                    <!-- end: Invoice action-->

                </div>
                <!--end::Invoice-->		</div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->

    </div>
    <!--end::Content-->


@endsection
