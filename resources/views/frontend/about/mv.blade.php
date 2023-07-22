@extends('apps.frontapp')
@section('title', 'MISSION & VISSION')
@section('main')
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb__area theme-bg pt-90 pb-60" data-background="assets/img/breadcrumb/breadcrumb-bg.png"
            style="background-image: url(&quot;assets/img/breadcrumb/breadcrumb-bg.png&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <div class="breadcrumb__list mb-10">
                                <span><a href="{{ url('/home') }}">Home</a></span>
                                <span class="dvdr dvdr-line"></span>
                                <span class="tp-bc-acive-menu">mission & vision</span>
                            </div>
                            {{-- <h3 class="breadcrumb__title">ideaCast IT Mission & Vision</h3> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <div class="about-page-details-3 pt-10 pb-60">
            <div class="container">
                <!--<div class="row">-->
                <!--    <div class="col-12 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">-->
                <!--        <div class="about-page-img-3 mb-60 w-img" data-tilt="" data-tilt-perspective="2000"-->
                <!--            style="will-change: transform; transform: perspective(2000px) rotateX(0deg) rotateY(0deg);">-->
                <!--            <img src="{{ asset('frontend/assets/img/about/about-page-lg.jpg') }}" alt="ideacast it">-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="row">
                    <div class="col-12 pb-10">
                        <div class="about-page-ab">
                            <div class="section-title-wraper">
                                <div class="row align-items-md-center">
                                    <div class="col-xl-6 order-md-1 wow tpfadeUp"
                                        style="visibility: visible; animation-name: tpfadeUp;">
                                        <div class="about-page-about-img mb-30">
                                            <img src="{{ asset('assets/images/ideacastit/mission_ideaCast_IT.svg') }}"
                                                alt="ideacast it" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 order-md-2 wow tpfadeUp"
                                        style="visibility: visible; animation-name: tpfadeUp;">
                                        <div class="about-page-ab">
                                            <div class="section-title-wraper">
                                                <div class="tp-section">
                                                    <h2 class="tp-section__title mb-30">ideaCast IT Mission</h2>
                                                    <p style="text-align: justify;">
                                                        ideaCast IT
                                                        is the Best quality Technology company in Bangladesh. In the first
                                                        place, we want to
                                                        make life easier for you that is built on technology. To aid in the
                                                        general
                                                        development of our nation by providing accessible IT services to
                                                        people, we have
                                                        collected many experts in the specialists on our site. Our firm
                                                        develops unique
                                                        web-based solutions that make your work more efficient and efficient
                                                        for your
                                                        business and, ultimately, your customers. Lastly, We're here for you
                                                        and will be
                                                        with you with our real teamwork.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                        <div class="about-page-3-content">
                            <div class="row align-items-md-center">
                                <div class="col-xl-6 order-md-2 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                                    <div class="about-page-about-img mb-30">
                                        <img src="{{ asset('assets/images/ideacastit/vision_ideaCast_IT.svg') }}" alt="ideacast it"
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-xl-6 order-md-1 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                                    <div class="about-page-ab">
                                        <div class="section-title-wraper">
                                            <div class="tp-section">
                                                <h2 class="tp-section__title mb-30">ideaCast IT Vision</h2>
                                                <p style="text-align: justify;">
                                                    ideaCast IT
                                                    is the Best quality Technology company in Bangladesh. In the first
                                                    place, we want to
                                                    make life easier for you that is built on technology. To aid in the
                                                    general
                                                    development of our nation by providing accessible IT services to people,
                                                    we have
                                                    collected many experts in the specialists on our site. Our firm develops
                                                    unique
                                                    web-based solutions that make your work more efficient and efficient for
                                                    your
                                                    business and, ultimately, your customers. Lastly, We're here for you and
                                                    will be
                                                    with you with our real teamwork.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
