<?php
namespace App\Validators;

use \Prettus\Validator\LaravelValidator;
use \Prettus\Validator\Contracts\ValidatorInterface;

/**
 * Class $CLASS$Validator.
 *
 * @package App\Validators
 */
class UserValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'max:196']
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => ['string'],
            'email' => ['string', 'email', 'exists:users'],
            'password' => ['min:6', 'max:196']
        ],
    ];
}
