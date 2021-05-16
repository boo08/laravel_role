
@extends('layouts.master')

@section('content')    
 <div class="card">
    <div class="card-header">
        Roles <span class="pull-right">Add</span>
    </div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form class="form-horizontal" role="form" method="POST" action="{{url('roles/update/'.$role->id)}}">
            {{ csrf_field() }}
              
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1"  placeholder="Name" value="{{$role->name}}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug"  id="exampleFormControlInput1"  placeholder="Slug" value="{{$role->slug}}">
                    @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Menus</label>
                    <input type="text" class="form-control" name="menus"  id="exampleFormControlInput1"  placeholder="Menus" value="{{$role->menus}}">
                    @error('menus')
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
