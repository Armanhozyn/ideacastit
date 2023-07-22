@extends('apps.frontapp')
@section('title', 'ABOUT US')
@section('main')
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb__area theme-bg pt-90 pb-50"
            data-background="{{ asset('frontend/assets/img/breadcrumb/breadcrumb-bg.png') }}"
            style="background-image: url({{ asset('frontend/assets/img/breadcrumb/breadcrumb-bg.png') }});">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <div class="breadcrumb__list mb-10">
                                <span><a href="{{ url('/home') }}">Home</a></span>
                                <span class="dvdr dvdr-line"></span>
                                <span class="tp-bc-acive-menu">About us</span>
                            </div>
                            <h3 class="breadcrumb__title">About ideaCast IT</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!--  -->
        <div class="about-page-about pt-80 pb-70">
            <div class="container">
                <div class="row align-items-md-center">
                    <div class="col-xl-6 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                        <div class="about-page-about-img mb-30">
                            <img src="{{ asset('assets/images/ideacastit/about_us_ideaCast_IT.svg') }}" alt="ideacast it" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-6 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                        <div class="about-page-ab">
                            <div class="section-title-wraper">
                                <div class="tp-section">
                                    {{-- <h2 class="tp-section__title mb-30">About ideaCast IT</h2> --}}
                                    <p style="text-align: justify;">We strive to become the best Web Application, Software,
                                        Cloud technology, Graphics &
                                        Design, and Digital Marketing services firm in Bangladesh. “ideaCast IT” works in
                                        several IT sectors with a skilled expert workforce. We possess the experience and
                                        expertise to help web entrepreneurs reach their customers across the digital space.
                                        We support business owners in achieving their business goals across the digital
                                        world. We believe in minimizing the work from the client while maximizing the value
                                        of the services provided. ideaCast IT has been backed by highly skilled
                                        professionals committed to providing complete IT solutions in one place. We provide
                                        the most modern technology, experienced and capable hands also offer the most
                                        user-friendly and customized solutions. “ideaCast IT” provides high-quality on-site
                                        services for web development and end users on a broad range of web design &
                                        development platforms and the latest technologies.
                                    </p>
                                </div>
                            </div>
                            <div class="about-page-ab-btn-wrapper mb-30 wow tpfadeUp"
                                style="visibility: hidden; animation-name: none;">
                                <a href="{{ route('contact') }}" class="tp-btn">make a query<span><i
                                            class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- feature area start -->
        <div class="tp-ab-feature-area pb-90">
            <div class="ab-title-section-bg theme-bg pt-70 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="section-title-wraper mb-60">
                                <div class="tp-section text-center">
                                    <h2 class="tp-section__title mb-30 wow tpfadeUp"
                                        style="visibility: hidden; animation-name: none;">ideaCast IT's Competitive Services</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-ab-sv-feature-boxes">
                <div class="container">
                    <div class="row text-capitalize">
                        <div class="col-lg-4 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                            <div class="app-feature-box about-feature-item white-bg text-center">
                                <div class="app-feature-box-icon ab-megapone-icon">
                                    <span><img src="{{ asset('frontend/assets/img/icons/001.png') }}" alt="ideacast it" height="50px"></span>
                                </div>
                                <div class="app-feature__info">
                                    <h4 class="app-feature__title text-mirage"><a href="#">Cloud
                                            solution</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                            <div class="app-feature-box about-feature-item white-bg text-center">
                                <div class="app-feature-box-icon ab-computer-icon">
                                    <span><img src="{{ asset('frontend/assets/img/icons/002.png') }}" alt="ideacast it" height="50px"></span>
                                </div>
                                <div class="app-feature__info">
                                    <h4 class="app-feature__title text-mirage"><a href="#">software
                                            solutions</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                            <div class="app-feature-box about-feature-item white-bg text-center">
                                <div class="app-feature-box-icon ab-bubble-icon">
                                    <span><img src="{{ asset('frontend/assets/img/icons/004.png') }}" alt="ideacast it" height="50px"></span>
                                </div>
                                <div class="app-feature__info">
                                    <h4 class="app-feature__title text-mirage"><a href="#">24/7 Online
                                            Support</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                            <div class="app-feature-box about-feature-item white-bg text-center">
                                <div class="app-feature-box-icon ab-megapone-icon">
                                    <span><img src="{{ asset('frontend/assets/img/icons/003.png') }}" alt="ideacast it" height="50px"></span>
                                </div>
                                <div class="app-feature__info">
                                    <h4 class="app-feature__title text-mirage"><a href="#">web
                                            solutions</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                            <div class="app-feature-box about-feature-item white-bg text-center">
                                <div class="app-feature-box-icon ab-computer-icon">
                                    <span><img src="{{ asset('frontend/assets/img/icons/005.png') }}" alt="ideacast it" height="50px"></span>
                                </div>
                                <div class="app-feature__info">
                                    <h4 class="app-feature__title text-mirage"><a href="#">graphics
                                            design</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                            <div class="app-feature-box about-feature-item white-bg text-center">
                                <div class="app-feature-box-icon ab-bubble-icon">
                                    <span><img src="{{ asset('frontend/assets/img/icons/006.png') }}" alt="ideacast it" height="50px"></span>
                                </div>
                                <div class="app-feature__info">
                                    <h4 class="app-feature__title text-mirage"><a href="#">digital
                                            marketing</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature area end -->
    </main>
@endsection
