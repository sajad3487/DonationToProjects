@extends('layouts.owner.master')
@section('content')


    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        @include('layouts.owner.Sidebar')
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="row">
                            <div class="flex-row-fluid ml-lg-8">
                                <!--begin::Card-->
                                <div class="card card-custom card-stretch">
                                    <div class="card-header card-header-left ribbon ribbon-clip ribbon-left">
                                        <div class="ribbon-target px-8" style="top: 12px;">
                                            <span class="ribbon-inner bg-info"></span>{{$user->level ?? ''}}
                                        </div>
                                        <h3 class="card-title ml-25">
                                            Personal Information
                                        </h3>
                                        <div class="card-toolbar">
                                            <button type="submit" class="btn btn-success mr-2" form="profile">Save Changes</button>
                                        </div>
                                    </div>


                                    <!--begin::Form-->
                                    <form class="form" action="{{url("owner/profile/$user->id/update")}}" method="post" enctype="multipart/form-data" id="profile">
                                        @csrf
                                        @method('PUT')
                                        <!--begin::Body-->
                                        <div class="card-body px-20">
                                            <div class="form-group row m-0">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url({{asset($user->profile_picture)}})">
                                                        <div class="image-input-wrapper" style="background-image: url({{asset($user->profile_picture)}})"></div>

                                                    </div>
                                                    <span class="form-text text-muted">Allowed file types:  png, jpg, jpeg.</span>

                                                    <div class="form-group mt-2">
                                                        <div></div>
                                                        <div class="custom-file">
                                                            <input type="file" name="file" class="custom-file-input" id="customFile"/>
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control form-control-lg form-control-solid" type="text" name="name" value="{{$user->name ?? ''}}"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <input class="form-control form-control-lg form-control-solid" type="text" name="name" value="{{$user->lname ?? ''}}"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Phone</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
                                                        <input type="text" name="tel" class="form-control form-control-lg form-control-solid" value="{{$user->tel ?? ''}}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <textarea class="form-control form-control-solid" name="description" rows="3">{{$user->description ?? ''}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                                <div class="col-lg-9 col-xl-6">
                                                    <div class="input-group input-group-lg input-group-solid">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                        <input type="text" class="form-control form-control-lg form-control-solid " disabled value="{{$user->email ?? ''}}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </form>
                                    <!--end::Form-->
                                    <div class="separator separator-solid mb-10"></div>

                                    <h3 class="px-20 pb-5">
                                        Levels :
                                    </h3>
                                    <div class="px-10">
                                    @foreach($levels as $level)
                                        <!--begin::Separator-->
                                            <div class="separator separator-solid my-3"></div>
                                            <!--end::Separator-->

                                            <!--begin::Bottom-->
                                            <div class="d-flex align-items-center flex-wrap ml-10 px-10 pb-5">
                                                <h4 class="col-3">
                                                    {{$level->name ?? ''}}
                                                </h4>
                                                <!--begin: Item-->
                                                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                    <span class="mr-4">
                                                        <i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
                                                    </span>
                                                    <div class="d-flex flex-column text-dark-75">
                                                        <span class="font-weight-bolder font-size-sm">Solutions</span>
                                                        <span class="font-weight-bolder font-size-h5">{{$level->first_requirement ?? ''}}</span>
                                                    </div>
                                                </div>
                                                <!--end: Item-->

                                                <!--begin: Item-->
                                                <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                                                    <span class="mr-4">
                                                        <i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
                                                    </span>
                                                    <div class="d-flex flex-column text-dark-75">
                                                        <span class="font-weight-bolder font-size-sm">Donations</span>
                                                        <span class="font-weight-bolder font-size-h5"><span class="text-dark-50 font-weight-bold">$</span>{{$level->second_requirement ?? ''}}</span>
                                                    </div>
                                                </div>
                                                <!--end: Item-->

                                            </div>
                                            <!--end::Bottom-->
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->

    </div>
    <!--end::Content-->
@endsection
