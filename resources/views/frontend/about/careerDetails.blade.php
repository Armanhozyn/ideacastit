@extends('apps.frontapp')
@section('title', 'CARRER IN ICIT')
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
        <!-- breadcrumb area start -->
        <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="assets/img/breadcrumb/breadcrumb-bg.png"
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
                            <h3 class="breadcrumb__title">Job Details</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <div class="tp-job-details pt-120">
            <div class="container">
                <div class="tp-job-details-box pt-80 pb-80">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="tp-inner-pt-section wow tpfadeUp"
                                style="visibility: visible; animation-name: tpfadeUp;">
                                <h4 class="tp-inner-pt-section__title mb-30">About Jobs</h4>
                                {!! $data->description !!}
                                <h4 class="tp-inner-pt-section__title mb-30">Apply for this position</h4>

                                <div class="tp-inner-pg-form wow tpfadeUp" data-wow-delay=".4s"
                                    style="visibility: hidden; animation-delay: 0.4s; animation-name: none;">
                                    <div class="it-cta-form">
                                        <form action="{{ route('leed.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row align-items-center">
                                                <div class="col-lg-6">
                                                    <div class="input-item">
                                                        <span><i class="fas fa-user"></i></span>
                                                        <input type="text" placeholder="Full name" name="name"
                                                            value="{{ old('name') }}">
                                                    </div>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-item">
                                                        <span><i class="fas fa-envelope-open"></i></span>
                                                        <input type="text" placeholder="Email address" name="email"
                                                            value="{{ old('email') }}">
                                                    </div>
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-item">
                                                        <span><i class="fas fa-phone"></i></span>
                                                        <input type="tel" placeholder="Phone" name="phone"
                                                            value="{{ old('phone') }}">
                                                    </div>
                                                    @error('phone')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-item-upload">
                                                        <input type="file" name="file" id="file">
                                                        <label for="file"><span><i class="fas fa-cloud"></i></span>
                                                            Upload CV/Resume</label>
                                                    </div>
                                                    @error('file')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-item">
                                                        <select class="form-control" name="career_id" id="career_id">
                                                            <option selected disabled>Application for: </option>
                                                            @foreach ($careers as $value)
                                                                <option value="{{ $value->id }}">{{ $value->topic }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error('career_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <div class="input-item-textarea">
                                                        <span><i class="fas fa-pen"></i></span>
                                                        <textarea placeholder="Cover Letter" spellcheck="false" name="message">{{ old('message') }}</textarea>
                                                    </div>
                                                    @error('message')
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
                </div>
            </div>
        </div>

    </main>
@endsection
