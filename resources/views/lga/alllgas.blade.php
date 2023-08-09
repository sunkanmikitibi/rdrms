@if (session()->has('message'))
<div class="alert alert-success">
        {{session('message')}}
</div>
@endif
<div class="card card-custom">
    <div class="card-header flex-wrap py-5">
        <div class="card-title">
            <h3 class="card-label">local Governemt List
                <span class="text-muted pt-2 font-size-sm d-block"> All lgas</span>
            </h3>
        </div>
        <div class="card-toolbar">

            <!--begin::Button-->
            <a href="{{ route('lgas.create') }}" class="btn btn-primary font-weight-bolder">
                <i class="la la-plus"></i>Add New lga</a>
            <!--end::Button-->
        </div>
    </div>
    <div class="card-body">
        <!--begin: Datatable-->
        <table class="table table-separate table-head-custom" id="kt_datatable1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Drivers</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lgas as $lga)
                    <tr>
                        <td>{{ $lga->name }}</td>
                        <td>{{ $lga->lga_code }}</td>
                        <td>
                            @if ($lga->drivers->count() > 0)
                                {{$lga->drivers->count()}} Drivers
                            @else
                                No Driver here yet
                            @endif
                            
                        </td>
                        <td>  {{  Carbon\Carbon::parse($lga->created_at)->format('d-m-Y i') }} / {{ $lga->created_at->diffForHumans()}}</td>
                        <td nowrap="nowrap">
                            <a href="{{ route('lgas.show', $lga->id) }}"
                                class="btn btn-sm btn-info btn-clean btn-icon mr-2">
                                <i class="fa fa-info"></i>
                            </a>
                            <a href="{{ route('lgas.edit', $lga->id) }}"
                                class="btn btn-sm btn-warning btn-clean btn-icon mr-2">
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
