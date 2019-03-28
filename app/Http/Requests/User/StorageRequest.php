<?php

namespace App\Http\Requests\User;

use Dingo\Api\Http\FormRequest;


/**
 * Class StorageRequest.
 *
 * @property string name
 * @property string email
 * @property mixed password
 *
 * @package App\Http\Requests\User
 */
class StorageRequest extends FormRequest
{
    /**
     * @return mixed
     */
    public function authorize()
    {
        return app('auth')->guest();

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'max:196', 'confirmed']
        ];
    }
}
