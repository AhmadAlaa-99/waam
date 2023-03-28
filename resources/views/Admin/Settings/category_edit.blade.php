@extends('layouts.admin')
@section('css')
@endsection
@section('title')
    Edit Categorie
@stop
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Categorie</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="subjects.html">Categories</a></li>
                            <li class="breadcrumb-item active">Edit Categorie</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('categories.update', $category->id) }}"method="post"
                                enctype="multipart/form-data"autocomplete="off">
                                     @csrf
                                      {{ method_field('PUT') }}
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Edit Categories</span></h5>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>title<span class="login-danger">*</span></label>
                                            <input type="text" name="name"
                                                value="{{ $category->name }}"class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>icon <span class="login-danger">*</span></label>
                                            <input type="text" name="icon"
                                                value="{{ $category->logo }}"class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>image <span class="login-danger">*</span></label>
                                            <input type="file" name="image"
                                                value="{{ $category->image }}"class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary"name="action"value="save">Save
                                                Changes</button>

                                        </div>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                <div class="col-12 col-sm-2">
                    <div class="col-12 slick-slide slick-cloned" data-slick-index="-7" id="" aria-hidden="true"
                        style="width: 172px;" tabindex="-1">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a href="" tabindex="-1">
                                    <i class="fas fa-bong"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a tabindex="-1">fas fa-bong</a></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-2">
                    <div class="col-12 slick-slide slick-cloned" data-slick-index="-6" id="" aria-hidden="true"
                        style="width: 172px;" tabindex="-1">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a tabindex="-1">
                                    <i class="fas fa-tooth"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a tabindex="-1">fas fa-tooth</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="col-12 slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true"
                        style="width: 172px;" tabindex="-1">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a tabindex="-1">
                                    <i class="fas fa-microscope"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a tabindex="-1">fas fa-microscope</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="col-12 slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true"
                        style="width: 172px;" tabindex="-1">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a tabindex="-1">
                                    <i class="fas fa-syringe"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a tabindex="-1">fas fa-syringe</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2">

                    <div class="col-12 slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                        style="width: 172px;" tabindex="-1" role="option" aria-describedby="slick-slide23">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a tabindex="0">
                                    <i class="fas fa-bong"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a tabindex="0">fas fa-bong</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="col-12 slick-slide slick-active" data-slick-index="4" aria-hidden="false"
                        style="width: 172px;" tabindex="-1" role="option" aria-describedby="slick-slide24">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a tabindex="0">
                                    <i class="fas fa-tooth"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a tabindex="0">fas fa-tooth"</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-2">
                    <div class="col-12 slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true"
                        style="width: 172px;" tabindex="-1">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a tabindex="-1">
                                    <i class="fas fa-stethoscope"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a tabindex="-1">fas fa-stethoscope</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="col-12 slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true"
                        style="width: 172px;" tabindex="-1">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a tabindex="-1">
                                    <i class="fas fa-hand-holding-medical"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a tabindex="-1">fas fa-hand-holding-medical</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="col-12 slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true"
                        style="width: 172px;" tabindex="-1">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a tabindex="-1">
                                    <i class="fas fa-procedures"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a tabindex="-1">fas fa-procedures</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="col-12 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false"
                        style="width: 172px;" tabindex="-1" role="option" aria-describedby="slick-slide20">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a tabindex="0">
                                    <i class="fas fa-notes-medical"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a tabindex="0">fas fa-notes-medical</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="col-12 slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                        style="width: 172px;" tabindex="-1" role="option" aria-describedby="slick-slide21">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a tabindex="0">
                                    <i class="fas fa-box-tissue"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a tabindex="0">fas fa-box-tissue</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="col-12 slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                        style="width: 172px;" tabindex="-1" role="option" aria-describedby="slick-slide22">
                        <div class="ltn__category-item ltn__category-item-6 text-center">
                            <div class="ltn__category-item-img">
                                <a tabindex="0">
                                    <i class="fas fa-pump-medical"></i>
                                </a>
                            </div>
                            <div class="ltn__category-item-name">
                                <h6><a tabindex="0">fas fa-pump-medical</a></h6>
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
