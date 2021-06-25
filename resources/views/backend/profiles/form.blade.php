<div class="card-body">
    <div class="row">
        <div class="col-sm-5">
            <h4 class="card-title mb-0">
                {{ __('labels.backend.access.profiles.management') }}
            </h4>
        </div>
        <!--col-->
    </div>
    <!--row-->
    <hr>
    <div class="row mt-4 mb-4">
        <div class="col">
            <!--patient name -->
            <div class="form-group row">
                {{ Form::label('patientName', trans('validation.attributes.backend.access.profiles.patient_name'), ['class' => 'col-md-2 from-control-label required']) }}
                <div class="col-md-10">
                    <select class="form-control"  name="patient_id" required>
                        <option value="0"> {{ trans('validation.attributes.backend.access.profiles.patient_name') }} </option>
                        @if(isset($profile))
                            @foreach ($patients as $patientInfo)
                            <option value="{{$patientInfo->id}}"  {{  $profile->patient_id == $patientInfo->id ? 'selected="selected"' : ''  }}  > {{$patientInfo->fullname}} </option>
                            @endforeach
                        @else
                            @foreach ($patients as $patientInfo)
                            <option value="{{$patientInfo->id}}" {{ old('patient_id') == $patientInfo->id ? 'selected' : ''  }}> {{$patientInfo->fullname}} </option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>

            <!--phone Number-->
            <div class="form-group row">
                {{ Form::label('phoneNumber', __('validation.attributes.backend.access.profiles.phone_number'), [ 'class'=>'col-md-2 form-control-label']) }}
                <div class="col-md-10">
                    {{ Form::text('phone_number', null, ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.profiles.phone_number'), 'required' => 'required']) }}
                </div>
            </div>

            <!--gender-->
            <div class="form-group row">
                    {{ Form::label('gender', trans('validation.attributes.backend.access.profiles.gender'), ['class' => 'col-md-2 from-control-label']) }}
                 <div class="col-md-10">
                    <select class="form-control"  name="gender">
                        <option value="0"> {{ trans('validation.attributes.backend.access.profiles.select-gender') }} </option>
                        @if(isset($profile))
                            <option value="1" {{  $profile->gender == 1 ? 'selected="selected"' : ''  }}> {{ trans('validation.attributes.backend.access.profiles.Male') }} </option>
                            <option value="2" {{  $profile->gender == 2 ? 'selected="selected"' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.Female') }}</option>
                        @else
                            <option value="1" {{ old('gender') == 1 ? 'selected' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.Male') }}</option>
                            <option value="2" {{ old('gender') == 2 ? 'selected' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.Female') }}</option>
                        @endif

                    </select>
                  </div>
            </div>

            <!-- Date_Of_Birth -->
            <div class="form-group row">
                {{ Form::label('Date_Of_Birth', trans('validation.attributes.backend.access.profiles.date_of_dirth'), ['class' => 'col-md-2 from-control-label']) }}
                <div class="col-md-10">
                    <div>
                        {{ Form::text('date_of_birth', old('Date_Of_Birth') , ['class' => 'form-control', 'id'=>'tbDate' , 'placeholder' => trans('validation.attributes.backend.access.profiles.select-date')]) }}
                    </div>
                </div>
                <!--col-->
            </div>

            <!--material Status -->
            <div class="form-group row">
                {{ Form::label('material Status', trans('labels.backend.access.profiles.table.select-status'), ['class' => 'col-md-2 from-control-label ']) }}
             <div class="col-md-10">
                <select class="form-control"  name="status" >
                    <option value="0">{{ trans('labels.backend.access.profiles.table.select-status') }}</option>
                    @if(isset($profile))
                        <option value="1" {{  $profile->status == 1 ? 'selected="selected"' : ''  }}>{{ trans('labels.backend.access.profiles.table.Single') }}</option>
                        <option value="2" {{  $profile->status == 2 ? 'selected="selected"' : ''  }}>{{ trans('labels.backend.access.profiles.table.Married') }} </option>
                    @else
                        <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>{{ trans('labels.backend.access.profiles.table.Single') }}</option>
                        <option value="2" {{ old('status') == 2 ? 'selected' : '' }}>{{ trans('labels.backend.access.profiles.table.Married') }} </option>
                    @endif

                </select>
              </div>
            </div>

                <!--age-->
                <div class="form-group row">
                    {{ Form::label('age', trans('validation.attributes.backend.access.profiles.age'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        {{ Form::text('age', old('age') , ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.profiles.age')]) }}
                    </div>
                </div>

              <!--heigth-->
              <div class="form-group row">
                {{ Form::label('height', trans('validation.attributes.backend.access.profiles.height'), ['class' => 'col-md-2 from-control-label']) }}
                <div class="col-md-10">
                    {{ Form::text('height', old('height') , ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.profiles.height')]) }}
                </div>
              </div>

                <!--weight-->
                <div class="form-group row">
                    {{ Form::label('weight', trans('validation.attributes.backend.access.profiles.weight'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        {{ Form::text('weight', old('weight') , ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.profiles.weight')]) }}
                    </div>
                </div>

                <!--therapist-->
                <div class="form-group row">
                    {{ Form::label('therapist', trans('validation.attributes.backend.access.profiles.therapist'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        {{ Form::text('therapist', old('therapist') , ['class' => 'form-control', 'placeholder' => trans('validation.attributes.backend.access.profiles.therapist')]) }}
                    </div>
                </div>

                <!-- address -->
                <div class="form-group row">
                    {{ Form::label('address', trans('validation.attributes.backend.access.profiles.address'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        {{ Form::textarea('address', old('address') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.address')]) }}
                    </div>
                </div>

                <!-- Last Receipt -->
                <div class="form-group row">
                    {{ Form::label('last_receipt', trans('validation.attributes.backend.access.profiles.last_receipt'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        <div>
                            {{ Form::text('last_receipt', old('last_receipt') , ['class' => 'form-control', 'id'=>'last_receipt','placeholder' => trans('validation.attributes.backend.access.profiles.last_receipt')]) }}
                        </div>
                    </div>
                </div>

                <!-- Last Receipt Value -->
                <div class="form-group row">
                    {{ Form::label('last_receipt_value', trans('validation.attributes.backend.access.profiles.last_receipt_value'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        <div>
                            {{ Form::text('last_receipt_value', old('last_receipt_value') , ['class' => 'form-control','placeholder' => trans('validation.attributes.backend.access.profiles.last_receipt_value')]) }}
                        </div>
                    </div>
                </div>

            <!--type of customer -->
            <div class="form-group row">
                {{ Form::label('Payment Type', trans('validation.attributes.backend.access.profiles.type_of_customer'), ['class' => 'col-md-2 from-control-label']) }}
                <div class="col-md-10">
                    <select class="form-control"  name="payment_type">
                        <option value="0"> {{ trans('validation.attributes.backend.access.profiles.choose_type_of_customer') }} </option>
                        @if(isset($profile))
                            <option value="1"  {{  $profile->payment_type == 1 ? 'selected="selected"' : ''  }}> {{ trans('validation.attributes.backend.access.profiles.cash') }} </option>
                            <option value="2"  {{  $profile->payment_type == 2 ? 'selected="selected"' : ''  }}> {{ trans('validation.attributes.backend.access.profiles.contracts') }} </option>
                            <option value="3"  {{  $profile->payment_type == 3 ? 'selected="selected"' : ''  }}> {{ trans('validation.attributes.backend.access.profiles.postpaid') }} </option>
                        @else
                            <option value="1"  {{ old('payment_type') == 1 ? 'selected' : '' }}> {{ trans('validation.attributes.backend.access.profiles.cash') }} </option>
                            <option value="2"  {{ old('payment_type') == 2 ? 'selected' : '' }}> {{ trans('validation.attributes.backend.access.profiles.contracts') }} </option>
                            <option value="3"  {{ old('payment_type') == 3 ? 'selected' : '' }}> {{ trans('validation.attributes.backend.access.profiles.postpaid') }} </option>
                        @endif

                    </select>
                </div>
            </div>

            <!-- chronic diseases -->
            <div class="form-group row">
                {{ Form::label('chronic_diseases', trans('validation.attributes.backend.access.profiles.chronic_diseases'), ['class' => 'col-md-2 from-control-label']) }}
                <div class="col-md-10">
                    {{ Form::textarea('chronic_diseases', old('chronic_diseases') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.chronic_diseases')]) }}
                </div>
            </div>

                <!--patient_complain-->
                <div class="form-group row">
                    {{ Form::label('patient_complain', trans('validation.attributes.backend.access.profiles.patient_complain'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        {{ Form::textarea('patient_complain', old('patient_complain') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.patient_complain')]) }}
                    </div>
                </div>

                <!--history of patient disorder-->
                <div class="form-group row">
                    {{ Form::label('history_of_patient_disorder', trans('validation.attributes.backend.access.profiles.history_of_patient_disorder'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                            {{ Form::textarea('history_of_patient_disorder', old('history_of_patient_disorder') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.history_of_patient_disorder')]) }}
                        </div>
                </div>

                <!-- past medical history -->
                <div class="form-group row">
                    {{ Form::label('past_medical_history', trans('validation.attributes.backend.access.profiles.past_medical_history'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                            {{ Form::textarea('past_medical_history', old('past_medical_history') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.past_medical_history')]) }}
                    </div>
                </div>

                <!-- family history -->
                <div class="form-group row">
                    {{ Form::label('family_history', trans('validation.attributes.backend.access.profiles.family_history'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                            {{ Form::textarea('family_history', old('family_history') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.family_history')]) }}
                    </div>
                </div>

                <!-- diagnoses Case -->
                <div class="form-group row">
                    {{ Form::label('diagnoses_case', trans('validation.attributes.backend.access.profiles.diagnoses_case'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                            {{ Form::textarea('diagnoses_case', old('diagnoses_case') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.diagnoses_case')]) }}
                    </div>
                </div>

                <!-- use Drug -->
                <div class="form-group row">
                    {{ Form::label('use_drug', trans('validation.attributes.backend.access.profiles.use_drug'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        <select class="form-control"  name="use_drug">
                            <option value="0"> {{ trans('validation.attributes.backend.access.profiles.choose') }} </option>
                            @if(isset($profile))
                              <option value="1" {{  $profile->use_drug == 1 ? 'selected="selected"' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.yes') }}</option>
                              <option value="2" {{  $profile->use_drug == 2 ? 'selected="selected"' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.no') }}</option>
                            @else
                                <option value="1" {{ old('use_drug') == 1 ? 'selected' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.yes') }}</option>
                                <option value="2" {{ old('use_drug') == 2 ? 'selected' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.no') }}</option>
                            @endif
                        </select>
                    </div>
                </div>

                <!-- sport -->
                <div class="form-group row">
                    {{ Form::label('sport', trans('validation.attributes.backend.access.profiles.sport'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                            <select class="form-control"  name="sport">
                                <option value="0">  {{ trans('validation.attributes.backend.access.profiles.choose') }}</option>
                                @if(isset($profile))
                                    <option value="1" {{  $profile->sport == 1 ? 'selected="selected"' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.yes') }}</option>
                                    <option value="2" {{  $profile->sport == 2 ? 'selected="selected"' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.no') }}</option>
                                @else
                                    <option value="1" {{ old('sport') == 1 ? 'selected' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.yes') }}</option>
                                    <option value="2" {{ old('sport') == 2 ? 'selected' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.no') }}</option>
                                @endif


                            </select>
                    </div>
                </div>

                <!-- cohols -->
                <div class="form-group row">
                    {{ Form::label('cohols', trans('validation.attributes.backend.access.profiles.cohols'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                            <select class="form-control"  name="cohols">
                                <option value="0"> {{ trans('validation.attributes.backend.access.profiles.choose') }}</option>
                                @if(isset($profile))
                                    <option value="1" {{  $profile->cohols == 1 ? 'selected="selected"' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.yes') }}</option>
                                    <option value="2" {{  $profile->cohols == 2 ? 'selected="selected"' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.no') }}</option>
                                @else
                                    <option value="1" {{ old('cohols') == 1 ? 'selected' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.yes') }}</option>
                                    <option value="2" {{ old('cohols') == 2 ? 'selected' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.no') }}</option>
                                @endif
                            </select>
                    </div>
                </div>

                <!-- smoke -->
                <div class="form-group row">
                    {{ Form::label('smoke', trans('validation.attributes.backend.access.profiles.smoke'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                            <select class="form-control"  name="smoke">
                                <option value="0">  {{ trans('validation.attributes.backend.access.profiles.choose') }} </option>
                                @if(isset($profile))
                                <option value="1" {{  $profile->smoke == 1 ? 'selected="selected"' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.yes') }}</option>
                                <option value="2" {{  $profile->smoke == 2 ? 'selected="selected"' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.no') }}</option>
                                @else
                                <option value="1" {{ old('smoke') == 1 ? 'selected' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.yes') }}</option>
                                <option value="2" {{ old('smoke') == 2 ? 'selected' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.no') }}</option>
                                @endif


                            </select>
                    </div>
                </div>

                 <!-- caffeine -->
                <div class="form-group row">
                    {{ Form::label('caffeine', trans('validation.attributes.backend.access.profiles.caffeine'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        <select class="form-control"  name="caffeine">
                            <option value="0"> {{ trans('validation.attributes.backend.access.profiles.choose') }}</option>
                            @if(isset($profile))
                                <option value="1" {{  $profile->caffeine == 1 ? 'selected="selected"' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.yes') }}</option>
                                <option value="2" {{  $profile->caffeine == 2 ? 'selected="selected"' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.no') }}</option>
                            @else
                                <option value="1" {{ old('caffeine') == 1 ? 'selected' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.yes') }}</option>
                                <option value="2" {{ old('caffeine') == 2 ? 'selected' : ''  }}>{{ trans('validation.attributes.backend.access.profiles.no') }}</option>
                            @endif

                        </select>
                    </div>
                </div>

                <!-- other Life Style -->
                <div class="form-group row">
                    {{ Form::label('other_life_style', trans('validation.attributes.backend.access.profiles.other_life_style'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        {{ Form::textarea('other_life_style', old('other_life_style') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.other_life_style')]) }}
                    </div>
                </div>

                <!-- immunization -->
                {{-- <div class="form-group row">
                    {{ Form::label('immunization', trans('validation.attributes.backend.access.profiles.immunization'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        {{ Form::textarea('immunization', old('immunization') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.immunization')]) }}
                    </div>
                </div> --}}

                <!-- allergies_drugs -->
                {{-- <div class="form-group row">
                    {{ Form::label('allergies_drugs', trans('validation.attributes.backend.access.profiles.allergies_drugs'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        {{ Form::textarea('allergies_drugs', old('allergies_drugs') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.allergies_drugs')]) }}
                    </div>
                </div> --}}

                <!-- allergies Drugs -->
                {{-- <div class="form-group row">
                    {{ Form::label('environment', trans('validation.attributes.backend.access.profiles.environment'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        {{ Form::textarea('environment', old('environment') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.environment')]) }}
                    </div>
                </div> --}}

                <!--past History Drugs -->
                {{-- <div class="form-group row">
                    {{ Form::label('past_history_drugs', trans('validation.attributes.backend.access.profiles.past_history_drugs'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        {{ Form::textarea('past_history_drugs', old('past_history_drugs') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.past_history_drugs')]) }}
                    </div>
                </div> --}}

                <!-- past History Drugs Response -->
                {{-- <div class="form-group row">
                    {{ Form::label('past_history_drugs_response', trans('validation.attributes.backend.access.profiles.past_history_drugs_response'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        {{ Form::textarea('past_history_drugs_response', old('past_history_drugs_response') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.past_history_drugs_response')]) }}
                    </div>
                </div> --}}

                 <!-- current Prescribed Drugs -->
                {{-- <div class="form-group row">
                    {{ Form::label('current_prescribed_drugs', trans('validation.attributes.backend.access.profiles.current_prescribed_drugs'), ['class' => 'col-md-2 from-control-label']) }}
                    <div class="col-md-10">
                        {{ Form::textarea('current_prescribed_drugs', old('current_prescribed_drugs') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.current_prescribed_drugs')]) }}
                    </div>
                </div> --}}

                   <!-- current Prescribed Drugs Response -->
                   {{-- <div class="form-group row">
                        {{ Form::label('current_prescribed_drugs_response', trans('validation.attributes.backend.access.profiles.current_prescribed_drugs_response'), ['class' => 'col-md-2 from-control-label']) }}
                        <div class="col-md-10">
                            {{ Form::textarea('current_prescribed_drugs_response', old('current_prescribed_drugs_response') , ['class' => 'form-control','rows' => 4 ,'placeholder' => trans('validation.attributes.backend.access.profiles.current_prescribed_drugs_response')]) }}
                        </div>
                   </div> --}}


        </div>

        </div>
        <!--col-->
    </div>
    <!--row-->
</div>
<!--card-body-->

@section('pagescript')
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $('input[id$=tbDate],input[id$=last_receipt]').datepicker({
            dateFormat: 'yy-mm-dd'
        });
    </script>
@stop