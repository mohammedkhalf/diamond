@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.orders.management'))

@section('breadcrumb-links')
@include('backend.orders.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.orders.management') }} <small class="text-muted">{{ __('labels.backend.access.orders.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive" style="overflow-x:auto;">
                    <table id="orders-table" class="table" data-ajax_url="{{ route("admin.orders.get") }}">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.orders.table.id') }}</th>
                                <th>{{ trans('labels.backend.access.orders.table.patient_name') }}</th>
                                <th>{{ trans('labels.backend.access.orders.table.drug_name') }}</th>
                                <th>{{ trans('labels.backend.access.orders.table.amount') }}</th>
                                <th>{{ trans('labels.backend.access.orders.table.dose') }}</th>
                                <th>{{ trans('labels.backend.access.orders.table.createdat') }}</th>
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
         $('#orders-table').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: $('#orders-table').data('ajax_url'),
                        type: 'post',
                    },
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'patient_id', name: 'patient_id' },
                        { data: 'drug_id', name: 'drug_id' },
                        { data: 'amount', name: 'amount' },
                        { data: 'dose', name: 'dose' },
                        { data: 'created_at', name: 'created_at' },
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