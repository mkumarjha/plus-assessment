@extends('layouts.mainlayout')
 
@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="row">

<!-- Content Column -->
<div class="col-md-12 mb-4">

    <!-- Project Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h3 class="m-0 font-weight-bold text-primary">
             Users 
            </h3>
            
            <div class="text-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New user</a>
            </div>
        </div>
        <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <th>Contact No</th>
                <th>Email</th>
                <th>Role</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->first_name }} {{ $user->last_name }} </td>
                <td>{{ $user->contact_no }}</td>
                <td>{{ $user->email }} </td>
                <td>{{ $user->role->name }} </td>
                <td>
                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
    
                        <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
        
                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
    
                        @csrf
                        @method('DELETE')
        
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $users->links() !!}
        </div>
    </div>
</div>
</div>
    
@endsection