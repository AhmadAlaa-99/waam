@extends('layouts.customer')
@section('css')
@endsection
@section('title')
Sales List
@stop
@section('content')
    <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Sales List</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Sales Data</a></li>
                                <li class="breadcrumb-item active">Sales List</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">

                                <div class="page-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="page-title">Sales List</h3>
                                        </div>


                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table
                                        class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                        <thead class="student-thread">
                                            <tr>
                                                <th>Cart ID</th>
                                                <th>Cart Date</th>
                                                <th>Product Name</th>
                                                <th>Image</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>sub_Price</th>
                                                <th>status</th>
                                                <th>Maintenance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @forelse ($carts as $cart )
                                            <tr>
                                                <td>{{ $cart->id }}</td>
                                                <td>{{ $cart->date }}</td>

                                                <td>{{ $cart->product_name }}</td>
                                                   <td>  <h2>
                                                        <a><img width="150px"height="150px"src="{{asset('products_imgs/'.$cart->img)}}"/></a>
                                                    </h2></td>
                                                <td>{{ $cart->complete_price }}</td>
                                                <td>{{ $cart->quantity }}</td>
                                                <td>{{ $cart->complete_price*$cart->quantity }}</td>
                                                <td>@if($cart->status=="1") Processing Done @else Under treatment  @endif</td>
                                                  <td class="text-end">
                                                    <div class="actions">
                                                        @if($cart->status=="1")
                                                        <a href="{{ route('maintenance.request',[$cart->id,$cart->product_id])}}" class="btn btn-sm bg-success-light me-2">
                                                            Apply
                                                        </a>
                                                        @endif

                                                    </div>
                                                </td>


                                            </tr>
                                           @empty
                                         NO DATA
                                        @endforelse
                                          {{ $carts->links() }}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p>Copyright © 2022 Dreamguys.</p>
            </footer>
        </div>
@endsection
@section('js')
@endsection
