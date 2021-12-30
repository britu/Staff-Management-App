@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">All Notices</li>
                </ol>
              </nav>
                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message') }}
                    </div>
                @endif

              @if(count($notices)>0)
              @foreach ($notices as $notice)
              
                <div class="card alert alert-info">
                    <div class="card-header alert alert-warning">{{ $notice->title }}</div>

                    <div class="card-body">
                       <p>{{ $notice->description }}</p>
                       <p class="badge bg-success">Date:{{ $notice->date }}</p>
                       <p class="badge bg-warning">Data:{{ $notice->Name }}</p>
                    </div>
                    <div class="card-footer">
                        @if(isset(auth()->user()->role->permission['name']['notice']['can-edit']))
                            <a href="{{ route('notices.edit', [$notice->id]) }}"> Edit</a>
                        @endif
                        <!-- Link to trigger modal Delete -->
                        @if(isset(auth()->user()->role->permission['name']['notice']['can-delete']))
                            <a href="#" class="float-end" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $notice->id }}">Delete</a>
                        @endif
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{ $notice->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('notices.destroy', [$notice->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are you Sure You want to Delete it?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{ $notice->title }}</p>
                                            <p>{{ $notice->description }}</p>
                                            <p class="badge bg-secondary">{{ $notice->name }} <span class="badge bg-warning">{{ $notice->date }}</span></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endforeach
            @else
            <p>No notices created</p>
            @endif
        </div>
    </div>
</div>
@endsection
