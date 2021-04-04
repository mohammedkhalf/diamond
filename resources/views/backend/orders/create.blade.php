@extends('backend.layouts.app')

@section('title', __('labels.backend.access.orders.management') . ' | ' . __('labels.backend.access.orders.create-order'))

@section('breadcrumb-links')
    @include('backend.orders.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::open(['route' => 'admin.orders.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.orders.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.orders.index' ])
    </div><!--card-->
    {{ Form::close() }}
@endsection