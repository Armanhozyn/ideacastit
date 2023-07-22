@extends('apps.frontapp')
@section('title', 'FAQ')
@section('main')
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb__area theme-bg pt-80 pb-40"
            data-background="{{ asset('frontend/assets/img/breadcrumb/breadcrumb-bg.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <div class="breadcrumb__list mb-10">
                                <span><a href="{{ url('/home') }}">Home</a></span>
                                <span class="dvdr dvdr-line"></span>
                                <span class="tp-bc-acive-menu">FAQ</span>
                            </div>
                            <h3 class="breadcrumb__title">Some Q & Answer</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- faq area start  -->
        <div class="seo-faq-area sv-fea-area pt-40 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow tpfadeUp">
                        <div class="seo-faq-cotent mb-30">
                            <div class="accordion tp-accordion" id="accordionExample">
                                <div class="accordion-item aos-init" data-aos="fade-up" data-aos-duration="1000">
                                    <h2 class="accordion-header" id="faq1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How do you guarantee quality product?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="faq1"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            ideaCast IT QA team evaluate the output after every week, and we test our product (ideaCast IT conduct both development and Quality tests),
                                            ideaCast IT present it to the honourable client after that, applies your feedback on ongoing development work.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item aos-init" data-aos="fade-up" data-aos-duration="1500">
                                    <h2 class="accordion-header" id="faq2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Is there any team leader to discuss my idea?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faq2"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Yes. All our ideaCast IT customers are assigned a project lead as their communication and information source throughout our full cooperation. 
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item aos-init" data-aos="fade-up" data-aos-duration="2000">
                                    <h2 class="accordion-header" id="faq3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Do you have an R&D team?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faq3"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Yes, ideaCast IT have an R&D team in-house. So if you want to make a paper that you required on your company.
                                            We are available to do this.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item aos-init" data-aos="fade-up" data-aos-duration="2000">
                                    <h2 class="accordion-header" id="faq4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefour" aria-expanded="false"
                                            aria-controls="collapsefour">
                                            Do you work on SAAS Model?
                                        </button>
                                    </h2>
                                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="faq4"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Yes, ideaCast IT have SaaS model Software as like, POS Inventory.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item aos-init" data-aos="fade-up" data-aos-duration="2000">
                                    <h2 class="accordion-header" id="faq5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefive" aria-expanded="false"
                                            aria-controls="collapsefive">
                                            Do you comportable with any language or Framwork?
                                        </button>
                                    </h2>
                                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="faq5"
                                        data-bs-parent="#accordionExample1">
                                        <div class="accordion-body">
                                            ideaCast IT belive on Learing new technlogy and applied after testing properly.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow tpfadeUp">
                        <div class="seo-faq-cotent mb-30">
                            <div class="accordion tp-accordion" id="accordionExample1">
                                <div class="accordion-item aos-init" data-aos="fade-up" data-aos-duration="1000">
                                    <h2 class="accordion-header" id="faq11">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne1" aria-expanded="false"
                                            aria-controls="collapseOne1">
                                            How do I understand you are working as we committed?
                                        </button>
                                    </h2>
                                    <div id="collapseOne1" class="accordion-collapse collapse" aria-labelledby="faq11"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            ideaCast IT have a monitor team for our developers and uses a KPI system to get actual work in the targeted time.
                                            We use a task Scheduler to understand project status. 
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item aos-init" data-aos="fade-up" data-aos-duration="1500">
                                    <h2 class="accordion-header" id="faq22">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                            aria-expanded="false" aria-controls="collapseTwo2">
                                            Design Making &amp; Develop
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="faq22"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Research helps you plan the best way to get your product from the
                                            manufacturer
                                            to the retail shelf. In addition to deciding which retailers should carry
                                            your
                                            product, you should determine where your inventory will be held.Research
                                            helps.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item aos-init" data-aos="fade-up" data-aos-duration="2000">
                                    <h2 class="accordion-header" id="faq33">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree3"
                                            aria-expanded="false" aria-controls="collapseThree3">
                                            Refund Policy
                                        </button>
                                    </h2>
                                    <div id="collapseThree3" class="accordion-collapse collapse show"
                                        aria-labelledby="faq33" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            On the other hand we denounce with righteous indignation &amp;
                                            dislike men who are so beguiled and demoralized by the charms
                                            of pleasure of the moment.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item aos-init" data-aos="fade-up" data-aos-duration="2000">
                                    <h2 class="accordion-header" id="faq44">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefour4"
                                            aria-expanded="false" aria-controls="collapsefour4">
                                            Company terms & conditions
                                        </button>
                                    </h2>
                                    <div id="collapsefour4" class="accordion-collapse collapse" aria-labelledby="faq4"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            On the other hand we denounce with righteous indignation &amp;
                                            dislike men who are so beguiled and demoralized by the charms
                                            of pleasure of the moment.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item aos-init" data-aos="fade-up" data-aos-duration="2000">
                                    <h2 class="accordion-header" id="faq55">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefive5"
                                            aria-expanded="false" aria-controls="collapsefive5">
                                            Working process
                                        </button>
                                    </h2>
                                    <div id="collapsefive5" class="accordion-collapse collapse" aria-labelledby="faq55"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            On the other hand we denounce with righteous indignation &amp;
                                            dislike men who are so beguiled and demoralized by the charms
                                            of pleasure of the moment.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- faq area end  -->
    </main>
@endsection
