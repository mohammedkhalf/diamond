<?php

namespace App\Http\Requests\Backend\Profiles;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\FilterStringRule;

class StoreProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pateint_name'=>['string','required',new FilterStringRule],
            'phone_number'=>['required','min:11','numeric','not_in:0'],
            'date_of_birth'=>['date','nullable'],
            'status'=>['numeric','nullable'],
            'therapist'=>['string','nullable' ,new FilterStringRule],
            'address'=>['string','nullable', new FilterStringRule],
            'last_receipt'=>['nullable','date'],
            'last_receipt_value'=>['string','nullable', new FilterStringRule],
            'payment_type'=>['numeric','nullable'],
            'chronic_diseases'=>['string','nullable', new FilterStringRule],

            'gender'=>['numeric','nullable'],

            'age'=>['numeric','nullable','min:1'],

            'height'=>['numeric','not_in:0','nullable'],
            'weight'=>['numeric','not_in:0','nullable'],

            'patient_complain'=>['string','nullable', new FilterStringRule],
            // 'history_of_patient_disorder'=>['string','nullable', new FilterStringRule],
            // 'past_medical_history'=>['string','nullable', new FilterStringRule],
            // 'family_history'=>['string','nullable', new FilterStringRule],
            // 'diagnoses_case'=>['string','nullable', new FilterStringRule],
            // 'use_drug'=>['numeric'],
            // 'sport'=>['numeric'],
            // 'cohols'=>['numeric'],
            // 'smoke'=>['numeric'],
            // 'caffeine'=>['numeric'],
            // 'other_life_style'=>['string','nullable', new FilterStringRule],
            // 'immunization'=>['string','nullable', new FilterStringRule],
            // 'allergies_drugs'=>['string','nullable', new FilterStringRule],
            // 'environment'=>['string','nullable', new FilterStringRule],
            // 'past_history_drugs'=>['string','nullable', new FilterStringRule],
            // 'past_history_drugs_response'=>['string','nullable', new FilterStringRule],
            // 'current_prescribed_drugs'=>['string','nullable', new FilterStringRule],
            // 'current_prescribed_drugs_response'=>['string','nullable', new FilterStringRule],
        ];
    }

    public function messages()
    {
        return [
            'payment_type.required'=>trans('validation.attributes.backend.access.profiles.payment_type_required')
        ];

    }
}
