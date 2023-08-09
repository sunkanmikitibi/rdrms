<div class="row">
    <div class="col-md-12">
        <form action="{{ route('drivers.update', $driver) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <!-- names begin -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Firstname" class="col-md-3  col-form-label">Firstname</label>
                        <div class="col-md-9">
                            <input type="text" name="firstname" class="form-control" value="{{$driver->firstname}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="Firstname" class="col-md-3  col-form-label">Lastname</label>
                        <div class="col-md-9">
                            <input type="text" name="lastname" class="form-control" value="{{$driver->lastname}}">
                        </div>
                    </div>
                </div>
            </div>
          {{--
            Names End--}}
            {{-- phone and driver's licence section
                --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Phone Number:</label>
                            <div class="col-lg-9">
                                <input type="number" class="form-control"
                                    placeholder="Phone Number : 080x xxx xxxx" value="{{ $driver->phone_number}}" name="phone_number" />
    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Driver's Licence:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" value="{{ $driver->driver_licence_no }}"
                                    name="driver_licence_no" />
    
                            </div>
                        </div>
                    </div>
                </div>
                  {{-- phone and driver's licence section ends
             --}}
               {{-- phone and driver's licence section
                --}}
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Address</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" value="{{ $driver->address }}"
                                name="address" />
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
                                        <option value="{{ $lga->id }}" {{ $driver->lga_id == $lga->id ? 'selected' : ''}}>{{ $lga->name }}</option>
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
                                <input type="text" class="form-control" value="{{ $driver->plate_no}}"
                                    name="plate_no" />
    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label">Engine Chasis Number:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" value="{{ $driver->engine_chasis_no}}"
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
                                @if ($driver->passport)
                                <img id="original" src="{{ asset('images/' . $driver->passport) }}" height="70"
                                    width="70">
                            @endif
                            <input type="text" name="image" class="form-control" placeholder=""
                                value="{{ $driver->passport }}">
                                <input type="file" class="form-control" value="{{$driver->passport}}"  
                                    name="passport" />
    
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
                                        <option value="{{$vehicle->id}}" {{ $driver->vehicle_type == $vehicle->id ? 'selected' : ''}}>{{ $vehicle->name }}</option>
                                    @endforeach
                                    
                                </select>
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
