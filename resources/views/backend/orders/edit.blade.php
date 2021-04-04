@extends('backend.layouts.app')

@section('title', __('labels.backend.access.orders.management') . ' | ' . __('labels.backend.access.orders.edit'))

@section('breadcrumb-links')
    @include('backend.orders.includes.breadcrumb-links')
@endsection

@section('content')
{{ Form::model($order, ['route' => ['admin.orders.update', $order], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'create-permission', 'files' => true]) }}

    <div class="card">
        @include('backend.orders.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.orders.index', 'id' => $order->id ])
    </div><!--card-->
    
    {{ Form::close() }}
@endsection