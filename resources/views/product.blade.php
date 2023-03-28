@extends('layouts.master')
@section('css')
@endsection
@section('title')
@stop
@section('content')
    <style>
        .btn-primary {
            color: #fff;
            background-color: #0a9a73;
            border-color: #6cc2ab;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #071c1f;
            border-color: #071c1f;
        }

        .btn-primary:after {
            color: #fff;
            background-color: #071c1f;
            border-color: #071c1f;
        }
    </style>
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" data-bs-bg="{{ asset('front/img/bg/14.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Product Details</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href=""><span class="ltn__secondary-color"><i class="fas fa-home"></i></span>
                                        Home</a></li>
                                <li>Product Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner mb-60">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ltn__shop-details-img-gallery">
                                    <div class="ltn__shop-details-large-img">
                                        @if (empty($product->images))
                                            <div class="single-large-img">
                                                <a href="{{ asset('products_imgs/' . $product->image) }}"
                                                    data-rel="lightcase:myCollection">
                                                    <img src="{{ asset('products_imgs/' . $product->image) }}" alt="Image">
                                                </a>
                                            </div>
                                    </div>
                                    <div class="ltn__shop-details-small-img slick-arrow-2">
                                        <div class="single-small-img">
                                            <img src="{{ asset('products_imgs/' . $product->image) }}" alt="Image">
                                        </div>
                                    @else
                                        @foreach ($product->images as $image)
                                            <div class="single-large-img">
                                                <a href="{{ asset('images_products/' . $image->url) }}"
                                                    data-rel="lightcase:myCollection">
                                                    <img src="{{ asset('images_products/' . $image->url) }}" alt="Image">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="ltn__shop-details-small-img slick-arrow-2">
                                        @foreach ($product->images as $image)
                                            <div class="single-small-img">
                                                <img src="{{ asset('images_products/' . $image->url) }}" alt="Image">
                                            </div>
                                        @endforeach




                                        @endif



                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-product-info shop-details-info pl-0">
                                    <div class="product-ratting">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                        </ul>
                                    </div>
                                    <h3>{{ $product->name }}</h3>
                                    <div class="product-price">
                                        <span>${{ $product->org_price }}</span>
                                        <del>${{ $product->sell_price }}</del>
                                    </div>
                                    <div class="modal-product-meta ltn__product-details-menu-1">
                                        <ul>
                                            <li>
                                                <strong>Category:</strong>
                                                <span>
                                                    <a href="#">{{ $product->types->category->name }}</a>
                                                </span>
                                            </li>
                                            <li>
                                                <strong>Type:</strong>
                                                <span>
                                                    <a href="#">{{ $product->types->name }}</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ltn__product-details-menu-2">
                                        <ul>
                                            <form action="{{ route('cart_add_single', $product->id) }}" method="post"
                                                enctype="multipart/form-data"autocomplete="off">
                                                {{ csrf_field() }}
                                                <li>
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="quantity"
                                                            class="cart-plus-minus-box" min="1">
                                                    </div>
                                                </li>
                                                <li>
                                                    <button type="submit"
                                                        class="btn btn-primary"name="action"value="save_and_add_com"> <i
                                                            class="fas fa-shopping-cart"></i>
                                                        <span>ADD TO CART</span></button>



                                                </li>
                                            </form>
                                        </ul>
                                    </div>





                                    <hr>
                                    <div class="ltn__social-media">
                                        <ul>
                                            <li>Share:</li>
                                            <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                            <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                                            </li>

                                        </ul>
                                    </div>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Tab Start -->
                    <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                        <div class="ltn__shop-details-tab-menu">
                            <div class="nav">
                                <a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Description</a>

                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                                <div class="ltn__shop-details-tab-content-inner">
                                    <h4 class="title-2">Description</h4>
                                    <p>
                                        {{ $product->desc }}
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Shop Tab End -->
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                        <!-- Category Widget -->
                        <div class="widget ltn__menu-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                            <ul>
                                @forelse ($categories as $category)
                                    <li><a href="{{ route('category_single', $category->id) }}">{{ $category->name }}<span><i
                                                    class="fas fa-long-arrow-alt-right"></i></span></a></li>
                                @empty
                                @endforelse


                            </ul>
                        </div>

                        <!-- Search Widget -->

                        <!-- Tagcloud Widget -->
                        <div class="widget ltn__tagcloud-widget">
                            <h4 class="ltn__widget-title ltn__widget-title-border">Product Types</h4>
                            <ul>
                                @forelse ($types as $type)
                                    <li><a href="{{ route('type_single', $type->id) }}">{{ $type->name }}</a></li>
                                @empty
                                @endforelse


                            </ul>
                        </div>


                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
    <div class="ltn__product-slider-area ltn__product-gutter pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2">
                        <h4 class="title-2">Related Products<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__related-product-slider-one-active slick-arrow-1">
                @foreach ($relateds as $related)
                    <div class="col-lg-12">
                        <div class="ltn__product-item ltn__product-item-3 text-center">
                            <div class="product-img">
                                <a href="{{ route('product_single', $related->id) }}"><img
                                        src="{{ asset('products_imgs/' . $related->image) }}" alt="#"></a>
                                <div class="product-badge">
                                    <ul>
                                        <li class="sale-badge">{{ $related->types->name }}</li>
                                    </ul>
                                </div>
                                <div class="product-hover-action">
                                    <ul>
                                        <li>
                                            <a href="{{ route('product_single', $product->id) }}" title="Quick View"
                                                data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                <i class="far fa-eye"></i>
                                            </a>
                                        </li>
                                        @if ((Auth::check() && Auth::user()->role_name == 'customer') || Auth::guest())
                                            <li>
                                                <a href="{{ route('cart_add', $product->id) }}">
                                                    <i class="fas fa-shopping-cart"></i>
                                                </a>
                                            </li>
                                        @endif

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
                                <h2 class="product-title"><a href="product-details.html">{{ $related->name }}</a></h2>
                                <div class="product-price">
                                    <span>${{ $related->org_price }}</span>
                                    <del>${{ $related->sell_price }}</del>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- PRODUCT SLIDER AREA END -->
@endsection
@section('js')
@endsection
