@extends('layouts.rdradmin')
@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap py-5">
            <div class="card-title">
                <h3 class="card-label">Update Local Goverment Details
                </h3>
            </div>
        </div>
        <form action="{{ route('lgas.update', $lga->id)}}" method="post">
            @method('PUT')
            @csrf
        <div class="card-body">
            <div class="form-group row">
                <label for="name" class="col-lg-3">Local Government Area</label>
                <div class="col-lg-6">
                    <input type="text" name="name" value="{{ $lga->name }}" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-lg-3">Local Government Code</label>
                <div class="col-lg-6">
                    <input type="text" name="lga_code"  value="{{ $lga->lga_code }}" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4 offset-md-4">
                    <button type="submit" class="btn btn-primary ml-2">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection