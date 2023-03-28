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
                        <h3 class="page-title">Sliders</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Sliders All</a></li>
                            <li class="breadcrumb-item active">Sliders</li>
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
                                        <h3 class="page-title">Sliders</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">

                                        <a href="{{ route('sliders.create') }}" class="btn btn-primary"><i
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
                                            <th>description</th>
                                            <th>button_title</th>
                                            <th>button_url</th>
                                            <th>img</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($sliders as $slider)
                                            <tr>


                                                <td>
                                                    <h2>
                                                        <a>{{ $slider->title }}</a>
                                                    </h2>
                                                </td>
                                                <td>
                                                    <h2>
                                                        <a>{{ $slider->description }}</a>
                                                    </h2>
                                                </td>
                                                <td>
                                                    <h2>
                                                        <a>{{ $slider->button_title }}</a>
                                                    </h2>
                                                </td>
                                                <td>
                                                    <h2>
                                                        <a>{{ $slider->button_url }}</a>
                                                    </h2>
                                                </td>
                                                <td>
                                                    <h2>
                                                        <a><img
                                                                width="300px"height="150px"src="{{ asset('imgs_sliders/' . $slider->img) }}" /></a>
                                                    </h2>
                                                </td>
                                                <td class="text-end">
                                                    <div class="actions">
                                                        <a href="{{ url('delete_slider/' . $slider->id) }}"
                                                            class="btn btn-sm bg-success-light me-2">
                                                            <i class="feather-delete"></i>
                                                        </a>


                                                        <a href="{{ route('sliders.edit', $slider->id) }}"
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
