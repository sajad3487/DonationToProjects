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
                            @foreach($solutions as $solution_key=>$solution)
                                <div class="col-xl-6">
                                <!--begin::Card-->
                                <div class="card card-custom gutter-b card-stretch">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <!--begin::Header-->
                                        <div class="d-flex flex-column flex-center">
                                            <!--begin::Image-->
                                            <div class="bgi-no-repeat bgi-size-cover rounded min-h-180px w-100" style="background-image: url({{asset($solution->main_image->media_path)}})"></div>
                                            <!--end::Image-->

                                            <!--begin::Title-->
                                            <a href="#" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">{{$solution->title ?? ''}}</a>
                                            <!--end::Title-->

                                            <!--begin::Text-->
                                            <div class="font-weight-bold text-dark-50 font-size-sm pb-7">{{$solution->created_at ?? ''}}</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Header-->

                                        <!--begin::Description-->
                                        <div class="mb-10 mt-5 font-weight-bold ">
                                            {{$solution->brief_description ?? ''}}
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Progress-->
                                        <div class="d-flex mb-5 align-items-cente">
                                            <span class="d-block font-weight-bold mr-5">Progress</span>
                                            <div class="d-flex flex-row-fluid align-items-center">
                                                <div class="progress progress-xs mt-2 mb-2 w-100">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{$solution->progress ?? 0}}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="ml-3 font-weight-bolder">{{$solution->progress ?? ''}}%</span>
                                            </div>
                                        </div>
                                        <!--ebd::Progress-->
                                    </div>
                                    <!--end::Body-->

                                    <!--begin::Footer-->
                                    <div class="card-footer p-3 d-flex align-items-center">
                                        <div class="d-flex">
                                            <div class="d-flex align-items-center mr-7">
                                                <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1"/>
                                                        <rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1"/>
                                                        <path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000"/>
                                                    </g>
                                                    </svg><!--end::Svg Icon-->
                                                </span>
                                                <div class="font-weight-bolder text-primary ml-2">0 Donation</div>
                                            </div>
                                            <div class="d-flex align-items-center mr-7">
                                                <span class="svg-icon svg-icon-gray-500"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"/>
                                                            <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                    </svg><!--end::Svg Icon-->
                                                </span>
                                                <div class="font-weight-bolder text-primary ml-2">{{$solution->comments->count() ?? 0}} Comments</div>
                                            </div>
                                            <a href="{{url("owner/solutions/$solution->id/edit")}}" class="btn btn-light-primary font-weight-bold mr-2 btn-sm">View</a>
                                        </div>
                                    </div>
                                    <!--end::Footer-->
                                </div>
                                <!--end:: Card-->
                            </div>
                            @endforeach
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
