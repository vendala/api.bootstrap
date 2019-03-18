<?php

namespace App\Http\Requests\User;

use Dingo\Api\Http\FormRequest;

/**
 * Class StorageRequest.
 *
 * @package App\Http\Requests\User
 */
class StorageRequest extends FormRequest
{
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