@extends('admin.layouts.master')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
            <form action="{{ route('department.update', [$department->id]) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="card">
                    <div class="card-header">Update The Record</div>

                        <div class="card-body">
                            <div class="form-group mb-2">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $department->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Descriptions</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ $department->description }}</textarea>
                            </div>
                            <div class="form-group mt-3">
                                @if(isset(auth()->user->role->permission['name']['department']['can-edit']))
                                <button type="submit" class="btn btn-primary">UPDATE</button>
                                @endif
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
