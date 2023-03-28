@extends('layouts.admin')
@section('css')
@endsection
@section('title')
@stop
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">

                    <div class="blog-view">
                        <div class="blog-single-post">

                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <h4 class="header-title">Image</h4>

                                                <div class="row">
                                                    @forelse ($product->images as $image)
                                                        <div class="col-sm-4">
                                                            <img src="{{ asset('images_products/' . $image->url) }}"
                                                                alt="image" class="img-fluid rounded" width="200" />

                                                        </div>
                                                    @empty
                                                    @endforelse


                                                </div>
                                                <div>
                                                    <h4 class="header-title">Images</h4>
                                                    <a href="javascript:void(0);"><img width="200px"
                                                            height="200px"alt=""
                                                            src="{{ asset('products_imgs/' . $product->image) }}"
                                                            class="img-fluid"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>





                        </div>
                        </br>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="card author-widget clearfix">
                                    <div class="card-header">
                                        <h4 class="card-title">Name Product</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="about-author">

                                            <div class="author-details">
                                                <p class="mb-0">{{ $product->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card author-widget clearfix">
                                    <div class="card-header">
                                        <h4 class="card-title">Description</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="about-author">

                                            <div class="author-details">

                                                <p class="mb-0">{{ $product->desc }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="card author-widget clearfix">
                                    <div class="card-header">
                                        <h4 class="card-title">Quantity</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="about-author">

                                            <div class="author-details">

                                                <p class="mb-0">{{ $product->quantity }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card author-widget clearfix">
                                    <div class="card-header">
                                        <h4 class="card-title">Status</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="about-author">

                                            <div class="author-details">

                                                <p class="mb-0">{{ $product->status }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="card author-widget clearfix">
                                    <div class="card-header">
                                        <h4 class="card-title">org_price</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="about-author">

                                            <div class="author-details">

                                                <p class="mb-0">{{ $product->org_price }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card author-widget clearfix">
                                    <div class="card-header">
                                        <h4 class="card-title">sell_price</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="about-author">

                                            <div class="author-details">

                                                <p class="mb-0">{{ $product->sell_price }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="card author-widget clearfix">
                                    <div class="card-header">
                                        <h4 class="card-title">Type</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="about-author">
                                            <div class="author-details">
                                                <p class="mb-0">{{ $product->types->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card author-widget clearfix">
                                    <div class="card-header">
                                        <h4 class="card-title">Category</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="about-author">

                                            <div class="author-details">

                                                <p class="mb-0">{{ $product->types->category->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>







                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('js')
@endsection
