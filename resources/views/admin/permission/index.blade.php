@extends('admin.layouts.master')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Permission mode</li>
              </ol>
            </nav>
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Click on edit to manage the permission controler
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($permission)>0)
                                @foreach($permission as $key => $permission)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $permission->role->name }}</td>
                                        <td>
                                            @if(isset(auth()->user()->role->permission['name']['permission']['can-edit']))
                                             <a href="{{ route('permissions.edit', [$permission->id]) }}"><i class="fas fa-edit"></i></a>
                                            @endif
                                        </td>
                                        <td>
                                            @if(isset(auth()->user()->role->permission['name']['permission']['can-delete'])) 
                                                <form action="{{ route('permissions.destroy', [$permission->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            @endif
                                            {{-- <a href = "#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $department->id }}"><i class="fas fa-trash"></i></a>
                                            <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{ $department->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <form action="{{ route('department.destroy', [$department->id]) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    
                                                                ... Do you Want to Delete?
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Delete</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                       
                                                </div>
                                            <!--End Delete Module here--> --}}
                                            </td>
                                        
                                    </tr>
                                @endforeach
                            @else
                                <td>No Departmet to Displaty</td>
                            @endif
                        </tbody>        
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
