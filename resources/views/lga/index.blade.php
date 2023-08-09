@extends('layouts.rdradmin')
@section('content')
 @include('lga.alllgas')
@endsection
@section('datatable_styles')
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
@endsection
@section('datatable_scripts')
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>

    <script src="assets/js/pages/crud/datatables/extensions/buttons.js"></script>
@endsection
