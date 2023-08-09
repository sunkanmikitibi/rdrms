@extends('layouts.rdradmin')
@section('content')
    <div class="card card-custom">
        <div class="card-header flex-wrap py-5">
            <div class="card-title">
                <h3 class="card-label">Tickets
                    <span class="text-muted pt-2 font-size-sm d-block"> Show Ticket {{$ticket->id}}</span>
                </h3>
            </div>

           {{--  <div class="card-toolbar">
                <a href="{{ route('ticket-sales.index') }}" class="btn btn-primary font-weight-bolder">
                    <i class="la la-plus"></i>
                    Tickets
                </a>
            </div>--}}

        </div>
        <div class="card-body">

        </div>
    </div>
@endsection