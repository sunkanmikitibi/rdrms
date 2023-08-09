@extends('layouts.rdradmin')
@section('content')
    @include('tickets.tickets')
@endsection
@section('datatable_styles')
<!--begin::Page Vendors Styles(used by this page)-->
<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
<!--end::Page Vendors Styles-->
@endsection
@section('datatable_scripts')

<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/crud/datatables/extensions/buttons.js"></script>
@endsection