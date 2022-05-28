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

                    <!--begin::Content-->
                    <div class="flex-row-fluid ml-lg-8"  id="kt_chat_content">
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <div class="card-header p-5 mx-5 row justify-content-between">

                                            <div class="text-center flex-grow-1">
                                                <div class="text-dark-75 font-weight-bold font-size-h5">{{$target->name ?? ''}} {{$target->lname ?? ''}}</div>
                                                <div>
                                                    {{--                                                            <span class="label label-sm label-dot label-success"></span>--}}
                                                    {{--                                                            <span class="font-weight-bold text-muted font-size-sm">Active</span>--}}
                                                </div>
                                            </div>

                                        </div>

                            <!--begin::Body-->
                            <div class="card-body py-6 px-10 min-h-200px" >
                                            <!--begin::Scroll-->
                                            <div class="scroll scroll-pull" data-mobile-height="350">
                                                <!--begin::Messages-->
                                                <div class="messages">
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
                                     <input type="number" name="owner_id" value="{{auth()->id()}}" class="d-none">
                                     <input type="number" name="destination_id" value="{{$target->id ?? ''}}" class="d-none">
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
