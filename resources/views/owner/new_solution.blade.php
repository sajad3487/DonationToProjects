@extends('layouts.owner.master')

@section('content')



    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" >
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        @include('layouts.owner.Sidebar')
                    </div>
                    <div class="col-12 col-md-8">

                        <div class="card card-custom">
                            <div class="card-header">
                                <div class="d-flex align-items-baseline flex-wrap mr-5 mt-5">
                                    <!--begin::Page Title-->
                                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                                        Create a New Solution
                                    </h5>
                                    <!--end::Page Title-->

                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                        <li class="breadcrumb-item">
                                            <a href="{{url('owner/solutions')}}" class="text-muted">
                                                Solutions
                                            </a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <div href="" class="text-muted">
                                                new Solution
                                            </div>
                                        </li>
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <div class="card-toolbar">
                                    <div class="example-tools justify-content-center">
                                        <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                                        <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                                    </div>
                                </div>
                            </div>

                            <form  action="{{url("/owner/solutions/store")}}" method="post" class="p-5" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body p-3">
                                    @include('fragment.error')
                                    <div class="form-group mt-1">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"  placeholder="Enter title of the solution"/>
                                        <span class="form-text text-muted">Enter less than 250 character.</span>

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
                                                <label for="example-number-input" class="">Goal:</label>
                                                <div class="">
                                                    <input class="form-control" type="number" name="goal_amount" id="example-number-input"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-1">
                                        <label for="exampleInputPassword1">Brief description:</label>
                                        <input type="text" name="brief_description" class="form-control" id="exampleInputPassword1" placeholder="Enter the brief description of the solution"/>
                                        <span class="form-text text-muted">Enter less than 250 character.</span>
                                    </div>
                                    <div class="form-group mt-1">
                                        <label for="exampleTextarea">Description:</label>
                                        <textarea class="form-control" name="description" rows="2"></textarea>
                                        <span class="form-text text-muted">Enter less than 5000 character.</span>

                                    </div>
                                    <div class="form-group mt-1">
                                        <label for="exampleTextarea1">Issue:</label>
                                        <textarea class="form-control" name="issue" rows="2"></textarea>
                                        <span class="form-text text-muted">Enter less than 5000 character.</span>

                                    </div>
                                    <div class="form-group mt-1">
                                        <label for="exampleTextarea2">Solution:</label>
                                        <textarea class="form-control" name="solution" rows="2"></textarea>
                                        <span class="form-text text-muted">Enter less than 5000 character.</span>
                                    </div>
                                    <div class="form-group mt-1">
                                        <label for="exampleTextarea3">The Function:</label>
                                        <textarea class="form-control" name="our_function" rows="2"></textarea>
                                        <span class="form-text text-muted">Enter less than 5000 character.</span>
                                    </div>
                                    <div class="form-group mt-1">
                                        <label for="exampleTextarea4">Reason:</label>
                                        <textarea class="form-control"  name="reason" rows="2"></textarea>
                                        <span class="form-text text-muted">Enter less than 5000 character.</span>
                                    </div>
                                    <div class="form-group mt-1">
                                        <label for="exampleTextarea5">Effect:</label>
                                        <textarea class="form-control" name="effect" rows="2"></textarea>
                                        <span class="form-text text-muted">Enter less than 5000 character.</span>
                                    </div>
                                    <input type="number" name="user_id" value="{{$user->id}}" class="d-none">
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
            <!--end::Container-->
        </div>
        <!--end::Entry-->

        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">



            </div>
            <!--end::Container-->
        </div>
    </div>
    <!--end::Content-->





@endsection
