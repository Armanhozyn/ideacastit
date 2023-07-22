@extends('apps.frontapp')
@section('title', 'BLOGS OF ICIT')
@section('main')
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb__area theme-bg pt-120 pb-120"
        data-background="{{ asset('frontend/assets/img/breadcrumb/breadcrumb-bg.png') }}"
        style="background-image: url({{ asset('frontend/assets/img/breadcrumb/breadcrumb-bg.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="index.html">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-acive-menu">Blog</span>
                        </div>
                        <h3 class="breadcrumb__title">Blog &amp; Insights</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <div class="tp-lasted-blog-grid pt-120 pb-60">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $data)
                <div class="col-xl-4 col-lg-6">
                    <div class="it-blog tp-lasted-blog mb-30 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1000">
                        <div class="it-blog__thumb w-img">
                            <div class="fix">
                                <img class="img-fluid" src="{{ asset('storage/img/blogs/'.$data->picture) }}" alt="ideacast it">
                            </div>
                            <div class="it-blog-date">
                                <span><b>{{ \Carbon\Carbon::parse($data->created_at)->isoFormat('D'); }}</b> {{ \Carbon\Carbon::parse($data->created_at)->isoFormat('MMM'); }}</span>
                            </div>
                        </div>
                        <div class="it-blog-info white-bg">
                            <h3 class="it-blog__title mb-50"><a href="{{ route('singleBlog',$data->id) }}">{{ $data->title }}</a></h3>
                            <div class="tp-seo-full-btn">
                                <a href="{{ route('singleBlog',$data->id) }}" class="it-portfolio-item__btn"> Read More
                                    <span class="mt-5">
                                        <i class="fal fa-long-arrow-right"></i>
                                        <i class="fal fa-long-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
