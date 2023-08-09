@extends('layouts.rdradmin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom">
                <div class="card-header flex-wrap py-5">
                    <h3 class="card-title">
                        Edit Driver Details
                    </h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              @include('driver.edit-form')
                </div>
            </div>
        </div>
    </div>
@endsection
@section('datatable_scripts')
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/crud/forms/widgets/select2.js"></script>
    <!--end::Page Scripts-->
@endsection