@extends('layouts.admin')
@section('css')
@endsection

@section('title')
Add Slider
@stop
@section('content')
  <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Add Slider</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="subjects.html">Sliders</a></li>
                                <li class="breadcrumb-item active">Add Slider</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                  <form action="{{ route('sliders.store') }}" method="post"
                        enctype="multipart/form-data"autocomplete="off">
                                              {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Slider Information</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>title <span class="login-danger">*</span></label>
                                                <input type="text"name="title" class="form-control"required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-8">
                                            <div class="form-group local-forms">
                                                <label>description <span class="login-danger">*</span></label>
                                                <input type="text" name="description"class="form-control"required>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                         <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>img<span class="login-danger">*</span></label>
                                                <input type="file"name="img" class="form-control"required>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>btn_title <span class="login-danger"></span></label>
                                                <input type="text"name="button_title" class="form-control">
                                            </div>
                                        </div>
                                         <div class="col-12 col-sm-4">
                                            <div class="form-group local-forms">
                                                <label>btn_url <span class="login-danger"></span></label>
                                                <input type="text" name="button_url"class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="student-submit">
                                                <button type="submit" class="btn btn-primary"name="action"value="save">Submit</button>
                                                 <button type="submit" class="btn btn-primary"name="action"value="save_and_add_com">Submit And add more</button>
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
