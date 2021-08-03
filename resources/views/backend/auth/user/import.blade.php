@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.users.management'))

@section('breadcrumb-links')
@include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
        </div>
    @endif

{{ Form::open(['route' => 'admin.auth.user.importClients', 'class' => 'form-horizontal','files'=>'true' ,'role' => 'form', 'method' => 'post']) }}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-5">
                    <h4 class="card-title mb-0">
                        {{ __('labels.backend.access.users.management') }} <small class="text-muted">{{ __('labels.backend.access.users.active') }}</small>
                    </h4>
                </div>
                <!--col-->
            </div>

            <div class="row mt-4 mb-4">
                <div class="col">
                    <div class="form-group row">
                        {{ Form::label('import', __('validation.attributes.backend.access.users.import'), [ 'class'=>'col-md-2 form-control-label']) }}
                        <div class="col-md-10">
                            <div class="custom-file">
                                <input type="file"  name="import_file" class="form-control-file" id="exampleFormControlFile1" required>
                            </div>
                        </div>
                        <!--col-->
                    </div>
                </div>
            </div>
        </div>
    @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.auth.user.index' ])
    </div>
{{ Form::close() }}
@endsection