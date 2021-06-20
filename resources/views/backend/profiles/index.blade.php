@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.profiles.management'))

@section('breadcrumb-links')
@include('backend.profiles.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.profiles.management') }} <small class="text-muted">{{ __('labels.backend.access.profiles.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive" style="overflow-x:auto;">
                    <table id="profiles-table" class="table" data-ajax_url="{{ route("admin.profiles.get") }}">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.profiles.table.id') }}</th>
                                <th>{{ trans('labels.backend.access.profiles.table.patient_name') }}</th>
                                <th>{{ trans('labels.backend.access.profiles.table.phoneNumber') }}</th>
                                <th>{{ trans('labels.backend.access.profiles.table.material_status') }}</th>
                                <th>{{ trans('labels.backend.access.profiles.table.date_of_birth') }}</th>
                                <th>{{ trans('labels.backend.access.profiles.table.created_by') }} </th>
                                <th>{{ trans('labels.backend.access.profiles.table.created_at') }} </th>
                                <th>{{ trans('labels.general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--col-->
        </div>
        <!--row-->
    </div>
    <!--card-body-->
</div>
<!--card-->
@endsection

@section('pagescript')
<script>
       FTX.Utils.documentReady(function() {
         $('#profiles-table').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: $('#profiles-table').data('ajax_url'),
                        type: 'post',
                    },
                    columns: [
                        { data: 'id', name: 'id'},
                        { data: 'patient_id', name: 'patient_id'},
                        { data: 'phone_number', name: 'phone_number'},
                        { data: 'status', name: 'status'},
                        { data: 'date_of_birth', name: 'date_of_birth'},
                        { data: 'created_by', name: 'created_by'},
                        { data: 'created_at', name: 'created_at'},
                        { data: 'actions', name: 'actions', searchable: false, sortable: false }
                    ],
                    order: [[0, "asc"]],
                    searchDelay: 500,
                    "createdRow": function (row, data, dataIndex) {
                        FTX.Utils.dtAnchorToForm(row);
                    }
                });
    });
</script>

@stop