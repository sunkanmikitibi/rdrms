@extends('layouts.rdradmin')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <div class="card card-custom">
        <div class="card-header flex-wrap py-5">
            <div class="card-title">
                <h3 class="card-label">Tickets
                    <span class="text-muted pt-2 font-size-sm d-block"> Tickets Sold</span>
                </h3>
            </div>

            <div class="card-toolbar">
                <a href="{{ route('ticket-sales.index') }}" class="btn btn-primary font-weight-bolder">
                    <i class="la la-plus"></i>
                    Tickets
                </a>
            </div>

        </div>
        <div class="card-body">
            <form action="{{ route('ticket-sales.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group row">
                            <label for="driver" class="col-lg-3 col-md-3 col-sm-12 col-form-label">Driver</label>
                            <div class="col-md-9">
                                <select name="driver_id" class="form-control select2" id="kt_select2_2">
                                    <option value="">Select Driver</option>
                                    @foreach ($drivers as $driver)
                                        <option value="{{ $driver->id }}">
                                            {{ $driver->firstname . ' ' . $driver->lastname . ' ' . '(' . $driver->tax_id . ')' . '' }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('driver_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group row">
                            <label for="lga" class="col-lg-3 col-md-3 col-sm-12 col-form-label">LGA:</label>
                            <div class="col-md-9">
                                <select name="lga_id" class="form-control select2" id="kt_select2_1">
                                    <option value="">Select Local Goverment</option>
                                    @foreach ($lgas as $lga)
                                        <option value="{{ $lga->id }}">
                                            {{ $lga->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="form-group row">
                            <label for="amount" class="col-md-3 col-form-label">Amount</label>
                            <div class="col-md-9">
                                <input type="number" name="amount" class="form-control" id="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <button type="submit" class="btn btn-primary ml-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('datatable_scripts')
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/crud/forms/widgets/select2.js"></script>
    <!--end::Page Scripts-->
@endsection
