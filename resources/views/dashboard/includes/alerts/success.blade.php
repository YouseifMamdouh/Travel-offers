@if(Session::has('success'))
    <div id="kt_app_toolbar" class="app-toolbar d-flex flex-stack py-4 py-lg-8">
        <!--begin::Toolbar wrapper-->
        <div class="d-flex flex-grow-1 flex-stack flex-wrap gap-2 mb-n10" id="kt_toolbar">
    <span class="w-100 btn btn-danger">
        {{Session::get('success')}}
    </span>
    </div>
    </div>
@endif
