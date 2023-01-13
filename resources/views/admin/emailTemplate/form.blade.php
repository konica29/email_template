@extends('layouts.master')

@section('headerLinks')
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.css') }}">
@endsection

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Email Form</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('email.index') }}">Email List</a></li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection

@section('content')
    <div class="card card-primary card-outline  col-md-6">
        <div class="card-header">
            <h3 class="card-title">Form</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            {{ Form::model($emailTemplate, ['url' => $url, 'method' => $method]) }}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::label('name', 'Name', ['class' => 'form-label']) }}
                        {{ Form::text('name', null, ['id' => 'title', 'class' => 'form-control','required']) }}
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::label('email', 'Email', ['class' => 'form-label']) }}
                        {{ Form::email('email', null, ['class' => 'form-control','required']) }}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        {{ Form::label('Additional info', 'Additional info', ['class' => 'form-label']) }}
                        {{ Form::textarea('additional_info', null, ['id' => 'additional_info', 'class' => 'form-control','required']) }}
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-success">Submit</button>
        </div>
        {{ Form::close() }}
    </div>
@endsection

