@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.access.drugs.management'))

@section('breadcrumb-links')
@include('backend.drugs.includes.breadcrumb-links')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.access.drugs.management') }} <small class="text-muted">{{ __('labels.backend.access.drugs.active') }}</small>
                </h4>
            </div>
            <!--col-->
        </div>
        <!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table id="drugs_table" class="table" data-ajax_url="{{ route("admin.drugs.get") }}">
                        <thead>
                            <tr>
                                <th>{{ trans('labels.backend.access.drugs.table.name') }}</th>
                                <th>{{ trans('labels.backend.access.drugs.table.manufacture') }}</th>
                                <th>{{ trans('labels.backend.access.drugs.table.amount') }}</th>
                                <th>{{ trans('labels.backend.access.drugs.table.price') }} EG</th>
                                <th>{{ trans('labels.backend.access.drugs.table.createdat') }}</th>
                                <th>{{ trans('labels.general.actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
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
         $('#drugs_table').dataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: $('#drugs_table').data('ajax_url'),
                        type: 'post',
                    },
                    columns: [

                        { data: 'name', name: 'name' },
                        { data: 'manufacture', name: 'manufacture' },
                        { data: 'amount', name: 'amount' },
                        { data: 'price', name: 'price' },
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