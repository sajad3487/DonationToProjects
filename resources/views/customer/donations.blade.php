@extends('layouts.customer.master')

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
                                Your Supports
                                <span class="d-block text-muted pt-2 font-size-sm"></span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
{{--                            <a href="" data-toggle="modal" data-target="#new_user" class="btn btn-light-primary font-weight-bold mr-2">New Customer</a>--}}
                        </div>
                    </div>

                    <div class="modal fade" id="new_user" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">New Customer</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--begin::Form-->
                                    <div class="card-body text-center p-0">



                                        <form class="form mt-5" action="{{url("/admin/customers/store")}}" method="post" enctype="multipart/form-data">

                                            @csrf
                                            <div class="">
                                                @include('fragment.error')
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label text-right">First name</label>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="name" class="form-control" placeholder="Enter the first name of user" required value="{{ old('name') ?? ''}}" />
                                                    </div>
                                                    <label class="col-lg-2 col-form-label text-right">Last name</label>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="lname" class="form-control" placeholder="Enter the last name of user" required value="{{ old('name') ?? ''}}" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label text-right">Email</label>
                                                    <div class="col-lg-4">
                                                        <input type="email" name="email" class="form-control" placeholder="Enter the name of user" required value="{{ old('email') ?? ''}}" />
                                                    </div>
                                                    <label class="col-lg-2 col-form-label text-right">Password:</label>
                                                    <div class="col-lg-4">
                                                        <input type="password" name="password" class="form-control" placeholder="Enter password for the user account" required/>

                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label text-right">Address</label>
                                                    <div class="col-lg-10">
                                                        <input type="text" name="address" class="form-control" placeholder="Enter the address of user" required value="{{ old('address') ?? ''}}" />
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label text-right">Phone</label>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="tel" class="form-control" placeholder="Enter the phone number of user" required value="{{ old('tel') ?? ''}}" />
                                                    </div>
                                                </div>
                                                <input type="number" name="user_type" value="1" class="d-none">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary col-md-2">Add</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--end::Users-->
                    <div class="card-body">
                        <div class="overflow-auto">
                            <!--begin: Datatable-->
                            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">Solution</th>
                                    <th class="text-center">Amount</th>
                                    <th class="text-center">Solution provider</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($donations as $donation_key=>$donation)
                                    <tr>
                                        <td class="text-center">{{$donation_key +1 ?? ''}}</td>
                                        <td class="text-center">{{$donation->solution->title ?? ''}}</td>
                                        <td class="text-center">{{$donation->amount ?? ''}}</td>
                                        <td class="text-center">{{$donation->solution_provider->name ?? ''}}</td>

                                        <td class="text-center">
                                            <a href="{{url("customer/solutions/$donation->solution_id/show")}}" class="btn btn-light-info font-weight-bold mr-2" target="_blank">View</a>

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



