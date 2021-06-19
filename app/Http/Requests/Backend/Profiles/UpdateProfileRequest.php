<?php

namespace App\Http\Requests\Backend\Profiles;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\FilterStringRule;

class UpdateProfileRequest extends FormRequest
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
            'patient_id'=>['numeric','required','not_in:0'],
            'phone_number'=>['required','min:11','numeric','not_in:0'],
            'date_of_birth'=>['required','date'],
            'status'=>['numeric','required','not_in:0'],
            'therapist'=>['string','required', new FilterStringRule],
            'address'=>['string','required', new FilterStringRule],
            'last_receipt'=>['required','date'],
            'last_receipt_value'=>['string','required', new FilterStringRule],
            'payment_type'=>['numeric','required','not_in:0'],
            'chronic_diseases'=>['string','required', new FilterStringRule],
            'gender'=>['numeric','required','not_in:0'],
            'age'=>['numeric','required','not_in:0','min:1'],
            'height'=>['numeric','not_in:0','min:1'],
            'weight'=>['numeric','not_in:0','min:1'],
            'patient_complain'=>['string','nullable', new FilterStringRule],
            'history_of_patient_disorder'=>['string','nullable', new FilterStringRule],
            'past_medical_history'=>['string','nullable', new FilterStringRule],
            'family_history'=>['string','nullable', new FilterStringRule],
            'diagnoses_case'=>['string','nullable', new FilterStringRule],
            'use_drug'=>['numeric'],
            'sport'=>['numeric'],
            'cohols'=>['numeric'],
            'smoke'=>['numeric'],
            'caffeine'=>['numeric'],
            'other_life_style'=>['string','nullable', new FilterStringRule],
            'immunization'=>['string','nullable', new FilterStringRule],
            'allergies_drugs'=>['string','nullable', new FilterStringRule],
            'environment'=>['string','nullable', new FilterStringRule],
            'past_history_drugs'=>['string','nullable', new FilterStringRule],
            'past_history_drugs_response'=>['string','nullable', new FilterStringRule],
            'current_prescribed_drugs'=>['string','nullable', new FilterStringRule],
            'current_prescribed_drugs_response'=>['string','nullable', new FilterStringRule],
        ];
    }
}
