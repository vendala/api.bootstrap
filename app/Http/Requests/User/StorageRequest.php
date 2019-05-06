<?php

namespace App\Http\Requests\User;

use Dingo\Api\Http\FormRequest;

use function app;

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
     * @return bool
     */
    public function authorize(): bool
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
