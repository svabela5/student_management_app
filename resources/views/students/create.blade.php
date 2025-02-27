@extends('layouts.main')

@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Add <b>Student</b></h2>
                </div>
            </div>
        </div>

        <form action="{{ route('students.store')}}" method="post">
            @csrf
            @include('students._form')

            <div class="modal-footer">
                <a href="{{ route('students.index')}}" class="btn btn-default">Cancel</a>
                <input type="submit" class="btn btn-success" value="Add">
            </div>
        </form>
    </div>
</div>
@endsection