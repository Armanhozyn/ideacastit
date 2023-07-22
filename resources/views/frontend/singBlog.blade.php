@extends('apps.frontapp')
@section('title', 'SINGLE BLOG')
@section('main')
    <main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb__area theme-bg pt-80 pb-25" data-background="assets/img/breadcrumb/breadcrumb-bg.png"
            style="background-image: url(&quot;assets/img/breadcrumb/breadcrumb-bg.png&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__content p-relative z-index-1">
                            <div class="breadcrumb__list mb-10">
                                <span><a href="index.html">Home</a></span>
                                <span class="dvdr dvdr-line"></span>
                                <span class="tp-bc-acive-menu">Blog Details</span>
                            </div>
                            <h1 class="">{{ $blog->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- postbox area start -->
        <div class="postbox__area pt-25 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pr-50 mr-30">
                            <div class="postbox__border">
                                <article class="postbox__item format-stander mb-30 transition-3">
                                    <div class="postbox__content postbox__content-single">
                                        <div class="postbox__meta mb-25">
                                            <span><a href="#"><i class="fal fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($blog->created_at)->isoFormat('MMMM Do YYYY'); }}</a></span>
                                        </div>
                                        <div class="postbox__text-single">
                                            {!! $blog->description !!}

                                        </div>
                                    </div>

                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- postbox area end -->
    </main>
@endsection
