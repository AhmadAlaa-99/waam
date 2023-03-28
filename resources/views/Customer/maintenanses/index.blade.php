@extends('layouts.customer')
@section('css')
@endsection
@section('title')
Maintenanse List
@stop
@section('content')
    <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Maintenanse List</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Maintenanse Data</a></li>
                                <li class="breadcrumb-item active">Maintenanse List</li>
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
                                            <h3 class="page-title">Maintenanse List</h3>
                                        </div>

                                    </div>
                                </div>

                            <div class="table-responsive">
                                    <table
                                        class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                        <thead class="student-thread">
                                            <tr>
                                                <th>Product Name</th>
                                                <th>date_purchase</th>
                                                <th>message</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>

                                          @forelse ($maintenanses as $maintenanse )
                                            <tr>
                                                <td>{{ $maintenanse->product_name }}</td>
                                                <td>{{ $maintenanse->date_purchase }}</td>
                                                <td>{{ $maintenanse->message }}</td>
                                         
                                            </tr>
                                           @empty
                                         NO DATA
                                        @endforelse
                                          {{ $maintenanses->links() }}
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
