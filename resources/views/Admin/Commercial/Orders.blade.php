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
                            <h3 class="page-title">Orders List</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Orders Data</a></li>
                                <li class="breadcrumb-item active">Orders List</li>
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
                                            <h3 class="page-title">Orders List</h3>
                                        </div>
                                        <div class="col-auto text-end float-end ms-auto download-grp">

                                            <a href="{{ route('customer_details.index') }}" class="btn btn-primary">Browse Customers</a>
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
                                                <th>price_total</th>
                                                <th>Customer Name</th>
                                                <th>Email</th>
                                                <th>phone</th>
                                                 <th>status_user</th>


                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @forelse ($carts as $cart )
                                            <tr>
                                                <td>{{ $cart->id }}</td>
                                                <td>{{ $cart->date }}</td>
                                                <td>{{ $cart->price_total }}</td>
                                                <td>{{ $cart->name }}</td>
                                                <td>{{ $cart->email }}</td>
                                                <td>{{ $cart->phone }}</td>
                                                 <td>@if ($cart->status_user == '0') new_customer @else old_customer @endif</td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="{{ route('orders.show',$cart->id) }}" class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>

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
