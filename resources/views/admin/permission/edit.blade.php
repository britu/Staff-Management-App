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

    <form action="{{ route('permissions.update',[$permission->id])}}" method="POST">
        @csrf
        @method('PATCH')
          <div class="card">
            <div class="card-header">Privileges to User</div>
                <div class="card-body">
                   
                    <h3>{{ $permission->role->name }}</h3>


                    <table class="table table-success table-striped mt-3">
                       <thead>
                            <tr class="text-center">
                                <th>Permission</th>
                                <th>Can-add</th>
                                <th>Can-edit</th>
                                <th>Can-delete</th>
                                <th>Can-view</th>
                                <th>Can-list</th>
                            </tr>
                       </thead>
                       <tbody>
                            <tr class="text-center">
                                <td>Department</td>
                                <td> <input type="checkbox" name="name[department][can-add]" @if(isset($permission['name']['department']['can-add'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[department][can-edit]" @if(isset($permission['name']['department']['can-edit'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[department][can-delete]" @if(isset($permission['name']['department']['can-delete'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[department][can-view]" @if(isset($permission['name']['department']['can-view'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[department][can-list]" @if(isset($permission['name']['department']['can-list'])) checked @endif value="1"> </td>
                            </tr>
                            <tr class="text-center">
                                <td>Role</td>
                                <td> <input type="checkbox" name="name[role][can-add]" @if(isset($permission['name']['role']['can-add'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[role][can-edit]" @if(isset($permission['name']['role']['can-edit'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[role][can-delete]" @if(isset($permission['name']['role']['can-delete'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[role][can-view]" @if(isset($permission['name']['role']['can-view'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[role][can-list]" @if(isset($permission['name']['role']['can-list'])) checked @endif value="1"> </td>
                            </tr>
                            <tr class="text-center">
                                <td>Permission</td>
                                <td> <input type="checkbox" name="name[permission][can-add]" @if(isset($permission['name']['permission']['can-add'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[permission][can-edit]" @if(isset($permission['name']['permission']['can-edit'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[permission][can-delete]" @if(isset($permission['name']['permission']['can-delete'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[permission][can-view]" @if(isset($permission['name']['permission']['can-view'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[permission][can-list]" @if(isset($permission['name']['permission']['can-list'])) checked @endif value="1"> </td>
                            </tr>
                            <tr class="text-center">
                                <td>User</td>
                                <td> <input type="checkbox" name="name[user][can-add]" @if(isset($permission['name']['user']['can-add'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[user][can-edit]" @if(isset($permission['name']['user']['can-edit'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[user][can-delete]" @if(isset($permission['name']['user']['can-delete'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[user][can-view]" @if(isset($permission['name']['user']['can-view'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[user][can-list]" @if(isset($permission['name']['user']['can-list'])) checked @endif value="1"> </td>
                            </tr>
                            <tr class="text-center">
                                <td>Notice</td>
                                <td> <input type="checkbox" name="name[notice][can-add]" @if(isset($permission['name']['notice']['can-add'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[notice][can-edit]" @if(isset($permission['name']['notice']['can-edit'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[notice][can-delete]" @if(isset($permission['name']['notice']['can-delete'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[notice][can-view]" @if(isset($permission['name']['notice']['can-view'])) checked @endif value="1"> </td>
                                <td> <input type="checkbox" name="name[notice][can-list]" @if(isset($permission['name']['notice']['can-list'])) checked @endif value="1"> </td>
                            </tr>
                            <tr class="text-center">
                                <td>Leave</td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td> <input type="checkbox" name="name[leave][can-list]" @if(isset($permission['name']['leave']['can-list'])) checked @endif value="1"> </td>
                            </tr>
                        </tbody>
                    </table>
                    @if(!isset(auth()->user->role->permission['name']['permission']['can-edit']))
                        <button type="submit" class="btn btn-primary">Update</button>
                    @endif
                    <a href="{{ route('permissions.index') }}" class="float-end"> <i class="fas fa-arrow-left"></i> Back</a>
                </div>
            </div>
        </form>
        </div>

        </div>
    </div>


@endsection
 