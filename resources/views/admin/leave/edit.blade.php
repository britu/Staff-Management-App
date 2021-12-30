@extends('admin.layouts.master')

@section('content')

<div class="container mt-5">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Leave Form</li>
            </ol>
        </nav>
           
        <div class="row justify-content-center ">
            <form action="{{ route('leaves.update', $leave->id) }}" method="post">
                @csrf
                @method('PATCH')
                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Create Leave</div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>From Date</label>
                                <input type="" name="from" class="form-control" required="" id="datepicker" value="{{ $leave->from }}">
                            </div>
                            <div class="form-group">
                                <label>To Date</label>
                                <input type="" name="to" class="form-control" required="" id="datepicker1" value="{{ $leave->to }}">
                            </div>
                            <div class="form-group">
                                <label>Type of leave</label>
                                <select class="form-control" name="type">
                                    <option value="annualleave">Annual Leave</option>
                                    <option value="sickleave">Sick leave</option>
                                    <option value="parental">Parental leave</option>
                                    <option value="other">other leave</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" >{{ $leave->description }}</textarea>
                            </div>
                            <div class="form-group mt-2">
                                <button class="btn btn-primary " type="submit">Update</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>        
    </div>
</div>
@endsection