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
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <!--begin::Tiles Widget 9-->
                                        <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b" style="height: 150px; background-image: url({{asset('media/stock-600x400/img-40.jpg')}})">
                                            <!--begin::Body-->
                                            <div class="card-body d-flex flex-column">
                                                <!--begin::Title-->
                                                <a href="{{url("owner/solutions")}}" class="text-white text-hover-primary font-weight-bolder font-size-h3">Solutions</a>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Tiles Widget 9-->
                                    </div>
                                    <div class="col-xl-9">
                                        <!--begin::Mixed Widget 10-->
                                        <div class="card card-custom bg-light-success gutter-b" style="height: 150px">
                                            <!--begin::Body-->
                                            <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="mr-2">
                                                    <h3 class="font-weight-bolder">New Solution</h3>
                                                    <div class="text-dark-50 font-size-lg mt-2">
                                                        Create your new solution
                                                    </div>
                                                </div>
                                                <a href="{{url("owner/solutions/create")}}" class="btn btn-success font-weight-bold py-3 px-6">Create</a>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Mixed Widget 10-->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <!--begin::Tiles Widget 11-->
                                                <div class="card card-custom bg-success gutter-b" style="height: 150px">
                                                    <div class="card-body">
                                                        <span class="svg-icon svg-icon-3x svg-icon-white ml-n2"><!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"/>
                                                                </g>
                                                            </svg><!--end::Svg Icon-->
                                                        </span>
                                                        <div class="text-inverse-success font-weight-bolder font-size-h2 mt-3">{{$solutions->count() ?? 0}}</div>

                                                        <a href="#" class="text-inverse-success font-weight-bold font-size-lg mt-1">You have created</a>
                                                    </div>
                                                </div>
                                                <!--end::Tiles Widget 11-->
                                            </div>
                                            <div class="col-xl-6">
                                                <!--begin::Tiles Widget 12-->
                                                <div class="card card-custom gutter-b" style="height: 150px">
                                                    <div class="card-body">
                                                        <span class="svg-icon svg-icon-3x svg-icon-info"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"/>
                                                                    <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"/>
                                                                    <path d="M8.7295372,14.6839411 C8.35180695,15.0868534 7.71897114,15.1072675 7.31605887,14.7295372 C6.9131466,14.3518069 6.89273254,13.7189711 7.2704628,13.3160589 L11.0204628,9.31605887 C11.3857725,8.92639521 11.9928179,8.89260288 12.3991193,9.23931335 L15.358855,11.7649545 L19.2151172,6.88035571 C19.5573373,6.44687693 20.1861655,6.37289714 20.6196443,6.71511723 C21.0531231,7.05733733 21.1271029,7.68616551 20.7848828,8.11964429 L16.2848828,13.8196443 C15.9333973,14.2648593 15.2823707,14.3288915 14.8508807,13.9606866 L11.8268294,11.3801628 L8.7295372,14.6839411 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                                </g>
                                                            </svg><!--end::Svg Icon-->
                                                        </span>
                                                        <div class="text-info font-weight-bolder font-size-h2 mt-3">{{$user->level ?? ''}}</div>

{{--                                                        <a href="#" class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">New Customers</a>--}}
                                                    </div>
                                                </div>
                                                <!--end::Tiles Widget 12-->
                                            </div>
                                        </div>
                                        <!--begin::Tiles Widget 13-->
                                        <div class="card card-custom bgi-no-repeat gutter-b"
                                             style="height: 225px; background-color: #663259; background-position: calc(100% + 0.5rem) 100%; background-size: 100% auto; background-image: url({{asset('media/svg/patterns/taieri.svg')}})">

                                            <!--begin::Body-->
                                            <div class="card-body d-flex align-items-center">
                                                <div>
                                                    <h3 class="text-white font-weight-bolder line-height-lg mb-5">Messages</h3>
                                                    <a href='#' class="btn btn-success font-weight-bold px-6 py-3">View</a>
                                                </div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Tiles Widget 13-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Mixed Widget 14-->
                                        <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b card-stretch" style="background-image: url({{asset("media/stock-600x600/img-16.jpg")}})">
                                            <!--begin::Body-->
                                            <div class="card-body d-flex flex-column align-items-start justify-content-start">
                                                <div class="p-1 flex-grow-1">
                                                    <h3 class="text-white font-weight-bolder line-height-lg mb-5">Profile</h3>
                                                </div>

                                                <a href='{{url("owner/profile")}}' class="btn btn-link btn-link-warning font-weight-bold">
                                                    Your profile
                                                    <span class="svg-icon svg-icon-lg svg-icon-warning"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
                                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
                                                            </g>
                                                        </svg><!--end::Svg Icon-->
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Mixed Widget 14-->
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
