@extends('layouts.app')

@section('title','')

@section('content')
    <div class="container-fluid px-0">
        <div class="card mb-3">
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills justify-content-between">
                    <li class="nav-item">Role List</li>
                    <li class="nav-item"><a class="btn btn-success text-white" href="{{route('roles.create')}}">
                            <svg class="icon me-2 text-white">
                                <use xlink:href="{{asset('assets/coreui/vendors/@coreui/icons/svg/free.svg#cil-plus')}}"></use>
                            </svg>Create Role</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                @if($errors->count() > 0)
                    <ul class="list-group notification-object">
                        @foreach($errors->all() as $error)
                            <li class="list-group-item text-danger">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="role">
                        <thead class="table-dark">
                        <tr>
                            <th style="width: 5rem;">##</th>
                            <th style="width: 12rem">Name</th>
                            <th style="width: 35rem;">Permission</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $key=>$role)
                            @php
                                $bg=($key%2==0?'bg-info-new':'bg-success');
                            @endphp
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="align-middle">{{$role->name}}</td>
                                <td>
                                    @foreach($role->permissions as $per)
                                        <span class="bg-warning text-white">{{ $per->name }}</span>
                                    @endforeach
                                </td>
                                <td class="text-center align-middle">
                                    <div class="d-grid gap-2 d-md-flex justify-content-center">
                                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                        <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger text-white" type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{--{{ $roles->links('vendor.pagination.custom') }}--}}
            </div>
        </div>


    </div>
@endsection

@section('language-filter-js')
    <script>
        // alertify delete
        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            event.preventDefault();
            alertify.confirm('Whoops!', 'Are you sure you want to Delete?',
                function(){
                    form.submit();
                    // alertify.success('Ok')
                },
                function(){
                    // alertify.error('Cancel')
                });
        });

        $(document).ready(function() {
            $('#role').DataTable();
        } );
    </script>
@endsection

