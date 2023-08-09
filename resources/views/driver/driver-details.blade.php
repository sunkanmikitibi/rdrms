<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Driver Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset md-3">
            <table class="table table-dark table-striped" width="100%">
                <tr>
                    <td>{!! QrCode::size(200)->color(255, 90, 0)->generate(Request::url()) !!}</td>
                    <td>
                        <img src="{{ asset('images/' . $driver->passport) }}" width="200" class="imgprofile">
                    </td>
                <tr>
                    <th style="float:left">Fullname</th>
                    <td>
                        {{ $driver->firstname . ' ' . $driver->lastname }}
                    </td>
                </tr>
                <tr>
                    <th style="float:left">Address</th>
                    <td>
                        {{ $driver->address }}
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
        
            <table>

            </table>
        
        </div>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
