@extends('layouts.main')

@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Students</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('students.create')}}" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Add New Student</span></a>					
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th onclick="sortTable()" id="nameHeader" style="width: 12%;">Name <span id="arrow">{{"asc" == request('order') ? '↑' : ("desc" == request('order') ? '↓' : '↑↓')}}</span></th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date of Birth</th>
                    <th>College</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($message = session('message'))
                    <div class="alert alert-success">{{ $message }}</div>
                @endif
                @if ($students->count())
                    @foreach ($students as $index => $student)
                        <tr>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->phone}}</td>
                            <td>{{$student->dob}}</td>
                            <td>{{$student->college->name}}</td>
                            <td>
                                <a href="{{ route('students.edit', $student->id) }}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="{{ route( 'students.destroy', $student->id) }}" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="form-delete" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="modal-header">						
                        <h4 class="modal-title">Delete Student</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <p>Are you sure you want to delete this Record?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection