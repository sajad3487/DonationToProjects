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
                        <!--begin::Row-->
                        <div class="row">
                            <div class="col-xl-4">
                                <!--begin::Card-->
                                <div class="card card-custom card-stretch" id="kt_todo_list">
                                    <div class="card-header">
                                        <div class="card-title">
                                            All Conversations
                                        </div>
                                    </div>
                                    <!--begin::Body-->
                                    <div class="card-body p-0 pt-5">
                                        <ul class="nav d-block">
                                            @foreach($messages as $message_key=>$message)
                                                <li class="m-2">
                                                    <a class="nav-link m-0 p-0" data-toggle="tab" href="#kt_tab_pane_{{$message->id}}">
                                                        <!--begin::Responsive container-->
                                                        <div class="table m-0">
                                                            <!--begin::Items-->
                                                            <div class="list list-hover">
                                                                <!--begin::Item-->
                                                                <div class="d-flex align-items-start justify-content-between list-item p-2" >
                                                                    <div class="symbol symbol-circle symbol-50 mr-3" style="width: 50px;height: 50px">
                                                                        <img alt="Pic" src="{{asset($message->sender->profile_picture)}}"/>
                                                                    </div>
                                                                    <!--begin::Info-->
                                                                    <div class="flex-grow-1 mr-2 pt-4" >
                                                                        <!--begin::Title-->
                                                                        <div class="font-weight-bolder">{{$message->sender->name ?? ''}}</div>
                                                                        <!--end::Title-->

                                                                        <!--end::Labels-->
                                                                    </div>
                                                                    <!--end::Info-->

                                                                </div>
                                                                <!--end::Item-->
                                                            </div>
                                                            <!--end::Items-->
                                                        </div>
                                                        <!--end::Responsive container-->
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Card-->
                            </div>
                            <div class="col-xl-8 pt-10 pt-xl-0">
                                <!--begin::Card-->
                                <div class="card card-custom card-stretch" id="kt_todo_view">
                                    <div class="tab-content" id="myTabContent">
                                        @foreach($messages as $message_detail_key => $message_detail)
                                            <div class="tab-pane fade @if($message_detail_key == 0 )show active @endif" id="kt_tab_pane_{{$message_detail->id}}" role="tabpanel" aria-labelledby="kt_tab_pane_{{$message_detail->id}}">
                                                <div class="card-header p-5 mx-5 row justify-content-between">
                                                    <div class="text-center flex-grow-1">
                                                        <div class="text-dark-75 font-weight-bold font-size-h5">{{$message_detail->sender->name ?? ''}}</div>
                                                        <div>
{{--                                                            <span class="label label-sm label-dot label-success"></span>--}}
{{--                                                            <span class="font-weight-bold text-muted font-size-sm">Active</span>--}}
                                                        </div>
                                                    </div>

                                                </div>

                                                <!--begin::Body-->
                                                <div class="card-body p-4">
                                                    <!--begin::Scroll-->
                                                    <div class="scroll scroll-pull" data-mobile-height="350">
                                                        <!--begin::Messages-->
                                                        <div class="messages">
                                                            <!--begin::Message In-->
                                                            <div class="d-flex flex-column mb-5 align-items-start">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-circle symbol-40 mr-3" style="width: 50px;height: 50px">
                                                                        <img alt="Pic" src="{{asset($message_detail->sender->profile_picture)}}"/>
                                                                    </div>
                                                                    <div>
                                                                        <div class="text-dark-75 text-hover-primary font-weight-bold ">{{$message_detail->sender->name ?? ''}}</div>
                                                                        <span class="text-muted font-size-sm">{{$message_detail->created_at ?? ''}}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                                    {{$message_detail->body ?? ''}}
                                                                </div>
                                                            </div>
                                                            <!--end::Message In-->
                                                            @foreach($message_detail->texts as $text_key=>$text)

                                                                @if($text->sender->id != auth()->id())
                                                            <!--begin::Message In-->
                                                            <div class="d-flex flex-column mb-5 align-items-start">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-circle symbol-40 mr-3" style="width: 50px;height: 50px">
                                                                        <img alt="Pic" src="{{asset($message_detail->sender->profile_picture)}}"/>
                                                                    </div>
                                                                    <div>
                                                                        <div class="text-dark-75 text-hover-primary font-weight-bold ">{{$message_detail->sender->name ?? ''}}</div>
                                                                        <span class="text-muted font-size-sm">{{$text->created_at ?? ''}}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">
                                                                    {{$text->body ?? ''}}
                                                                </div>
                                                            </div>
                                                            <!--end::Message In-->
                                                                @else
                                                            <!--begin::Message Out-->
                                                            <div class="d-flex flex-column mb-5 align-items-end">
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <span class="text-muted font-size-sm">{{$text->created_at ?? ''}}</span>
                                                                        <a class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                                    </div>
                                                                    <div class="symbol symbol-circle symbol-40 ml-3" style="width: 50px;height: 50px">
                                                                        <img alt="Pic" src="{{asset($message_detail->sender->profile_picture)}}"/>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                                    {{$text->body ?? ''}}
                                                                </div>
                                                            </div>
                                                            <!--end::Message Out-->
                                                                @endif
                                                                @endforeach
                                                        </div>
                                                        <!--end::Messages-->
                                                    </div>
                                                    <!--end::Scroll-->

                                                </div>
                                                <!--end::Body-->
                                                <!--begin::Footer-->
                                                <div class="card-footer align-items-center">
                                                    <form action="{{url("owner/messages/store")}}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <!--begin::Compose-->
                                                        <input type="number" name="parent_id" value="{{$message_detail->id}}" class="d-none">
                                                        <input type="number" name="owner_id" value="{{auth()->id()}}" class="d-none">
                                                        <input type="number" name="destination_id" value="{{$message_detail->owner_id ?? ''}}" class="d-none">
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
                                        @endforeach
                                    </div>

                                </div>
                                <!--end::Card-->
                            </div>
                        </div>
                        <!--end::Row-->
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
