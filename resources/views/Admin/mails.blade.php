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
                            <h3 class="page-title">Mails List</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Mails Data</a></li>
                                <li class="breadcrumb-item active">Mails List</li>
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
                                            <h3 class="page-title">Mails List</h3>
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
                                                <th>email</th>
                                                <th>phone</th>
                                                <th>subject</th>
                                                <th>message</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          @forelse ($mails as $mail )
                                            <tr>
                                                <td>{{ $mail->id }}</td>
                                                <td>{{ $mail->name }}</td>

                                                <td>{{ $mail->email }}</td>
                                                <td>{{ $mail->phone }}</td>
                                                <td>{{ $mail->subject }}</td>
                                                <td>{{ $mail->message }}</td>



                                            </tr>
                                           @empty
                                         NO DATA
                                        @endforelse
                                          {{ $mails->links() }}
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
