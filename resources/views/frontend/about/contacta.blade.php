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
        <div class="about-me-about-area pt-150 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 wow tpfadeUp">
                        <div class="about-me-about-left pr-40">
                            <div class="tp-section">
                                <span class="tp-section__subtitle white-bg mb-25"><i class="before-border"></i> About
                                    </span>
                                <p style="text-align: justify;">
                                    We strive to become the best Web Application, Software, Cloud technology, Graphics &
                                    Design, and Digital Marketing services firm in Bangladesh. “ideaCast IT” works in
                                    several IT sectors with a skilled expert workforce. We possess the experience and
                                    expertise to help web entrepreneurs reach their customers across the digital space. We
                                    support business owners in achieving their business goals across the digital world.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow tpfadeUp">
                        <div class="about-me-about-right">
                            <div class="tp-section">
                                <span class="tp-section__subtitle white-bg mb-25"><i class="before-border"></i> ideaCast IT</span>
                                <p class="mb-25" style="text-align: justify;">
                                    We believe in minimizing the work from the client while maximizing the value of the
                                    services provided. ideaCast IT has been backed by highly skilled professionals committed
                                    to providing complete IT solutions in one place. We provide the most modern technology,
                                    experienced and capable hands also offer the most user-friendly and customized
                                    solutions. “ideaCast IT” provides high-quality on-site services for web development and
                                    end users on a broad range of web design & development platforms and the latest
                                    technologies.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="about-me-about-download">
                            <a href="{{ route('companyProfile') }}" class="tp-white-border-btn" download>
                                download company profile
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

        <div class="it-cta-area law-cta-area about-me-cta-area pt-120 pb-85 main-custom-color"
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
                                        <p class="pr-45 wow tpfadeUp" data-wow-delay=".3s" style="text-align: justify; color:white !important;">
                                            We strive to become the best Web Application, Software, Cloud technology,
                                            Graphics & Design, and Digital Marketing services firm in Bangladesh.
                                        </p>
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
