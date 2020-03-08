<?php

namespace App\Http\Requests\Api;


class UserInfoRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'between:3,25|regex:/^[A-Za-z0-9\-\_]+$/' ,
            'real_name' => 'string|min:3',
            'gender' => 'required|numeric'
        ];
    }
}
