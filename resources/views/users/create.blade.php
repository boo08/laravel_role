
@extends('layouts.master')

@section('content')    
 <div class="card">
    <div class="card-header">
        Users
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form class="form-horizontal" role="form" method="POST" action="{{url('users/store/')}}">
            {{ csrf_field() }}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email"  placeholder="name@example.com" value="">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1"  placeholder="Name" value="">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleFormControlInput1"  placeholder="Password" >
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password Confirm</label>
                    <input type="password" class="form-control" name="password_confirmation" id="exampleFormControlInput1"  placeholder="Confirm Password" >
                    @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Role</label>
                   <select name="role" id="role"  class="form-control">
                       <option value="">select</option>
                       @foreach ($role as $roleitem)
                           <option value="{{$roleitem->id}}"  >{{$roleitem->name}}</option>
                       @endforeach
                   </select>
                    @error('role')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              <hr>
              <div class="form-group text-center">
                <button type="submit" class="btn btn-primary btn-sm mx-1" role="button">
                    Submit <i class="fa fa-check fa-fw"></i>
                  </button>
          </form>
    </div>
</div>
@endsection
