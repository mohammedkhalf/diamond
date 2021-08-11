<?php

namespace App\Http\Requests\Backend\Orders;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\FilterStringRule;

class UpdateOrdersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('update-order');
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
            'drug_id'=>['numeric','required','not_in:0','min:1'],
            'amount'=>['numeric','required','not_in:0','min:1'],
            'dose'=>['string','required','max:255'],
        ];
    }
}
