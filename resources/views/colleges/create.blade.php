@extends('layouts.main')

@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Add <b>College</b></h2>
                </div>
            </div>
        </div>
        <!-- form section goes here -->
        <form action="{{ route('colleges.store')}}" method="post">
            @csrf
            @include('colleges._form')
            
            <div class="modal-footer">
                <a href="{{ route('colleges.index')}}" class="btn btn-default">Cancel</a>
                <input type="submit" class="btn btn-success" value="Add">
            </div>
        </form>
    </div>
</div>
@endsection