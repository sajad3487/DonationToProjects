<!--begin::Header-->
<div id="kt_header" class="header  header-fixed ">
    <!--begin::Container-->
    <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default ">
                <img alt="Logo" src="{{asset('media/logos/logo-Recovered.png')}}" style="width: 100%; height: 50px" class="mt-2 ml-25"/>
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">

        </div>
        <!--end::Toolbar-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::User-->
            <div class="topbar-item">
                <!--begin::Actions-->
                <a href="{{url('owner/solutions/create')}}" class="btn btn-light-primary font-weight-bolder btn-sm mr-10">
                    Create New Solution
                </a>
                <!--end::Actions-->
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                     id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{$user->name ?? ''}}</span>
                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                        @if($user->profile_picture == null)
                            <span class="symbol-label font-size-h5 font-weight-bold">S</span>
                        @else
                            <img style="width: 45px" src="{{$user->profile_picture}}" alt="">
                        @endif
                    </span>
                </div>
            </div>
            <!--end::User-->

        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
