@extends('layouts.mainlayout')
   
@section('content')

@if ($errors->any())
        <div class="alert alert-danger">
        There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


<div class="row">

<!-- Content Column -->
<div class="col-md-12 mb-4">

    <!-- Project Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h3 class="m-0 font-weight-bold text-primary">
            Edit User
            </h3>
            
            <div class="text-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>First Name:</strong>
                        <input value="{{ $user->first_name }}" type="text" name="first_name" class="form-control" placeholder="First Name" >
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Last Name:</strong>
                        <input value="{{ $user->last_name }}" type="text" name="last_name" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Contact No:</strong>
                        <input value="{{ $user->contact_no }}" type="text"  class="form-control" name="contact_no" placeholder="Contact No"></textarea>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input value="{{ $user->email }}" type="text" class="form-control" name="email" placeholder="Email"></textarea>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label for="role_id">Role:</label>
                        <select class="form-control" id="role_id" name="role_id">
                            <option value="1" value="{{ $user->name }}">Admin</option>
                            <option value="2">User</option>                            
                        </select>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password"  class="form-control" name="password" placeholder="Password"></textarea>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        
            </form>
        </div>
</div>
</div>
@endsection