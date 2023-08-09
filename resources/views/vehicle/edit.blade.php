@extends('layouts.rdradmin')
@section('content')
     <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Vehicle
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 offset-md-3">
                            <form action="{{ route('vehicle.update', $vehicle->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="name" class="col-lg-3">Vehicle Type</label>
                                    <div class="col-lg-9">
                                        <input type="text" name="name" value="{{ $vehicle->name }}" class="form-control" id="">
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
                </div>
            </div>
        </div>
     </div>
@endsection