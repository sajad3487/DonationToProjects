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
                                                        <a href="" data-toggle="modal" data-target="#new_subCategory_{{$category->id}}" class="btn btn-outline-success font-weight-bolder p-1 mb-2 mr-3 d-inline-block">
                                                            <i class="la la-plus p-0"></i></a>
                                                        <a href="" data-toggle="modal" data-target="#edit_category_{{$category->id}}" class="btn btn-outline-warning font-weight-bolder p-1 mb-2 mr-3 d-inline-block">
                                                            <i class="la la-edit p-0"></i></a>
                                                        <a href="" data-toggle="modal" data-target="#delete_category_{{$category->id}}" class="btn btn-outline-danger font-weight-bolder p-1 mb-2 mr-3 d-inline-block">
                                                            <i class="la la-trash p-0"></i></a>
                                                    </form>
                                                    <div class="modal fade" id="delete_category_{{$category->id}}" role="dialog"  aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Remove the category</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!--begin::Form-->
                                                                    <div class="text-center">
                                                                        <h3 class="mb-4">Are you sure you want to delete this category ?</h3>
                                                                        <p class="my-4">This category will be remove permanently</p>

                                                                        <button data-dismiss="modal" aria-label="Close" class="btn btn-light font-weight-bolder mr-5">
                                                                            Cancel
                                                                        </button>
                                                                        <a href="{{url("/admin/categories/$category->id/delete")}}" class="btn btn-danger font-weight-bolder">
                                                                            Delete
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                    <div class="modal fade" id="new_subCategory_{{$category->id}}" role="dialog"  aria-hidden="true">
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
                                                                    <div class="text-center p-0">
                                                                        <!--begin::Form-->
                                                                        <form class="form" action="{{url('/admin/categories/store')}}" method="post" enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div class="row">
                                                                                <div class=" col-lg-12">
                                                                                    @include('fragment.error')
                                                                                    <input type="number" name="parent_id" value="0" class="d-none">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-lg-2 col-form-label text-right">Title :</label>
                                                                                        <div class="col-lg-4">
                                                                                            <input type="text" name="title" class="form-control" placeholder="Enter category title"  required/>
                                                                                        </div>
                                                                                        <label class="col-lg-2 col-form-label text-right">Description :</label>
                                                                                        <div class="col-lg-4">
                                                                                            <input type="text" name="description" class="form-control" placeholder="Enter category description" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-lg-2 col-form-label text-right">Picture :</label>
                                                                                        <div class="col-lg-4">
                                                                                            <div class="input-group">
                                                                                                <input type="file" name="file" class="custom-file-input" id="customFile_1"/>
                                                                                                <label class="custom-file-label" for="customFile_1">Choose file</label>
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
                                                                                        <input type="number" class="d-none" name="parent_id" value="{{$category->id}}">
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
                                                    <div class="modal fade" id="edit_category_{{$category->id}}" role="dialog"  aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit the category:</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!--begin::Form-->
                                                                    <div class="text-center p-0">
                                                                        <!--begin::Form-->
                                                                        <form class="form" action="{{url("/admin/categories/$category->id/update")}}" method="post" enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('PUT')
                                                                            <div class=" row">
                                                                                <div class=" col-lg-12">
                                                                                    @include('fragment.error')
                                                                                    <input type="number" name="parent_id" value="0" class="d-none">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-lg-2 col-form-label text-right">Title :</label>
                                                                                        <div class="col-lg-4">
                                                                                            <input type="text" name="title" class="form-control" placeholder="Enter category title" value="{{$category->title ?? ''}}" required/>
                                                                                        </div>
                                                                                        <label class="col-lg-2 col-form-label text-right">Description :</label>
                                                                                        <div class="col-lg-4">
                                                                                            <input type="text" name="description" class="form-control" placeholder="Enter category description" value="{{$category->description ?? ''}}"/>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label class="col-lg-2 col-form-label text-right">Picture :</label>
                                                                                        <div class="col-lg-4">
                                                                                            <div class="input-group">
                                                                                                <input type="file" name="file" class="custom-file-input" id="customFile_edit_1"/>
                                                                                                <label class="custom-file-label" for="customFile_edit_1">Choose file</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <label class="col-lg-2 col-form-label text-right">Status :</label>
                                                                                        <div class="col-lg-4">
                                                                                            <div class="input-group">
                                                                                                <select name="status" required class="form-control">
                                                                                                    <option value="">Select</option>
                                                                                                    <option @if($category->status == 1) selected @endif value="1" selected>Active</option>
                                                                                                    <option @if($category->status == 0) selected @endif value="0">Inactive</option>
                                                                                                </select>
                                                                                            </div>
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

                                                    <table class="table table-bordered table-checkable" id="kt_datatable">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Title</th>
                                                        <th class="text-center">Description</th>
                                                        <th class="text-center">Image</th>
                                                        <th class="text-center">status</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                    </thead>

                                                    <tbody>
                                                    @if($category->subCategory != null)
                                                    @foreach($category->subCategory as $subCat)
                                                        <tr>
                                                            <td class="text-center">{{$subCat->id ?? ''}}</td>
                                                            <td class="text-center">{{$subCat->title ?? ''}}</td>
                                                            <td class="text-center">{{$subCat->description ?? ''}}</td>
                                                            <td class="text-center">
                                                                <a href="{{$subCat->image_path ?? ''}}" target="_blank"><img src="{{$subCat->image_path ?? ''}}" style="width: 50px;height: 50px" alt=""></a>
                                                            </td>
                                                            <td class="text-center">
                                                                @if(isset($subCat->status) && $subCat->status == 1)
                                                                    <span class="label font-weight-bold label-lg label-light-success label-inline">Active</span>
                                                                @else
                                                                    <span class="label font-weight-bold label-lg label-light-danger label-inline">Inactive</span>
                                                                @endif
                                                            </td>
                                                            <td class="text-center" style='white-space: nowrap'>
                                                                <a  href="" data-toggle="modal" data-target="#edit_subCategory_{{$subCat->id}}"><i class="far fa-edit text-warning mr-5"></i></a>
                                                                <a href="" data-toggle="modal" data-target="#delete_category_{{$subCat->id}}"><i class="fas fa-trash-alt text-danger mr-5"></i></a>
                                                            </td>
                                                         </tr>
                                                        <div class="modal fade" id="edit_subCategory_{{$subCat->id}}" role="dialog"  aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Edit the category</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!--begin::Form-->
                                                                        <div class="text-center p-0">
                                                                            <!--begin::Form-->
                                                                            <form class="form" action="{{url("/admin/categories/$subCat->id/update")}}" method="post" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="row">
                                                                                    <div class=" col-lg-12">
                                                                                        @include('fragment.error')
                                                                                        <input type="number" name="parent_id" value="0" class="d-none">
                                                                                        <div class="form-group row">
                                                                                            <label class="col-lg-2 col-form-label text-right">Title :</label>
                                                                                            <div class="col-lg-4">
                                                                                                <input type="text" name="title" class="form-control" placeholder="Enter category title" value="{{$subCat->title ?? ''}}" required/>
                                                                                            </div>
                                                                                            <label class="col-lg-2 col-form-label text-right">Description :</label>
                                                                                            <div class="col-lg-4">
                                                                                                <input type="text" name="description" class="form-control" placeholder="Enter category description" value="{{$subCat->description ?? ''}}"/>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label class="col-lg-2 col-form-label text-right">Picture :</label>
                                                                                            <div class="col-lg-4">
                                                                                                <div class="input-group">
                                                                                                    <input type="file" name="file" class="custom-file-input" id="customFile_edit_2"/>
                                                                                                    <label class="custom-file-label" for="customFile_edit_2">Choose file</label>
                                                                                                </div>
                                                                                            </div>
                                                                                            <label class="col-lg-2 col-form-label text-right">Status :</label>
                                                                                            <div class="col-lg-4">
                                                                                                <div class="input-group">
                                                                                                    <select name="status" required class="form-control">
                                                                                                        <option value="">Select</option>
                                                                                                        <option @if($subCat->status == 1) selected @endif value="1" >Active</option>
                                                                                                        <option @if($subCat->status == 0) selected @endif value="0">Inactive</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <input type="number" name="parent_id" value="{{$subCat->parent_id}}" class="d-none">
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
                                                        <div class="modal fade" id="delete_category_{{$subCat->id}}" role="dialog"  aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Remove category</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!--begin::Form-->
                                                                        <div class=" text-center">
                                                                            <h3 class="mb-4">Are you sure you want to delete this category ?</h3>
                                                                            <p class="my-4">This category will be remove permanently</p>

                                                                            <button data-dismiss="modal" aria-label="Close" class="btn btn-light font-weight-bolder mr-5">
                                                                                Cancel
                                                                            </button>
                                                                            <a href="{{url("/admin/categories/$subCat->id/delete")}}" class="btn btn-danger font-weight-bolder">
                                                                                Delete
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

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
