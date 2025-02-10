<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'different'             => trans('messages.validation_different'),
    'max'                   => [
        'string'            => trans('messages.validation_max_string'),
    ],
    'max'                  => [
        'numeric' => trans('messages.validation_max_numeric'),
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => trans('messages.validation_max_string'),
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'min'                   => [
        'string'            => trans('messages.validation_min_string'),
    ],
    'required'              => trans('messages.validation_required'),
    'date_format'           => trans('messages.validation_date_format'),
    'alpha_dash'            => trans('messages.validation_alpha_dash'),
    'unique'                => trans('messages.validation_unique'),
    'in'                    => trans('messages.validation_in'),
    'same'                  => trans('messages.validation_same'),
    'before'                => trans('messages.validation_before'),
    'after'                 => trans('messages.validation_after'),
    'exists'                => trans('messages.validation_exist'),
    'required_without'      => trans('messages.validation_required_without'),
    'required_with'         => trans('messages.validation_required_with'),
    'required_if'         => trans('messages.validation_required_if'),
    'size'                  => [
        'string'            => trans('messages.validation_size_string'),
    ],


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => array(
        'old_password' => array(
            'valid_password' => trans('messages.valid_password'),
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'new_password' => 'ពាក្យសម្ងាត់ថ្មី',
        'old_password' => 'ពាក្យសម្ងាត់បច្ចុប្បន្ន',
        'new_password_confirmation' => 'បញ្ជាក់ពាក្យសម្ងាត់ថ្មី់',
    ],

];
