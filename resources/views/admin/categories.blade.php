@extends('layouts.admin.master')

@section('content')

<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">

            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-12">

                    <!--begin::Card-->
                    <div class="card card-custom gutter-b">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-label">Category </h3>
                            </div>
                            <div class="card-toolbar">

                                <a href="" data-toggle="modal" data-target="#new_category" class="btn btn-primary font-weight-bolder">
                                    <i class="la la-plus p-0"></i>
                                    New Category
                                </a>
                            </div>
                            <div class="modal fade" id="new_category" role="dialog"  aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Create a new category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!--begin::Form-->
                                            <div class="card-body text-center p-0">
                                                <!--begin::Form-->
                                                <form class="form" action="{{url('/admin/categories/store')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="card-body row">
                                                        <div class=" col-lg-12">
                                                            @include('fragment.error')
                                                            <input type="number" name="parent_id" value="0" class="d-none">
                                                            <div class="form-group row">
                                                                <label class="col-lg-2 col-form-label text-right">Title :</label>
                                                                <div class="col-lg-4">
                                                                    <input type="text" name="title" class="form-control" placeholder="Enter category title" value="{{old('title') ?? ''}}" required/>
                                                                </div>
                                                                <label class="col-lg-2 col-form-label text-right">Description :</label>
                                                                <div class="col-lg-4">
                                                                    <input type="text" name="description" class="form-control" placeholder="Enter category description" value="{{old('description') ?? ''}}"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-2 col-form-label text-right">Picture :</label>
                                                                <div class="col-lg-4">
                                                                    <div class="input-group">
                                                                        <input type="file" name="file" class="custom-file-input" id="customFile"/>
                                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                                <label class="col-lg-2 col-form-label text-right">Status :</label>
                                                                <div class="col-lg-4">
                                                                    <div class="input-group">
                                                                        <select name="status" required class="form-control">
                                                                            <option value="">Select</option>
                                                                            <option value="1" selected>Active</option>
                                                                            <option value="0">Inactive</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-2 col-form-label text-right">Minimum Price :</label>
                                                                <div class="col-lg-4">
                                                                    <input type="number" name="min_price" class="form-control" placeholder="Enter min price" value="{{old('min_price') ?? ''}}"/>
                                                                </div>
                                                                <label class="col-lg-2 col-form-label text-right">Maximum Price :</label>
                                                                <div class="col-lg-4">
                                                                    <input type="number" name="max_price" class="form-control" placeholder="Enter max price" value="{{old('max_price') ?? ''}}"/>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-lg-2 col-form-label text-right">Commission (%) :</label>
                                                                <div class="col-lg-4">
                                                                    <input type="number" name="commission" class="form-control" placeholder="Enter percentage of commission" value="{{old('commission') ?? ''}}" required/>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="row">
                                                            <div class="mx-auto">
                                                                <button type="submit" class="btn btn-success ">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-body">
                            <!--begin::Accordion-->
                            <div class="accordion accordion-solid accordion-toggle-plus" id="accordion3">
                                @if(isset($categories))
                                @foreach($categories as $category)
                                    <div class="card">
                                        <div class="card-header" id="category-{{$category->id ?? ''}}">
                                            <div class="card-title collapsed" data-toggle="collapse" data-target="#collapse-{{$category->id ?? ''}}">
                                                {{$category->title ?? ''}}
                                                <div class="ml-10">
                                                    @if($category->status ==1 )
                                                        <span class="label font-weight-bold label-lg label-light-success label-inline">Active</span>

                                                    @else
                                                        <span class="label font-weight-bold label-lg label-light-danger label-inline">Inactive</span>

                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                        <div id="collapse-{{$category->id ?? ''}}" class="collapse"  data-parent="#category-{{$category->id ?? ''}}">
                                            <div class="card-body">
                                                <div class="overflow-auto">

                                                <div class="btn-group">

                                                    <form  method="post">
                                                        <a href="{{url("/admin/categories/$category->id/subCategory")}}" class="btn btn-outline-success font-weight-bolder p-1 mb-2 mr-3 d-inline-block">
                                                            <i class="la la-plus p-0"></i></a>
                                                        <a href="{{url("/admin/categories/$category->id/edit")}}" class="btn btn-outline-warning font-weight-bolder p-1 mb-2 mr-3 d-inline-block">
                                                            <i class="la la-edit p-0"></i></a>
                                                        <a href="{{url("/admin/categories/$category->id/delete")}}" class="btn btn-outline-danger font-weight-bolder p-1 mb-2 mr-3 d-inline-block">
                                                            <i class="la la-trash p-0"></i></a>
                                                    </form>
                                                </div>
                                                <table class="table table-bordered table-checkable" id="kt_datatable">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Min Price</th>
                                                        <th>Max Price</th>
                                                        <th>Image</th>
                                                        <th>status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                    @if($category->subCategory != null)
                                                    @foreach($category->subCategory as $subCat)
                                                        <tr>
                                                            <td>{{$subCat->id ?? ''}}</td>
                                                            <td>{{$subCat->title ?? ''}}</td>
                                                            <td>{{$subCat->description ?? ''}}</td>
                                                            <td>{{$subCat->min_price.'$' ?? ''}}</td>
                                                            <td>{{$subCat->max_price.'$' ?? ''}}</td>
                                                            <td class="text-center">
                                                                <a href="{{$subCat->image_path ?? ''}}" target="_blank"><img src="{{$subCat->image_path ?? ''}}" style="width: 50px;height: 50px" alt=""></a>
                                                            </td>
                                                            <td>
                                                                @if(isset($subCat->status) && $subCat->status == 1)
                                                                    <span class="label font-weight-bold label-lg label-light-success label-inline">Active</span>
                                                                @else
                                                                    <span class="label font-weight-bold label-lg label-light-danger label-inline">Inactive</span>
                                                                @endif
                                                            </td>
                                                            <td style='white-space: nowrap'>
                                                                <a href="{{url("/admin/categories/$subCat->id/edit")}}"><i class="far fa-edit text-warning mr-5"></i></a>
                                                                <a href="{{url("/admin/categories/$subCat->id/delete")}}"><i class="fas fa-trash-alt text-danger mr-5"></i></a>
                                                            </td>
                                                         </tr>
                                                     @endforeach
                                                        @endif
                                                    </tbody>

                                                </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                                    @endif
                            </div>
                            <!--end::Accordion-->

                        </div>
                    </div>
                    <!--end::Card-->

                </div>

            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
@endsection
