@extends('backend.layouts.app')

@section('title', __('labels.backend.access.drugs.management') . ' | ' . __('labels.backend.access.drugs.edit'))

@section('breadcrumb-links')
    @include('backend.drugs.includes.breadcrumb-links')
@endsection

@section('content')
    {{ Form::model($drug, ['route' => ['admin.drugs.update', $drug], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-role']) }}
    <div class="card">
        @include('backend.drugs.form')
        @include('backend.components.footer-buttons', [ 'cancelRoute' => 'admin.drugs.index', 'id' => $drug->id ])
    </div><!--card-->
    {{ Form::close() }}
@endsection