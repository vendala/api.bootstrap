<?php
namespace App\Validators;

use \Prettus\Validator\LaravelValidator;
use \Prettus\Validator\Contracts\ValidatorInterface;

/**
 * Class $CLASS$Validator.
 *
 * @package App\Validators
 */
class ProfileValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'user_id' => ['require']
        ],
        ValidatorInterface::RULE_UPDATE => [
            'avatar' => ['url']
        ],
    ];
}
