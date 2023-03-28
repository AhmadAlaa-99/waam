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
                        <h3 class="page-title">Categories</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Site Data</a></li>
                            <li class="breadcrumb-item active">Categories</li>
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
                                        <h3 class="page-title">Categories</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="{{ route('categories.create') }}" class="btn btn-primary"><i
                                                class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>
                                            <th>title</th>
                                            <th>icon</th>
                                            <th>img</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($categories as $category)
                                            <tr>
                                                <td>
                                                    <h2>
                                                        <a>{{ $category->name }}</a>
                                                    </h2>
                                                </td>
                                                <td>
                                                    <h2>
                                                        <a href="shop.html">
                                                            <i class="{{ $category->logo }}"></i>
                                                        </a>
                                                    </h2>
                                                </td>
                                                <td>
                                                    <h2>
                                                        <a><img
                                                                width="150px"height="150px"src="{{ asset('covers_categories/' . $category->image) }}" /></a>
                                                    </h2>
                                                </td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="{{ route('categories.edit', $category->id) }}"
                                                            class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                        <a href="{{ url('delete_category/' . $category->id) }}"
                                                            class="btn btn-sm bg-danger-light">
                                                            <i class="feather-delete"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>
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
                                        <h3 class="page-title">Types</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">

                                        <a href="{{ route('types.create') }}" class="btn btn-primary"><i
                                                class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table
                                    class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                        <tr>





                                            <th>name</th>
                                            <th>category</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($types as $type)
                                            <tr>


                                                <td>
                                                    <h2>
                                                        <a>{{ $type->name }}</a>
                                                    </h2>
                                                </td>
                                                <td>
                                                    <h2>
                                                        <a>{{ $type->category->name }}</a>
                                                    </h2>
                                                </td>


                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="{{ url('delete_type/' . $type->id) }}"
                                                            class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-delete"></i>
                                                        </a>
                                                        <a href="{{ route('types.edit', $type->id) }}"
                                                            class="btn btn-sm bg-danger-light">
                                                            <i class="feather-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse


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
