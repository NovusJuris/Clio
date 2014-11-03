<?php namespace NovusJuris\Clio;

class Authorization {

    public function authorize_url($redirect_uri, $state = NULL)
    {
        $params = ['response_type' => 'code',
            'client_id' => self::
        ]

        $params['state'] = $state ?: NULL;

    }

}