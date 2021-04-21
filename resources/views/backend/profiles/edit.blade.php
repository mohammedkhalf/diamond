@extends('backend.layouts.app')

@section('title', __('labels.backend.access.profiles.management') . ' | ' . __('labels.backend.access.profiles.edit-profile'))

@section('breadcrumb-links')
    @include('backend.profiles.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::model($profile, ['route' => ['admin.profiles.update', $profile], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.profiles.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.profiles.index', 'id' => $profile->id ])
    </div><!--card-->

    {{ Form::close() }}
@endsection