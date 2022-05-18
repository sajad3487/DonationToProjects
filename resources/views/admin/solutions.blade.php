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
                                Solutions
                                <span class="d-block text-muted pt-2 font-size-sm">This page shows Solutions info</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="" data-toggle="modal" data-target="#new_solution" class="btn btn-light-success font-weight-bold mr-2">New Solution</a>
                        </div>
                    </div>
                    <div class="modal fade" id="new_solution" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">New Solution</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!--begin::Form-->
                                    <div class="card-body text-left p-0">

                                        <form  action="{{url("/admin/solutions/store")}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card-body p-3">
                                                @include('fragment.error')
                                                <div class="form-group mt-1">
                                                    <label>Title</label>
                                                    <input type="text" name="title" class="form-control"  placeholder="Enter title of the solution"/>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group mt-1">
                                                            <label for="exampleSelect1">Category</label>
                                                            <select class="form-control" id="exampleSelect1" name="category_id" required>
                                                                <option>Select a category for the solution</option>
                                                            @foreach($categories as $category)
                                                                    <option value="{{$category->id ?? ''}}">{{$category->title ?? ''}}</option>
                                                                    @foreach($category->activeSubCat as $subCategory)
                                                                        <option value="{{$subCategory->id ?? ''}}"> ---- {{'  '.$subCategory->title ?? ''}}</option>
                                                                        @endforeach
                                                                    @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group mt-1">
                                                            <label for="exampleSelect1">Users</label>
                                                            <select class="form-control" id="exampleSelect" name="user_id" required>
                                                                <option>Select a user to assignee</option>
                                                                @foreach($owners as $owner)
                                                                    <option value="{{$owner->id ?? ''}}">{{$owner->name ?? ''}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mt-1">
                                                    <label for="exampleInputPassword1">Brief description:</label>
                                                    <input type="text" name="brief_description" class="form-control" id="exampleInputPassword1" placeholder="Enter the brief description of the solution"/>
                                                </div>
                                                <div class="form-group mt-1 mb-1">
                                                    <label for="exampleTextarea">Description:</label>
                                                    <textarea class="form-control" id="exampleTextarea" name="description" rows="2"></textarea>
                                                </div>
                                                <div class="form-group mt-1 mb-1">
                                                    <label for="exampleTextarea1">Issue:</label>
                                                    <textarea class="form-control" id="exampleTextarea1" name="issue" rows="2"></textarea>
                                                </div>
                                                <div class="form-group mt-1 mb-1">
                                                    <label for="exampleTextarea2">Solution:</label>
                                                    <textarea class="form-control" id="exampleTextarea2" name="solution" rows="2"></textarea>
                                                </div>
                                                <div class="form-group mt-1 mb-1">
                                                    <label for="exampleTextarea3">The Function:</label>
                                                    <textarea class="form-control" id="exampleTextarea3" name="our_function" rows="2"></textarea>
                                                </div>
                                                <div class="form-group mt-1 mb-1">
                                                    <label for="exampleTextarea4">Reason:</label>
                                                    <textarea class="form-control"  id="exampleTextarea4" name="reason" rows="2"></textarea>
                                                </div>
                                                <div class="form-group mt-1 mb-1">
                                                    <label for="exampleTextarea5">Effect:</label>
                                                    <textarea class="form-control" id="exampleTextarea5" name="effect" rows="2"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <div class="form-group mt-1">
                                                            <label for="exampleSelect1">Goal amount</label>
                                                            <input type="number" name="goal_amount" class="form-control" required />
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="card-footer text-center">
                                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="overflow-auto">
                            <!--begin: Datatable-->
                            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Owner</th>
                                    <th>Status</th>
                                    <th>Progress</th>
                                    <th>Donated</th>
{{--                                    <th>Profile Pic</th>--}}
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($solutions as $solution_key=>$solution)
                                <tr>
                                    <td>{{$solution_key + 1 ?? ''}}</td>
                                    <td>{{$solution->title ?? ''}} {{$solution->lname ?? ''}}</td>
                                    <td>{{$solution->owner->name ?? ''}}</td>
                                    <td>
                                        @if($solution->status == 1)
                                            <span class="label font-weight-bold label-lg label-light-danger label-inline">
                                                uncompleted
                                            </span>
                                            @elseif($solution->status == 2)
                                            <span class="label font-weight-bold label-lg label-light-info label-inline">
                                                Waiting to confirm
                                            </span>
                                            @elseif($solution->status == 3)
                                            <span class="label font-weight-bold label-lg label-light-success label-inline">
                                                Published
                                            </span>
                                        @endif
                                    </td>
                                    <td>{{$solution->progress ?? ''}}</td>
                                    <td>{{$solution->donors ?? ''}}</td>
                                    <td>
                                        <a href="{{url("admin/solutions/$solution->id/edit")}}" >
                                            <i class="flaticon-edit text-warning mr-5"></i>
                                        </a>

                                        <a href="" data-toggle="modal" data-target="#delete_solution_{{$solution->id ?? ''}}">
                                            <i class="fas fa-trash-alt text-danger mr-5"></i>
                                        </a>
                                        <div class="modal fade" id="delete_solution_{{$solution->id ?? ''}}" role="dialog"  aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Remove the solution</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!--begin::Form-->
                                                        <div class="card-body text-center">
                                                            <h3 class="mb-4">Are you sure you want to delete "{{$solution->title ?? ''}}" ?</h3>
                                                            <p class="my-4">This solution will be remove immediately</p>

                                                            <form action="{{url("admin/solutions/$solution->id/delete")}}" method="post">
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



