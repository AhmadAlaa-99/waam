@extends('layouts.master')
@section('css')
@endsection
@section('title')
@stop
@section('content')


    <!-- SLIDER AREA START (slider-3) -->
    <div class="ltn__slider-area ltn__slider-3  section-bg-1">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">

            @foreach ($sliders as $slider)
                <!-- ltn__slide-item -->
                <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal--- ltn__slide-item-3 bg-image bg-overlay-theme-black-60---"
                    data-bs-bg="{{ asset('imgs_sliders/' . $slider->img) }}">
                    <div class="ltn__slide-item-inner text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 align-self-center">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <div class="slide-video mb-50 d-none">
                                                <a class="ltn__video-icon-2 ltn__video-icon-2-border"
                                                    href="{{ asset('imgs_sliders/' . $slider->img) }}"
                                                    data-rel="lightcase:myCollection">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>


                                            <h6 class="slide-sub-title white-color--- animated"><span><i
                                                        class="fas fa-syringe"></i></span> 100% genuine Products</h6>
                                            <h1 class="slide-title animated ">{{ $slider->title }}</h1>
                                            <div class="slide-brief animated">
                                                <p>{{ $slider->description }}</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="{{ $slider->button_url }}"
                                                    class="theme-btn-1 btn btn-effect-1">{{ $slider->button_title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
    <!-- SLIDER AREA END -->

    <!-- CATEGORY AREA START -->
    <div class="ltn__category-area section-bg-1-- pt-50 pb-90">
        <div class="container">
            <div class="row ltn__category-slider-active-six slick-arrow-1 border-bottom">
                @foreach ($categories as $category)
                    <div class="col-12">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="{{ route('category_single', $category->id) }}">
                                    <i class="{{ $category->logo }}"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a href="{{ route('category_single', $category->id) }}"></a>{{ $category->name }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- CATEGORY AREA END -->


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

    <!-- PRODUCT AREA START (product-item-3) -->
    <div class="ltn__product-area ltn__product-gutter pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title">Leatest Product</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
                @foreach ($products_latest as $product)
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item ltn__product-item-3 text-left">
                            <div class="product-img">
                                <a href="{{ route('product_single', $product->id) }}"><img
                                        src="{{ asset('products_imgs/' . $product->image) }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">{{ $product->types->name }}</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="{{ route('product_single', $product->id) }}">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>

                                        @if ((Auth::check() && Auth::user()->role_name == 'customer') || Auth::guest())
                                            <li>
                                                <a href="{{ route('cart_add', $product->id) }}">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                        @endif()


                                    </ul>
                                </div>
                            </div>
                            <div class="product-info">
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <h2 class="product-title"><a
                                        href="{{ route('product_single', $product->id) }}">{{ $product->name }}</a></h2>
                                <div class="product-price">
                                    <span>${{ $product->org_price }}</span>
                                    <del>${{ $product->sell_price }}</del>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  -->
                @endforeach

            </div>
        </div>
    </div>
    <!-- PRODUCT AREA END -->
    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom d-none" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Buy medical disposable face mask <br> to protect your loved ones</h1>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="{{ route('products_all') }}">Explore Products <i
                                    class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->
@endsection
@section('js')
@endsection
