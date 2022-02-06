@extends('admin.layouts.master')

@section('content')

<div class="container mt-5">
    <div class="row">
        <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Register employee
                        
                    </li>
                </ol>
                </nav>
            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">General Information of employee</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" name="firstname" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" name="lastname" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Mobile number </label>
                                        <input type="number" name="mobile_number" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Department</label>
                                        <select class="form-control" name="department_id" >
                                            @foreach(App\Models\Department::all() as $department)
                                                <option value="{{$department->id}}">{{$department->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" name="designation" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Start date</label>
                                        <input name="start_from" class="form-control" placeholder="" required="" id="datepicker">
                                    </div>
                                    <div class="form-group">
                                        <label>DBS</label>
                                        <input type="text" name="dbs" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>DBS Expiry Date</label>
                                        <input type="date" name="dbs_expiry_date" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Experence On</label>
                                        <input type="text" name="experence_on" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Work Experience</label>
                                        <input type="text" name="work_experience" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Time Preference</label>
                                        <input type="text" name="time_preference" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>NI Number</label>
                                        <input type="text" name="ni_no" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>Nationality</label>
                                        <input type="text" name="nationality" class="form-control" >
                                    </div>
                                   
                                    <div class="form-group">
                                        <label>Visa Status</label>
                                        <input type="text" name="visa_status" class="form-control" >
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
                                        <input type="email" name="email" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="form-control" name="role_id" required="">
                                            @foreach(App\Models\Role::all() as $role)
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    
                                </div>

                            </div>
                            <br>
                            <div class="form-group">
                                <button class="btn btn-primary " type="submit">Submit</button>
                            </div>
                        </div>
                    
                    </div>
            </form>
    </div>
</div>
@endsection