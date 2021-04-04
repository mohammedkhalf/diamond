@extends('backend.layouts.app')

@section('title', __('labels.backend.access.profiles.management') . ' | ' . __('labels.backend.access.profiles.create-order'))

@section('breadcrumb-links')
    @include('backend.profiles.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.profiles.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.profiles.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.profiles.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection