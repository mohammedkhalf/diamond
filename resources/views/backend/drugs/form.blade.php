<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.drugs.management') }}
                <small class="text-muted">{{ __('labels.backend.access.drugs.create') }}</small>
            </h4>
        </div><!--col-->
    </div><!--row-->

    <hr>

    <div class="row mt-4 mb-4">
        <div class="col">
            <div class="form-group row">
                {{ Form::label('name', trans('validation.attributes.backend.access.drugs.name'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.drugs.name'), 'required' => 'required']) }}
                </div><!--col-->
            </div><!--form-group-->

            <div class="form-group row">
                {{ Form::label('manufacture', trans('validation.attributes.backend.access.drugs.manufacture'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('manufacture', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.drugs.manufacture'), 'required' => 'required']) }}
                </div><!--col-->
            </div><!--form-group-->


            <div class="form-group row">
                {{ Form::label('amount', trans('validation.attributes.backend.access.drugs.amount'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('amount', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.drugs.amount'), 'required' => 'required']) }}
                </div><!--col-->
            </div><!--form-group-->

            <div class="form-group row">
                {{ Form::label('price', trans('validation.attributes.backend.access.drugs.price'), ['class' => 'col-md-2 from-control-label required']) }}
                
                <div class="col-md-10">
                    {{ Form::text('price', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.drugs.price'), 'required' => 'required']) }}
                </div><!--col-->
            </div><!--form-group-->

        </div><!--col-->
    </div><!--row-->
</div><!--card-body-->