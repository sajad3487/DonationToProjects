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
                                    <!--begin::Header-->
                                    <div class="card-header py-3">
                                        <div class="card-title align-items-start flex-column">
                                            <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
                                            <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
                                        </div>
                                        <div class="card-toolbar">
                                            <button type="submit" class="btn btn-success mr-2" form="profile">Save Changes</button>
                                        </div>
                                    </div>
                                    <!--end::Header-->

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
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                        <input type="text" class="form-control form-control-lg form-control-solid " disabled value="{{$user->email ?? ''}}" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                            </div>
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


                <!--begin::Row-->
                <div class="row">

{{--                    @foreach($projects as $key=>$project)--}}
{{--                        @if($project->status == 2)--}}
{{--                            <div class="col-md-4">--}}
{{--                                <!--begin::Nav Panel Widget 4-->--}}
{{--                                <div class="card card-custom card-stretch gutter-b">--}}
{{--                                    <!--begin::Body-->--}}
{{--                                    <div class="card-body px-6">--}}
{{--                                        <!--begin::Wrapper-->--}}
{{--                                        <div class="d-flex justify-content-between flex-column h-100">--}}
{{--                                            <!--begin::Container-->--}}
{{--                                            <div class="h-100">--}}
{{--                                                <!--begin::Header-->--}}
{{--                                                <div class="d-flex flex-column flex-center" >--}}
{{--                                                    <!--begin::Image-->--}}
{{--                                                    <div class="bgi-no-repeat bgi-size-cover rounded min-h-180px w-100" style="background-image: url({{asset($project->project_image[0]->media_path)}})"></div>--}}
{{--                                                    <!--end::Image-->--}}
{{--                                                    <!--begin::Title-->--}}
{{--                                                    <a href="{{url("owner/project/$project->id/view")}}" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">--}}
{{--                                                        <h3>{{$project->title ?? ''}}</h3>--}}
{{--                                                    </a>--}}
{{--                                                    <!--end::Title-->--}}

{{--                                                    <!--begin::Text-->--}}
{{--                                                    --}}{{--                                            <div class="font-weight-bold text-dark-50 font-size-sm pb-7"></div>--}}
{{--                                                    <input type="text" class="d-none" id="deadline-{{$key}}" value="{{$project->deadline}}">--}}
{{--                                                    <!--end::Text-->--}}
{{--                                                    <p class="pcounter p-0 m-0" id="demo-{{$key}}"></p>--}}

{{--                                                    <script>--}}
{{--                                                        var deadline{{$key}} = document.getElementById('deadline-{{$key}}').value;--}}
{{--                                                        var countDownDate{{$key}} = new Date(deadline{{$key}}).getTime();--}}

{{--                                                        // Update the count down every 1 second--}}
{{--                                                        var x{{$key}} = setInterval(function() {--}}

{{--                                                            // Get today's date and time--}}
{{--                                                            var now{{$key}} = new Date().getTime();--}}
{{--                                                            // Find the distance between now and the count down date--}}
{{--                                                            var distance{{$key}} = countDownDate{{$key}} - now{{$key}};--}}

{{--                                                            // Time calculations for days, hours, minutes and seconds--}}
{{--                                                            var days{{$key}} = Math.floor(distance{{$key}} / (1000 * 60 * 60 * 24));--}}
{{--                                                            var hours{{$key}} = Math.floor((distance{{$key}} % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));--}}
{{--                                                            var minutes{{$key}} = Math.floor((distance{{$key}} % (1000 * 60 * 60)) / (1000 * 60));--}}
{{--                                                            var seconds{{$key}} = Math.floor((distance{{$key}} % (1000 * 60)) / 1000);--}}
{{--                                                            // Output the result in an element with id="demo"--}}


{{--                                                            // If the count down is over, write some text--}}
{{--                                                            if (distance{{$key}} < 0) {--}}
{{--                                                                document.getElementById('demo-{{$key}}').innerHTML = "EXPIRED";--}}
{{--                                                                document.getElementById('demo-{{$key}}').style.color = "red";--}}
{{--                                                                clearInterval(x);--}}
{{--                                                            }else{--}}
{{--                                                                document.getElementById('demo-{{$key}}').innerHTML = days{{$key}} + "d " + hours{{$key}} + "h "--}}
{{--                                                                    + minutes{{$key}} + "m " + seconds{{$key}} + "s ";--}}
{{--                                                            }--}}
{{--                                                        }, 1000);--}}
{{--                                                    </script>--}}
{{--                                                </div>--}}
{{--                                                <!--end::Header-->--}}
{{--                                            </div>--}}
{{--                                            <!--eng::Container-->--}}

{{--                                            <!--begin::Footer-->--}}
{{--                                            <div class="d-flex flex-center mt-md-2" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="" data-placement="right" data-original-title="">--}}
{{--                                                <h6 class="col-6 px-0">Price : {{$project->net_price ?? ''}} $</h6>--}}

{{--                                                <a href="{{url("owner/project/$project->id/view")}}" class="btn btn-outline-primary font-weight-bolder font-size-sm py-3 px-14">View</a>--}}
{{--                                            </div>--}}
{{--                                            <!--end::Footer-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Wrapper-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Body-->--}}
{{--                                </div>--}}
{{--                                <!--end::Nav Panel Widget 4-->--}}
{{--                            </div>--}}
{{--                        @else--}}
{{--                            <div class="col-md-4">--}}
{{--                                <!--begin::Nav Panel Widget 4-->--}}
{{--                                <div class="card card-custom card-stretch gutter-b">--}}
{{--                                    <!--begin::Body-->--}}
{{--                                    <div class="card-body">--}}
{{--                                        <!--begin::Wrapper-->--}}
{{--                                        <div class="d-flex justify-content-between flex-column h-100">--}}
{{--                                            <!--begin::Container-->--}}
{{--                                            <div class="h-100">--}}
{{--                                                <!--begin::Header-->--}}
{{--                                                <div class="d-flex flex-column flex-center">--}}
{{--                                                    <!--begin::Image-->--}}
{{--                                                    <div class="bgi-no-repeat bgi-size-cover rounded min-h-180px w-100" style="background-image: url({{asset($project->project_image[0]->media_path)}})"></div>--}}
{{--                                                    <!--end::Image-->--}}

{{--                                                    <!--begin::Title-->--}}
{{--                                                    <a href="{{url("owner/project/$project->id/view")}}" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">{{$project->title ?? ''}}</a>--}}
{{--                                                    <!--end::Title-->--}}

{{--                                                    <!--begin::Text-->--}}
{{--                                                    <div class="font-weight-bold text-dark-50 font-size-sm ">--}}
{{--                                                        <h6 class="mt-3">Finished at : {{date('Y-M-d', strtotime($project->deadline))}}</h6>--}}
{{--                                                    </div>--}}
{{--                                                    <!--end::Text-->--}}
{{--                                                </div>--}}
{{--                                                <!--end::Header-->--}}
{{--                                            </div>--}}
{{--                                            <!--eng::Container-->--}}

{{--                                            <!--begin::Footer-->--}}
{{--                                            <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="" data-placement="right" data-original-title="">--}}
{{--                                                <h6 class="col-6 m-0 p-0">Price : {{$project->net_price ?? ''}} $</h6>--}}

{{--                                                <a href="{{url("owner/project/$project->id/view")}}" class="btn btn-outline-primary font-weight-bolder font-size-sm py-3 px-14">View</a>--}}
{{--                                            </div>--}}
{{--                                            <!--end::Footer-->--}}
{{--                                        </div>--}}
{{--                                        <!--end::Wrapper-->--}}
{{--                                    </div>--}}
{{--                                    <!--end::Body-->--}}
{{--                                </div>--}}
{{--                                <!--end::Nav Panel Widget 4-->--}}
{{--                            </div>--}}

{{--                        @endif--}}
{{--                    @endforeach--}}
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
    </div>
    <!--end::Content-->
@endsection
