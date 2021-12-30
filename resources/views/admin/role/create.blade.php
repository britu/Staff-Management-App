@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('roles.store') }}" method="post">@csrf
                    
                @if(session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                    
                <div class="card">
                    <div class="card-header">Create New Role</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group mb-4">
                            <label>Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection