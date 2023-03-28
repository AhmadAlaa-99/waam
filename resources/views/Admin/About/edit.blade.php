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
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Edit Company Information</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href=""> Company Information</a></li>
                                <li class="breadcrumb-item active">Edit Company Information</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card comman-shadow">
                        <div class="card-body">
                             <form action="{{ route('company_update') }}" method="post"
                        enctype="multipart/form-data"autocomplete="off">
                         @csrf

                                {{ method_field('PUT') }}
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title student-info">Company Information <span><a href=""></a></span></h5>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Name <span class="login-danger">*</span></label>
                                            <input class="form-control" name="name" value="{{ $company->name }}"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-8">
                                        <div class="form-group local-forms">
                                            <label>summary <span class="login-danger">*</span></label>
                                            <textarea class="form-control"
                                                type="text"name="summary"value="{{ $company->summary }}">
                                                {{ $company->summary }}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>goals </label>
                                            <textarea class="form-control" type="text" name="goals"
                                                value="{{ $company->goals }}">
                                                {{ $company->goals }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>vision <span class="login-danger">*</span></label>
                                            <textarea class="form-control" type="text" name="vision"
                                                value="{{ $company->vision }}">
                                                {{ $company->vision }}
                                            </textarea>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-8">
                                        <div class="form-group local-forms">
                                            <label>mission </label>
                                            <textarea class="form-control" type="text" name="mission"
                                                value="{{ $company->mission }}">
                                                {{ $company->mission }}
                                            </textarea>
                                        </div>
                                    </div>
                                      <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>address <span class="login-danger">*</span></label>
                                            <input class="form-control" type="text"name="address"
                                                value="{{ $company->address }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>email </label>
                                            <input class="form-control" type="email" name="email"
                                                value="{{ $company->email }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>mobile </label>
                                            <input class="form-control" type="number" name="moobile"
                                                value="{{ $company->moobile }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>fax </label>
                                            <input class="form-control" type="text" name="fax"
                                                value="{{ $company->fax }}">
                                        </div>
                                    </div>
                                </div>

                                  <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>logo </label>
                                            <input class="form-control" type="file" name="logo"
                                                value="{{ $company->logo }}">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>image </label>
                                            <input class="form-control" type="file" name="image"
                                                value="{{ $company->image }}">
                                        </div>
                                    </div>
                                </div>



                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
