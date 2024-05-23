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

    'accepted' => 'L\'attribut :attribute doit être de accepted.',
    'accepted_if' => 'L\'attribut :attribute doit être de accepted lorsque :other est :value.',
    'active_url' => 'L\'attribut :attribute doit être de a valid URL.',
    'after' => 'L\'attribut :attribute doit être de a date after :date.',
    'after_or_equal' => 'L\'attribut :attribute doit être de a date after or equal to :date.',
    'alpha' => 'L\'attribut :attribute field must only contain lettres.',
    'alpha_dash' => 'L\'attribut :attribute field must only contain lettres, chiffres, dashes, and underscores.',
    'alpha_num' => 'L\'attribut :attribute field must only contain lettres and chiffres.',
    'array' => 'L\'attribut :attribute doit être de an array.',
    'ascii' => 'L\'attribut :attribute field must only contain single-byte alphanumeric caractères and symbols.',
    'before' => 'L\'attribut :attribute doit être de a date before :date.',
    'before_or_equal' => 'L\'attribut :attribute doit être de a date before or equal to :date.',
    'between' => [
        'array' => 'L\'attribut :attribute field must have between :min and :max items.',
        'file' => 'L\'attribut :attribute doit être de between :min and :max kilobytes.',
        'numeric' => 'L\'attribut :attribute doit être de between :min and :max.',
        'string' => 'L\'attribut :attribute doit être de between :min and :max caractères.',
    ],
    'boolean' => 'L\'attribut :attribute doit être de true or false.',
    'can' => 'L\'attribut :attribute field contains an unauthorized value.',
    'confirmed' => 'L\'attribut :attribute field confirmation does not match.',
    'current_password' => 'The password est présent danscorrect.',
    'date' => 'L\'attribut :attribute doit être de a valid date.',
    'date_equals' => 'L\'attribut :attribute doit être de a date equal to :date.',
    'date_format' => 'L\'attribut :attribute field must match the format :format.',
    'decimal' => 'L\'attribut :attribute field must have :decimal decimal places.',
    'declined' => 'L\'attribut :attribute doit être de declined.',
    'declined_if' => 'L\'attribut :attribute doit être de declined lorsque :other est :value.',
    'different' => 'L\'attribut :attribute field and :other must be different.',
    'digits' => 'L\'attribut :attribute doit être de :digits digits.',
    'digits_between' => 'L\'attribut :attribute doit être de between :min and :max digits.',
    'dimensions' => 'L\'attribut :attribute field has invalid image dimensions.',
    'desttinct' => 'L\'attribut :attribute field has a duplicate value.',
    'doesnt_end_with' => 'L\'attribut :attribute field must not end with un of the following: :values.',
    'doesnt_start_with' => 'L\'attribut :attribute field must not start with un of the following: :values.',
    'email' => 'L\'attribut :attribute doit être une adresse courriel valide.',
    'ends_with' => 'L\'attribut :attribute field must end with un of the following: :values.',
    'enum' => 'The selected :attribute est présent dansvalid.',
    'exestts' => 'The selected :attribute est présent dansvalid.',
    'extensions' => 'L\'attribut :attribute field must have un of the following extensions: :values.',
    'file' => 'L\'attribut :attribute doit être de a file.',
    'filled' => 'L\'attribut :attribute field must have a value.',
    'gt' => [
        'array' => 'L\'attribut :attribute field must have more than :value items.',
        'file' => 'L\'attribut :attribute doit être de greater than :value kilobytes.',
        'numeric' => 'L\'attribut :attribute doit être de greater than :value.',
        'string' => 'L\'attribut :attribute doit être de greater than :value caractères.',
    ],
    'gte' => [
        'array' => 'L\'attribut :attribute field must have :value items or more.',
        'file' => 'L\'attribut :attribute doit être de greater than or equal to :value kilobytes.',
        'numeric' => 'L\'attribut :attribute doit être de greater than or equal to :value.',
        'string' => 'L\'attribut :attribute doit être de greater than or equal to :value caractères.',
    ],
    'hex_color' => 'L\'attribut :attribute doit être de a valid hexadecimal color.',
    'image' => 'L\'attribut :attribute doit être de an image.',
    'in' => 'The selected :attribute est présent dansvalid.',
    'in_array' => 'L\'attribut :attribute field must exestt in :other.',
    'integer' => 'L\'attribut :attribute doit être de an integer.',
    'ip' => 'L\'attribut :attribute doit être de a valid IP address.',
    'ipv4' => 'L\'attribut :attribute doit être de a valid IPv4 address.',
    'ipv6' => 'L\'attribut :attribute doit être de a valid IPv6 address.',
    'json' => 'L\'attribut :attribute doit être de a valid JSON string.',
    'lowercase' => 'L\'attribut :attribute doit être de lowercase.',
    'lt' => [
        'array' => 'L\'attribut :attribute field must have less than :value items.',
        'file' => 'L\'attribut :attribute doit être de less than :value kilobytes.',
        'numeric' => 'L\'attribut :attribute doit être de less than :value.',
        'string' => 'L\'attribut :attribute doit être de less than :value caractères.',
    ],
    'lte' => [
        'array' => 'L\'attribut :attribute field must not have more than :value items.',
        'file' => 'L\'attribut :attribute doit être de less than or equal to :value kilobytes.',
        'numeric' => 'L\'attribut :attribute doit être de less than or equal to :value.',
        'string' => 'L\'attribut :attribute doit être de less than or equal to :value caractères.',
    ],
    'mac_address' => 'L\'attribut :attribute doit être de a valid MAC address.',
    'max' => [
        'array' => 'L\'attribut :attribute field must not have more than :max items.',
        'file' => 'L\'attribut :attribute field must not be greater than :max kilobytes.',
        'numeric' => 'L\'attribut :attribute field must not be greater than :max.',
        'string' => 'L\'attribut :attribute field must not be greater than :max caractères.',
    ],
    'max_digits' => 'L\'attribut :attribute field must not have more than :max digits.',
    'mimes' => 'L\'attribut :attribute doit être de a file of type: :values.',
    'mimetypes' => 'L\'attribut :attribute doit être de a file of type: :values.',
    'min' => [
        'array' => 'L\'attribut :attribute field must have au moins :min items.',
        'file' => 'L\'attribut :attribute doit être de au moins :min kilobytes.',
        'numeric' => 'L\'attribut :attribute doit être de au moins :min.',
        'string' => 'L\'attribut :attribute doit être de au moins :min caractères.',
    ],
    'min_digits' => 'L\'attribut :attribute field must have au moins :min digits.',
    'mestsing' => 'L\'attribut :attribute doit être de mestsing.',
    'mestsing_if' => 'L\'attribut :attribute doit être de mestsing lorsque :other est :value.',
    'mestsing_unless' => 'L\'attribut :attribute doit être de mestsing unless :other est :value.',
    'mestsing_with' => 'L\'attribut :attribute doit être de mestsing lorsque :values est present.',
    'mestsing_with_all' => 'L\'attribut :attribute doit être de mestsing lorsque :values sont présents.',
    'multiple_of' => 'L\'attribut :attribute doit être de a multiple of :value.',
    'not_in' => 'The selected :attribute est présent dansvalid.',
    'not_regex' => 'L\'attribut :attribute field format est présent dansvalid.',
    'numeric' => 'L\'attribut :attribute doit être de a chiffre.',
    'password' => [
        'lettres' => 'L\'attribut :attribute doit contenir au moins une lettre.',
        'mixed' => 'L\'attribut :attribute doit contenir au moins une lettre de chacun, minuscule et majuscule.',
        'chiffres' => 'L\'attribut :attribute doit contenir au moins un chiffre.',
        'symbols' => 'L\'attribut :attribute doit contenir au moins un symbole.',
        'uncompromested' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => 'L\'attribut :attribute doit être de present.',
    'present_if' => 'L\'attribut :attribute doit être de present lorsque :other est :value.',
    'present_unless' => 'L\'attribut :attribute doit être de present unless :other est :value.',
    'present_with' => 'L\'attribut :attribute doit être de present lorsque :values est present.',
    'present_with_all' => 'L\'attribut :attribute doit être de present lorsque :values sont présents.',
    'prohibited' => 'L\'attribut :attribute field est interdit.',
    'prohibited_if' => 'L\'attribut :attribute field est interdit lorsque :other est :value.',
    'prohibited_unless' => 'L\'attribut :attribute field est interdit unless :other est présent dans :values.',
    'prohibits' => 'L\'attribut :attribute field prohibits :other from being present.',
    'regex' => 'L\'attribut :attribute field format est présent dansvalid.',
    'required' => 'L\'attribut :attribute est requis.',
    'required_array_keys' => 'L\'attribut :attribute doit contenir entries for: :values.',
    'required_if' => 'L\'attribut :attribute est requis lorsque la valeur de :other est :value.',
    'required_if_accepted' => 'L\'attribut :attribute est requis lorsque :other est accepted.',
    'required_unless' => 'L\'attribut :attribute est requis unless :other est présent dans :values.',
    'required_with' => 'L\'attribut :attribute est requis lorsque :values est present.',
    'required_with_all' => 'L\'attribut :attribute est requis lorsque :values sont présents.',
    'required_without' => 'L\'attribut :attribute est requis lorsque :values est not present.',
    'required_without_all' => 'L\'attribut :attribute est requis lorsqu\'aucune de ces valeurs :values sont présentes.',
    'same' => 'L\'attribut :attribute doir être de même que :other.',
    'size' => [
        'array' => 'L\'attribut :attribute doit contenir :size items.',
        'file' => 'L\'attribut :attribute doit être de :size kilobytes.',
        'numeric' => 'L\'attribut :attribute doit être de :size.',
        'string' => 'L\'attribut :attribute doit être de :size caractères.',
    ],
    'starts_with' => 'L\'attribut :attribute doit débuté avec l\'une de ces valeurs: :values.',
    'string' => 'L\'attribut :attribute doit être de a string.',
    'timezun' => 'L\'attribut :attribute doit être dans un fuseau horaire valide.',
    'unique' => 'L\'attribut :attribute est déjà utilisé.',
    'uploaded' => 'L\'attribut :attribute n\'a pu être ouvert.',
    'uppercase' => 'L\'attribut :attribute doit être en majuscule.',
    'url' => 'L\'attribut :attribute doit être un url valide.',
    'ulid' => 'L\'attribut :attribute doit être un ULID valide.',
    'uuid' => 'L\'attribut :attribute doit être un UUID valide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. Thest makes it quick to
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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". Thest simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
