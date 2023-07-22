@extends('apps.frontapp')
@section('title', 'CONTACT')
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
        <div id="error-box" style="position: fixed; top: 100px; right: 25px; z-index:1000; width: 35%;">
            <div class="alert alert-success" role="alert" style=" margin: 0 auto;">
                Thanks for contacting us. Our Concern team will call you back.
            </div>
        </div>
    @endif
    <main>
        <!-- about me hero area start -->
        <div class="tp-about__me theme-bg pt-60" data-background="assets/img/breadcrumb/breadcrumb-bg.png">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-xl-5 wow tpfadeUp">
                        <div class="about-me-1 mb-30" data-tilt="" data-tilt-perspective="2000">
                            <img src="{{ asset('frontend/assets/img/about/about-me-1.jpg') }}" alt="ideacast it">
                        </div>
                    </div>
                    <div class="col-md-6 wow tpfadeUp">
                        <div class="section-title-wraper">
                            <div class="tp-section">
                                <span class="tp-section__subtitle shadow-none text-redical mb-10 p-0">Head Of Idea</span>
                                <h2 class="tp-section__title mb-20">Alonso D. Dowson</h2>
                                <p class="mb-0 pb-40">Business content marketing strategy should include adding & updating
                                    your most important and high-performing. Certain circumstances seds
                                    owing to the claims duty ourighteous.</p>
                            </div>
                            <div class="about-me-socials">
                                <div class="bs-footer__top-social">
                                    <span> <a href="#"><i class="fab fa-facebook-f"></i></a></span>
                                    <span> <a href="#"><i class="fab fa-twitter"></i></a></span>
                                    <span> <a href="#"><i class="fab fa-behance"></i></a></span>
                                    <span> <a href="#"><i class="fab fa-youtube"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--about me hero  area end -->

        <div class="about-me-about-area pt-150 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow tpfadeUp">
                        <div class="about-me-about-left pr-40">
                            <div class="tp-section">
                                <span class="tp-section__subtitle white-bg mb-25"><i class="before-border"></i> About
                                    Me</span>
                                <p>Being employee-owned keeps us focused on the unique needs of our
                                    users, and we wouldn't have it any other way. Our many security features
                                    include Multi Factor Authentication, auto-enabled sFTP. A continuous
                                    technology R&D program, along with an uncompromising approach to
                                    quality and professionalism on each level. <br>
                                    <br>
                                    Highly appreciated by our long-term partners and attracts influencers
                                    from different industries.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow tpfadeUp">
                        <div class="about-me-about-right">
                            <div class="tp-section">
                                <span class="tp-section__subtitle white-bg mb-25"><i class="before-border"></i> Contact
                                    Info</span>
                                <p class="mb-25">Our many security features include Multi Factor Authentication,
                                    auto-enabled
                                    sFTP. A continuous technology R&D program.
                                </p>
                            </div>
                            <div class="about-me-about-cta-wraper mb-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="about-me-about-cta">
                                            <span>Vesturbraut 17-3 Keflavík, US</span>
                                            <span><a href="mailto:info@gencio.com">gencio@web-agency.com</a></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-me-about-cta">
                                            <span>Phone: <a href="tel:78568065900">+351 258 548 56</a></span>
                                            <span> Mobile: <a href="tel:78568065900">+354 547 244 00 </a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-me-about-download">
                                <a href="#" class="tp-white-border-btn">
                                    download cv
                                    <span class="">
                                        <i class="fas fa-download"></i>
                                        <i class="fas fa-download"></i>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-me-images-wapper pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow tpfadeUp">
                        <div class="about-img-2 w-img mb-30" data-tilt="" data-tilt-perspective="2000">
                            <img src="{{ asset('frontend/assets/img/about/about-me-2.jpg') }}" alt="ideacast it">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 w-img mb-30 wow tpfadeUp">
                        <div class="about-img-2" data-tilt="" data-tilt-perspective="2000">
                            <img src="{{ asset('frontend/assets/img/about/about-me-3.jpg') }}" alt="ideacast it">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 w-img mb-30 wow tpfadeUp">
                        <div class="about-img-2" data-tilt="" data-tilt-perspective="2000">
                            <img src="{{ asset('frontend/assets/img/about/about-me-4.jpg') }}" alt="ideacast it">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="it-cta-area law-cta-area about-me-cta-area pt-120 pb-85 black-bg"
            data-background="{{ asset('frontend/assets/img/about/about-me-contact-bg.png') }}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 wow tpfadeUp">
                        <div class="mb-30">
                            <div class="it-cta__title">
                                <div class="section-title-wraper">
                                    <div class="tp-section">
                                        <div class="pb-40"><img
                                                src="{{ asset('frontend/assets/img/icons/red-what-icon.png') }}"
                                                alt="ideacast it">
                                        </div>
                                        <h2 class="tp-section__title text-white text-capitalize mb-25 wow tpfadeUp">Any
                                            project on your
                                            mind. Let us know.</h2>
                                        <p class="pr-45 wow tpfadeUp" data-wow-delay=".3s">We bring to the table win-win
                                            survival strategies to ensure proactive
                                            domination. At the end of the day, going forward, a new normal that
                                            has evolved from generation X is on the runway heading towards.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow tpfadeUp">
                        <div class="it-cta-form about-cta-form">
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
                                        <div class="input-item bg-light">
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
    </main>
@endsection
