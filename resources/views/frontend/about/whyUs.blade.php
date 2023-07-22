@extends('apps.frontapp')
@section('title', 'WHY CHOOSE ICIT')
@section('main')
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb__area theme-bg pt-80 pb-60"
            data-background="{{ asset('frontend/assets/img/breadcrumb/breadcrumb-bg.png') }}"
            style="background-image: url({{ asset('frontend/assets/img/breadcrumb/breadcrumb-bg.png') }});">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <div class="breadcrumb__list mb-10">
                                <span><a href="{{ url('/home') }}">Home</a></span>
                                <span class="dvdr dvdr-line"></span>
                                <span class="tp-bc-acive-menu">why us</span>
                            </div>
                            <h3 class="breadcrumb__title">Why did You Choose ideaCast IT</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- service start  -->
        <div class="tp-sv-detials-area pt-70 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="tp-sv-details-serive-left wow tpfadeUp"
                            style="visibility: visible; animation-name: tpfadeUp;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="sv-detials-sv-item mb-30">
                                        <div class="sv-detials-sv-item__icon">
                                            <span><i class="flaticon-computer"></i></span>
                                            <!-- flaticon-analytics -->
                                        </div>
                                        <h3 class="sv-detials-sv-item__title"><a href="#"> 24/7 Support &amp;
                                                Services</a></h3>
                                        <span class="counter-number">01</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sv-detials-sv-item mb-30">
                                        <div class="sv-detials-sv-item__icon">
                                            <span><i class="flaticon-computer"></i></span>
                                            <!-- flaticon-analytics -->
                                        </div>
                                        <h3 class="sv-detials-sv-item__title"><a href="#"> 100% Client
                                                setisfection</a></h3>
                                        <span class="counter-number">02</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sv-detials-sv-item mb-30">
                                        <div class="sv-detials-sv-item__icon">
                                            <span><i class="flaticon-computer"></i></span>
                                            <!-- flaticon-analytics -->
                                        </div>
                                        <h3 class="sv-detials-sv-item__title"><a href="#">100% Quality Assurance</a>
                                        </h3>
                                        <span class="counter-number">03</span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="sv-detials-sv-item mb-30">
                                        <div class="sv-detials-sv-item__icon">
                                            <span><i class="flaticon-computer"></i></span>
                                            <!-- flaticon-analytics -->
                                        </div>
                                        <h3 class="sv-detials-sv-item__title"><a href="#">Repeated Customer</a>
                                        </h3>
                                        <span class="counter-number">04</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="tp-sv-details-serive-left mr-10 ml-40 wow tpfadeUp" data-wow-delay=".3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: tpfadeUp;">
                            <div class="section-title-wraper">
                                <div class="tp-section">
                                    <h2 class="tp-section__title mb-25" style="font-size: 46px;">Why Choose ideaCast IT</h2>
                                    <p class="mb-0 pb-25" style="text-align: justify;">
                                        ideaCast IT is a solution that operates in various IT industries with experienced
                                        and skilled staff. We have the knowledge to assist entrepreneurs on the web to reach
                                        their clients in the digital world. We believe that hard work and integrity can
                                        accomplish many things, and with our team of members, we've begun making progress
                                        and are preparing an ideal workforce for you.
                                        <br>
                                        Our experienced and young professionals are ready to offer the highest return on
                                        your investment in the shortest time by utilizing their skills and expertise. We
                                        welcome you.

                                    </p>
                                </div>
                            </div>
                            <div class="tp-sv-about-cta d-flex align-items-center mb-30">
                                <span class="call-icon"><i class="fas fa-phone"></i></span>
                                <p class="mb-0">
                                    <span>Phone number</span> <br>
                                    <b><a href="callto:+8801841887828">(+880)1841-887828</a></b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service end  -->

        {{-- <!-- feature area start -->
        <div class="tp-sv-page-feature-area black-bg p-relative pt-80 pb-80">
            <div class="sv-page-fea-img-1"
                data-background="{{ asset('frontend/assets/img/services/sv-page-fea-img-1.jpg') }}"
                style="background-image: url({{ asset('frontend/assets/img/services/sv-page-fea-img-1.jpg') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-sv-fea-ab-content mr-60">
                            <div class="section-title-wraper">
                                <div class="tp-section">
                                    <h2 class="tp-section__title text-white mb-25 wow tpfadeUp"
                                        style="visibility: hidden; animation-name: none;">About SEO Agency</h2>
                                    <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s"
                                        style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">Being
                                        employee-owned keeps us focused on the unique needs of
                                        our users, &amp; we wouldn't have it any other way. Our many security
                                        features include Multi Factor Authentication.</p>
                                </div>
                            </div>
                            <div class="tp-ha-about-fea tp-sv-fea-list wow tpfadeUp" data-wow-delay=".4s"
                                style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                <ul>
                                    <li><span><i class="fal fa-check"></i></span>Features include Multi Factor
                                        Authentication</li>
                                    <li><span><i class="fal fa-check"></i></span>We strongly believe in providing open
                                        source solutions</li>
                                    <li><span><i class="fal fa-check"></i></span>Way of thinking, both inside and outside
                                        the box.
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-sv-page-feature-area black-bg p-relative pt-80 pb-80">
            <div class="sv-page-fea-img-2"
                data-background="{{ asset('frontend/assets/img/services/sv-page-fea-img-2.jpg') }}"
                style="background-image: url({{ asset('frontend/assets/img/services/sv-page-fea-img-2.jpg') }});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="tp-sv-fea-ab-content ml-80">
                            <div class="section-title-wraper">
                                <div class="tp-section">
                                    <h2 class="tp-section__title text-white mb-25 wow tpfadeUp"
                                        style="visibility: hidden; animation-name: none;">The challenges it
                                        presents may seem</h2>
                                    <p class="mb-0 pb-55 wow tpfadeUp" data-wow-delay=".3s"
                                        style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">Being
                                        employee-owned keeps us focused on the unique needs of
                                        our users, &amp; we wouldn't have it any other way. Our many security
                                        features include Multi Factor Authentication.</p>
                                </div>
                            </div>
                            <div class="sv-details-feature-wrapper">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sv-details-fea-item wow tpfadeRight"
                                            style="visibility: hidden; animation-name: none;">
                                            <div class="sv-details-fea-item__icon mb-20">
                                                <img src="{{ asset('frontend/assets/img/icons/bulb-icon.png') }}"
                                                    alt="ideacast it">
                                            </div>
                                            <h3 class="sv-details-fea-item__title">Key of success</h3>
                                            <div class="sv-details-fea-item__arrow">
                                                <span><i class="fal fa-long-arrow-right"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="sv-details-fea-item wow tpfadeLeft"
                                            style="visibility: hidden; animation-name: none;">
                                            <div class="sv-details-fea-item__icon mb-20">
                                                <img src="{{ asset('frontend/assets/img/icons/tv-icon.png') }}"
                                                    alt="ideacast it">
                                            </div>
                                            <h3 class="sv-details-fea-item__title">Stone for business</h3>
                                            <div class="sv-details-fea-item__arrow">
                                                <span><i class="fal fa-long-arrow-right"></i></span>
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
        <!-- feature area end --> --}}

        <!-- faq area start  -->
        <div class="seo-faq-area sv-fea-area pt-80 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="seo-faq-cotent mb-30">
                            <div class="section-title-wraper">
                                <div class="tp-section">
                                    <h2 class="tp-section__title mb-45 wow tpfadeUp"
                                        style="visibility: hidden; animation-name: none;">Our Companys
                                        Some Q &amp;Answer
                                    </h2>
                                </div>
                            </div>
                            <div class="accordion tp-accordion wow tpfadeUp" id="accordionExample"
                                style="visibility: hidden; animation-name: none;">
                                <div class="accordion-item wow tpfadeUp"
                                    style="visibility: hidden; animation-name: none;">
                                    <h2 class="accordion-header" id="faq1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            How do you guarantee quality product?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="faq1"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            ideaCast IT QA team evaluate the output after every week,
                                            and we test our product (ideaCast IT conduct both development and Quality tests), 
                                            ideaCast IT present it to the honourable client after that, 
                                            applies your feedback on ongoing development work.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item ">
                                    <h2 class="accordion-header" id="faq2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Do you have an R&D team?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faq2"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Yes, ideaCast IT have an R&D team in-house. So if you want to make a paper that you required on your company.
                                            We are available to do this.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item " data-aos="fade-up" data-aos-duration="2000">
                                    <h2 class="accordion-header" id="faq3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Is there any team leader to discuss my idea?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faq3"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Yes. All our ideaCast IT customers are assigned a project lead as their communication and information source throughout our full cooperation.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="seo-faq-img text-end p-relative mb-30 wow tpfadeUp"
                            style="visibility: hidden; animation-name: none;">
                            <img src="{{ asset('assets/images/ideacastit/why_Choose_Us_ideaCast_IT.svg') }}" alt="ideacast it">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq area end  -->
    </main>
@endsection
