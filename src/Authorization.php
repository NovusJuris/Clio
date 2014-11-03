<?php namespace NovusJuris\Clio;

class Authorization
{
    public function authorize_url( $redirect_uri, $state = NULL )
    {
        $params = array(
			'response_type' => 'code',
			'client_id'     => $this->client_id,
			'redirect_uri'  => $redirect_uri
        );

        if ( $state )
	        $params['state'] = $state;

	    return $this->base_uri('/oauth/authorize', $params);
    }
}