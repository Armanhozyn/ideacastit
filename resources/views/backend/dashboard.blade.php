@extends('apps.backapp')
@section('title', 'Dashboard')
@section('pageTitle', 'Dashboard')
@section('main')
<div class="row">
    <div class="col-xl-4 mx-auto mt-5">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>ICIT Dashboard</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="assets/images/profile-img.png" alt="ideacast it" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="{{ asset('frontend/assets/img/logo/favicon.png') }}" alt="ideacast it"
                                class="img-thumbnail rounded-circle">
                        </div>
                        <h5 class="font-size-15 text-truncate">ideaCast IT</h5>
                        <p class="text-muted mb-0 text-truncate text-uppercase">company of<br> brother's</p>
                    </div>

                    <div class="col-sm-7">
                        <div class="pt-4">

                            <div class="row">
                                <div class="col-6">
                                    <h5 class="font-size-15">125</h5>
                                    <p class="text-muted mb-0">Projects</p>
                                </div>
                                <div class="col-6">
                                    <h5 class="font-size-15">$1245</h5>
                                    <p class="text-muted mb-0">Revenue</p>
                                </div>
                            </div>
                            {{-- <div class="mt-4">
                                <a href="javascript: void(0);"
                                    class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i
                                        class="mdi mdi-arrow-right ms-1"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
