<form action="{{ route('drivers.store') }}" method="POST" class="form" enctype="multipart/form-data">
    <div class="card-body">
        @csrf
        <div class="mb-15">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">First Name:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" placeholder="Firstname" name="firstname" />
                            @error('firstname')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Last Name:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" placeholder="Lastname" name="lastname" />
                            @error('lastname')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Phone Number:</label>
                        <div class="col-lg-9">
                            <input type="number" class="form-control" placeholder="Phone Number : 080x xxx xxxx"
                                name="phone_number" />

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Driver's Licence:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" placeholder="Driver's Licence"
                                name="driver_licence_no" />

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Address</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" placeholder="Driver's Licence" name="address" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="lga" class="col-lg-3 col-form-label">LGA</label>
                        <div class="col-lg-9">
                            <select name="lga_id" class="form-control select2" id="kt_select2_2">
                                <option value="">Select Local Government</option>
                                @foreach ($alllgas as $lga)
                                    <option value="{{ $lga->id }}">{{ $lga->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Driver's Plate Number:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" placeholder="Plate Number" name="plate_no" />

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label">Engine Chasis Number:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" placeholder="Chasis Number"
                                name="engine_chasis_no" />

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">

                        <label class="col-lg-3 col-form-label">Upload Driver's Passport:</label>
                        <div class="col-lg-9">
                            <input type="file" class="form-control" placeholder="Plate Number" name="passport" />

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 col-sm-12">Vehicle Type</label>
                        <div class=" col-lg-9 col-md-9 col-sm-12">
                            <select class="form-control select2" id="kt_select2_1" name="vehicle_type">
                                <option value="">Select Vehicle</option>
                                @foreach ($allvehicles as $vehicle)
                                    <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-12">
                <button type="submit" class="btn btn-primary ml-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
    </div>
</form>
