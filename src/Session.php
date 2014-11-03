<?php namespace NovusJuris\Clio;

class Session
{
    function __construct( array $credentials )
    {
        $this->base_scope_url = 'https://app.goclio.com';
        $this->access_token   = $credentials['access_token'];
        $this->client_id      = $credentials['client_id'];
        $this->client_secret  = $credentials['client_secret'];
        $this->end_points     = [];
    }

    function document_versions( $document_id )
    {
        if ( !isset( $this->end_points['document_versions'][ $document_id ] ) )
        {
            $e = new Api\DocumentVersion( $this );
            $e->document_id = $document_id;
            $this->end_points['document_versions'][ $document_id ] = $e;
        }

        return $this->end_points['document_versions'][ $document_id ];
    }

}