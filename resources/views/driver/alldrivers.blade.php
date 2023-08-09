@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">Drivers List
                <span class="text-muted pt-2 font-size-sm d-block"> All Drivers</span>
            </h3>
        </div>
        <div class="card-toolbar">

            <div style="margin-right: 10px">
                <!--begin::Button-->
                <a href="{{ route('lgas.create') }}" class="btn btn-secondary font-weight-bolder">
                    <i class="fas fa-plus-circle text-success"></i> Add LGA</a>
                <!--end::Button-->

            </div>
            <div style="margin-left: 10px">
                <!--begin::Button-->
                <a href="{{ route('drivers.create') }}" class="btn btn-primary font-weight-bolder">
                    <i class="fas fa-user-plus"></i>Add New Driver</a>
                <!--end::Button-->
            </div>
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
                    <th>LGA</th>
                    <th>Chasis Number</th>
                    <th>Plate Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alldrivers as $driver)
                    <tr>
                        <td>
                            <div class="symbol symbol-50">
                                <img src="{{ asset('images/' . $driver->passport) }}" alt="driverpassport">
                            </div>
                        </td>
                        <td>{{ $driver->firstname . ' ' . $driver->lastname }}</td>
                        <td>{{ $driver->phone_number }}</td>
                        <td>{{ $driver->driver_licence_no }}</td>
                        <td>{{ $driver->vehicle->name }}</td>
                        <td>{{ $driver->tax_id }}</td>
                        <td>{{ $driver->lga->name }}</td>
                        <td>{{ $driver->engine_chasis_no }}</td>
                        <td>{{ $driver->plate_no }}</td>
                        <td nowrap="nowrap">
                            <a href="{{ route('drivers.show', $driver->id) }}"
                                class="btn btn-sm btn-info btn-clean btn-icon mr-2">
                                <i class="fa fa-info"></i>
                            </a>
                            <a href="{{ route('drivers.edit', $driver->id) }}"
                                class="btn btn-sm btn-warning btn-clean btn-icon mr-2">
                                <i class="fa fa-edit"></i>
                            </a>

                            <form style="display:inline;" method="post"
                            action="{{ route('drivers.destroy', $driver->id) }}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"><i
                                    class="fa fa-trash-alt"></i></button>
                        </form>

                

                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>
