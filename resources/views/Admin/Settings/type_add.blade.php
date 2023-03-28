@extends('layouts.admin')
@section('css')
@endsection
@section('title')
Add Type
@stop
@section('content')
  <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Add Type</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="subjects.html">Types</a></li>
                                <li class="breadcrumb-item active">Add Type</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                               <form action="{{ route('types.store') }}"method = "POST"
                        enctype="multipart/form-data"autocomplete="off">
                              {{ csrf_field() }}
                              {{ method_field('POST') }}
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Add Type</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group local-forms">
                                                <label>Name <span class="login-danger">*</span></label>
                                                <input type="text" name="name" class="form-control"required>
                                            </div>
                                        </div>
                                           <div class="col-12 col-sm-6">
                                            <div class="form-group local-forms">
                                                <label>Category Name <span class="login-danger">*</span></label>
                                                <select class="form-control select"name="category_id" id="exampleFormControlSelect1"required>
                                                    <option selected>Select Category</option>
                                                  @foreach ($categories as $category )
                                                   <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                  @endforeach
                                                </select>
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
