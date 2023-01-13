@extends('layouts.master')
@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Email Template</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Email</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Email Template List</div>
                    <div class="card-tools">
                        <a href="{{route('email.create')}}" class="float-end btn btn-success btn-sm rounded-pill">Add Email</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($emailTemplates as $emailTemplate)
                                <tr>
                                    <td>{{$emailTemplate->name}}</td>
                                    <td>{{$emailTemplate->email}}</td>
                                    <td><a href="{{route('email.edit',['email'=>$emailTemplate->id])}}" target="_index"><i class="fa fa-edit"></i></a>
                                        <form method="POST" action="{{ route('email.destroy',$emailTemplate->id) }}"
                                            style="display:inline">
                                             @csrf
                                             @method('DELETE')
                                             <button type="submit" class="fa fa-trash text-red" style="border: 0px;background:transparent;"></button>
                                          </form>
                                          <form method="POST" action="{{ route('send.email',$emailTemplate->id) }}"
                                            style="display:inline">
                                            <input type="hidden" name="name" value="{{$emailTemplate->name}}">
                                            <input type="hidden" name="email" value="{{$emailTemplate->email}}">
                                            <input type="hidden" name="description" value="{{$emailTemplate->description}}">
                                             @csrf
                                             <button type="submit" class="fa fa-envelope text-yellow" style="border: 0px;background:transparent;"></button>
                                          </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
    </div>
@endsection

@section('footerScripts')
    <script>
        $(function() {
            $("#table1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "columnDefs": [ { orderable: false,sorting:false, targets: [2] }]
            });
        });
    </script>
@endsection
