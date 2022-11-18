@extends('employees.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Employee Details</h2>
            </div>
            <div class="pull-right" style="float:right">
                <a class="btn btn-primary" href="{{ route('employees.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group mb-3">
                <strong>Name:</strong>
                {{ $employee->name }}
            </div>
            <div class="form-group mb-3">
                <strong>Email:</strong>
                {{ $employee->email }}
            </div>
            <div class="form-group mb-3">
                <strong>Role:</strong>
                {{ $employee->role }}
            </div>
            <div class="form-group mb-3">
                <strong>Salary:</strong>
                {{ $employee->salary }}
            </div>
        </div>
    </div>
@endsection