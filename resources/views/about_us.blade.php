@extends('layouts.master')
@section('css')
@endsection
@section('title')
@stop
@section('content')
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="{{ asset('front/img/bg/14.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">About Us</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span>
                                        Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-25 pb-120 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="{{ asset('about_img/' . $about_us->image) }}" alt="About Us Image">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-30">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color d-none">About Us
                            </h6>
                            <h1 class="section-title">{{ $about_us->name }}</h1>
                            <p>{{ $about_us->summary }}</p>
                        </div>
                        <ul class="ltn__list-item-1 ltn__list-item-1-before--- clearfix">
                            <li><i class="fas fa-check-square"></i>{{ $about_us->goals }}</li>
                            <li><i class="fas fa-check-square"></i> {{ $about_us->vision }}.</li>
                            <li><i class="fas fa-check-square"></i>{{ $about_us->mission }}.</li>
                        </ul>
                        <div class="about-author-info-2 border-top mt-30 pt-20">
                            <ul>
                                <li>
                                    <div class="about-author-info-2-brief  d-flex">

                                        <div class="author-name-designation">
                                            <h4 class="mb-0">{{ $about_us->name }}</h4>
                                            <small>{{ $about_us->email }}</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-author-info-2-contact  d-flex">
                                        <div class="about-contact-icon d-flex align-self-center mr-10">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="about-author-info-2-contact-info">
                                            <small>Get Support</small>
                                            <h6 class="mb-0">{{ $about_us->moobile }}</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->
    <div class="ltn__feature-area section-bg-1 pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">

                        <h1 class="section-title">{{ $about_us->name }}<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <!-- <span><img src="img/icons/icon-img/21.png" alt="#"></span> -->
                                <span><i class="flaticon-secure"></i> </span>
                            </div>
                            <h3><a href="">Our goals</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>{{ $about_us->goals }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <!-- <span><img src="img/icons/icon-img/22.png" alt="#"></span> -->
                                <span><i class="flaticon-secure"></i> </span>
                            </div>
                            <h3><a href="">Our vision</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>{{ $about_us->vision }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <!-- <span><img src="img/icons/icon-img/23.png" alt="#"></span> -->
                                <span><i class="flaticon-secure"></i> </span>
                            </div>
                            <h3><a href="">Our mission</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>{{ $about_us->mission }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
@section('js')
@endsection
