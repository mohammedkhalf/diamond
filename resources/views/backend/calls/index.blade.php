@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.calls.management'))

@section('breadcrumb-links')
@include('backend.calls.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.calls.management') }} <small class="text-muted">{{ __('labels.backend.access.calls.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive" style="overflow-x:auto;">
                    <table id="calls-table" class="table" data-ajax_url="{{ route("admin.calls.get") }}">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.calls.table.id') }}</th>
                                <th>{{ trans('labels.backend.access.calls.table.name') }}</th>
                                <th>{{ trans('labels.backend.access.calls.table.phone') }}</th>
                                <th>{{ trans('labels.backend.access.calls.table.dateTime') }}</th>
                                <th>{{ trans('labels.backend.access.calls.table.duration') }}</th>
                                <th>{{ trans('labels.backend.access.calls.table.created_at') }} </th>
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
         $('#calls-table').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: $('#calls-table').data('ajax_url'),
                        type: 'post',
                    },
                    columns: [
                        { data: 'id', name: 'id'},
                        { data: 'name', name: 'name'},
                        { data: 'phone', name: 'phone'},
                        { data: 'date_time', name: 'date_time'},
                        { data: 'duration', name: 'duration'},
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