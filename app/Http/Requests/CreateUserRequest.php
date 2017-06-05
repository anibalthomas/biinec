<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
          'avatar' => 'image',
          'name' => 'required',
          'email' => 'email|required|unique:users,email',
          'password' => 'required|confirmed',         // la validacion confirme puede ser usada con email_confirmation y email
          'roles' => 'required',
        ];
    }
}
