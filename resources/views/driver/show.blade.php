@extends('layouts.rdradmin')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header flex-wrap py-5">
                        <h3 class="card-title">
                            Driver Details
                        </h3>
                </div>

                <div class="card-body">
                    <div class="col-md-4 offset-md-4">
                        <img src="{{ asset('images/' . $driver->passport) }}" width="100%" class="imgprofile">
                    </div>
                    <div class="col-md-4 offset-md-4 d-flex justify-content-center text-center">


                        <table class="table table-dark table-striped">
                            <tr>
                                <th style="float:left">Fullname</th>
                                <td>
                                    {{ $driver->firstname . ' ' . $driver->lastname }}
                                </td>
                            </tr>
                            <tr>
                                <th style="float:left">Phone Number</th>
                                <td>{{ $driver->phone_number }}</td>
                            </tr>
                            <tr>
                                <th style="float:left">Vehicle Type</th>
                                <td>{{ $driver->vehicle->name }}</td>
                            </tr>
                            <tr>
                                <th style="float:left">Tax Id</th>
                                <td>{{ $driver->tax_id }}</td>
                            </tr>
                            <tr>
                                <th style="float:left">Engine no</th>
                                <td>{{ $driver->plate_no }}</td>
                            </tr>
                            <tr>
                                <th style="float:left">Driver Licence Number</th>
                                <td>{{ $driver->driver_licence_no }}</td>
                            </tr>
                            <tr>
                                <th style="float:left">Engine no</th>
                                <td>{{ $driver->engine_chasis_no }}</td>
                            </tr>
                        </table>


                    </div>
                       <a href="{{ route('driverdetails', $driver->id )}}" target="_blank"> show driver details with qrcode </a>
                    @can('show')
                        <button onclick="display()" class="btn btn-md btn-primary">Click to Print</button>
                    @endcan
                    <script>
                        function display() {
                            window.print();
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
