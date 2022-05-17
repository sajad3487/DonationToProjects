@extends('layouts.customer.master')
@section('content')
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Chat-->
                <div class="d-flex flex-row">
                    <!--begin::Aside-->
                    <div class="flex-row-auto offcanvas-mobile w-350px w-xl-400px" id="kt_chat_aside">
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <!--begin::Body-->
                            <div class="card-body p-3">
                                <div class="card-header mx-5 p-5 row justify-content-between">
                                    <div class="text-center flex-grow-1">
                                        <div class="text-dark-75 font-weight-bold font-size-h5">All Conversations</div>
                                        <div>
                                            {{--                                                            <span class="label label-sm label-dot label-success"></span>--}}
                                            {{--                                                            <span class="font-weight-bold text-muted font-size-sm">Active</span>--}}
                                        </div>
                                    </div>

                                </div>
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
                                                                <img alt="Pic" src="{{asset($message->receiver->profile_picture)}}"/>
                                                            </div>
                                                            <!--begin::Info-->
                                                            <div class="flex-grow-1 mr-2 pt-4" >
                                                                <!--begin::Title-->
                                                                <div class="font-weight-bolder">{{$message->receiver->name ?? ''}}</div>
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
                    <!--end::Aside-->

                    <!--begin::Content-->
                    <div class="flex-row-fluid ml-lg-8"  id="kt_chat_content">
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <div class="tab-content" id="myTabContent">
                                @foreach($messages as $message_detail_key => $message_detail)
                                    <div class="tab-pane fade @if($message_detail_key == 0 )show active @endif" id="kt_tab_pane_{{$message_detail->id}}" role="tabpanel" aria-labelledby="kt_tab_pane_{{$message_detail->id}}">
                                        <div class="card-header p-5 mx-5 row justify-content-between">

                                            <div class="text-center flex-grow-1">
                                                <div class="text-dark-75 font-weight-bold font-size-h5">{{$message_detail->receiver->name ?? ''}}</div>
                                                <div>
                                                    {{--                                                            <span class="label label-sm label-dot label-success"></span>--}}
                                                    {{--                                                            <span class="font-weight-bold text-muted font-size-sm">Active</span>--}}
                                                </div>
                                            </div>

                                        </div>

                                        <!--begin::Body-->
                                        <div class="card-body py-6 px-10">
                                            <!--begin::Scroll-->
                                            <div class="scroll scroll-pull" data-mobile-height="350">
                                                <!--begin::Messages-->
                                                <div class="messages">
                                                    <!--begin::Message Out-->
                                                    <div class="d-flex flex-column mb-5 align-items-end">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <span class="text-muted font-size-sm">{{$message_detail->created_at ?? ''}}</span>
                                                                <a class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                                            </div>
                                                            <div class="symbol symbol-circle symbol-40 ml-3" style="width: 50px;height: 50px">
                                                                <img alt="Pic" src="{{asset($message_detail->sender->profile_picture)}}"/>
                                                            </div>
                                                        </div>
                                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">
                                                            {{$message_detail->body ?? ''}}
                                                        </div>
                                                    </div>
                                                    <!--end::Message Out-->
                                                @foreach($message_detail->texts as $text_key=>$text)
                                                    @if($text->sender->id != auth()->id())
                                                        <!--begin::Message In-->
                                                            <div class="d-flex flex-column mb-5 align-items-start">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-circle symbol-50 mr-3" style="width: 50px;height: 50px">
                                                                        <img alt="Pic" src="{{asset($message->receiver->profile_picture)}}"/>
                                                                    </div>
                                                                    <div>
                                                                        <div class="text-dark-75 text-hover-primary font-weight-bold ">{{$message_detail->receiver->name ?? ''}}</div>
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
                                            <form action="{{url("customer/messages/store")}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <!--begin::Compose-->
                                                <input type="number" name="parent_id" value="{{$message_detail->id}}" class="d-none">
                                                <input type="number" name="owner_id" value="{{auth()->id()}}" class="d-none">
                                                <input type="number" name="destination_id" value="{{$message_detail->destination_id ?? ''}}" class="d-none">
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
                    <!--end::Content-->
                </div>
                <!--end::Chat-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

    @endsection
