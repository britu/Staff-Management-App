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
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif

                

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    SRS Department lists
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
                            @if(count($departments)>0)
                                @foreach($departments as $key => $department)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $department->name }}</td>
                                        <td>{{ $department->description }}</td>
                                        <td>
                                            @if(isset(auth()->user()->role->permission['name']['department']['can-edit']))
                                                <a href="{{ route('department.edit', [$department->id]) }}"><i class="fas fa-edit"></i></a>
                                            @endif
                                        </td>
                                        <td>
                                            @if(isset(auth()->user()->role->permission['name']['department']['can-delete']))
                                                <form action="{{ route('department.destroy', [$department->id]) }}" method="POST">
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
