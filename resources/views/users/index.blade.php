
@extends('layouts.master')

@section('content')    
 <div class="card">
    <div class="card-header">
        Users  <span class=" btn btn-outline-primary btn-sm float-right"> <a href="{{url('users/create')}}">Add</a> </span> 
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
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    <td>{{ $user->updated_at->diffForHumans() }}</td>
                    <td>
                        <a href="{{ url('users/edit/'. $user->id) }}"  class="btn btn-outline-primary btn-sm">
                            Edit<i class="fa fa-edit"></i> 
                        </a>
                        <a href="{{ url('users/destroy/'. $user->id) }}"  class="btn btn-outline-primary btn-sm">
                            Delete<i class="fa fa-edit"></i> 
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
