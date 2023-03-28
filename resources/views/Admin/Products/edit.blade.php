@extends('layouts.admin')
@section('css')
@endsection
@section('title')
@stop
@section('content')


    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Product</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="exam.html">Products</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('products.update', $product->id) }}" method="post"
                                enctype="multipart/form-data"autocomplete="off">
                                @csrf

                                {{ method_field('PUT') }}
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Product Details</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text"
                                                name="name"value="{{ $product->name }}"class="form-control"required>
                                        </div>
                                                             @if ($errors->any())
  <div class="alert alert-danger">
     <ul>
        @foreach ($errors->all() as $error)
           <li>Error - {{ $error }}</li>
        @endforeach
     </ul>
  </div>
@endif
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select class="form-control select"name="type_id"required>
                                                <option selected>Select Type</option>
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->id }}"{{ $type->id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>org_price</label>
                                            <input type="text" name="org_price"
                                                value="{{ $product->org_price }}"class="form-control"required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>sell_price</label>
                                            <input type="text"
                                                name="sell_price"value="{{ $product->sell_price }}"class="form-control"required>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>desc</label>
                                            <textarea type="time" name="desc"value="{{ $product->desc }}"class="form-control"required>
                                                {{ $product->desc }}
                                                </textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>quantity</label>
                                            <input type="number"
                                                name="quantity"value="{{ $product->quantity }}"class="form-control"required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>image_name</label>
                                            <input type="file" name="img"class="form-control"required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>images - multiples</label>
                                            <input type="file" name="images[]"class="form-control"multiple>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit"
                                                class="btn btn-primary">Submit</button>

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
