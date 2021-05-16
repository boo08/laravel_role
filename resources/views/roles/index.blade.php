
@extends('layouts.master')

@section('content')    
 <div class="card">
    <div class="card-header">
        Roles <span class=" btn btn-outline-primary btn-sm float-right"> <a href="{{url('roles/create')}}">Add</a> </span> 
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead class="text-primary">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->slug }}</td>
                    <td>{{ $role->created_at->diffForHumans() }}</td>
                    <td>{{ $role->updated_at->diffForHumans() }}</td>
                    <td>
                        <a href="{{ url('roles/edit/'. $role->id) }}"  class="btn btn-outline-primary btn-sm">
                            Edit<i class="fa fa-edit"></i> 
                        </a>
                        <a href="{{ url('roles/destroy/'. $role->id) }}"  class="btn btn-outline-primary btn-sm">
                            Delete<i class="fa fa-delete"></i> 
                        </a>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>    
            </table>
        
        </div>
    </div>
</div>
@endsection
