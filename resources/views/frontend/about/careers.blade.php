@extends('apps.frontapp')
@section('title', 'CARRER IN ICIT')
@section('main')
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb__area theme-bg pt-80 pb-10" data-background="assets/img/breadcrumb/breadcrumb-bg.png"
            style="background-image: url(&quot;assets/img/breadcrumb/breadcrumb-bg.png&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <div class="breadcrumb__list mb-10">
                                <span><a href="{{ url('/home') }}">Home</a></span>
                                <span class="dvdr dvdr-line"></span>
                                <span class="tp-bc-acive-menu">Careers</span>
                            </div>
                            <h3 class="breadcrumb__title">Job Listings</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- job main content start  -->
        <div class="job-about-area pt-10 pb-20 mb-10">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="job-about-cicle-img text-center mb-10">
                            <img src="{{ asset('frontend/assets/img/logo/favicon.png') }}" alt="ideacast it">
                        </div>
                        <div class="section-title-wraper text-center wow tpfadeUp"
                            style="visibility: hidden; animation-name: none;">
                            <div class="tp-section">
                                <h2 class="tp-section__title mb-10">ideaCast IT is hiring</h2>
                                <p>ideaCast IT is a growing startup company in Chattogram, Bangladesh.<br>
                                ideaCast IT hires qualified people to ensure quality services.<br>
                                So, Join with ideaCast IT Team, Show your talent & Finally achieve your goal.
                                </p>
                            </div>
                        </div>
                        <div class="job-btn-wrapper text-center">
                            <a href="#" class="tp-btn wow tpfadeUp"
                                style="visibility: hidden; animation-name: none;">apply now
                                <span>
                                    <i class="fal fa-long-arrow-right"></i>
                                    <i class="fal fa-long-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-job-post-area theme-bg pt-50 pb-40">
            <div class="container">
                <div class="row">
                    @foreach ($careers as $data)
                        <div class="col-lg-6 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                            <div class="tp-job-item white-bg">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="tp-job-item__info">
                                            <span class="text-uppercase">posted:{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</span>
                                            <h3 class="tp-job-item__title"><a href="#">{{ $data->topic }}</a></h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tp-job-item__btn text-lg-end">
                                            <a href="{{ route('careerDetails',$data->topic) }}">Apply Now <span> <i
                                                        class="fal fa-long-arrow-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- job main content end  -->
    </main>
@endsection
