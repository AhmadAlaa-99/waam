@extends('layouts.admin')
@section('css')
@endsection
@section('title')
@stop
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Company Information</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="students.html">Company Information</a></li>
                                <li class="breadcrumb-item active">Information</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-info">
                                <h4>Company <span><a href="javascript:;"><i class="feather-more-vertical"></i></a></span>
                                </h4>
                            </div>
                            <div class="student-profile-head">
                                <div class="profile-bg-img">
                                    <img src="assets/img/profile-bg.jpg" alt="Profile">
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="profile-user-box">
                                            <div class="profile-user-img">
                                                <img src="assets/img/profile-user.jpg" alt="Profile">

                                            </div>
                                            <div class="names-profiles">
                                                <h4>{{ $company->name }}</h4>
                                                <h5>{{ $company->email }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 d-flex align-items-center">
                                        <div class="follow-group">
                                            <div class="students-follows">
                                                <h5>Products</h5>
                                                <h4>{{ \App\Models\Product::count() }}</h4>
                                            </div>
                                            <div class="students-follows">
                                                <h5>Types</h5>
                                                <h4>{{ \App\Models\Type::count() }}</h4>
                                            </div>
                                            <div class="students-follows">
                                                <h5>Categories</h5>
                                                <h4>{{ \App\Models\Category::count() }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 d-flex align-items-center">
                                        <div class="follow-btn-group">
                                            <a type="submit" class="btn btn-info follow-btns"
                                                href="{{ route('company_edit') }}">Edit Details</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="student-personals-grp">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="heading-detail">
                                            <h4>Social Details :</h4>
                                        </div>
                                        <div class="personal-activity">
                                            <div class="personal-icons">
                                                <i class="feather-user"></i>
                                            </div>
                                            <div class="views-personal">
                                                <h4>Name</h4>
                                                <h5>{{ $company->name }}</h5>
                                            </div>
                                        </div>

                                        <div class="personal-activity">
                                            <div class="personal-icons">
                                                <i class="feather-phone-call"></i>
                                            </div>
                                            <div class="views-personal">
                                                <h4>Mobile</h4>
                                                <h5>{{ $company->moobile }}</h5>
                                            </div>
                                        </div>
                                        <div class="personal-activity">
                                            <div class="personal-icons">
                                                <i class="feather-phone-call"></i>
                                            </div>
                                            <div class="views-personal">
                                                <h4>Fax</h4>
                                                <h5>{{ $company->fax }}</h5>
                                            </div>
                                        </div>
                                        <div class="personal-activity">
                                            <div class="personal-icons">
                                                <i class="feather-mail"></i>
                                            </div>
                                            <div class="views-personal">
                                                <h4>Email</h4>
                                                <h5><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                        data-cfemail="81e5e0e8f2f8c1e6ece0e8edafe2eeec">{{ $company->email }}</a>
                                                </h5>
                                            </div>
                                        </div>


                                        <div class="personal-activity mb-0">
                                            <div class="personal-icons">
                                                <i class="feather-map-pin"></i>
                                            </div>
                                            <div class="views-personal">
                                                <h4>Address</h4>
                                                <h5>{{ $company->address }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-8">
                            <div class="student-personals-grp">
                                <div class="card mb-0">
                                    <div class="card-body">
                                        <div class="heading-detail">




                                            <h4>About Company</h4>
                                        </div>
                                        <div class="hello-park">
                                            <h5>summary</h5>
                                            <p>{{ $company->summary }}</p>
                                        </div>
                                        <div class="hello-park">
                                            <div class="educate-year">
                                                <h5>goals</h5>
                                                <p>{{ $company->goals }}
                                                </p>
                                            </div>
                                            <div class="educate-year">
                                                <h5>vision</h5>
                                                <p>{{ $company->vision }}</p>
                                            </div>
                                            <div class="educate-year">
                                                <h5>mission</h5>
                                                <p>{{ $company->mission }}
                                                </p>
                                            </div>
                                            <div class="educate-year">
                                                <h5>Logo</h5>
                                                <p> <img src="{{ asset('about_imgs/' . $company->logo) }}" alt="image"
                                                        class="img-fluid rounded" width="200" />
                                                </p>
                                            </div>
                                            <div class="educate-year">
                                                <h5>Image</h5>
                                                <p> <img src="{{ asset('about_img/' . $company->image) }}" alt="image"
                                                        class="img-fluid rounded" width="200" />
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer>
            <p>Copyright © 2023 WAAM</p>
        </footer>

    </div>
@endsection
@section('js')
@endsection
