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
                    SRS Department lists
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Department</th>
                                <th>Designation</th>
                                <th>Start Date</th>
                                <th>Address</th>
                                <th>Mobile No:</th>
                                <th>DBS</th>
                                <th>DBS Expiry Date</th>
                                <th>Experience On</th>
                                <th>Work Experience</th>
                                <th>Time Preference</th>
                                <th>Ni Number</th>
                                <th>Nationality</th>
                                <th>Visa Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($users)>0)
                                @foreach($users as $key => $user)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td><img src="{{ asset('profile') }}/{{ $user->image }}" width="100"></td>
                                        <td>{{ $user->name }}</td>
                                        <td><span class="badge bg-secondary">{{ $user->role->name  }}</span></td>
                                        <td>{{ $user->department->name ?? ''}}</td>
                                        <td>{{ $user->designation }}</td>
                                        <td>{{ $user->start_from }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->mobile_number }}</td>
                                        <td>{{ $user->dbs }}</td>
                                        <td>{{ $user->dbs_expiry_date }}</td>
                                        <td>{{ $user->experence_on }}</td>
                                        <td>{{ $user->work_experience }}</td>
                                        <td>{{ $user->time_preference }}</td>
                                        <td>{{ $user->ni_no }}</td>
                                        <td>{{ $user->nationality }}</td>
                                        <td>{{ $user->visa_status }}</td>
                                        

                                        <td>
                                            @if(isset(auth()->user()->role->permission['name']['user']['can-edit']))
                                                <a href="{{ route('users.edit', [$user->id]) }}"><i class="fas fa-edit"></i></a>
                                            @endif
                                        </td>

                                        <td>
                                            {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{$leave->id}}">
                                                Delete
                                             </a>
                                            @if(isset(auth()->user()->role->permission['name']['user']['can-delete']))
                                                <form action="{{ route('users.destroy', [$user->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            @endif --}}
                                            @if(isset(auth()->user()->role->permission['name']['user']['can-delete']))
                                                <a href = "#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $user->id }}"><i class="fas fa-trash"></i></a>
                                                <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <form action="{{ route('users.destroy', [$user->id]) }}" method="POST">
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
                                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        
                                                    </div>
                                                <!--End Delete Module here-->
                                            @endif
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
