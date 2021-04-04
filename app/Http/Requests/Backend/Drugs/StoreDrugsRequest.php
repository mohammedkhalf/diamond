<?php

namespace App\Http\Requests\Backend\Drugs;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\FilterStringRule;

class StoreDrugsRequest extends FormRequest
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
            'name'=>['string',new FilterStringRule],
            'manufacture'=>['string',new FilterStringRule],
            'amount'=>['integer','not_in:0','min:10'],
            'price'=>['numeric','not_in:0'],
        ];
    }
}
