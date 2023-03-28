@extends('layouts.admin')
@section('css')
@endsection
@section('title')
Customers List
@stop
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Customers List</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Customer Data</a></li>
                            <li class="breadcrumb-item active">Customers List</li>
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
                                        <h3 class="page-title">Customers List</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="{{ route('orders.index') }}" class="btn btn-primary">Browse Orders</a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>lastname</th>
                                            <th>Phone</th>
                                            <th>Register Date</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($customers as $customer)
                                            <tr>
                                                <td>{{ $customer->id }}</td>
                                                <td>{{ $customer->name }}</td>
                                                <td>{{ $customer->last_name }}</td>
                                                <td>{{ $customer->phone }}</td>
                                                <td>{{ $customer->created_at }}</td>


                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="{{ route('customer_details', $customer->id) }}"
                                                            class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            NO DATA
                                        @endforelse
                                        {{ $customers->links() }}
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
