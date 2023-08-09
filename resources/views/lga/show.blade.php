@extends('layouts.rdradmin')
@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap py-5">
            <div class="card-title">
                <h3 class="card-label">{{$lga->name}} Local Goverment Details
                </h3>
            </div>
            <div class="card-toolbar">
            
                <!--begin::Button-->
                <div style="margin-right: 20px">
                     <a href="{{ route('lgas.create') }}" class="btn btn-secondary font-weight-bolder">
                    <i class="fas fa-plus-circle text-success"></i>Add LGA</a>
                </div>
               
                <!--end::Button-->
                <!--begin::Button-->
                <a href="{{ route('lgas.index') }}" class="btn btn-primary font-weight-bolder">
                    <i class="fas fa-signal"></i>All Lga</a>
                <!--end::Button-->
            </div>
        </div>
     <div class="card-body">
       <h1> Drivers</h1>
            @forelse ($lga->drivers as $driver)
                <li>
                    {{$driver->firstname.' '.$driver->lastname}}
                </li>
            @empty
                <div>
                    No Driver here yet click to <a href="{{ route('drivers.create')}}"> add driver </a>
                </div>
            @endforelse
     </div>
    </div>
@endsection