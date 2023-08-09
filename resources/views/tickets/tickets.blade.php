@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">Tickets
                <span class="text-muted pt-2 font-size-sm d-block"> Tickets Sold </span>
            </h3>
        </div>
        {{--  <div class="card-toolbar">

           
            <a href="{{ route('lgas.create') }}" class="btn btn-secondary font-weight-bolder">
                <i class="la la-plus"></i>Add LGA</a>
           
            <a href="{{ route('tickets.create') }}" class="btn btn-primary font-weight-bolder">
                <i class="la la-plus"></i>Add New ticket</a>
           
        </div> --}}
        <div class="card-toolbar">
            <a href="{{ route('ticket-sales.create') }}" class="btn btn-primary font-weight-bolder">
                <i class="la la-plus"></i>
                Issue New ticket
            </a>
        </div>

    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-separate table-bordered table-striped table-head-custom table-checkable"
            id="kt_datatable1">
            <thead>
                <tr>
                    <th></th>
                    <th>Fullname</th>
                    <th> Phone Number </th>
                    <th>ticket's Number</th>
                    <td>LGA</td>
                    <td>Amount</td>
                    <th>Ticket Sold on</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td></td>
                        <td>{{ $ticket->driver->firstname . ' ' . $ticket->driver->lastname }}</td>
                        <td>{{ $ticket->driver->phone_number }}</td>
                        <td>{{ $ticket->driver->lga->lga_code . '_' . $ticket->driver->tax_id . '_' . $ticket->id }}
                        </td>
                        <td>{{ $ticket->lga->name }}</td>

                        <td>{{ $ticket->amount }}</td>
                        <td> {{ Carbon\Carbon::parse($ticket->created_at)->format('d-m-Y i') }} /
                            {{ $ticket->created_at->diffForHumans() }}</td>

                        <td nowrap="nowrap">
                            <a href="{{ route('ticket-sales.show', $ticket->id) }}"
                                class="btn btn-sm btn-info btn-clean btn-icon mr-2">
                                <i class="fa fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('ticket-sales.edit', $ticket->id) }}"
                                class="btn btn-sm btn-warning btn-clean btn-icon mr-2">
                                <i class="fa fa-edit"></i>
                            </a>

                            <form style="display:inline;" method="post"
                                action="{{ route('ticket-sales.destroy', $ticket->id) }}">
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
