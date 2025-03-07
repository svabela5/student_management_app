@extends('layouts.main')

@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>College</b> Information</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static">{{$college->name}}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address</label>
                        <p class="form-control-static">{{$college->address}}</p>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-9 offset-md-3">
                    <a href="{{ route('colleges.edit', $college->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ route('colleges.index')}}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection