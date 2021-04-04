<div class="col">
    <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th>@lang('labels.backend.access.users.tabs.content.overview.avatar')</th>
                <td><img src="{{ $profileData->users->picture }}" class="user-profile-image" /></td>
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
                <th>@lang('labels.backend.access.users.tabs.content.overview.phone_number')</th>
                <td>{{ $profileData->users->phone_number }}</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.profiles.table.age')</th>
                <td>{{ $profileData->age }} year</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.profiles.table.height')</th>
                <td>{{ $profileData->height }} cm</td>
            </tr>

            <tr>
                <th>@lang('labels.backend.access.profiles.table.weight')</th>
                <td>{{ $profileData->weight }} kg</td>
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
                <td>{{ $profileData->use_drug == 1 ? 'Yes' : 'No' }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.sport')</th>
                <td>{{ $profileData->sport == 1 ? 'Yes' : 'No' }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.cohols')</th>
                <td>{{ $profileData->cohols == 1 ? 'Yes' : 'No' }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.smoke')</th>
                <td>{{ $profileData->smoke == 1 ? 'Yes' : 'No' }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.caffeine')</th>
                <td>{{ $profileData->caffeine == 1 ? 'Yes' : 'No' }} </td>
            </tr>

            <tr>
                <th>@lang('validation.attributes.backend.access.profiles.other_life_style')</th>
                <td>{{ $profileData->other_life_style  }} </td>
            </tr>

            <tr>
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
            </tr>

        </table>
    </div>
</div><!--table-responsive-->
