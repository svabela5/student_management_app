@extends('layouts.main')

@section('content')
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Colleges</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('colleges.create')}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New College</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th style="width: 20%;">Name</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if ($message = session('message'))
                    <div class="alert alert-success">{{ $message }}</div>
                @endif
                @if ($colleges->count())
                    @foreach ($colleges as $index => $college)
                    <tr>
                        <td>{{$college->name}}</td>
                        <td>{{$college->address}}</td>
                        <td>
                            <a href="{{ route('colleges.show', $college->id)}}" class="view"><i class="material-icons" title="View">&#xE417;</i></a> 
                            <a href="{{ route('colleges.edit', $college->id) }}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <!-- Delete Modal HTML -->
    <div id="deleteCollegeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">						
                        <h4 class="modal-title">Delete College</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <p>Are you sure you want to delete these Records?</p>
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