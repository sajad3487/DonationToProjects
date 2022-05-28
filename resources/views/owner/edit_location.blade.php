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
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="d-flex align-items-baseline flex-wrap mr-5 mt-5">
                                    <!--begin::Page Title-->
                                    <h5 class="text-dark font-weight-bold my-1 mr-5">
                                        {{$solution->title ?? ''}}
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
                                                Edit solution
                                            </div>
                                        </li>
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <div class="card-toolbar">
                                    @if($solution->status == 1 )
                                        @if(isset($solution->main_image) && $solution->main_image != null)
                                        <a href="{{url("owner/solutions/$solution->id/publish")}}" class="btn btn-warning font-weight-bold mr-2">Publish the Solution</a>
                                            @else
                                            <button type="button" class="btn btn-warning" data-toggle="popover" data-trigger="click" title="Requirement for publishing" data-content="You should upload a photo for your solution before publishing that">
                                                Publish the Solution
                                            </button>
                                        @endif
                                        @elseif ($solution->status == 2 )
                                        <span class="bg-light-danger btn-sm text-danger font-weight-bold btn-upper btn-text">Waiting to confirm</span>
                                        @elseif ($solution->status == 3)
                                        <span class="bg-light-success btn-sm text-success font-weight-bold btn-upper btn-text">Published</span>
                                        @endif
                                </div>

                            </div>
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="d-none">
                                        <div id="kt_leaflet_1" style="height:300px;"></div>
                                    </div>
                                    <div id="kt_leaflet_5" style="height:300px;"></div>
                                    <form action="{{url("owner/solutions/location/$solution->id/update")}}" method="post">
                                        @method('PUT')
                                        @csrf
                                        <input type="text" class="d-none" name="e_location" id="e_location" required>
                                        <input type="text" class="d-none" name="w_location" id="w_location" required>
                                        <input type="number" class="d-none" name="solution_id" value="{{$solution->id ?? ''}}" required>
                                        <div class="row">
                                            <button type="submit" class="btn btn-light-success font-weight-bold mr-5 mt-5 col-auto ml-auto">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <!--end::Body-->
                        </div>
                        <!--end::Card-->
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

    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })

        function changeTypeOfMedia() {
            var type = document.getElementById('media_type_selector').value ;
            if(type == "video"){
                document.getElementById('input_video').style.display = 'block';
                document.getElementById('input_file').style.display = 'none';
            }else{
                document.getElementById('input_file').style.display = 'block';
                document.getElementById('input_video').style.display = 'none';
            }
        }
        function changeMediaOfReport() {
            var type = document.getElementById('report_media').value ;
            if(type == "video"){
                document.getElementById('report_input_video').style.display = 'block';
                document.getElementById('report_input_file').style.display = 'none';
            }else{
                document.getElementById('report_input_file').style.display = 'block';
                document.getElementById('report_input_video').style.display = 'none';
            }
        }
        function changeEditMediaOfReport(id) {
            var type = document.getElementById('report_add_media_'+id).value ;
            if(type == "video"){
                document.getElementById('report_add_input_video_'+id).style.display = 'block';
                document.getElementById('report_add_input_file_'+id).style.display = 'none';
            }else{
                document.getElementById('report_add_input_file_'+id).style.display = 'block';
                document.getElementById('report_add_input_video_'+id).style.display = 'none';
            }
        }
    </script>


@endsection
