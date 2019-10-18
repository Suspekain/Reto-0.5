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
    'accepted'             => 'Eremua: atributua onartu behar da.',
    'active_url'           => 'The: atributu eremua ez da baliozko URL bat.',
    'after'                => 'The: atributu-eremua ondorengo data izan behar da: data.',
    'after_or_equal'       => 'The: atributu-eremua data bat beranduago edo berdina izan behar da: data.',
    'alpha'                => ': Atributu eremuak letrak baino ezin ditu eduki.',
    'alpha_dash'           => ': Atributu-eremuak hizkiak, zenbakiak, marratxoak eta azpimarrak bakarrik izan ditzake.',
    'alpha_num'            => 'The: atributu-eremuak letrak eta zenbakiak baino ezin ditu eduki.',
    'array'                => 'Eremua: atributuak array bat izan behar du.',
    'before'               => 'The: atributu-eremua aurreko data izan behar da: data.',
    'before_or_equal'      => 'The: atributu-eremua aurreko data edo berdina izan behar da: data',
    'between'              => [
        'numeric' => 'The: atributu-eremuaren arteko balioa izan behar da: min eta: max.',
        'file'    => 'Fitxategia: atributuak: min eta: max kilobytes izan behar du.',
        'string'  => 'The: atributu-eremuak hauek ditu: min eta: max karaktereak.',
        'array'   => 'The: atributu-eremuak elementu hauek izan behar ditu: min eta: max.',
    ],
    'boolean'              => 'The: atributu-eremua egia edo gezurra izan behar da..',
    'confirmed'            => 'Honako berrespen eremua: atributua ez dator bat.',
    'date'                 => ': Atributu eremua ez dator baliozko datarekin.',
    'date_equals'          => 'Eremua: atributuak data berdina izan behar du.',
    'date_format'          => 'Eremua: atributua ez dator data formatuarekin: formatua.',
    'different'            => ': Atributua eta: beste eremuak desberdinak izan behar dute.',
    'digits'               => 'The: atributu-eremua zenbaki bat izan behar da: digituak.',
    'digits_between'       => 'Honek: atributu-eremuak honako hauek izan behar ditu: min eta: digitu maximoak',
    'dimensions'           => ': Atributu-eremuak irudiaren dimentsio baliogabeak ditu.',
    'distinct'             => 'The: atributu eremuak balio bikoiztua du',
    'email'                => 'The: atributu-eremuak helbide elektroniko baliozkoa izan behar du.',
    'ends_with'            => 'The: atributu-eremua balore hauetako batekin :: baloreekin amaitu behar da',
    'exists'               => 'Eremua: hautatutako atributua ez da existitzen.',
    'file'                 => 'The: atributu eremua fitxategi bat izan behar da.',
    'filled'               => 'The: atributu-eremuak balioa izan behar du.',
    'gt'                   => [
        'numeric' => 'The: atributu-eremua hau baino handiagoa izan behar da: balioa.',
        'file'    => 'Fitxategia: atributuak baino gehiago pisatu behar du: kilobyte balioa.',
        'string'  => 'The: atributu-eremuak hau baino gehiago izan behar du: balioa duten karaktereak.',
        'array'   => ': Atributu-eremuak hau baino gehiago izan behar du: balio elementuak.',
    ],
    'gte'                  => [
        'numeric' => 'The: atributu-eremua hau baino handiagoa edo berdina izan behar da: balioa.',
        'file'    => 'Fitxategia: atributuak pisua izan behar du: balioa edo kilobyte gehiago.',
        'string'  => 'The: atributu-eremuak eduki behar du: balioa edo karaktere gehiago56',
        'array'   => 'The: atributu-eremuak elementu hauek izan behar ditu: balioa edo gehiago.',
    ],
    'image'                => 'The: atributu eremua irudia izan behar da.',
    'in'                   => 'The: atributu eremua baliogabea da.',
    'in_array'             => 'Ez da atributu eremua: bestean.',
    'integer'              => 'The: atributu-eremua oso bat izan behar du.',
    'ip'                   => 'The: atributu-eremuak IP helbide balioduna izan behar du.',
    'ipv4'                 => 'The: atributu-eremuak IPv4 helbide balioduna izan behar du.',
    'ipv6'                 => 'The: atributu-eremuak IPv6 helbide baliozkoa izan behar du.',
    'json'                 => 'The: atributu-eremuak JSON baliozko katea izan behar du.',
    'lt'                   => [
        'numeric' => 'The: atributu eremua hau baino txikiagoa izan behar da: balioa',
        'file'    => 'Fitxategia: atributuak hau baino gutxiago pisatu behar du: kilobyte balioa.',
        'string'  => 'The: atributu-eremuak hau baino gutxiago izan behar du: balioa duten karaktereak.',
        'array'   => 'The: atributu-eremuak hau baino gutxiago izan behar du: balio elementuak.',
    ],
    'lte'                  => [
        'numeric' => ': Atributu-eremua berdina edo txikiagoa izan behar da: balioa..',
        'file'    => 'Fitxategia: atributuak pisua izan behar du: kilobyte balioa edo gutxiago.',
        'string'  => 'The: atributu-eremuak eduki behar du: balioa edo karaktere gutxiago.',
        'array'   => 'The: atributu-eremuak elementu hauek izan behar ditu: balioa edo gutxiago.',
    ],
    'max'                  => [
        'numeric' => 'The: atributu eremua ez da hau baino handiagoa izan behar: max.',
        'file'    => 'Fitxategia: atributuak ez du hau baino gehiago pisatu behar: max kilobyte.',
        'string'  => ': Atributu-eremuak ez du hau baino gehiago izan behar: max karaktereak.',
        'array'   => ': Atributu-eremuak ez du hau baino gehiago izan behar: max elementuak.',
    ],
    'mimes'                => 'The: atributu eremua :: balore motako fitxategia izan behar da.',
    'mimetypes'            => 'The: atributu eremua :: balore motako fitxategia izan behar da.',
    'min'                  => [
        'numeric' => 'The: atributu eremua gutxienez izan behar da: min.',
        'file'    => 'Fitxategia: atributuak gutxienez pisatu behar du: min kilobyte.',
        'string'  => 'The: atributu-eremuak gutxienez: min karaktereak izan behar ditu.',
        'array'   => ': Atributu-eremuak gutxienez: min elementuak eduki behar ditu',
    ],
    'not_in'               => 'Eremua: hautatutako atributua baliogabea da.',
    'not_regex'            => ': Atributu eremuaren formatua baliogabea da.',
    'numeric'              => 'The: atributu-eremuak zenbaki bat izan behar du.',
    'password'             => 'Pasahitza okerra da.',
    'present'              => 'The: atributu eremua egon behar da.',
    'regex'                => ': Atributu eremuaren formatua baliogabea da.',
    'required'             => 'The: atributu eremua derrigorrezkoa da.',
    'required_if'          => 'The: atributu eremua derrigorrezkoa da: beste eremua hau da: balioa.',
    'required_unless'      => 'The: atributu eremua beharrezkoa da ezean: besteetan aurkitzen da: balioetan.',
    'required_with'        => 'The: atributu eremua derrigorrezkoa da: balioak daudenean.',
    'required_with_all'    => 'The: atributu eremua derrigorrezkoa da: balioak daudenean.',
    'required_without'     => 'The: atributu eremua derrigorrezkoa da: balioak daudenean.',
    'required_without_all' => ': Atributu eremua derrigorrezkoa da: balio-eremuak ez daudenean',
    'same'                 => ': Atributua eta: beste eremuek bat etorri behar dute.',
    'size'                 => [
        'numeric' => 'Eremua: atributua izan behar da: tamaina',
        'file'    => 'Fitxategia: atributuak pisua izan behar du: tamaina kilobyteak.',
        'string'  => 'The: atributu-eremuak hauek izan behar ditu: tamainako karaktereak.',
        'array'   => 'The: atributu-eremuak hauek izan behar ditu: tamainako elementuak.',
    ],
    'starts_with'          => 'The: atributu-eremua balore hauetako batekin balore batekin hasi behar da :: balioak',
    'string'               => 'The: atributu eremua karaktere kate bat izan behar da.',
    'timezone'             => 'The: atributu-eremuak ordu-zona baliozkoa izan behar du',
    'unique'               => 'Dagoeneko erabiltzen da: atributu eremuaren balioa.',
    'uploaded'             => 'Eremua: ezin izan da kargatu atributua.',
    'url'                  => ': Atributu eremuaren formatua baliogabea da.',
    'uuid'                 => 'The: atributu-eremuak UUID baliozkoa izan behar du',
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