@extends('layouts.master')
@section('contentStyle')
    <style>
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 12px;
        }

    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-custom float-end">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><span>Enquiry List</span></li>
                </ol>
            </nav>
        </div>
        {{-- <div class="card">
            <div class="card-body">
                <h4 class="card-title">Filter</h4>
                {{ Form::open(['method' => 'GET', 'class' => 'forms-sample']) }}
                <div class="form-group row">
                    {{ Form::label('course', 'Course', ['class' => 'col-sm-3 col-form-label']) }}
                    <div class="col-sm-4">
                        {{ Form::select('course', $enquiry, request()->course, ['class' => 'selectJS form-control','placeholder' => 'Select Course','data-placeholder' => 'Select Course']) }}
                    </div>
                </div>
                <div class="float-end">
                    <button type="submit" class="btn btn-primary me-2">Filter</button>
                    <a href="{{ Request()->url() }}" class="btn btn-warning">Reset Filter</a>
                </div>
                {{ Form::close() }}
            </div>
        </div> --}}
        <div class="card mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Enquiry List</h4>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr role="row">

                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>URL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enquiries as $enquiry)
                                <tr>
                                    <td>{{ $enquiry->name }}</td>
                                    <td>{{ $enquiry->email }}</td>
                                    <td>{{ $enquiry->course }}</td>
                                    <td>{{ $enquiry->url }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row mt-4 pull-right">
                    <div class="col-md-12">
                        {{ $enquiries->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footerScript')
    <script>

    </script>
@endsection
