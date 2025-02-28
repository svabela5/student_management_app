@extends('layouts.main')

@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Edit <b>Student</b></h2>
                </div>
            </div>
        </div>
        <!-- form section goes here -->
        <form action="{{ route('colleges.update', $college->id)}}" method="post">
            @method('PUT')
            @csrf
            @include('colleges._form')
            
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success" value="Update">
            </div>
        </form>
    </div>
</div>
@endsection