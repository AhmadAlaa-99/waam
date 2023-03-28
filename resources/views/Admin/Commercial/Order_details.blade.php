@extends('layouts.admin')
@section('css')
@endsection
@section('title')
Customer Details
@stop
@section('content')
    <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="card invoice-info-card">
                            <div class="card-body">
                                <div class="invoice-item invoice-item-one">
                                    <div class="row">
                                        <div class="col-md-6">
                                         
                                        </div>
                                        <div class="col-md-6">
                                            <div class="invoice-info">
                                                <strong class="customer-text-one">Customer Details</strong>
                                                <h6 class="invoice-name">Name: {{ $co->name }}</h6>
                                                <p class="invoice-details">
                                                    Email: {{ $co->email }} <br>
                                                   Phone: {{ $co->phone }} <br>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                     <div class="invoice-issues-box">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="invoice-issues-date">
                                                <p>Cart ID : {{ $ca->id }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="invoice-issues-date">
                                                <p>Cart Date : {{ $ca->date }}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="invoice-issues-date">
                                                <p>Cart Amount : {{ $ca->price_total }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-item invoice-table-wrap">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="invoice-table table table-center mb-0">
                                                    <thead>
                                                        <tr>
                                                           <th>Product Name</th>
                                                            <th>roduct Image</th>

                                                            <th>Price</th>
                                                            <th>Quantity</th>
                                                            <th>Sub_total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                  @foreach ($carts as $cart )
                                                         <tr>

                                                            <td>{{$cart->product_name}}</td>
                                                            <td>{{$cart->product_name}}</td>

                                                            <td>{{$cart->complete_price }}</td>
                                                            <td>{{$cart->quantity}}</td>
                                                            <th>{{$cart->quantity*$cart->complete_price}}</th>
                                                        </tr>
                                                             @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-auto">
                            <div class="invoices-create-btn">
                                <a href="{{route('confirm_order',$ca->id) }}"
                                    class="btn save-invoice-btn">
                                    Confirm Order
                                </a>
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
