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
    <form action="{{ route('permissions.store') }}" method="POST">
        @csrf
          <div class="card">
            <div class="card-header">Privileges to User</div>
                <div class="card-body">
                
                    <select class="form-control @error('role_id') is-invalid @enderror" name="role_id">
                        @error('role_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <option value="">Select Role</option>
                        @foreach(App\Models\Role::all() as $role)
                                <option value="{{ $role -> id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>

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
                                <td> <input type="checkbox" name="name[department][can-add]" value="1"> </td>
                                <td> <input type="checkbox" name="name[department][can-edit]" value="1"> </td>
                                <td> <input type="checkbox" name="name[department][can-delete]" value="1"> </td>
                                <td> <input type="checkbox" name="name[department][can-view]" value="1"> </td>
                                <td> <input type="checkbox" name="name[department][can-list]" value="1"> </td>
                            </tr>
                            <tr class="text-center">
                                <td>Role</td>
                                <td> <input type="checkbox" name="name[role][can-add]" value="1"> </td>
                                <td> <input type="checkbox" name="name[role][can-edit]" value="1"> </td>
                                <td> <input type="checkbox" name="name[role][can-delete]" value="1"> </td>
                                <td> <input type="checkbox" name="name[role][can-view]" value="1"> </td>
                                <td> <input type="checkbox" name="name[role][can-list]" value="1"> </td>
                            </tr>
                            <tr class="text-center">
                                <td>Permission</td>
                                <td> <input type="checkbox" name="name[permission][can-add]" value="1"> </td>
                                <td> <input type="checkbox" name="name[permission][can-edit]" value="1"> </td>
                                <td> <input type="checkbox" name="name[permission][can-delete]" value="1"> </td>
                                <td> <input type="checkbox" name="name[permission][can-view]" value="1"> </td>
                                <td> <input type="checkbox" name="name[permission][can-list]" value="1"> </td>
                            </tr>
                            <tr class="text-center">
                                <td>User</td>
                                <td> <input type="checkbox" name="name[user][can-add]" value="1"> </td>
                                <td> <input type="checkbox" name="name[user][can-edit]" value="1"> </td>
                                <td> <input type="checkbox" name="name[user][can-delete]" value="1"> </td>
                                <td> <input type="checkbox" name="name[user][can-view]" value="1"> </td>
                                <td> <input type="checkbox" name="name[user][can-list]" value="1"> </td>
                            </tr>
                            <tr class="text-center">
                                <td>Notice</td>
                                <td> <input type="checkbox" name="name[notice][can-add]" value="1"> </td>
                                <td> <input type="checkbox" name="name[notice][can-edit]" value="1"> </td>
                                <td> <input type="checkbox" name="name[notice][can-delete]" value="1"> </td>
                                <td> <input type="checkbox" name="name[notice][can-view]" value="1"> </td>
                                <td> <input type="checkbox" name="name[notice][can-list]" value="1"> </td>
                            </tr>
                            <tr class="text-center">
                                <td>Approve Leave</td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td> <input type="checkbox" name="name[leave][can-list]" value="1"> </td>
                            </tr>
                            
                        </tbody>
                    </table>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        </div>

        </div>
    </div>


@endsection
 