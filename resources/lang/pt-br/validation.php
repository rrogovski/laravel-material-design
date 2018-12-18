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

    'accepted'             => 'O :attribute deve ser aceito.',
    'active_url'           => 'O :attribute não é uma URL válida.',
    'after'                => 'O :attribute deve ser uma data depois de :date.',
    'after_or_equal'       => 'O :attribute deve ser uma data depois ou igual a :date.',
    'alpha'                => 'O :attribute deve conter apenas letras.',
    'alpha_dash'           => 'O :attribute deve conter apenas letras, números e traços.',
    'alpha_num'            => 'O :attribute deve conter apenas letras e números.',
    'array'                => 'O :attribute deve ser um array.',
    'before'               => 'O :attribute deve ser uma data antes de :date.',
    'before_or_equal'      => 'O :attribute must be a date before or equal to :date.',
    'between'              => [
        'numeric' => 'O :attribute must be between :min and :max.',
        'file'    => 'O :attribute must be between :min and :max kilobytes.',
        'string'  => 'O :attribute must be between :min and :max characters.',
        'array'   => 'O :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'O :attribute field must be true or false.',
    'confirmed'            => 'O :attribute confirmation does not match.',
    'date'                 => 'O :attribute is not a valid date.',
    'date_format'          => 'O :attribute does not match the format :format.',
    'different'            => 'O :attribute and :other must be different.',
    'digits'               => 'O :attribute must be :digits digits.',
    'digits_between'       => 'O :attribute must be between :min and :max digits.',
    'dimensions'           => 'O :attribute has invalid image dimensions.',
    'distinct'             => 'O :attribute field has a duplicate value.',
    'email'                => 'O :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'file'                 => 'O :attribute must be a file.',
    'filled'               => 'O :attribute field must have a value.',
    'image'                => 'O :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'O :attribute field does not exist in :other.',
    'integer'              => 'O :attribute must be an integer.',
    'ip'                   => 'O :attribute must be a valid IP address.',
    'json'                 => 'O :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'O :attribute may not be greater than :max.',
        'file'    => 'O :attribute may not be greater than :max kilobytes.',
        'string'  => 'O :attribute may not be greater than :max characters.',
        'array'   => 'O :attribute may not have more than :max items.',
    ],
    'mimes'                => 'O :attribute must be a file of type: :values.',
    'mimetypes'            => 'O :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'O :attribute must be at least :min.',
        'file'    => 'O :attribute must be at least :min kilobytes.',
        'string'  => 'O :attribute must be at least :min characters.',
        'array'   => 'O :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'O :attribute must be a number.',
    'present'              => 'O :attribute field must be present.',
    'regex'                => 'O :attribute format is invalid.',
    'required'             => 'O :attribute field is required.',
    'required_if'          => 'O :attribute field is required when :other is :value.',
    'required_unless'      => 'O :attribute field is required unless :other is in :values.',
    'required_with'        => 'O :attribute field is required when :values is present.',
    'required_with_all'    => 'O :attribute field is required when :values is present.',
    'required_without'     => 'O :attribute field is required when :values is not present.',
    'required_without_all' => 'O :attribute field is required when none of :values are present.',
    'same'                 => 'O :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'O :attribute must be :size.',
        'file'    => 'O :attribute must be :size kilobytes.',
        'string'  => 'O :attribute must be :size characters.',
        'array'   => 'O :attribute must contain :size items.',
    ],
    'string'               => 'O :attribute must be a string.',
    'timezone'             => 'O :attribute must be a valid zone.',
    'unique'               => 'O :attribute has already been taken.',
    'uploaded'             => 'O :attribute failed to upload.',
    'url'                  => 'O :attribute format is invalid.',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

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

    'attributes' => [],

];
