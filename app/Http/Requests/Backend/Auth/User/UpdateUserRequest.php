<?php

namespace App\Http\Requests\Backend\Auth\User;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\FilterStringRule;

/**
 * Class UpdateUserRequest.
 */
class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('edit-user');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code'=>['required','string','max:5',new FilterStringRule],
            'first_name' => 'required|max:255',
            'phone_number'=>'required|min:11|numeric',
            // 'email' => 'required|email|max:255|unique:users,email,'.$this->segment(4),
            'assignees_roles' => 'required',
            'permissions' => 'required',
        ];
    }

    /**
     * Get the validation massages that apply to the rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'assignees_roles' => 'Please Select Role',
        ];
    }
}
