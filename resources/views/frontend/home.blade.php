@extends('apps.frontapp')
@section('title', 'ideaCast IT')
@section('main')
    @if ($errors->any())
        <div id="error-box" style="position: fixed; top: 100px; right: 25px; z-index:1000; width: 30%;">
            <div class="alert alert-warning" role="alert" style=" margin: 0 auto;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        </div>
    @elseif (Session::has('success'))
        <div id="error-box" style="position: fixed; top: 100px; right: 25px; z-index:1000; width: 45%;">
            <div class="alert alert-success" role="alert" style=" margin: 0 auto;">
                Thanks for Application. Our HRD team will contact you if you are Sortlisted for this job.
            </div>
        </div>
    @endif
    <main>
        <!-- slider start  -->
        <div class="tp-it-slider-area">
            <div
                class="swiper-container ptg-slider-active swiper-container-fade swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="swiper-wrapper" style="transition-duration: 0ms;">
                    <div class="tp-it-slider it-slider-height fix swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                        data-background="{{ asset('frontend/assets/img/slider/it-slider-1.jpg') }}"
                        data-swiper-slide-index="2"
                        style="width: 1349px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms; background-image: url({{ asset('frontend/assets/img/slider/it-slider-1.jpg') }});">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="it-slider__content">
                                        <h2 class="it-slider__content-title mb-20" data-animation="tpfadeUp"
                                            data-delay=".4s" style="animation-delay: 0.4s;">IT Solution for Business.</h2>
                                        <a href="{{ route('contact') }}"
                                            class="tp-slider-btn orange-chat-color tp-btn-hover alt-bg-orange"
                                            data-animation="tpfadeUp" data-delay=".9s" style="animation-delay: 0.9s;">
                                            <span class="mr-10">
                                                <i class="fas fa-comments"></i>
                                                <i class="fas fa-comments"></i>
                                            </span>
                                            Free Consultation
                                            <b></b>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-none d-lg-block">
                                    <div class="it-slider-img p-relative">
                                        <img src="{{ asset('frontend/assets/img/slider/it-slider-img.png') }}"
                                            alt="ideacast it">
                                        <!--<div class="it-slder-quite">-->
                                        <!--    <b>“ Simplicity is key to success for <br>-->
                                        <!--        growing your business ”</b>-->
                                        <!--    <span>Mixodis C. <i>- Head of Idea </i></span>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-it-slider it-slider-height fix swiper-slide swiper-slide-duplicate-next"
                        data-background="{{ asset('frontend/assets/img/slider/it-slider-2.jpg') }}"
                        data-swiper-slide-index="0"
                        style="width: 1349px; opacity: 1; transform: translate3d(-1349px, 0px, 0px); transition-duration: 0ms; background-image: url({{ asset('frontend/assets/img/slider/it-slider-2.jpg') }});">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="it-slider__content">
                                        <h2 class="it-slider__content-title mb-20" data-animation="tpfadeUp"
                                            data-delay=".5s" style="animation-delay: 0.5s;">Best Software Company in
                                            Chattogram.</h2>
                                        <a href="{{ route('contact') }}"
                                            class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange"
                                            data-animation="tpfadeUp" data-delay=".9s" style="animation-delay: 0.9s;">
                                            <span class="mr-10">
                                                <i class="fas fa-comments"></i>
                                                <i class="fas fa-comments"></i>
                                            </span>
                                            Free Consultation
                                            <b></b>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-none d-lg-block">
                                    <div class="it-slider-img p-relative">
                                        <img src="{{ asset('frontend/assets/img/slider/it-slider-img.png') }}"
                                            alt="ideacast it">
                                        <!--<div class="it-slder-quite">-->
                                        <!--    <b>“ Simplicity is key to success for <br>-->
                                        <!--        growing your business ”</b>-->
                                        <!--    <span>Mixodis C. <i>- Head of Idea </i></span>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-it-slider it-slider-height fix swiper-slide swiper-slide-prev"
                        data-background="{{ asset('frontend/assets/img/slider/it-slider-3.jpg') }}"
                        data-swiper-slide-index="1"
                        style="width: 1349px; opacity: 1; transform: translate3d(-2698px, 0px, 0px); transition-duration: 0ms; background-image: url({{ asset('frontend/assets/img/slider/it-slider-3.jpg') }});">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="it-slider__content">
                                        <h2 class="it-slider__content-title mb-20" data-animation="tpfadeUp"
                                            data-delay=".4s" style="animation-delay: 0.4s;">ERP Solution for Business.</h2>
                                        <p class="mb-50" data-animation="tpfadeUp" data-delay=".8s"
                                            style="animation-delay: 0.8s;">We’ve always known that for businesses large and
                                            small, IT will <br> can
                                            be a real
                                            challenge to manage.</p>
                                        <a href="{{ route('contact') }}"
                                            class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange"
                                            data-animation="tpfadeUp" data-delay=".9s" style="animation-delay: 0.9s;">
                                            <span class="mr-10">
                                                <i class="fas fa-comments"></i>
                                                <i class="fas fa-comments"></i>
                                            </span>
                                            Free Consultation
                                            <b></b>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-none d-lg-block">
                                    <div class="it-slider-img p-relative">
                                        <img src="{{ asset('frontend/assets/img/slider/it-slider-img.png') }}"
                                            alt="ideacast it">
                                        <!--<div class="it-slder-quite">-->
                                        <!--    <b>“ Simplicity is key to success for <br>-->
                                        <!--        growing your business ”</b>-->
                                        <!--    <span>Mixodis C. <i>- Head of Idea </i></span>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-it-slider it-slider-height fix swiper-slide swiper-slide-active"
                        data-background="{{ asset('frontend/assets/img/slider/it-slider-1.jpg') }}"
                        data-swiper-slide-index="2"
                        style="width: 1349px; opacity: 1; transform: translate3d(-4047px, 0px, 0px); transition-duration: 0ms; background-image: url({{ asset('frontend/assets/img/slider/it-slider-1.jpg') }});">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="it-slider__content">
                                        <h2 class="it-slider__content-title mb-20" data-animation="tpfadeUp"
                                            data-delay=".4s" style="animation-delay: 0.4s;">IT Solution for Business.</h2>
                                        <a href="{{ route('contact') }}"
                                            class="tp-slider-btn orange-chat-color tp-btn-hover alt-bg-orange"
                                            data-animation="tpfadeUp" data-delay=".9s" style="animation-delay: 0.9s;">
                                            <span class="mr-10">
                                                <i class="fas fa-comments"></i>
                                                <i class="fas fa-comments"></i>
                                            </span>
                                            Free Consultation
                                            <b></b>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-none d-lg-block">
                                    <div class="it-slider-img p-relative">
                                        <img src="{{ asset('frontend/assets/img/slider/it-slider-img.png') }}"
                                            alt="ideacast it">
                                        <!--<div class="it-slder-quite">-->
                                        <!--    <b>“ Simplicity is key to success for <br>-->
                                        <!--        growing your business ”</b>-->
                                        <!--    <span>Mixodis C. <i>- Head of Idea </i></span>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-it-slider it-slider-height fix swiper-slide swiper-slide-duplicate swiper-slide-next"
                        data-background="{{ asset('frontend/assets/img/slider/it-slider-2.jpg') }}"
                        data-swiper-slide-index="0"
                        style="width: 1349px; opacity: 0; transform: translate3d(-5396px, 0px, 0px); transition-duration: 0ms; background-image: url({{ asset('frontend/assets/img/slider/it-slider-2.jpg') }});">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12">
                                    <div class="it-slider__content">
                                        <h2 class="it-slider__content-title mb-20" data-animation="tpfadeUp"
                                            data-delay=".5s" style="animation-delay: 0.5s;">Best Software Company in
                                            Chattogram.</h2>
                                        <a href="{{ route('contact') }}"
                                            class="tp-slider-btn orange-chat-color tp-btn-hover alt-color alt-bg-orange"
                                            data-animation="tpfadeUp" data-delay=".9s" style="animation-delay: 0.9s;">
                                            <span class="mr-10">
                                                <i class="fas fa-comments"></i>
                                                <i class="fas fa-comments"></i>
                                            </span>
                                            Free Consultation
                                            <b></b>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-none d-lg-block">
                                    <div class="it-slider-img p-relative">
                                        <img src="{{ asset('frontend/assets/img/slider/it-slider-img.png') }}"
                                            alt="ideacast it">
                                        <!--<div class="it-slder-quite">-->
                                        <!--    <b>“ Simplicity is key to success for <br>-->
                                        <!--        growing your business ”</b>-->
                                        <!--    <span>Mixodis C. <i>- Head of Idea </i></span>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider end  -->

        <!-- service start  -->
        <div class="tp-it-service pt-120 pb-90">
            <div class="container">
                <!-- feature area start -->
                <div class="tp-ab-feature-area pb-90">
                    <div class="ab-title-section-bg pt-70 pb-90">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="section-title-wraper mb-60">
                                        <div class="tp-section text-center">
                                            <span
                                                class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                                    class="before-border"></i>
                                                Services <i class="after-border"></i></span>
                                            <h2 class="tp-section__title mb-30 wow tpfadeUp"
                                                style="visibility: hidden; animation-name: none;">ideaCast IT's Competitive
                                                Services</h2>
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
                                        <div class="app-feature-box-icon ab-computer-icon">
                                            <span><img src="{{ asset('frontend/assets/img/icons/002.png') }}"
                                                    alt="ideacast it" height="50px"></span>
                                        </div>
                                        <div class="app-feature__info">
                                            <h4 class="app-feature__title text-mirage"><a href="#">software
                                                    solutions</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                                    <div class="app-feature-box about-feature-item white-bg text-center">
                                        <div class="app-feature-box-icon ab-megapone-icon">
                                            <span><img src="{{ asset('frontend/assets/img/icons/003.png') }}"
                                                    alt="ideacast it" height="50px"></span>
                                        </div>
                                        <div class="app-feature__info">
                                            <h4 class="app-feature__title text-mirage"><a href="#">web
                                                    solutions</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                                    <div class="app-feature-box about-feature-item white-bg text-center">
                                        <div class="app-feature-box-icon ab-bubble-icon">
                                            <span><img src="{{ asset('frontend/assets/img/icons/006.png') }}"
                                                    alt="ideacast it" height="50px"></span>
                                        </div>
                                        <div class="app-feature__info">
                                            <h4 class="app-feature__title text-mirage"><a href="#">digital
                                                    marketing</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                                    <div class="app-feature-box about-feature-item white-bg text-center">
                                        <div class="app-feature-box-icon ab-bubble-icon">
                                            <span><img src="{{ asset('frontend/assets/img/icons/004.png') }}"
                                                    alt="ideacast it" height="50px"></span>
                                        </div>
                                        <div class="app-feature__info">
                                            <h4 class="app-feature__title text-mirage"><a href="#">24/7 Online
                                                    Support</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                                    <div class="app-feature-box about-feature-item white-bg text-center">
                                        <div class="app-feature-box-icon ab-computer-icon">
                                            <span><img src="{{ asset('frontend/assets/img/icons/005.png') }}"
                                                    alt="ideacast it" height="50px"></span>
                                        </div>
                                        <div class="app-feature__info">
                                            <h4 class="app-feature__title text-mirage"><a href="#">graphics
                                                    design</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                                    <div class="app-feature-box about-feature-item white-bg text-center">
                                        <div class="app-feature-box-icon ab-megapone-icon">
                                            <span><img src="{{ asset('frontend/assets/img/icons/001.png') }}"
                                                    alt="ideacast it" height="50px"></span>
                                        </div>
                                        <div class="app-feature__info">
                                            <h4 class="app-feature__title text-mirage"><a href="#">Cloud
                                                    solution</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- feature area end -->
            </div>
        </div>
        <!-- service end  -->

        <!-- about start  -->
        <div class="tp-it-about theme-bg-2 pt-120 pb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tp-it-about-info mb-30">
                            <div class="section-title-wraper tp-border-bottom mb-40">
                                <div class="tp-section">
                                    <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                            class="before-border"></i> Since From
                                        2021</span>
                                    <h3 class="tp-section__title vogue-text-color mb-30 wow tpfadeUp"
                                        data-wow-delay=".3s">Grow your Local Business to Global Business</h3>
                                    <p class="wow tpfadeUp" data-wow-delay=".4s">The global world growing fast way by
                                        digitalize. In this digital global world <br> there is no bounding to doing
                                        business, If you have a great idea with new <br> innovation! you can be a succesfull business
                                        owner. So take decition <br> and grow fast with ideaCast IT. ideaCast IT working for introduce
                                        startup business and existing local business to digital business platform. We are
                                        working for international global market.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-it-about-right mb-30 wow tpfadeUp">
                            <div class="tp-it-about-img text-end p-relative w-img" data-tilt=""
                                data-tilt-perspective="2000">
                                <img src="{{ asset('frontend/assets/img/about/about_us_ideaCast_IT.svg') }}" alt="ideacast it">
                                <div class="it-ab-cirlce-logo">
                                    <img src="{{ asset('frontend/assets/img/about/logo.png') }}" alt="ideacast it"
                                        class="img-fluid p-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tp-it-brand bg-light pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="it-breand-title text-dark text-center mb-60">
                            <span>Trusted by Companies all over the world</span>
                        </div>
                        <div class="tp-bs-brand-slider">
                            <div class="it-brand-slider-active swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="tp-it-brand-item swiper-slide">
                                        <img class="img-fluid" style="height: 50px;" src="{{ asset('frontend/assets/img/brand/white-brand-1.png') }}"
                                            alt="ideacast it">
                                    </div>
                                    <div class="tp-it-brand-item swiper-slide">
                                        <img class="img-fluid" style="height: 50px;" src="{{ asset('frontend/assets/img/brand/white-brand-2.png') }}"
                                            alt="ideacast it">
                                    </div>
                                    <div class="tp-it-brand-item swiper-slide">
                                        <img class="img-fluid" style="height: 50px;" src="{{ asset('frontend/assets/img/brand/white-brand-3.png') }}"
                                            alt="ideacast it">
                                    </div>
                                    <div class="tp-it-brand-item swiper-slide">
                                        <img class="img-fluid" style="height: 50px;" src="{{ asset('frontend/assets/img/brand/white-brand-4.png') }}"
                                            alt="ideacast it">
                                    </div>
                                    <div class="tp-it-brand-item swiper-slide">
                                        <img class="img-fluid" style="height: 50px;" src="{{ asset('frontend/assets/img/brand/white-brand-5.png') }}"
                                            alt="ideacast it">
                                    </div>
                                    <div class="tp-it-brand-item swiper-slide">
                                        <img class="img-fluid" style="height: 50px;" src="{{ asset('frontend/assets/img/brand/white-brand-6.png') }}"
                                            alt="ideacast it">
                                    </div>
                                    <div class="tp-it-brand-item swiper-slide">
                                        <img class="img-fluid" style="height: 50px;" src="{{ asset('frontend/assets/img/brand/rafusoft-logo.svg') }}"
                                            alt="ideacast it">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about end  -->

        <!-- testimonial start  -->
        <div class="tp-it-testimonial fix pb-120">
            <div class="it-testi-wraper theme-bg-2 pt-120 pb-125">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 col-md-8">
                            <div class="section-title-wraper">
                                <div class="tp-section">
                                    <span class="tp-section__subtitle vogue-text-color white-bg mb-15"><i
                                            class="before-border"></i>
                                        Testimonials</span>
                                    <h2 class="tp-section__title vogue-text-color mb-70">Users Feedback</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-md-block">
                            <div class="it-testi-navigation text-end p-relative pt-40">
                                <div class="it-testi-button-prev">
                                    <i class="fas fa-long-arrow-left"></i>

                                </div>
                                <div class="it-testi-button-next">
                                    <i class="fas fa-long-arrow-right"></i>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tp-it-testi-active swiper-container">
                    <div class="swiper-wrapper">
                        <div class="it-testimonial swiper-slide">
                            <div class="it-testimonial-box p-relative">
                                <div class="it-testimonial-box__ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="it-testimonial-box__review">
                                    “ ideaCast IT is They are outstanding experts. Take care of software developments,
                                    hiring different personnel, and staff outsourcing. ”
                                </div>
                                <div class="it-testimonial-bg">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi-icon-bg.png') }}"
                                        alt="ideacast it">
                                </div>
                            </div>
                            <div class="tp-testimonial-reviewer d-flex align-items-center ml-40">
                                <div class="tesi-reviewer-avata mr-15">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi-avata-1.png') }}"
                                        alt="ideacast it">
                                </div>
                                <div class="it-tesi-reviewer-name">
                                    <h4 class="mb-5 vogue-text-color">River Craft</h4>
                                </div>
                            </div>
                        </div>
                        <div class="it-testimonial swiper-slide">
                            <div class="it-testimonial-box p-relative">
                                <div class="it-testimonial-box__ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="it-testimonial-box__review">
                                    “ ideaCast IT like a creative and
                                    talented software company. They do know how to act towards customers and software
                                    owners. ”
                                </div>
                                <div class="it-testimonial-bg">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi-icon-bg.png') }}"
                                        alt="ideacast it">
                                </div>
                            </div>
                            <div class="tp-testimonial-reviewer d-flex align-items-center ml-40">
                                <div class="tesi-reviewer-avata mr-15">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi-avata-3.png') }}"
                                        alt="ideacast it">
                                </div>
                                <div class="it-tesi-reviewer-name">
                                    <h4 class="mb-5 vogue-text-color">Jayson Mahoney</h4>
                                </div>
                            </div>
                        </div>
                        <div class="it-testimonial swiper-slide">
                            <div class="it-testimonial-box p-relative">
                                <div class="it-testimonial-box__ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="it-testimonial-box__review">
                                    “ ideaCast IT is most successful in the software sector. Their actions
                                    are fantastic. If anyone wants to customize work, I highly recommend "IDEACAST IT. ”
                                </div>
                                <div class="it-testimonial-bg">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi-icon-bg.png') }}"
                                        alt="ideacast it">
                                </div>
                            </div>
                            <div class="tp-testimonial-reviewer d-flex align-items-center ml-40">
                                <div class="tesi-reviewer-avata mr-15">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi-avata-4.png') }}"
                                        alt="ideacast it">
                                </div>
                                <div class="it-tesi-reviewer-name">
                                    <h4 class="mb-5 vogue-text-color">Tushar N. Biswas </h4>
                                </div>
                            </div>
                        </div>
                        <div class="it-testimonial swiper-slide">
                            <div class="it-testimonial-box p-relative">
                                <div class="it-testimonial-box__ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="it-testimonial-box__review">
                                    “ ideaCast IT is the most innovative & excellent software company for developing
                                    bespoke mobile, web, and desktop applications. ”
                                </div>
                                <div class="it-testimonial-bg">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi-icon-bg.png') }}"
                                        alt="ideacast it">
                                </div>
                            </div>
                            <div class="tp-testimonial-reviewer d-flex align-items-center ml-40">
                                <div class="tesi-reviewer-avata mr-15">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi-lg-1.png') }}"
                                        alt="ideacast it" class="img-fluid" style="height: 60px;">
                                </div>
                                <div class="it-tesi-reviewer-name">
                                    <h4 class="mb-5 vogue-text-color">Christopher Matthew</h4>
                                </div>
                            </div>
                        </div>
                        <div class="it-testimonial swiper-slide">
                            <div class="it-testimonial-box p-relative">
                                <div class="it-testimonial-box__ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="it-testimonial-box__review">
                                    “ ideaCast IT is a great workplace, and undoubtedly the top
                                    technological firm. They are well-known for producing high-quality goods. ”
                                </div>
                                <div class="it-testimonial-bg">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi-icon-bg.png') }}"
                                        alt="ideacast it">
                                </div>
                            </div>
                            <div class="tp-testimonial-reviewer d-flex align-items-center ml-40">
                                <div class="tesi-reviewer-avata mr-15">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi-lg-2.png') }}"
                                        alt="ideacast it" class="img-fluid" style="height: 60px;">
                                </div>
                                <div class="it-tesi-reviewer-name">
                                    <h4 class="mb-5 vogue-text-color">William Robert</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- testimonial end  -->

        <!-- it cta area start  -->
        <div class="it-cta-area pb-115">
            <div class="container">
                <div class="tp-border-top pt-120"></div>
                <div class="row">
                    <div class="col-lg-6 wow tpfadeUp" data-wow-delay=".3s">
                        <div class="it-cta__title">
                            <div class="section-title-wraper">
                                <div class="tp-section">
                                    <span class="tp-section__subtitle vogue-text-color white-bg mb-15"><i
                                            class="before-border"></i>
                                        Call To Action</span>
                                    <h2 class="tp-section__title vogue-text-color mb-45">Any Project On Your
                                        Mind. Let Us Know.</h2>
                                </div>
                            </div>
                        </div>
                        <div class="it-cta__info">
                            <span><i class="fas fa-phone"></i><a href="tel:1885962047">Call us: (+880)
                                    1841-887828</a></span>
                            <span><i class="fas fa-map-marker-alt"></i>Innovative Bhiyan Orchid(Level 12, 1025/Ka),
                                Hill View Housing Society, East Nasirabad, Chattogram-4203, Bangladesh</span>
                            <span><i class="fas fa-envelope-open"></i><a
                                    href="mailto:info@ideacastit.com">info@ideacastit.com</a></span>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="it-cta-form wow tpfadeUp" data-wow-delay=".4s">
                            <form action="{{ route('contactStore') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-item">
                                            <span><i class="fas fa-user"></i></span>
                                            <input type="text" placeholder="Full name" name="name">
                                        </div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-item">
                                            <span><i class="fas fa-envelope-open"></i></span>
                                            <input type="text" placeholder="Email address" name="email">
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-item">
                                            <span><i class="fas fa-phone"></i></span>
                                            <input type="tel" placeholder="Phone" name="phone">
                                        </div>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-item">
                                            <span><i class="fas fa-book"></i></span>
                                            <select name="topic">
                                                <option selected>Select topic</option>
                                                @forelse ($mainmenus as $key => $data)
                                                    @if ($loop->first)
                                                        @continue
                                                    @elseif ($loop->last)
                                                        @continue
                                                    @endif
                                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                @endforeach
                                                <option value="10">Others</option>
                                            </select>
                                        </div>
                                        @error('topic')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="input-item-textarea">
                                            <span><i class="fas fa-pen"></i></span>
                                            <textarea placeholder="Message" name="description"></textarea>
                                        </div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <button type="submit" class="it-cta-form-submit border-0">Submit
                                            Request</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- it cta area start  -->

        <div class="tp-it-blog theme-bg-2 pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title-wraper pb-80">
                                <div class="tp-section text-center">
                                    <span class="tp-section__subtitle vogue-text-color white-bg mb-15 wow tpfadeUp"><i
                                            class="before-border"></i>
                                        Insights <i class="after-border"></i></span>
                                    <h2 class="tp-section__title vogue-text-color wow tpfadeUp">Our Blog & Insights
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($blogs as $data)
                        <div class="col-xl-4 col-lg-6">
                            <div class="it-blog mb-30 wow tpfadeUp" data-wow-delay=".3s">
                                <div class="it-blog__thumb w-img">
                                    <div class="fix">
                                        <img src="{{ asset('storage/img/blogs/' . $data->picture) }}" alt="ideacast it">
                                    </div>
                                    <div class="it-blog-date">
                                        <span><b>{{ \Carbon\Carbon::parse($data->created_at)->isoFormat('D') }}</b>
                                            {{ \Carbon\Carbon::parse($data->created_at)->isoFormat('MMM') }}</span>
                                    </div>
                                </div>
                                <div class="it-blog-info white-bg">
                                    <h3 class="it-blog__title">
                                        <a href="{{ route('singleBlog', $data->id) }}">
                                            {{ $data->title }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="it-portfolio-btn-wrapper text-center mt-20">
                            <a href="{{ route('blog') }}"
                                class="tp-border-btn vogue-text-color tp-btn-hover alt-bg-orange">more
                                <span>
                                    <i class="fas fa-long-arrow-right"></i>
                                    <i class="fas fa-long-arrow-right"></i>
                                </span>
                                <b style="top: 107.625px; left: 7.25px;"></b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
