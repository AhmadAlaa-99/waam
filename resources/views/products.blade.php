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
                        <h1 class="page-title">Shop</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span>
                                        Home</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ltn__shop-options">
                        <ul>
                            <li>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i
                                                class="fas fa-th-large"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="showing-product-number text-right">
                                    <span>Showing {{ $products->count() }} Products</span>
                                </div>
                            </li>
                            <li>
                                <div class="short-by text-center">
                                    <select class="nice-select">
                                        <option>Default Sorting</option>

                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">

                                    @forelse ($products as $product)
                                        <!-- ltn__product-item -->
                                        <div class="col-xl-4 col-sm-6 col-6">
                                            <div class="ltn__product-item ltn__product-item-3 text-center">
                                                <div class="product-img">
                                                    <a href="{{ route('product_single', $product->id) }}"><img
                                                            src="{{ asset('products_imgs/' . $product->image) }}"
                                                            alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">{{ $product->types->name }}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('product_single', $product->id) }}"
                                                                    title="Quick View">
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
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <h2 class="product-title"><a
                                                            href="product-details.html">{{ $product->name }}</a></h2>
                                                    <div class="product-price">
                                                        <span>${{ $product->org_price }}</span>
                                                        <del>${{ $product->sell_price }}</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    @empty
                                    @endforelse
                                    {{ $products->links() }}




                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_product_list">
                            <div class="ltn__product-tab-content-inner ltn__product-list-view">
                                <div class="row">
                                    @forelse ($products as $product)
                                        <!-- ltn__product-item -->
                                        <div class="col-lg-12">
                                            <div class="ltn__product-item ltn__product-item-3">
                                                <div class="product-img">
                                                    <a href="{{ route('product_single', $product->id) }}"><img
                                                            src="{{ asset('products_imgs/' . $product->image) }}"
                                                            alt="#"></a>
                                                    <div class="product-badge">
                                                        <ul>
                                                            <li class="sale-badge">{{ $product->types->name }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-info">
                                                    <h2 class="product-title"><a
                                                            href="product-details.html">{{ $product->name }}</a></h2>
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fas fa-star-half-alt"></i></a>
                                                            </li>
                                                            <li><a href="#"><i class="far fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>${{ $product->org_price }}</span>
                                                        <del>${{ $product->sell_price }}</del>
                                                    </div>
                                                    <div class="product-brief">
                                                        <p>{{ $product->desc }}</p>
                                                    </div>
                                                    <div class="product-hover-action">
                                                        <ul>
                                                            <li>
                                                                <a
                                                                    href="{{ route('product_single', $product->id) }}"title="Quick View">
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
                                            </div>
                                        </div>

                                        <!--  -->
                                    @empty
                                    @endforelse
                                    {{ $products->links() }}


                                </div>
                            </div>
                        </div>
                    </div>

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
    <!-- PRODUCT DETAILS AREA END -->

@endsection
@section('js')
@endsection
