@extends('apps.frontapp')
@section('title', 'iInventory-MS')
@section('main')
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area theme-bg pt-80 pb-50" data-background="{{ asset('storage/img/pages/' . $data->picture) }}"
        style="background-image: url({{ asset('storage/img/pages/' . $data->picture) }});">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="index.html">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">{{ Route::currentRouteName() }}</span>
                            <h1 class="mt-2 text-uppercase">{{ $data->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <!-- service start  -->
    <div class="tp-sv-detials-area pt-35 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! $data->description !!}
                </div>
            </div>
        </div>
    </div>
    <!-- service end  -->
@endsection
