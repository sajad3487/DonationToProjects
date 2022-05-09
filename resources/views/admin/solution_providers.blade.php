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
                                Solution Providers
                                <span class="d-block text-muted pt-2 font-size-sm">This page shows Solution Providers info</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="" data-toggle="modal" data-target="#new_user" class="btn btn-light-success font-weight-bold mr-2">New Solution Providers</a>
                        </div>
                    </div>

                    <div class="modal fade" id="new_user" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">New Solution Providers</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--begin::Form-->
                                    <div class="card-body text-center p-0">



                                        <form class="form mt-5" action="{{url("/admin/solution_provider/store")}}" method="post" enctype="multipart/form-data">

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
                                                <input type="number" name="user_type" value="2" class="d-none">
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
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Profile Pic</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($solution_providers as $solution_provider_key=>$solution_provider)
                                <tr>
                                    <td class="text-center">{{$solution_provider_key +1 ?? ''}}</td>
                                    <td class="text-center">{{$solution_provider->name ?? ''}} {{$solution_provider->lname ?? ''}}</td>
                                    <td class="text-center">{{$solution_provider->email ?? ''}}</td>
                                    <td class="text-center">{{$solution_provider->tel ?? ''}}</td>
                                    <td class="text-center">{{$solution_provider->address ?? ''}}</td>
                                    <td class="text-center">
                                        <div class="image-input image-input-outline"  id="kt_image_1">
                                            <a href="" data-toggle="modal" data-target="#profile_picture_{{$solution_provider->id ?? ''}}"><div class="image-input-wrapper " style="background-image: url({{asset($solution_provider->profile_picture)}}); width: 30px;height: 30px"></div></a>
                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                        </div>
                                        <div class="modal fade" id="profile_picture_{{$solution_provider->id ?? ''}}" role="dialog"  aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Profile Picture</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!--begin::Form-->
                                                        <div class="card-body text-center p-0">
                                                            <div class="bgi-no-repeat bgi-size-cover rounded min-h-250px w-250px mx-auto" style="background-image: url({{asset($solution_provider->profile_picture)}})"></div>

                                                            <form class="form mt-5" action="{{url("/admin/solution_provider/$solution_provider->id/update_profile_picture")}}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="">
                                                                    @include('fragment.error')
                                                                    <div class="form-group row">
                                                                        <div class="col-4 mx-auto">
                                                                            <label>File Browser</label>
                                                                            <div></div>
                                                                            <div class="custom-file">
                                                                                <input type="file" name="file" class="custom-file-input" id="customFile"/>
                                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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

                                    </td>

                                    <td class="text-center">
                                        <a href="" data-toggle="modal" data-target="#edit_user_{{$solution_provider->id ?? ''}}">
                                            <i class="fas fa-user-edit text-warning mr-5"></i>
                                        </a>

                                        <div class="modal fade" id="edit_user_{{$solution_provider->id ?? ''}}" role="dialog"  aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit {{$solution_provider->email ?? ''}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!--begin::Form-->
                                                        <div class="card-body text-center p-0">
                                                            <form class="form mt-5" action="{{url("/admin/solution_provider/$solution_provider->id/update")}}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="">
                                                                    @include('fragment.error')
                                                                    <div class="form-group row">
                                                                        <label class="col-lg-2 col-form-label text-right">First name</label>
                                                                        <div class="col-lg-4">
                                                                            <input type="text" name="name" class="form-control" placeholder="Enter the first name of user" required value="{{$solution_provider->name ?? ''}}" />
                                                                        </div>
                                                                        <label class="col-lg-2 col-form-label text-right">Last name</label>
                                                                        <div class="col-lg-4">
                                                                            <input type="text" name="lname" class="form-control" placeholder="Enter the last name of user" required value="{{$solution_provider->lname ?? ''}}" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-lg-2 col-form-label text-right">Email</label>
                                                                        <div class="col-lg-4">
                                                                            <input type="email" name="email" class="form-control" placeholder="Enter the email of user" required value="{{ $solution_provider->email ?? ''}}" disabled />
                                                                        </div>
                                                                        <label class="col-lg-2 col-form-label text-right">Password:</label>
                                                                        <div class="col-lg-4">
                                                                            <input type="password" name="password" class="form-control" placeholder="Enter password for the user account" required/>

                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-lg-2 col-form-label text-right">Address</label>
                                                                        <div class="col-lg-10">
                                                                            <input type="text" name="address" class="form-control" placeholder="Enter the address of user" required value="{{ $solution_provider->address ?? ''}}" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-lg-2 col-form-label text-right">Phone</label>
                                                                        <div class="col-lg-4">
                                                                            <input type="text" name="tel" class="form-control" placeholder="Enter the phone number of user" required value="{{ $solution_provider->tel ?? ''}}" />
                                                                        </div>
                                                                    </div>

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

                                        <a href="" data-toggle="modal" data-target="#delete_user_{{$solution_provider->id ?? ''}}">
                                            <i class="fas fa-trash-alt text-danger mr-5"></i>
                                        </a>
                                        <div class="modal fade" id="delete_user_{{$solution_provider->id ?? ''}}" role="dialog"  aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Remove user from course</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!--begin::Form-->
                                                        <div class="card-body text-center">
                                                            <h3 class="mb-4">Are you sure you want to delete "{{$solution_provider->name ?? ''}}" ?</h3>
                                                            <p class="my-4">This user will be remove the solution provider</p>

                                                            <form action="{{url("admin/solution_provider/$solution_provider->id/delete")}}" method="post">
                                                                @csrf
                                                                <input type="number" class="d-none" name="user_id" value="{{$solution_provider->id ?? ''}}">
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



