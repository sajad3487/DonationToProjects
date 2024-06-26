@extends('layouts.admin.master')

@section('content')


    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Notice-->

                <!--end::Notice-->

                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">
                                Financial Records
                                <span class="d-block text-muted pt-2 font-size-sm">This page shows financial records info</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
{{--                            <a href="#" class="btn btn-light-success font-weight-bold mr-2">New Solution Providers</a>--}}
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="overflow-auto">
                            <!--begin: Datatable-->
                            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>owner</th>
                                    <th>solution</th>
                                    <th>solution provider</th>
                                    <th>payment token</th>
                                    <th>date</th>
                                    <th>action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($customers as $customer_key=>$customer)
                                <tr>
                                    <td>{{$customer_key +1 ?? ''}}</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
{{--                                        @if($customer->user_type == 1)--}}
{{--                                            <span class="label font-weight-bold label-lg label-light-success label-inline">--}}
{{--                                                Designer--}}
{{--                                            </span>--}}
{{--                                            @else--}}
{{--                                            <span class="label font-weight-bold label-lg label-light-info label-inline">--}}
{{--                                                Owner--}}
{{--                                            </span>--}}

{{--                                        @endif--}}
                                    </td>
                                    <td>
    {{--                                    {{$customer->profile_picture}}--}}
{{--                                        <div class="image-input image-input-outline"  id="kt_image_1">--}}
{{--                                            <a href="{{asset($customer->profile_picture)}}" target="_blank"><div class="image-input-wrapper" style="background-image: url({{asset($customer->profile_picture)}}); width: 50px;height: 50px"></div></a>--}}
{{--                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">--}}
{{--                                            <i class="ki ki-bold-close icon-xs text-muted"></i>--}}
{{--                                        </span>--}}
{{--                                        </div>--}}
                                    </td>

                                </tr>
                                @endforeach

                                </tbody>

                            </table>
                            <!--end: Datatable-->
                        </div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->


@endsection



