@extends('layouts.main')

@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Student</b> Information</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static">{{$student->name}}</p>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <p class="form-control-static">{{$student->phone}}</p>
                    </div>
                    <div class="form-group">
                        <label>College</label>
                        <p class="form-control-static">{{$student->college->name}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <p class="form-control-static">{{$student->email}}</p>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <p class="form-control-static">{{$student->dob}}</p>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-9 offset-md-3">
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ route('students.index')}}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection