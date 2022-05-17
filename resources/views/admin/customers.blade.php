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
                                Customers
                                <span class="d-block text-muted pt-2 font-size-sm">This page shows customers info</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="" data-toggle="modal" data-target="#new_user" class="btn btn-light-primary font-weight-bold mr-2">New Customer</a>
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
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Address</th>
                                    <th class="text-center">Profile Pic</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($customers as $customer_key=>$customer)
                                    <tr>
                                        <td class="text-center">{{$customer_key +1 ?? ''}}</td>
                                        <td class="text-center">{{$customer->name ?? ''}} {{$customer->lname ?? ''}}</td>
                                        <td class="text-center">{{$customer->email ?? ''}}</td>
                                        <td class="text-center">{{$customer->tel ?? ''}}</td>
                                        <td class="text-center">{{$customer->address ?? ''}}</td>
                                        <td class="text-center">
                                            <div class="image-input image-input-outline"  id="kt_image_1">
                                                <a href="" data-toggle="modal" data-target="#profile_picture_{{$customer->id ?? ''}}"><div class="image-input-wrapper " style="background-image: url({{asset($customer->profile_picture)}}); width: 30px;height: 30px"></div></a>
                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                            </div>
                                            <div class="modal fade" id="profile_picture_{{$customer->id ?? ''}}" role="dialog"  aria-hidden="true">
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
                                                                <div class="bgi-no-repeat bgi-size-cover rounded min-h-250px w-250px mx-auto" style="background-image: url({{asset($customer->profile_picture)}})"></div>

                                                                <form class="form mt-5" action="{{url("/admin/customers/$customer->id/update_profile_picture")}}" method="post" enctype="multipart/form-data">
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
                                            <a href="" data-toggle="modal" data-target="#new_message_{{$customer->id ?? ''}}">
                                                <i class="flaticon-chat-2 text-success mr-5"></i>
                                            </a>
                                            <div class="modal fade" id="new_message_{{$customer->id ?? ''}}" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">New Conversation With {{$customer->name ?? ''}}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i aria-hidden="true" class="ki ki-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body p-0">
                                                            <!--begin::Body-->
                                                            <div class="card-body py-6 px-10 min-h-200px" >
                                                                <!--begin::Scroll-->
                                                                <div class="scroll scroll-pull" data-mobile-height="350">
                                                                    <!--begin::Messages-->
                                                                    <div class="messages">
                                                                    </div>
                                                                    <!--end::Messages-->
                                                                </div>
                                                                <!--end::Scroll-->

                                                            </div>
                                                            <!--end::Body-->
                                                            <!--begin::Footer-->
                                                            <div class="card-footer align-items-center">
                                                                <form action="{{url("admin/messages/store")}}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <!--begin::Compose-->
                                                                    <input type="number" name="owner_id" value="{{auth()->id()}}" class="d-none">
                                                                    <input type="number" name="destination_id" value="{{$customer->id ?? ''}}" class="d-none">
                                                                    <textarea name="body" class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                                                                    <div class="d-flex align-items-center justify-content-between mt-5">
                                                                        <div class="mr-3">

                                                                        </div>
                                                                        <div>
                                                                            <button type="submit" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                                                                        </div>
                                                                    </div>
                                                                    <!--begin::Compose-->
                                                                </form>
                                                            </div>
                                                            <!--end::Footer-->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <a href="" data-toggle="modal" data-target="#edit_user_{{$customer->id ?? ''}}">
                                                <i class="fas fa-user-edit text-warning mr-5"></i>
                                            </a>
                                            <div class="modal fade" id="edit_user_{{$customer->id ?? ''}}" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit {{$customer->email ?? ''}}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i aria-hidden="true" class="ki ki-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!--begin::Form-->
                                                            <div class="card-body text-center p-0">
                                                                <form class="form mt-5" action="{{url("/admin/customers/$customer->id/update")}}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="">
                                                                        @include('fragment.error')
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-2 col-form-label text-right">First name</label>
                                                                            <div class="col-lg-4">
                                                                                <input type="text" name="name" class="form-control" placeholder="Enter the first name of user" required value="{{$customer->name ?? ''}}" />
                                                                            </div>
                                                                            <label class="col-lg-2 col-form-label text-right">Last name</label>
                                                                            <div class="col-lg-4">
                                                                                <input type="text" name="lname" class="form-control" placeholder="Enter the last name of user" required value="{{$customer->lname ?? ''}}" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-2 col-form-label text-right">Email</label>
                                                                            <div class="col-lg-4">
                                                                                <input type="email" name="email" class="form-control" placeholder="Enter the email of user" required value="{{ $customer->email ?? ''}}" disabled />
                                                                            </div>
                                                                            <label class="col-lg-2 col-form-label text-right">Password:</label>
                                                                            <div class="col-lg-4">
                                                                                <input type="password" name="password" class="form-control" placeholder="Enter password for the user account" required/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-2 col-form-label text-right">Address</label>
                                                                            <div class="col-lg-10">
                                                                                <input type="text" name="address" class="form-control" placeholder="Enter the address of user" required value="{{ $customer->address ?? ''}}"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-2 col-form-label text-right">Phone</label>
                                                                            <div class="col-lg-4">
                                                                                <input type="text" name="tel" class="form-control" placeholder="Enter the phone number of user" required value="{{ $customer->tel ?? ''}}" />
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

                                            <a href="" data-toggle="modal" data-target="#delete_user_{{$customer->id ?? ''}}">
                                                <i class="fas fa-trash-alt text-danger mr-5"></i>
                                            </a>
                                            <div class="modal fade" id="delete_user_{{$customer->id ?? ''}}" role="dialog"  aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Remove user</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i aria-hidden="true" class="ki ki-close"></i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!--begin::Form-->
                                                            <div class="card-body text-center">
                                                                <h3 class="mb-4">Are you sure you want to delete "{{$customer->name ?? ''}}" ?</h3>
                                                                <p class="my-4">This user will be remove permanently</p>

                                                                <form action="{{url("admin/customers/$customer->id/delete")}}" method="post">
                                                                    @csrf
                                                                    <input type="number" class="d-none" name="user_id" value="{{$customer->id ?? ''}}">
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



