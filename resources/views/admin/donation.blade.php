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
                                Donations
                                <span class="d-block text-muted pt-2 font-size-sm">This page shows donations info</span>
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
                                    <th>Solution</th>
                                    <th>Customer</th>
                                    <th>Solution_provider</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($donations as $donation_key=>$donation)
                                <tr>
                                    <td>{{$donation_key +1  ?? ''}}</td>
                                    <td>{{$donation->solution->title ?? ''}} {{$donation->lname ?? ''}}</td>
                                    <td>{{$donation->customer->name ?? ''}}</td>
                                    <td>{{$donation->solution_provider->name ?? ''}}</td>
                                    <td>{{$donation->amount ?? ''}}</td>
                                    <td>
                                        <a href="{{url("solution/$donation->solution_id/view")}}" class="btn btn-light-info font-weight-bold mr-2" target="_blank">View Solution</a>
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



