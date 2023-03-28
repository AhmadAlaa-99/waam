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
                        <h3 class="page-title">Products List</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Site Data</a></li>
                            <li class="breadcrumb-item active">Products List</li>
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
                                        <h3 class="page-title">Products List</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">

                                        <a href="{{ route('products.create') }}" class="btn btn-primary"><i
                                                class="fas fa-plus"></i></a>
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
                                            <th>org_price</th>
                                            <th>sell_price</th>
                                            <th>type</th>
                                            <th>quantity</th>
                                            <th>image</th>

                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>

                                                <td>{{ $product->org_price }}</td>
                                                <td>{{ $product->sell_price }}</td>
                                                <td>{{ $product->types->name }}</td>
                                                <td>{{ $product->quantity }}</td>
                                                <td>
                                                    <h2>
                                                        <a><img
                                                                width="150px"height="150px"src="{{ asset('products_imgs/' . $product->image) }}" /></a>
                                                    </h2>
                                                </td>

                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="{{ route('products.show', $product->id) }}"
                                                            class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-eye"></i>
                                                        </a>
                                                        <a href="{{ route('products.edit', $product->id) }}"
                                                            class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                        <a href="{{ url('delete_product/' . $product->id) }}"
                                                            class="btn btn-sm bg-danger-light">
                                                            <i class="feather-delete"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            NO DATA
                                        @endforelse
                                        {{ $products->links() }}
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
