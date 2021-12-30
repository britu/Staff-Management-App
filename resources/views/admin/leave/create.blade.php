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
            <form action="{{ route('leaves.store') }}" method="post">
                @csrf
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
                                <input type="" name="from" class="form-control" required="" id="datepicker">
                            </div>
                            <div class="form-group">
                                <label>To Date</label>
                                <input type="" name="to" class="form-control" required="" id="datepicker1">
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
                                <textarea name="description" class="form-control" ></textarea>
                            </div>
                            <div class="form-group mt-2">
                                <button class="btn btn-primary " type="submit">Submit</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </form>

            <table class="table table-striped mt-5">
                <thead>
                    <tr>
                        <th>Date From</th>
                        <th>Date To</th>
                        <th>Date Description</th>
                        <th>Type</th>
                        <th>Reyply</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leaves as $leave)
                        <tr>
                            <td>{{ $leave->from }}</td>
                            <td>{{ $leave->to }}</td>
                            <td>{{ $leave->description }}</td>
                            <td>{{ $leave->from }}</td>
                            <td>{{ $leave->from }}</td>
                            <td>
                                @if($leave->status==0)
                                    <span class="badge bg-info">Pending..</span>
                                @else
                                    <span class="badge bg-success">Approved</span>
                                @endif
                            </td>
                            <td> <a href="{{ route('leaves.edit', [$leave->id]) }}"><i class="fas fa-edit"></i></a></td>
                            <td>
                                <form action="{{ route('leaves.destroy', [$leave->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>        
    </div>
</div>
@endsection