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
                                Levels
                                <span class="d-block text-muted pt-2 font-size-sm">This page shows levels info</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="" data-toggle="modal" data-target="#new_level_customer" class="btn btn-light-primary font-weight-bold mr-2">Customers</a>
                            <a href="" data-toggle="modal" data-target="#new_level_owner" class="btn btn-light-success font-weight-bold mr-2">Solution Providers</a>
                        </div>
                        <div class="modal fade" id="new_level_owner" role="dialog"  aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">New Level for Solution Provider</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!--begin::Form-->
                                        <div class="card-body text-center p-0">
                                            <form class="form mt-5" action="{{url("/admin/levels/owner_store")}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="">
                                                    @include('fragment.error')

                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label text-right">Title:</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" name="name" class="form-control" placeholder="Enter the name of level" required value="{{ old('name') ?? ''}}" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label text-right">Min Solutions Created</label>
                                                        <div class="col-lg-4">
                                                            <input type="number" name="min_solutions" class="form-control" required />
                                                        </div>
                                                        <label class="col-lg-2 col-form-label text-right">Min donations</label>
                                                        <div class="col-lg-4">
                                                            <input type="number" name="min_donations" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <input type="text" name="type" value="owner_level" class="d-none">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary col-md-2">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="new_level_customer" role="dialog"  aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">New Level for customers</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!--begin::Form-->
                                        <div class="card-body text-center p-0">
                                            <form class="form mt-5" action="{{url("/admin/levels/customer_store")}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="">
                                                    @include('fragment.error')

                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label text-right">Title:</label>
                                                        <div class="col-lg-10">
                                                            <input type="text" name="name" class="form-control" placeholder="Enter the name of level" required value="{{ old('name') ?? ''}}" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-2 col-form-label text-right">Min Donation</label>
                                                        <div class="col-lg-4">
                                                            <input type="number" name="min_donation" class="form-control" required />
                                                        </div>
                                                    </div>
                                                    <input type="text" name="type" value="customer_level" class="d-none">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary col-md-2">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="card-body">
                        <div class="overflow-auto">



                            <ul class="nav nav-tabs nav-tabs-line">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1">Customers Levels</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2">Solutions Providers Levels</a>
                                </li>

                            </ul>
                            <div class="tab-content mt-5" id="myTabContent">
                                <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Minimum Donation</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($customer_levels as $customer_level)
                                            <tr>
                                                <td class="text-center">{{$customer_level->id ?? ''}}</td>
                                                <td class="text-center">{{$customer_level->name ?? ''}}</td>
                                                <td class="text-center">{{$customer_level->first_requirement ?? ''}}</td>
                                                <td class="text-center">
                                                    <a href="" data-toggle="modal" data-target="#delete_level_{{$customer_level->id ?? ''}}">
                                                        <i class="fas fa-trash-alt text-danger mr-5"></i>
                                                    </a>
                                                    <div class="modal fade" id="delete_level_{{$customer_level->id ?? ''}}" role="dialog"  aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Remove the Level</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!--begin::Form-->
                                                                    <div class="card-body text-center">
                                                                        <h3 class="mb-4">Are you sure you want to delete "{{$customer_level->title ?? ''}}" ?</h3>
                                                                        <p class="my-4">This solution will be remove immediately</p>

                                                                        <form action="{{url("admin/levels/$customer_level->id/delete")}}" method="post">
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
                                                </td>

                                            </tr>
                                        @endforeach

                                        </tbody>

                                    </table>
                                </div>
                                <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel" aria-labelledby="kt_tab_pane_2">
                                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                        <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Minimum solution created</th>
                                            <th class="text-center">Minimum Donations</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($owner_levels as $owner_level)
                                            <tr>
                                                <td class="text-center">{{$owner_level->id ?? ''}}</td>
                                                <td class="text-center">{{$owner_level->name ?? ''}}</td>
                                                <td class="text-center">{{$owner_level->first_requirement ?? ''}}</td>
                                                <td class="text-center">{{$owner_level->second_requirement ?? ''}}</td>
                                                <td class="text-center">
                                                    <a href="" data-toggle="modal" data-target="#delete_level_{{$owner_level->id ?? ''}}">
                                                        <i class="fas fa-trash-alt text-danger mr-5"></i>
                                                    </a>
                                                    <div class="modal fade" id="delete_level_{{$owner_level->id ?? ''}}" role="dialog"  aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Remove the level</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!--begin::Form-->
                                                                    <div class="card-body text-center">
                                                                        <h3 class="mb-4">Are you sure you want to delete "{{$owner_level->title ?? ''}}" ?</h3>
                                                                        <p class="my-4">This solution will be remove immediately</p>

                                                                        <form action="{{url("admin/levels/$owner_level->id/delete")}}" method="post">
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
                                                </td>

                                            </tr>
                                        @endforeach

                                        </tbody>

                                    </table>

                                </div>

                            </div>



                            <!--begin: Datatable-->

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



