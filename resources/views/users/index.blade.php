@extends('layouts.rdradmin')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">
                            Users Management
                        </h3>
                    </div>

                    <div class="card-toolbar">
                        <a class="btn btn-success font-weight-bolder" href="{{ route('users.create') }}"> <i class="fa fa-user-plus"></i> Create New User</a>
                    </div>
                </div>
                <div class="card-body">

                    <table class="table table-separate table-bordered table-striped table-head-custom" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if (!empty($user->getRoleNames()))
                                            @foreach ($user->getRoleNames() as $v)
                                                <label class="badge badge-success">{{ $v }}</label>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-clean btn-sm btn-icon"
                                            href="{{ route('users.show', $user->id) }}">
                                            <i class="fa fa-eye text-primary"></i>
                                        </a>
                                        <a class="btn btn-icon btn-sm btn-clean"
                                            href="{{ route('users.edit', $user->id) }}">
                                            <i class="fa fa-edit text-warning"></i>
                                        </a>

                                        <form action="{{ route('users.destroy', $user->id) }}" style="display:inline"
                                            method="post">
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-clean btn-sm btn-icon"> <i
                                                    class="fa fa-trash-alt text-danger"></i> </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>


                    {!! $data->render() !!}

                </div>
            </div>
        </div>

        {{-- <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2></h2>
        </div>
        <div class="pull-right">
            
        </div>
    </div> --}}
    </div>
@endsection
