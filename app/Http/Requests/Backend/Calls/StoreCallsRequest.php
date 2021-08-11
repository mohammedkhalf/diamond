<?php

namespace App\Http\Requests\Backend\Calls;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\FilterStringRule;

class StoreCallsRequest extends FormRequest
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
            'name'=>['string','nullable',new FilterStringRule],
            'phone'=>['required','numeric','not_in:0','min:11'],
            'duration'=>['nullable','numeric'],
            'date_time'=>['required'],
        ];
    }
}
