@extends('layouts.customer')
@section('css')
@endsection
@section('title')
    Send Request
@stop
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Request Send</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="subjects.html">Maintenances Requests</a></li>
                            <li class="breadcrumb-item active">Request Send</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('maintenance.store') }}"method="POST"
                                enctype="multipart/form-data"autocomplete="off">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Add Request</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Product Name <span class="login-danger">*</span></label>
                                            <input type="text" name="name" value="{{ $product->product_name }}"class="form-control"readonly>
                                            <input type="hidden" name="cart_id" value="{{ $product->cart_id }}"class="form-control"readonly>
                                            <input type="hidden" name="product_id" value="{{ $product->id }}"class="form-control"readonly>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Price<span class="login-danger">*</span></label>
                                            <input type="text" name="name" value="{{ $product->complete_price }}"class="form-control"readonly>
                                        </div>
                                    </div>
                                     <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Quantity<span class="login-danger">*</span></label>
                                            <input type="text" name="name" value="{{ $product->quantity }}"class="form-control"readonly>
                                        </div>
                                    </div>
                                     <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Sub_total<span class="login-danger">*</span></label>
                                            <input type="text" name="name" value="{{ $product->complete_price* $product->quantity }}"class="form-control"readonly>
                                        </div>
                                    </div>
                                       <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Image<span class="login-danger">*</span></label>
                                            <a><img width="150px"height="150px"src="{{asset('products_imgs/'.$product->img)}}"/></a>

                                        </div>
                                    </div>
                                        <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Date price<span class="login-danger">*</span></label>
                                            <input type="text" name="name" value="{{ $product->created_at }}"class="form-control"readonly>
                                        </div>
                                    </div>
                                        <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>Notes<span class="login-danger">*</span></label>
                                            <textarea ype="text" name="note"class="form-control"required>
                                            </textarea>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit"
                                                class="btn btn-primary"name="action"value="save">Confirm Request</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
