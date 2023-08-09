@extends('layouts.rdradmin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-custom">
                <div class="card-header flex-wrap py-5">
                    <h3 class="card-title">All Vehicles</h3>
                    <div class="card-toolbar">

                        <!--begin::Button-->
                        <a href="{{ route('drivers.create') }}" class="btn btn-primary font-weight-bolder">
                            <i class="la la-plus"></i>Add New Driver</a>
                        <!--end::Button-->
                    </div>
                </div>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form action="{{ route('vehicle.store') }}" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-lg-3">Vehicle Type</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="name" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 offset-md-4">
                                        <button type="submit" class="btn btn-primary ml-2">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                      

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicles as $vehicle)
                                    <tr>
                                        <td>{{ $vehicle->name }}</td>
                                        <td>
                                            <a href="{{ route('vehicle.edit', $vehicle->id) }}" class="btn btn-sm btn-icon btn-clean mr-2">
                                                <i class="fa fa-edit text-info"></i>
                                            </a>

                                            <form action="{{ route('vehicle.destroy', $vehicle->id) }}" method="post" style="display: inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-clean btn-sm btn-icon">
                                                <i class="fa fa-trash-alt text-danger"></i>
                                            </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
