<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">Drivers List
                <span class="text-muted pt-2 font-size-sm d-block"> All Drivers</span>
            </h3>
        </div>
        <div class="card-toolbar">
            
            <!--begin::Button-->
            <a href="{{ route('lgas.create') }}" class="btn btn-secondary font-weight-bolder">
                <i class="la la-plus"></i>Add LGA</a>
            <!--end::Button-->
            <!--begin::Button-->
            <a href="{{ route('drivers.create') }}" class="btn btn-primary font-weight-bolder">
                <i class="la la-plus"></i>Add New Driver</a>
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable1">
            <thead>
                <tr>
                    <th></th>
                    <th>Fullname</th>
                    <th> Phone Number </th>
                    <th>Driver's Licence Number</th>
                    <th>Vehicle Type</th>
                    <th>Tax id</th>
                    <th>Chasis Number</th>
                    <th>Plate Number</th> 
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($korope as $driver)
                    <tr>
                        <td><img src="{{ asset('images/' . $driver->passport) }}" alt="driverpassport" width="100"
                                height="100"></td>
                        <td>{{ $driver->firstname . ' ' . $driver->lastname }}</td>
                        <td>{{ $driver->phone_number }}</td>
                        <td>{{ $driver->driver_licence_no }}</td>
                        <td>{{ $driver->vehicle->name }}</td>
                        <td>{{ $driver->tax_id }}</td>
                        <td>{{ $driver->engine_chasis_no }}</td>
                        <td>{{ $driver->plate_no }}</td>


                        <td nowrap="nowrap">
                            <a href="{{ route('drivers.show', $driver->id) }}" class="btn btn-sm btn-info btn-clean btn-icon mr-2">
                                <i class="fa fa-info"></i>
                            </a>
                            <a href="{{ route('drivers.edit', $driver->id) }}" class="btn btn-sm btn-warning btn-clean btn-icon mr-2" > 
                                <i class="fa fa-edit"></i>
                            </a>

                            <a href="#" class="btn btn-sm btn-danger btn-clean btn-icon">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                           
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>
