<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.orders.management') }}
                <small class="text-muted">{{ __('labels.backend.access.orders.create-order') }}</small>
            </h4>
        </div>
        <!--col-->
    </div>
    <!--row-->
    <hr>
    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('patientName', trans('validation.attributes.backend.access.orders.patient_name'), ['class' => 'col-md-2 from-control-label required']) }}
                <div class="col-md-10">
                    <select class="form-control"  name="patient_id">
                        <option value="0">Select Pateint</option>
                        @if(isset($order))
                            @foreach($pateints as $pateintInfo)
                                <option value="{{$pateintInfo->id}}" {{ $pateintInfo->id == $order->patient_id ? 'selected="selected"' : ''  }} > {{$pateintInfo->name}} </option>
                            @endforeach
                        @else
                            @foreach($pateints as $pateintInfo)
                            <option value="{{$pateintInfo->id}}" {{ old('patient_id') == $pateintInfo->id ? 'selected' : ''  }} > {{$pateintInfo->name}} </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <!--col-->
            </div>

            <div class="form-group row">
                 {{ Form::label('drugName', trans('validation.attributes.backend.access.orders.drug_name'), ['class' => 'col-md-2 from-control-label required']) }}
                <div class="col-md-10">
                    <select class="form-control"  name="drug_id" id="drug_id">
                        <option value="0">Select Drug</option>
                        @if(isset($order))
                            @foreach($drugs as $drugInfo)
                            <option value="{{$drugInfo->id}}"  {{ $drugInfo->id == $order->drug_id ? 'selected="selected"' : ''  }} > {{$drugInfo->name}} </option>
                            @endforeach
                        @else
                            @foreach($drugs as $drugInfo)
                            <option value="{{$drugInfo->id}}" {{ old('drug_id') == $drugInfo->id ? 'selected' : ''  }} > {{$drugInfo->name}} </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <!--col-->
            </div>

            <div class="form-group row">
                 {{ Form::label('amount', trans('validation.attributes.backend.access.orders.amount'), ['class' => 'col-md-2 from-control-label required']) }}
                <div class="col-md-10">
                    {{ Form::text('amount', old('amount')  , ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.orders.amount'), 'required' => 'required']) }}
                </div>
                <!--col-->
            </div>


            <div class="form-group row">
                 {{ Form::label('dose', trans('validation.attributes.backend.access.orders.dose'), ['class' => 'col-md-2 from-control-label required']) }}
                <div class="col-md-10">
                    <select class="form-control"  name="dose" id="dose">
                        <option value="0">{{ trans('validation.attributes.backend.access.orders.select_dose') }}</option>
                        @if(isset($order))
                        <option value="1" {{  $order->dose == 1 ? 'selected="selected"' : ''  }} > {{trans('labels.backend.access.orders.one_tuple_per_day')}} </option>
                        <option value="2"  {{  $order->dose == 2 ? 'selected="selected"' : ''  }} > {{trans('labels.backend.access.orders.two_tuple_per_day')}} </option>
                        <option value="3"  {{  $order->dose == 3 ? 'selected="selected"' : ''  }} > {{trans('labels.backend.access.orders.three_tuple_per_day')}} </option>
                        @else
                        <option value="1" old('dose') == 1 ? 'selected' : ''> {{trans('labels.backend.access.orders.one_tuple_per_day')}} </option>
                        <option value="2"  old('dose') == 2 ? 'selected' : ''> {{trans('labels.backend.access.orders.two_tuple_per_day')}} </option>
                        <option value="3"  old('dose') == 3 ? 'selected' : ''> {{trans('labels.backend.access.orders.three_tuple_per_day')}} </option>
                        @endif
                    </select>
                </div>
                <!--col-->
            </div>

            <!--form-group-->
        </div>
        <!--col-->
    </div>
    <!--row-->
</div>
<!--card-body-->

@section('pagescript')
<script type="text/javascript">

    // console.log("hello")
    FTX.Utils.documentReady(function() {
        FTX.Faqs.edit.init("{{ config('locale.languages.' . app()->getLocale())[1] }}");
    });
</script>
@stop