<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.avatar')</th>
                <td><img src="{{ $profileData->users->picture }}" class="user-profile-image" /></td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.id')</th>
                <td>{{ $profileData->id }}</td>
            </tr>


            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.name')</th>
                <td>{{ $profileData->users->name }}</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.email')</th>
                <td>{{ $profileData->users->email }}</td>
            </tr>


            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.phone_number')</th>
                <td>{{ $profileData->phone_number }}</td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.gender')</th>
                <td>
                    {{ $profileData->gender == '1' ?
                      trans('validation.attributes.backend.access.profiles.Male') :
                      trans('validation.attributes.backend.access.profiles.Female')
                    }}
                </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.date_of_dirth')</th>
                <td>  {{ $profileData->date_of_birth }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.status')</th>
                <td>  {{ $profileData->status == '1' ?
                        trans('labels.backend.access.profiles.table.Single') :
                        trans('labels.backend.access.profiles.table.Married')
                      }}
                </td>
            </tr>


            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.age')</th>
                <td>{{ $profileData->age }} @lang('validation.attributes.backend.access.profiles.year')</td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.height')</th>
                <td>{{ $profileData->height }} @lang('validation.attributes.backend.access.profiles.cm')</td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.weight')</th>
                <td>{{ $profileData->weight }} @lang('validation.attributes.backend.access.profiles.kg')</td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.therapist')</th>
                <td>{{ $profileData->therapist }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.address')</th>
                <td>{{ $profileData->address }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.last_receipt')</th>
                <td>{{ $profileData->last_receipt }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.last_receipt_value')</th>
                <td>{{ $profileData->last_receipt_value }} @lang('validation.attributes.backend.access.profiles.EG')</td>
            </tr>


            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.type_of_customer')</th>
                <td>
                    @if($profileData->payment_type == '1')
                      {{ trans('validation.attributes.backend.access.profiles.cash') }}
                    @elseif ($profileData->payment_type == '2')
                      {{ trans('validation.attributes.backend.access.profiles.contracts') }}
                    @else
                      {{ trans('validation.attributes.backend.access.profiles.postpaid') }}
                    @endif
                </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.chronic_diseases')</th>
                <td>{{ $profileData->chronic_diseases }} </td>
            </tr>


            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.patient_complain')</th>
                <td>{{ $profileData->patient_complain }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.history_of_patient_disorder')</th>
                <td>{{ $profileData->history_of_patient_disorder }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.past_medical_history')</th>
                <td>{{ $profileData->past_medical_history }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.family_history')</th>
                <td>{{ $profileData->family_history }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.diagnoses_case')</th>
                <td>{{ $profileData->diagnoses_case }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.use_drug')</th>
                <td>{{ $profileData->use_drug == 1 ?  trans('validation.attributes.backend.access.profiles.yes')  :  trans('validation.attributes.backend.access.profiles.no') }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.sport')</th>
                <td>{{ $profileData->sport == 1 ? trans('validation.attributes.backend.access.profiles.yes')  :  trans('validation.attributes.backend.access.profiles.no') }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.cohols')</th>
                <td>{{ $profileData->cohols == 1 ? trans('validation.attributes.backend.access.profiles.yes')  :  trans('validation.attributes.backend.access.profiles.no') }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.smoke')</th>
                <td>{{ $profileData->smoke == 1 ? trans('validation.attributes.backend.access.profiles.yes')  :  trans('validation.attributes.backend.access.profiles.no') }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.caffeine')</th>
                <td>{{ $profileData->caffeine == 1 ? trans('validation.attributes.backend.access.profiles.yes')  :  trans('validation.attributes.backend.access.profiles.no') }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.other_life_style')</th>
                <td>{{ $profileData->other_life_style  }} </td>
            </tr>

            {{-- <tr>
                <th>@lang('validation.attributes.backend.access.profiles.immunization')</th>
                <td>{{ $profileData->immunization }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.allergies_drugs')</th>
                <td>{{ $profileData->allergies_drugs }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.environment')</th>
                <td>{{ $profileData->environment }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.past_history_drugs')</th>
                <td>{{ $profileData->past_history_drugs }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.past_history_drugs_response')</th>
                <td>{{ $profileData->past_history_drugs_response }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.current_prescribed_drugs')</th>
                <td>{{ $profileData->current_prescribed_drugs }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.current_prescribed_drugs_response')</th>
                <td>{{ $profileData->current_prescribed_drugs_response }} </td>
            </tr> --}}

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.created_at')</th>
                <td>{{  $profileData->created_at }} </td>
            </tr>


            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.updated_at')</th>
                <td>{{  $profileData->updated_at }} </td>
            </tr>

        </table>
    </div>
</div><!--table-responsive-->
