@extends('layouts.rdradmin')


@section('content')
    <div class="row">

        <div class="col-lg-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header flex-wrap py-5">
                    <h3 class="card-title">
                        Create New Client
                    </h3>
                    <div class="card-toolbar">
                        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                    </div>
                </div>
                <div class="card-body">
                    @foreach ($clients as $client)
                        <li> {{ $client->name }}  <br> {{ $client->redirect }} <br> {{ $client->secret }}</li>
                    @endforeach

                    <div>
                        <form action="/oauth/clients" method="post">
                            @csrf
                            <div class="form-group">
                                    <label for="name">Name</label>
                            <input type="text" name="name" placeholder="Client Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="redirect">Redirect URL</label>
                        <input type="text" name="redirect" placeholder="http://my-url/callback" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-clear btn-primary">Create Client</button>
                        </div>
                        </form>
                    </div>
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
