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
            <form action="{{ route('department.store') }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">Dashboard</div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                            </div>
                            <div class="form-group">
                                <label for="">Descriptions</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
