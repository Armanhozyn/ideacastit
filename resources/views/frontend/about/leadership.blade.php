@extends('apps.frontapp')
@section('title', 'LEADERSHIP')
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
                                <span class="tp-bc-acive-menu">Leadership</span>
                            </div>
                            <h3 class="breadcrumb__title">Our Leadership</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- team area start -->
        <div class="da-team-area pt-80 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center pb-30">
                        <h1 class="text-uppercase">our management</h1>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="ca-team-item mb-30 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                            <div class="ca-team-item__img ca-team-item-after w-img mb-35 fix">
                                <img src="{{ asset('frontend/assets/img/team/ariful-islam.jpg') }}" alt="ideacast it">
                                <div class="ca-team-item__img-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="ca-team-item__content">
                                <h3 class="ca-team-item__content-title"><a href="#">ENGR. ARIFUL ISLAM</a></h3>
                                <span>FOUNDER</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="ca-team-item mb-30 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                            <div class="ca-team-item__img ca-team-item-after w-img mb-35 fix">
                                <img src="{{ asset('frontend/assets/img/team/arman-hossain.jpg') }}" alt="ideacast it">
                                <div class="ca-team-item__img-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="ca-team-item__content">
                                <h3 class="ca-team-item__content-title"><a href="#">ARMAN HOSSAIN</a></h3>
                                <span>FOUNDER</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="ca-team-item mb-30 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                            <div class="ca-team-item__img ca-team-item-after w-img mb-35 fix">
                                <img src="{{ asset('frontend/assets/img/team/mohammad-rayhan.jpg') }}" alt="ideacast it">
                                <div class="ca-team-item__img-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="ca-team-item__content">
                                <h3 class="ca-team-item__content-title"><a href="#">MOHAMMAD RAYHAN</a></h3>
                                <span>FOUNDER</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="ca-team-item mb-30 wow tpfadeUp" style="visibility: visible; animation-name: tpfadeUp;">
                            <div class="ca-team-item__img ca-team-item-after w-img mb-35 fix">
                                <img class="img-fluid" src="{{ asset('frontend/assets/img/team/asifuddoula-sakib.jpg') }}" alt="ideacast it">
                                <div class="ca-team-item__img-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="ca-team-item__content">
                                <h3 class="ca-team-item__content-title"><a href="#">ASIFUDDOUL SAKIB</a></h3>
                                <span>FOUNDER</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team area end  -->


        <!-- team area start -->
        <div class="da-team-area pt-40 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center pb-30">
                        <h1 class="text-uppercase">our team members</h1>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="ca-team-item mb-30 wow tpfadeUp"
                            style="visibility: visible; animation-name: tpfadeUp;">
                            <div class="ca-team-item__img ca-team-item-after w-img mb-35 fix">
                                <img src="{{ asset('frontend/assets/img/team/ca-team-1.jpg') }}" alt="ideacast it">
                                <div class="ca-team-item__img-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="ca-team-item__content">
                                <h3 class="ca-team-item__content-title"><a href="#"> Asonio D. Dowson</a></h3>
                                <span>Founder</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="ca-team-item mb-30 wow tpfadeUp"
                            style="visibility: visible; animation-name: tpfadeUp;">
                            <div class="ca-team-item__img ca-team-item-after w-img mb-35 fix">
                                <img src="{{ asset('frontend/assets/img/team/ca-team-2.jpg') }}" alt="ideacast it">
                                <div class="ca-team-item__img-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="ca-team-item__content">
                                <h3 class="ca-team-item__content-title"><a href="#"> Berat Battle</a></h3>
                                <span>Head Of Design</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="ca-team-item mb-30 wow tpfadeUp"
                            style="visibility: visible; animation-name: tpfadeUp;">
                            <div class="ca-team-item__img ca-team-item-after w-img mb-35 fix">
                                <img src="{{ asset('frontend/assets/img/team/ca-team-3.jpg') }}" alt="ideacast it">
                                <div class="ca-team-item__img-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="ca-team-item__content">
                                <h3 class="ca-team-item__content-title"><a href="#"> Matthew Swanson</a></h3>
                                <span>CEO</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="ca-team-item mb-30 wow tpfadeUp"
                            style="visibility: visible; animation-name: tpfadeUp;">
                            <div class="ca-team-item__img ca-team-item-after w-img mb-35 fix">
                                <img src="{{ asset('frontend/assets/img/team/ca-team-1.jpg') }}" alt="ideacast it">
                                <div class="ca-team-item__img-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="ca-team-item__content">
                                <h3 class="ca-team-item__content-title"><a href="#"> Kirsty Mcdermott</a></h3>
                                <span>Support Member</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="ca-team-item mb-30 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                            <div class="ca-team-item__img ca-team-item-after w-img mb-35 fix">
                                <img src="{{ asset('frontend/assets/img/team/ca-team-5.jpg') }}" alt="ideacast it">
                                <div class="ca-team-item__img-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="ca-team-item__content">
                                <h3 class="ca-team-item__content-title"><a href="#"> Randal Sullivan </a></h3>
                                <span>Marketing Manegar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="ca-team-item mb-30 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                            <div class="ca-team-item__img ca-team-item-after w-img mb-35 fix">
                                <img src="{{ asset('frontend/assets/img/team/ca-team-6.jpg') }}" alt="ideacast it">
                                <div class="ca-team-item__img-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="ca-team-item__content">
                                <h3 class="ca-team-item__content-title"><a href="#"> Cecil Duncan </a></h3>
                                <span>New Engineer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="ca-team-item mb-30 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                            <div class="ca-team-item__img ca-team-item-after w-img mb-35 fix">
                                <img src="{{ asset('frontend/assets/img/team/ca-team-7.jpg') }}" alt="ideacast it">
                                <div class="ca-team-item__img-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="ca-team-item__content">
                                <h3 class="ca-team-item__content-title"><a href="#"> Rose Peters</a></h3>
                                <span>Newb Supporter </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-xl-3">
                        <div class="ca-team-item mb-30 wow tpfadeUp" style="visibility: hidden; animation-name: none;">
                            <div class="ca-team-item__img ca-team-item-after w-img mb-35 fix">
                                <img src="{{ asset('frontend/assets/img/team/ca-team-8.jpg') }}" alt="ideacast it">
                                <div class="ca-team-item__img-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="ca-team-item__content">
                                <h3 class="ca-team-item__content-title"><a href="#"> Lila Watson</a></h3>
                                <span>Support Engineer</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- team area end  -->
    </main>
@endsection
