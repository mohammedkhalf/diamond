@extends('backend.layouts.app')

@section('title', __('labels.backend.access.drugs.management') . ' | ' . __('labels.backend.access.drugs.create'))

@section('breadcrumb-links')
    @include('backend.drugs.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.drugs.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.drugs.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.drugs.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection