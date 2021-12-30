@extends('admin.layouts.master')

@section('content')

<div class="container mt-5">
    <div class="row">
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Edit Registered employee
                        
                    </li>
                </ol>
                </nav>
            <form action="{{ route('users.update', [$user->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Edit employee Information</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Full name</label>
                                        <input type="text" name="name" class="form-control" required="" value="{{ $user->name }}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" value="{{ $user->address }}">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Mobile number </label>
                                        <input type="number" name="mobile_number" class="form-control" value="{{ $user->mobile_number }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select class="form-control" name="department_id" required="">
                                            @foreach(App\Models\Department::all() as $department)
                                                <option value="{{$department->id}}" @if($user->department_id == $department->id) selected @endif>{{$department->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" name="designation" class="form-control" required="" value="{{ $user->designation }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Start date</label>
                                        <input type="" name="start_from" class="form-control" placeholder="" required="" value="{{ $user->start_from }}" id="datepicker1">
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" accept="image/*" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">Login Information</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Email </label>
                                        <input type="email" name="email" class="form-control" required="" value="{{ $user->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" name="role_id" required="">
                                            @foreach(App\Models\Role::all() as $role)
                                                <option value="{{$role->id}}" @if($user->role_id == $role->id) selected @endif>{{$role->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    
                                </div>

                            </div>
                            <br>
                            <div class="form-group">
                                @if(isset(auth()->user->role->permission['name']['user']['can-edit']))
                                    <button class="btn btn-primary " type="submit">Update</button>
                                @endif
                            </div>
                        </div>
                    
                    </div>
            </form>
    </div>
</div>
@endsection