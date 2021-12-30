@extends('admin.layouts.master')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">All Departments</li>
              </ol>
            </nav>
           
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    SRS Role lists
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($roles)>0)
                                @foreach($roles as $key => $role)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td>
                                            @if(isset(auth()->user()->role->permission['name']['role']['can-edit']))
                                                <a href="{{ route('roles.edit', [$role->id]) }}"><i class="fas fa-edit"></i></a>
                                            @endif
                                        </td>
                                        <td>
                                            @if(isset(auth()->user()->role->permission['name']['role']['can-delete']))
                                                <form action="{{ route('roles.destroy', [$role->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            @endif
                                       
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            @else
                                <td>No Role to Displaty</td>
                            @endif
                        </tbody>
                
        
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
